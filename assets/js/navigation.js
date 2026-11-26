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
	 * Build an accessible decorative SVG icon element using DOM APIs.
	 *
	 * @param {number} size        Square icon dimension in px.
	 * @param {number} strokeWidth Stroke width for icon lines.
	 * @param {Array}  shapes      Tag descriptor tuples `[ tag, attrs ]`.
	 * @return {SVGElement} Built SVG icon element.
	 */
	function createSvgIcon( size, strokeWidth, shapes ) {
		const ns = 'http://www.w3.org/2000/svg';
		const svg = document.createElementNS( ns, 'svg' );
		svg.setAttribute( 'width', String( size ) );
		svg.setAttribute( 'height', String( size ) );
		svg.setAttribute( 'viewBox', '0 0 24 24' );
		svg.setAttribute( 'fill', 'none' );
		svg.setAttribute( 'stroke', 'currentColor' );
		svg.setAttribute( 'stroke-width', String( strokeWidth ) );
		svg.setAttribute( 'stroke-linecap', 'round' );
		svg.setAttribute( 'stroke-linejoin', 'round' );
		svg.setAttribute( 'aria-hidden', 'true' );

		shapes.forEach( ( [ tag, attrs ] ) => {
			const node = document.createElementNS( ns, tag );
			Object.keys( attrs ).forEach( ( key ) => {
				node.setAttribute( key, attrs[ key ] );
			} );
			svg.appendChild( node );
		} );

		return svg;
	}

	/**
	 * Build a meta item (link or text span) with an icon for the mobile drawer.
	 *
	 * @param {string}     href  Optional destination URL; omit for plain text span.
	 * @param {string}     label Visible text content.
	 * @param {SVGElement} icon  Decorative icon node.
	 * @return {HTMLElement} Constructed meta item element.
	 */
	function createMetaItem( href, label, icon ) {
		const el = document.createElement( href ? 'a' : 'span' );
		el.className = 'learnschool-mobile-drawer__meta-link';
		if ( href ) {
			el.setAttribute( 'href', href );
		}
		el.appendChild( icon );
		const textSpan = document.createElement( 'span' );
		textSpan.textContent = label;
		el.appendChild( textSpan );
		return el;
	}

	/**
	 * Collect live utility bar contact and portal items from the rendered header
	 * so mobile drawer links stay identical to desktop Site Editor markup.
	 *
	 * @param {Object} navData Fallback localization data.
	 * @return {Array<{href: string, label: string, kind: string}>} Ordered meta items.
	 */
	function collectUtilityMetaItems( navData ) {
		const utilityBar = document.querySelector(
			'header .learnschool-utility-bar, header .has-base-subtle-background-color'
		);

		if ( utilityBar ) {
			const items = [];
			const paragraphs = utilityBar.querySelectorAll( 'p' );
			paragraphs.forEach( ( p ) => {
				const link = p.querySelector( 'a' );
				const label = (
					link ? link.textContent : p.textContent
				).trim();
				const href = link ? link.getAttribute( 'href' ) || '' : '';
				if ( ! label ) {
					return;
				}
				let kind = 'link';
				if ( href.startsWith( 'tel:' ) ) {
					kind = 'phone';
				} else if ( ! href ) {
					kind = 'hours';
				} else if (
					label.toLowerCase().includes( 'staff' ) ||
					label.toLowerCase().includes( 'faculty' )
				) {
					kind = 'directory';
				}
				items.push( { href, label, kind } );
			} );

			if ( items.length > 0 ) {
				return items;
			}
		}

		const fallback = [];
		if ( navData.phoneLabel && navData.phoneHref ) {
			fallback.push( {
				href: navData.phoneHref,
				label: navData.phoneLabel,
				kind: 'phone',
			} );
		}
		if ( navData.portalLabel && navData.portalUrl ) {
			fallback.push( {
				href: navData.portalUrl,
				label: navData.portalLabel,
				kind: 'link',
			} );
		}
		if ( navData.directoryLabel && navData.directoryUrl ) {
			fallback.push( {
				href: navData.directoryUrl,
				label: navData.directoryLabel,
				kind: 'directory',
			} );
		}
		if ( navData.hoursLabel ) {
			fallback.push( {
				href: '',
				label: navData.hoursLabel,
				kind: 'hours',
			} );
		}
		return fallback;
	}

	/**
	 * Build an icon matching a utility meta item kind.
	 *
	 * @param {string} kind Item kind (`phone`, `directory`, `hours`, `link`).
	 * @return {SVGElement} Built decorative icon.
	 */
	function createMetaIcon( kind ) {
		if ( kind === 'phone' ) {
			return createSvgIcon( 15, 2, [
				[
					'path',
					{
						d: 'M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z',
					},
				],
			] );
		}
		if ( kind === 'directory' ) {
			return createSvgIcon( 15, 2, [
				[
					'path',
					{
						d: 'M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2',
					},
				],
				[ 'circle', { cx: '9', cy: '7', r: '4' } ],
				[
					'path',
					{
						d: 'M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75',
					},
				],
			] );
		}
		if ( kind === 'hours' ) {
			return createSvgIcon( 15, 2, [
				[ 'circle', { cx: '12', cy: '12', r: '10' } ],
				[ 'polyline', { points: '12 6 12 12 16 14' } ],
			] );
		}
		return createSvgIcon( 15, 2, [
			[ 'rect', { x: '3', y: '4', width: '18', height: '16', rx: '3' } ],
			[ 'path', { d: 'M7 9h10M7 13h6' } ],
		] );
	}

	/**
	 * Inject localized header attribute and conversion CTA/utility info into mobile drawer.
	 *
	 * @return {void}
	 */
	function initMobileDrawerFooter() {
		const navData = window.learnschoolNavData || {};
		const dialogs = document.querySelectorAll(
			'.wp-block-navigation__responsive-dialog'
		);
		const menuTitle = navData.menuTitle || 'Menu';
		const metaItems = collectUtilityMetaItems( navData );

		dialogs.forEach( ( dialog ) => {
			if ( ! dialog.getAttribute( 'data-menu-title' ) ) {
				dialog.setAttribute( 'data-menu-title', menuTitle );
			}

			if (
				dialog.querySelector( '.learnschool-mobile-drawer__footer' )
			) {
				return;
			}

			// Prefer the live desktop header CTA button URL/label if present.
			const desktopCta = document.querySelector(
				'.learnschool-header-actions .wp-block-button__link'
			);
			const ctaHref =
				( desktopCta && desktopCta.getAttribute( 'href' ) ) ||
				navData.ctaUrl ||
				'#';
			const ctaText =
				( desktopCta && desktopCta.textContent.trim() ) ||
				navData.ctaLabel ||
				'';

			const footer = document.createElement( 'div' );
			footer.className = 'learnschool-mobile-drawer__footer';

			const divider = document.createElement( 'div' );
			divider.className = 'learnschool-mobile-drawer__divider';
			divider.setAttribute( 'aria-hidden', 'true' );
			footer.appendChild( divider );

			if ( ctaText ) {
				const ctaLink = document.createElement( 'a' );
				ctaLink.className = 'learnschool-mobile-drawer__cta';
				ctaLink.setAttribute( 'href', ctaHref );
				const ctaLabel = document.createElement( 'span' );
				ctaLabel.textContent = ctaText;
				ctaLink.appendChild( ctaLabel );
				ctaLink.appendChild(
					createSvgIcon( 18, 2.5, [
						[ 'path', { d: 'M5 12h14M12 5l7 7-7 7' } ],
					] )
				);
				footer.appendChild( ctaLink );
			}

			const meta = document.createElement( 'div' );
			meta.className = 'learnschool-mobile-drawer__meta';

			metaItems.forEach( ( item ) => {
				meta.appendChild(
					createMetaItem(
						item.href,
						item.label,
						createMetaIcon( item.kind )
					)
				);
			} );

			if ( meta.childElementCount > 0 ) {
				footer.appendChild( meta );
			}

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
