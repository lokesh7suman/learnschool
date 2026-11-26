/**
 * External dependencies
 */
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );

test.describe( 'Appearance -> LearnSchool Setup & Companion Plugin Audit', () => {

	test( 'Setup screen renders recommended companion plugin card with native WP actions and zero errors', async ( { page } ) => {
		const pageErrors = [];
		const failedAssets = [];

		page.on( 'pageerror', ( err ) => pageErrors.push( err.message ) );
		page.on( 'response', ( res ) => {
			if ( res.url().includes( '/themes/learnschool/' ) && res.status() >= 400 ) {
				failedAssets.push( `${ res.status() } ${ res.url() }` );
			}
		} );

		const response = await page.goto( '/wp-admin/themes.php?page=learnschool-welcome', {
			waitUntil: 'domcontentloaded',
		} );
		expect( response.status() ).toBeLessThan( 400 );

		await expect( page.getByRole( 'heading', { name: 'Welcome to LearnSchool' } ) ).toBeVisible();
		await expect( page.getByRole( 'heading', { name: 'Recommended Companion Plugin' } ) ).toBeVisible();
		await expect( page.getByRole( 'heading', { name: /School Management System & ERP/i } ) ).toBeVisible();

		const actionButton = page.locator( '.learnschool-admin-plugin-card__actions a.button-primary, .learnschool-admin-plugin-card__actions a.button-secondary' ).first();
		await expect( actionButton ).toBeVisible();

		const href = await actionButton.getAttribute( 'href' );
		expect( href ).toBeTruthy();
		expect( href ).toMatch( /(plugins\.php|update\.php)/ );

		const detailsButton = page.locator( '.learnschool-admin-plugin-card__actions a.open-plugin-details-modal' );
		await expect( detailsButton ).toBeVisible();
		await expect( detailsButton ).toHaveAttribute( 'href', /plugin=codeclove-school-management/ );

		const bodyHtml = await page.evaluate( () => document.body.innerHTML );
		expect( bodyHtml ).not.toMatch( /(<b>(Warning|Notice|Fatal error|Deprecated|Parse error)<\/b>:|There has been a critical error)/i );
		expect( pageErrors, `Uncaught JS errors: ${ pageErrors.join( '; ' ) }` ).toEqual( [] );
		expect( failedAssets, `Failed theme assets: ${ failedAssets.join( '; ' ) }` ).toEqual( [] );
	} );
} );
