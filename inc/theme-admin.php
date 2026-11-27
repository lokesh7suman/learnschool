<?php
/**
 * Top-level LearnSchool Admin Menu & Setup Guide.
 *
 * Provides a concise, WordPress-native onboarding guide with one-click starter
 * page creation (pre-configured with the Page No Title template), Global Styles
 * palette previews, essential WordPress settings shortcuts, and companion
 * plugin installation—without duplicating the Site Editor.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'learnschool_get_admin_menu_icon' ) ) :
	/**
	 * Returns a monochromatic LearnSchool emblem SVG data URI for the top-level admin menu.
	 *
	 * @since 1.0.0
	 * @return string SVG data URI compatible with all WordPress admin color schemes.
	 */
	function learnschool_get_admin_menu_icon(): string {
		return 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI2E3YWFhZCIgZD0iTTUgMS41SDE1QzE2LjkzMyAxLjUgMTguNSAzLjA2NyAxOC41IDVWMTVDMTguNSAxNi45MzMgMTYuOTMzIDE4LjUgMTUgMTguNUg1QzMuMDY3IDE4LjUgMS41IDE2LjkzMyAxLjUgMTVWNUMxLjUgMy4wNjcgMy4wNjcgMS41IDUgMS41Wk02LjIgNS40SDguOFYxMi40SDEzLjhWMTQuN0g2LjJWNS40Wk0xMy4xIDUuMVExMy42NSA2LjM1IDE0LjkgNi45UTEzLjY1IDcuNDUgMTMuMSA4LjdRMTIuNTUgNy40NSAxMS4zIDYuOVExMi41NSA2LjM1IDEzLjEgNS4xWiIvPjwvc3ZnPg==';
	}
endif;

if ( ! function_exists( 'learnschool_add_welcome_page' ) ) :
	/**
	 * Register the LearnSchool top-level admin menu and onboarding submenus above Appearance.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_add_welcome_page(): void {
		$capability = 'edit_theme_options';
		$menu_slug  = 'learnschool';

		$hook_suffix = add_menu_page(
			esc_html__( 'LearnSchool', 'learnschool' ),
			esc_html__( 'LearnSchool', 'learnschool' ),
			$capability,
			$menu_slug,
			'learnschool_render_welcome_page',
			learnschool_get_admin_menu_icon(),
			59
		);

		add_submenu_page(
			$menu_slug,
			esc_html__( 'LearnSchool Setup', 'learnschool' ),
			esc_html__( 'Setup Guide', 'learnschool' ),
			$capability,
			$menu_slug,
			'learnschool_render_welcome_page'
		);

		add_submenu_page(
			$menu_slug,
			esc_html__( 'Site Editor', 'learnschool' ),
			esc_html__( 'Site Editor', 'learnschool' ),
			$capability,
			'site-editor.php'
		);

		add_submenu_page(
			$menu_slug,
			esc_html__( 'Global Styles', 'learnschool' ),
			esc_html__( 'Global Styles', 'learnschool' ),
			$capability,
			'site-editor.php?p=%2Fstyles'
		);

		if ( is_string( $hook_suffix ) && '' !== $hook_suffix ) {
			add_action( 'load-' . $hook_suffix, 'learnschool_register_admin_help' );
		}
	}
endif;
add_action( 'admin_menu', 'learnschool_add_welcome_page' );

if ( ! function_exists( 'learnschool_register_admin_help' ) ) :
	/**
	 * Registers native WordPress Contextual Help tabs on the LearnSchool Setup screen.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_register_admin_help(): void {
		$screen = get_current_screen();
		if ( ! $screen instanceof \WP_Screen ) {
			return;
		}

		$screen->add_help_tab(
			array(
				'id'      => 'learnschool-fse-workflow',
				'title'   => __( 'FSE Tips', 'learnschool' ),
				'content' =>
					'<p>' . esc_html__( 'LearnSchool renders a fallback mascot logo on the live site until you upload your own School Logo and Site Icon under Design > Identity.', 'learnschool' ) . '</p>' .
					'<p>' . esc_html__( 'Full-page starter layouts use the Page (No Title) template so WordPress does not output a second H1 heading above the hero. Creating pages from this guide applies that template automatically.', 'learnschool' ) . '</p>',
			)
		);

		$screen->set_help_sidebar(
			'<p><strong>' . esc_html__( 'WordPress Editors', 'learnschool' ) . '</strong></p>' .
			'<p><a href="' . esc_url( admin_url( 'site-editor.php' ) ) . '">' . esc_html__( 'Site Editor', 'learnschool' ) . '</a></p>' .
			'<p><a href="' . esc_url( admin_url( 'site-editor.php?p=%2Fstyles' ) ) . '">' . esc_html__( 'Global Styles', 'learnschool' ) . '</a></p>' .
			'<p><a href="' . esc_url( admin_url( 'options-reading.php' ) ) . '">' . esc_html__( 'Reading Settings', 'learnschool' ) . '</a></p>' .
			'<p><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'View Live Site', 'learnschool' ) . '</a></p>'
		);
	}
endif;

if ( ! function_exists( 'learnschool_admin_assets' ) ) :
	/**
	 * Enqueue styles exclusively on the top-level LearnSchool admin screen.
	 *
	 * @since 1.0.0
	 * @param string $hook_suffix Current admin screen hook suffix.
	 * @return void
	 */
	function learnschool_admin_assets( string $hook_suffix ): void {
		if ( 'toplevel_page_learnschool' !== $hook_suffix ) {
			return;
		}

		$theme_version = wp_get_theme()->get( 'Version' );
		$version       = defined( 'WP_DEBUG' ) && WP_DEBUG
			? (string) filemtime( get_theme_file_path( 'assets/styles/admin.css' ) )
			: ( is_string( $theme_version ) ? $theme_version : '1.0.0' );

		wp_enqueue_style(
			'learnschool-admin',
			get_theme_file_uri( 'assets/styles/admin.css' ),
			array(),
			$version
		);

		add_thickbox();
		wp_enqueue_script( 'plugin-install' );
		if ( function_exists( 'learnschool_enqueue_plugin_actions_script' ) ) {
			learnschool_enqueue_plugin_actions_script();
		}
	}
endif;
add_action( 'admin_enqueue_scripts', 'learnschool_admin_assets' );

