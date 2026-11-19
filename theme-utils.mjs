#!/usr/bin/env node
/**
 * Theme Utilities for LearnSchool
 *
 * Mirrors the theme-utils.mjs approach used in WordPress/ipsum, the current
 * official WordPress default theme.
 *
 * Commands:
 *   validate-theme                     Validate theme.json, style variations,
 *                                      pattern headers, and template syntax.
 *   escape-patterns --text-domain=<s>  Report patterns with unescaped __() calls.
 *
 * Usage (via npm scripts):
 *   npm run lint:theme
 *   npm run lint:patterns:fix
 */

import fs from 'node:fs';
import path from 'node:path';
import process from 'node:process';
import { fileURLToPath } from 'node:url';

const __dirname = path.dirname( fileURLToPath( import.meta.url ) );
const ROOT = path.resolve( __dirname );

// ─── Logging helpers ────────────────────────────────────────────────────────

const c = {
	reset: '\x1b[0m',
	green: '\x1b[32m',
	red: '\x1b[31m',
	yellow: '\x1b[33m',
	cyan: '\x1b[36m',
	bold: '\x1b[1m',
	dim: '\x1b[2m',
};

const pass = ( msg ) => console.log( `  ${ c.green }✔${ c.reset } ${ msg }` );
const fail = ( msg ) => console.error( `  ${ c.red }✖${ c.reset } ${ msg }` );
const warn = ( msg ) => console.warn( `  ${ c.yellow }⚠${ c.reset } ${ msg }` );
const info = ( msg ) => console.log( `  ${ c.dim }→${ c.reset } ${ msg }` );
const heading = ( msg ) =>
	console.log( `\n${ c.bold }${ c.cyan }${ msg }${ c.reset }\n` );

// ─── Helpers ────────────────────────────────────────────────────────────────

function readJson( filePath ) {
	const raw = fs.readFileSync( filePath, 'utf8' );
	return JSON.parse( raw );
}

function listFiles( dir, ext ) {
	if ( ! fs.existsSync( dir ) ) return [];
	return fs
		.readdirSync( dir )
		.filter( ( f ) => f.endsWith( ext ) )
		.map( ( f ) => path.join( dir, f ) );
}

// ─── validate-theme ──────────────────────────────────────────────────────────

