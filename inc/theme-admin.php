<?php
/**
 * LearnSchool Onboarding & Setup Guide under Appearance.
 *
 * Provides a pure, read-only WordPress Full Site Editing onboarding guide
 * with direct links to the Site Editor, Global Styles, bundled starter page
 * layouts, and official theme support—without adding custom theme options,
 * database writes, or plugin promotions.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'learnschool_add_welcome_page' ) ) :
	/**
	 * Registers the LearnSchool Setup Guide as a sub-page under Appearance.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_add_welcome_page(): void {
		$hook_suffix = add_theme_page(
			__( 'LearnSchool Setup', 'learnschool' ),
			__( 'LearnSchool', 'learnschool' ),
			'edit_theme_options',
			'learnschool',
			'learnschool_render_welcome_page'
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
					'<p>' . esc_html__( 'LearnSchool displays a fallback mascot logo on the front end until you upload your own School Logo and Site Icon in WordPress.', 'learnschool' ) . '</p>' .
					'<p>' . esc_html__( 'When adding a new page, pick a LearnSchool layout from the pattern modal and assign the Page (No Title) template in the Page sidebar so WordPress does not output a second H1 heading above the hero.', 'learnschool' ) . '</p>',
			)
		);

		$styles_url = learnschool_get_site_editor_url( '/styles', array( 'path' => '/wp_global_styles' ) );

		$screen->set_help_sidebar(
			'<p><strong>' . esc_html__( 'Quick Links', 'learnschool' ) . '</strong></p>' .
			'<p><a href="' . esc_url( admin_url( 'site-editor.php' ) ) . '">' . esc_html__( 'Site Editor', 'learnschool' ) . '</a></p>' .
			'<p><a href="' . esc_url( $styles_url ) . '">' . esc_html__( 'Global Styles', 'learnschool' ) . '</a></p>' .
			'<p><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'View Live Site', 'learnschool' ) . '</a></p>' .
			'<p><a href="' . esc_url( 'https://codeclove.com/contact-us/' ) . '" target="_blank" rel="noopener noreferrer">' . esc_html__( 'Theme Support', 'learnschool' ) . '</a></p>'
		);
	}
endif;

if ( ! function_exists( 'learnschool_get_site_editor_url' ) ) :
	/**
	 * Builds a version-compatible Site Editor deep link across WordPress 6.7 and 6.8+.
	 *
	 * @since 1.0.0
	 * @param string               $p_route      Route parameter introduced in WordPress 6.8 (e.g. '/styles').
	 * @param array<string, mixed> $legacy_query Query args used by WordPress 6.7 Site Editor.
	 * @return string Fully formed Site Editor admin URL.
	 */
	function learnschool_get_site_editor_url( string $p_route, array $legacy_query ): string {
		$site_editor_url = admin_url( 'site-editor.php' );

		if ( version_compare( get_bloginfo( 'version' ), '6.8', '>=' ) ) {
			return add_query_arg( array( 'p' => $p_route ), $site_editor_url );
		}

		return add_query_arg( $legacy_query, $site_editor_url );
	}
endif;

if ( ! function_exists( 'learnschool_admin_assets' ) ) :
	/**
	 * Enqueue styles exclusively on the LearnSchool Setup screen under Appearance.
	 *
	 * @since 1.0.0
	 * @param string $hook_suffix Current admin screen hook suffix.
	 * @return void
	 */
	function learnschool_admin_assets( string $hook_suffix ): void {
		if ( 'appearance_page_learnschool' !== $hook_suffix ) {
			return;
		}

		$version = function_exists( 'learnschool_asset_version' )
			? learnschool_asset_version( 'assets/styles/admin.css' )
			: '1.0.0';

		wp_enqueue_style(
			'learnschool-admin',
			get_theme_file_uri( 'assets/styles/admin.css' ),
			array(),
			$version
		);
	}
endif;
add_action( 'admin_enqueue_scripts', 'learnschool_admin_assets' );

