<?php
/**
 * LearnSchool Block Styles Registration & Modular Enqueueing
 *
 * All slugs are prefixed with `learnschool-` to prevent collision with
 * core WordPress or third-party plugin block style namespaces.
 * Per-block stylesheets are loaded via wp_enqueue_block_style().
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'learnschool_register_block_styles' ) ) :
	/**
	 * Registers custom block styles and enqueues their corresponding per-block stylesheets.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_register_block_styles() {
		$theme_version = wp_get_theme()->get( 'Version' );

		// ── Button Styles ───────────────────────────────────────────────
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
				'name'  => 'learnschool-arch',
				'label' => __( 'Arch Button', 'learnschool' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'learnschool-warm-accent',
				'label' => __( 'Warm Accent Button', 'learnschool' ),
			)
		);

		if ( function_exists( 'wp_enqueue_block_style' ) ) {
			wp_enqueue_block_style(
				'core/button',
				array(
					'handle' => 'learnschool-button-style',
					'src'    => get_theme_file_uri( 'assets/css/blocks/button.css' ),
					'path'   => get_theme_file_path( 'assets/css/blocks/button.css' ),
					'ver'    => $theme_version,
				)
			);
		}

		// ── Group Styles ────────────────────────────────────────────────
		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-card',
				'label' => __( 'Soft Card', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-card-arch',
				'label' => __( 'Arch Top Card', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-surface',
				'label' => __( 'Warm Surface', 'learnschool' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'learnschool-trust-strip',
				'label' => __( 'Trust Strip', 'learnschool' ),
			)
		);

		if ( function_exists( 'wp_enqueue_block_style' ) ) {
			wp_enqueue_block_style(
				'core/group',
				array(
					'handle' => 'learnschool-group-style',
					'src'    => get_theme_file_uri( 'assets/css/blocks/group.css' ),
					'path'   => get_theme_file_path( 'assets/css/blocks/group.css' ),
					'ver'    => $theme_version,
				)
			);
		}

		// ── Details / Accordion Styles ──────────────────────────────────
		register_block_style(
			'core/details',
			array(
				'name'  => 'learnschool-faq-pill',
				'label' => __( 'FAQ Pill Card', 'learnschool' ),
			)
		);

		if ( function_exists( 'wp_enqueue_block_style' ) ) {
			wp_enqueue_block_style(
				'core/details',
				array(
					'handle' => 'learnschool-details-style',
					'src'    => get_theme_file_uri( 'assets/css/blocks/details.css' ),
					'path'   => get_theme_file_path( 'assets/css/blocks/details.css' ),
					'ver'    => $theme_version,
				)
			);
		}

		// ── Image Styles ────────────────────────────────────────────────
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
				'name'  => 'learnschool-card',
				'label' => __( 'Card Radius', 'learnschool' ),
			)
		);

		if ( function_exists( 'wp_enqueue_block_style' ) ) {
			wp_enqueue_block_style(
				'core/image',
				array(
					'handle' => 'learnschool-image-style',
					'src'    => get_theme_file_uri( 'assets/css/blocks/image.css' ),
					'path'   => get_theme_file_path( 'assets/css/blocks/image.css' ),
					'ver'    => $theme_version,
				)
			);
		}

		// ── Quote Styles ────────────────────────────────────────────────
		register_block_style(
			'core/quote',
			array(
				'name'  => 'learnschool-philosophy',
				'label' => __( 'Philosophy Card', 'learnschool' ),
			)
		);

		if ( function_exists( 'wp_enqueue_block_style' ) ) {
			wp_enqueue_block_style(
				'core/quote',
				array(
					'handle' => 'learnschool-quote-style',
					'src'    => get_theme_file_uri( 'assets/css/blocks/quote.css' ),
					'path'   => get_theme_file_path( 'assets/css/blocks/quote.css' ),
					'ver'    => $theme_version,
				)
			);
		}
	}
endif;
add_action( 'init', 'learnschool_register_block_styles' );