if ( ! function_exists( 'learnschool_get_starter_page_definitions' ) ) :
	/**
	 * Returns the core school starter pages supported by quick setup creation.
	 *
	 * @since 1.0.0
	 * @return array<string, array{title: string, slug: string, pattern: string}> Starter page definitions keyed by slug.
	 */
	function learnschool_get_starter_page_definitions(): array {
		return array(
			'home'       => array(
				'title'   => __( 'Home', 'learnschool' ),
				'slug'    => 'home',
				'pattern' => 'learnschool/page-home',
			),
			'about'      => array(
				'title'   => __( 'About Us', 'learnschool' ),
				'slug'    => 'about',
				'pattern' => 'learnschool/page-about',
			),
			'programs'   => array(
				'title'   => __( 'Programs', 'learnschool' ),
				'slug'    => 'programs',
				'pattern' => 'learnschool/page-programs',
			),
			'admissions' => array(
				'title'   => __( 'Admissions', 'learnschool' ),
				'slug'    => 'admissions',
				'pattern' => 'learnschool/page-admissions',
			),
			'news'       => array(
				'title'   => __( 'News', 'learnschool' ),
				'slug'    => 'news',
				'pattern' => 'learnschool/page-news',
			),
			'contact'    => array(
				'title'   => __( 'Contact', 'learnschool' ),
				'slug'    => 'contact',
				'pattern' => 'learnschool/page-contact',
			),
		);
	}
endif;

if ( ! function_exists( 'learnschool_insert_starter_page' ) ) :
	/**
	 * Inserts a starter page for the given definition or returns the existing post ID.
	 *
	 * @since 1.0.0
	 * @param array{title: string, slug: string, pattern: string} $config      Starter page definition.
	 * @param string                                              $post_status Target post status ('draft' or 'publish').
	 * @return int Page ID on success, or 0 on failure.
	 */
	function learnschool_insert_starter_page( array $config, string $post_status = 'draft' ): int {
		$existing = get_posts(
			array(
				'post_type'              => 'page',
				'name'                   => $config['slug'],
				'post_parent'            => 0,
				'post_status'            => array( 'publish', 'draft', 'pending', 'future', 'private' ),
				'posts_per_page'         => 1,
				'orderby'                => 'ID',
				'order'                  => 'ASC',
				'no_found_rows'          => true,
				'update_post_meta_cache' => false,
				'update_post_term_cache' => false,
			)
		);

		if ( ! empty( $existing ) && $existing[0] instanceof \WP_Post ) {
			return (int) $existing[0]->ID;
		}

		$pattern = \WP_Block_Patterns_Registry::get_instance()->get_registered( $config['pattern'] );
		$content = is_array( $pattern ) && isset( $pattern['content'] ) && is_string( $pattern['content'] )
			? $pattern['content']
			: sprintf( '<!-- wp:pattern {"slug":"%s"} /-->', $config['pattern'] );

		$allowed_status = in_array( $post_status, array( 'publish', 'draft' ), true ) ? $post_status : 'draft';
		$post_id        = wp_insert_post(
			array(
				'post_type'    => 'page',
				'post_status'  => $allowed_status,
				'post_title'   => $config['title'],
				'post_name'    => $config['slug'],
				'post_content' => wp_slash( $content ),
				'meta_input'   => array(
					'_wp_page_template' => 'page-no-title',
				),
			),
			true
		);

		return ! is_wp_error( $post_id ) && $post_id > 0 ? (int) $post_id : 0;
	}
endif;

if ( ! function_exists( 'learnschool_set_admin_flash_notice' ) ) :
	/**
	 * Stores a one-time Setup Guide notice key for the current admin user.
	 *
	 * @since 1.0.0
	 * @param string $notice_key Notice key identifier.
	 * @return void
	 */
	function learnschool_set_admin_flash_notice( string $notice_key ): void {
		$user_id = get_current_user_id();
		if ( $user_id > 0 ) {
			set_transient( 'learnschool_admin_notice_' . $user_id, sanitize_key( $notice_key ), MINUTE_IN_SECONDS );
		}
	}
endif;

if ( ! function_exists( 'learnschool_consume_admin_flash_notice' ) ) :
	/**
	 * Reads and immediately clears the one-time Setup Guide notice key for the current user.
	 *
	 * @since 1.0.0
	 * @return string Notice key if set, otherwise an empty string.
	 */
	function learnschool_consume_admin_flash_notice(): string {
		$user_id = get_current_user_id();
		if ( $user_id <= 0 ) {
			return '';
		}

		$transient_key = 'learnschool_admin_notice_' . $user_id;
		$notice_key    = get_transient( $transient_key );
		if ( ! is_string( $notice_key ) || '' === $notice_key ) {
			return '';
		}

		delete_transient( $transient_key );

		return sanitize_key( $notice_key );
	}
endif;

if ( ! function_exists( 'learnschool_filter_removable_query_args' ) ) :
	/**
	 * Registers legacy Setup Guide notice query parameters for automatic browser URL cleanup.
	 *
	 * @since 1.0.0
	 * @param array<int, string> $removable_query_args Query arguments removed by WordPress admin.
	 * @return array<int, string> Filtered query arguments list.
	 */
	function learnschool_filter_removable_query_args( array $removable_query_args ): array {
		$removable_query_args[] = 'learnschool_notice';
		return $removable_query_args;
	}
endif;
add_filter( 'removable_query_args', 'learnschool_filter_removable_query_args' );

