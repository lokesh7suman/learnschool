/**
 * External dependencies
 */
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );

test.describe( 'WordPress.org TRT Edge-Case Test Suite', () => {

	test( 'Special Characters & Markup in Post Titles render without layout breakage', async ( { page } ) => {
		// 1. Post with extreme special characters
		const res1 = await page.goto( '/title-with-special-characters/' );
		expect( res1.status() ).toBe( 200 );

		const specialTitle = page.locator( 'h1.wp-block-post-title' );
		await expect( specialTitle ).toBeVisible();

		// Ensure title doesn't overflow the viewport
		const titleBox = await specialTitle.boundingBox();
		const viewport = page.viewportSize();
		expect( titleBox.width ).toBeLessThanOrEqual( viewport.width );

		// 2. Post with embedded HTML markup in title
		const res2 = await page.goto( '/markup-title-with-markup/' );
		expect( res2.status() ).toBe( 200 );

		const markupTitle = page.locator( 'h1.wp-block-post-title' );
		await expect( markupTitle ).toBeVisible();
		const innerHtml = await markupTitle.innerHTML();
		expect( innerHtml.includes( '<' ) && innerHtml.includes( '>' ) ).toBe( true );

		// 3. Post with unbroken 85-character word title (Taumatawhakatangihangakoauau...)
		const res3 = await page.goto( '/title-should-not-overflow-the-content-area/' );
		expect( res3.status() ).toBe( 200 );
		const headingOverflows = await page.evaluate( () => {
			const h1 = document.querySelector( 'h1.wp-block-post-title' );
			const headingOverflow = h1 ? h1.scrollWidth > h1.clientWidth + 1 : true;
			const docOverflow = document.documentElement.scrollWidth > window.innerWidth;
			return { headingOverflow, docOverflow };
		} );
		expect( headingOverflows.docOverflow, 'Unbroken long title caused horizontal page overflow' ).toBe( false );
		expect( headingOverflows.headingOverflow, 'Unbroken long title clipped or overflowed its h1 container' ).toBe( false );
	} );

	test( 'Paginated posts (<!--nextpage-->) render page numbers and navigate correctly', async ( { page } ) => {
		// Page 1
		const res1 = await page.goto( '/page-break/' );
		expect( res1.status() ).toBe( 200 );

		// Content before break should be visible
		await expect( page.locator( '.wp-block-post-content' ) ).toContainText( 'Content before the page break' );

		// Page numbers pagination should be present
		const pagination = page.locator( '.post-nav-links, .post-page-numbers' );
		await expect( pagination.first() ).toBeVisible();

		// Navigate to Page 2
		const page2Link = page.locator( 'a.post-page-numbers[href*="/2/"]' );
		await expect( page2Link ).toBeVisible();
		await page2Link.click();

		await page.waitForLoadState( 'domcontentloaded' );
		expect( page.url() ).toContain( '/2/' );

		// Content after break should be visible on page 2
		await expect( page.locator( '.wp-block-post-content' ) ).toContainText( 'Content after the page break' );
	} );

	test( 'Password-Protected posts render secure form and unlock with password', async ( { page } ) => {
		await page.goto( '/template-password-protected/' );

		// Password form should be displayed
		const passwordForm = page.locator( 'form.post-password-form' );
		await expect( passwordForm ).toBeVisible();

		const passwordInput = passwordForm.locator( 'input[type="password"]' );
		await expect( passwordInput ).toBeVisible();

		const submitButton = passwordForm.locator( 'input[type="submit"]' );
		await expect( submitButton ).toBeVisible();

		// Fill the official test password: "enter"
		await passwordInput.fill( 'enter' );
		await submitButton.click();

		await page.waitForLoadState( 'domcontentloaded' );

		// Content should now be unlocked and form should no longer be visible
		const content = page.locator( '.wp-block-post-content' );
		await expect( content ).toBeVisible();
		await expect( content ).not.toContainText( 'This content is password-protected' );
	} );

	test( 'Deeply nested comments render cleanly without horizontal overflow on mobile', async ( { page } ) => {
		// Set mobile viewport (iPhone 14)
		await page.setViewportSize( { width: 390, height: 844 } );
		await page.goto( '/template-comments/' );

		// Comments block should be attached
		const commentsArea = page.locator( '.wp-block-comments' );
		await expect( commentsArea ).toBeAttached();

		// Check for horizontal overflow (page scrollWidth must not exceed viewport width)
		const isOverflowing = await page.evaluate( () => {
			return document.documentElement.scrollWidth > window.innerWidth;
		} );
		expect( isOverflowing, 'Page content horizontally overflows on mobile viewport' ).toBe( false );
	} );

	test( 'Sticky post appears in query loop on tag archive with distinct prominence', async ( { page } ) => {
		await page.goto( '/tag/sticky-2/' );

		// Verify query loop renders posts on the archive
		const postTemplate = page.locator( 'ul.wp-block-post-template' );
		await expect( postTemplate ).toBeVisible();

		// Check that the sticky post item is rendered in the list
		const stickyPostLink = postTemplate.locator( 'a[href*="template-sticky"]' ).first();
		await expect( stickyPostLink ).toBeVisible();
	} );

} );
