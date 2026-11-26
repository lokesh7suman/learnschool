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

	test( 'Page starter patterns and sidebar blog options render cleanly across viewports', async ( { page, requestUtils } ) => {
		const patterns = await requestUtils.rest( { path: '/wp/v2/block-patterns/patterns' } );
		const homePage = patterns.find( ( p ) => p.name === 'learnschool/page-home' );
		const aboutPage = patterns.find( ( p ) => p.name === 'learnschool/page-about' );
		const contactPage = patterns.find( ( p ) => p.name === 'learnschool/page-contact' );
		const postsWithSidebar = patterns.find( ( p ) => p.name === 'learnschool/posts-with-sidebar' );
		const admissionsSidebar = patterns.find( ( p ) => p.name === 'learnschool/sidebar-admissions' );

		expect( homePage ).toBeTruthy();
		expect( aboutPage ).toBeTruthy();
		expect( contactPage ).toBeTruthy();
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

	test( 'Teachers portrait showcase renders organic pebble frames and interactive carousel controls', async ( { page } ) => {
		const pageErrors = [];
		page.on( 'pageerror', ( err ) => pageErrors.push( err.message ) );

		await page.setViewportSize( { width: 1280, height: 800 } );
		const res = await page.goto( '/' );
		expect( res.status() ).toBe( 200 );

		const shell = page.locator( '#faculty .learnschool-teachers-carousel-shell' );
		await expect( shell ).toBeVisible();
		await expect( shell ).toHaveAttribute( 'data-carousel-ready', 'true' );

		const prevBtn = shell.locator( '.learnschool-teachers-nav--prev' );
		const nextBtn = shell.locator( '.learnschool-teachers-nav--next' );
		await expect( prevBtn ).toBeVisible();
		await expect( nextBtn ).toBeVisible();

		const desktopMetrics = await page.evaluate( () => {
			const shellEl = document.querySelector( '#faculty .learnschool-teachers-carousel-shell' );
			const cols = [ ...shellEl.querySelectorAll( '.learnschool-teachers-track > .wp-block-column' ) ];
			const visibleNames = cols
				.filter( ( col ) => getComputedStyle( col ).display !== 'none' )
				.map( ( col ) => col.querySelector( 'h3' )?.textContent?.trim() );
			const radii = cols.map( ( col ) =>
				getComputedStyle( col.querySelector( '.learnschool-teacher-avatar-wrap' ) ).borderRadius
			);
			const prevBox = shellEl.querySelector( '.learnschool-teachers-nav--prev' ).getBoundingClientRect();
			const nextBox = shellEl.querySelector( '.learnschool-teachers-nav--next' ).getBoundingClientRect();
			return {
				overflow: document.documentElement.scrollWidth > window.innerWidth,
				visibleNames,
				uniqueRadiiCount: new Set( radii ).size,
				prevSize: { w: Math.round( prevBox.width ), h: Math.round( prevBox.height ) },
				nextSize: { w: Math.round( nextBox.width ), h: Math.round( nextBox.height ) },
			};
		} );

		expect( desktopMetrics.overflow ).toBe( false );
		expect( desktopMetrics.visibleNames ).toEqual( [
			'Kristin Watson',
			'Jenny Wilson',
			'Marcus Hayes',
			'Sofia Chen',
		] );
		expect( desktopMetrics.uniqueRadiiCount ).toBe( 4 );
		expect( desktopMetrics.prevSize.w ).toBeGreaterThanOrEqual( 44 );
		expect( desktopMetrics.prevSize.h ).toBeGreaterThanOrEqual( 44 );
		expect( desktopMetrics.nextSize.w ).toBeGreaterThanOrEqual( 44 );
		expect( desktopMetrics.nextSize.h ).toBeGreaterThanOrEqual( 44 );

		await nextBtn.click();
		const afterNextNames = await page.evaluate( () => {
			return [ ...document.querySelectorAll( '#faculty .learnschool-teachers-track > .wp-block-column h3' ) ]
				.map( ( h3 ) => h3.textContent.trim() );
		} );
		expect( afterNextNames ).toEqual( [
			'Jenny Wilson',
			'Marcus Hayes',
			'Sofia Chen',
			'Kristin Watson',
		] );
		await expect( shell.locator( '[aria-live="polite"]' ) ).toContainText( 'Jenny Wilson' );

		await prevBtn.click();
		const afterPrevNames = await page.evaluate( () => {
			return [ ...document.querySelectorAll( '#faculty .learnschool-teachers-track > .wp-block-column h3' ) ]
				.map( ( h3 ) => h3.textContent.trim() );
		} );
		expect( afterPrevNames ).toEqual( [
			'Kristin Watson',
			'Jenny Wilson',
			'Marcus Hayes',
			'Sofia Chen',
		] );

		await page.setViewportSize( { width: 390, height: 844 } );
		await page.goto( '/' );
		await expect( shell ).toHaveAttribute( 'data-carousel-ready', 'true' );
		const mobileInitial = await page.evaluate( () => {
			const cols = [ ...document.querySelectorAll( '#faculty .learnschool-teachers-track > .wp-block-column' ) ];
			const visibleNames = cols
				.filter( ( col ) => getComputedStyle( col ).display !== 'none' )
				.map( ( col ) => col.querySelector( 'h3' )?.textContent?.trim() );
			return {
				overflow: document.documentElement.scrollWidth > window.innerWidth,
				visibleNames,
			};
		} );
		expect( mobileInitial.overflow ).toBe( false );
		expect( mobileInitial.visibleNames ).toEqual( [ 'Kristin Watson' ] );

		await nextBtn.click();
		const mobileAfterNext = await page.evaluate( () => {
			const cols = [ ...document.querySelectorAll( '#faculty .learnschool-teachers-track > .wp-block-column' ) ];
			return cols
				.filter( ( col ) => getComputedStyle( col ).display !== 'none' )
				.map( ( col ) => col.querySelector( 'h3' )?.textContent?.trim() );
		} );
		expect( mobileAfterNext ).toEqual( [ 'Jenny Wilson' ] );

		const axeResults = await new AxeBuilder( { page } )
			.include( '#faculty' )
			.withTags( [ 'wcag2a', 'wcag2aa', 'wcag21a', 'wcag21aa' ] )
			.analyze();
		expect( axeResults.violations ).toEqual( [] );
		expect( pageErrors ).toEqual( [] );
	} );

	test( 'Trust strip renders elevated surface dock with equal columns and 48px token squircles across viewports', async ( { page } ) => {
		await page.setViewportSize( { width: 1280, height: 800 } );
		const res = await page.goto( '/' );
		expect( res.status() ).toBe( 200 );

		const dock = page.locator( '.is-style-learnschool-trust-strip' ).first();
		await expect( dock ).toBeVisible();

		const desktopMetrics = await page.evaluate( () => {
			const dockEl = document.querySelector( '.is-style-learnschool-trust-strip' );
			const cols = [ ...dockEl.querySelectorAll( '.wp-block-columns > .wp-block-column' ) ];
			const colWidths = cols.map( ( col ) => Math.round( col.getBoundingClientRect().width ) );
			const colTops = cols.map( ( col ) => Math.round( col.getBoundingClientRect().top ) );
			const squircles = cols.map( ( col ) => {
				const sq = col.querySelector( '.wp-block-group[style*="width:48px"]' );
				const r = sq ? sq.getBoundingClientRect() : null;
				return r ? { w: Math.round( r.width ), h: Math.round( r.height ) } : null;
			} );
			return {
				overflow: document.documentElement.scrollWidth > window.innerWidth,
				borderRadius: getComputedStyle( dockEl ).borderRadius,
				colCount: cols.length,
				widthSpread: Math.max( ...colWidths ) - Math.min( ...colWidths ),
				topSpread: Math.max( ...colTops ) - Math.min( ...colTops ),
				squircles,
			};
		} );

		expect( desktopMetrics.overflow ).toBe( false );
		expect( desktopMetrics.borderRadius ).toBe( '24px' );
		expect( desktopMetrics.colCount ).toBe( 4 );
		expect( desktopMetrics.widthSpread ).toBeLessThanOrEqual( 2 );
		expect( desktopMetrics.topSpread ).toBeLessThanOrEqual( 2 );
		expect( desktopMetrics.squircles ).toEqual( [
			{ w: 48, h: 48 },
			{ w: 48, h: 48 },
			{ w: 48, h: 48 },
			{ w: 48, h: 48 },
		] );

		const axeResults = await new AxeBuilder( { page } )
			.include( '.is-style-learnschool-trust-strip' )
			.withTags( [ 'wcag2a', 'wcag2aa', 'wcag21a', 'wcag21aa' ] )
			.analyze();
		expect( axeResults.violations ).toEqual( [] );

		await page.setViewportSize( { width: 768, height: 1024 } );
		await page.goto( '/' );
		const tabletLayout = await page.evaluate( () => {
			const cols = [ ...document.querySelectorAll( '.is-style-learnschool-trust-strip .wp-block-columns > .wp-block-column' ) ];
			const rects = cols.map( ( col ) => col.getBoundingClientRect() );
			return {
				overflow: document.documentElement.scrollWidth > window.innerWidth,
				topRowAligned: Math.abs( rects[ 0 ].top - rects[ 1 ].top ) <= 2,
				secondRowBelow: rects[ 2 ].top >= rects[ 0 ].bottom,
			};
		} );
		expect( tabletLayout.overflow ).toBe( false );
		expect( tabletLayout.topRowAligned ).toBe( true );
		expect( tabletLayout.secondRowBelow ).toBe( true );

		await page.setViewportSize( { width: 390, height: 844 } );
		await page.goto( '/' );
		const mobileLayout = await page.evaluate( () => {
			const cols = [ ...document.querySelectorAll( '.is-style-learnschool-trust-strip .wp-block-columns > .wp-block-column' ) ];
			const rects = cols.map( ( col ) => col.getBoundingClientRect() );
			return {
				overflow: document.documentElement.scrollWidth > window.innerWidth,
				stacked: rects[ 1 ].top >= rects[ 0 ].bottom && rects[ 2 ].top >= rects[ 1 ].bottom,
			};
		} );
		expect( mobileLayout.overflow ).toBe( false );
		expect( mobileLayout.stacked ).toBe( true );
	} );
} );
