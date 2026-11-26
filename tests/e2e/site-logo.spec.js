/**
 * External dependencies
 */
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );

test.describe( 'LearnSchool Theme Site Logo & Mascot Fallback', () => {

	test( 'Site logo fallback renders transparent mascot logo at configured block dimensions', async ( { page } ) => {
		const response = await page.goto( '/' );
		expect( response.status() ).toBe( 200 );

		// Find the site logo wrapper and image
		const logoLink = page.locator( 'header .wp-block-site-logo a.custom-logo-link' ).first();
		await expect( logoLink ).toBeVisible();

		const logoImg = logoLink.locator( 'img.custom-logo' );
		await expect( logoImg ).toBeVisible();

		// Verify image src points to fallback site-logo.png and loaded cleanly
		const src = await logoImg.getAttribute( 'src' );
		expect( src ).toContain( '/assets/images/site-logo.png' );
		const naturalWidth = await logoImg.evaluate( ( img ) => img.naturalWidth );
		expect( naturalWidth ).toBeGreaterThan( 0 );

		// Verify logo links to homepage with rel="home" and renders at header block width (36px)
		expect( await logoLink.getAttribute( 'href' ) ).toBeTruthy();
		expect( await logoLink.getAttribute( 'rel' ) ).toBe( 'home' );

		const box = await logoImg.boundingBox();
		expect( box ).not.toBeNull();
		expect( Math.round( box.width ) ).toBe( 36 );
		expect( Math.round( box.height ) ).toBe( 36 );
	} );

} );
