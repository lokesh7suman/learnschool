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
				'label' => esc_html__( 'Card', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-card-border',
				'label' => esc_html__( 'Card Border', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-soft-card',
				'label' => esc_html__( 'Soft Card', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-card-arch',
				'label' => esc_html__( 'Card Arch', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-card-large',
				'label' => esc_html__( 'Card Large', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-trust-strip',
				'label' => esc_html__( 'Trust Strip', 'learnschool' ),
			)
		);

		// ── Button style variations ───────────────────────────────────────────
		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-pill',
				'label' => esc_html__( 'Pill Button', 'learnschool' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-outline',
				'label' => esc_html__( 'Outline Button', 'learnschool' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-warm-accent',
				'label' => esc_html__( 'Warm Accent Button', 'learnschool' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-yellow',
				'label' => esc_html__( 'Yellow Button', 'learnschool' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-link-sm',
				'label' => esc_html__( 'Arrow Link', 'learnschool' ),
			)
		);

		// ── Quote style variations ────────────────────────────────────────────
		register_block_style(
			'core/quote',
			array(
				'name'  => 'learnschool-philosophy',
				'label' => esc_html__( 'Philosophy Card', 'learnschool' ),
			)
		);

		register_block_style(
			'core/quote',
			array(
				'name'  => 'learnschool-quote',
				'label' => esc_html__( 'Card Quote', 'learnschool' ),
			)
		);

		// ── Details / Accordion style variations ──────────────────────────────
		register_block_style(
			'core/details',
			array(
				'name'  => 'learnschool-faq-pill',
				'label' => esc_html__( 'FAQ Pill Card', 'learnschool' ),
			)
		);

		// ── Separator style variations ────────────────────────────────────────
		register_block_style(
			'core/separator',
			array(
				'name'  => 'learnschool-gradient-pill',
				'label' => esc_html__( 'Gradient Pill', 'learnschool' ),
			)
		);

		// ── Post terms style variations ───────────────────────────────────────
		register_block_style(
			'core/post-terms',
			array(
				'name'  => 'learnschool-badge',
				'label' => esc_html__( 'Badge', 'learnschool' ),
			)
		);

		// ── List style variations ─────────────────────────────────────────────
		register_block_style(
			'core/list',
			array(
				'name'  => 'learnschool-checkmarks',
				'label' => esc_html__( 'Checkmarks', 'learnschool' ),
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'  => 'learnschool-clean-list',
				'label' => esc_html__( 'Clean Unstyled List', 'learnschool' ),
			)
		);

		// ── Cover style variations ────────────────────────────────────────────
		register_block_style(
			'core/cover',
			array(
				'name'  => 'learnschool-rounded',
				'label' => esc_html__( 'Rounded Frame', 'learnschool' ),
			)
		);

		register_block_style(
			'core/cover',
			array(
				'name'  => 'learnschool-arch',
				'label' => esc_html__( 'Arch Frame', 'learnschool' ),
			)
		);

		// ── Image style variations ────────────────────────────────────────────
		register_block_style(
			'core/image',
			array(
				'name'  => 'learnschool-arch',
				'label' => esc_html__( 'Arch Frame', 'learnschool' ),
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'learnschool-pebble',
				'label' => esc_html__( 'Pebble Mask', 'learnschool' ),
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'learnschool-flip',
				'label' => esc_html__( 'Flip Horizontal', 'learnschool' ),
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'learnschool-subtle',
				'label' => esc_html__( 'Subtle / Decorative', 'learnschool' ),
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'learnschool-hide-mobile',
				'label' => esc_html__( 'Hide on Mobile', 'learnschool' ),
			)
		);
	}
endif;
add_action( 'init', 'learnschool_register_block_styles' );
