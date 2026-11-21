/**
 * External dependencies
 */
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );

test.describe( 'Gutenberg Site Editor & Block Invalidation Audit', () => {

	test( 'Site Editor loads cleanly with zero block recovery warnings', async ( { page } ) => {
		await page.goto( '/wp-admin/site-editor.php', { waitUntil: 'domcontentloaded' } );

		// Verify we are authenticated and on the Editor screen
		const pageTitle = await page.title();
		expect( pageTitle ).toContain( 'Editor' );

		// Give editor frame time to parse and render initial template
		await page.waitForTimeout( 2000 );

		// Check for Gutenberg "Attempt Block Recovery" warning
		const blockRecoveryWarnings = page.locator( '.block-editor-warning' );
		const warningCount = await blockRecoveryWarnings.count();
		expect(
			warningCount,
			'Block recovery warning detected in Site Editor (violates Gutenberg Markup Invariant)'
		).toBe( 0 );
	} );

	test( 'Block Editor loads for new posts without markup errors', async ( { page } ) => {
		await page.goto( '/wp-admin/post-new.php', { waitUntil: 'domcontentloaded' } );

		// Close any welcome guide dialog if visible
		const closeButton = page.locator( 'button[aria-label="Close dialog"], button[aria-label="Close"]' );
		if ( await closeButton.isVisible() ) {
			await closeButton.click();
		}

		await page.waitForTimeout( 1000 );

		// Assert zero block recovery warnings
		const blockRecoveryWarnings = page.locator( '.block-editor-warning' );
		expect( await blockRecoveryWarnings.count() ).toBe( 0 );
	} );

	test( 'Site Editor template parts (Comments, Header, Footer) load with zero block recovery warnings', async ( { page } ) => {
		const parts = [ 'comments', 'header', 'footer' ];

		for ( const part of parts ) {
			await page.goto(
				`/wp-admin/site-editor.php?postId=learnschool//${ part }&postType=wp_template_part&canvas=edit`,
				{ waitUntil: 'domcontentloaded' }
			);

			await page.waitForTimeout( 2500 );

			// Check all frames (Site editor renders canvas inside iframe)
			for ( const frame of page.frames() ) {
				const warnings = await frame
					.locator( '.block-editor-warning' )
					.count()
					.catch( () => 0 );
				expect(
					warnings,
					`Block recovery warning detected in template part "${ part }" (frame: ${ frame.url() })`
				).toBe( 0 );
			}
		}
	} );

	test( 'Registered block patterns expose valid content via REST API', async ( { requestUtils } ) => {
		const patterns = await requestUtils.rest( { path: '/wp/v2/block-patterns/patterns' } );
		expect( Array.isArray( patterns ) ).toBe( true );

		const themePatterns = patterns.filter( ( p ) => p.name && p.name.startsWith( 'learnschool/' ) );
		expect( themePatterns.length ).toBeGreaterThanOrEqual( 20 );

		for ( const pattern of themePatterns ) {
			// Pattern must have title and non-empty content
			expect( pattern.title ).toBeTruthy();
			expect( pattern.content ).toBeTruthy();

			// Ensure no raw PHP code leaked into serialized block pattern content
			expect( pattern.content.includes( '<?php' ) ).toBe( false );
			expect( pattern.content.includes( '?>' ) ).toBe( false );
			expect( pattern.content.toLowerCase().includes( 'fatal error' ) ).toBe( false );
		}
	} );

} );
