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
		$styles_by_block = array(
			'core/group'      => array(
				'learnschool-card'        => __( 'Card', 'learnschool' ),
				'learnschool-card-border' => __( 'Card Border', 'learnschool' ),
				'learnschool-soft-card'   => __( 'Soft Card', 'learnschool' ),
				'learnschool-card-arch'   => __( 'Card Arch', 'learnschool' ),
				'learnschool-card-large'  => __( 'Card Large', 'learnschool' ),
				'learnschool-trust-strip' => __( 'Trust Strip', 'learnschool' ),
			),
			'core/button'     => array(
				'learnschool-pill'        => __( 'Pill Button', 'learnschool' ),
				'learnschool-outline'     => __( 'Outline Button', 'learnschool' ),
				'learnschool-warm-accent' => __( 'Warm Accent Button', 'learnschool' ),
				'learnschool-yellow'      => __( 'Yellow Button', 'learnschool' ),
				'learnschool-link-sm'     => __( 'Arrow Link', 'learnschool' ),
			),
			'core/quote'      => array(
				'learnschool-philosophy' => __( 'Philosophy Card', 'learnschool' ),
				'learnschool-quote'      => __( 'Card Quote', 'learnschool' ),
			),
			'core/details'    => array(
				'learnschool-faq-pill' => __( 'FAQ Pill Card', 'learnschool' ),
			),
			'core/separator'  => array(
				'learnschool-gradient-pill' => __( 'Gradient Pill', 'learnschool' ),
			),
			'core/post-terms' => array(
				'learnschool-badge' => __( 'Badge', 'learnschool' ),
			),
			'core/list'       => array(
				'learnschool-checkmarks' => __( 'Checkmarks', 'learnschool' ),
				'learnschool-clean-list' => __( 'Clean Unstyled List', 'learnschool' ),
			),
			'core/cover'      => array(
				'learnschool-rounded' => __( 'Rounded Frame', 'learnschool' ),
				'learnschool-arch'    => __( 'Arch Frame', 'learnschool' ),
			),
			'core/image'      => array(
				'learnschool-arch'        => __( 'Arch Frame', 'learnschool' ),
				'learnschool-pebble'      => __( 'Pebble Mask', 'learnschool' ),
				'learnschool-flip'        => __( 'Flip Horizontal', 'learnschool' ),
				'learnschool-subtle'      => __( 'Subtle / Decorative', 'learnschool' ),
				'learnschool-hide-mobile' => __( 'Hide on Mobile', 'learnschool' ),
			),
		);

		foreach ( $styles_by_block as $block_name => $styles ) {
			foreach ( $styles as $style_name => $label ) {
				register_block_style(
					$block_name,
					array(
						'name'  => $style_name,
						'label' => $label,
					)
				);
			}
		}
	}
endif;
add_action( 'init', 'learnschool_register_block_styles' );
