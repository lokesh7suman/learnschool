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
	 * Returns unescaped text because WP_Block::replace_html() handles context-appropriate
	 * sanitization and escaping for rich-text and attribute block bindings.
	 *
	 * @since 1.0.0
	 * @return string Localized copyright string.
	 */
	function learnschool_get_copyright_binding(): string {
		$fallback  = __( 'My School', 'learnschool' );
		$site_name = learnschool_get_plain_site_title( $fallback );
		$year      = wp_date( 'Y' );
		$year_text = is_string( $year ) && '' !== $year ? $year : gmdate( 'Y' );

		return sprintf(
			/* translators: 1: Current calendar year, 2: Site title. */
			__( '© %1$s %2$s', 'learnschool' ),
			$year_text,
			$site_name
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
