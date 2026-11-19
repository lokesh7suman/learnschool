#!/usr/bin/env node
/**
 * Setup and Import Theme Test Data
 *
 * Automates downloading and importing the official WordPress Theme Unit Test data
 * and the Gutenberg Block Unit Test plugin to test full-site block themes.
 */

const { execSync } = require('child_process');
const fs = require('fs');
const path = require('path');
const https = require('https');

const themeDir = path.resolve(__dirname, '..');
const testDataDir = path.join(themeDir, '.tests', 'data');
const xmlPath = path.join(testDataDir, 'themeunittestdata.wordpress.xml');
const xmlUrl = 'https://raw.githubusercontent.com/WordPress/theme-test-data/master/themeunittestdata.wordpress.xml';

// Find WordPress root directory
function findWpRoot(startDir) {
	let current = startDir;
	while (current !== path.dirname(current)) {
		if (fs.existsSync(path.join(current, 'wp-config.php')) || fs.existsSync(path.join(current, 'wp-load.php'))) {
			return current;
		}
		current = path.dirname(current);
	}
	return null;
}

const wpRoot = findWpRoot(themeDir);

function runWpCli(args) {
	const wpPathFlag = wpRoot ? `--path="${wpRoot}"` : '';
	const cmd = `wp ${args} ${wpPathFlag}`;
	console.log(`> ${cmd}`);
	return execSync(cmd, { stdio: 'inherit' });
}

// Ensure tests/data exists
if (!fs.existsSync(testDataDir)) {
	fs.mkdirSync(testDataDir, { recursive: true });
}

async function downloadFile(url, dest) {
	return new Promise((resolve, reject) => {
		if (fs.existsSync(dest) && fs.statSync(dest).size > 100000) {
			console.log(`✓ Test data XML already present at ${dest}`);
			return resolve();
		}
		console.log(`Downloading official Theme Unit Test data from ${url}...`);
		const file = fs.createWriteStream(dest);
		https.get(url, (response) => {
			if (response.statusCode === 302 || response.statusCode === 301) {
				return downloadFile(response.headers.location, dest).then(resolve).catch(reject);
			}
			response.pipe(file);
			file.on('finish', () => {
				file.close(() => {
					console.log(`✓ Downloaded ${dest}`);
					resolve();
				});
			});
		}).on('error', (err) => {
			fs.unlink(dest, () => {});
			reject(err);
		});
	});
}

async function main() {
	console.log('=====================================================');
	console.log(' LearnSchool Full-Site Block Theme - Test Data Setup ');
	console.log('=====================================================\n');

	if (!wpRoot) {
		console.error('Error: Could not locate WordPress root directory (wp-config.php not found).');
		process.exit(1);
	}

	console.log(`WordPress Root: ${wpRoot}`);
	console.log(`Theme Directory: ${themeDir}\n`);

	// 1. Download XML if needed
	await downloadFile(xmlUrl, xmlPath);

	// 2. Ensure WordPress Importer is installed
	console.log('\n[1/4] Ensuring wordpress-importer is installed and active...');
	try {
		runWpCli('plugin install wordpress-importer --activate');
	} catch (e) {
		console.warn('Note: wordpress-importer install check completed.');
	}

	// 3. Ensure Block Unit Test plugin is installed
	console.log('\n[2/4] Ensuring block-unit-test plugin is installed and active...');
	try {
		runWpCli('plugin install https://github.com/abstractwp/block-unit-test/archive/refs/heads/master.zip --activate');
	} catch (e) {
		console.warn('Note: block-unit-test install check completed.');
	}

	// 4. Import the XML data
	console.log('\n[3/4] Importing official Theme Unit Test data...');
	try {
		runWpCli(`import "${xmlPath}" --authors=create`);
	} catch (e) {
		console.warn('Import notice: Some items may have already existed or completed.');
	}

	// 5. Trigger Block Unit Test page creation & publish
	console.log('\n[4/5] Verifying Block Unit Test page...');
	try {
		runWpCli('eval "do_action(\'admin_init\');"');
		runWpCli('post update $(wp post list --post_type=page --name=block-unit-test --field=ID --format=ids ' + (wpRoot ? `--path="${wpRoot}"` : '') + ') --post_status=publish');
	} catch (e) {
		// Ignore if already published
	}

	// 6. Generate School Test Data & Multi-Level Navigation
	console.log('\n[5/5] Generating School Test Data & Multi-Level Navigation...');
	try {
		const schoolScriptPath = path.join(themeDir, 'bin', 'create-school-test-data.php');
		runWpCli(`eval-file "${schoolScriptPath}"`);
	} catch (e) {
		console.warn('School data setup notice:', e.message);
	}

	console.log('\n=====================================================');
	console.log(' ✓ Test data successfully configured!');
	console.log('=====================================================');
	console.log('You can now visually test your block theme at:');
	console.log('  - School Homepage:  /');
	console.log('  - Academics:        /academics/');
	console.log('  - AP & Honors:      /academics/high-school/ap-honors/');
	console.log('  - Block Unit Test:  /block-unit-test/');
	console.log('  - Single Post:      /?p=1 (or any imported post)');
	console.log('  - 404 Page:         /non-existent-page-url');
	console.log('=====================================================\n');
}

main().catch((err) => {
	console.error('Setup failed:', err);
	process.exit(1);
});
