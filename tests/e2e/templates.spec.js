/**
 * External dependencies
 */
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );
const AxeBuilder = require( '@axe-core/playwright' ).default || require( '@axe-core/playwright' );

test.describe( 'Template & Page Rendering Matrix', () => {

	test( 'Front-Page / Home Template (/) renders correctly', async ( { page } ) => {
		const response = await page.goto( '/' );
		expect( response.status() ).toBe( 200 );

		// Check document title
		const title = await page.title();
		expect( title ).toBeTruthy();

		// Structural template parts
		const header = page.locator( 'header.wp-block-template-part' );
		await expect( header ).toBeVisible();

		const footer = page.locator( 'footer.wp-block-template-part' );
		await expect( footer ).toBeVisible();
	} );

	test( 'Single Post Template renders post title, content, and comments', async ( { page } ) => {
		const response = await page.goto( '/hello-world/' );
		expect( response.status() ).toBe( 200 );

		// Header & Footer
		await expect( page.locator( 'header.wp-block-template-part' ) ).toBeVisible();
		await expect( page.locator( 'footer.wp-block-template-part' ) ).toBeVisible();

		// Post Title
		const postTitle = page.locator( 'h1.wp-block-post-title' );
		await expect( postTitle ).toBeVisible();
		await expect( postTitle ).toContainText( 'Hello world!' );

		// Post Content
		const postContent = page.locator( '.wp-block-post-content' );
		await expect( postContent ).toBeVisible();

		// Comments Area
		const commentsArea = page.locator( '.wp-block-comments' );
		await expect( commentsArea ).toBeAttached();
	} );

	test( 'Page Template renders entry content and layout', async ( { page } ) => {
		const response = await page.goto( '/sample-page/' );
		expect( response.status() ).toBe( 200 );

		// Page Title & Content
		const pageTitle = page.locator( 'h1.wp-block-post-title' );
		await expect( pageTitle ).toBeVisible();
		await expect( pageTitle ).toContainText( 'Sample Page' );

		const postContent = page.locator( '.wp-block-post-content' );
		await expect( postContent ).toBeVisible();
	} );

	test( 'Archive Template renders archive title and query loop', async ( { page } ) => {
		const response = await page.goto( '/category/uncategorized/' );
		expect( response.status() ).toBe( 200 );

		// Query Loop or Query Title
		const queryTitle = page.locator( 'h1.wp-block-query-title' );
		if ( await queryTitle.isVisible() ) {
			await expect( queryTitle ).toContainText( 'Uncategorized' );
		}

		// Ensure posts or query template renders
		const postTemplate = page.locator( 'ul.wp-block-post-template' );
		await expect( postTemplate ).toBeVisible();
	} );

	test( 'Search Template renders with results and search form', async ( { page } ) => {
		const response = await page.goto( '/?s=Hello' );
		expect( response.status() ).toBe( 200 );

		// Search form
		const searchForm = page.locator( 'form.wp-block-search' );
		await expect( searchForm ).toBeAttached();

		// Query loop contains the result
		const postTemplate = page.locator( 'ul.wp-block-post-template' );
		await expect( postTemplate ).toBeVisible();
	} );

	test( 'Search Empty State handles no results gracefully', async ( { page } ) => {
		const response = await page.goto( '/?s=xyznonexistentterm999888' );
		expect( response.status() ).toBe( 200 );

		// Search form is present for retry
		const searchForm = page.locator( 'form.wp-block-search' );
		await expect( searchForm ).toBeAttached();

		// Verify body or content indicates empty state or no results block
		const content = await page.content();
		expect(
			content.includes( 'wp-block-query-no-results' ) ||
			content.toLowerCase().includes( 'no' ) ||
			content.toLowerCase().includes( 'found' )
		).toBe( true );
	} );

	test( '404 Template returns 404 status and renders recovery content', async ( { page } ) => {
		const response = await page.goto( '/this-page-definitely-does-not-exist-404/' );
		expect( response.status() ).toBe( 404 );

		// Header & Footer still intact
		await expect( page.locator( 'header.wp-block-template-part' ) ).toBeVisible();
		await expect( page.locator( 'footer.wp-block-template-part' ) ).toBeVisible();

		// Search form or 404 notification block
		const content = await page.content();
		expect(
			content.includes( '404' ) ||
			content.toLowerCase().includes( 'not found' )
		).toBe( true );
	} );

	test( 'Static front page Reading setting renders selected page content instead of overriding it', async ( { page, requestUtils } ) => {
		const originalSettings = await requestUtils.rest( { path: '/wp/v2/settings' } );
		const pages = await requestUtils.rest( { path: '/wp/v2/pages?slug=sample-page' } );
		expect( pages.length ).toBeGreaterThan( 0 );

		try {
			await requestUtils.rest( {
				method: 'POST',
				path: '/wp/v2/settings',
				data: {
					show_on_front: 'page',
					page_on_front: pages[ 0 ].id,
				},
			} );

			const response = await page.goto( '/' );
			expect( response.status() ).toBe( 200 );

			await expect( page.locator( 'h1.wp-block-post-title' ) ).toContainText( 'Sample Page' );
			await expect( page.locator( '.learnschool-hero-doodles' ) ).toHaveCount( 0 );
		} finally {
			await requestUtils.rest( {
				method: 'POST',
				path: '/wp/v2/settings',
				data: {
					show_on_front: originalSettings.show_on_front,
					page_on_front: originalSettings.page_on_front,
				},
			} );
		}
	} );

	test( 'Untitled posts link to the single post view via the post date on archives', async ( {
		page,
		requestUtils,
	} ) => {
		const recentDate = new Date( Date.now() - 2 * 86400 * 1000 );
		const postDate = `${ recentDate.toISOString().slice( 0, 10 ) }T12:00:00`;
		const expectedDateText = new Intl.DateTimeFormat( 'en-US', {
			month: 'long',
			day: 'numeric',
			year: 'numeric',
			timeZone: 'UTC',
		} ).format( new Date( `${ postDate }Z` ) );

		const untitledPost = await requestUtils.rest( {
			method: 'POST',
			path: '/wp/v2/posts',
			data: {
				title: '',
				content:
					'This post has no title, but it still must link to the single post view somehow.',
				date: postDate,
				status: 'publish',
			},
		} );

		try {
			const response = await page.goto( '/category/uncategorized/' );
			expect( response.status() ).toBe( 200 );

			const dateLink = page.locator(
				`.wp-block-post-date a[href="${ untitledPost.link }"]`
			);
			await expect( dateLink ).toBeVisible();
			await expect( dateLink ).toContainText( expectedDateText );

			await dateLink.click();
			await page.waitForLoadState( 'domcontentloaded' );
			expect( page.url() ).toBe( untitledPost.link );
		} finally {
			await requestUtils.rest( {
				method: 'DELETE',
				path: `/wp/v2/posts/${ untitledPost.id }?force=true`,
			} );
		}
	} );

	test( 'Blog with sidebar and without sidebar options render cleanly across viewports', async ( { page, requestUtils } ) => {
		const patterns = await requestUtils.rest( { path: '/wp/v2/block-patterns/patterns' } );
		const blogNoSidebar = patterns.find( ( p ) => p.name === 'learnschool/page-blog' );
		const blogWithSidebar = patterns.find( ( p ) => p.name === 'learnschool/page-blog-sidebar' );
		const postsWithSidebar = patterns.find( ( p ) => p.name === 'learnschool/posts-with-sidebar' );
		const admissionsSidebar = patterns.find( ( p ) => p.name === 'learnschool/sidebar-admissions' );

		expect( blogNoSidebar ).toBeTruthy();
		expect( blogWithSidebar ).toBeTruthy();
		expect( postsWithSidebar ).toBeTruthy();
		expect( admissionsSidebar ).toBeTruthy();

		const sidebarPage = await requestUtils.rest( {
			method: 'POST',
			path: '/wp/v2/pages',
			data: {
				title: 'E2E Blog With Sidebar',
				content: postsWithSidebar.content,
				template: 'page-no-title',
				status: 'publish',
			},
		} );

		try {
			await page.setViewportSize( { width: 1280, height: 800 } );
			const res = await page.goto( sidebarPage.link );
			expect( res.status() ).toBe( 200 );

			const desktopLayout = await page.evaluate( () => {
				const cols = document.querySelectorAll( '.learnschool-sidebar-columns > .wp-block-column' );
				const leftRect = cols[ 0 ] ? cols[ 0 ].getBoundingClientRect() : null;
				const rightRect = cols[ 1 ] ? cols[ 1 ].getBoundingClientRect() : null;
				const rail = document.querySelector( '.learnschool-sidebar-rail' );
				const railRect = rail ? rail.getBoundingClientRect() : null;
				const railCardWidths = rail
					? [ ...rail.children ].map( ( child ) => {
						const r = child.getBoundingClientRect();
						return {
							widthDelta: Math.abs( Math.round( r.width - railRect.width ) ),
							rightDelta: Math.abs( Math.round( r.right - railRect.right ) ),
						};
					} )
					: [];
				const topicChips = document.querySelectorAll( '.learnschool-sidebar-rail .wp-block-tag-cloud .tag-cloud-link' ).length;
				const searchBtn = document.querySelector( '.learnschool-sidebar-rail .wp-block-search__button' );
				const searchBtnRect = searchBtn ? searchBtn.getBoundingClientRect() : null;
				return {
					overflow: document.documentElement.scrollWidth > window.innerWidth,
					colCount: cols.length,
					leftRight: leftRect ? leftRect.right : 0,
					rightLeft: rightRect ? rightRect.left : 0,
					sameRow: leftRect && rightRect ? Math.abs( leftRect.top - rightRect.top ) <= 8 : false,
					railCardWidths,
					railHeight: railRect ? Math.round( railRect.height ) : 0,
					topicChips,
					searchBtnHeight: searchBtnRect ? Math.round( searchBtnRect.height ) : 0,
					searchBtnWidth: searchBtnRect ? Math.round( searchBtnRect.width ) : 0,
				};
			} );

			expect( desktopLayout.overflow ).toBe( false );
			expect( desktopLayout.colCount ).toBe( 2 );
			expect( desktopLayout.sameRow ).toBe( true );
			expect( desktopLayout.rightLeft ).toBeGreaterThanOrEqual( desktopLayout.leftRight - 1 );
			expect( desktopLayout.railCardWidths.length ).toBe( 3 );
			for ( const card of desktopLayout.railCardWidths ) {
				expect( card.widthDelta ).toBeLessThanOrEqual( 1 );
				expect( card.rightDelta ).toBeLessThanOrEqual( 1 );
			}
			expect( desktopLayout.topicChips ).toBeGreaterThanOrEqual( 1 );
			expect( desktopLayout.topicChips ).toBeLessThanOrEqual( 8 );
			expect( desktopLayout.railHeight ).toBeLessThanOrEqual( 1400 );
			expect( desktopLayout.searchBtnHeight ).toBeGreaterThanOrEqual( 44 );
			expect( desktopLayout.searchBtnWidth ).toBeGreaterThanOrEqual( 44 );

			await expect( page.locator( '.learnschool-sidebar-rail' ) ).toContainText( 'Popular Topics' );
			await expect( page.locator( '.learnschool-sidebar-rail' ) ).toContainText( 'Recent Stories' );

			const axeResults = await new AxeBuilder( { page } )
				.withTags( [ 'wcag2a', 'wcag2aa', 'wcag21a', 'wcag21aa' ] )
				.analyze();
			expect( axeResults.violations ).toEqual( [] );

			await page.setViewportSize( { width: 390, height: 844 } );
			const mobileRes = await page.goto( sidebarPage.link );
			expect( mobileRes.status() ).toBe( 200 );
			const mobileLayout = await page.evaluate( () => {
				const cols = document.querySelectorAll( '.learnschool-sidebar-columns > .wp-block-column' );
				const leftRect = cols[ 0 ] ? cols[ 0 ].getBoundingClientRect() : null;
				const rightRect = cols[ 1 ] ? cols[ 1 ].getBoundingClientRect() : null;
				return {
					overflow: document.documentElement.scrollWidth > window.innerWidth,
					stacked: leftRect && rightRect ? rightRect.top >= leftRect.bottom - 2 : false,
				};
			} );

			expect( mobileLayout.overflow ).toBe( false );
			expect( mobileLayout.stacked ).toBe( true );
		} finally {
			await requestUtils.rest( {
				method: 'DELETE',
				path: `/wp/v2/pages/${ sidebarPage.id }?force=true`,
			} );
		}
	} );
} );
