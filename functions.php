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

if ( ! function_exists( 'learnschool_filter_navigation_markup' ) ) :
	/**
	 * Enhance navigation block markup for robust mobile submenu handling.
	 *
	 * Uses \WP_HTML_Tag_Processor to ensure submenu toggle buttons in the mobile
	 * overlay have an initial aria-expanded="false" attribute and correct Interactivity
	 * API state bindings, keeping nested submenus collapsed by default.
	 *
	 * @since 1.1.0
	 * @param string $block_content Rendered navigation block HTML.
	 * @return string Modified navigation block HTML.
	 */
	function learnschool_filter_navigation_markup( string $block_content ): string {
		if ( '' === trim( $block_content ) ) {
			return $block_content;
		}

		$tags = new \WP_HTML_Tag_Processor( $block_content );

		while ( $tags->next_tag(
			array(
				'tag_name'   => 'BUTTON',
				'class_name' => 'wp-block-navigation-submenu__toggle',
			)
		) ) {
			// Ensure initial aria-expanded attribute is explicitly false for SSR and initial render.
			if ( null === $tags->get_attribute( 'aria-expanded' ) ) {
				$tags->set_attribute( 'aria-expanded', 'false' );
			}

			// Ensure state binding tracks individual submenu state across core versions.
			if ( 'state.isSubmenuOpen' === $tags->get_attribute( 'data-wp-bind--aria-expanded' ) ) {
				$tags->set_attribute( 'data-wp-bind--aria-expanded', 'state.isMenuOpen' );
			}
		}

		return $tags->get_updated_html();
	}
endif;
add_filter( 'render_block_core/navigation', 'learnschool_filter_navigation_markup' );
