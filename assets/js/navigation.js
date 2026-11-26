/**
 * LearnSchool Interactive Navigation
 *
 * Implements smooth mobile accordion collapse and expand for submenus
 * inside the responsive navigation drawer.
 *
 * @package
 * @since 1.0.0
 */

( function () {
	/**
	 * Toggle submenu expanded/collapsed state.
	 *
	 * @param {HTMLElement} navItem     Parent list item (.wp-block-navigation-item).
	 * @param {HTMLElement} [toggleBtn] Submenu toggle button.
	 * @return {void}
	 */
	function toggleSubmenu( navItem, toggleBtn ) {
		if ( ! navItem ) {
			return;
		}

		const btn =
			toggleBtn ||
			navItem.querySelector(
				':scope > .wp-block-navigation-submenu__toggle'
			);
		const isCurrentlyOpen = navItem.classList.contains( 'is-open' );

		if ( isCurrentlyOpen ) {
			// Collapse this submenu and any nested submenus inside it.
			navItem.classList.remove( 'is-open' );
			if ( btn ) {
				btn.setAttribute( 'aria-expanded', 'false' );
			}
			const openDescendants = navItem.querySelectorAll( '.is-open' );
			openDescendants.forEach( ( descendant ) => {
				descendant.classList.remove( 'is-open' );
				const descendantBtn = descendant.querySelector(
					':scope > .wp-block-navigation-submenu__toggle'
				);
				if ( descendantBtn ) {
					descendantBtn.setAttribute( 'aria-expanded', 'false' );
				}
			} );
		} else {
			// Expand this submenu.
			navItem.classList.add( 'is-open' );
			if ( btn ) {
				btn.setAttribute( 'aria-expanded', 'true' );
			}
		}
	}

	/**
	 * Initialize mobile drawer submenus to collapsed state.
	 *
	 * @return {void}
	 */
	function initMobileSubmenus() {
		const toggles = document.querySelectorAll(
			'.wp-block-navigation__responsive-container .wp-block-navigation-submenu__toggle'
		);
		toggles.forEach( ( btn ) => {
			btn.setAttribute( 'aria-expanded', 'false' );
			const parent = btn.closest( '.wp-block-navigation-item' );
			if ( parent ) {
				parent.classList.remove( 'is-open' );
			}
		} );
	}

	/**
	 * Global click delegation in capture phase to intercept mobile drawer navigation clicks.
	 */
	document.addEventListener(
		'click',
		( event ) => {
			const target = event.target;
			if ( ! target || typeof target.closest !== 'function' ) {
				return;
			}

			// Re-sync collapsed mobile submenu aria-expanded after WP Interactivity opens the modal.
			if (
				target.closest(
					'.wp-block-navigation__responsive-container-open'
				)
			) {
				window.requestAnimationFrame( initMobileSubmenus );
				return;
			}

			// Check if click is inside an open mobile responsive navigation container.
			const container = target.closest(
				'.wp-block-navigation__responsive-container.is-menu-open'
			);
			if ( ! container ) {
				return;
			}

			// Check if drawer close button was clicked: reset submenus on close.
			if (
				target.closest(
					'.wp-block-navigation__responsive-container-close'
				)
			) {
				initMobileSubmenus();
				return;
			}

			// Case 1: Clicked on a submenu toggle button (or its inner SVG/path).
			const toggleBtn = target.closest(
				'.wp-block-navigation-submenu__toggle'
			);
			if ( toggleBtn ) {
				event.preventDefault();
				event.stopImmediatePropagation();
				const parentItem = toggleBtn.closest(
					'.wp-block-navigation-item'
				);
				toggleSubmenu( parentItem, toggleBtn );
				return;
			}

			// Case 2: Clicked on a parent link that acts as a dropdown trigger on mobile.
			const linkItem = target.closest(
				'.has-child > .wp-block-navigation-item__content'
			);
			if ( linkItem ) {
				event.preventDefault();
				event.stopImmediatePropagation();
				const parentItem = linkItem.closest(
					'.wp-block-navigation-item'
				);
				toggleSubmenu( parentItem );
			}
		},
		true
	);

	/**
	 * Set localized drawer heading title attribute on responsive navigation dialogs.
	 *
	 * @return {void}
	 */
	function initDrawerTitle() {
		const navData = window.learnschoolNavData || {};
		const menuTitle = navData.menuTitle || 'Menu';
		const dialogs = document.querySelectorAll(
			'.wp-block-navigation__responsive-dialog'
		);

		dialogs.forEach( ( dialog ) => {
			if ( ! dialog.getAttribute( 'data-menu-title' ) ) {
				dialog.setAttribute( 'data-menu-title', menuTitle );
			}
		} );
	}

	/**
	 * Initialize navigation enhancements on ready.
	 *
	 * @return {void}
	 */
	function init() {
		initMobileSubmenus();
		initDrawerTitle();

		document.addEventListener( 'keydown', ( event ) => {
			if (
				event.key === 'Escape' &&
				document.querySelector(
					'.wp-block-navigation__responsive-container.is-menu-open'
				)
			) {
				setTimeout( initMobileSubmenus, 0 );
			}
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
