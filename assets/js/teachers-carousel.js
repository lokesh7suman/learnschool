/**
 * LearnSchool Teachers Carousel Interactivity Module
 *
 * Powers accessible previous/next cycling for the teachers showcase pattern
 * using the WordPress Interactivity API.
 *
 * @package
 * @since 1.0.0
 */

import { store, getContext, getElement } from '@wordpress/interactivity';

/**
 * Resolve direct column cards inside the carousel track.
 *
 * @param {HTMLElement|null|undefined} shell Carousel shell root element.
 * @return {HTMLElement[]} Ordered teacher column elements.
 */
function getTrackColumns( shell ) {
	const track = shell?.querySelector( '.learnschool-teachers-track' );
	if ( ! track ) {
		return [];
	}

	return Array.from( track.children ).filter( ( el ) =>
		el.classList.contains( 'wp-block-column' )
	);
}

/**
 * Format a screen-reader status announcement for the leading visible teacher.
 *
 * @param {HTMLElement|undefined} activeColumn Current first visible teacher column.
 * @param {number}                index        Zero-based active teacher index.
 * @param {number}                total        Total teacher count.
 * @param {string}                template     Localized format template.
 * @return {string} Formatted live-region message.
 */
function formatAnnouncement( activeColumn, index, total, template ) {
	if ( ! activeColumn ) {
		return '';
	}

	const heading = activeColumn.querySelector( 'h3, .wp-block-heading' );
	const name = heading?.textContent?.trim() || '';
	const role = activeColumn.querySelector( 'p' )?.textContent?.trim() || '';
	const label = role ? `${ name }, ${ role }` : name;

	if ( ! label ) {
		return '';
	}

	return template
		.replace( '%1$s', label )
		.replace( '%2$d', String( index + 1 ) )
		.replace( '%3$d', String( total ) );
}

/**
 * Animate visible cards smoothly after rotating the track.
 *
 * @param {HTMLElement[]} columns   Ordered teacher columns after rotation.
 * @param {number}        direction Slide direction (1 for next, -1 for prev).
 * @return {void}
 */
function animateTrackShift( columns, direction ) {
	if (
		typeof window.matchMedia === 'function' &&
		window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches
	) {
		return;
	}

	const offsetX = direction > 0 ? 18 : -18;
	columns.forEach( ( col ) => {
		if ( typeof col.animate !== 'function' || col.offsetParent === null ) {
			return;
		}
		col.animate(
			[
				{ opacity: 0.72, transform: `translateX(${ offsetX }px)` },
				{ opacity: 1, transform: 'translateX(0)' },
			],
			{
				duration: 240,
				easing: 'cubic-bezier(0.2, 0, 0, 1)',
			}
		);
	} );
}

/**
 * Shift teacher cards forward or backward by one column and update live status.
 *
 * @param {number} direction 1 for next, -1 for previous.
 * @param {string} template  Localized announcement template.
 * @return {void}
 */
function shiftCarousel( direction, template ) {
	const { ref } = getElement();
	const shell = ref?.closest( '.learnschool-teachers-carousel-shell' );
	const track = shell?.querySelector( '.learnschool-teachers-track' );
	const columns = getTrackColumns( shell );

	if ( ! track || columns.length < 2 ) {
		return;
	}

	if ( direction > 0 ) {
		track.appendChild( columns[ 0 ] );
	} else {
		track.prepend( columns[ columns.length - 1 ] );
	}

	const context = getContext();
	const updatedColumns = getTrackColumns( shell );
	const total = updatedColumns.length;
	context.activeIndex = ( context.activeIndex + direction + total ) % total;
	context.announcement = formatAnnouncement(
		updatedColumns[ 0 ],
		context.activeIndex,
		total,
		template
	);
	animateTrackShift( updatedColumns, direction );
}

const { state } = store( 'learnschool/teachers', {
	actions: {
		next() {
			shiftCarousel(
				1,
				state.showingTemplate || 'Showing %1$s (%2$d of %3$d)'
			);
		},
		prev() {
			shiftCarousel(
				-1,
				state.showingTemplate || 'Showing %1$s (%2$d of %3$d)'
			);
		},
	},
	callbacks: {
		init() {
			const { ref } = getElement();
			const columns = getTrackColumns( ref );
			if ( columns.length >= 2 ) {
				const context = getContext();
				context.ready = true;
			}
		},
	},
} );
