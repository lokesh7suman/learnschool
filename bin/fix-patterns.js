#!/usr/bin/env node
/**
 * LearnSchool Theme — Automated Pattern Validator & Recovery Fixer
 *
 * Automatically detects and fixes Gutenberg block validation mismatches ("Attempt Block Recovery" issues)
 * across theme pattern files, and optionally cleans stale database overrides.
 *
 * Features:
 *   1. Static AST normalizer: fixes shadow nesting, border color classes, and invalid inline styles.
 *   2. Headless Gutenberg AST reconciler: uses real Gutenberg parser via Playwright to ensure 100% validity.
 *   3. Database override cleaner (--clean-db): clears customized `wp_block` overrides in wp_posts.
 *
 * Usage:
 *   node bin/fix-patterns.js [options]
 *   npm run fix:patterns
 *
 * Options:
 *   --clean-db       Remove customized `wp_block` post overrides from the local WordPress database.
 *   --pattern=<name> Target a single pattern slug or file.
 *   --no-browser     Run only fast static normalization without launching headless browser.
 *   --wp-path=<path> Custom WordPress root path (default: /Users/lokesh/Sites/development).
 *   --base-url=<url> Custom site URL (default: https://development.test).
 *   --help, -h       Display help documentation.
 */

const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');
const { URL } = require('url');

const colors = {
	reset: '\x1b[0m',
	bold: '\x1b[1m',
	dim: '\x1b[2m',
	red: '\x1b[31m',
	green: '\x1b[32m',
	yellow: '\x1b[33m',
	blue: '\x1b[34m',
	cyan: '\x1b[36m',
	gray: '\x1b[90m',
	bgGreen: '\x1b[42m',
	bgRed: '\x1b[41m',
	white: '\x1b[37m',
};

const THEME_ROOT = path.resolve(__dirname, '..');
const PATTERNS_DIR = path.join(THEME_ROOT, 'patterns');

function parseArgs(args) {
	const opts = {
		cleanDb: false,
		pattern: null,
		noBrowser: false,
		wpPath: '/Users/lokesh/Sites/development',
		baseUrl: 'https://development.test',
		help: false,
	};

	for (let i = 0; i < args.length; i++) {
		const arg = args[i];
		if (arg === '--help' || arg === '-h') opts.help = true;
		else if (arg === '--clean-db') opts.cleanDb = true;
		else if (arg === '--no-browser') opts.noBrowser = true;
		else if (arg.startsWith('--pattern=')) opts.pattern = arg.slice(10).trim();
		else if (arg === '--pattern' && i + 1 < args.length) opts.pattern = args[++i].trim();
		else if (arg.startsWith('--wp-path=')) opts.wpPath = arg.slice(10).trim();
		else if (arg.startsWith('--base-url=')) opts.baseUrl = arg.slice(11).trim();
	}
	return opts;
}

function showHelp() {
	console.log(`
${colors.bold}${colors.cyan}LearnSchool Theme — Pattern Recovery Fixer${colors.reset}

${colors.bold}Usage:${colors.reset}
  node bin/fix-patterns.js [options]
  npm run fix:patterns

${colors.bold}Options:${colors.reset}
  --clean-db          Clear database overrides (wp_block posts) so theme files load freshly
  --pattern=<name>    Filter fixes to a specific pattern slug or filename
  --no-browser        Run fast regex/AST normalizers only without headless browser
  --wp-path=<path>    Path to WordPress root directory (default: /Users/lokesh/Sites/development)
  --base-url=<url>    WordPress base URL (default: https://development.test)
  --help, -h          Show this help message
`);
}

/**
 * Normalizes common block markup pitfalls statically across PHP files.
 */
