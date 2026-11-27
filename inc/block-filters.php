<?php
/**
 * Block rendering filters for LearnSchool theme.
 *
 * Keeps core navigation markup WCAG-compliant when rendering Page List blocks
 * and ensures classic <!--nextpage--> pagination renders inside block content.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'learnschool_build_navigation_blocks_from_pages' ) ) :
	/**
	 * Recursively converts a nested page hierarchy into navigation link/submenu blocks.
	 *
	 * @since 1.0.0
	 * @param int                              $parent_id        Parent page ID (0 for top-level).
	 * @param array<int, array<int, \WP_Post>> $pages_by_parent  Pages grouped by post_parent ID.
	 * @param bool                             $is_top_level     Whether current depth is top-level.
	 * @param array<int, true>                 $visited_ids      Visited page IDs to guard against cycles.
	 * @return array<int, array<string, mixed>> Parsed navigation link/submenu block arrays.
	 */
	function learnschool_build_navigation_blocks_from_pages( int $parent_id, array $pages_by_parent, bool $is_top_level = true, array $visited_ids = array() ): array {
		if ( empty( $pages_by_parent[ $parent_id ] ) ) {
			return array();
		}

		$blocks = array();

		foreach ( $pages_by_parent[ $parent_id ] as $page ) {
			$page_id = (int) $page->ID;
			if ( isset( $visited_ids[ $page_id ] ) ) {
				continue;
			}

			$next_visited             = $visited_ids;
			$next_visited[ $page_id ] = true;

			$stripped_title = trim( wp_strip_all_tags( (string) $page->post_title ) );
			$title          = '' !== $stripped_title ? $stripped_title : __( '(no title)', 'learnschool' );
			$permalink      = get_permalink( $page );
			$url            = is_string( $permalink ) ? $permalink : home_url( '/' );
			$child_blocks   = learnschool_build_navigation_blocks_from_pages( $page_id, $pages_by_parent, false, $next_visited );
			$has_children   = ! empty( $child_blocks );

			$attrs = array(
				'label' => $title,
				'type'  => 'page',
				'id'    => $page_id,
				'url'   => $url,
				'kind'  => 'post-type',
			);

			if ( $has_children ) {
				$attrs['isTopLevelItem'] = $is_top_level;
				$blocks[]                = array(
					'blockName'    => 'core/navigation-submenu',
					'attrs'        => $attrs,
					'innerBlocks'  => $child_blocks,
					'innerHTML'    => '',
					'innerContent' => array_fill( 0, count( $child_blocks ), null ),
				);
			} else {
				$attrs['isTopLevelLink'] = $is_top_level;
				$blocks[]                = array(
					'blockName'    => 'core/navigation-link',
					'attrs'        => $attrs,
					'innerBlocks'  => array(),
					'innerHTML'    => '',
					'innerContent' => array(),
				);
			}
		}

		return $blocks;
	}
endif;

if ( ! function_exists( 'learnschool_expand_navigation_page_list' ) ) :
	/**
	 * Expands top-level core/page-list blocks inside core/navigation into native
	 * core/navigation-link and core/navigation-submenu blocks.
	 *
	 * WordPress core wraps a direct-child core/page-list inside <ul class="wp-block-navigation__container">,
	 * producing invalid <ul><ul>...</ul></ul> markup that fails WCAG 1.3.1 list structure checks.
	 * Expanding to native navigation item blocks keeps the DOM strictly <ul><li>...</li></ul>.
	 *
	 * @since 1.0.0
	 * @param \WP_Block_List $inner_blocks Inner blocks resolved by core/navigation.
	 * @return \WP_Block_List Normalized inner blocks list.
	 */
	function learnschool_expand_navigation_page_list( \WP_Block_List $inner_blocks ): \WP_Block_List {
		$has_page_list = false;
		foreach ( $inner_blocks as $inner_block ) {
			if (
				$inner_block instanceof \WP_Block &&
				'core/page-list' === $inner_block->name &&
				empty( $inner_block->context['core/isInsideSubmenu'] )
			) {
				$has_page_list = true;
				break;
			}
		}

		if ( ! $has_page_list ) {
			return $inner_blocks;
		}

		$all_pages = get_pages(
			array(
				'sort_column' => 'menu_order,post_title',
				'order'       => 'asc',
			)
		);

		$pages_by_parent = array();
		if ( is_array( $all_pages ) ) {
			foreach ( $all_pages as $page ) {
				$pages_by_parent[ (int) $page->post_parent ][] = $page;
			}
		}

		$expanded          = array();
		$available_context = array();

		foreach ( $inner_blocks as $inner_block ) {
			if ( ! $inner_block instanceof \WP_Block ) {
				continue;
			}

			if ( empty( $available_context ) && is_array( $inner_block->context ) ) {
				$available_context = $inner_block->context;
			}

			if ( 'core/page-list' !== $inner_block->name || ! empty( $inner_block->context['core/isInsideSubmenu'] ) ) {
				$expanded[] = $inner_block;
				continue;
			}

			$parent_page_id = isset( $inner_block->attributes['parentPageID'] ) ? (int) $inner_block->attributes['parentPageID'] : 0;
			$parsed_pages   = learnschool_build_navigation_blocks_from_pages( $parent_page_id, $pages_by_parent, true );
			$block_context  = is_array( $inner_block->context ) ? $inner_block->context : array();

			foreach ( $parsed_pages as $parsed_page_block ) {
				$expanded[] = new \WP_Block( $parsed_page_block, $block_context );
			}
		}

		return new \WP_Block_List( $expanded, $available_context );
	}
