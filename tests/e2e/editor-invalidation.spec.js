/**
 * External dependencies
 */
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );

test.describe( 'Gutenberg Site Editor & Block Invalidation Audit', () => {

	test( 'Site Editor loads cleanly with zero block recovery warnings', async ( { page } ) => {
		await page.goto( '/wp-admin/site-editor.php', { waitUntil: 'domcontentloaded' } );

		// Verify we are authenticated and on the Editor screen
		const pageTitle = await page.title();
		expect( pageTitle ).toContain( 'Editor' );

		// Give editor frame time to parse and render initial template
		await page.waitForTimeout( 2000 );

		// Check for Gutenberg "Attempt Block Recovery" warning
		const blockRecoveryWarnings = page.locator( '.block-editor-warning' );
		const warningCount = await blockRecoveryWarnings.count();
		expect(
			warningCount,
			'Block recovery warning detected in Site Editor (violates Gutenberg Markup Invariant)'
		).toBe( 0 );
	} );

	test( 'Site Editor template parts (Comments, Header, Footer, Post Meta, Sidebar) load with zero block recovery warnings', async ( { page } ) => {
		const parts = [ 'comments', 'header', 'footer', 'post-meta', 'sidebar' ];

		for ( const part of parts ) {
			await page.goto(
				`/wp-admin/site-editor.php?postId=learnschool//${ part }&postType=wp_template_part&canvas=edit`,
				{ waitUntil: 'domcontentloaded' }
			);

			await page.waitForTimeout( 2500 );

			// Check all frames (Site editor renders canvas inside iframe)
			for ( const frame of page.frames() ) {
				const warnings = await frame
					.locator( '.block-editor-warning' )
					.count()
					.catch( () => 0 );
				expect(
					warnings,
					`Block recovery warning detected in template part "${ part }" (frame: ${ frame.url() })`
				).toBe( 0 );

				if ( part === 'post-meta' ) {
					const invalidDates = await frame
						.locator( '.wp-block-post-date' )
						.filter( { hasText: 'Invalid date' } )
						.count()
						.catch( () => 0 );
					expect(
						invalidDates,
						'Post Date rendered "Invalid date" inside post-meta template part'
					).toBe( 0 );
				}
			}
		}
	} );

	test( 'All registered theme patterns expose clean markup and parse in Gutenberg without block recovery', async ( { page, requestUtils } ) => {
		await page.goto( '/wp-admin/post-new.php?post_type=page', { waitUntil: 'domcontentloaded' } );
		await page.waitForFunction( () => Boolean( window.wp?.blocks?.parse && window.wp?.data ) );
		await page.locator( '.editor-visual-editor, .edit-post-visual-editor' ).first().waitFor( { timeout: 15000 } );

		const all = await requestUtils.rest( { path: '/wp/v2/block-patterns/patterns' } );
		expect( Array.isArray( all ) ).toBe( true );
		const patterns = all.filter( ( p ) => p.name && p.name.startsWith( 'learnschool/' ) );

		expect( patterns.length ).toBeGreaterThanOrEqual( 20 );

		for ( const pattern of patterns ) {
			expect( pattern.title ).toBeTruthy();
			expect( pattern.content ).toBeTruthy();
			expect( pattern.content.includes( '<?php' ) ).toBe( false );
			expect( pattern.content.includes( '?>' ) ).toBe( false );
			expect( pattern.content.toLowerCase().includes( 'fatal error' ) ).toBe( false );

			const result = await page.evaluate( ( content ) => {
				const parsed = window.wp.blocks.parse( content );
				const invalid = [];

				function walk( blocks, pathStr = '' ) {
					blocks.forEach( ( block, idx ) => {
						const blockPath = `${ pathStr }/${ idx }:${ block.name }`;
						if ( ! block.isValid || block.name === 'core/freeform' || block.name === 'core/missing' ) {
							invalid.push( { path: blockPath, name: block.name, isValid: block.isValid } );
						}
						if (
							( block.name === 'core/paragraph' || block.name === 'core/heading' ) &&
							typeof block.attributes?.content === 'string' &&
							block.attributes.content.includes( '<svg' )
						) {
							invalid.push( { path: blockPath, name: block.name, reason: 'inline-svg-in-richtext' } );
						}
						if ( block.innerBlocks?.length ) {
							walk( block.innerBlocks, blockPath );
						}
					} );
				}

				walk( parsed );
				window.wp.data.dispatch( 'core/block-editor' ).resetBlocks( parsed );

				return {
					topCount: parsed.length,
					invalid,
				};
			}, pattern.content );

			expect(
				result.topCount,
				`Pattern "${ pattern.name }" parsed into ${ result.topCount } top-level blocks (expected 1)`
			).toBe( 1 );
			expect(
				result.invalid,
				`Pattern "${ pattern.name }" has invalid or freeform blocks: ${ JSON.stringify( result.invalid ) }`
			).toEqual( [] );

			for ( const frame of page.frames() ) {
				const warnings = await frame.locator( '.block-editor-warning' ).count().catch( () => 0 );
				expect(
					warnings,
					`Block recovery warning detected for pattern "${ pattern.name }"`
				).toBe( 0 );
			}
		}
	} );

} );