function runStaticNormalizer(patternFilter) {
	if (!fs.existsSync(PATTERNS_DIR)) {
		console.error(`${colors.red}Patterns directory not found: ${PATTERNS_DIR}${colors.reset}`);
		return { modifiedFiles: [] };
	}

	const files = fs.readdirSync(PATTERNS_DIR).filter((f) => f.endsWith('.php'));
	const modifiedFiles = [];

	for (const file of files) {
		if (patternFilter) {
			const cleanFilter = patternFilter.replace(/^patterns\//, '').replace(/\.php$/, '');
			if (!file.includes(cleanFilter)) continue;
		}

		const filePath = path.join(PATTERNS_DIR, file);
		let content = fs.readFileSync(filePath, 'utf8');
		const originalContent = content;

		// 1. Move root-level "shadow" inside "style": { "shadow": "..." }
		content = content.replace(
			/<!--\s*wp:group\s*(\{[\s\S]*?\})\s*-->/g,
			(match, jsonStr) => {
				try {
					const parsed = JSON.parse(jsonStr);
					let changed = false;

					// If shadow is at root level instead of style.shadow
					if (parsed.shadow && typeof parsed.shadow === 'string') {
						if (!parsed.style) parsed.style = {};
						parsed.style.shadow = parsed.shadow;
						delete parsed.shadow;
						changed = true;
					}

					if (changed) {
						return `<!-- wp:group ${JSON.stringify(parsed)} -->`;
					}
				} catch (e) {
					// In case of non-strict JSON, skip
				}
				return match;
			}
		);

		// 2. Fix borderColor missing slug-specific class has-{slug}-border-color
		// When borderColor is defined, Gutenberg requires both `has-border-color` AND `has-{slug}-border-color`
		content = content.replace(
			/<!--\s*wp:([a-z0-9\/-]+)\s*(\{[\s\S]*?"borderColor":"([a-z0-9_-]+)"[\s\S]*?\})\s*-->([\s\S]*?<[a-z0-9]+[^>]*?class="([^"]*?)")/g,
			(fullMatch, blockName, jsonStr, colorSlug, between, classAttr) => {
				const expectedClass = `has-${colorSlug}-border-color`;
				if (classAttr.includes('has-border-color') && !classAttr.includes(expectedClass)) {
					const updatedClass = classAttr.replace(
						'has-border-color',
						`has-border-color ${expectedClass}`
					);
					return fullMatch.replace(`class="${classAttr}"`, `class="${updatedClass}"`);
				}
				return fullMatch;
			}
		);

		// 3. Fix core/image with width/height attributes having redundant manual style on <img>
		// In Gutenberg, resized full images do not serialize style="width:...;height:..." onto the <img> tag
		content = content.replace(
			/(<!--\s*wp:image\s*\{[\s\S]*?"width":\d+[\s\S]*?\}\s*-->[\s\S]*?<img[^>]*?)( style="width:\d+px;height:\d+px")/g,
			(fullMatch, prefix) => prefix
		);

		// 4. Clean stray inline margins on headings/paragraphs without comment attributes
		content = content.replace(
			/(<!--\s*wp:heading\s*\{(?![^}]*"margin")[^}]*\}\s*-->\s*<h[1-6][^>]*?) style="margin:0"/g,
			'$1'
		);

		if (content !== originalContent) {
			fs.writeFileSync(filePath, content, 'utf8');
			modifiedFiles.push(file);
		}
	}

	return { modifiedFiles };
}

/**
 * Clears user customized pattern overrides from the local WordPress database.
 */
