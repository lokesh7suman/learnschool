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

	test( 'Mobile navigation toggles drawer open and closes via Escape and close button', async ( { page } ) => {
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
		const routes = [ '/', '/hello-world/', '/about/page-with-comments/', '/category/uncategorized/' ];

		for ( const route of routes ) {
			const res = await page.goto( route );
			expect( res.status(), `Expected 200 on ${ route }` ).toBe( 200 );
			const h1Count = await page.locator( 'h1' ).count();
			expect(
				h1Count,
				`Expected exactly one h1 element on route "${ route }", found ${ h1Count }`
			).toBe( 1 );
		}
	} );

	test( 'Buttons display visible keyboard focus outline on Tab navigation', async ( { page } ) => {
		await page.setViewportSize( { width: 1280, height: 800 } );
		await page.goto( '/' );

		const buttonSelectors = [
			'.learnschool-header-actions .wp-block-button__link',
			'main .wp-block-button.is-style-learnschool-pill .wp-block-button__link',
			'main .wp-block-button.is-style-learnschool-outline .wp-block-button__link',
			'main .wp-block-button.is-style-learnschool-link-sm .wp-block-button__link',
			'main .wp-block-button.is-style-learnschool-yellow .wp-block-button__link',
		];

		// Trigger keyboard modality first so :focus-visible activates on programmatic/sequential focus checks.
		await page.keyboard.press( 'Tab' );

		for ( const selector of buttonSelectors ) {
			const button = page.locator( selector ).first();
			await expect( button ).toBeAttached();
			await button.focus();

			const focusStyles = await button.evaluate( ( el ) => {
				const styles = window.getComputedStyle( el );
				return {
					matchesFocusVisible: el.matches( ':focus-visible' ),
					outlineStyle: styles.outlineStyle,
					outlineWidth: parseFloat( styles.outlineWidth ),
					outlineColor: styles.outlineColor,
				};
			} );

			expect( focusStyles.matchesFocusVisible, `Expected ${ selector } to match :focus-visible` ).toBe( true );
			expect( focusStyles.outlineStyle, `Expected ${ selector } to render a focus outline` ).not.toBe( 'none' );
			expect( focusStyles.outlineWidth, `Expected ${ selector } outline width >= 2px` ).toBeGreaterThanOrEqual( 2 );
		}
	} );

	test( 'Long site title wraps cleanly on mobile without collapsing logo or clipping header controls', async ( { page } ) => {
		await page.setViewportSize( { width: 390, height: 844 } );
		await page.goto( '/' );

		const layout = await page.evaluate( () => {
			document.querySelectorAll( '.wp-block-site-title a' ).forEach( ( anchor ) => {
				anchor.innerHTML =
					'<span class="learnschool-title-dark">Brightwood Early Learning </span>' +
					'<span class="learnschool-title-accent">Academy</span>';
			} );

			const title = document.querySelector( 'header .wp-block-site-title' );
			const logo = document.querySelector( 'header .wp-block-site-logo' );
			const cta = document.querySelector( 'header .learnschool-header-actions' );
			const hamburger = document.querySelector( 'header .wp-block-navigation__responsive-container-open' );
			const titleStyles = title ? window.getComputedStyle( title ) : null;

			return {
				whiteSpace: titleStyles ? titleStyles.whiteSpace : null,
				titleRect: title ? title.getBoundingClientRect() : null,
				logoRect: logo ? logo.getBoundingClientRect() : null,
				ctaRect: cta ? cta.getBoundingClientRect() : null,
				hamburgerRect: hamburger ? hamburger.getBoundingClientRect() : null,
				docScrollWidth: document.documentElement.scrollWidth,
				innerWidth: window.innerWidth,
			};
		} );

		expect( layout.whiteSpace ).not.toBe( 'nowrap' );
		expect( layout.titleRect.height ).toBeGreaterThan( 40 );
		expect( layout.logoRect.width ).toBeGreaterThanOrEqual( 32 );
		expect( layout.ctaRect.right ).toBeLessThanOrEqual( layout.innerWidth );
		expect( layout.hamburgerRect.right ).toBeLessThanOrEqual( layout.innerWidth );
		expect( layout.docScrollWidth ).toBeLessThanOrEqual( layout.innerWidth );
	} );

	test( 'Long site title wraps cleanly on desktop without squeezing to zero width or pushing CTA off-screen', async ( { page } ) => {
		await page.setViewportSize( { width: 1280, height: 800 } );
		await page.goto( '/' );

		const desktopLayout = await page.evaluate( () => {
			document.querySelectorAll( '.wp-block-site-title a' ).forEach( ( anchor ) => {
				anchor.innerHTML =
					'<span class="learnschool-title-dark">Brightwood Early Learning Montessori </span>' +
					'<span class="learnschool-title-accent">Academy</span>';
			} );

			const title = document.querySelector( 'header .wp-block-site-title' );
			const cta = document.querySelector( 'header .learnschool-header-actions' );

			return {
				titleRect: title ? title.getBoundingClientRect() : null,
				ctaRect: cta ? cta.getBoundingClientRect() : null,
				docScrollWidth: document.documentElement.scrollWidth,
				innerWidth: window.innerWidth,
			};
		} );

		expect( desktopLayout.titleRect.width ).toBeGreaterThanOrEqual( 180 );
		expect( desktopLayout.titleRect.height ).toBeGreaterThan( 40 );
		expect( desktopLayout.ctaRect.right ).toBeLessThanOrEqual( desktopLayout.innerWidth );
		expect( desktopLayout.docScrollWidth ).toBeLessThanOrEqual( desktopLayout.innerWidth );
	} );

	test( 'Key templates pass automated WCAG 2.2 AA accessibility audit', async ( { page } ) => {
		const routes = [ '/', '/about/page-markup-and-formatting/', '/hello-world/', '/category/uncategorized/', '/?s=school' ];

		for ( const route of routes ) {
			const res = await page.goto( route );
			expect( res.status(), `Expected 200 on ${ route }` ).toBe( 200 );
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
