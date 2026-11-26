<?php
/**
 * Theme Setup Guide screen under Appearance -> LearnSchool.
 *
 * Provides a clean, zero-upsell onboarding page with direct shortcuts to the
 * Site Editor, Global Styles, Header Navigation, and Starter Page Patterns.
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
	 * Register the LearnSchool setup screen under the Appearance menu.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_add_welcome_page(): void {
		add_theme_page(
			esc_html__( 'LearnSchool Setup', 'learnschool' ),
			esc_html__( 'LearnSchool', 'learnschool' ),
			'edit_theme_options',
			'learnschool-welcome',
			'learnschool_render_welcome_page'
		);
	}
endif;
add_action( 'admin_menu', 'learnschool_add_welcome_page' );

if ( ! function_exists( 'learnschool_admin_assets' ) ) :
	/**
	 * Enqueue styles exclusively on the Appearance -> LearnSchool screen.
	 *
	 * @since 1.0.0
	 * @param string $hook_suffix Current admin screen hook suffix.
	 * @return void
	 */
	function learnschool_admin_assets( string $hook_suffix ): void {
		if ( 'appearance_page_learnschool-welcome' !== $hook_suffix ) {
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

if ( ! function_exists( 'learnschool_render_welcome_page' ) ) :
	/**
	 * Render the Appearance -> LearnSchool Quick Start guide.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_render_welcome_page(): void {
		$theme         = wp_get_theme();
		$theme_version = $theme->get( 'Version' );
		$version_label = is_string( $theme_version ) && '' !== $theme_version ? $theme_version : '1.0.0';

		$site_editor_url     = admin_url( 'site-editor.php' );
		$styles_url          = add_query_arg(
			array( 'p' => '/styles' ),
			admin_url( 'site-editor.php' )
		);
		$header_url          = add_query_arg(
			array(
				'postId'   => get_stylesheet() . '//header',
				'postType' => 'wp_template_part',
				'canvas'   => 'edit',
			),
			admin_url( 'site-editor.php' )
		);
		$new_page_url        = admin_url( 'post-new.php?post_type=page' );
		$recommended_plugins = function_exists( 'learnschool_get_recommended_plugins' )
			? learnschool_get_recommended_plugins()
			: array();
		?>
		<div class="wrap learnschool-admin-wrap">
			<div class="learnschool-admin-hero">
				<div class="learnschool-admin-hero__identity">
					<img
						class="learnschool-admin-hero__logo"
						src="<?php echo esc_url( get_theme_file_uri( 'assets/images/site-logo.png' ) ); ?>"
						alt="<?php echo esc_attr__( 'LearnSchool logo', 'learnschool' ); ?>"
						width="56"
						height="56"
					/>
					<div>
						<div class="learnschool-admin-hero__title-row">
							<h1><?php echo esc_html__( 'Welcome to LearnSchool', 'learnschool' ); ?></h1>
							<span class="learnschool-admin-badge">
								<?php
								/* translators: %s: Current theme version number. */
								printf( esc_html__( 'Version %s', 'learnschool' ), esc_html( $version_label ) );
								?>
							</span>
						</div>
						<p class="learnschool-admin-hero__subtitle">
							<?php echo esc_html__( 'Get your school, academy, or early learning website ready in minutes using Full Site Editing blocks and starter page patterns.', 'learnschool' ); ?>
						</p>
					</div>
				</div>
				<div class="learnschool-admin-hero__actions">
					<a class="button button-primary button-hero" href="<?php echo esc_url( $site_editor_url ); ?>">
						<?php echo esc_html__( 'Open Site Editor', 'learnschool' ); ?>
					</a>
					<a class="button button-secondary button-hero" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php echo esc_html__( 'View Live Site', 'learnschool' ); ?>
					</a>
				</div>
			</div>

			<div class="learnschool-admin-grid">
				<div class="learnschool-admin-card">
					<span class="learnschool-admin-step">1</span>
					<h2><?php echo esc_html__( 'Customize Site Identity & Homepage', 'learnschool' ); ?></h2>
					<p><?php echo esc_html__( 'Replace the school logo, headline, campus photos, and teacher portraits directly inside the visual Site Editor.', 'learnschool' ); ?></p>
					<a class="button button-secondary" href="<?php echo esc_url( $site_editor_url ); ?>">
						<?php echo esc_html__( 'Edit Site Templates', 'learnschool' ); ?>
					</a>
				</div>

				<div class="learnschool-admin-card">
					<span class="learnschool-admin-step">2</span>
					<h2><?php echo esc_html__( 'Switch Color Palette & Typography', 'learnschool' ); ?></h2>
					<p><?php echo esc_html__( 'Try the bundled Coral Playground, Pastel Nursery, or Sunshine Playful style variations—or dial in your own school colors.', 'learnschool' ); ?></p>
					<a class="button button-secondary" href="<?php echo esc_url( $styles_url ); ?>">
						<?php echo esc_html__( 'Open Global Styles', 'learnschool' ); ?>
					</a>
				</div>

				<div class="learnschool-admin-card">
					<span class="learnschool-admin-step">3</span>
					<h2><?php echo esc_html__( 'Set Up Header Navigation', 'learnschool' ); ?></h2>
					<p><?php echo esc_html__( 'Edit the Header template part to organize navigation links, select an existing menu, or update the Enroll Now button URL.', 'learnschool' ); ?></p>
					<a class="button button-secondary" href="<?php echo esc_url( $header_url ); ?>">
						<?php echo esc_html__( 'Edit Header Menu', 'learnschool' ); ?>
					</a>
				</div>

				<div class="learnschool-admin-card">
					<span class="learnschool-admin-step">4</span>
					<h2><?php echo esc_html__( 'Create School Pages in One Click', 'learnschool' ); ?></h2>
					<p><?php echo esc_html__( 'Add a new page and choose from 7 full-page starter layouts (Home, About Us, Programs, Admissions, Blog, Blog with Sidebar, Contact) in the pattern picker.', 'learnschool' ); ?></p>
					<a class="button button-primary" href="<?php echo esc_url( $new_page_url ); ?>">
						<?php echo esc_html__( 'Create New Page', 'learnschool' ); ?>
					</a>
				</div>
			</div>

			<?php if ( ! empty( $recommended_plugins ) && function_exists( 'learnschool_get_recommended_plugin_action' ) ) : ?>
			<div class="learnschool-admin-plugins">
				<div class="learnschool-admin-plugins__header">
					<div>
						<h2><?php echo esc_html__( 'Recommended Companion Plugin', 'learnschool' ); ?></h2>
						<p><?php echo esc_html__( 'Optional WordPress.org plugin tested with LearnSchool. Your theme works completely without it.', 'learnschool' ); ?></p>
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
							? 'button button-secondary thickbox open-plugin-details-modal'
							: 'button button-secondary';
						?>
					<div class="learnschool-admin-plugin-card" data-active-status="<?php echo esc_attr__( 'Active', 'learnschool' ); ?>">
						<div class="learnschool-admin-plugin-card__icon" aria-hidden="true">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
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
							<?php if ( ! empty( $learnschool_plugin['badge'] ) ) : ?>
							<div class="learnschool-admin-plugin-card__meta">
								<span><?php echo esc_html( (string) $learnschool_plugin['badge'] ); ?></span>
							</div>
							<?php endif; ?>
							<?php if ( ! empty( $learnschool_action['file_mods_blocked'] ) ) : ?>
							<p class="learnschool-admin-plugin-card__note">
								<?php echo esc_html__( 'Automatic plugin installation is disabled in this environment. Install manually or ask your site administrator.', 'learnschool' ); ?>
							</p>
							<?php endif; ?>
							<p class="learnschool-plugin-error" role="alert" hidden></p>
						</div>
						<div class="learnschool-admin-plugin-card__actions">
							<?php if ( '' !== $learnschool_action['primary_url'] ) : ?>
							<a
								class="button <?php echo 'active' === $learnschool_action['status'] ? 'button-secondary' : 'button-primary'; ?> learnschool-plugin-action"
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
			</div>
			<?php endif; ?>

			<div class="learnschool-admin-tips">
				<h2><?php echo esc_html__( 'Included Templates & Pattern Categories', 'learnschool' ); ?></h2>
				<div class="learnschool-admin-tips__cols">
					<div>
						<h3><?php echo esc_html__( 'Page Templates', 'learnschool' ); ?></h3>
						<ul>
							<li><strong><?php echo esc_html__( 'Page (Default)', 'learnschool' ); ?></strong> &mdash; <?php echo esc_html__( 'Standard page with heading, content area, and comments.', 'learnschool' ); ?></li>
							<li><strong><?php echo esc_html__( 'Page (No Title)', 'learnschool' ); ?></strong> &mdash; <?php echo esc_html__( 'Edge-to-edge canvas without duplicate H1 titles or comments, ideal for starter page patterns.', 'learnschool' ); ?></li>
							<li><strong><?php echo esc_html__( 'Full Width', 'learnschool' ); ?></strong> &mdash; <?php echo esc_html__( 'Edge-to-edge layout for pages and posts with optional discussion.', 'learnschool' ); ?></li>
							<li><strong><?php echo esc_html__( 'Page with Sidebar', 'learnschool' ); ?></strong> &mdash; <?php echo esc_html__( 'Two-column layout pairing main content with a customizable Sidebar template part.', 'learnschool' ); ?></li>
							<li><strong><?php echo esc_html__( 'Landing Page', 'learnschool' ); ?></strong> &mdash; <?php echo esc_html__( 'Full showcase template without header or footer distraction.', 'learnschool' ); ?></li>
						</ul>
					</div>
					<div>
						<h3><?php echo esc_html__( 'Pattern Building Blocks', 'learnschool' ); ?></h3>
						<ul>
							<li><strong><?php echo esc_html__( 'Pages', 'learnschool' ); ?></strong> &mdash; <?php echo esc_html__( 'Full-page starters for Home, About Us, Programs, Admissions, Blog, Blog with Sidebar, and Contact.', 'learnschool' ); ?></li>
							<li><strong><?php echo esc_html__( 'Hero, Features & Faculty', 'learnschool' ); ?></strong> &mdash; <?php echo esc_html__( 'Mix-and-match classroom sections, campus gallery, teacher grids, and curriculum highlights.', 'learnschool' ); ?></li>
							<li><strong><?php echo esc_html__( 'Admissions, Tuition & FAQ', 'learnschool' ); ?></strong> &mdash; <?php echo esc_html__( 'Enrollment roadmaps, tuition comparisons, open house cards, and zero-JS accordion FAQs.', 'learnschool' ); ?></li>
							<li><strong><?php echo esc_html__( 'Posts, Headers & Footers', 'learnschool' ); ?></strong> &mdash; <?php echo esc_html__( 'Query grids/lists, author box, single/two-row headers, and multi-column footer variations.', 'learnschool' ); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
endif;
