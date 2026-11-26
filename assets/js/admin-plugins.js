/**
 * LearnSchool Companion Plugin Actions & Notice Dismissal
 *
 * Installs or activates recommended WordPress.org plugins inline via WordPress Core
 * REST API (falling back to native core links when filesystem prompts are needed)
 * and persists permanent notice dismissal via admin-ajax.
 *
 * @package
 * @since 1.0.0
 */

( function () {
	/**
	 * Encodes a plugin basename for WP REST `/wp/v2/plugins/{plugin}` route matching.
	 *
	 * @param {string} basename Plugin basename such as "folder/file.php".
	 * @return {string} URL-safe plugin path without trailing .php extension.
	 */
	function encodePluginRestPath( basename ) {
		return basename
			.replace( /\.php$/i, '' )
			.split( '/' )
			.map( encodeURIComponent )
			.join( '/' );
	}

	/**
	 * Shows an accessible inline error message next to the triggering container.
	 *
	 * @param {HTMLElement|null} container Parent notice or card element.
	 * @param {string}           message   Human-readable error string.
	 * @return {void}
	 */
	function showError( container, message ) {
		const errorEl = container
			? container.querySelector( '.learnschool-plugin-error' )
			: null;
		if ( ! errorEl ) {
			return;
		}
		errorEl.textContent = message;
		errorEl.hidden = false;
	}

	/**
	 * Clears any previously rendered inline error message.
	 *
	 * @param {HTMLElement|null} container Parent notice or card element.
	 * @return {void}
	 */
	function clearError( container ) {
		const errorEl = container
			? container.querySelector( '.learnschool-plugin-error' )
			: null;
		if ( ! errorEl ) {
			return;
		}
		errorEl.textContent = '';
		errorEl.hidden = true;
	}

	/**
	 * Updates UI controls cleanly after plugin installation/activation succeeds.
	 *
	 * @param {HTMLAnchorElement} actionBtn Action button element.
	 * @return {void}
	 */
	function markPluginActiveUI( actionBtn ) {
		const activeLabel =
			actionBtn.getAttribute( 'data-active-label' ) || 'Manage Plugins';
		const activeUrl =
			actionBtn.getAttribute( 'data-active-url' ) ||
			actionBtn.getAttribute( 'data-plugins-url' );
		const card = actionBtn.closest( '.learnschool-admin-plugin-card' );
		const notice = actionBtn.closest( '.learnschool-plugin-notice' );

		actionBtn.classList.remove( 'is-busy', 'button-primary' );
		actionBtn.classList.add( 'button-secondary' );
		actionBtn.removeAttribute( 'aria-busy' );
		actionBtn.removeAttribute( 'data-plugin-state' );
		actionBtn.textContent = activeLabel;

		if ( activeUrl ) {
			actionBtn.setAttribute( 'href', activeUrl );
		}

		if ( card ) {
			const statusBadge = card.querySelector(
				'.learnschool-admin-status'
			);
			if ( statusBadge ) {
				statusBadge.className =
					'learnschool-admin-status learnschool-admin-status--active';
				statusBadge.textContent = 'Active';
			}
			const activeStatusText = card.getAttribute( 'data-active-status' );
			if ( statusBadge && activeStatusText ) {
				statusBadge.textContent = activeStatusText;
			}
		}

		if ( notice ) {
			const successText = actionBtn.getAttribute( 'data-success-notice' );
			const descEl = notice.querySelector(
				'.learnschool-plugin-notice__desc'
			);
			const setupLink = notice.querySelector(
				'.learnschool-plugin-notice__setup'
			);

			notice.classList.remove( 'notice-info' );
			notice.classList.add( 'notice-success' );

			if ( descEl && successText ) {
				descEl.textContent = successText;
			}
			if ( setupLink ) {
				setupLink.remove();
			}
		}
	}

	/**
	 * Handles persistent dismissal via admin-ajax when native close icon is clicked.
	 *
	 * @param {HTMLElement} notice Root notice element.
	 * @return {void}
	 */
	function handleNoticeDismiss( notice ) {
		const ajaxUrl = notice.getAttribute( 'data-ajax-url' );
		const nonce = notice.getAttribute( 'data-dismiss-nonce' );
		if ( ! ajaxUrl || ! nonce ) {
			return;
		}

		const body = new URLSearchParams( {
			action: 'learnschool_dismiss_plugin_notice',
			nonce,
		} );

		window
			.fetch( ajaxUrl, {
				method: 'POST',
				credentials: 'same-origin',
				headers: {
					'Content-Type': 'application/x-www-form-urlencoded',
				},
				body: body.toString(),
			} )
			.catch( () => {} );
	}

	/**
	 * Handles inline REST install or activation with native URL fallback.
	 *
	 * @param {MouseEvent}        event     Click event.
	 * @param {HTMLAnchorElement} actionBtn Clicked action link/button.
	 * @return {Promise<void>} Async completion promise.
	 */
	async function handlePluginActionClick( event, actionBtn ) {
		if (
			event.metaKey ||
			event.ctrlKey ||
			event.shiftKey ||
			event.altKey ||
			! window.wp ||
			typeof window.wp.apiFetch !== 'function'
		) {
			return;
		}

		const state = actionBtn.getAttribute( 'data-plugin-state' );
		const slug = actionBtn.getAttribute( 'data-plugin-slug' );
		const basename = actionBtn.getAttribute( 'data-plugin-basename' );

		if (
			! state ||
			( state !== 'inactive' && state !== 'not-installed' ) ||
			! slug ||
			! basename
		) {
			return;
		}

		event.preventDefault();

		if ( actionBtn.classList.contains( 'is-busy' ) ) {
			return;
		}

		const container = actionBtn.closest(
			'.learnschool-plugin-notice, .learnschool-admin-plugin-card'
		);
		const originalLabel = actionBtn.textContent || '';
		const loadingLabel =
			actionBtn.getAttribute( 'data-loading-label' ) || originalLabel;
		const fallbackHref = actionBtn.getAttribute( 'href' );

		clearError( container );
		actionBtn.classList.add( 'is-busy' );
		actionBtn.setAttribute( 'aria-busy', 'true' );
		actionBtn.textContent = loadingLabel;

		try {
			if ( state === 'inactive' ) {
				await window.wp.apiFetch( {
					path: `/wp/v2/plugins/${ encodePluginRestPath(
						basename
					) }`,
					method: 'POST',
					data: { status: 'active' },
				} );
			} else {
				await window.wp.apiFetch( {
					path: '/wp/v2/plugins',
					method: 'POST',
					data: { slug, status: 'active' },
				} );
			}

			markPluginActiveUI( actionBtn );
		} catch ( err ) {
			const errorCode = err && err.code ? String( err.code ) : '';
			const needsCoreRedirect =
				! errorCode ||
				errorCode === 'fs_unavailable' ||
				errorCode === 'unable_to_connect_to_filesystem' ||
				errorCode === 'rest_disabled' ||
				errorCode === 'fetch_error';

			if ( needsCoreRedirect && fallbackHref ) {
				window.location.assign( fallbackHref );
				return;
			}

			actionBtn.classList.remove( 'is-busy' );
			actionBtn.removeAttribute( 'aria-busy' );
			actionBtn.textContent = originalLabel;

			if ( err && err.message ) {
				showError( container, String( err.message ) );
			}
		}
	}

	document.addEventListener( 'click', ( event ) => {
		const target = event.target;
		if ( ! target || typeof target.closest !== 'function' ) {
			return;
		}

		const dismissBtn = target.closest(
			'.learnschool-plugin-notice .notice-dismiss'
		);
		if ( dismissBtn ) {
			const notice = dismissBtn.closest( '.learnschool-plugin-notice' );
			if ( notice ) {
				handleNoticeDismiss( notice );
			}
			return;
		}

		const actionBtn = target.closest( 'a.learnschool-plugin-action' );
		if ( actionBtn ) {
			handlePluginActionClick( event, actionBtn );
		}
	} );
} )();