if ( ! function_exists( 'learnschool_handle_create_starter_page' ) ) :
	/**
	 * Creates a draft page pre-filled with a starter layout and Page (No Title) template,
	 * or redirects to the existing page editor if that slug already exists.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_handle_create_starter_page(): void {
		if ( ! current_user_can( 'edit_pages' ) ) {
			wp_die( esc_html__( 'Sorry, you are not allowed to create pages on this site.', 'learnschool' ), '', 403 );
		}

		$page_key    = isset( $_POST['starter_page'] ) ? sanitize_key( wp_unslash( (string) $_POST['starter_page'] ) ) : '';
		$definitions = learnschool_get_starter_page_definitions();

		if ( '' === $page_key || ! isset( $definitions[ $page_key ] ) ) {
			wp_safe_redirect( admin_url( 'admin.php?page=learnschool' ) );
			exit;
		}

		check_admin_referer( 'learnschool_create_starter_page_' . $page_key );

		$post_id = learnschool_insert_starter_page( $definitions[ $page_key ], 'draft' );
		if ( $post_id > 0 ) {
			$edit_link = get_edit_post_link( $post_id, 'raw' );
			if ( is_string( $edit_link ) && '' !== $edit_link ) {
				wp_safe_redirect( $edit_link );
				exit;
			}
		}

		wp_safe_redirect( admin_url( 'edit.php?post_type=page' ) );
		exit;
	}
endif;
add_action( 'admin_post_learnschool_create_starter_page', 'learnschool_handle_create_starter_page' );

if ( ! function_exists( 'learnschool_handle_setup_starter_pages' ) ) :
	/**
	 * Creates all missing starter school pages as published pages (and optionally assigns
	 * the static Home Reading setting) in one click.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_handle_setup_starter_pages(): void {
		if ( ! current_user_can( 'publish_pages' ) ) {
			wp_die( esc_html__( 'Sorry, you are not allowed to publish pages on this site.', 'learnschool' ), '', 403 );
		}

		check_admin_referer( 'learnschool_setup_starter_pages' );

		$definitions   = learnschool_get_starter_page_definitions();
		$before_status = learnschool_get_starter_pages_status();
		$created_ids   = array();
		$has_changes   = false;

		foreach ( $definitions as $key => $config ) {
			$post_id             = learnschool_insert_starter_page( $config, 'publish' );
			$created_ids[ $key ] = $post_id;
			if ( $post_id > 0 && 'missing' === ( $before_status[ $key ]['status'] ?? 'missing' ) ) {
				$has_changes = true;
			}
		}

		$set_reading = ! empty( $_POST['set_static_reading'] ) && current_user_can( 'manage_options' );
		if ( $set_reading && ! empty( $created_ids['home'] ) ) {
			$home_post = get_post( $created_ids['home'] );
			if ( $home_post instanceof \WP_Post && 'draft' === $home_post->post_status ) {
				wp_publish_post( $home_post->ID );
				$home_post   = get_post( $home_post->ID );
				$has_changes = true;
			}
			if ( $home_post instanceof \WP_Post && 'publish' === $home_post->post_status ) {
				if ( 'page' !== get_option( 'show_on_front' ) ) {
					update_option( 'show_on_front', 'page' );
					$has_changes = true;
				}
				if ( (int) get_option( 'page_on_front' ) !== (int) $home_post->ID ) {
					update_option( 'page_on_front', (int) $home_post->ID );
					$has_changes = true;
				}
			}
		}

		if ( $set_reading && ! empty( $created_ids['news'] ) && 'page' === get_option( 'show_on_front' ) ) {
			$news_post = get_post( $created_ids['news'] );
			if ( $news_post instanceof \WP_Post && 'draft' === $news_post->post_status ) {
				wp_publish_post( $news_post->ID );
				$news_post   = get_post( $news_post->ID );
				$has_changes = true;
			}
			if ( $news_post instanceof \WP_Post && 'publish' === $news_post->post_status ) {
				if ( (int) get_option( 'page_for_posts' ) !== (int) $news_post->ID ) {
					update_option( 'page_for_posts', (int) $news_post->ID );
					$has_changes = true;
				}
			}
		}

		if ( $has_changes ) {
			learnschool_set_admin_flash_notice( 'pages_created' );
		}
		wp_safe_redirect( admin_url( 'admin.php?page=learnschool' ) );
		exit;
	}
endif;
add_action( 'admin_post_learnschool_setup_starter_pages', 'learnschool_handle_setup_starter_pages' );

if ( ! function_exists( 'learnschool_handle_apply_style_preset' ) ) :
	/**
	 * Applies a bundled theme style variation (or resets to the default theme.json palette)
	 * directly into the theme's wp_global_styles post.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_handle_apply_style_preset(): void {
		if ( ! current_user_can( 'edit_theme_options' ) ) {
			wp_die( esc_html__( 'Sorry, you are not allowed to customize theme styles.', 'learnschool' ), '', 403 );
		}

		$preset_slug = isset( $_POST['style_preset'] ) ? sanitize_key( wp_unslash( (string) $_POST['style_preset'] ) ) : '';
		if ( '' === $preset_slug ) {
			wp_safe_redirect( admin_url( 'admin.php?page=learnschool' ) );
			exit;
		}

		check_admin_referer( 'learnschool_apply_style_preset_' . $preset_slug );

		$selected_variation = null;
		if ( 'default' !== $preset_slug ) {
			$variations = \WP_Theme_JSON_Resolver::get_style_variations( 'theme' );
			if ( is_array( $variations ) ) {
				foreach ( $variations as $variation ) {
					if ( is_array( $variation ) && ! empty( $variation['title'] ) && sanitize_title( (string) $variation['title'] ) === $preset_slug ) {
						$selected_variation = $variation;
						break;
					}
				}
			}
			if ( null === $selected_variation ) {
				wp_safe_redirect( admin_url( 'admin.php?page=learnschool' ) );
				exit;
			}
		}

		$user_cpt        = \WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( wp_get_theme(), false );
		$existing_config = array();
		if ( isset( $user_cpt['post_content'] ) && is_string( $user_cpt['post_content'] ) ) {
			$decoded = json_decode( $user_cpt['post_content'], true );
			if ( is_array( $decoded ) && ! empty( $decoded['isGlobalStylesUserThemeJSON'] ) ) {
				$existing_config = $decoded;
			}
		}

		// Resetting to default when no custom user Global Styles post exists yet is a no-op.
		if ( 'default' === $preset_slug && empty( $existing_config ) ) {
			wp_safe_redirect( admin_url( 'admin.php?page=learnschool' ) );
			exit;
		}

		$new_config = array(
			'version'                     => \WP_Theme_JSON::LATEST_SCHEMA,
			'isGlobalStylesUserThemeJSON' => true,
		);

		$custom_css = $existing_config['styles']['css'] ?? '';

		if ( is_array( $selected_variation ) ) {
			if ( ! empty( $selected_variation['settings'] ) && is_array( $selected_variation['settings'] ) ) {
				$new_config['settings'] = $selected_variation['settings'];
			}
			if ( ! empty( $selected_variation['styles'] ) && is_array( $selected_variation['styles'] ) ) {
				$new_config['styles'] = $selected_variation['styles'];
			}
		}

		if ( is_string( $custom_css ) && '' !== $custom_css ) {
			if ( ! isset( $new_config['styles'] ) || ! is_array( $new_config['styles'] ) ) {
				$new_config['styles'] = array();
			}
			$new_config['styles']['css'] = $custom_css;
		}

		$encoded          = wp_json_encode( $new_config );
		$existing_encoded = ! empty( $existing_config ) ? wp_json_encode( $existing_config ) : '';
		if ( ! is_string( $encoded ) || $encoded === $existing_encoded ) {
			wp_safe_redirect( admin_url( 'admin.php?page=learnschool' ) );
			exit;
		}

		if ( empty( $user_cpt['ID'] ) ) {
			$user_cpt = \WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( wp_get_theme(), true );
		}

		if ( ! empty( $user_cpt['ID'] ) ) {
			wp_update_post(
				array(
					'ID'           => (int) $user_cpt['ID'],
					'post_content' => wp_slash( $encoded ),
				)
			);
			wp_clean_theme_json_cache();
			learnschool_set_admin_flash_notice( 'style_applied' );
		}

		wp_safe_redirect( admin_url( 'admin.php?page=learnschool' ) );
		exit;
	}
endif;
add_action( 'admin_post_learnschool_apply_style_preset', 'learnschool_handle_apply_style_preset' );

if ( ! function_exists( 'learnschool_get_starter_pages_status' ) ) :
	/**
	 * Checks which core school starter pages already exist so quick-create chips link directly to edit.
	 *
	 * @since 1.0.0
	 * @return array<string, array{key: string, title: string, edit_url: string, status: string}> Starter page statuses.
	 */
	function learnschool_get_starter_pages_status(): array {
		$definitions = learnschool_get_starter_page_definitions();
		$slugs       = array_column( $definitions, 'slug' );
		$found_by    = array();

		$existing_pages = get_posts(
			array(
				'post_type'              => 'page',
				'post_name__in'          => $slugs,
				'post_parent'            => 0,
				'post_status'            => array( 'publish', 'draft', 'pending', 'future', 'private' ),
				'posts_per_page'         => count( $slugs ) + 5,
				'orderby'                => 'ID',
				'order'                  => 'ASC',
				'no_found_rows'          => true,
				'update_post_meta_cache' => false,
				'update_post_term_cache' => false,
			)
		);

		foreach ( $existing_pages as $page_post ) {
			if ( $page_post instanceof \WP_Post && ! isset( $found_by[ $page_post->post_name ] ) ) {
				$found_by[ $page_post->post_name ] = $page_post;
			}
		}

		$items = array();
		foreach ( $definitions as $key => $config ) {
			$match    = $found_by[ $config['slug'] ] ?? null;
			$edit_url = '';
			$status   = 'missing';

			if ( $match instanceof \WP_Post ) {
				$raw_link = get_edit_post_link( $match->ID, 'raw' );
				$edit_url = is_string( $raw_link ) ? $raw_link : '';
				$status   = 'publish' === $match->post_status ? 'published' : 'draft';
			}

			$items[ $key ] = array(
				'key'      => $key,
				'title'    => $config['title'],
				'edit_url' => $edit_url,
				'status'   => $status,
			);
		}

		return $items;
	}
