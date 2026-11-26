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
	 * Returns the core school starter pages supported by one-click draft creation.
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
			'contact'    => array(
				'title'   => __( 'Contact', 'learnschool' ),
				'slug'    => 'contact',
				'pattern' => 'learnschool/page-contact',
			),
		);
	}
endif;

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

		$config   = $definitions[ $page_key ];
		$existing = get_posts(
			array(
				'post_type'              => 'page',
				'name'                   => $config['slug'],
				'post_status'            => array( 'publish', 'draft', 'pending', 'future', 'private' ),
				'posts_per_page'         => 1,
				'no_found_rows'          => true,
				'update_post_meta_cache' => false,
				'update_post_term_cache' => false,
			)
		);

		if ( ! empty( $existing ) && $existing[0] instanceof \WP_Post ) {
			$edit_link = get_edit_post_link( $existing[0]->ID, 'raw' );
			if ( is_string( $edit_link ) && '' !== $edit_link ) {
				wp_safe_redirect( $edit_link );
				exit;
			}
		}

		$pattern = \WP_Block_Patterns_Registry::get_instance()->get_registered( $config['pattern'] );
		$content = is_array( $pattern ) && isset( $pattern['content'] ) && is_string( $pattern['content'] )
			? $pattern['content']
			: sprintf( '<!-- wp:pattern {"slug":"%s"} /-->', $config['pattern'] );

		$post_id = wp_insert_post(
			array(
				'post_type'    => 'page',
				'post_status'  => 'draft',
				'post_title'   => $config['title'],
				'post_name'    => $config['slug'],
				'post_content' => wp_slash( $content ),
				'meta_input'   => array(
					'_wp_page_template' => 'page-no-title',
				),
			),
			true
		);

		if ( ! is_wp_error( $post_id ) && $post_id > 0 ) {
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
				'post_status'            => array( 'publish', 'draft', 'pending', 'future', 'private' ),
				'posts_per_page'         => count( $slugs ) + 5,
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

if ( ! function_exists( 'learnschool_get_admin_style_presets' ) ) :
	/**
	 * Returns the theme's default palette and bundled style variations with active state detection.
	 *
	 * @since 1.0.0
	 * @return array<int, array{title: string, is_active: bool, colors: array<int, string>}> Style preset swatches.
	 */
	function learnschool_get_admin_style_presets(): array {
		$active_palette_raw = wp_get_global_settings( array( 'color', 'palette', 'theme' ) );
		$active_map         = is_array( $active_palette_raw ) ? learnschool_extract_palette_map( $active_palette_raw ) : array();
		$active_primary     = $active_map['primary'] ?? '';

		$presets = array();

		$theme_data      = \WP_Theme_JSON_Resolver::get_theme_data()->get_raw_data();
		$default_palette = $theme_data['settings']['color']['palette']['theme'] ?? array();
		$default_map     = is_array( $default_palette ) ? learnschool_extract_palette_map( $default_palette ) : array();

		if ( ! empty( $default_map ) ) {
			$default_primary = $default_map['primary'] ?? '';
			$presets[]       = array(
				'title'     => __( 'Default', 'learnschool' ),
				'is_active' => '' !== $active_primary && $active_primary === $default_primary,
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
				$var_primary = $var_map['primary'] ?? '';
				$presets[]   = array(
					'title'     => $title,
					'is_active' => '' !== $active_primary && $active_primary === $var_primary,
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
	 * Builds the ordered 4-step FSE onboarding guide with concise copy and live status.
	 *
	 * @since 1.0.0
	 * @param array<int, array{title: string, is_active: bool, colors: array<int, string>}> $presets Style presets list.
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
	function learnschool_get_admin_setup_steps( array $presets ): array {
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
		$new_page_url   = admin_url( 'post-new.php?post_type=page' );

		$custom_logo_set = has_custom_logo();
		$site_icon_set   = has_site_icon();

		if ( $custom_logo_set && $site_icon_set ) {
			$identity_status = __( 'Logo & icon set', 'learnschool' );
		} elseif ( $custom_logo_set ) {
			$identity_status = __( 'Logo set · Add site icon', 'learnschool' );
		} else {
			$identity_status = __( 'Using fallback mascot', 'learnschool' );
		}

		$active_preset_name = __( 'Custom Palette', 'learnschool' );
		foreach ( $presets as $preset ) {
			if ( ! empty( $preset['is_active'] ) ) {
				$active_preset_name = $preset['title'];
				break;
			}
		}

		$page_counts     = wp_count_posts( 'page' );
		$published_pages = isset( $page_counts->publish ) ? (int) $page_counts->publish : 0;
		$has_static_home = 'page' === get_option( 'show_on_front' ) && (int) get_option( 'page_on_front' ) > 0;

		if ( $published_pages > 0 ) {
			$pages_status = sprintf(
				/* translators: %d: Number of published WordPress pages. */
				_n( '%d published', '%d published', $published_pages, 'learnschool' ),
				$published_pages
			);
			$pages_status .= $has_static_home
				? ' · ' . __( 'Static Home', 'learnschool' )
				: ' · ' . __( 'Front Page template', 'learnschool' );
		} else {
			$pages_status = __( 'No published pages', 'learnschool' );
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
				'secondary_links'    => array(
					array(
						'label' => __( 'General Settings', 'learnschool' ),
						'url'   => admin_url( 'options-general.php' ),
					),
				),
				'show_swatches'      => false,
				'show_starter_pages' => false,
			),
			array(
				'number'             => 2,
				'title'              => __( 'Colors & Typography', 'learnschool' ),
				'description'        => __( 'Pick a bundled palette in Global Styles so every page and pattern inherits your colors.', 'learnschool' ),
				'status_label'       => $active_preset_name,
				'is_complete'        => true,
				'primary_label'      => __( 'Open Global Styles', 'learnschool' ),
				'primary_url'        => $styles_url,
				'secondary_links'    => array(),
				'show_swatches'      => ! empty( $presets ),
				'show_starter_pages' => false,
			),
			array(
				'number'             => 3,
				'title'              => __( 'Create Starter School Pages', 'learnschool' ),
				'description'        => __( 'Generate ready-to-edit draft pages with Page (No Title) pre-applied so headings never duplicate.', 'learnschool' ),
				'status_label'       => $pages_status,
				'is_complete'        => $published_pages > 0,
				'primary_label'      => __( 'New Blank Page', 'learnschool' ),
				'primary_url'        => $new_page_url,
				'secondary_links'    => array(
					array(
						'label' => __( 'Reading Settings', 'learnschool' ),
						'url'   => admin_url( 'options-reading.php' ),
					),
					array(
						'label' => __( 'All Pages', 'learnschool' ),
						'url'   => admin_url( 'edit.php?post_type=page' ),
					),
				),
				'show_swatches'      => false,
				'show_starter_pages' => true,
			),
			array(
				'number'             => 4,
				'title'              => __( 'Navigation, Header CTA & Footer', 'learnschool' ),
				'description'        => __( 'Link your published pages in the menu, update the Enroll Now button, and set footer campus info.', 'learnschool' ),
				'status_label'       => $has_nav_menus ? __( 'Menu saved', 'learnschool' ) : __( 'Default links', 'learnschool' ),
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
				'hint'  => __( 'Static homepage & blog page', 'learnschool' ),
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

		$site_editor_url = admin_url( 'site-editor.php' );
		$styles_url      = add_query_arg( array( 'p' => '/styles' ), $site_editor_url );
		$presets         = learnschool_get_admin_style_presets();
		$steps           = learnschool_get_admin_setup_steps( $presets );
		$starter_pages   = learnschool_get_starter_pages_status();
		$can_edit_pages  = current_user_can( 'edit_pages' );

		$completed_count = 0;
		foreach ( $steps as $step ) {
			if ( ! empty( $step['is_complete'] ) ) {
				++$completed_count;
			}
		}
		?>
		<div class="learnschool-admin-page">
			<div class="learnschool-admin-header">
				<div class="learnschool-admin-header__inner">
					<div class="learnschool-admin-header__top">
						<div class="learnschool-admin-header__identity">
							<img
								class="learnschool-admin-header__logo"
								src="<?php echo esc_url( get_theme_file_uri( 'assets/images/site-logo.png' ) ); ?>"
								alt="<?php echo esc_attr__( 'LearnSchool logo', 'learnschool' ); ?>"
								width="44"
								height="44"
							/>
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
											<?php foreach ( $presets as $preset ) : ?>
											<a
												class="learnschool-admin-swatch <?php echo $preset['is_active'] ? 'is-active' : ''; ?>"
												href="<?php echo esc_url( $styles_url ); ?>"
											>
												<div class="learnschool-admin-swatch__chips" aria-hidden="true">
													<?php foreach ( $preset['colors'] as $hex ) : ?>
													<span class="learnschool-admin-swatch__chip" style="background-color: <?php echo esc_attr( $hex ); ?>;"></span>
													<?php endforeach; ?>
												</div>
												<div class="learnschool-admin-swatch__meta">
													<span class="learnschool-admin-swatch__name"><?php echo esc_html( $preset['title'] ); ?></span>
													<?php if ( $preset['is_active'] ) : ?>
													<span class="learnschool-admin-swatch__active"><?php echo esc_html__( 'Active', 'learnschool' ); ?></span>
													<?php endif; ?>
												</div>
											</a>
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
