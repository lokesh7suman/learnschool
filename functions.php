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
				'height'      => 512,
				'width'       => 512,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		// Remove default core bundled patterns to keep block inserter clean and curated.
		remove_theme_support( 'core-block-patterns' );
	}
endif;
add_action( 'after_setup_theme', 'learnschool_setup' );

if ( ! function_exists( 'learnschool_asset_version' ) ) :
	/**
	 * Resolves a cache-busting asset version using file modification time in WP_DEBUG mode.
	 *
	 * @since 1.0.0
	 * @param string $relative_path Theme-relative asset path.
	 * @return string Version string for enqueued assets.
	 */
	function learnschool_asset_version( string $relative_path ): string {
		$theme_version = wp_get_theme()->get( 'Version' );
		$fallback      = is_string( $theme_version ) && '' !== $theme_version ? $theme_version : '1.0.0';

		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
			$file_path = get_theme_file_path( $relative_path );
			$mtime     = is_file( $file_path ) ? filemtime( $file_path ) : false;
			if ( false !== $mtime ) {
				return (string) $mtime;
			}
		}

		return $fallback;
	}
endif;

if ( ! function_exists( 'learnschool_get_plain_site_title' ) ) :
	/**
	 * Returns the decoded, tag-stripped site title for plain-text or single-pass escaping contexts.
	 *
	 * @since 1.0.0
	 * @param string $fallback Optional fallback string when no site title is configured.
	 * @return string Decoded plain-text site title or fallback string.
	 */
	function learnschool_get_plain_site_title( string $fallback = '' ): string {
		$decoded  = html_entity_decode( (string) get_bloginfo( 'name', 'display' ), ENT_QUOTES | ENT_HTML5, 'UTF-8' );
		$stripped = wp_strip_all_tags( $decoded );
		$trimmed  = preg_replace( '/^[\s\p{Z}\p{C}]+|[\s\p{Z}\p{C}]+$/u', '', $stripped );
		$clean    = is_string( $trimmed ) ? $trimmed : trim( $stripped );

		return '' !== $clean ? $clean : $fallback;
	}
endif;

if ( ! function_exists( 'learnschool_sticky_label_css' ) ) :
	/**
	 * Builds the CSS custom property declaration for the localized sticky post badge label.
	 *
	 * @since 1.0.0
	 * @return string Inline CSS declaration or empty string on encoding failure.
	 */
	function learnschool_sticky_label_css(): string {
		$raw_label    = wp_strip_all_tags( __( 'Featured', 'learnschool' ) );
		$clean_label  = preg_replace( '/[\r\n\t]+/', ' ', trim( $raw_label ) );
		$clean_label  = is_string( $clean_label ) ? $clean_label : trim( $raw_label );
		$sticky_label = wp_json_encode( $clean_label, JSON_HEX_TAG | JSON_UNESCAPED_UNICODE );
		if ( ! is_string( $sticky_label ) ) {
			return '';
		}

		return ":root { --learnschool-sticky-label: {$sticky_label}; }";
	}
endif;

