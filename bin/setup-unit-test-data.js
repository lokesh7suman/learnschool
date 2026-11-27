#!/usr/bin/env node
/* eslint-disable no-console */
/**
 * Import official WordPress Theme Unit Test data and configure recommended reading/discussion settings.
 *
 * Usage: node bin/setup-unit-test-data.js [--path=/path/to/wp] [--force]
 */

const { execFileSync } = require( 'node:child_process' );
const fs = require( 'node:fs' );
const os = require( 'node:os' );
const path = require( 'node:path' );
const zlib = require( 'node:zlib' );

const THEME_DIR = path.resolve( __dirname, '..' );
const FIXTURE_GZ = path.join(
	THEME_DIR,
	'tests',
	'fixtures',
	'themeunittestdata.wxr.gz'
);

/**
 * Parse supported CLI flags.
 *
 * @param {string[]} argv Raw argument list.
 * @return {{ wpPath: string, force: boolean }} Parsed options.
 */
function parseArgs( argv ) {
	let wpPath =
		process.env.WP_PATH || path.resolve( THEME_DIR, '..', '..', '..' );
	let force = false;

	for ( const arg of argv ) {
		if ( arg.startsWith( '--path=' ) ) {
			wpPath = arg.slice( '--path='.length );
		} else if ( '--force' === arg ) {
			force = true;
		} else {
			console.error( `Unknown argument: ${ arg }` );
			process.exit( 1 );
		}
	}

	return { wpPath, force };
}

/**
 * Run a WP-CLI command against the target WordPress root.
 *
 * @param {string}   wpPath  Path to WordPress root.
 * @param {string[]} args    WP-CLI arguments.
 * @param {Object}   options Execution options.
 * @return {string} Trimmed stdout when captured.
 */
function runWp( wpPath, args, options = {} ) {
	const { capture = false, ignoreError = false } = options;
	try {
		const output = execFileSync( 'wp', [ `--path=${ wpPath }`, ...args ], {
			encoding: 'utf8',
			stdio: capture ? [ 'ignore', 'pipe', 'pipe' ] : 'inherit',
		} );
		return typeof output === 'string' ? output.trim() : '';
	} catch ( error ) {
		if ( ignoreError ) {
			return '';
		}
		throw error;
	}
}

/**
 * Check whether a WP-CLI boolean subcommand exits 0.
 *
 * @param {string}   wpPath Path to WordPress root.
 * @param {string[]} args   WP-CLI arguments.
 * @return {boolean} True when command exits 0.
 */
function checkWp( wpPath, args ) {
	try {
		execFileSync( 'wp', [ `--path=${ wpPath }`, ...args ], {
			stdio: 'ignore',
		} );
		return true;
	} catch {
		return false;
	}
}

/**
 * Import the compressed Theme Unit Test WXR fixture via a temporary XML file.
 *
 * @param {string} wpPath Path to WordPress root.
 * @return {void}
 */
function importFixture( wpPath ) {
	const tempDir = fs.mkdtempSync(
		path.join( os.tmpdir(), 'learnschool-unit-test-' )
	);
	const tempXml = path.join( tempDir, 'themeunittestdata.xml' );

	try {
		const compressed = fs.readFileSync( FIXTURE_GZ );
		const xmlBuffer = zlib.gunzipSync( compressed );
		fs.writeFileSync( tempXml, xmlBuffer );
		runWp( wpPath, [ 'import', tempXml, '--authors=create' ] );
	} finally {
		fs.rmSync( tempDir, { recursive: true, force: true } );
	}
}