endif;

if ( ! function_exists( 'learnschool_extract_palette_map' ) ) :
	/**
	 * Maps a theme.json color palette array by slug to hex color values.
	 *
	 * @since 1.0.0
	 * @param array<int, array<string, mixed>> $palette Raw palette entry list.
	 * @return array<string, string> Map of color slug to sanitized hex value.
	 */
	function learnschool_extract_palette_map( array $palette ): array {
		$map = array();

		foreach ( $palette as $entry ) {
			if ( ! is_array( $entry ) || empty( $entry['slug'] ) || empty( $entry['color'] ) ) {
				continue;
			}
			$slug  = sanitize_key( (string) $entry['slug'] );
			$color = sanitize_hex_color( (string) $entry['color'] );
			if ( '' !== $slug && is_string( $color ) && '' !== $color ) {
				$map[ $slug ] = strtolower( $color );
			}
		}

		return $map;
	}
endif;

if ( ! function_exists( 'learnschool_extract_palette_signature' ) ) :
	/**
	 * Builds a normalized signature string from a mapped palette for unambiguous matching.
	 *
	 * @since 1.0.0
	 * @param array<string, string> $map Mapped hex colors keyed by slug.
	 * @return string Delimited 4-swatch hex signature.
	 */
	function learnschool_extract_palette_signature( array $map ): string {
		return implode(
			'|',
			array(
				$map['base'] ?? '',
				$map['base-subtle'] ?? '',
				$map['primary'] ?? '',
				$map['secondary'] ?? '',
			)
		);
	}
endif;

if ( ! function_exists( 'learnschool_get_admin_style_presets' ) ) :
	/**
	 * Returns the theme's default palette and bundled style variations with active state detection.
	 *
	 * @since 1.0.0
	 * @return array<int, array{slug: string, title: string, is_active: bool, colors: array<int, string>}> Style preset swatches.
	 */
	function learnschool_get_admin_style_presets(): array {
		$active_palette_raw = wp_get_global_settings( array( 'color', 'palette', 'theme' ) );
		$active_map         = is_array( $active_palette_raw ) ? learnschool_extract_palette_map( $active_palette_raw ) : array();
		$active_signature   = learnschool_extract_palette_signature( $active_map );

		$presets = array();

		$theme_data      = \WP_Theme_JSON_Resolver::get_theme_data()->get_raw_data();
		$default_palette = $theme_data['settings']['color']['palette']['theme'] ?? array();
		$default_map     = is_array( $default_palette ) ? learnschool_extract_palette_map( $default_palette ) : array();

		if ( ! empty( $default_map ) ) {
			$default_signature = learnschool_extract_palette_signature( $default_map );
			$presets[]         = array(
				'slug'      => 'default',
				'title'     => __( 'Default', 'learnschool' ),
				'is_active' => '|||' !== $active_signature && $active_signature === $default_signature,
				'colors'    => array_values(
					array_filter(
						array(
							$default_map['base'] ?? '#ffffff',
							$default_map['base-subtle'] ?? '#f8f9fa',
							$default_map['primary'] ?? '#704fe6',
							$default_map['secondary'] ?? '#ffbe17',
						)
					)
				),
			);
		}

		$variations = \WP_Theme_JSON_Resolver::get_style_variations( 'theme' );
		if ( is_array( $variations ) ) {
			foreach ( $variations as $variation ) {
				if ( ! is_array( $variation ) ) {
					continue;
				}
				$title       = isset( $variation['title'] ) && is_string( $variation['title'] ) ? $variation['title'] : '';
				$var_palette = $variation['settings']['color']['palette']['theme'] ?? array();
				if ( '' === $title || ! is_array( $var_palette ) ) {
					continue;
				}
				$var_map = learnschool_extract_palette_map( $var_palette );
				if ( empty( $var_map ) ) {
					continue;
				}
				$var_signature = learnschool_extract_palette_signature( $var_map );
				$presets[]     = array(
					'slug'      => sanitize_title( $title ),
					'title'     => $title,
					'is_active' => '|||' !== $active_signature && $active_signature === $var_signature,
					'colors'    => array_values(
						array_filter(
							array(
								$var_map['base'] ?? '#ffffff',
								$var_map['base-subtle'] ?? '#f8f9fa',
								$var_map['primary'] ?? '#704fe6',
								$var_map['secondary'] ?? '#ffbe17',
							)
						)
					),
				);
			}
		}

		return $presets;
	}
