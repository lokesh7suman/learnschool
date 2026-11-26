/**
 * LearnSchool Admin Notice Dismissal
 *
 * Persists dismissal of the optional companion plugin recommendation notice
 * when the user clicks the standard WordPress dismiss button.
 *
 * @package
 * @since 1.0.0
 */

( function () {
	document.addEventListener( 'click', ( event ) => {
		const target = event.target;
		if ( ! target || typeof target.closest !== 'function' ) {
			return;
		}

		const dismissBtn = target.closest(
			'.learnschool-plugin-notice .notice-dismiss'
		);
		if ( ! dismissBtn ) {
			return;
		}

		const notice = dismissBtn.closest( '.learnschool-plugin-notice' );
		if ( ! notice ) {
			return;
		}

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
	} );
} )();
