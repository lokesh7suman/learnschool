/**
 * External dependencies
 */
const path = require( 'node:path' );
const { execFileSync } = require( 'node:child_process' );
const { test, expect } = require( '@wordpress/e2e-test-utils-playwright' );

const WP_ROOT = path.resolve( __dirname, '../../../../..' );

function runWpEval( phpCode ) {
	try {
		execFileSync( 'wp', [ `--path=${ WP_ROOT }`, 'eval', phpCode ], {
			stdio: 'ignore',
		} );
	} catch {
		// Ignore when running outside local WP-CLI host environment.
	}
}

function resetNoticeDismissalMeta() {
	runWpEval( 'delete_metadata( "user", 0, "learnschool_dismissed_plugin_notice", "", true );' );
}

function restorePluginInactiveState() {
	try {
		execFileSync(
			'wp',
			[ `--path=${ WP_ROOT }`, 'plugin', 'deactivate', 'codeclove-school-management' ],
			{ stdio: 'ignore' }
		);
	} catch {
		// Ignore if already inactive or WP-CLI unavailable.
	}
}

test.describe( 'Appearance -> LearnSchool Setup & Companion Plugin Audit', () => {

	test( 'Setup screen renders companion plugin card and supports inline REST activation cleanly', async ( { page } ) => {
		restorePluginInactiveState();
		const pageErrors = [];
		const failedAssets = [];

		page.on( 'pageerror', ( err ) => pageErrors.push( err.message ) );
		page.on( 'response', ( res ) => {
			if ( res.url().includes( '/themes/learnschool/' ) && res.status() >= 400 ) {
				failedAssets.push( `${ res.status() } ${ res.url() }` );
			}
		} );

		try {
			const response = await page.goto( '/wp-admin/themes.php?page=learnschool-welcome', {
				waitUntil: 'domcontentloaded',
			} );
			expect( response.status() ).toBeLessThan( 400 );

			await expect( page.getByRole( 'heading', { name: 'Welcome to LearnSchool' } ) ).toBeVisible();
			await expect( page.getByRole( 'heading', { name: 'Recommended Companion Plugin' } ) ).toBeVisible();
			await expect( page.getByRole( 'heading', { name: 'CodeClove School Management System' } ) ).toBeVisible();
			await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );

			const actionButton = page.locator( '.learnschool-admin-plugin-card__actions a.learnschool-plugin-action' );
			await expect( actionButton ).toBeVisible();
			await expect( actionButton ).toHaveText( 'Activate Plugin' );

			const href = await actionButton.getAttribute( 'href' );
			expect( href ).toBeTruthy();
			expect( href ).toMatch( /plugins\.php/ );

			const detailsButton = page.locator( '.learnschool-admin-plugin-card__actions a.open-plugin-details-modal' );
			await expect( detailsButton ).toBeVisible();
			await expect( detailsButton ).toHaveAttribute( 'href', /plugin=codeclove-school-management/ );

			// Activate inline via WP REST /wp/v2/plugins without leaving setup page.
			const restResponsePromise = page.waitForResponse(
				( res ) =>
					res.url().includes( '/wp/v2/plugins/codeclove-school-management/codeclove-school-management' ) &&
					res.request().method() === 'POST'
			);
			await actionButton.click();
			const restResponse = await restResponsePromise;
			expect( restResponse.status() ).toBe( 200 );

			await expect( page.locator( '.learnschool-admin-status' ) ).toHaveText( 'Active' );
			await expect( actionButton ).toHaveText( 'Manage Plugins' );

			// Confirm notice stays hidden across Dashboard when plugin is active.
			await page.goto( '/wp-admin/index.php', { waitUntil: 'domcontentloaded' } );
			await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );

			const bodyHtml = await page.evaluate( () => document.body.innerHTML );
			expect( bodyHtml ).not.toMatch( /(<b>(Warning|Notice|Fatal error|Deprecated|Parse error)<\/b>:|There has been a critical error)/i );
			expect( pageErrors, `Uncaught JS errors: ${ pageErrors.join( '; ' ) }` ).toEqual( [] );
			expect( failedAssets, `Failed theme assets: ${ failedAssets.join( '; ' ) }` ).toEqual( [] );
		} finally {
			restorePluginInactiveState();
		}
	} );

	test( 'Dashboard & Themes show clean dismissible notice, Plugins stays clean, and after_switch_theme resets dismissal', async ( { page } ) => {
		restorePluginInactiveState();
		resetNoticeDismissalMeta();

		try {
			await page.goto( '/wp-admin/index.php', { waitUntil: 'domcontentloaded' } );
			const dashboardNotice = page.locator( '.learnschool-plugin-notice' );
			await expect( dashboardNotice ).toBeVisible();
			await expect( dashboardNotice ).toContainText( 'CodeClove School Management System' );
			await expect( dashboardNotice ).toContainText( 'Optional' );
			await expect( dashboardNotice.locator( '.learnschool-plugin-notice__setup' ) ).toHaveAttribute(
				'href',
				/themes\.php\?page=learnschool-welcome/
			);
			// No redundant inline dismiss text link alongside core × button.
			await expect( dashboardNotice.getByRole( 'link', { name: /dismiss/i } ) ).toHaveCount( 0 );

			// Plugins screen must stay uncluttered.
			await page.goto( '/wp-admin/plugins.php', { waitUntil: 'domcontentloaded' } );
			await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );

			// Themes screen renders the refined notice and persists × dismissal across reload.
			await page.goto( '/wp-admin/themes.php', { waitUntil: 'domcontentloaded' } );
			const themesNotice = page.locator( '.learnschool-plugin-notice' );
			await expect( themesNotice ).toBeVisible();

			const dismissAjax = page.waitForResponse(
				( res ) => res.url().includes( 'admin-ajax.php' ) && res.status() === 200
			);
			await themesNotice.locator( 'button.notice-dismiss' ).click();
			await dismissAjax;

			await page.reload( { waitUntil: 'domcontentloaded' } );
			await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );

			// Switching back to LearnSchool resets dismissal once.
			runWpEval( 'do_action( "after_switch_theme", "twentytwentyfive" );' );
			await page.reload( { waitUntil: 'domcontentloaded' } );
			await expect( page.locator( '.learnschool-plugin-notice' ) ).toBeVisible();
		} finally {
			resetNoticeDismissalMeta();
			restorePluginInactiveState();
		}
	} );
} );
