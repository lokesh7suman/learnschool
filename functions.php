<?php
/**
 * LearnSchool functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'learnschool_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'learnschool', get_template_directory() . '/languages' );

		// Enqueue editor styles.
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style.css' );

		// Add support for core block styles for consistent design rendering.
		add_theme_support( 'wp-block-styles' );

		// Remove default core bundled patterns to keep block inserter clean and curated.
		remove_theme_support( 'core-block-patterns' );
	}
endif;
add_action( 'after_setup_theme', 'learnschool_setup' );

// Disable remote block patterns from the WordPress.org pattern directory.
add_filter( 'should_load_remote_block_patterns', '__return_false' );

if ( ! function_exists( 'learnschool_scripts' ) ) :
	/**
	 * Enqueue theme stylesheet on front-end.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_scripts() {
		$version = defined( 'WP_DEBUG' ) && WP_DEBUG
			? filemtime( get_stylesheet_directory() . '/style.css' )
			: wp_get_theme()->get( 'Version' );
		wp_enqueue_style(
			'learnschool-style',
			get_stylesheet_uri(),
			array(),
			$version
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'learnschool_scripts' );

if ( ! function_exists( 'learnschool_preload_webfonts' ) ) :
	/**
	 * Preload critical local web fonts in <head> for fast First Contentful Paint.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_preload_webfonts() {
		$quicksand = get_theme_file_uri( 'assets/fonts/quicksand-variable.woff2' );
		$courgette = get_theme_file_uri( 'assets/fonts/courgette-regular.woff2' );
		echo '<meta name="color-scheme" content="light">' . "\n";
		echo '<link rel="preload" href="' . esc_url( $quicksand ) . '" as="font" type="font/woff2" crossorigin>' . "\n";
		echo '<link rel="preload" href="' . esc_url( $courgette ) . '" as="font" type="font/woff2" crossorigin>' . "\n";
	}
endif;
add_action( 'wp_head', 'learnschool_preload_webfonts', 2 );

// Load modular component configurations.
require_once get_template_directory() . '/inc/pattern-categories.php';
require_once get_template_directory() . '/inc/block-styles.php';
