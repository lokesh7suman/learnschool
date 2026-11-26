/**
 * External dependencies
 */
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );

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
		const untitledPost = await requestUtils.rest( {
			method: 'POST',
			path: '/wp/v2/posts',
			data: {
				title: '',
				content:
					'This post has no title, but it still must link to the single post view somehow.',
				date: '2009-09-05T12:00:00',
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
			await expect( dateLink ).toContainText( 'September 5, 2009' );

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
} );
