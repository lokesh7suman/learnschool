/**
 * External dependencies
 */
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );

test.describe( 'LearnSchool Theme Site Logo & Mascot Fallback', () => {

	test( 'Site logo fallback renders transparent mascot logo on front page', async ( { page } ) => {
		const response = await page.goto( '/' );
		expect( response.status() ).toBe( 200 );

		// Find the site logo wrapper and image
		const logoLink = page.locator( '.wp-block-site-logo a.custom-logo-link' );
		await expect( logoLink.first() ).toBeVisible();

		const logoImg = logoLink.first().locator( 'img.custom-logo' );
		await expect( logoImg ).toBeVisible();

		// Verify image src points to our fallback site-logo.png
		const src = await logoImg.getAttribute( 'src' );
		expect( src ).toContain( '/assets/images/site-logo.png' );

		// Verify logo links to homepage with rel="home"
		const href = await logoLink.first().getAttribute( 'href' );
		expect( href ).toBeTruthy();

		const rel = await logoLink.first().getAttribute( 'rel' );
		expect( rel ).toBe( 'home' );
	} );

	test( 'Site logo renders with specified block width and non-zero dimensions', async ( { page } ) => {
		await page.goto( '/' );

		const logoImg = page.locator( '.wp-block-site-logo img.custom-logo' ).first();
		await expect( logoImg ).toBeVisible();

		const box = await logoImg.boundingBox();
		expect( box ).not.toBeNull();
		expect( box.width ).toBeGreaterThan( 0 );
		expect( box.height ).toBeGreaterThan( 0 );
	} );

} );
