<?php
/**
 * Custom Block Bindings sources for LearnSchool theme.
 *
 * Provides dynamic runtime values such as the current calendar year and site title
 * for pattern blocks without hardcoding stale registration-time dates.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'learnschool_get_copyright_binding' ) ) :
	/**
	 * Returns the localized footer copyright string using the current year and site title.
	 *
	 * @since 1.0.0
	 * @return string Escaped localized copyright string.
	 */
	function learnschool_get_copyright_binding(): string {
		$raw_name  = wp_strip_all_tags( get_bloginfo( 'name' ) );
		$site_name = '' !== $raw_name ? $raw_name : __( 'My School', 'learnschool' );

		return sprintf(
			/* translators: 1: Current calendar year, 2: Site title. */
			esc_html__( '© %1$s %2$s', 'learnschool' ),
			esc_html( wp_date( 'Y' ) ),
			esc_html( $site_name )
		);
	}
endif;

if ( ! function_exists( 'learnschool_register_block_bindings' ) ) :
	/**
	 * Registers LearnSchool custom block binding sources.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_register_block_bindings(): void {
		if ( ! function_exists( 'register_block_bindings_source' ) ) {
			return;
		}

		register_block_bindings_source(
			'learnschool/copyright',
			array(
				'label'              => __( 'Copyright Notice', 'learnschool' ),
				'get_value_callback' => 'learnschool_get_copyright_binding',
			)
		);
	}
endif;
add_action( 'init', 'learnschool_register_block_bindings' );
