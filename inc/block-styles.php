<?php
/**
 * LearnSchool Block Styles Registration
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'learnschool_register_block_styles' ) ) :
	/**
	 * Registers custom block styles for buttons, group cards, and sections.
	 *
	 * Labels are kept short and clean to prevent ellipsis truncation in the Gutenberg sidebar.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_register_block_styles() {
		// Group / Container card variations.
		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-card',
				'label' => __( 'Card', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-card-large',
				'label' => __( 'Large Card', 'learnschool' ),
			)
		);

		// Button style variations.
		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-pill',
				'label' => __( 'Pill', 'learnschool' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'outline-purple',
				'label' => __( 'Outline', 'learnschool' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'yellow-pill',
				'label' => __( 'Yellow', 'learnschool' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-link-sm',
				'label' => __( 'Arrow Link', 'learnschool' ),
			)
		);

		// Table style variations.
		register_block_style(
			'core/table',
			array(
				'name'  => 'learnschool-table',
				'label' => __( 'Card Table', 'learnschool' ),
			)
		);

		// Quote style variations.
		register_block_style(
			'core/quote',
			array(
				'name'  => 'learnschool-quote',
				'label' => __( 'Card Quote', 'learnschool' ),
			)
		);

		// Details / Accordion style variations.
		register_block_style(
			'core/details',
			array(
				'name'  => 'learnschool-accordion',
				'label' => __( 'Playful Card', 'learnschool' ),
			)
		);

		// Separator style variations.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'gradient-pill',
				'label' => __( 'Gradient Pill', 'learnschool' ),
			)
		);

		// Post terms (category/tag) style variations.
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'badge-pill',
				'label' => __( 'Badge Pill', 'learnschool' ),
			)
		);

		// List style variations.
		register_block_style(
			'core/list',
			array(
				'name'  => 'learnschool-checkmarks',
				'label' => __( 'Playful List', 'learnschool' ),
			)
		);

		// Gallery style variations.
		register_block_style(
			'core/gallery',
			array(
				'name'  => 'learnschool-cards',
				'label' => __( 'Card Gallery', 'learnschool' ),
			)
		);

		// Fallback section & image customization styles (registered only if companion plugin hasn't registered them).
		$registry = WP_Block_Styles_Registry::get_instance();

		if ( ! $registry->is_registered( 'core/group', 'clean' ) ) {
			register_block_style(
				'core/group',
				array(
					'name'  => 'clean',
					'label' => __( 'Clean', 'learnschool' ),
				)
			);
		}

		if ( ! $registry->is_registered( 'core/group', 'reverse' ) ) {
			register_block_style(
				'core/group',
				array(
					'name'  => 'reverse',
					'label' => __( 'Reverse', 'learnschool' ),
				)
			);
		}

		if ( ! $registry->is_registered( 'core/columns', 'reverse' ) ) {
			register_block_style(
				'core/columns',
				array(
					'name'  => 'reverse',
					'label' => __( 'Reverse', 'learnschool' ),
				)
			);
		}

		if ( ! $registry->is_registered( 'core/group', 'surface' ) ) {
			register_block_style(
				'core/group',
				array(
					'name'  => 'surface',
					'label' => __( 'Surface', 'learnschool' ),
				)
			);
		}

		if ( ! $registry->is_registered( 'core/group', 'lilac' ) ) {
			register_block_style(
				'core/group',
				array(
					'name'  => 'lilac',
					'label' => __( 'Lilac', 'learnschool' ),
				)
			);
		}

		if ( ! $registry->is_registered( 'core/image', 'flip' ) ) {
			register_block_style(
				'core/image',
				array(
					'name'  => 'flip',
					'label' => __( 'Flip', 'learnschool' ),
				)
			);
		}

		if ( ! $registry->is_registered( 'core/image', 'subtle' ) ) {
			register_block_style(
				'core/image',
				array(
					'name'  => 'subtle',
					'label' => __( 'Subtle', 'learnschool' ),
				)
			);
		}

		if ( ! $registry->is_registered( 'core/image', 'hide-mobile' ) ) {
			register_block_style(
				'core/image',
				array(
					'name'  => 'hide-mobile',
					'label' => __( 'Hide Mobile', 'learnschool' ),
				)
			);
		}
	}
endif;
add_action( 'init', 'learnschool_register_block_styles' );
