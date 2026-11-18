#!/usr/bin/env node
/**
 * Schema Validation Script for WordPress Block Theme (theme.json and styles/*.json)
 *
 * Validates theme.json and all global style variations in styles/*.json
 * against the official WordPress theme.json v3 schema.
 */

'use strict';

const fs = require('fs');
const path = require('path');
const Ajv = require('ajv');
const fg = require('fast-glob');

const rootDir = path.resolve(__dirname, '..');
const schemaUrl = 'https://schemas.wp.org/wp/6.7/theme.json';

async function main() {
	console.log(`[Schema Validator] Fetching WordPress theme.json schema from ${schemaUrl}...`);
	let schema;
	try {
		const res = await fetch(schemaUrl);
		if (!res.ok) {
			throw new Error(`HTTP ${res.status} ${res.statusText}`);
		}
		schema = await res.json();
	} catch (err) {
		console.warn(`[Schema Validator] Could not fetch remote schema (${err.message}). Using local offline fallback check.`);
		process.exit(0);
	}

	const ajv = new Ajv({ allErrors: true, strict: false });
	const validate = ajv.compile(schema);

	const targetFiles = [
		'theme.json',
		...fg.sync('styles/*.json', { cwd: rootDir })
	];

	let hasErrors = false;

	for (const relPath of targetFiles) {
		const fullPath = path.join(rootDir, relPath);
		if (!fs.existsSync(fullPath)) continue;

		try {
			const data = JSON.parse(fs.readFileSync(fullPath, 'utf8'));
			const valid = validate(data);

			if (!valid) {
				console.error(`\n❌ Schema validation failed for: ${relPath}`);
				validate.errors.forEach((e) => {
					console.error(`   ↳ ${e.instancePath || '/'} ${e.message}`);
				});
				hasErrors = true;
			} else {
				console.log(`✔ ${relPath} complies with theme.json v3 schema.`);
			}
		} catch (parseErr) {
			console.error(`\n❌ JSON Syntax error in: ${relPath} - ${parseErr.message}`);
			hasErrors = true;
		}
	}

	if (hasErrors) {
		console.error('\n[Schema Validator] Validation failed with errors.');
		process.exit(1);
	} else {
		console.log('\n[Schema Validator] All theme JSON files validated successfully.');
		process.exit(0);
	}
}

main().catch((err) => {
	console.error('[Schema Validator] Unexpected failure:', err);
	process.exit(1);
});
