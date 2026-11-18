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

		// Note: Following Ollie theme architectural standards, we intentionally do NOT
		// register block styles on core/group or core/columns. Registering styles on core/group
		// pollutes the Gutenberg inspector with a grid of buttons on every pattern, section,
		// and container. Card and container styling is handled via native block attributes and modular CSS classes.

		// ── Button style variations ───────────────────────────────────────────
		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-pill',
				'label' => __( 'Pill Button', 'learnschool' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-outline',
				'label' => __( 'Outline Button', 'learnschool' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-warm-accent',
				'label' => __( 'Warm Accent Button', 'learnschool' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-yellow',
				'label' => __( 'Yellow Button', 'learnschool' ),
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
				'name'  => 'learnschool-philosophy',
				'label' => __( 'Philosophy Card', 'learnschool' ),
			)
		);

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
				'name'  => 'learnschool-faq-pill',
				'label' => __( 'FAQ Pill Card', 'learnschool' ),
			)
		);

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

		// ── Post terms style variations ───────────────────────────────────────
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
				'name'  => 'learnschool-arch',
				'label' => __( 'Arch Frame', 'learnschool' ),
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'learnschool-pebble',
				'label' => __( 'Pebble Mask', 'learnschool' ),
			)
		);

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
