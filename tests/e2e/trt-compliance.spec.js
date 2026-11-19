/**
 * External dependencies
 */
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );

const FORBIDDEN_CDN_PATTERNS = [
	'fonts.googleapis.com',
	'fonts.gstatic.com',
	'fonts.bunny.net',
	'use.typekit.net',
	'cdnjs.cloudflare.com',
	'unpkg.com',
	'cdn.jsdelivr.net',
];

const PHP_ERROR_PATTERNS = [
	/<b>Notice<\/b>:/i,
	/<b>Warning<\/b>:/i,
	/<b>Fatal error<\/b>:/i,
	/<b>Deprecated<\/b>:/i,
	/<b>Parse error<\/b>:/i,
	/Fatal error:/i,
	/There has been a critical error on this website/i,
];

const ROUTES_TO_AUDIT = [
	'/',
	'/hello-world/',
	'/sample-page/',
	'/category/uncategorized/',
	'/?s=school',
	'/this-page-definitely-does-not-exist-404/',
];

test.describe( 'WordPress.org TRT Quality & Compliance Audit', () => {

	for ( const route of ROUTES_TO_AUDIT ) {
		test( `Route "${ route }" passes strict hygiene (no external CDNs, no 404 assets, no PHP errors)`, async ( { page } ) => {
			const consoleErrors = [];
			const failedThemeAssets = [];
			const externalCdnRequests = [];

			// 1. Monitor console errors
			page.on( 'pageerror', ( err ) => consoleErrors.push( err.message ) );

			// 2. Monitor network requests
			page.on( 'request', ( request ) => {
				const url = request.url();
				for ( const pattern of FORBIDDEN_CDN_PATTERNS ) {
					if ( url.includes( pattern ) ) {
						externalCdnRequests.push( url );
					}
				}
			} );

			// 3. Monitor responses for broken theme assets (404/500)
			page.on( 'response', ( response ) => {
				const url = response.url();
				if ( url.includes( '/themes/learnschool/' ) && response.status() >= 400 ) {
					failedThemeAssets.push( `${ response.status() }: ${ url }` );
				}
			} );

			await page.goto( route );

			// Assert Zero external CDN leaks (GDPR compliance)
			expect(
				externalCdnRequests,
				`External CDN request detected on route ${ route } (violates WordPress.org GDPR font guideline)`
			).toEqual( [] );

			// Assert Zero broken theme assets
			expect(
				failedThemeAssets,
				`Theme assets returned 404 or server error on route ${ route }`
			).toEqual( [] );

			// Assert Zero JavaScript uncaught exceptions
			expect(
				consoleErrors,
				`Uncaught JavaScript error on route ${ route }`
			).toEqual( [] );

			// Assert Zero PHP warnings/notices in page output
			const pageSource = await page.content();
			for ( const pattern of PHP_ERROR_PATTERNS ) {
				expect(
					pattern.test( pageSource ),
					`PHP error matching ${ pattern } found in page source on route ${ route }`
				).toBe( false );
			}
		} );
	}

} );
