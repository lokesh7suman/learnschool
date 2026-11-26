/**
 * LearnSchool Gutenberg Inline Doodle Formats
 *
 * Registers native RichText inline formatting controls for highlighting and underlining
 * individual words/phrases directly inside headings, paragraphs, and list blocks.
 *
 * @param {Object} wp WordPress global namespace.
 * @since 1.0.0
 */

( function ( wp ) {
	'use strict';

	if ( ! wp || ! wp.richText || ! wp.element || ! wp.blockEditor ) {
		return;
	}

	const { registerFormatType, toggleFormat } = wp.richText;
	const { RichTextToolbarButton } = wp.blockEditor;
	const { createElement } = wp.element;
	const { __ } = wp.i18n;

	/**
	 * 1. Doodle Highlight (Organic yellow highlighter brush)
	 * Wraps selected text in <mark class="learnschool-highlight">text</mark>
	 */
	const highlightIcon = createElement(
		'svg',
		{
			width: 20,
			height: 20,
			viewBox: '0 0 24 24',
			fill: 'none',
			xmlns: 'http://www.w3.org/2000/svg',
		},
		createElement( 'path', {
			d: 'M3 19h18v2.5H3V19zm15.8-12.7c.4.4.4 1 0 1.4l-9.9 9.9-3.8.9.9-3.8 9.9-9.9c.4-.4 1-.4 1.4 0l1.5 1.5z',
			fill: 'var(--wp--preset--color--secondary, #FFB802)',
		} )
	);

	registerFormatType( 'learnschool/doodle-highlight', {
		title: __( 'Doodle 1: Highlight (Brush)', 'learnschool' ),
		tagName: 'mark',
		className: 'learnschool-highlight',
		edit( props ) {
			return createElement( RichTextToolbarButton, {
				icon: highlightIcon,
				title: __( 'Doodle 1: Highlight (Brush)', 'learnschool' ),
				onClick() {
					props.onChange(
						toggleFormat( props.value, {
							type: 'learnschool/doodle-highlight',
						} )
					);
				},
				isActive: props.isActive,
			} );
		},
	} );

	/**
	 * 2. Doodle Wavy Underline (Lilac wave underneath word)
	 * Wraps selected text in <span class="learnschool-underline-wavy">text</span>
	 */
	const wavyIcon = createElement(
		'svg',
		{
			width: 20,
			height: 20,
			viewBox: '0 0 24 24',
			fill: 'none',
			xmlns: 'http://www.w3.org/2000/svg',
		},
		createElement( 'path', {
			d: 'M11 4h2l4.5 11h-2.1l-1.1-2.9H9.7L8.6 15H6.5L11 4zm-1 6.5h4L12 5.5l-2 5z',
			fill: 'currentColor',
		} ),
		createElement( 'path', {
			d: 'M4 19.5c1.8-1.2 3.8-1.2 5.5 0s3.8 1.2 5.5 0 3.8-1.2 5 0',
			stroke: 'var(--wp--preset--color--primary, #704FE6)',
			strokeWidth: '2.2',
			strokeLinecap: 'round',
		} )
	);

	registerFormatType( 'learnschool/doodle-wavy', {
		title: __( 'Doodle 2: Underline (Wavy)', 'learnschool' ),
		tagName: 'span',
		className: 'learnschool-underline-wavy',
		edit( props ) {
			return createElement( RichTextToolbarButton, {
				icon: wavyIcon,
				title: __( 'Doodle 2: Underline (Wavy)', 'learnschool' ),
				onClick() {
					props.onChange(
						toggleFormat( props.value, {
							type: 'learnschool/doodle-wavy',
						} )
					);
				},
				isActive: props.isActive,
			} );
		},
	} );

	/**
	 * 3. Doodle Loop Underline (Yellow flourish loop underneath word)
	 * Wraps selected text in <span class="learnschool-underline-loop">text</span>
	 */
	const loopIcon = createElement(
		'svg',
		{
			width: 20,
			height: 20,
			viewBox: '0 0 24 24',
			fill: 'none',
			xmlns: 'http://www.w3.org/2000/svg',
		},
		createElement( 'path', {
			d: 'M11 4h2l4.5 11h-2.1l-1.1-2.9H9.7L8.6 15H6.5L11 4zm-1 6.5h4L12 5.5l-2 5z',
			fill: 'currentColor',
		} ),
		createElement( 'path', {
			d: 'M4 19.5c3-1.8 6-1.8 8.5 0s3.5 1.5 5.5 0',
			stroke: 'var(--wp--preset--color--secondary, #FFB802)',
			strokeWidth: '2.2',
			strokeLinecap: 'round',
		} )
	);

	registerFormatType( 'learnschool/doodle-loop', {
		title: __( 'Doodle 3: Underline (Loop)', 'learnschool' ),
		tagName: 'span',
		className: 'learnschool-underline-loop',
		edit( props ) {
			return createElement( RichTextToolbarButton, {
				icon: loopIcon,
				title: __( 'Doodle 3: Underline (Loop)', 'learnschool' ),
				onClick() {
					props.onChange(
						toggleFormat( props.value, {
							type: 'learnschool/doodle-loop',
						} )
					);
				},
				isActive: props.isActive,
			} );
		},
	} );

	/**
	 * 4. Script Accent (Playful Courgette cursive font)
	 * Wraps selected text in <span class="learnschool-script">text</span>
	 */
	const scriptIcon = createElement(
		'svg',
		{
			width: 20,
			height: 20,
			viewBox: '0 0 24 24',
			fill: 'none',
			xmlns: 'http://www.w3.org/2000/svg',
		},
		createElement( 'path', {
			d: 'M6 17.5c2-3.8 4.8-12.5 7.8-13.5 2 1 2 3.8 1 6.8l-6.8 1.9c0 1.9 1.9 2.9 3.8 2.9 1.9 0 3.8-1 5.8-2.9v1.9c-1.9 1.9-3.8 2.9-6.7 2.9-2.9 0-4.9-1.9-4.9-3.9zm4.8-6.8l3.9-.9c.5-1.9.5-3.8 0-4.8-1.9.9-2.9 3.8-3.9 5.7z',
			fill: 'var(--wp--preset--color--primary, #704FE6)',
		} )
	);

	registerFormatType( 'learnschool/script-accent', {
		title: __( 'Doodle 4: Script Accent (Cursive)', 'learnschool' ),
		tagName: 'span',
		className: 'learnschool-script',
		edit( props ) {
			return createElement( RichTextToolbarButton, {
				icon: scriptIcon,
				title: __( 'Doodle 4: Script Accent (Cursive)', 'learnschool' ),
				onClick() {
					props.onChange(
						toggleFormat( props.value, {
							type: 'learnschool/script-accent',
						} )
					);
				},
				isActive: props.isActive,
			} );
		},
	} );

	/**
	 * 5. Post Date Editor Preview Fallback
	 * Avoids "Invalid date" when core/post-date renders outside a post context
	 * (e.g. standalone template parts or pattern previews bound to core/post-data).
	 */
	if ( wp.hooks && wp.hooks.addFilter ) {
		const fallbackIsoDate = new Date().toISOString();

		wp.hooks.addFilter(
			'editor.BlockEdit',
			'learnschool/post-date-preview-fallback',
			function ( BlockEdit ) {
				return function LearnSchoolPostDatePreview( props ) {
					if (
						props.name === 'core/post-date' &&
						props.attributes &&
						typeof props.attributes.datetime === 'string' &&
						Number.isNaN( Date.parse( props.attributes.datetime ) )
					) {
						const nextProps = Object.assign( {}, props, {
							attributes: Object.assign( {}, props.attributes, {
								datetime: fallbackIsoDate,
							} ),
						} );
						return createElement( BlockEdit, nextProps );
					}

					return createElement( BlockEdit, props );
				};
			}
		);
	}
} )( window.wp );