endif;
add_filter( 'block_core_navigation_render_inner_blocks', 'learnschool_expand_navigation_page_list' );

if ( ! function_exists( 'learnschool_highlight_active_custom_nav_link' ) ) :
	/**
	 * Marks custom core/navigation-link items as active when their URL path matches
	 * the current page request, preserving active-pill styling for theme pattern menus.
	 *
	 * @since 1.0.0
	 * @param string               $block_content Rendered core/navigation-link HTML.
	 * @param array<string, mixed> $block         Parsed block data.
	 * @return string Modified HTML with current-menu-item and aria-current="page" when active.
	 */
	function learnschool_highlight_active_custom_nav_link( string $block_content, array $block ): string {
		if ( is_admin() || '' === trim( $block_content ) ) {
			return $block_content;
		}

		$raw_url = isset( $block['attrs']['url'] ) && is_string( $block['attrs']['url'] )
			? $block['attrs']['url']
			: '';
		if ( '' === $raw_url ) {
			return $block_content;
		}

		$link_host = wp_parse_url( $raw_url, PHP_URL_HOST );
		$site_host = wp_parse_url( home_url( '/' ), PHP_URL_HOST );
		if ( is_string( $link_host ) && '' !== $link_host && is_string( $site_host ) && 0 !== strcasecmp( $link_host, $site_host ) ) {
			return $block_content;
		}

		$link_path    = wp_parse_url( $raw_url, PHP_URL_PATH );
		$request_uri  = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( (string) $_SERVER['REQUEST_URI'] ) ) : '';
		$current_path = wp_parse_url( $request_uri, PHP_URL_PATH );

		if ( ! is_string( $link_path ) || ! is_string( $current_path ) ) {
			return $block_content;
		}

		$normalized_link    = '/' === $link_path ? '/' : trailingslashit( $link_path );
		$normalized_current = '/' === $current_path ? '/' : trailingslashit( $current_path );
		$home_path          = wp_parse_url( home_url( '/' ), PHP_URL_PATH );
		$normalized_home    = is_string( $home_path ) && '' !== $home_path ? trailingslashit( $home_path ) : '/';

		$link_query_raw    = wp_parse_url( $raw_url, PHP_URL_QUERY );
		$current_query_raw = wp_parse_url( $request_uri, PHP_URL_QUERY );
		if ( is_string( $link_query_raw ) && '' !== $link_query_raw ) {
			$link_args    = array();
			$current_args = array();
			parse_str( $link_query_raw, $link_args );
			if ( is_string( $current_query_raw ) && '' !== $current_query_raw ) {
				parse_str( $current_query_raw, $current_args );
			}
			ksort( $link_args );
			ksort( $current_args );
			if ( $normalized_link !== $normalized_current || $link_args !== $current_args ) {
				return $block_content;
			}
		} else {
			if ( $normalized_link === $normalized_home ) {
				return $block_content;
			}

			$posts_page_id  = ( 'page' === get_option( 'show_on_front' ) ) ? absint( get_option( 'page_for_posts' ) ) : 0;
			$news_path      = ( $posts_page_id > 0 && function_exists( 'learnschool_get_news_url' ) )
				? wp_parse_url( learnschool_get_news_url(), PHP_URL_PATH )
				: '';
			$is_active_news = is_string( $news_path ) && '' !== $news_path && is_home() && trailingslashit( $news_path ) === $normalized_link;

			if ( $normalized_link !== $normalized_current && ! $is_active_news ) {
				return $block_content;
			}
		}

		$tags = new \WP_HTML_Tag_Processor( $block_content );
		if ( $tags->next_tag( array( 'tag_name' => 'LI' ) ) ) {
			$tags->add_class( 'current-menu-item' );
		} else {
			$tags = new \WP_HTML_Tag_Processor( $block_content );
		}

		if ( $tags->next_tag( array( 'tag_name' => 'A' ) ) ) {
			if ( null !== $tags->get_attribute( 'aria-current' ) ) {
				return $block_content;
			}
			$tags->set_attribute( 'aria-current', 'page' );
		}

		return $tags->get_updated_html();
	}