if ( ! function_exists( 'learnschool_get_starter_layout_labels' ) ) :
	/**
	 * Returns the display labels of full-page starter patterns bundled with LearnSchool.
	 *
	 * @since 1.0.0
	 * @return array<int, string> Ordered starter page layout names.
	 */
	function learnschool_get_starter_layout_labels(): array {
		return array(
			__( 'Home', 'learnschool' ),
			__( 'About Us', 'learnschool' ),
			__( 'Programs', 'learnschool' ),
			__( 'Admissions', 'learnschool' ),
			__( 'News', 'learnschool' ),
			__( 'Contact', 'learnschool' ),
		);
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

if ( ! function_exists( 'learnschool_build_style_preset_entry' ) ) :
	/**
	 * Builds a style preset swatch entry from a mapped theme.json color palette.
	 *
	 * @since 1.0.0
	 * @param string                $slug             Preset slug.
	 * @param string                $title            Human-readable preset title.
	 * @param array<string, string> $palette_map      Mapped hex colors keyed by slug.
	 * @param string                $active_signature Active palette signature for comparison.
	 * @return array{slug: string, title: string, is_active: bool, colors: array<int, string>} Style preset entry.
	 */
	function learnschool_build_style_preset_entry( string $slug, string $title, array $palette_map, string $active_signature ): array {
		$signature = learnschool_extract_palette_signature( $palette_map );

		return array(
			'slug'      => $slug,
			'title'     => $title,
			'is_active' => '|||' !== $active_signature && $active_signature === $signature,
			'colors'    => array(
				$palette_map['base'] ?? '#ffffff',
				$palette_map['base-subtle'] ?? '#f8f9fa',
				$palette_map['primary'] ?? '#704fe6',
				$palette_map['secondary'] ?? '#ffbe17',
			),
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

		$presets         = array();
		$theme_json_path = get_theme_file_path( 'theme.json' );
		$theme_data      = is_file( $theme_json_path )
			? wp_json_file_decode( $theme_json_path, array( 'associative' => true ) )
			: array();
		$default_palette = is_array( $theme_data ) ? ( $theme_data['settings']['color']['palette'] ?? array() ) : array();
		$default_map     = is_array( $default_palette ) ? learnschool_extract_palette_map( $default_palette ) : array();

		if ( ! empty( $default_map ) ) {
			$presets[] = learnschool_build_style_preset_entry(
				'default',
				__( 'Default', 'learnschool' ),
				$default_map,
				$active_signature
			);
		}

		$variation_map = array();
		$style_dirs    = is_child_theme()
			? array( get_template_directory() . '/styles/*.json', get_stylesheet_directory() . '/styles/*.json' )
			: array( get_template_directory() . '/styles/*.json' );
		foreach ( $style_dirs as $pattern ) {
			$found = glob( $pattern );
			if ( ! is_array( $found ) ) {
				continue;
			}
			foreach ( $found as $path ) {
				$variation_map[ basename( $path ) ] = $path;
			}
		}
		ksort( $variation_map );

		foreach ( $variation_map as $variation_file ) {
			$variation = wp_json_file_decode( $variation_file, array( 'associative' => true ) );
			if ( ! is_array( $variation ) ) {
				continue;
			}
			$title       = isset( $variation['title'] ) && is_string( $variation['title'] ) ? $variation['title'] : '';
			$var_palette = $variation['settings']['color']['palette'] ?? array();
			if ( '' === $title || ! is_array( $var_palette ) ) {
				continue;
			}
			$var_map = learnschool_extract_palette_map( $var_palette );
			if ( empty( $var_map ) ) {
				continue;
			}
			$presets[] = learnschool_build_style_preset_entry(
				sanitize_title( $title ),
				$title,
				$var_map,
				$active_signature
			);
		}

		return $presets;
	}
endif;

if ( ! function_exists( 'learnschool_get_admin_setup_steps' ) ) :
	/**
	 * Builds the ordered 4-step FSE onboarding guide with read-only status detection.
	 *
	 * @since 1.0.0
	 * @param array<int, array{slug: string, title: string, is_active: bool, colors: array<int, string>}> $presets Style presets list.
	 * @return array<int, array{
	 *     number: int,
	 *     title: string,
	 *     description: string,
	 *     status_label: string,
	 *     status_tone: string,
	 *     primary_label: string,
	 *     primary_url: string,
	 *     secondary_links: array<int, array{label: string, url: string}>,
	 *     show_swatches: bool,
	 *     show_starter_layouts: bool
	 * }> Ordered setup steps.
	 */
	function learnschool_get_admin_setup_steps( array $presets ): array {
		$stylesheet = get_stylesheet();

		$template_part_url = static function ( string $part ) use ( $stylesheet ): string {
			$post_id = $stylesheet . '//' . $part;

			return add_query_arg(
				array( 'canvas' => 'edit' ),
				learnschool_get_site_editor_url(
					'/wp_template_part/' . $post_id,
					array(
						'postType' => 'wp_template_part',
						'postId'   => $post_id,
					)
				)
			);
		};
		$header_url        = $template_part_url( 'header' );
		$footer_url        = $template_part_url( 'footer' );

		$identity_url = version_compare( get_bloginfo( 'version' ), '7.0', '>=' )
			? learnschool_get_site_editor_url( '/identity', array( 'path' => '/wp_global_styles' ) )
			: $header_url;

		$styles_url     = learnschool_get_site_editor_url( '/styles', array( 'path' => '/wp_global_styles' ) );
		$patterns_url   = learnschool_get_site_editor_url( '/pattern', array( 'postType' => 'wp_block' ) );
		$navigation_url = learnschool_get_site_editor_url( '/navigation', array( 'postType' => 'wp_navigation' ) );

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

		$nav_counts    = wp_count_posts( 'wp_navigation' );
		$has_nav_menus = isset( $nav_counts->publish ) && (int) $nav_counts->publish > 0;
		$starter_count = count( learnschool_get_starter_layout_labels() );

		return array(
			array(
				'number'               => 1,
				'title'                => __( 'Site Identity, Logo & Icon', 'learnschool' ),
				'description'          => __( 'Set your school name, tagline, custom logo, and 512×512 browser icon inside WordPress.', 'learnschool' ),
				'status_label'         => $identity_status,
				'status_tone'          => ( $custom_logo_set && $site_icon_set ) ? 'success' : 'neutral',
				'primary_label'        => __( 'Edit Identity', 'learnschool' ),
				'primary_url'          => $identity_url,
				'secondary_links'      => array(),
				'show_swatches'        => false,
				'show_starter_layouts' => false,
			),
			array(
				'number'               => 2,
				'title'                => __( 'Colors & Typography', 'learnschool' ),
				'description'          => __( 'Preview the bundled color palettes below, then switch variations or customize fonts and spacing in Global Styles.', 'learnschool' ),
				'status_label'         => $active_preset_name,
				'status_tone'          => 'success',
				'primary_label'        => __( 'Open Global Styles', 'learnschool' ),
				'primary_url'          => $styles_url,
				'secondary_links'      => array(),
				'show_swatches'        => ! empty( $presets ),
				'show_starter_layouts' => false,
			),
			array(
				'number'               => 3,
				'title'                => __( 'Build School Pages with Starter Layouts', 'learnschool' ),
				'description'          => __( 'Your homepage works out of the box via the Front Page template. Add a new page in WordPress, pick any starter layout from the pattern modal, and switch the template to Page (No Title).', 'learnschool' ),
				'status_label'         => sprintf(
					/* translators: %d: Number of included full-page starter layouts. */
					__( '%d page layouts included', 'learnschool' ),
					$starter_count
				),
				'status_tone'          => 'neutral',
				'primary_label'        => __( 'Add New Page', 'learnschool' ),
				'primary_url'          => admin_url( 'post-new.php?post_type=page' ),
				'secondary_links'      => array(
					array(
						'label' => __( 'All Pages', 'learnschool' ),
						'url'   => admin_url( 'edit.php?post_type=page' ),
					),
					array(
						'label' => __( 'Browse Patterns', 'learnschool' ),
						'url'   => $patterns_url,
					),
				),
				'show_swatches'        => false,
				'show_starter_layouts' => true,
			),
			array(
				'number'               => 4,
				'title'                => __( 'Navigation, Header CTA & Footer', 'learnschool' ),
				'description'          => __( 'Arrange menu links, update the Enroll Now button, and customize footer campus details in the Site Editor.', 'learnschool' ),
				'status_label'         => $has_nav_menus ? __( 'Menu saved', 'learnschool' ) : __( 'Using page list', 'learnschool' ),
				'status_tone'          => $has_nav_menus ? 'success' : 'neutral',
				'primary_label'        => __( 'Manage Navigation', 'learnschool' ),
				'primary_url'          => $navigation_url,
				'secondary_links'      => array(
					array(
						'label' => __( 'Edit Header', 'learnschool' ),
						'url'   => $header_url,
					),
					array(
						'label' => __( 'Edit Footer', 'learnschool' ),
						'url'   => $footer_url,
					),
				),
				'show_swatches'        => false,
				'show_starter_layouts' => false,
			),
		);
	}
endif;

if ( ! function_exists( 'learnschool_render_admin_resources_panel' ) ) :
	/**
	 * Renders read-only Site Editor shortcuts for LearnSchool's bundled templates and patterns.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_render_admin_resources_panel(): void {
		$shortcuts = array(
			array(
				'label' => __( 'Page Templates', 'learnschool' ),
				'hint'  => __( 'Front Page, Page (No Title), Sidebar, Full Width & Landing', 'learnschool' ),
				'url'   => learnschool_get_site_editor_url( '/template', array( 'postType' => 'wp_template' ) ),
			),
			array(
				'label' => __( 'Block Patterns', 'learnschool' ),
				'hint'  => __( '33 modular sections and 6 full-page school layouts', 'learnschool' ),
				'url'   => learnschool_get_site_editor_url( '/pattern', array( 'postType' => 'wp_block' ) ),
			),
			array(
				'label' => __( 'Reading Settings', 'learnschool' ),
				'hint'  => __( 'Optional static homepage and posts page assignment', 'learnschool' ),
				'url'   => admin_url( 'options-reading.php' ),
			),
		);
		?>
		<section class="learnschool-admin-panel" aria-labelledby="learnschool-resources-heading">
			<div class="learnschool-admin-panel__header">
				<div>
					<h2 id="learnschool-resources-heading"><?php echo esc_html__( 'Included in LearnSchool', 'learnschool' ); ?></h2>
					<p><?php echo esc_html__( 'Jump straight to templates and patterns in the Site Editor.', 'learnschool' ); ?></p>
				</div>
			</div>
			<ul class="learnschool-admin-links">
				<?php foreach ( $shortcuts as $shortcut ) : ?>
				<li>
					<a href="<?php echo esc_url( $shortcut['url'] ); ?>">
						<span class="learnschool-admin-links__copy">
							<strong><?php echo esc_html( $shortcut['label'] ); ?></strong>
							<small><?php echo esc_html( $shortcut['hint'] ); ?></small>
						</span>
						<span class="learnschool-admin-links__icon" aria-hidden="true">→</span>
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
	 * Render the LearnSchool Onboarding & Setup Guide admin screen.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_render_welcome_page(): void {
		if ( ! current_user_can( 'edit_theme_options' ) ) {
			wp_die( esc_html__( 'Sorry, you are not allowed to edit theme options on this site.', 'learnschool' ), 403 );
		}

		$theme         = wp_get_theme();
		$theme_version = $theme->get( 'Version' );
		$version_label = is_string( $theme_version ) && '' !== $theme_version ? $theme_version : '1.0.0';

		$site_editor_url = admin_url( 'site-editor.php' );
		$styles_url      = learnschool_get_site_editor_url( '/styles', array( 'path' => '/wp_global_styles' ) );
		$presets         = learnschool_get_admin_style_presets();
		$steps           = learnschool_get_admin_setup_steps( $presets );
		$starter_layouts = learnschool_get_starter_layout_labels();
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
				<div class="learnschool-admin-workspace">
					<div class="learnschool-admin-main">
						<section class="learnschool-admin-panel" aria-labelledby="learnschool-guide-heading">
							<div class="learnschool-admin-panel__header">
								<div>
									<h2 id="learnschool-guide-heading"><?php echo esc_html__( 'Site Setup Guide', 'learnschool' ); ?></h2>
									<p><?php echo esc_html__( 'Follow these steps to set up your school site using native WordPress Full Site Editing.', 'learnschool' ); ?></p>
								</div>
								<span class="learnschool-admin-counter">
									<?php
									printf(
										/* translators: %d: Number of setup steps in the guide. */
										esc_html__( '%d quick steps', 'learnschool' ),
										count( $steps )
									);
									?>
								</span>
							</div>

							<ol class="learnschool-admin-steps">
								<?php foreach ( $steps as $step ) : ?>
								<li class="learnschool-admin-step-item">
									<span class="learnschool-admin-step-item__marker" aria-hidden="true">
										<?php echo esc_html( (string) $step['number'] ); ?>
									</span>
									<div class="learnschool-admin-step-item__body">
										<div class="learnschool-admin-step-item__head">
											<h3><?php echo esc_html( $step['title'] ); ?></h3>
											<span class="learnschool-admin-pill <?php echo 'success' === $step['status_tone'] ? 'learnschool-admin-pill--success' : ''; ?>">
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
											</a>
											<?php endforeach; ?>
										</div>
										<?php endif; ?>

										<?php if ( ! empty( $step['show_starter_layouts'] ) && ! empty( $starter_layouts ) ) : ?>
										<ul class="learnschool-admin-layout-chips" aria-label="<?php echo esc_attr__( 'Included starter page layouts', 'learnschool' ); ?>">
											<?php foreach ( $starter_layouts as $layout_title ) : ?>
											<li class="learnschool-admin-layout-chip">
												<?php echo esc_html( $layout_title ); ?>
											</li>
											<?php endforeach; ?>
										</ul>
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

					<aside class="learnschool-admin-rail" aria-label="<?php echo esc_attr__( 'Included templates and patterns', 'learnschool' ); ?>">
						<?php learnschool_render_admin_resources_panel(); ?>
					</aside>
				</div>
			</div>
		</div>
		<?php
	}
endif;
