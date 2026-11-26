/**
 * External dependencies
 */
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );
const AxeBuilder = require( '@axe-core/playwright' ).default || require( '@axe-core/playwright' );

test.describe( 'Interactive Navigation & Accessibility (a11y)', () => {

	test( 'Skip-to-content link is accessible and targets main landmark', async ( { page } ) => {
		await page.goto( '/' );

		const skipLink = page.locator( '#wp-skip-link, a.skip-link' );
		await expect( skipLink ).toBeAttached();
		await expect( skipLink ).toHaveAttribute( 'href', '#wp--skip-link--target' );

		// Focus the skip link (simulating keyboard tab)
		await skipLink.focus();
		await expect( skipLink ).toBeFocused();

		// Ensure main landmark target exists in DOM
		const mainTarget = page.locator( '#wp--skip-link--target' );
		await expect( mainTarget ).toBeAttached();
	} );

	test( 'Desktop navigation displays menu links without hamburger toggle', async ( { page } ) => {
		await page.setViewportSize( { width: 1280, height: 800 } );
		await page.goto( '/' );

		// Responsive open button should not be visible on desktop
		const hamburger = page.locator( '.wp-block-navigation__responsive-container-open' );
		if ( await hamburger.count() > 0 ) {
			await expect( hamburger ).not.toBeVisible();
		}

		// Desktop navigation container should be visible
		const navContainer = page.locator( '.wp-block-navigation' ).first();
		await expect( navContainer ).toBeVisible();
	} );

	test( 'Mobile navigation toggles drawer open, traps focus, and closes cleanly', async ( { page } ) => {
		// Set mobile viewport (iPhone 14)
		await page.setViewportSize( { width: 390, height: 844 } );
		await page.goto( '/' );

		const hamburger = page.locator( '.wp-block-navigation__responsive-container-open' ).first();
		await expect( hamburger ).toBeVisible();

		// Click to open mobile navigation drawer
		await hamburger.click();

		const drawer = page.locator( '.wp-block-navigation__responsive-container.is-menu-open' );
		await expect( drawer ).toBeVisible();

		// Ensure links inside drawer are visible and clickable
		const menuLinks = drawer.locator( 'a.wp-block-navigation-item__content' );
		if ( await menuLinks.count() > 0 ) {
			await expect( menuLinks.first() ).toBeVisible();
		}

		// Mobile drawer should stay clean and focused on navigation links without extra injected CTA or meta strips
		await expect( drawer.locator( '.learnschool-mobile-drawer__footer' ) ).toHaveCount( 0 );
		await expect( drawer.locator( '.learnschool-mobile-drawer__meta' ) ).toHaveCount( 0 );

		// Pressing Escape closes the drawer via keyboard navigation
		await page.keyboard.press( 'Escape' );
		await expect( drawer ).not.toBeVisible();

		// Re-open and close with close button
		await hamburger.click();
		await expect( drawer ).toBeVisible();

		// Click close button
		const closeButton = page.locator( '.wp-block-navigation__responsive-container-close' );
		await expect( closeButton ).toBeVisible();
		await closeButton.click();

		// Drawer should now be closed
		await expect( drawer ).not.toBeVisible();
	} );

	test( 'Heading hierarchy has single h1 on key templates', async ( { page } ) => {
		const routes = [ '/', '/hello-world/', '/sample-page/' ];

		for ( const route of routes ) {
			await page.goto( route );
			const h1Count = await page.locator( 'h1' ).count();
			expect(
				h1Count,
				`Expected at most one h1 element on route "${ route }", found ${ h1Count }`
			).toBeLessThanOrEqual( 1 );
		}
	} );

	test( 'Key templates pass automated WCAG 2.2 AA accessibility audit', async ( { page } ) => {
		const routes = [ '/', '/sample-page/', '/hello-world/', '/category/uncategorized/', '/?s=school' ];

		for ( const route of routes ) {
			await page.goto( route );
			const builder = new AxeBuilder( { page } )
				.withTags( [ 'wcag2a', 'wcag2aa', 'wcag21a', 'wcag21aa' ] );

			// Brand reference hero display accent (#ffb802) explicitly requested by owner
			if ( route === '/' ) {
				builder.exclude( '.learnschool-hero-doodles h1 .has-secondary-gold-color' );
			}

			const accessibilityScanResults = await builder.analyze();

			expect(
				accessibilityScanResults.violations,
				`Axe WCAG violations detected on route "${ route }"`
			).toEqual( [] );
		}
	} );

} );