if ( ! function_exists( 'learnschool_scripts' ) ) :
	/**
	 * Enqueue theme stylesheet on front-end.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_scripts(): void {
		$version = learnschool_asset_version( 'style.css' );

		wp_enqueue_style(
			'learnschool-style',
			get_stylesheet_uri(),
			array(),
			$version
		);

		$sticky_css = learnschool_sticky_label_css();
		if ( '' !== $sticky_css ) {
			wp_add_inline_style( 'learnschool-style', $sticky_css );
		}

		wp_enqueue_script(
			'learnschool-navigation',
			get_theme_file_uri( 'assets/js/navigation.js' ),
			array(),
			$version,
			array(
				'strategy'  => 'defer',
				'in_footer' => true,
			)
		);

		wp_localize_script(
			'learnschool-navigation',
			'learnschoolNavData',
			array(
				'menuTitle' => wp_strip_all_tags( __( 'Menu', 'learnschool' ) ),
			)
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
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_enqueue_block_styles(): void {
		$files = glob( get_template_directory() . '/assets/styles/core-*.css' );
		if ( ! is_array( $files ) ) {
			return;
		}

		$shared_blocks = array(
			'core-quote'      => array( 'core/pullquote' ),
			'core-categories' => array( 'core/archives' ),
		);

		foreach ( $files as $file ) {
			$filename      = basename( $file, '.css' );
			$block_name    = str_replace( 'core-', 'core/', $filename );
			$relative_path = "assets/styles/{$filename}.css";
			$version       = learnschool_asset_version( $relative_path );
			$style_args    = array(
				'handle' => "learnschool-block-{$filename}",
				'src'    => get_theme_file_uri( $relative_path ),
				'path'   => get_theme_file_path( $relative_path ),
				'ver'    => $version,
			);

			wp_enqueue_block_style( $block_name, $style_args );

			foreach ( $shared_blocks[ $filename ] ?? array() as $extra_block ) {
				$extra_args           = $style_args;
				$extra_args['handle'] = "learnschool-block-{$filename}-" . sanitize_key( $extra_block );
				wp_enqueue_block_style( $extra_block, $extra_args );
			}
		}
	}
endif;
add_action( 'init', 'learnschool_enqueue_block_styles' );

if ( ! function_exists( 'learnschool_block_assets' ) ) :
	/**
	 * Expose dynamic CSS custom properties inside the block editor iframe.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_block_assets(): void {
		if ( ! is_admin() ) {
			return;
		}

		$sticky_css = learnschool_sticky_label_css();
		if ( '' === $sticky_css ) {
			return;
		}

		$theme_version = wp_get_theme()->get( 'Version' );
		$version       = is_string( $theme_version ) ? $theme_version : '1.0.0';

		wp_register_style( 'learnschool-editor-tokens', false, array(), $version );
		wp_enqueue_style( 'learnschool-editor-tokens' );
		wp_add_inline_style( 'learnschool-editor-tokens', $sticky_css );
	}
endif;
add_action( 'enqueue_block_assets', 'learnschool_block_assets' );

if ( ! function_exists( 'learnschool_editor_assets' ) ) :
	/**
	 * Enqueue block editor assets for inline doodle text formatting.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_editor_assets(): void {
		$version = learnschool_asset_version( 'assets/js/editor-formats.js' );

		wp_enqueue_script(
			'learnschool-editor-formats',
			get_theme_file_uri( 'assets/js/editor-formats.js' ),
			array( 'wp-rich-text', 'wp-block-editor', 'wp-element', 'wp-i18n', 'wp-hooks' ),
			$version,
			true
		);

		wp_set_script_translations(
			'learnschool-editor-formats',
			'learnschool',
			get_theme_file_path( 'languages' )
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
	 * @since 1.0.0
	 * @param array<int, array<string, string>> $areas Existing template part areas.
	 * @return array<int, array<string, string>> Filtered template part areas.
	 */
	function learnschool_template_part_areas( array $areas ): array {
		$areas[] = array(
			'area'        => 'banner',
			'area_tag'    => 'aside',
			'label'       => _x( 'Banner', 'template part area', 'learnschool' ),
			'description' => __( 'Top announcement bars, campus alert strips, and utility ribbons.', 'learnschool' ),
			'icon'        => 'layout',
		);

		$areas[] = array(
			'area'        => 'sidebar',
			'area_tag'    => 'aside',
			'label'       => _x( 'Sidebar', 'template part area', 'learnschool' ),
			'description' => __( 'Curriculum navigation, educator profiles, and school widget sidebars.', 'learnschool' ),
			'icon'        => 'sidebar',
		);

		return $areas;
	}
endif;
add_filter( 'default_wp_template_part_areas', 'learnschool_template_part_areas' );

// Load modular component configurations.
require_once get_template_directory() . '/inc/pattern-categories.php';
require_once get_template_directory() . '/inc/block-bindings.php';
require_once get_template_directory() . '/inc/block-styles.php';
require_once get_template_directory() . '/inc/block-filters.php';
require_once get_template_directory() . '/inc/site-logo.php';
require_once get_template_directory() . '/inc/theme-admin.php';

if ( ! function_exists( 'learnschool_get_news_url' ) ) :
	/**
	 * Returns the canonical URL for the school News / Posts archive or page.
	 *
	 * @since 1.0.0
	 * @return string Canonical News page or archive URL.
	 */
	function learnschool_get_news_url(): string {
		$posts_page = ( 'page' === get_option( 'show_on_front' ) ) ? absint( get_option( 'page_for_posts' ) ) : 0;
		if ( $posts_page > 0 ) {
			$permalink = get_permalink( $posts_page );
			if ( is_string( $permalink ) && '' !== $permalink ) {
				return $permalink;
			}
		}

		return home_url( '/news/' );
	}
endif;

