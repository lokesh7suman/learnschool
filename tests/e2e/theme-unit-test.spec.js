/**
 * WordPress Theme Unit Test E2E verification suite for LearnSchool.
 * Covers navigation nesting, markup formatting, edge cases, comments, floats,
 * color token contrast, featured images, and designated static front/blog pages.
 */
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );
const AxeBuilder = require( '@axe-core/playwright' ).default || require( '@axe-core/playwright' );

async function assertNoHorizontalOverflow( page ) {
	const overflow = await page.evaluate( () => {
		return document.documentElement.scrollWidth - window.innerWidth;
	} );
	expect( overflow ).toBeLessThanOrEqual( 0 );
}

test.describe( 'Theme Unit Test Suite', () => {
	test( 'Testing Menu renders multi-level dropdowns cleanly on desktop and caps deep nesting indentation on mobile', async ( { page } ) => {
		await page.setViewportSize( { width: 1280, height: 800 } );
		const res = await page.goto( '/' );
		expect( res.status() ).toBe( 200 );

		const desktopNav = page.locator( 'header nav.wp-block-navigation' ).first();
		await expect( desktopNav ).toBeVisible();
		await expect( desktopNav ).toContainText( 'Depth' );
		await expect( desktopNav ).toContainText( 'Menu Description' );
		await assertNoHorizontalOverflow( page );

		// Hovering/focusing "Depth" on desktop reveals Level 01.
		const depthItem = desktopNav.locator( 'li.wp-block-navigation-item', { hasText: 'Depth' } ).first();
		await depthItem.hover();
		await expect( depthItem.getByRole( 'link', { name: 'Level 01', exact: true } ) ).toBeVisible();

		// Mobile drawer: expand 10-level deep menu and confirm labels stay readable without horizontal overflow.
		await page.setViewportSize( { width: 390, height: 844 } );
		await page.goto( '/' );
		const openBtn = page.locator( 'header .wp-block-navigation__responsive-container-open' ).first();
		await openBtn.click();

		const drawer = page.locator( 'header .wp-block-navigation__responsive-container.is-menu-open' ).first();
		await expect( drawer ).toBeVisible();

		const depthToggle = drawer.getByRole( 'button', { name: 'Depth submenu' } );
		await expect( depthToggle ).toHaveAttribute( 'aria-expanded', 'false' );

		for ( const label of [
			'Depth',
			'Level 01',
			'Level 02',
			'Level 03',
			'Level 04',
			'Level 05',
			'Level 06',
			'Level 07',
			'Level 08',
			'Level 09',
		] ) {
			await drawer.getByRole( 'link', { name: label, exact: true } ).click();
		}

		await expect( depthToggle ).toHaveAttribute( 'aria-expanded', 'true' );
		const level10Link = drawer.getByRole( 'link', { name: 'Level 10', exact: true } );
		await expect( level10Link ).toBeVisible();

		const level10Box = await level10Link.boundingBox();
		expect( level10Box ).not.toBeNull();
		expect( level10Box.width ).toBeGreaterThanOrEqual( 120 );
		await assertNoHorizontalOverflow( page );
	} );

	test( 'Embedded core/navigation with core/page-list outputs valid flat ul > li structure', async ( { page } ) => {
		const res = await page.goto( '/theme-block-category/' );
		expect( res.status() ).toBe( 200 );

		const nestedLists = await page.locator(
			'.entry-content nav.wp-block-navigation ul.wp-block-navigation__container > ul'
		).count();
		expect( nestedLists ).toBe( 0 );

		const axeResults = await new AxeBuilder( { page } )
			.withRules( [ 'list' ] )
			.analyze();
		expect( axeResults.violations ).toEqual( [] );
	} );

	test( 'Markup posts and pages format tables, pre blocks, and aligned images without overflow or scrollable-region errors', async ( { page } ) => {
		const markupRoutes = [
			'/markup-html-tags-and-formatting/',
			'/about/page-markup-and-formatting/',
			'/greek/',
		];

		for ( const route of markupRoutes ) {
			for ( const viewport of [ { width: 1280, height: 800 }, { width: 390, height: 844 } ] ) {
				await page.setViewportSize( viewport );
				const res = await page.goto( route );
				expect( res.status() ).toBe( 200 );
				await assertNoHorizontalOverflow( page );
			}

			const axeResults = await new AxeBuilder( { page } )
				.withRules( [ 'scrollable-region-focusable' ] )
				.analyze();
			expect( axeResults.violations ).toEqual( [] );
		}

		for ( const imageRoute of [ '/markup-image-alignment/', '/about/page-image-alignment/' ] ) {
			for ( const viewport of [ { width: 1280, height: 800 }, { width: 390, height: 844 } ] ) {
				await page.setViewportSize( viewport );
				const res = await page.goto( imageRoute );
				expect( res.status() ).toBe( 200 );
				await assertNoHorizontalOverflow( page );
			}

			const brokenImages = await page.evaluate( () => {
				const imgs = Array.from( document.querySelectorAll( '.wp-block-post-content img' ) );
				return imgs.filter( ( img ) => ! img.complete || img.naturalWidth === 0 ).length;
			} );
			expect( brokenImages ).toBe( 0 );
		}
	} );

	test( 'Clearing floats pushes pagination links below floated images and navigates pages', async ( { page } ) => {
		const res1 = await page.goto( '/about/clearing-floats/' );
		expect( res1.status() ).toBe( 200 );

		const geometry = await page.evaluate( () => {
			const imgs = Array.from( document.querySelectorAll( '.wp-block-post-content img' ) );
			const maxImgBottom = imgs.reduce( ( max, img ) => {
				const r = img.getBoundingClientRect();
				return Math.max( max, r.bottom );
			}, 0 );
			const navLinks = document.querySelector( '.wp-block-post-content .post-nav-links' );
			const navRect = navLinks ? navLinks.getBoundingClientRect() : null;
			return { maxImgBottom, navTop: navRect ? navRect.top : null };
		} );

		expect( geometry.navTop ).not.toBeNull();
		expect( geometry.navTop ).toBeGreaterThanOrEqual( geometry.maxImgBottom - 2 );

		const page2Link = page.locator( '.post-nav-links a.post-page-numbers[href*="/2/"]' );
		await expect( page2Link ).toBeVisible();
		await page2Link.click();
		await page.waitForLoadState( 'domcontentloaded' );
		expect( page.url() ).toContain( '/2/' );
		await expect( page.locator( '.wp-block-post-content' ) ).toContainText( 'This is the second page' );
	} );

	test( 'Edge-case posts (no title, no content, many terms, nested lists) render cleanly across viewports', async ( { page } ) => {
		// Untitled post renders cleanly and links from archive by date.
		const noTitleRes = await page.goto( '/edge-case-no-title/' );
		expect( noTitleRes.status() ).toBe( 200 );
		await expect( page.locator( '.wp-block-post-content' ) ).toContainText( 'This post has no title' );

		const catRes = await page.goto( '/category/edge-case-2/' );
		expect( catRes.status() ).toBe( 200 );
		const noTitleLink = page.locator( 'main a[href*="/edge-case-no-title/"]' ).first();
		await expect( noTitleLink ).toBeVisible();

		// Empty content, many terms, and deep nested lists handle layout without horizontal overflow.
		const edgeRoutes = [
			'/edge-case-no-content/',
			'/edge-case-many-categories/',
			'/edge-case-many-tags/',
			'/edge-case-nested-and-mixed-lists/',
			'/template-featured-image-horizontal/',
			'/template-featured-image-vertical/',
		];

		for ( const route of edgeRoutes ) {
			for ( const viewport of [ { width: 1280, height: 800 }, { width: 390, height: 844 } ] ) {
				await page.setViewportSize( viewport );
				const res = await page.goto( route );
				expect( res.status() ).toBe( 200 );
				await assertNoHorizontalOverflow( page );
			}
		}

		// Featured image posts load actual images cleanly.
		for ( const featRoute of [ '/template-featured-image-horizontal/', '/template-featured-image-vertical/' ] ) {
			await page.goto( featRoute );
			const loaded = await page.evaluate( () => {
				const img = document.querySelector( '.wp-block-post-featured-image img' );
				return Boolean( img && img.complete && img.naturalWidth > 0 );
			} );
			expect( loaded ).toBe( true );
		}
	} );

	test( 'Threaded and paginated comments stay readable on mobile and obey per-page discussion status', async ( { page } ) => {
		await page.setViewportSize( { width: 390, height: 844 } );
		const res = await page.goto( '/template-comments/' );
		expect( res.status() ).toBe( 200 );
		await assertNoHorizontalOverflow( page );

		// Comment nesting reaches deeper threads without overflowing.
		const nestedThreadCount = await page.locator( '.wp-block-comments ol ol ol ol' ).count();
		expect( nestedThreadCount ).toBeGreaterThan( 0 );

		// Comment pagination navigates cleanly.
		const commentPageLinks = page.locator( '.wp-block-comments-pagination a.page-numbers' );
		await expect( commentPageLinks.first() ).toBeVisible();
		await commentPageLinks.first().click();
		await page.waitForLoadState( 'domcontentloaded' );
		expect( page.url() ).toMatch( /comment-page-\d+/ );

		// Pages with comments enabled vs disabled.
		await page.goto( '/about/page-with-comments/' );
		await expect( page.locator( '#commentform' ) ).toBeVisible();

		await page.goto( '/about/page-with-comments-disabled/' );
		await expect( page.locator( '#commentform' ) ).toHaveCount( 0 );
	} );

	test( 'Border preset rename prevents light-border text collisions and pullquotes pass WCAG 2.2 AA contrast', async ( { page } ) => {
		await page.goto( '/wp-6-1-spacing-presets/' );
		const borderTextColors = await page.evaluate( () => {
			return Array.from( document.querySelectorAll( '.has-border-color' ) ).map(
				( el ) => getComputedStyle( el ).color
			);
		} );
		expect( borderTextColors.length ).toBeGreaterThan( 0 );
		for ( const color of borderTextColors ) {
			expect( color ).not.toBe( 'rgb(226, 232, 240)' );
		}

		for ( const route of [ '/wp-6-1-spacing-presets/', '/block-quotes/' ] ) {
			await page.goto( route );
			const axeResults = await new AxeBuilder( { page } )
				.withRules( [ 'color-contrast' ] )
				.analyze();
			expect( axeResults.violations ).toEqual( [] );
		}
	} );

	test( 'Designated Posts page shows its own page title and pins sticky posts when static front page is active', async ( { page, requestUtils } ) => {
		const originalSettings = await requestUtils.rest( { path: '/wp/v2/settings' } );
		const frontPages = await requestUtils.rest( { path: '/wp/v2/pages?slug=front-page' } );
		const blogPages = await requestUtils.rest( { path: '/wp/v2/pages?slug=blog-2' } );

		expect( frontPages.length ).toBeGreaterThan( 0 );
		expect( blogPages.length ).toBeGreaterThan( 0 );

		try {
			await requestUtils.rest( {
				method: 'POST',
				path: '/wp/v2/settings',
				data: {
					show_on_front: 'page',
					page_on_front: frontPages[ 0 ].id,
					page_for_posts: blogPages[ 0 ].id,
				},
			} );

			const frontRes = await page.goto( '/' );
			expect( frontRes.status() ).toBe( 200 );
			await expect( page.locator( 'h1.wp-block-post-title' ) ).toContainText( 'Front Page' );

			const blogRes = await page.goto( '/blog-2/' );
			expect( blogRes.status() ).toBe( 200 );
			await expect( page.locator( 'main h1' ).first() ).toContainText( 'a Blog page' );
			await expect( page.locator( 'main' ) ).not.toContainText( 'Our News & Articles' );
			await expect( page.locator( 'li.sticky' ).first() ).toContainText( 'Template: Sticky' );
		} finally {
			await requestUtils.rest( {
				method: 'POST',
				path: '/wp/v2/settings',
				data: {
					show_on_front: originalSettings.show_on_front,
					page_on_front: originalSettings.page_on_front,
					page_for_posts: originalSettings.page_for_posts,
				},
			} );
		}
	} );
} );
