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

test.describe( 'LearnSchool Top-Level Menu, Setup & Companion Plugin Audit', () => {

	test( 'Top-level LearnSchool sidebar menu sits above Appearance with monochrome SVG icon and core submenus', async ( { page } ) => {
		await page.goto( '/wp-admin/admin.php?page=learnschool', { waitUntil: 'domcontentloaded' } );

		const sidebarOrder = await page.evaluate( () => {
			const items = [ ...document.querySelectorAll( '#adminmenu > li.menu-top' ) ].map( ( li ) => li.id );
			const learnIdx = items.indexOf( 'toplevel_page_learnschool' );
			const themesIdx = items.indexOf( 'menu-appearance' );
			const iconBg = document.querySelector( '#toplevel_page_learnschool .wp-menu-image' )?.style.backgroundImage || '';
			const subLinks = [ ...document.querySelectorAll( '#toplevel_page_learnschool .wp-submenu a' ) ].map( ( a ) => ( {
				text: a.textContent?.trim(),
				href: a.getAttribute( 'href' ),
			} ) );
			return { learnIdx, themesIdx, iconBg, subLinks };
		} );

		expect( sidebarOrder.learnIdx ).toBeGreaterThanOrEqual( 0 );
		expect( sidebarOrder.themesIdx ).toBeGreaterThan( sidebarOrder.learnIdx );
		expect( sidebarOrder.iconBg ).toContain( 'data:image/svg+xml;base64,' );
		expect( sidebarOrder.subLinks.map( ( l ) => l.text ) ).toEqual( [ 'Setup Guide', 'Site Editor', 'Global Styles' ] );
		expect( sidebarOrder.subLinks.find( ( l ) => l.text === 'Site Editor' )?.href ).toContain( 'site-editor.php' );
		expect( sidebarOrder.subLinks.find( ( l ) => l.text === 'Global Styles' )?.href ).toContain( 'site-editor.php' );
	} );

	test( 'Setup screen renders companion plugin card and supports valid core/REST actions for any install state', async ( { page } ) => {
		const pageErrors = [];
		const failedAssets = [];

		page.on( 'pageerror', ( err ) => pageErrors.push( err.message ) );
		page.on( 'response', ( res ) => {
			if ( res.url().includes( '/themes/learnschool/' ) && res.status() >= 400 ) {
				failedAssets.push( `${ res.status() } ${ res.url() }` );
			}
		} );

		let deactivatedInTest = false;
		try {
			const response = await page.goto( '/wp-admin/admin.php?page=learnschool', {
				waitUntil: 'domcontentloaded',
			} );
			expect( response.status() ).toBeLessThan( 400 );

			await expect( page.getByRole( 'heading', { name: 'Welcome to LearnSchool' } ) ).toBeVisible();
			await expect( page.getByRole( 'heading', { name: 'Site Setup Guide' } ) ).toBeVisible();
			await expect( page.locator( '.learnschool-admin-step-item' ) ).toHaveCount( 4 );
			await expect( page.locator( '.learnschool-admin-swatch' ) ).toHaveCount( 4 );
			await expect( page.locator( '.learnschool-admin-starter-page' ) ).toHaveCount( 5 );
			await expect( page.getByRole( 'heading', { name: 'WordPress Launch Settings' } ) ).toBeVisible();
			await expect( page.getByRole( 'heading', { name: 'Recommended Companion Plugin' } ) ).toBeVisible();
			await expect( page.getByRole( 'heading', { name: 'CodeClove School Management System' } ) ).toBeVisible();
			await expect( page.locator( '.learnschool-admin-plugin-card__icon svg' ) ).toBeVisible();
			await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );
			await expect( page.locator( '#contextual-help-link' ) ).toBeVisible();

			const actionButton = page.locator( '.learnschool-admin-plugin-card__actions a.learnschool-plugin-action' );
			await expect( actionButton ).toBeVisible();

			const initialState = await actionButton.getAttribute( 'data-plugin-state' );
			const href = await actionButton.getAttribute( 'href' );
			expect( href ).toBeTruthy();

			const detailsButton = page.locator( '.learnschool-admin-plugin-card__actions a.open-plugin-details-modal, .learnschool-admin-plugin-card__actions a.button-secondary' ).last();
			await expect( detailsButton ).toBeVisible();

			if ( initialState === 'not-installed' ) {
				await expect( actionButton ).toHaveText( 'Install Plugin' );
				expect( href ).toMatch( /update\.php\?action=install-plugin/ );
				await expect( detailsButton ).toHaveAttribute( 'href', /plugin=codeclove-school-management/ );
			} else if ( initialState === 'inactive' ) {
				await expect( actionButton ).toHaveText( 'Activate Plugin' );
				expect( href ).toMatch( /plugins\.php\?action=activate/ );
				await expect( detailsButton ).toHaveAttribute( 'href', /plugin=codeclove-school-management/ );

				const restResponsePromise = page.waitForResponse(
					( res ) =>
						res.url().includes( '/wp/v2/plugins/codeclove-school-management/codeclove-school-management' ) &&
						res.request().method() === 'POST'
				);
				await actionButton.click();
				const restResponse = await restResponsePromise;
				expect( restResponse.status() ).toBe( 200 );
				deactivatedInTest = true;

				await expect( page.locator( '.learnschool-admin-status' ) ).toHaveText( 'Active' );
				await expect( actionButton ).toHaveText( 'Manage Plugins' );

				await page.goto( '/wp-admin/index.php', { waitUntil: 'domcontentloaded' } );
				await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );
			} else {
				await expect( page.locator( '.learnschool-admin-status' ) ).toHaveText( 'Active' );
				await expect( actionButton ).toHaveText( 'Manage Plugins' );
				await page.goto( '/wp-admin/index.php', { waitUntil: 'domcontentloaded' } );
				await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );
			}

			const bodyHtml = await page.evaluate( () => document.body.innerHTML );
			expect( bodyHtml ).not.toMatch( /(<b>(Warning|Notice|Fatal error|Deprecated|Parse error)<\/b>:|There has been a critical error)/i );
			expect( pageErrors, `Uncaught JS errors: ${ pageErrors.join( '; ' ) }` ).toEqual( [] );
			expect( failedAssets, `Failed theme assets: ${ failedAssets.join( '; ' ) }` ).toEqual( [] );
		} finally {
			if ( deactivatedInTest ) {
				restorePluginInactiveState();
			}
		}
	} );

	test( 'Dashboard & Themes show clean dismissible notice, Plugins stays clean, and after_switch_theme resets dismissal', async ( { page } ) => {
		resetNoticeDismissalMeta();

		try {
			await page.goto( '/wp-admin/index.php', { waitUntil: 'domcontentloaded' } );
			const isActive = await page.evaluate( () => ! document.querySelector( '.learnschool-plugin-notice' ) );
			if ( isActive ) {
				// If plugin is already installed & active, confirm it also stays hidden on Themes & Plugins.
				await page.goto( '/wp-admin/themes.php', { waitUntil: 'domcontentloaded' } );
				await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );
				return;
			}

			const dashboardNotice = page.locator( '.learnschool-plugin-notice' );
			await expect( dashboardNotice ).toBeVisible();
			await expect( dashboardNotice ).toContainText( 'CodeClove School Management System' );
			await expect( dashboardNotice ).toContainText( 'Optional' );
			await expect( dashboardNotice.locator( '.learnschool-plugin-notice__icon svg' ) ).toBeVisible();
			await expect( dashboardNotice.locator( '.learnschool-plugin-notice__icon img' ) ).toHaveCount( 0 );
			await expect( dashboardNotice.locator( '.learnschool-plugin-notice__setup' ) ).toHaveAttribute(
				'href',
				/admin\.php\?page=learnschool/
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
		}
	} );
} );
