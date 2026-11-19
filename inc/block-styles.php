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

declare(strict_types=1);

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
	function learnschool_register_block_styles(): void {

		// ── Group style variations ────────────────────────────────────────────
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
				'name'  => 'learnschool-card-border',
				'label' => __( 'Card Border', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-soft-card',
				'label' => __( 'Soft Card', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-card-arch',
				'label' => __( 'Card Arch', 'learnschool' ),
			)
		);

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

		register_block_style(
			'core/list',
			array(
				'name'  => 'learnschool-clean-list',
				'label' => __( 'Clean Unstyled List', 'learnschool' ),
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
