<?php
/**
 * LearnSchool functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

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
	function learnschool_setup(): void {
		// Make theme available for translation.
		load_theme_textdomain( 'learnschool', get_template_directory() . '/languages' );

		// Enqueue editor styles for consistent front-end and block editor parity.
		add_theme_support( 'editor-styles' );

		$editor_styles = array( 'style.css' );
		$block_styles  = glob( get_template_directory() . '/assets/styles/core-*.css' );
		if ( is_array( $block_styles ) ) {
			foreach ( $block_styles as $style_path ) {
				$editor_styles[] = str_replace( get_template_directory() . '/', '', $style_path );
			}
		}
		add_editor_style( $editor_styles );

		// Add support for core block styles for consistent design rendering.
		add_theme_support( 'wp-block-styles' );

		// Add support for custom logo with flexible dimensions.
		add_theme_support(
			'custom-logo',
			array(
				'height'               => 512,
				'width'                => 512,
				'flex-height'          => true,
				'flex-width'           => true,
				'unlink-homepage-logo' => true,
			)
		);

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
	function learnschool_scripts(): void {
		$theme_version = wp_get_theme()->get( 'Version' );
		$version       = defined( 'WP_DEBUG' ) && WP_DEBUG
			? (string) filemtime( get_stylesheet_directory() . '/style.css' )
			: ( is_string( $theme_version ) ? $theme_version : '1.0.0' );

		wp_enqueue_style(
			'learnschool-style',
			get_stylesheet_uri(),
			array(),
			$version
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'learnschool_scripts' );

if ( ! function_exists( 'learnschool_enqueue_block_styles' ) ) :
	/**
	 * Dynamically registers and enqueues modular per-block stylesheets.
	 *
	 * Scans assets/styles/ for core-*.css stylesheets and registers each via
	 * wp_enqueue_block_style(), loading CSS conditionally only when that
	 * block is rendered on the page.
	 *
	 * @since 1.1.0
	 * @return void
	 */
	function learnschool_enqueue_block_styles(): void {
		$files = glob( get_template_directory() . '/assets/styles/core-*.css' );
		if ( ! is_array( $files ) ) {
			return;
		}

		foreach ( $files as $file ) {
			$filename   = basename( $file, '.css' );
			$block_name = str_replace( 'core-', 'core/', $filename );

			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => "learnschool-block-{$filename}",
					'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
					'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
				)
			);
		}
	}
endif;
add_action( 'init', 'learnschool_enqueue_block_styles' );

if ( ! function_exists( 'learnschool_editor_assets' ) ) :
	/**
	 * Enqueue block editor assets for inline doodle text formatting.
	 *
	 * @since 1.0.6
	 * @return void
	 */
	function learnschool_editor_assets(): void {
		$theme_version = wp_get_theme()->get( 'Version' );
		$version       = defined( 'WP_DEBUG' ) && WP_DEBUG
			? (string) filemtime( get_template_directory() . '/assets/js/editor-formats.js' )
			: ( is_string( $theme_version ) ? $theme_version : '1.0.0' );

		wp_enqueue_script(
			'learnschool-editor-formats',
			get_template_directory_uri() . '/assets/js/editor-formats.js',
			array( 'wp-rich-text', 'wp-block-editor', 'wp-element', 'wp-i18n' ),
			$version,
			true
		);
	}
endif;
add_action( 'enqueue_block_editor_assets', 'learnschool_editor_assets' );

if ( ! function_exists( 'learnschool_template_part_areas' ) ) :
	/**
	 * Registers custom template part areas for LearnSchool theme.
	 *
	 * Adds 'banner' for announcement top bars and alert strips,
	 * and 'sidebar' for educational widgets and curriculum navigation.
	 *
	 * @since 1.1.0
	 * @param array<int, array<string, string>> $areas Existing template part areas.
	 * @return array<int, array<string, string>> Filtered template part areas.
	 */
	function learnschool_template_part_areas( array $areas ): array {
		$areas[] = array(
			'area'        => 'banner',
			'area_tag'    => 'aside',
			'label'       => __( 'Banner', 'learnschool' ),
			'description' => __( 'Top announcement bars, campus alert strips, and utility ribbons.', 'learnschool' ),
			'icon'        => 'layout',
		);

		$areas[] = array(
			'area'        => 'sidebar',
			'area_tag'    => 'aside',
			'label'       => __( 'Sidebar', 'learnschool' ),
			'description' => __( 'Curriculum navigation, educator profiles, and school widget sidebars.', 'learnschool' ),
			'icon'        => 'sidebar',
		);

		return $areas;
	}
endif;
add_filter( 'default_wp_template_part_areas', 'learnschool_template_part_areas' );

// Load modular component configurations.
require_once get_template_directory() . '/inc/pattern-categories.php';
require_once get_template_directory() . '/inc/block-styles.php';
require_once get_template_directory() . '/inc/site-logo.php';

if ( ! function_exists( 'learnschool_filter_site_title' ) ) :
	/**
	 * Style the default demo site title with two-tone branding ("Learn" in dark, "School" in brand purple).
	 * When a custom school title is used by customers, all words render in theme primary purple.
	 * Uses \WP_HTML_Tag_Processor for safe attribute and DOM handling.
	 *
	 * @since 1.0.0
	 * @param string $block_content Rendered block HTML.
	 * @return string Modified block HTML.
	 */
	function learnschool_filter_site_title( string $block_content ): string {
		if ( is_admin() || '' === trim( $block_content ) ) {
			return $block_content;
		}

		$tags = new \WP_HTML_Tag_Processor( $block_content );
		if ( $tags->next_tag( array( 'class_name' => 'wp-block-site-title' ) ) ) {
			$tags->add_class( 'has-two-tone-title' );
			$updated_content = $tags->get_updated_html();

			if ( false !== strpos( $updated_content, 'LearnSchool' ) ) {
				return str_replace(
					'LearnSchool',
					'<span class="learnschool-title-dark">Learn</span><span class="learnschool-title-accent">School</span>',
					$updated_content
				);
			}

			if ( false !== strpos( $updated_content, 'Learn School' ) ) {
				return str_replace(
					'Learn School',
					'<span class="learnschool-title-dark">Learn </span><span class="learnschool-title-accent">School</span>',
					$updated_content
				);
			}

			return $updated_content;
		}

		return $block_content;
	}
endif;
add_filter( 'render_block_core/site-title', 'learnschool_filter_site_title' );