endif;

if ( ! function_exists( 'learnschool_get_admin_setup_steps' ) ) :
	/**
	 * Builds the ordered 4-step FSE onboarding guide with honest status detection.
	 *
	 * @since 1.0.0
	 * @param array<int, array{slug: string, title: string, is_active: bool, colors: array<int, string>}> $presets       Style presets list.
	 * @param array<string, array{key: string, title: string, edit_url: string, status: string}>          $starter_pages Starter page statuses.
	 * @return array<int, array{
	 *     number: int,
	 *     title: string,
	 *     description: string,
	 *     status_label: string,
	 *     is_complete: bool,
	 *     primary_label: string,
	 *     primary_url: string,
	 *     secondary_links: array<int, array{label: string, url: string}>,
	 *     show_swatches: bool,
	 *     show_starter_pages: bool
	 * }> Ordered setup steps.
	 */
	function learnschool_get_admin_setup_steps( array $presets, array $starter_pages ): array {
		$stylesheet      = get_stylesheet();
		$site_editor_url = admin_url( 'site-editor.php' );

		$identity_url = version_compare( get_bloginfo( 'version' ), '7.0', '>=' )
			? add_query_arg( array( 'p' => '/identity' ), $site_editor_url )
			: add_query_arg(
				array(
					'p'      => '/wp_template_part/' . $stylesheet . '//header',
					'canvas' => 'edit',
				),
				$site_editor_url
			);

		$styles_url     = add_query_arg( array( 'p' => '/styles' ), $site_editor_url );
		$navigation_url = add_query_arg( array( 'p' => '/navigation' ), $site_editor_url );
		$header_url     = add_query_arg(
			array(
				'p'      => '/wp_template_part/' . $stylesheet . '//header',
				'canvas' => 'edit',
			),
			$site_editor_url
		);
		$footer_url     = add_query_arg(
			array(
				'p'      => '/wp_template_part/' . $stylesheet . '//footer',
				'canvas' => 'edit',
			),
			$site_editor_url
		);

		$custom_logo_set = has_custom_logo();
		$site_icon_set   = has_site_icon();

		if ( $custom_logo_set && $site_icon_set ) {
			$identity_status = __( 'Logo & icon set', 'learnschool' );
		} elseif ( $custom_logo_set ) {
			$identity_status = __( 'Logo set · Add site icon', 'learnschool' );
		} else {
			$identity_status = __( 'Using fallback mascot', 'learnschool' );
		}

		$user_styles        = \WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( wp_get_theme(), false );
		$has_saved_styles   = ! empty( $user_styles['ID'] );
		$active_preset_name = __( 'Custom Palette', 'learnschool' );
		foreach ( $presets as $preset ) {
			if ( ! empty( $preset['is_active'] ) ) {
				$active_preset_name = $preset['title'];
				break;
			}
		}

		$total_starters   = count( $starter_pages );
		$created_starters = 0;
		foreach ( $starter_pages as $starter ) {
			if ( 'missing' !== $starter['status'] ) {
				++$created_starters;
			}
		}

		$has_static_home = 'page' === get_option( 'show_on_front' ) && (int) get_option( 'page_on_front' ) > 0;
		$has_posts_page  = $has_static_home && (int) get_option( 'page_for_posts' ) > 0;
		$pages_status    = sprintf(
			/* translators: 1: Created starter pages count, 2: Total starter pages count. */
			__( '%1$d of %2$d created', 'learnschool' ),
			$created_starters,
			$total_starters
		);
		if ( $has_posts_page ) {
			$pages_status .= ' · ' . __( 'Static Home & News active', 'learnschool' );
		} elseif ( $has_static_home ) {
			$pages_status .= ' · ' . __( 'Static Home active', 'learnschool' );
		} else {
			$pages_status .= ' · ' . __( 'Front Page template active', 'learnschool' );
		}

		$nav_counts    = wp_count_posts( 'wp_navigation' );
		$has_nav_menus = isset( $nav_counts->publish ) && (int) $nav_counts->publish > 0;

		return array(
			array(
				'number'             => 1,
				'title'              => __( 'Site Identity, Logo & Icon', 'learnschool' ),
				'description'        => __( 'Set your school name, tagline, custom logo, and 512×512 browser icon.', 'learnschool' ),
				'status_label'       => $identity_status,
				'is_complete'        => $custom_logo_set && $site_icon_set,
				'primary_label'      => __( 'Edit Identity', 'learnschool' ),
				'primary_url'        => $identity_url,
				'secondary_links'    => array(),
				'show_swatches'      => false,
				'show_starter_pages' => false,
			),
			array(
				'number'             => 2,
				'title'              => __( 'Colors & Typography', 'learnschool' ),
				'description'        => __( 'Click any palette below to apply it immediately across every page and pattern.', 'learnschool' ),
				'status_label'       => $active_preset_name,
				'is_complete'        => $has_saved_styles,
				'primary_label'      => __( 'Customize in Global Styles', 'learnschool' ),
				'primary_url'        => $styles_url,
				'secondary_links'    => array(),
				'show_swatches'      => ! empty( $presets ),
				'show_starter_pages' => false,
			),
			array(
				'number'             => 3,
				'title'              => __( 'Create Starter School Pages', 'learnschool' ),
				'description'        => __( 'Your homepage already runs via Front Page template. Create Page (No Title) layouts below when you want editable menu pages.', 'learnschool' ),
				'status_label'       => $pages_status,
				'is_complete'        => $created_starters >= $total_starters && $total_starters > 0,
				'primary_label'      => __( 'All Pages', 'learnschool' ),
				'primary_url'        => admin_url( 'edit.php?post_type=page' ),
				'secondary_links'    => array(),
				'show_swatches'      => false,
				'show_starter_pages' => true,
			),
			array(
				'number'             => 4,
				'title'              => __( 'Navigation, Header CTA & Footer', 'learnschool' ),
				'description'        => __( 'Arrange menu links, update the Enroll Now button, and customize footer campus details.', 'learnschool' ),
				'status_label'       => $has_nav_menus ? __( 'Menu saved', 'learnschool' ) : __( 'Using page list', 'learnschool' ),
				'is_complete'        => $has_nav_menus,
				'primary_label'      => __( 'Manage Navigation', 'learnschool' ),
				'primary_url'        => $navigation_url,
				'secondary_links'    => array(
					array(
						'label' => __( 'Edit Header', 'learnschool' ),
						'url'   => $header_url,
					),
					array(
						'label' => __( 'Edit Footer', 'learnschool' ),
						'url'   => $footer_url,
					),
				),
				'show_swatches'      => false,
				'show_starter_pages' => false,
			),
		);
	}