async function validateTheme() {
	let errors = 0;

	// 1. theme.json ─────────────────────────────────────────────────────────
	heading( '1/4  theme.json — version & schema' );

	const themeJsonPath = path.join( ROOT, 'theme.json' );

	if ( ! fs.existsSync( themeJsonPath ) ) {
		fail( 'theme.json not found at theme root' );
		process.exit( 1 );
	}

	let themeJson;
	try {
		themeJson = readJson( themeJsonPath );
	} catch ( err ) {
		fail( `theme.json is not valid JSON: ${ err.message }` );
		process.exit( 1 );
	}

	if ( themeJson.version !== 3 ) {
		fail( `theme.json version is ${ themeJson.version } — expected 3 (WP 6.6+)` );
		errors++;
	} else {
		pass( `version: ${ themeJson.version }` );
	}

	const schemaUri = themeJson.$schema;
	if ( ! schemaUri ) {
		fail( 'theme.json is missing $schema property' );
		errors++;
	} else {
		pass( `$schema: ${ schemaUri }` );
	}

	// AJV schema validation (requires network; degrades gracefully offline)
	// WordPress theme.json schema references draft-07 internally.
	// Ajv v8 (default export) handles draft-07 natively.
	try {
		const { default: Ajv } = await import( 'ajv' );
		const { default: addFormats } = await import( 'ajv-formats' );
		const ajv = new Ajv( { allErrors: true, strict: false } );
		addFormats( ajv );

		const targetSchema =
			schemaUri || 'https://schemas.wp.org/trunk/theme.json';
		info( `Fetching schema: ${ targetSchema }` );

		const res = await fetch( targetSchema );
		if ( ! res.ok ) throw new Error( `HTTP ${ res.status } ${ res.statusText }` );
		const schema = await res.json();

		// Strip meta $schema URI before compilation to avoid AJV meta-schema lookup
		const { $schema: _dropped, ...compilableSchema } = schema;

		const validate = ajv.compile( compilableSchema );
		const valid = validate( themeJson );

		if ( ! valid ) {
			fail(
				`theme.json failed official WP schema validation (${ validate.errors.length } error(s)):`
			);
			validate.errors.slice( 0, 10 ).forEach( ( e ) => {
				console.error(
					`       ${ c.dim }${ e.instancePath || '(root)' }${ c.reset }  ${ e.message }`
				);
			} );
			errors += validate.errors.length;
		} else {
			pass( 'Passes official WordPress JSON schema validation' );
		}
	} catch ( err ) {
		warn( `Schema fetch skipped — ${ err.message }` );
		info( 'Run with network access for full schema validation.' );
	}

	// 2. Style variations ───────────────────────────────────────────────────
	heading( '2/4  Style variations' );

	const stylesDir = path.join( ROOT, 'styles' );
	const variations = listFiles( stylesDir, '.json' );

	if ( variations.length === 0 ) {
		info( 'No style variations found in styles/' );
	}

	for ( const filePath of variations ) {
		const name = path.basename( filePath );
		try {
			const json = readJson( filePath );
			if ( json.version !== undefined && json.version !== 3 ) {
				fail( `${ name }: version should be 3, got ${ json.version }` );
				errors++;
			} else {
				pass( `${ name }` );
			}
		} catch ( err ) {
			fail( `${ name }: invalid JSON — ${ err.message }` );
			errors++;
		}
	}

	// 3. Pattern file headers ───────────────────────────────────────────────
	heading( '3/4  Pattern file headers' );

	const patternsDir = path.join( ROOT, 'patterns' );
	const patterns = listFiles( patternsDir, '.php' );

	for ( const filePath of patterns ) {
		const name = path.relative( ROOT, filePath );
		const content = fs.readFileSync( filePath, 'utf8' );

		const missing = [];
		if ( ! /^\s*\*\s*Title:/m.test( content ) ) missing.push( 'Title' );
		if ( ! /^\s*\*\s*Slug:/m.test( content ) ) missing.push( 'Slug' );
		if ( ! /^\s*\*\s*Categories:/m.test( content ) ) missing.push( 'Categories' );

		if ( missing.length ) {
			fail( `${ name }: missing header field(s): ${ missing.join( ', ' ) }` );
			errors++;
		} else {
			pass( name );
		}
	}

	// 4. Template & part syntax ─────────────────────────────────────────────
	heading( '4/4  Templates & parts — block markup syntax' );

	const checkHtmlDir = ( dir ) => {
		const files = listFiles( dir, '.html' );
		for ( const filePath of files ) {
			const name = path.relative( ROOT, filePath );
			const content = fs.readFileSync( filePath, 'utf8' );
			const fileErrors = [];

			// No PHP in HTML templates
			if ( /<\?php/i.test( content ) ) {
				fileErrors.push( 'contains PHP — not allowed in FSE templates' );
			}
			// No trailing commas in block attribute JSON
			if ( /,\s*\}/.test( content ) ) {
				fileErrors.push( 'trailing comma in block attribute JSON (RFC 8259 violation)' );
			}
			// Self-closing block tags must end with a space then /-->
			// Valid:   <!-- wp:block-name /-->
			// Invalid: <!-- wp:block-name/-->  (no space before /)
			const badSelfClose = content.match( /<!--\s*wp:\S+\/-->/g );
			if ( badSelfClose ) {
				fileErrors.push(
					`${ badSelfClose.length } self-closing tag(s) missing space before /--> (e.g. ${ badSelfClose[ 0 ] })`
				);
			}

			if ( fileErrors.length ) {
				fileErrors.forEach( ( e ) => fail( `${ name }: ${ e }` ) );
				errors += fileErrors.length;
			} else {
				pass( name );
			}
		}
	};

	checkHtmlDir( path.join( ROOT, 'templates' ) );
	checkHtmlDir( path.join( ROOT, 'parts' ) );

	// Summary ───────────────────────────────────────────────────────────────
	console.log( `\n${ '─'.repeat( 55 ) }` );
	if ( errors === 0 ) {
		console.log(
			`${ c.green }${ c.bold }✔ All theme checks passed.${ c.reset }\n`
		);
	} else {
		console.error(
			`${ c.red }${ c.bold }✖ ${ errors } error(s) found — fix before committing.${ c.reset }\n`
		);
		process.exit( 1 );
	}
}

// ─── escape-patterns ─────────────────────────────────────────────────────────

async function escapePatterns( textDomain ) {
	heading( `Checking pattern i18n escaping (text-domain: ${ textDomain })` );

	const patternsDir = path.join( ROOT, 'patterns' );
	const patterns = listFiles( patternsDir, '.php' );
	let issues = 0;

	for ( const filePath of patterns ) {
		const name = path.relative( ROOT, filePath );
		const content = fs.readFileSync( filePath, 'utf8' );

		// Flag bare __() that should be esc_html__() or esc_attr__()
		const matches = [ ...content.matchAll( /(?<!esc_html|esc_attr)__\s*\(/g ) ];

		if ( matches.length ) {
			fail(
				`${ name }: ${ matches.length } unescaped __() call(s) — use esc_html__() or esc_attr__()`
			);
			issues++;
		} else {
			pass( name );
		}
	}

	console.log( `\n${ '─'.repeat( 55 ) }` );
	if ( issues === 0 ) {
		console.log(
			`${ c.green }${ c.bold }✔ All patterns use proper escaped i18n wrappers.${ c.reset }\n`
		);
	} else {
		console.error(
			`${ c.yellow }${ c.bold }⚠ ${ issues } pattern(s) have bare __() calls.${ c.reset }\n`
		);
		process.exit( 1 );
	}
}

// ─── Command router ───────────────────────────────────────────────────────────

const [ , , command, ...flags ] = process.argv;

switch ( command ) {
	case 'validate-theme':
		validateTheme();
		break;

	case 'escape-patterns': {
		const domainFlag = flags.find( ( f ) => f.startsWith( '--text-domain=' ) );
		const domain = domainFlag ? domainFlag.split( '=' )[ 1 ] : 'learnschool';
		escapePatterns( domain );
		break;
	}

	default:
		console.error( `Unknown command: "${ command }"` );
		console.error(
			'Usage: node theme-utils.mjs [validate-theme | escape-patterns --text-domain=<slug>]'
		);
		process.exit( 1 );
}
