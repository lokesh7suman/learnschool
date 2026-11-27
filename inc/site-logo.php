<?php
/**
 * Site Logo fallback and rendering enhancements for LearnSchool theme.
 *
 * Provides a branded, transparent mascot logo fallback when no custom logo
 * is uploaded in the Site Editor, and ensures responsive dimension parity.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'learnschool_default_custom_logo' ) ) :
	/**
	 * Filters the custom logo output to provide our transparent fallback logo
	 * when no custom logo has been uploaded via the Site Editor or Customizer.
	 *
	 * @since 1.0.0
	 * @param string $html Existing custom logo HTML markup.
	 * @return string Filtered logo HTML markup.
	 */
	function learnschool_default_custom_logo( string $html ): string {
		// If a custom logo has already been uploaded and set by the user, return it unchanged.
		if ( '' !== trim( $html ) ) {
			return $html;
		}

		$logo_url   = get_theme_file_uri( 'assets/images/site-logo.png' );
		$site_title = learnschool_get_plain_site_title( __( 'LearnSchool', 'learnschool' ) );

		// When on front page, logo alt is empty decorative string per core accessibility conventions.
		$alt = is_front_page() && ! is_paged() ? '' : $site_title;

		$aria_current = ! is_paged() && ( is_front_page() || ( is_home() && ( (int) get_option( 'page_for_posts' ) !== get_queried_object_id() ) ) ) ? ' aria-current="page"' : '';

		$image = sprintf(
			'<img width="512" height="512" src="%1$s" class="custom-logo" alt="%2$s" decoding="async" />',
			esc_url( $logo_url ),
			esc_attr( $alt )
		);

		return sprintf(
			'<a href="%1$s" class="custom-logo-link" rel="home"%2$s aria-label="%3$s">%4$s</a>',
			esc_url( home_url( '/' ) ),
			$aria_current,
			esc_attr( $site_title ),
			$image
		);
	}
endif;
add_filter( 'get_custom_logo', 'learnschool_default_custom_logo' );

if ( ! function_exists( 'learnschool_render_site_logo_block' ) ) :
	/**
	 * Filters core/site-logo block rendering to apply custom width attributes
	 * to the fallback logo image via \WP_HTML_Tag_Processor.
	 *
	 * @since 1.0.0
	 * @param string               $block_content Rendered block markup.
	 * @param array<string, mixed> $block         Parsed block array.
	 * @return string Modified block markup.
	 */
	function learnschool_render_site_logo_block( string $block_content, array $block ): string {
		if ( empty( $block_content ) || empty( $block['attrs']['width'] ) ) {
			return $block_content;
		}

		$processor = new \WP_HTML_Tag_Processor( $block_content );
		if ( $processor->next_tag( array( 'tag_name' => 'a' ) ) ) {
			if ( ! $processor->get_attribute( 'aria-label' ) ) {
				$site_title = learnschool_get_plain_site_title();
				if ( '' !== $site_title ) {
					$processor->set_attribute( 'aria-label', $site_title );
				}
			}
		} else {
			$processor = new \WP_HTML_Tag_Processor( $block_content );
		}

		if ( $processor->next_tag( array( 'tag_name' => 'img' ) ) ) {
			$width = (int) $block['attrs']['width'];
			if ( $width > 0 ) {
				$src         = $processor->get_attribute( 'src' );
				$is_fallback = is_string( $src ) && str_contains( $src, 'assets/images/site-logo.png' );
				$processor->set_attribute( 'width', (string) $width );
				if ( $is_fallback ) {
					$processor->set_attribute( 'height', (string) $width );
				} else {
					$processor->remove_attribute( 'height' );
				}
				$existing_style = $processor->get_attribute( 'style' );
				$style          = is_string( $existing_style ) && '' !== trim( $existing_style )
					? rtrim( $existing_style, "; \t\n\r\0\x0B" ) . "; width: {$width}px;"
					: "width: {$width}px;";
				$processor->set_attribute( 'style', $style );
			}
		}

		return $processor->get_updated_html();
	}
endif;
add_filter( 'render_block_core/site-logo', 'learnschool_render_site_logo_block', 10, 2 );
