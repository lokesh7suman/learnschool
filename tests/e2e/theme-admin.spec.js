/**
 * External dependencies
 */
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );
const AxeBuilder = require( '@axe-core/playwright' ).default || require( '@axe-core/playwright' );

test.describe( 'LearnSchool Onboarding & Setup Guide under Appearance', () => {

	test( 'Setup Guide lives under Appearance without a top-level admin menu', async ( { page } ) => {
		await page.goto( '/wp-admin/themes.php?page=learnschool', { waitUntil: 'domcontentloaded' } );

		const menuAudit = await page.evaluate( () => {
			const topLevelIds = [ ...document.querySelectorAll( '#adminmenu > li.menu-top' ) ].map( ( li ) => li.id );
			const appearanceLink = document.querySelector( '#menu-appearance .wp-submenu a[href="themes.php?page=learnschool"]' );
			return {
				hasTopLevelMenu: topLevelIds.includes( 'toplevel_page_learnschool' ),
				appearanceLinkText: appearanceLink?.textContent?.trim() || '',
				appearanceIsCurrent: appearanceLink?.classList.contains( 'current' ) || false,
			};
		} );

		expect( menuAudit.hasTopLevelMenu ).toBe( false );
		expect( menuAudit.appearanceLinkText ).toBe( 'LearnSchool' );
		expect( menuAudit.appearanceIsCurrent ).toBe( true );
	} );

	test( 'Setup Guide is purely informational with read-only swatches, layout overview, and zero custom options', async ( { page } ) => {
		const pageErrors = [];
		const failedAssets = [];

		page.on( 'pageerror', ( err ) => pageErrors.push( err.message ) );
		page.on( 'response', ( res ) => {
			if ( res.url().includes( '/themes/learnschool/' ) && res.status() >= 400 ) {
				failedAssets.push( `${ res.status() } ${ res.url() }` );
			}
		} );

		const response = await page.goto( '/wp-admin/themes.php?page=learnschool', {
			waitUntil: 'domcontentloaded',
		} );
		expect( response.status() ).toBeLessThan( 400 );

		await expect( page.getByRole( 'heading', { name: 'Welcome to LearnSchool' } ) ).toBeVisible();
		await expect( page.locator( 'svg.learnschool-admin-header__logo' ) ).toBeVisible();
		await expect( page.getByRole( 'heading', { name: 'Site Setup Guide' } ) ).toBeVisible();
		await expect( page.locator( '.learnschool-admin-step-item' ) ).toHaveCount( 4 );
		await expect( page.locator( '#contextual-help-link' ) ).toBeVisible();

		// Pure onboarding guide: zero forms, option inputs, or custom mutation controls on this page.
		await expect( page.locator( '.learnschool-admin-page form' ) ).toHaveCount( 0 );
		await expect( page.locator( '.learnschool-admin-page input, .learnschool-admin-page select' ) ).toHaveCount( 0 );
		await expect( page.locator( '.learnschool-admin-step-note' ) ).toHaveCount( 0 );
		await expect( page.getByRole( 'heading', { name: 'Recommended Companion Plugin' } ) ).toHaveCount( 0 );
		await expect( page.locator( '.learnschool-admin-plugin-card' ) ).toHaveCount( 0 );
		await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );

		// Step 2: 4 palette preview swatches link directly to Global Styles without custom forms.
		const swatches = page.locator( 'a.learnschool-admin-swatch' );
		await expect( swatches ).toHaveCount( 4 );
		for ( let i = 0; i < 4; i++ ) {
			await expect( swatches.nth( i ) ).toHaveAttribute( 'href', /site-editor\.php\?p=(?:%2F|\/)styles/ );
		}
		await expect( page.locator( 'a.learnschool-admin-swatch.is-active' ) ).toHaveCount( 1 );
		await expect( page.getByRole( 'link', { name: 'Style Book' } ) ).toHaveCount( 0 );

		// Step 3: 6 read-only starter layout labels + native Add New Page shortcut.
		await expect( page.locator( '.learnschool-admin-layout-chip' ) ).toHaveCount( 6 );
		await expect( page.getByRole( 'link', { name: 'Add New Page' } ) ).toHaveAttribute(
			'href',
			/post-new\.php\?post_type=page/
		);

		// Side rail: Included in LearnSchool panel only (Support & Resources card removed).
		await expect( page.getByRole( 'heading', { name: 'Support & Resources' } ) ).toHaveCount( 0 );
		await expect( page.getByRole( 'heading', { name: 'Included in LearnSchool' } ) ).toBeVisible();

		// Setup Guide content passes WCAG 2.1 AA accessibility checks.
		const a11yResults = await new AxeBuilder( { page } )
			.include( '.learnschool-admin-page' )
			.withTags( [ 'wcag2a', 'wcag2aa', 'wcag21a', 'wcag21aa' ] )
			.analyze();
		expect( a11yResults.violations ).toEqual( [] );

		// Dashboard & Themes screens remain clean with zero theme notices.
		await page.goto( '/wp-admin/index.php', { waitUntil: 'domcontentloaded' } );
		await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );
		await page.goto( '/wp-admin/themes.php', { waitUntil: 'domcontentloaded' } );
		await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );

		const bodyHtml = await page.evaluate( () => document.body.innerHTML );
		expect( bodyHtml ).not.toMatch( /(<b>(Warning|Notice|Fatal error|Deprecated|Parse error)<\/b>:|There has been a critical error)/i );
		expect( pageErrors, `Uncaught JS errors: ${ pageErrors.join( '; ' ) }` ).toEqual( [] );
		expect( failedAssets, `Failed theme assets: ${ failedAssets.join( '; ' ) }` ).toEqual( [] );
	} );
} );