endif;
add_filter( 'render_block_core/navigation-link', 'learnschool_highlight_active_custom_nav_link', 10, 2 );

if ( ! function_exists( 'learnschool_render_classic_nextpage_links' ) ) :
	/**
	 * Renders wp_link_pages() for classic <!--nextpage--> paginated posts inside core/post-content.
	 *
	 * WordPress core's core/post-content block only calls wp_link_pages() when has_block( 'core/nextpage' )
	 * is true, omitting page links for classic-editor posts using raw <!--nextpage--> tags.
	 *
	 * @since 1.0.0
	 * @param string $content Filtered post content.
	 * @return string Content with classic nextpage links appended when needed.
	 */
	function learnschool_render_classic_nextpage_links( string $content ): string {
		global $multipage;

		if (
			is_admin() ||
			! is_singular() ||
			! is_main_query() ||
			get_the_ID() !== get_queried_object_id() ||
			empty( $multipage ) ||
			has_block( 'core/nextpage' )
		) {
			return $content;
		}

		$tags = new \WP_HTML_Tag_Processor( $content );
		if ( $tags->next_tag( array( 'class_name' => 'post-nav-links' ) ) ) {
			return $content;
		}

		$page_links = wp_link_pages( array( 'echo' => 0 ) );
		if ( ! is_string( $page_links ) || '' === trim( $page_links ) ) {
			return $content;
		}

		return $content . $page_links;
	}
endif;
add_filter( 'the_content', 'learnschool_render_classic_nextpage_links', 15 );

if ( ! function_exists( 'learnschool_add_static_image_dimensions' ) ) :
	/**
	 * Adds intrinsic width and height attributes to static theme images in core/image blocks
	 * so browsers reserve layout space before download and prevent cumulative layout shift.
	 *
	 * @since 1.0.0
	 * @param string $block_content Rendered core/image block HTML.
	 * @return string Modified block HTML with intrinsic width/height attributes when available.
	 */
	function learnschool_add_static_image_dimensions( string $block_content ): string {
		if ( '' === trim( $block_content ) || ! str_contains( $block_content, '<img' ) ) {
			return $block_content;
		}

		$tags = new \WP_HTML_Tag_Processor( $block_content );
		if ( ! $tags->next_tag( array( 'tag_name' => 'img' ) ) ) {
			return $block_content;
		}

		if ( null !== $tags->get_attribute( 'width' ) && null !== $tags->get_attribute( 'height' ) ) {
			return $block_content;
		}

		$src = $tags->get_attribute( 'src' );
		if ( ! is_string( $src ) || '' === $src ) {
			return $block_content;
		}

		$src_path = wp_parse_url( $src, PHP_URL_PATH );
		if ( ! is_string( $src_path ) || '' === $src_path ) {
			return $block_content;
		}

		$marker = '/assets/images/';
		$pos    = strpos( $src_path, $marker );
		if ( false === $pos ) {
			return $block_content;
		}

		$relative_subpath = substr( $src_path, $pos + 1 );
		if ( str_contains( $relative_subpath, '..' ) ) {
			return $block_content;
		}

		$ext = strtolower( pathinfo( $relative_subpath, PATHINFO_EXTENSION ) );
		if ( ! in_array( $ext, array( 'png', 'jpg', 'jpeg', 'webp', 'gif', 'avif' ), true ) ) {
			return $block_content;
		}

		$file_path = get_theme_file_path( $relative_subpath );
		if ( ! is_file( $file_path ) ) {
			return $block_content;
		}

		static $dimensions_cache = array();
		if ( ! array_key_exists( $file_path, $dimensions_cache ) ) {
			$size                           = wp_getimagesize( $file_path );
			$dimensions_cache[ $file_path ] = is_array( $size ) && isset( $size[0], $size[1] ) && $size[0] > 0 && $size[1] > 0
				? array( (int) $size[0], (int) $size[1] )
				: null;
		}

		$dimensions = $dimensions_cache[ $file_path ];
		if ( null === $dimensions ) {
			return $block_content;
		}

		if ( null === $tags->get_attribute( 'width' ) ) {
			$tags->set_attribute( 'width', (string) $dimensions[0] );
		}
		if ( null === $tags->get_attribute( 'height' ) ) {
			$tags->set_attribute( 'height', (string) $dimensions[1] );
		}

		return $tags->get_updated_html();
	}