if ( ! function_exists( 'learnschool_filter_site_title' ) ) :
	/**
	 * Style the site title with two-tone branding and the Sunny Gold brush accent on the final word.
	 * Uses \WP_HTML_Tag_Processor for safe attribute and class handling.
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
		if ( ! $tags->next_tag( array( 'class_name' => 'wp-block-site-title' ) ) ) {
			return $block_content;
		}

		// Mirror core/site-title which renders esc_html( get_bloginfo( 'name' ) ) without wptexturize.
		$clean_title = trim( wp_strip_all_tags( (string) get_bloginfo( 'name' ) ) );
		if ( '' === $clean_title ) {
			$fallback    = html_entity_decode( $block_content, ENT_QUOTES | ENT_HTML5, 'UTF-8' );
			$clean_title = trim( wp_strip_all_tags( $fallback ) );
		}
		if ( '' === $clean_title ) {
			return $block_content;
		}

		$dark_part   = '';
		$accent_part = $clean_title;
		if ( 1 === preg_match( '/^(.+\s)(\S+)$/su', $clean_title, $space_parts ) ) {
			$dark_part   = $space_parts[1];
			$accent_part = $space_parts[2];
		} elseif ( 1 === preg_match( '/^([\p{L}\p{N}]+?)(\p{Lu}.+)$/u', $clean_title, $camel_parts ) ) {
			$dark_part   = $camel_parts[1];
			$accent_part = $camel_parts[2];
		}

		$replacement = ( '' !== $dark_part ? '<span class="learnschool-title-dark">' . esc_html( $dark_part ) . '</span>' : '' )
			. '<span class="learnschool-title-accent">' . esc_html( $accent_part ) . '</span>';

		// Replace only the inner title node text immediately before its closing tag.
		$needle = '>' . esc_html( $clean_title ) . '</';
		$pos    = strrpos( $block_content, $needle );
		if ( false !== $pos ) {
			return substr_replace( $block_content, '>' . $replacement . '</', $pos, strlen( $needle ) );
		}

		return $block_content;
	}
endif;
add_filter( 'render_block_core/site-title', 'learnschool_filter_site_title' );

if ( ! function_exists( 'learnschool_preload_webfonts' ) ) :
	/**
	 * Preload critical self-hosted web fonts for improved LCP and layout stability.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_preload_webfonts(): void {
		$font_url = get_theme_file_uri( 'assets/fonts/quicksand/quicksand-variable.woff2' );
		echo '<link rel="preload" href="' . esc_url( $font_url ) . '" as="font" type="font/woff2" crossorigin>' . "\n";
	}
endif;
add_action( 'wp_head', 'learnschool_preload_webfonts', 1 );

if ( ! function_exists( 'learnschool_respect_static_front_page' ) ) :
	/**
	 * Defer to the selected static page template when Settings -> Reading uses a static front page,
	 * unless the user explicitly saved a custom Front Page template in the Site Editor.
	 *
	 * @since 1.0.0
	 * @param string $template Resolved front-page template path.
	 * @return string Empty string to fall back to the page template hierarchy, or the original template.
	 */
	function learnschool_respect_static_front_page( string $template ): string {
		if ( is_admin() ) {
			return $template;
		}

		if ( 'page' !== get_option( 'show_on_front' ) || (int) get_option( 'page_on_front' ) <= 0 ) {
			return $template;
		}

		$front_templates = get_block_templates( array( 'slug__in' => array( 'front-page' ) ) );
		foreach ( $front_templates as $front_template ) {
			if ( 'front-page' === $front_template->slug && 'custom' === $front_template->source ) {
				return $template;
			}
		}

		return '';
	}
endif;
add_filter( 'frontpage_template', 'learnschool_respect_static_front_page' );

if ( ! function_exists( 'learnschool_post_classes' ) ) :
	/**
	 * Add a consistent sticky modifier class for sticky posts on non-paged views,
	 * including archives and custom Query Loop patterns outside the main blog index.
	 *
	 * @since 1.0.0
	 * @param array<int, string> $classes   Space-separated post class names.
	 * @param array<int, string> $css_class Additional classes passed to post_class().
	 * @param int                $post_id   Current post ID.
	 * @return array<int, string> Filtered post class names.
	 */
	function learnschool_post_classes( array $classes, array $css_class, int $post_id ): array {
		unset( $css_class );

		if ( ! is_admin() && ! is_paged() && $post_id > 0 && is_sticky( $post_id ) && ! in_array( 'sticky', $classes, true ) ) {
			$classes[] = 'learnschool-is-sticky';
		}

		return $classes;
	}
endif;
add_filter( 'post_class', 'learnschool_post_classes', 10, 3 );
