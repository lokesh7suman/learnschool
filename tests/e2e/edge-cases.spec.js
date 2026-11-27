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
		const res1 = await page.goto( '/template-paginated/' );
		expect( res1.status() ).toBe( 200 );

		// Content before break should be visible
		await expect( page.locator( '.wp-block-post-content' ) ).toContainText( 'Post Page 1' );

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
		await expect( page.locator( '.wp-block-post-content' ) ).toContainText( 'Post Page 2' );
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

	test( 'Sticky post appears in query loop on tag archive with distinct prominence', async ( { page } ) => {
		await page.goto( '/tag/sticky-2/' );

		// Verify query loop renders posts on the archive
		const postTemplate = page.locator( 'ul.wp-block-post-template' );
		await expect( postTemplate ).toBeVisible();

		// Check that the sticky post item is rendered with sticky class and featured badge
		const stickyItem = postTemplate.locator( 'li' ).filter( {
			has: page.locator( 'a[href*="template-sticky"]' ),
		} ).first();
		await expect( stickyItem ).toBeVisible();

		const hasStickyProminence = await stickyItem.evaluate( ( li ) => {
			const hasClass = li.classList.contains( 'sticky' ) || li.classList.contains( 'learnschool-is-sticky' );
			const terms = li.querySelector( '.wp-block-post-terms' );
			const beforeContent = terms ? getComputedStyle( terms, '::before' ).content : '';
			return { hasClass, beforeContent };
		} );
		expect( hasStickyProminence.hasClass ).toBe( true );
		expect( hasStickyProminence.beforeContent ).not.toBe( 'none' );
		expect( hasStickyProminence.beforeContent ).not.toBe( '' );
	} );

	test( 'Mixed query loop grid aligns row baselines on desktop and stacks cleanly without placeholders on mobile', async ( { page } ) => {
		// 1. Check Front Page 3-card latest showcase respects 3-card row limit & alignment
		await page.setViewportSize( { width: 1280, height: 800 } );
		await page.goto( '/' );

		const homeCards = page.locator( '#blog ul.wp-block-post-template > li' );
		const homeCount = await homeCards.count();
		expect( homeCount ).toBeLessThanOrEqual( 3 );

		if ( homeCount >= 2 ) {
			const homeMetrics = await page.evaluate( () => {
				const items = [ ...document.querySelectorAll( '#blog ul.wp-block-post-template > li' ) ];
				return items.map( ( li ) => {
					const card = li.querySelector( '.is-style-learnschool-card' ) || li;
					const body = card.querySelector( ':scope > .wp-block-group > .wp-block-group:last-child' );
					const title = li.querySelector( '.wp-block-post-title' );
					const readMore = li.querySelector( '.wp-block-read-more' );
					const excerpt = li.querySelector( '.wp-block-post-excerpt' );
					const r = card.getBoundingClientRect();
					const cardStyles = getComputedStyle( card );
					const innerCardWidth = r.width - ( parseFloat( cardStyles.borderLeftWidth ) || 0 ) - ( parseFloat( cardStyles.borderRightWidth ) || 0 );
					const tr = title ? title.getBoundingClientRect() : null;
					const rm = readMore ? readMore.getBoundingClientRect() : null;
					const ex = excerpt ? excerpt.getBoundingClientRect() : null;
					const readMorePaddingTop = readMore ? parseFloat( getComputedStyle( readMore ).paddingTop ) || 0 : 0;
					return {
						height: Math.round( r.height ),
						titleTop: tr ? Math.round( tr.top - r.top ) : 0,
						titleLeft: tr ? Math.round( tr.left - r.left ) : 0,
						bodyWidthDelta: body ? Math.round( Math.abs( innerCardWidth - body.getBoundingClientRect().width ) ) : 0,
						readMoreBottom: rm ? Math.round( r.bottom - rm.bottom ) : 0,
						readMoreGap: rm && ex ? Math.round( rm.top + readMorePaddingTop - ex.bottom ) : 16,
					};
				} );
			} );

			const heights = homeMetrics.map( ( m ) => m.height );
			const titleTops = homeMetrics.map( ( m ) => m.titleTop );
			const titleLefts = homeMetrics.map( ( m ) => m.titleLeft );
			const readMoreBottoms = homeMetrics.map( ( m ) => m.readMoreBottom );
			expect( Math.max( ...heights ) - Math.min( ...heights ) ).toBeLessThanOrEqual( 4 );
			expect( Math.max( ...titleTops ) - Math.min( ...titleTops ) ).toBeLessThanOrEqual( 4 );
			expect( Math.max( ...titleLefts ) - Math.min( ...titleLefts ) ).toBeLessThanOrEqual( 2 );
			expect( Math.max( ...readMoreBottoms ) - Math.min( ...readMoreBottoms ) ).toBeLessThanOrEqual( 4 );
			for ( const metric of homeMetrics ) {
				expect( metric.bodyWidthDelta ).toBeLessThanOrEqual( 2 );
				expect( metric.readMoreGap ).toBeGreaterThanOrEqual( 12 );
			}
		}

		// 2. Check Category Archive mixed 2-column grid on desktop vs mobile
		await page.goto( '/category/uncategorized/' );
		const archiveItems = await page.evaluate( () => {
			const items = [ ...document.querySelectorAll( 'ul.wp-block-post-template > li' ) ];
			return items.map( ( li ) => {
				const card = li.querySelector( '.is-style-learnschool-card' ) || li;
				const body = card.querySelector( ':scope > .wp-block-group > .wp-block-group:last-child' );
				const title = li.querySelector( '.wp-block-post-title' );
				const readMore = li.querySelector( '.wp-block-read-more' );
				const hasImg = !! li.querySelector( '.wp-block-post-featured-image' );
				const r = card.getBoundingClientRect();
				const cardStyles = getComputedStyle( card );
				const innerCardWidth = r.width - ( parseFloat( cardStyles.borderLeftWidth ) || 0 ) - ( parseFloat( cardStyles.borderRightWidth ) || 0 );
				const tr = title ? title.getBoundingClientRect() : null;
				const rm = readMore ? readMore.getBoundingClientRect() : null;
				return {
					hasImg,
					top: Math.round( r.top ),
					height: Math.round( r.height ),
					titleTop: tr ? Math.round( tr.top - r.top ) : 0,
					titleLeft: tr ? Math.round( tr.left - r.left ) : 0,
					bodyWidthDelta: body ? Math.round( Math.abs( innerCardWidth - body.getBoundingClientRect().width ) ) : 0,
					readMoreBottom: rm ? Math.round( r.bottom - rm.bottom ) : 0,
				};
			} );
		} );

		// Compare cards sharing a row (same top coordinate)
		if ( archiveItems.length >= 2 ) {
			for ( const item of archiveItems ) {
				expect( item.bodyWidthDelta ).toBeLessThanOrEqual( 2 );
			}
			for ( let i = 0; i + 1 < archiveItems.length; i += 2 ) {
				const left = archiveItems[ i ];
				const right = archiveItems[ i + 1 ];
				if ( Math.abs( left.top - right.top ) <= 2 ) {
					expect( Math.abs( left.height - right.height ) ).toBeLessThanOrEqual( 4 );
					expect( Math.abs( left.titleTop - right.titleTop ) ).toBeLessThanOrEqual( 6 );
					expect( Math.abs( left.titleLeft - right.titleLeft ) ).toBeLessThanOrEqual( 2 );
					expect( Math.abs( left.readMoreBottom - right.readMoreBottom ) ).toBeLessThanOrEqual( 4 );
				}
			}
		}

		// 3. Mobile 390px: no placeholder height inflation on imageless cards and zero overflow
		await page.setViewportSize( { width: 390, height: 844 } );
		await page.goto( '/category/uncategorized/' );
		const mobileCheck = await page.evaluate( () => {
			const overflow = document.documentElement.scrollWidth > window.innerWidth;
			const imageless = [ ...document.querySelectorAll( 'ul.wp-block-post-template > li' ) ]
				.filter( ( li ) => ! li.querySelector( '.wp-block-post-featured-image' ) )
				.map( ( li ) => {
					const card = li.querySelector( '.is-style-learnschool-card' ) || li;
					const title = li.querySelector( '.wp-block-post-title' );
					const firstGroup = card.querySelector( ':scope > .wp-block-group:first-child' );
					const beforeContent = firstGroup ? getComputedStyle( firstGroup, '::before' ).content : 'none';
					return {
						beforeContent,
						titleTop: title ? Math.round( title.getBoundingClientRect().top - card.getBoundingClientRect().top ) : 0,
					};
				} );
			return { overflow, imageless };
		} );
		expect( mobileCheck.overflow ).toBe( false );
		for ( const card of mobileCheck.imageless ) {
			expect( card.beforeContent ).toBe( 'none' );
			expect( card.titleTop ).toBeLessThan( 160 );
		}
	} );

	test( 'Horizontal query list handles mixed and all-imageless posts without border artifacts or misalignment', async ( { page, requestUtils } ) => {
		const patterns = await requestUtils.rest( { path: '/wp/v2/block-patterns/patterns' } );
		const listPattern = patterns.find( ( p ) => p.name === 'learnschool/query-posts-list' );
		expect( listPattern ).toBeTruthy();

		// Create a temporary mixed horizontal list page (sticky imageless + latest with/without images)
		const mixedPage = await requestUtils.rest( {
			method: 'POST',
			path: '/wp/v2/pages',
			data: {
				title: 'E2E Query List Mixed',
				content: listPattern.content,
				status: 'publish',
			},
		} );

		// Create an all-imageless horizontal list page scoped to the "classic" or "sticky-2" tag/query
		const imagelessContent = listPattern.content.replace(
			'"sticky":""',
			'"sticky":"only"'
		);
		const imagelessPage = await requestUtils.rest( {
			method: 'POST',
			path: '/wp/v2/pages',
			data: {
				title: 'E2E Query List Imageless',
				content: imagelessContent,
				status: 'publish',
			},
		} );

		try {
			// 1. Mixed list on desktop (1280px)
			await page.setViewportSize( { width: 1280, height: 800 } );
			await page.goto( mixedPage.link );

			const mixedResult = await page.evaluate( () => {
				const overflow = document.documentElement.scrollWidth > window.innerWidth;
				const cards = [ ...document.querySelectorAll( '.learnschool-post-list-card' ) ].map( ( card ) => {
					const cs = getComputedStyle( card );
					const title = card.querySelector( '.wp-block-post-title' );
					const r = card.getBoundingClientRect();
					return {
						borderTopWidth: parseFloat( cs.borderTopWidth ),
						borderBottomWidth: parseFloat( cs.borderBottomWidth ),
						titleLeft: title ? Math.round( title.getBoundingClientRect().left - r.left ) : 0,
						hasImg: !! card.querySelector( '.wp-block-post-featured-image' ),
					};
				} );
				return { overflow, cards };
			} );

			expect( mixedResult.overflow ).toBe( false );
			expect( mixedResult.cards.length ).toBeGreaterThan( 0 );
			for ( const card of mixedResult.cards ) {
				// Symmetric border thickness (no 4px top-border glitch)
				expect( Math.abs( card.borderTopWidth - card.borderBottomWidth ) ).toBeLessThanOrEqual( 0.5 );
			}
			if ( mixedResult.cards.some( ( c ) => c.hasImg ) && mixedResult.cards.some( ( c ) => ! c.hasImg ) ) {
				const lefts = mixedResult.cards.map( ( c ) => c.titleLeft );
				expect( Math.max( ...lefts ) - Math.min( ...lefts ) ).toBeLessThanOrEqual( 4 );
			}

			// 2. All-imageless list on desktop: studio motif ::before cover renders cleanly on left
			await page.goto( imagelessPage.link );
			const imagelessResult = await page.evaluate( () => {
				const overflow = document.documentElement.scrollWidth > window.innerWidth;
				const cards = [ ...document.querySelectorAll( '.learnschool-post-list-card' ) ].map( ( card ) => {
					const beforeStyles = getComputedStyle( card, '::before' );
					const excerpt = card.querySelector( '.wp-block-post-excerpt' );
					return {
						beforeContent: beforeStyles.content,
						beforeBgImage: beforeStyles.backgroundImage,
						beforeWidth: parseFloat( beforeStyles.width ),
						excerptWidth: excerpt ? Math.round( excerpt.getBoundingClientRect().width ) : 0,
					};
				} );
				return { overflow, cards };
			} );
			expect( imagelessResult.overflow ).toBe( false );
			expect( imagelessResult.cards.length ).toBeGreaterThan( 0 );
			for ( const card of imagelessResult.cards ) {
				expect( card.beforeContent ).not.toBe( 'none' );
				expect( card.beforeBgImage ).toContain( 'post-cover-motif.svg' );
				expect( card.beforeWidth ).toBeGreaterThanOrEqual( 200 );
				expect( card.excerptWidth ).toBeLessThanOrEqual( 820 );
			}

			// 3. Mobile 390px: zero horizontal overflow and no ::before cover box on mobile
			await page.setViewportSize( { width: 390, height: 844 } );
			await page.goto( mixedPage.link );
			const mobileResult = await page.evaluate( () => {
				const overflow = document.documentElement.scrollWidth > window.innerWidth;
				const imagelessBefores = [ ...document.querySelectorAll( '.learnschool-post-list-card' ) ]
					.filter( ( card ) => ! card.querySelector( '.wp-block-post-featured-image' ) )
					.map( ( card ) => getComputedStyle( card, '::before' ).content );
				return { overflow, imagelessBefores };
			} );
			expect( mobileResult.overflow ).toBe( false );
			for ( const beforeContent of mobileResult.imagelessBefores ) {
				expect( beforeContent ).toBe( 'none' );
			}
		} finally {
			await requestUtils.rest( {
				method: 'DELETE',
				path: `/wp/v2/pages/${ mixedPage.id }?force=true`,
			} );
			await requestUtils.rest( {
				method: 'DELETE',
				path: `/wp/v2/pages/${ imagelessPage.id }?force=true`,
			} );
		}
	} );

	test( 'Search and edge-case posts (no content, many categories) render cleanly in query grids', async ( { page } ) => {
		await page.setViewportSize( { width: 1280, height: 800 } );
		const response = await page.goto( '/?s=Edge+Case' );
		expect( response.status() ).toBe( 200 );

		const result = await page.evaluate( () => {
			const overflow = document.documentElement.scrollWidth > window.innerWidth;
			const cards = [ ...document.querySelectorAll( 'ul.wp-block-post-template > li' ) ];
			const hasReadMore = cards.every( ( li ) => !! li.querySelector( '.wp-block-read-more' ) );
			const maxBodyWidthDelta = cards.reduce( ( max, li ) => {
				const card = li.querySelector( '.is-style-learnschool-card' ) || li;
				const body = card.querySelector( ':scope > .wp-block-group > .wp-block-group:last-child' );
				if ( ! body ) {
					return max;
				}
				const cardStyles = getComputedStyle( card );
				const innerCardWidth = card.getBoundingClientRect().width - ( parseFloat( cardStyles.borderLeftWidth ) || 0 ) - ( parseFloat( cardStyles.borderRightWidth ) || 0 );
				return Math.max( max, Math.round( Math.abs( innerCardWidth - body.getBoundingClientRect().width ) ) );
			}, 0 );
			return { overflow, count: cards.length, hasReadMore, maxBodyWidthDelta };
		} );
		expect( result.overflow ).toBe( false );
		expect( result.count ).toBeGreaterThan( 0 );
		expect( result.hasReadMore ).toBe( true );
		expect( result.maxBodyWidthDelta ).toBeLessThanOrEqual( 2 );

		await page.setViewportSize( { width: 390, height: 844 } );
		await page.goto( '/?s=Edge+Case' );
		const mobileOverflow = await page.evaluate(
			() => document.documentElement.scrollWidth > window.innerWidth
		);
		expect( mobileOverflow ).toBe( false );
	} );

	test( 'Special-character site title renders with single escaping across title, logo aria-label, and copyright binding', async ( { page, requestUtils } ) => {
		const originalSettings = await requestUtils.rest( { path: '/wp/v2/settings' } );
		const originalTitle = originalSettings.title || '';

		try {
			await requestUtils.rest( {
				method: 'POST',
				path: '/wp/v2/settings',
				data: { title: "St. Jude's & Kids Academy" },
			} );

			const res = await page.goto( '/' );
			expect( res.status() ).toBe( 200 );

			const logoAria = await page.locator( 'header .wp-block-site-logo a.custom-logo-link' ).first().getAttribute( 'aria-label' );
			expect( logoAria ).toContain( 'St. Jude' );
			expect( logoAria ).toContain( '&' );
			expect( logoAria ).not.toContain( '&amp;' );
			expect( logoAria ).not.toContain( '&#039;' );

			const titleAccent = await page.locator( 'header .wp-block-site-title .learnschool-title-accent' ).first().textContent();
			expect( titleAccent ).toBe( 'Academy' );

			const footerText = await page.locator( 'footer' ).innerText();
			expect( footerText ).toContain( 'St. Jude' );
			expect( footerText ).not.toContain( '&amp;' );
			expect( footerText ).not.toContain( '&#039;' );
		} finally {
			await requestUtils.rest( {
				method: 'POST',
				path: '/wp/v2/settings',
				data: { title: originalTitle },
			} );
		}
	} );

	test( 'Carousel scopes direct columns, standalone Pullquote loads styles, and query-param nav links differentiate active tabs', async ( { page, requestUtils } ) => {
		const content = [
			'<!-- wp:group {"className":"learnschool-teachers-carousel"} -->',
			'<div class="wp-block-group learnschool-teachers-carousel">',
			'<!-- wp:columns {"className":"learnschool-teachers-track"} -->',
			'<div class="wp-block-columns learnschool-teachers-track">',
			'<!-- wp:column --><div class="wp-block-column"><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><p>Inner Column A</p></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><p>Inner Column B</p></div><!-- /wp:column --></div><!-- /wp:columns --><p>Teacher One</p></div><!-- /wp:column -->',
			'<!-- wp:column --><div class="wp-block-column"><p>Teacher Two</p></div><!-- /wp:column -->',
			'</div><!-- /wp:columns -->',
			'</div><!-- /wp:group -->',
			'<!-- wp:pullquote --><figure class="wp-block-pullquote"><blockquote><p>Independent pullquote test</p><cite>Tester</cite></blockquote></figure><!-- /wp:pullquote -->',
			'<!-- wp:navigation {"overlayMenu":"never"} -->',
			'<!-- wp:navigation-link {"label":"STEM Track","url":"https://development.test/e2e-regression-check/?track=stem","kind":"custom"} /-->',
			'<!-- wp:navigation-link {"label":"Arts Track","url":"https://development.test/e2e-regression-check/?track=arts","kind":"custom"} /-->',
			'<!-- /wp:navigation -->',
		].join( '\n' );

		const testPage = await requestUtils.rest( {
			method: 'POST',
			path: '/wp/v2/pages',
			data: {
				title: 'E2E Regression Check',
				slug: 'e2e-regression-check',
				content,
				status: 'publish',
			},
		} );

		try {
			const pageUrl = new URL( testPage.link );
			pageUrl.searchParams.set( 'track', 'stem' );
			const res = await page.goto( pageUrl.toString() );
			expect( res.status() ).toBe( 200 );

			// Only the 2 direct column slides are tagged, excluding the 2 nested inner columns.
			await expect( page.locator( '.learnschool-teachers-track [data-slide-slot]' ) ).toHaveCount( 2 );

			// Standalone core/pullquote receives theme radius without core/quote present on page.
			const pullquoteRadius = await page.locator( '.wp-block-pullquote' ).evaluate(
				( el ) => window.getComputedStyle( el ).borderRadius
			);
			expect( pullquoteRadius ).toBe( '28px' );

			// Query-string nav link marks matching track active and leaves sibling track inactive.
			const stemCurrent = await page.getByRole( 'link', { name: 'STEM Track' } ).getAttribute( 'aria-current' );
			const artsCurrent = await page.getByRole( 'link', { name: 'Arts Track' } ).getAttribute( 'aria-current' );
			expect( stemCurrent ).toBe( 'page' );
			expect( artsCurrent ).toBeNull();
		} finally {
			await requestUtils.rest( {
				method: 'DELETE',
				path: `/wp/v2/pages/${ testPage.id }?force=true`,
			} );
		}
	} );

} );
