<?php
/**
 * Graceful fallback for core/post-featured-image when posts have no thumbnail.
 *
 * Guarantees uniform card heights and prevents broken empty placeholders
 * across blog query loops and archive templates.
 *
 * @package LearnSchool
 * @since 1.0.8
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'learnschool_post_featured_image_fallback' ) ) :
	/**
	 * Provide a fallback image when a post lacks a featured image.
	 *
	 * @param string $block_content Rendered block HTML.
	 * @param array  $block         Parsed block attributes.
	 * @return string Filtered block HTML.
	 */
	function learnschool_post_featured_image_fallback( string $block_content, array $block ): string {
		// If core already rendered an image tag, preserve it.
		if ( false !== strpos( $block_content, '<img' ) ) {
			return $block_content;
		}

		$post_id = get_the_ID();
		if ( ! $post_id ) {
			return $block_content;
		}

		$aspect_ratio = $block['attrs']['aspectRatio'] ?? '16/9';
		$is_link      = ! empty( $block['attrs']['isLink'] );

		// Cycle through local educational stock images based on post ID.
		$fallbacks  = array(
			'assets/images/photos/blog-1.webp',
			'assets/images/photos/blog-2.webp',
			'assets/images/photos/blog-3.webp',
		);
		$image_src  = get_theme_file_uri( $fallbacks[ abs( $post_id ) % count( $fallbacks ) ] );
		$post_title = get_the_title( $post_id );

		$img_html = sprintf(
			'<img src="%s" alt="%s" class="wp-post-image wp-post-image-placeholder" style="aspect-ratio:%s;object-fit:cover;width:100%%;height:100%%" loading="lazy" />',
			esc_url( $image_src ),
			esc_attr( $post_title ),
			esc_attr( $aspect_ratio )
		);

		if ( $is_link ) {
			$permalink = get_permalink( $post_id );
			$inner     = sprintf(
				'<a href="%s" aria-label="%s">%s</a>',
				esc_url( $permalink ),
				esc_attr( $post_title ),
				$img_html
			);
		} else {
			$inner = $img_html;
		}

		$class_name = 'wp-block-post-featured-image is-fallback-image';
		if ( ! empty( $block['attrs']['className'] ) ) {
			$class_name .= ' ' . sanitize_html_class( (string) $block['attrs']['className'] );
		}

		return sprintf( '<figure class="%s">%s</figure>', esc_attr( $class_name ), $inner );
	}
endif;
add_filter( 'render_block_core/post-featured-image', 'learnschool_post_featured_image_fallback', 10, 2 );