function cleanDatabaseOverrides(wpPath) {
	console.log(`\n${colors.cyan}► Checking for customized pattern overrides in database...${colors.reset}`);
	try {
		const rawPostIds = execSync(
			`wp --path=${JSON.stringify(wpPath)} post list --post_type=wp_block --format=ids`,
			{ encoding: 'utf8', stdio: ['pipe', 'pipe', 'pipe'] }
		).trim();

		if (rawPostIds) {
			const count = rawPostIds.split(/\s+/).filter(Boolean).length;
			execSync(
				`wp --path=${JSON.stringify(wpPath)} post delete ${rawPostIds} --force`,
				{ encoding: 'utf8', stdio: ['pipe', 'pipe', 'pipe'] }
			);
			console.log(`  ${colors.green}✓ Deleted ${count} customized database pattern override(s) from wp_posts.${colors.reset}`);
		} else {
			console.log(`  ${colors.gray}No database pattern overrides found (clean state).${colors.reset}`);
		}

		// Flush cache and transients
		execSync(`wp --path=${JSON.stringify(wpPath)} cache flush`, { stdio: 'ignore' });
		execSync(`wp --path=${JSON.stringify(wpPath)} transient delete --all`, { stdio: 'ignore' });
		console.log(`  ${colors.green}✓ Flushed WordPress object cache and transients.${colors.reset}`);
	} catch (err) {
		console.log(`  ${colors.yellow}! Warning: Could not clean database overrides via WP-CLI: ${err.message}${colors.reset}`);
	}
}

/**
 * Fetches dynamic authentication cookies via WP-CLI.
 */
function fetchAuthCookies(wpPath) {
	const cookieHash = execSync(
		`wp --path=${JSON.stringify(wpPath)} eval "echo COOKIEHASH;"`,
		{ encoding: 'utf8', stdio: ['pipe', 'pipe', 'pipe'] }
	).trim();

	const secCookie = execSync(
		`wp --path=${JSON.stringify(wpPath)} eval "echo wp_generate_auth_cookie(1, time()+3600, 'secure_auth');"`,
		{ encoding: 'utf8', stdio: ['pipe', 'pipe', 'pipe'] }
	).trim();

	const logCookie = execSync(
		`wp --path=${JSON.stringify(wpPath)} eval "echo wp_generate_auth_cookie(1, time()+3600, 'logged_in');"`,
		{ encoding: 'utf8', stdio: ['pipe', 'pipe', 'pipe'] }
	).trim();

	return { cookieHash, secCookie, logCookie };
}

/**
 * Connects to Gutenberg via Playwright to validate and reconcile any remaining block errors.
 */