endif;

if ( ! function_exists( 'learnschool_render_admin_companion_panel' ) ) :
	/**
	 * Renders the optional companion WordPress.org plugin panel in the side rail.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_render_admin_companion_panel(): void {
		$recommended_plugins = function_exists( 'learnschool_get_recommended_plugins' )
			? learnschool_get_recommended_plugins()
			: array();

		if ( empty( $recommended_plugins ) || ! function_exists( 'learnschool_get_recommended_plugin_action' ) ) {
			return;
		}
		?>
		<section class="learnschool-admin-panel" aria-labelledby="learnschool-companion-heading">
			<div class="learnschool-admin-panel__header">
				<div>
					<h2 id="learnschool-companion-heading"><?php echo esc_html__( 'Recommended Companion Plugin', 'learnschool' ); ?></h2>
					<p><?php echo esc_html__( 'Optional admissions, classes, and attendance features. LearnSchool works fully without it.', 'learnschool' ); ?></p>
				</div>
			</div>
			<div class="learnschool-admin-plugin-list">
				<?php
				foreach ( $recommended_plugins as $learnschool_plugin ) :
					if ( empty( $learnschool_plugin['slug'] ) || empty( $learnschool_plugin['file'] ) || empty( $learnschool_plugin['name'] ) ) {
						continue;
					}
					$learnschool_action        = learnschool_get_recommended_plugin_action(
						(string) $learnschool_plugin['slug'],
						(string) $learnschool_plugin['file']
					);
					$learnschool_status_class  = 'learnschool-admin-status--' . sanitize_html_class( $learnschool_action['status'] );
					$learnschool_details_class = $learnschool_action['is_thickbox']
						? 'button button-secondary button-compact thickbox open-plugin-details-modal'
						: 'button button-secondary button-compact';
					?>
				<div class="learnschool-admin-plugin-card" data-active-status="<?php echo esc_attr__( 'Active', 'learnschool' ); ?>">
					<div class="learnschool-admin-plugin-card__top">
						<div class="learnschool-admin-plugin-card__icon" aria-hidden="true">
							<?php
							if ( function_exists( 'learnschool_render_companion_plugin_icon' ) ) {
								learnschool_render_companion_plugin_icon();
							}
							?>
						</div>
						<div class="learnschool-admin-plugin-card__body">
							<div class="learnschool-admin-plugin-card__title">
								<h3><?php echo esc_html( (string) $learnschool_plugin['name'] ); ?></h3>
								<span class="learnschool-admin-status <?php echo esc_attr( $learnschool_status_class ); ?>">
									<?php echo esc_html( $learnschool_action['status_label'] ); ?>
								</span>
							</div>
							<?php if ( ! empty( $learnschool_plugin['description'] ) ) : ?>
							<p><?php echo esc_html( (string) $learnschool_plugin['description'] ); ?></p>
							<?php endif; ?>
							<?php if ( ! empty( $learnschool_action['file_mods_blocked'] ) ) : ?>
							<p class="learnschool-admin-plugin-card__note">
								<?php echo esc_html__( 'Automatic plugin installation is disabled in this environment. Install manually or ask your site administrator.', 'learnschool' ); ?>
							</p>
							<?php endif; ?>
							<p class="learnschool-plugin-error" role="alert" hidden></p>
						</div>
					</div>
					<div class="learnschool-admin-plugin-card__actions">
						<?php if ( '' !== $learnschool_action['primary_url'] ) : ?>
						<a
							class="button <?php echo 'active' === $learnschool_action['status'] ? 'button-secondary' : 'button-primary'; ?> button-compact learnschool-plugin-action"
							href="<?php echo esc_url( $learnschool_action['primary_url'] ); ?>"
							<?php if ( 'active' !== $learnschool_action['status'] ) : ?>
							data-plugin-slug="<?php echo esc_attr( $learnschool_action['slug'] ); ?>"
							data-plugin-basename="<?php echo esc_attr( $learnschool_action['basename'] ); ?>"
							data-plugin-state="<?php echo esc_attr( $learnschool_action['status'] ); ?>"
							data-loading-label="<?php echo esc_attr( $learnschool_action['loading_label'] ); ?>"
							data-active-label="<?php echo esc_attr__( 'Manage Plugins', 'learnschool' ); ?>"
							data-active-url="<?php echo esc_url( self_admin_url( 'plugins.php' ) ); ?>"
							data-plugins-url="<?php echo esc_url( self_admin_url( 'plugins.php' ) ); ?>"
							<?php endif; ?>
						>
							<?php echo esc_html( $learnschool_action['primary_label'] ); ?>
						</a>
						<?php endif; ?>
						<a
							class="<?php echo esc_attr( $learnschool_details_class ); ?>"
							href="<?php echo esc_url( $learnschool_action['details_url'] ); ?>"
							<?php if ( ! $learnschool_action['is_thickbox'] ) : ?>
							target="_blank"
							rel="noopener noreferrer"
							<?php endif; ?>
						>
							<?php echo esc_html( $learnschool_action['details_label'] ); ?>
						</a>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</section>
		<?php
	}
endif;

if ( ! function_exists( 'learnschool_render_admin_settings_panel' ) ) :
	/**
	 * Renders quick shortcuts to core WordPress settings outside the Site Editor.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_render_admin_settings_panel(): void {
		$shortcuts = array(
			array(
				'label' => __( 'Reading Settings', 'learnschool' ),
				'hint'  => __( 'Static homepage & news page', 'learnschool' ),
				'url'   => admin_url( 'options-reading.php' ),
			),
			array(
				'label' => __( 'Permalinks', 'learnschool' ),
				'hint'  => __( 'Clean post and page URLs', 'learnschool' ),
				'url'   => admin_url( 'options-permalink.php' ),
			),
			array(
				'label' => __( 'General Settings', 'learnschool' ),
				'hint'  => __( 'Timezone, date & language', 'learnschool' ),
				'url'   => admin_url( 'options-general.php' ),
			),
			array(
				'label' => __( 'Site Health', 'learnschool' ),
				'hint'  => __( 'Performance & security checks', 'learnschool' ),
				'url'   => admin_url( 'site-health.php' ),
			),
		);
		?>
		<section class="learnschool-admin-panel" aria-labelledby="learnschool-wp-settings-heading">
			<div class="learnschool-admin-panel__header">
				<h2 id="learnschool-wp-settings-heading"><?php echo esc_html__( 'WordPress Launch Settings', 'learnschool' ); ?></h2>
			</div>
			<ul class="learnschool-admin-links">
				<?php foreach ( $shortcuts as $shortcut ) : ?>
				<li>
					<a href="<?php echo esc_url( $shortcut['url'] ); ?>">
						<span><?php echo esc_html( $shortcut['label'] ); ?></span>
						<small><?php echo esc_html( $shortcut['hint'] ); ?></small>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</section>
		<?php
	}
endif;

if ( ! function_exists( 'learnschool_render_welcome_page' ) ) :
	/**
	 * Render the LearnSchool Setup Guide admin screen.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_render_welcome_page(): void {
		$theme         = wp_get_theme();
		$theme_version = $theme->get( 'Version' );
		$version_label = is_string( $theme_version ) && '' !== $theme_version ? $theme_version : '1.0.0';

		$site_editor_url  = admin_url( 'site-editor.php' );
		$presets          = learnschool_get_admin_style_presets();
		$starter_pages    = learnschool_get_starter_pages_status();
		$steps            = learnschool_get_admin_setup_steps( $presets, $starter_pages );
		$can_edit_pages   = current_user_can( 'edit_pages' );
		$can_publish      = current_user_can( 'publish_pages' );
		$can_edit_styles  = current_user_can( 'edit_theme_options' );
		$missing_starters = 0;

		foreach ( $starter_pages as $starter ) {
			if ( 'missing' === $starter['status'] ) {
				++$missing_starters;
			}
		}

		$completed_count = 0;
		foreach ( $steps as $step ) {
			if ( ! empty( $step['is_complete'] ) ) {
				++$completed_count;
			}
		}

		$notice_key     = learnschool_consume_admin_flash_notice();
		$notice_message = '';
		if ( 'style_applied' === $notice_key ) {
			$notice_message = __( 'Palette applied to Global Styles.', 'learnschool' );
		} elseif ( 'pages_created' === $notice_key ) {
			$notice_message = __( 'Starter school pages are ready.', 'learnschool' );
		}
		?>
		<div class="learnschool-admin-page">
			<div class="learnschool-admin-header">
				<div class="learnschool-admin-header__inner">
					<div class="learnschool-admin-header__top">
						<div class="learnschool-admin-header__identity">
							<svg class="learnschool-admin-header__logo" width="44" height="44" viewBox="1.5 1.5 17 17" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
								<path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M5 1.5H15C16.933 1.5 18.5 3.067 18.5 5V15C18.5 16.933 16.933 18.5 15 18.5H5C3.067 18.5 1.5 16.933 1.5 15V5C1.5 3.067 3.067 1.5 5 1.5ZM6.2 5.4H8.8V12.4H13.8V14.7H6.2V5.4ZM13.1 5.1Q13.65 6.35 14.9 6.9Q13.65 7.45 13.1 8.7Q12.55 7.45 11.3 6.9Q12.55 6.35 13.1 5.1Z"/>
							</svg>
							<div>
								<h1><?php echo esc_html__( 'Welcome to LearnSchool', 'learnschool' ); ?></h1>
								<p class="learnschool-admin-header__subtitle">
									<?php
									printf(
										/* translators: %s: Current theme version number. */
										esc_html__( 'Version %s · Full Site Editing block theme for schools and academies.', 'learnschool' ),
										esc_html( $version_label )
									);
									?>
								</p>
							</div>
						</div>
						<div class="learnschool-admin-header__actions">
							<a class="button button-primary" href="<?php echo esc_url( $site_editor_url ); ?>">
								<?php echo esc_html__( 'Open Site Editor', 'learnschool' ); ?>
							</a>
							<a class="button button-secondary" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<?php echo esc_html__( 'View Live Site', 'learnschool' ); ?>
							</a>
						</div>
					</div>
				</div>
			</div>

			<hr class="wp-header-end">

			<div class="wrap learnschool-admin-wrap">
				<?php if ( '' !== $notice_message ) : ?>
				<div class="notice notice-success is-dismissible inline learnschool-admin-feedback">
					<p><?php echo esc_html( $notice_message ); ?></p>
				</div>
				<?php endif; ?>
				<div class="learnschool-admin-workspace">
					<div class="learnschool-admin-main">
						<section class="learnschool-admin-panel" aria-labelledby="learnschool-guide-heading">
							<div class="learnschool-admin-panel__header">
								<div>
									<h2 id="learnschool-guide-heading"><?php echo esc_html__( 'Site Setup Guide', 'learnschool' ); ?></h2>
									<p><?php echo esc_html__( 'Complete these steps in order using WordPress Full Site Editing.', 'learnschool' ); ?></p>
								</div>
								<span class="learnschool-admin-counter">
									<?php
									printf(
										/* translators: 1: Completed setup steps count, 2: Total setup steps count. */
										esc_html__( '%1$d of %2$d ready', 'learnschool' ),
										(int) $completed_count,
										count( $steps )
									);
									?>
								</span>
							</div>

							<ol class="learnschool-admin-steps">
								<?php foreach ( $steps as $step ) : ?>
								<li class="learnschool-admin-step-item <?php echo $step['is_complete'] ? 'is-complete' : ''; ?>">
									<span class="learnschool-admin-step-item__marker" aria-hidden="true">
										<?php
										if ( $step['is_complete'] ) {
											echo '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>';
										} else {
											echo esc_html( (string) $step['number'] );
										}
										?>
									</span>
									<div class="learnschool-admin-step-item__body">
										<div class="learnschool-admin-step-item__head">
											<h3><?php echo esc_html( $step['title'] ); ?></h3>
											<span class="learnschool-admin-pill <?php echo $step['is_complete'] ? 'learnschool-admin-pill--success' : ''; ?>">
												<?php echo esc_html( $step['status_label'] ); ?>
											</span>
										</div>

										<p class="learnschool-admin-step-item__desc">
											<?php echo esc_html( $step['description'] ); ?>
										</p>

										<?php if ( ! empty( $step['show_swatches'] ) && ! empty( $presets ) ) : ?>
										<div class="learnschool-admin-swatches">
											<?php
											foreach ( $presets as $preset ) :
												$is_interactive = $can_edit_styles && ! $preset['is_active'];
												$swatch_class   = 'learnschool-admin-swatch' . ( $preset['is_active'] ? ' is-active' : '' );
												if ( $is_interactive ) :
													?>
											<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="learnschool-admin-swatch-form">
												<input type="hidden" name="action" value="learnschool_apply_style_preset" />
												<input type="hidden" name="style_preset" value="<?php echo esc_attr( $preset['slug'] ); ?>" />
													<?php wp_nonce_field( 'learnschool_apply_style_preset_' . $preset['slug'] ); ?>
												<button type="submit" class="<?php echo esc_attr( $swatch_class ); ?>" aria-pressed="false">
												<?php else : ?>
											<button
												type="button"
												class="<?php echo esc_attr( $swatch_class ); ?>"
												disabled
												aria-pressed="<?php echo $preset['is_active'] ? 'true' : 'false'; ?>"
											>
												<?php endif; ?>
													<span class="learnschool-admin-swatch__chips" aria-hidden="true">
														<?php foreach ( $preset['colors'] as $hex ) : ?>
														<span class="learnschool-admin-swatch__chip" style="background-color: <?php echo esc_attr( $hex ); ?>;"></span>
														<?php endforeach; ?>
													</span>
													<span class="learnschool-admin-swatch__meta">
														<span class="learnschool-admin-swatch__name"><?php echo esc_html( $preset['title'] ); ?></span>
														<?php if ( $preset['is_active'] ) : ?>
														<span class="learnschool-admin-swatch__active"><?php echo esc_html__( 'Active', 'learnschool' ); ?></span>
														<?php endif; ?>
													</span>
												</button>
												<?php if ( $is_interactive ) : ?>
											</form>
											<?php endif; ?>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>

										<?php if ( ! empty( $step['show_starter_pages'] ) && $can_edit_pages ) : ?>
										<div class="learnschool-admin-starter-pages">
											<?php foreach ( $starter_pages as $starter ) : ?>
												<?php if ( 'missing' !== $starter['status'] && '' !== $starter['edit_url'] ) : ?>
												<a
													class="learnschool-admin-starter-page is-created"
													href="<?php echo esc_url( $starter['edit_url'] ); ?>"
												>
													<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
													<span><?php echo esc_html( $starter['title'] ); ?></span>
													<small><?php echo esc_html( 'draft' === $starter['status'] ? __( 'Draft', 'learnschool' ) : __( 'Edit', 'learnschool' ) ); ?></small>
												</a>
												<?php else : ?>
												<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="learnschool-admin-starter-form">
													<input type="hidden" name="action" value="learnschool_create_starter_page" />
													<input type="hidden" name="starter_page" value="<?php echo esc_attr( $starter['key'] ); ?>" />
													<?php wp_nonce_field( 'learnschool_create_starter_page_' . $starter['key'] ); ?>
													<button type="submit" class="learnschool-admin-starter-page">
														<span aria-hidden="true">+</span>
														<span><?php echo esc_html( $starter['title'] ); ?></span>
													</button>
												</form>
												<?php endif; ?>
											<?php endforeach; ?>
										</div>
											<?php $needs_reading_setup = current_user_can( 'manage_options' ) && ( 'page' !== get_option( 'show_on_front' ) || (int) get_option( 'page_for_posts' ) <= 0 ); ?>
											<?php if ( $can_publish && ( $missing_starters > 0 || $needs_reading_setup ) ) : ?>
										<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="learnschool-admin-starter-bulk">
											<input type="hidden" name="action" value="learnschool_setup_starter_pages" />
												<?php wp_nonce_field( 'learnschool_setup_starter_pages' ); ?>
												<?php if ( 0 === $missing_starters ) : ?>
											<input type="hidden" name="set_static_reading" value="1" />
											<button type="submit" class="button button-primary button-compact">
													<?php echo esc_html__( 'Set Static Home & News Pages', 'learnschool' ); ?>
											</button>
											<?php else : ?>
											<button type="submit" class="button button-primary button-compact">
												<?php echo esc_html__( 'Create All Missing Pages', 'learnschool' ); ?>
											</button>
												<?php if ( $needs_reading_setup ) : ?>
												<label class="learnschool-admin-checkbox">
													<input type="checkbox" name="set_static_reading" value="1" />
													<span><?php echo esc_html__( 'Set Static Home & News Pages', 'learnschool' ); ?></span>
												</label>
												<?php endif; ?>
											<?php endif; ?>
										</form>
										<?php endif; ?>
										<?php endif; ?>

										<div class="learnschool-admin-step-item__actions">
											<a class="button button-secondary button-compact" href="<?php echo esc_url( $step['primary_url'] ); ?>">
												<?php echo esc_html( $step['primary_label'] ); ?>
											</a>
											<?php foreach ( $step['secondary_links'] as $link ) : ?>
											<a class="learnschool-admin-text-link" href="<?php echo esc_url( $link['url'] ); ?>">
												<?php echo esc_html( $link['label'] ); ?>
											</a>
											<?php endforeach; ?>
										</div>
									</div>
								</li>
								<?php endforeach; ?>
							</ol>
						</section>
					</div>

					<aside class="learnschool-admin-rail" aria-label="<?php echo esc_attr__( 'Companion plugin and WordPress settings', 'learnschool' ); ?>">
						<?php
						learnschool_render_admin_companion_panel();
						learnschool_render_admin_settings_panel();
						?>
					</aside>
				</div>
			</div>
		</div>
		<?php
	}
endif;