endif;
add_filter( 'render_block_core/image', 'learnschool_add_static_image_dimensions' );

if ( ! function_exists( 'learnschool_render_teachers_carousel' ) ) :
	/**
	 * Enhances the teachers portrait showcase group with accessible WordPress
	 * Interactivity API prev/next carousel controls on the frontend.
	 *
	 * Keeps the underlying pattern markup pure Gutenberg core blocks while
	 * progressively enabling interactive navigation when hydrated.
	 *
	 * @since 1.0.0
	 * @param string               $block_content Rendered core/group block HTML.
	 * @param array<string, mixed> $block         Parsed block data.
	 * @return string Enhanced block HTML with interactive carousel controls when applicable.
	 */
	function learnschool_render_teachers_carousel( string $block_content, array $block ): string {
		if ( is_admin() || '' === trim( $block_content ) ) {
			return $block_content;
		}

		$class_name = isset( $block['attrs']['className'] ) && is_string( $block['attrs']['className'] )
			? $block['attrs']['className']
			: '';

		if ( ! str_contains( $class_name, 'learnschool-teachers-carousel' ) ) {
			return $block_content;
		}

		$tags = new \WP_HTML_Tag_Processor( $block_content );
		if ( ! $tags->next_tag( array( 'class_name' => 'learnschool-teachers-carousel' ) ) ) {
			return $block_content;
		}

		$slide_index = 0;
		$has_track   = $tags->next_tag( array( 'class_name' => 'learnschool-teachers-track' ) );
		if ( $has_track ) {
			$track_tag        = $tags->get_tag();
			$track_depth      = 1;
			$div_depth        = ( 'DIV' === $track_tag ) ? 1 : 0;
			$target_div_depth = ( 'DIV' === $track_tag ) ? 2 : 1;

			while ( $tags->next_tag( array( 'tag_closers' => 'visit' ) ) ) {
				$current_tag = $tags->get_tag();
				$is_closer   = $tags->is_tag_closer();
				if ( $current_tag === $track_tag ) {
					$track_depth += $is_closer ? -1 : 1;
					if ( $track_depth <= 0 ) {
						break;
					}
				}
				if ( 'DIV' === $current_tag ) {
					$div_depth += $is_closer ? -1 : 1;
				}

				if ( $is_closer || 'DIV' !== $current_tag || $target_div_depth !== $div_depth || ! $tags->has_class( 'wp-block-column' ) ) {
					continue;
				}

				$existing_context_raw = $tags->get_attribute( 'data-wp-context' );
				$existing_context     = is_string( $existing_context_raw )
					? json_decode( $existing_context_raw, true )
					: array();
				$slide_context_data   = is_array( $existing_context )
					? array_merge( $existing_context, array( 'slideIndex' => $slide_index ) )
					: array( 'slideIndex' => $slide_index );
				$slide_context        = wp_json_encode( $slide_context_data );
				if ( is_string( $slide_context ) ) {
					$tags->set_attribute( 'data-wp-context', $slide_context );
				}
				$tags->set_attribute( 'data-wp-style--order', 'state.slideSlot' );
				$tags->set_attribute( 'data-wp-bind--data-slide-slot', 'state.slideSlot' );
				$tags->set_attribute( 'data-slide-slot', (string) $slide_index );

				$existing_style = $tags->get_attribute( 'style' );
				$order_style    = 'order:' . $slide_index;
				$updated_style  = is_string( $existing_style ) && '' !== trim( $existing_style )
					? rtrim( $existing_style, "; \t\n\r\0\x0B" ) . ';' . $order_style
					: $order_style;
				$tags->set_attribute( 'style', $updated_style );

				++$slide_index;
			}
		}

		$column_count = $slide_index;
		if ( $column_count < 2 ) {
			return $block_content;
		}

		$annotated_content = $tags->get_updated_html();

		$version = function_exists( 'learnschool_asset_version' )
			? learnschool_asset_version( 'assets/js/teachers-carousel.js' )
			: '1.0.0';

		if ( function_exists( 'wp_enqueue_script_module' ) ) {
			wp_enqueue_script_module(
				'learnschool-teachers-carousel',
				get_theme_file_uri( 'assets/js/teachers-carousel.js' ),
				array( '@wordpress/interactivity' ),
				$version
			);
		}

		if ( function_exists( 'wp_interactivity_state' ) ) {
			wp_interactivity_state(
				'learnschool/teachers',
				array(
					/* translators: 1: Teacher name and role, 2: Current slide position, 3: Total number of teachers. */
					'showingTemplate' => __( 'Showing %1$s (%2$d of %3$d)', 'learnschool' ),
					'slideSlot'       => static function (): int {
						$context = function_exists( 'wp_interactivity_get_context' )
							? wp_interactivity_get_context( 'learnschool/teachers' )
							: array();
						$index   = isset( $context['slideIndex'] ) ? (int) $context['slideIndex'] : 0;
						$active  = isset( $context['activeIndex'] ) ? (int) $context['activeIndex'] : 0;
						$total   = isset( $context['total'] ) ? (int) $context['total'] : 0;
						if ( $total <= 0 ) {
							return $index;
						}

						return ( ( $index - $active ) % $total + $total ) % $total;
					},
				)
			);
		}

		$context = array(
			'ready'        => false,
			'activeIndex'  => 0,
			'total'        => $column_count,
			'announcement' => '',
		);

		$context_attr = function_exists( 'wp_interactivity_data_wp_context' )
			? wp_interactivity_data_wp_context( $context )
			: 'data-wp-context="' . esc_attr( (string) wp_json_encode( $context ) ) . '"';

		$prev_svg = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="m15 18-6-6 6-6"/></svg>';
		$next_svg = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="m9 18 6-6-6-6"/></svg>';

		$has_nested_interactive = false;
		$interactive_scan       = new \WP_HTML_Tag_Processor( $annotated_content );
		while ( $interactive_scan->next_tag() ) {
			if ( null !== $interactive_scan->get_attribute( 'data-wp-interactive' ) ) {
				$has_nested_interactive = true;
				break;
			}
		}

		$placeholder = '<!--' . wp_unique_id( 'learnschool-teachers-track-slot-' ) . '-->';
		$shell_body  = $has_nested_interactive ? $placeholder : $annotated_content;

		$shell = sprintf(
			'<div class="learnschool-teachers-carousel-shell alignwide" data-wp-interactive="learnschool/teachers" %1$s data-wp-init="callbacks.init" data-wp-bind--data-carousel-ready="context.ready" role="region" aria-roledescription="%2$s" aria-label="%3$s">'
			. '<button type="button" class="learnschool-teachers-nav learnschool-teachers-nav--prev" aria-label="%4$s" data-wp-on--click="actions.prev" data-wp-bind--hidden="!context.ready" hidden>%5$s</button>'
			. '%6$s'
			. '<button type="button" class="learnschool-teachers-nav learnschool-teachers-nav--next" aria-label="%7$s" data-wp-on--click="actions.next" data-wp-bind--hidden="!context.ready" hidden>%8$s</button>'
			. '<span class="screen-reader-text" aria-live="polite" data-wp-text="context.announcement"></span>'
			. '</div>',
			$context_attr,
			esc_attr__( 'carousel', 'learnschool' ),
			esc_attr__( 'Our teachers', 'learnschool' ),
			esc_attr__( 'Previous teacher', 'learnschool' ),
			$prev_svg,
			$shell_body,
			esc_attr__( 'Next teacher', 'learnschool' ),
			$next_svg
		);

		$processed = function_exists( 'wp_interactivity_process_directives' )
			? wp_interactivity_process_directives( $shell )
			: $shell;

		if ( $has_nested_interactive ) {
			$slot_pos = strpos( $processed, $placeholder );
			if ( false !== $slot_pos ) {
				return substr_replace( $processed, $annotated_content, $slot_pos, strlen( $placeholder ) );
			}
		}

		return $processed;
	}
endif;
add_filter( 'render_block_core/group', 'learnschool_render_teachers_carousel', 10, 2 );
