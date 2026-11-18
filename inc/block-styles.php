<?php
/**
 * LearnSchool Block Styles Registration
 *
 * All slugs are prefixed with `learnschool-` to prevent collision with
 * core WordPress or third-party plugin block style namespaces.
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
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_register_block_styles() {

		// ── Group / Container card variations ────────────────────────────────
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

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-surface',
				'label' => __( 'Surface', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-lilac',
				'label' => __( 'Lilac', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-midnight',
				'label' => __( 'Midnight', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-glass',
				'label' => __( 'Glass Card', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-clean',
				'label' => __( 'Clean (No Doodles)', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-reverse',
				'label' => __( 'Reverse Layout', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-prose',
				'label' => __( 'Prose / Article', 'learnschool' ),
			)
		);

		// ── Columns variations ────────────────────────────────────────────────
		register_block_style(
			'core/columns',
			array(
				'name'  => 'learnschool-reverse',
				'label' => __( 'Reverse Layout', 'learnschool' ),
			)
		);

		// ── Button style variations ───────────────────────────────────────────
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
				'name'  => 'learnschool-outline',
				'label' => __( 'Outline', 'learnschool' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-yellow',
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

		// ── Quote style variations ────────────────────────────────────────────
		register_block_style(
			'core/quote',
			array(
				'name'  => 'learnschool-quote',
				'label' => __( 'Card Quote', 'learnschool' ),
			)
		);

		// ── Details / Accordion style variations ──────────────────────────────
		register_block_style(
			'core/details',
			array(
				'name'  => 'learnschool-accordion',
				'label' => __( 'Accordion Card', 'learnschool' ),
			)
		);

		// ── Separator style variations ────────────────────────────────────────
		register_block_style(
			'core/separator',
			array(
				'name'  => 'learnschool-gradient-pill',
				'label' => __( 'Gradient Pill', 'learnschool' ),
			)
		);

		// ── Post terms (category / tag) style variations ──────────────────────
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'learnschool-badge',
				'label' => __( 'Badge', 'learnschool' ),
			)
		);

		// ── List style variations ─────────────────────────────────────────────
		register_block_style(
			'core/list',
			array(
				'name'  => 'learnschool-checkmarks',
				'label' => __( 'Checkmarks', 'learnschool' ),
			)
		);

		// ── Image style variations ────────────────────────────────────────────
		register_block_style(
			'core/image',
			array(
				'name'  => 'learnschool-flip',
				'label' => __( 'Flip Horizontal', 'learnschool' ),
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'learnschool-subtle',
				'label' => __( 'Subtle / Decorative', 'learnschool' ),
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'learnschool-hide-mobile',
				'label' => __( 'Hide on Mobile', 'learnschool' ),
			)
		);
	}
endif;
add_action( 'init', 'learnschool_register_block_styles' );
