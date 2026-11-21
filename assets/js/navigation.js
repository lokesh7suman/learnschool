/**
 * LearnSchool Interactive Navigation
 *
 * Implements smooth mobile accordion collapse and expand for submenus
 * inside the responsive navigation drawer.
 *
 * @package
 * @since 1.2.0
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
	 * Inject conversion CTA and utility contact info into mobile drawer if not already present.
	 *
	 * @return {void}
	 */
	function initMobileDrawerFooter() {
		const dialogs = document.querySelectorAll(
			'.wp-block-navigation__responsive-dialog'
		);
		dialogs.forEach( ( dialog ) => {
			if (
				dialog.querySelector( '.learnschool-mobile-drawer__footer' )
			) {
				return;
			}

			// Get CTA URL from desktop header button if present, or fall back to /admissions/how-to-apply/.
			const desktopCta = document.querySelector(
				'.learnschool-header-actions .wp-block-button__link'
			);
			const ctaHref = desktopCta
				? desktopCta.getAttribute( 'href' ) || '#'
				: '/admissions/how-to-apply/';
			const ctaText = desktopCta
				? desktopCta.textContent.trim() || 'Enroll Now'
				: 'Enroll Now';

			const footer = document.createElement( 'div' );
			footer.className = 'learnschool-mobile-drawer__footer';
			footer.innerHTML =
				'<div class="learnschool-mobile-drawer__divider" aria-hidden="true"></div>' +
				'<a class="learnschool-mobile-drawer__cta" href="' +
				encodeURI( ctaHref ) +
				'">' +
				'<span>' +
				ctaText +
				'</span>' +
				'<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>' +
				'</a>' +
				'<div class="learnschool-mobile-drawer__meta">' +
				'<a href="tel:5550192834" class="learnschool-mobile-drawer__meta-link">' +
				'<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>' +
				'<span>Call: (555) 019-2834</span>' +
				'</a>' +
				'<a href="/contact-us/parent-portal/" class="learnschool-mobile-drawer__meta-link">' +
				'<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3"/></svg>' +
				'<span>Parent Portal</span>' +
				'</a>' +
				'</div>';

			dialog.appendChild( footer );
		} );
	}

	/**
	 * Initialize navigation enhancements on ready.
	 *
	 * @return {void}
	 */
	function init() {
		initMobileSubmenus();
		initMobileDrawerFooter();

		// Observe opening of responsive navigation drawer.
		const openButtons = document.querySelectorAll(
			'.wp-block-navigation__responsive-container-open'
		);
		openButtons.forEach( ( btn ) => {
			btn.addEventListener( 'click', () => {
				setTimeout( initMobileDrawerFooter, 50 );
			} );
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
