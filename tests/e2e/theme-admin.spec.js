/**
 * External dependencies
 */
const path = require( 'node:path' );
const { execFileSync } = require( 'node:child_process' );
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );

const WP_ROOT = path.resolve( __dirname, '../../../../..' );

function resetNoticeDismissalMeta() {
	try {
		execFileSync(
			'wp',
			[
				`--path=${ WP_ROOT }`,
				'eval',
				'delete_metadata( "user", 0, "learnschool_dismissed_plugin_notice", "", true );',
			],
			{ stdio: 'ignore' }
		);
	} catch {
		// Ignore when running outside local WP-CLI host environment.
	}
}

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

	test( 'Dashboard and Themes screens display dismissible companion plugin notice that persists dismissal', async ( { page } ) => {
		resetNoticeDismissalMeta();

		try {
			await page.goto( '/wp-admin/index.php', { waitUntil: 'domcontentloaded' } );
			const dashboardNotice = page.locator( '.learnschool-plugin-notice' );
			await expect( dashboardNotice ).toBeVisible();
			await expect( dashboardNotice ).toContainText( 'School Management System & ERP' );

			const setupLink = dashboardNotice.getByRole( 'link', { name: 'Recommended Plugins & Setup' } );
			await expect( setupLink ).toHaveAttribute( 'href', /themes\.php\?page=learnschool-welcome/ );

			await page.goto( '/wp-admin/themes.php', { waitUntil: 'domcontentloaded' } );
			const themesNotice = page.locator( '.learnschool-plugin-notice' );
			await expect( themesNotice ).toBeVisible();

			// Dismiss via native WordPress close button and confirm AJAX persistence across reload.
			const dismissAjax = page.waitForResponse( ( res ) =>
				res.url().includes( 'admin-ajax.php' ) && res.status() === 200
			);
			await themesNotice.locator( 'button.notice-dismiss' ).click();
			await dismissAjax;

			await page.reload( { waitUntil: 'domcontentloaded' } );
			await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );
		} finally {
			resetNoticeDismissalMeta();
		}
	} );
} );