function main() {
	const { wpPath, force } = parseArgs( process.argv.slice( 2 ) );

	if ( ! fs.existsSync( FIXTURE_GZ ) ) {
		console.error( `Missing Theme Unit Test fixture: ${ FIXTURE_GZ }` );
		process.exit( 1 );
	}

	if ( ! fs.existsSync( path.join( wpPath, 'wp-load.php' ) ) ) {
		console.error(
			`WordPress root not found at: ${ wpPath } (pass --path=/path/to/wordpress)`
		);
		process.exit( 1 );
	}

	const sentinelOutput = runWp(
		wpPath,
		[
			'post',
			'list',
			'--name=template-paginated',
			'--post_type=post',
			'--post_status=publish',
			'--format=count',
		],
		{ capture: true, ignoreError: true }
	);
	const sentinelCount = Number.parseInt( sentinelOutput || '0', 10 ) || 0;

	if ( force || 0 === sentinelCount ) {
		const importerWasActive = checkWp( wpPath, [
			'plugin',
			'is-active',
			'wordpress-importer',
		] );

		if ( ! importerWasActive ) {
			const importerInstalled = checkWp( wpPath, [
				'plugin',
				'is-installed',
				'wordpress-importer',
			] );
			if ( importerInstalled ) {
				runWp( wpPath, [ 'plugin', 'activate', 'wordpress-importer' ] );
			} else {
				runWp( wpPath, [
					'plugin',
					'install',
					'wordpress-importer',
					'--activate',
				] );
			}
		}

		importFixture( wpPath );

		if ( ! importerWasActive ) {
			runWp( wpPath, [ 'plugin', 'deactivate', 'wordpress-importer' ], {
				ignoreError: true,
			} );
		}
	} else {
		console.log(
			'Theme Unit Test posts already imported (pass --force to re-import).'
		);
	}

	const currentPermalink = runWp(
		wpPath,
		[ 'option', 'get', 'permalink_structure' ],
		{ capture: true, ignoreError: true }
	);
	if ( ! currentPermalink ) {
		runWp( wpPath, [ 'rewrite', 'structure', '/%postname%/', '--hard' ] );
	}

	runWp( wpPath, [ 'option', 'update', 'posts_per_page', '5' ] );
	runWp( wpPath, [ 'option', 'update', 'thread_comments', '1' ] );
	runWp( wpPath, [ 'option', 'update', 'thread_comments_depth', '10' ] );
	runWp( wpPath, [ 'option', 'update', 'page_comments', '1' ] );
	runWp( wpPath, [ 'option', 'update', 'comments_per_page', '5' ] );
	runWp( wpPath, [ 'option', 'update', 'show_on_front', 'posts' ] );
	runWp( wpPath, [ 'rewrite', 'flush', '--hard' ] );

	const syncNavPhp = `
$menu = wp_get_nav_menu_object( 'testing-menu' );
if ( $menu && class_exists( 'WP_Classic_To_Block_Menu_Converter' ) ) {
	$blocks = WP_Classic_To_Block_Menu_Converter::convert( $menu );
	if ( ! is_wp_error( $blocks ) && '' !== trim( $blocks ) ) {
		$nav_posts = get_posts(
			array(
				'post_type'      => 'wp_navigation',
				'name'           => 'testing-menu',
				'post_status'    => array( 'publish', 'draft', 'private' ),
				'posts_per_page' => 1,
			)
		);
		if ( ! empty( $nav_posts ) ) {
			wp_update_post(
				array(
					'ID'           => $nav_posts[0]->ID,
					'post_status'  => 'publish',
					'post_content' => wp_slash( $blocks ),
				)
			);
			echo 'Updated wp_navigation #' . $nav_posts[0]->ID . " (testing-menu).\\n";
		} else {
			$new_id = wp_insert_post(
				array(
					'post_type'    => 'wp_navigation',
					'post_status'  => 'publish',
					'post_title'   => 'Testing Menu',
					'post_name'    => 'testing-menu',
					'post_content' => wp_slash( $blocks ),
				)
			);
			echo 'Created wp_navigation #' . $new_id . " (testing-menu).\\n";
		}
	}
}
`;
	runWp( wpPath, [ 'eval', syncNavPhp ] );
}

main();
