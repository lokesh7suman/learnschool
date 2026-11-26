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
			await expect( page.locator( 'svg.learnschool-admin-header__logo' ) ).toBeVisible();
			await expect( page.getByRole( 'heading', { name: 'Site Setup Guide' } ) ).toBeVisible();
			await expect( page.locator( '.learnschool-admin-step-item' ) ).toHaveCount( 4 );
			await expect( page.locator( '.learnschool-admin-swatch' ) ).toHaveCount( 4 );
			await expect( page.locator( '.learnschool-admin-starter-page' ) ).toHaveCount( 3 );
			await expect( page.getByRole( 'heading', { name: 'WordPress Launch Settings' } ) ).toBeVisible();
			await expect( page.getByRole( 'heading', { name: 'Recommended Companion Plugin' } ) ).toBeVisible();
			await expect( page.getByRole( 'heading', { name: 'CodeClove School Management System' } ) ).toBeVisible();
			await expect( page.locator( '.learnschool-admin-plugin-card__icon svg' ) ).toBeVisible();
			await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );
			await expect( page.locator( '#contextual-help-link' ) ).toBeVisible();

			// Steps avoid duplicate settings links already provided in WordPress Launch Settings.
			await expect( page.locator( '.learnschool-admin-steps a[href*="options-general.php"]' ) ).toHaveCount( 0 );
			await expect( page.locator( '.learnschool-admin-steps a[href*="options-reading.php"]' ) ).toHaveCount( 0 );

			// Active palette swatch is disabled (no redundant request); switching applies once, and reload clears notice.
			const initialActiveSwatch = page.locator( 'button.learnschool-admin-swatch.is-active' );
			await expect( initialActiveSwatch ).toContainText( 'Default' );
			await expect( initialActiveSwatch ).toBeDisabled();
			expect( await initialActiveSwatch.evaluate( ( btn ) => btn.closest( 'form' ) !== null ) ).toBe( false );

			try {
				const coralBtn = page.locator( 'button.learnschool-admin-swatch', { hasText: 'Coral Playground' } );
				await expect( coralBtn ).toBeEnabled();
				await coralBtn.click();
				expect( page.url() ).not.toContain( 'learnschool_notice' );

				const feedback = page.locator( '.learnschool-admin-wrap .learnschool-admin-feedback' );
				await expect( feedback ).toBeVisible();
				await expect( feedback ).toContainText( 'Palette applied' );
				await expect( feedback.locator( '.notice-dismiss' ) ).toBeVisible();

				const coralActive = page.locator( 'button.learnschool-admin-swatch.is-active' );
				await expect( coralActive ).toContainText( 'Coral Playground' );
				await expect( coralActive ).toBeDisabled();

				// Reloading the page does not re-display the one-time notice.
				await page.reload( { waitUntil: 'domcontentloaded' } );
				await expect( page.locator( '.learnschool-admin-feedback' ) ).toHaveCount( 0 );

				// Stale legacy notice URLs do not re-trigger the banner and strip the query arg.
				await page.goto( '/wp-admin/admin.php?page=learnschool&learnschool_notice=style_applied', {
					waitUntil: 'domcontentloaded',
				} );
				await expect( page.locator( '.learnschool-admin-feedback' ) ).toHaveCount( 0 );
				await expect( page ).not.toHaveURL( /learnschool_notice=/ );
			} finally {
				const defaultBtn = page.locator( 'button.learnschool-admin-swatch', { hasText: 'Default' } );
				if ( await defaultBtn.isEnabled() ) {
					await defaultBtn.click();
					await expect( page.locator( 'button.learnschool-admin-swatch.is-active' ) ).toContainText( 'Default' );
				}
			}

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
				await expect( actionButton ).toHaveText( /Open Dashboard|Manage Plugins/ );

				await page.goto( '/wp-admin/index.php', { waitUntil: 'domcontentloaded' } );
				await expect( page.locator( '.learnschool-plugin-notice' ) ).toHaveCount( 0 );
			} else {
				await expect( page.locator( '.learnschool-admin-status' ) ).toHaveText( 'Active' );
				await expect( actionButton ).toHaveText( /Open Dashboard|Manage Plugins/ );
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
