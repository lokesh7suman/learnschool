#!/usr/bin/env node
/**
 * Block Template & Template Part AST Syntax Linter
 *
 * Scans templates/*.html and parts/*.html using @wordpress/block-serialization-default-parser
 * to verify Gutenberg block grammar, valid JSON attributes, and catch delimiter/parsing errors.
 */

'use strict';

const fs = require('fs');
const path = require('path');
const { parse } = require('@wordpress/block-serialization-default-parser');
const fg = require('fast-glob');

const rootDir = path.resolve(__dirname, '..');

function lintBlocks() {
	const files = fg.sync(['templates/**/*.html', 'parts/**/*.html'], { cwd: rootDir });
	let totalErrors = 0;

	console.log(`[Block Linter] Scanning ${files.length} template and part files...`);

	for (const relPath of files) {
		const fullPath = path.join(rootDir, relPath);
		const content = fs.readFileSync(fullPath, 'utf8');
		const blocks = parse(content);

		let fileErrors = 0;

		function checkNode(block, depth = 0) {
			// Catch malformed block comments where JSON attributes could not be parsed
			if (block.blockName === null && block.innerHTML.trim().startsWith('<!-- wp:')) {
				console.error(`❌ [${relPath}] Corrupted block comment or invalid JSON attribute syntax:`);
				console.error(`   "${block.innerHTML.trim().substring(0, 80)}..."`);
				fileErrors++;
			}

			// Recursively check inner blocks
			if (Array.isArray(block.innerBlocks) && block.innerBlocks.length > 0) {
				block.innerBlocks.forEach(child => checkNode(child, depth + 1));
			}
		}

		blocks.forEach(b => checkNode(b));

		if (fileErrors > 0) {
			totalErrors += fileErrors;
		} else {
			console.log(`✔ [${relPath}] Valid block AST (${blocks.length} root blocks).`);
		}
	}

	if (totalErrors > 0) {
		console.error(`\n❌ [Block Linter] Failed with ${totalErrors} syntax error(s).`);
		process.exit(1);
	} else {
		console.log('\n✔ [Block Linter] All template and part block structures verified successfully.');
		process.exit(0);
	}
}

lintBlocks();