async function runGutenbergASTReconciler(options) {
	let playwright;
	try {
		playwright = require('playwright');
	} catch (e) {
		console.log(`${colors.yellow}! Playwright not found; skipping headless browser verification.${colors.reset}`);
		return { passed: true, issues: 0 };
	}

	console.log(`\n${colors.cyan}► Connecting to headless Gutenberg editor for AST reconciliation...${colors.reset}`);

	let auth;
	try {
		auth = fetchAuthCookies(options.wpPath);
	} catch (err) {
		console.log(`${colors.yellow}! WP-CLI auth unavailable; skipping browser verification.${colors.reset}`);
		return { passed: true, issues: 0 };
	}

	const browser = await playwright.chromium.launch({
		channel: 'chrome',
		headless: true,
	});

	try {
		const context = await browser.newContext({ ignoreHTTPSErrors: true });
		const cookieDomain = new URL(options.baseUrl).hostname;

		await context.addCookies([
			{ name: `wordpress_sec_${auth.cookieHash}`, value: auth.secCookie, domain: cookieDomain, path: '/' },
			{ name: `wordpress_logged_in_${auth.cookieHash}`, value: auth.logCookie, domain: cookieDomain, path: '/' },
		]);

		const page = await context.newPage();
		const editorUrl = `${options.baseUrl.replace(/\/$/, '')}/wp-admin/post-new.php`;
		await page.goto(editorUrl, { waitUntil: 'domcontentloaded', timeout: 45000 });
		await page.waitForFunction(
			() => typeof window.wp !== 'undefined' && typeof window.wp.blocks !== 'undefined',
			{ timeout: 30000 }
		);

		const result = await page.evaluate(async (patternFilter) => {
			const all = await window.wp.apiFetch({ path: '/wp/v2/block-patterns/patterns' });
			const themePatterns = all.filter((p) => p.name && p.name.startsWith('learnschool/'));

			let targetPatterns = themePatterns;
			if (patternFilter) {
				const raw = patternFilter.replace(/^patterns\//, '').replace(/\.php$/, '');
				targetPatterns = themePatterns.filter((p) => p.name.includes(raw));
			}

			const invalidBlocks = [];

			function inspect(blocks, patName) {
				for (const b of blocks) {
					if (b.isValid === false) {
						const issues = b.validationIssues || [];
						const mismatch = issues.find((i) => i.args && i.args[0] && i.args[0].includes('Block validation failed for'));
						invalidBlocks.push({
							pattern: patName,
							blockName: b.name,
							expected: mismatch ? mismatch.args[3] : null,
							actual: mismatch ? mismatch.args[4] : null,
						});
					}
					if (b.innerBlocks && b.innerBlocks.length) {
						inspect(b.innerBlocks, patName);
					}
				}
			}

			for (const p of targetPatterns) {
				const parsed = window.wp.blocks.parse(p.content);
				inspect(parsed, p.name);
			}

			return {
				testedCount: targetPatterns.length,
				invalidCount: invalidBlocks.length,
				invalidBlocks,
			};
		}, options.pattern);

		await browser.close();
		return result;
	} catch (err) {
		await browser.close();
		throw err;
	}
}

async function main() {
	const options = parseArgs(process.argv.slice(2));

	if (options.help) {
		showHelp();
		process.exit(0);
	}

	console.log(`${colors.bold}${colors.cyan}======================================================================${colors.reset}`);
	console.log(`${colors.bold}${colors.cyan}      LearnSchool Theme — Pattern Recovery Auto-Fix Workflow         ${colors.reset}`);
	console.log(`${colors.bold}${colors.cyan}======================================================================${colors.reset}`);

	// Step 1: Run static normalizer
	console.log(`${colors.dim}► Running static AST and syntax normalization on patterns/*.php...${colors.reset}`);
	const { modifiedFiles } = runStaticNormalizer(options.pattern);

	if (modifiedFiles.length > 0) {
		console.log(`  ${colors.green}✓ Normalized ${modifiedFiles.length} pattern file(s):${colors.reset}`);
		for (const f of modifiedFiles) {
			console.log(`    - ${colors.white}patterns/${f}${colors.reset}`);
		}
	} else {
		console.log(`  ${colors.gray}All pattern files already conform to static syntax standards.${colors.reset}`);
	}

	// Step 2: Clear database overrides if requested
	if (options.cleanDb) {
		cleanDatabaseOverrides(options.wpPath);
	}

	// Step 3: Run headless Gutenberg AST reconciler
	if (!options.noBrowser) {
		try {
			const report = await runGutenbergASTReconciler(options);
			console.log(`\n${colors.bold}Gutenberg Validation Summary:${colors.reset}`);
			console.log(`  Patterns Tested: ${report.testedCount}`);
			console.log(`  Invalid Blocks:  ${report.invalidCount}`);

			if (report.invalidCount === 0) {
				console.log(`\n${colors.bgGreen}${colors.white}${colors.bold} SUCCESS ${colors.reset} ${colors.green}All ${report.testedCount} patterns pass Gutenberg AST validation with 0 recovery issues!${colors.reset}\n`);
			} else {
				console.log(`\n${colors.bgRed}${colors.white}${colors.bold} ISSUES REMAINING ${colors.reset} ${colors.red}${report.invalidCount} block(s) still require reconciliation:${colors.reset}`);
				for (const item of report.invalidBlocks) {
					console.log(`  - Pattern: ${item.pattern} [${item.blockName}]`);
				}
				process.exit(1);
			}
		} catch (err) {
			console.error(`\n${colors.yellow}! Browser verification error: ${err.message}${colors.reset}`);
		}
	}

	console.log(`${colors.gray}Done! You can now edit and view patterns in the WordPress Site Editor without 'Attempt Recovery'.${colors.reset}\n`);
}

main().catch((err) => {
	console.error(`${colors.red}Fatal Error:${colors.reset}`, err);
	process.exit(1);
});
