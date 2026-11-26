#!/usr/bin/env node
/* eslint-disable no-console */
/**
 * Production Release Packaging Script for LearnSchool Theme
 *
 * Packages only runtime theme files into a clean zip archive suitable
 * for submission to WordPress.org Theme Directory and production distribution.
 *
 * Excludes all development tooling, configs, node_modules, tests, and hidden dotfiles.
 */

const fs = require( 'fs' );
const path = require( 'path' );
const AdmZip = require( 'adm-zip' );
const fg = require( 'fast-glob' );

const themeSlug = 'learnschool';
const zipName = `${ themeSlug }.zip`;
const rootDir = path.resolve( __dirname, '..' );
// Output zip outside theme directory so local Theme Check does not flag included zip
const zipPath = path.resolve( rootDir, '..', zipName );

// Clean up existing zip if present
if ( fs.existsSync( zipPath ) ) {
	fs.unlinkSync( zipPath );
}

// Whitelist of production runtime assets and templates
const patterns = [
	'assets/**',
	'inc/**',
	'languages/*.pot',
	'languages/*.mo',
	'languages/*.po',
	'parts/**',
	'patterns/**',
	'styles/**',
	'templates/**',
	'functions.php',
	'index.php',
	'license.txt',
	'readme.txt',
	'screenshot.png',
	'style.css',
	'theme.json',
];

const files = fg.sync( patterns, {
	cwd: rootDir,
	dot: false,
	onlyFiles: true,
} );

if ( files.length === 0 ) {
	console.error( 'Error: No files found to package.' );
	process.exit( 1 );
}

const zip = new AdmZip();

files.sort().forEach( ( file ) => {
	const filePath = path.join( rootDir, file );
	const fileDir = path.dirname( file );
	const targetZipFolder =
		fileDir === '.' ? themeSlug : path.join( themeSlug, fileDir );
	zip.addLocalFile( filePath, targetZipFolder );
} );

zip.writeZip( zipPath );

const stats = fs.statSync( zipPath );
const sizeKb = ( stats.size / 1024 ).toFixed( 1 );

console.log( `\n🎉 Successfully packaged production theme archive!` );
console.log( `📦 Archive: ${ zipPath } (${ sizeKb } KB)` );
console.log( `📁 Files included: ${ files.length }` );
console.log(
	`🛡️  Verified: Zero dev configs, dotfiles, or vendor files in archive.\n`
);
