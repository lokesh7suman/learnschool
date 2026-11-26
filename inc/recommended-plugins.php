<?php
/**
 * Native WordPress.org companion plugin recommendations for LearnSchool.
 *
 * Uses WordPress core REST API, plugin installer, activation, and Thickbox modal APIs
 * without bundled third-party libraries or intrusive multi-screen notices.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'learnschool_get_recommended_plugins' ) ) :
	/**
	 * Returns the curated list of optional WordPress.org companion plugins for LearnSchool.
	 *
	 * @since 1.0.0
	 * @return array<int, array{slug: string, file: string, name: string, description: string, badge: string}> Recommended plugin metadata list.
	 */
	function learnschool_get_recommended_plugins(): array {
		$plugins = array(
			array(
				'slug'        => 'codeclove-school-management',
				'file'        => 'codeclove-school-management/codeclove-school-management.php',
				'name'        => __( 'CodeClove School Management System', 'learnschool' ),
				'description' => __( 'Modern, country-aware school management system for student admissions, classes, staff, and daily attendance.', 'learnschool' ),
				'badge'       => __( 'Optional · Free on WordPress.org', 'learnschool' ),
			),
		);

		/**
		 * Filters the list of optional companion plugins displayed on the Appearance -> LearnSchool screen.
		 *
		 * @since 1.0.0
		 * @param array<int, array{slug: string, file: string, name: string, description: string, badge: string}> $plugins Recommended plugin definitions.
		 */
		$filtered = apply_filters( 'learnschool_recommended_plugins', $plugins );

		return is_array( $filtered ) ? $filtered : $plugins;
	}
endif;

if ( ! function_exists( 'learnschool_get_recommended_plugin_state' ) ) :
	/**
	 * Resolves the installation and activation state of a WordPress.org plugin.
	 *
	 * @since 1.0.0
	 * @param string $slug        Plugin directory slug on WordPress.org.
	 * @param string $plugin_file Expected plugin basename relative to plugins directory.
	 * @return array{status: string, basename: string} Plugin state ('active', 'inactive', or 'not-installed') and basename.
	 */
	function learnschool_get_recommended_plugin_state( string $slug, string $plugin_file ): array {
		if ( ! function_exists( 'get_plugins' ) || ! function_exists( 'is_plugin_active' ) ) {
			require_once ABSPATH . 'wp-admin/includes/plugin.php';
		}

		$installed     = get_plugins();
		$resolved_file = '';

		if ( isset( $installed[ $plugin_file ] ) ) {
			$resolved_file = $plugin_file;
		} else {
			$prefix = $slug . '/';
			foreach ( array_keys( $installed ) as $candidate_file ) {
				if ( is_string( $candidate_file ) && str_starts_with( $candidate_file, $prefix ) ) {
					$resolved_file = $candidate_file;
					break;
				}
			}
		}

		if ( '' === $resolved_file ) {
			return array(
				'status'   => 'not-installed',
				'basename' => $plugin_file,
			);
		}

		return array(
			'status'   => is_plugin_active( $resolved_file ) ? 'active' : 'inactive',
			'basename' => $resolved_file,
		);
	}
endif;

if ( ! function_exists( 'learnschool_get_recommended_plugin_action' ) ) :
	/**
	 * Builds capability- and file-mod-checked WordPress core action URLs and labels for a recommended plugin.
	 *
	 * @since 1.0.0
	 * @param string $slug        Plugin directory slug on WordPress.org.
	 * @param string $plugin_file Expected plugin basename relative to plugins directory.
	 * @return array{
	 *     slug: string,
	 *     basename: string,
	 *     status: string,
	 *     status_label: string,
	 *     primary_url: string,
	 *     primary_label: string,
	 *     loading_label: string,
	 *     details_url: string,
	 *     details_label: string,
	 *     is_thickbox: bool,
	 *     file_mods_blocked: bool
	 * } Display state and safe action URLs.
	 */
	function learnschool_get_recommended_plugin_action( string $slug, string $plugin_file ): array {
		$state    = learnschool_get_recommended_plugin_state( $slug, $plugin_file );
		$status   = $state['status'];
		$basename = $state['basename'];

		$file_mods_allowed = ! function_exists( 'wp_is_file_mod_allowed' ) || wp_is_file_mod_allowed( 'can_install_plugins' );
		$can_install       = $file_mods_allowed && current_user_can( 'install_plugins' );
		$can_activate      = current_user_can( 'activate_plugins' );

		$primary_url       = '';
		$primary_label     = '';
		$loading_label     = '';
		$status_label      = __( 'Recommended', 'learnschool' );
		$file_mods_blocked = false;

		if ( 'active' === $status ) {
			$status_label = __( 'Active', 'learnschool' );
			if ( $can_activate ) {
				$primary_url   = self_admin_url( 'plugins.php' );
				$primary_label = __( 'Manage Plugins', 'learnschool' );
			}
		} elseif ( 'inactive' === $status ) {
			$status_label = __( 'Installed (Inactive)', 'learnschool' );
			if ( $can_activate ) {
				$primary_url   = wp_nonce_url(
					self_admin_url( 'plugins.php?action=activate&plugin=' . rawurlencode( $basename ) ),
					'activate-plugin_' . $basename
				);
				$primary_label = __( 'Activate Plugin', 'learnschool' );
				$loading_label = __( 'Activating…', 'learnschool' );
			}
		} elseif ( $can_install ) {
			$primary_url   = wp_nonce_url(
				self_admin_url( 'update.php?action=install-plugin&plugin=' . rawurlencode( $slug ) ),
				'install-plugin_' . $slug
			);
			$primary_label = __( 'Install Plugin', 'learnschool' );
			$loading_label = __( 'Installing…', 'learnschool' );
		} else {
			$file_mods_blocked = ! $file_mods_allowed;
		}

		$details_url = $can_install
			? add_query_arg(
				array(
					'tab'       => 'plugin-information',
					'plugin'    => $slug,
					'TB_iframe' => 'true',
					'width'     => '772',
					'height'    => '550',
				),
				self_admin_url( 'plugin-install.php' )
			)
			: 'https://wordpress.org/plugins/' . rawurlencode( $slug ) . '/';

		return array(
			'slug'              => $slug,
			'basename'          => $basename,
			'status'            => $status,
			'status_label'      => $status_label,
			'primary_url'       => $primary_url,
			'primary_label'     => $primary_label,
			'loading_label'     => $loading_label,
			'details_url'       => $details_url,
			'details_label'     => $can_install ? __( 'View Details', 'learnschool' ) : __( 'View on WordPress.org', 'learnschool' ),
			'is_thickbox'       => $can_install,
			'file_mods_blocked' => $file_mods_blocked,
		);
	}
endif;

if ( ! function_exists( 'learnschool_get_pending_recommended_plugins' ) ) :
	/**
	 * Returns recommended plugins that are not yet active and that the current user can install or activate.
	 *
	 * @since 1.0.0
	 * @return array<int, array{
	 *     plugin: array{slug: string, file: string, name: string, description: string, badge: string},
	 *     action: array{
	 *         slug: string,
	 *         basename: string,
	 *         status: string,
	 *         status_label: string,
	 *         primary_url: string,
	 *         primary_label: string,
	 *         loading_label: string,
	 *         details_url: string,
	 *         details_label: string,
	 *         is_thickbox: bool,
	 *         file_mods_blocked: bool
	 *     }
	 * }> Actionable inactive/missing plugins.
	 */
	function learnschool_get_pending_recommended_plugins(): array {
		$pending = array();

		foreach ( learnschool_get_recommended_plugins() as $plugin ) {
			if ( empty( $plugin['slug'] ) || empty( $plugin['file'] ) || empty( $plugin['name'] ) ) {
				continue;
			}

			$action = learnschool_get_recommended_plugin_action(
				(string) $plugin['slug'],
				(string) $plugin['file']
			);

			if ( 'active' === $action['status'] || '' === $action['primary_url'] ) {
				continue;
			}

			$pending[] = array(
				'plugin' => $plugin,
				'action' => $action,
			);
		}

		return $pending;
	}
endif;

if ( ! function_exists( 'learnschool_enqueue_plugin_actions_script' ) ) :
	/**
	 * Enqueues inline REST install/activate and notice dismissal behavior for WP Admin.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_enqueue_plugin_actions_script(): void {
		$theme_version = wp_get_theme()->get( 'Version' );
		$version       = defined( 'WP_DEBUG' ) && WP_DEBUG
			? (string) filemtime( get_theme_file_path( 'assets/js/admin-plugins.js' ) )
			: ( is_string( $theme_version ) && '' !== $theme_version ? $theme_version : '1.0.0' );

		wp_enqueue_script(
			'learnschool-admin-plugins',
			get_theme_file_uri( 'assets/js/admin-plugins.js' ),
			array( 'wp-api-fetch' ),
			$version,
			true
		);
	}
endif;

if ( ! function_exists( 'learnschool_should_display_plugin_notice' ) ) :
	/**
	 * Determines whether the optional companion plugin admin notice should render on Dashboard or Themes.
	 *
	 * @since 1.0.0
	 * @return bool True when notice should render.
	 */
	function learnschool_should_display_plugin_notice(): bool {
		if ( is_network_admin() || wp_doing_ajax() ) {
			return false;
		}

		if ( ! current_user_can( 'install_plugins' ) && ! current_user_can( 'activate_plugins' ) ) {
			return false;
		}

		$user_id = get_current_user_id();
		if ( $user_id <= 0 || '1' === get_user_meta( $user_id, 'learnschool_dismissed_plugin_notice', true ) ) {
			return false;
		}

		$screen = get_current_screen();
		if ( ! $screen instanceof \WP_Screen ) {
			return false;
		}

		if ( ! in_array( $screen->id, array( 'dashboard', 'themes' ), true ) ) {
			return false;
		}

		return ! empty( learnschool_get_pending_recommended_plugins() );
	}
endif;

if ( ! function_exists( 'learnschool_enqueue_plugin_notice_assets' ) ) :
	/**
	 * Enqueues admin notice styles and scripts exclusively when the companion plugin notice is rendered.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_enqueue_plugin_notice_assets(): void {
		if ( ! learnschool_should_display_plugin_notice() ) {
			return;
		}

		$theme_version = wp_get_theme()->get( 'Version' );
		$version       = defined( 'WP_DEBUG' ) && WP_DEBUG
			? (string) filemtime( get_theme_file_path( 'assets/styles/admin-notice.css' ) )
			: ( is_string( $theme_version ) && '' !== $theme_version ? $theme_version : '1.0.0' );

		wp_enqueue_style(
			'learnschool-admin-notice',
			get_theme_file_uri( 'assets/styles/admin-notice.css' ),
			array(),
			$version
		);

		learnschool_enqueue_plugin_actions_script();
	}
endif;
add_action( 'admin_enqueue_scripts', 'learnschool_enqueue_plugin_notice_assets' );

if ( ! function_exists( 'learnschool_render_plugin_notice' ) ) :
	/**
	 * Renders a refined, permanently dismissible native notice recommending LearnSchool's companion plugin.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_render_plugin_notice(): void {
		if ( ! learnschool_should_display_plugin_notice() ) {
			return;
		}

		$pending = learnschool_get_pending_recommended_plugins();
		if ( empty( $pending ) ) {
			return;
		}

		$welcome_url = admin_url( 'themes.php?page=learnschool-welcome' );
		$plugins_url = self_admin_url( 'plugins.php' );
		$first       = $pending[0];
		$single_item = 1 === count( $pending );
		?>
		<div
			class="notice notice-info is-dismissible learnschool-plugin-notice"
			data-ajax-url="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>"
			data-dismiss-nonce="<?php echo esc_attr( wp_create_nonce( 'learnschool_dismiss_plugin_notice' ) ); ?>"
		>
			<div class="learnschool-plugin-notice__inner">
				<div class="learnschool-plugin-notice__icon">
					<img
						src="<?php echo esc_url( get_theme_file_uri( 'assets/images/site-logo.png' ) ); ?>"
						alt=""
						width="40"
						height="40"
					/>
				</div>
				<div class="learnschool-plugin-notice__content">
					<p class="learnschool-plugin-notice__title">
						<strong>
							<?php
							echo esc_html(
								$single_item
									? (string) $first['plugin']['name']
									: __( 'LearnSchool Recommended Companion Plugins', 'learnschool' )
							);
							?>
						</strong>
						<span class="learnschool-plugin-notice__badge"><?php echo esc_html__( 'Optional', 'learnschool' ); ?></span>
					</p>
					<p class="learnschool-plugin-notice__desc">
						<?php
						echo esc_html(
							$single_item
								? __( 'Pair LearnSchool with CodeClove School Management System to manage student admissions, classes, staff, and attendance.', 'learnschool' )
								: __( 'Install optional WordPress.org companion plugins from the setup guide to add school management features.', 'learnschool' )
						);
						?>
					</p>
					<p class="learnschool-plugin-error" role="alert" hidden></p>
				</div>
				<div class="learnschool-plugin-notice__actions">
					<?php if ( $single_item ) : ?>
					<a
						class="button button-primary learnschool-plugin-action"
						href="<?php echo esc_url( $first['action']['primary_url'] ); ?>"
						data-plugin-slug="<?php echo esc_attr( $first['action']['slug'] ); ?>"
						data-plugin-basename="<?php echo esc_attr( $first['action']['basename'] ); ?>"
						data-plugin-state="<?php echo esc_attr( $first['action']['status'] ); ?>"
						data-loading-label="<?php echo esc_attr( $first['action']['loading_label'] ); ?>"
						data-active-label="<?php echo esc_attr__( 'Manage Plugins', 'learnschool' ); ?>"
						data-plugins-url="<?php echo esc_url( $plugins_url ); ?>"
						data-success-notice="<?php echo esc_attr( sprintf( /* translators: %s: Plugin name. */ __( '%s is now active.', 'learnschool' ), (string) $first['plugin']['name'] ) ); ?>"
					>
						<?php echo esc_html( $first['action']['primary_label'] ); ?>
					</a>
					<?php else : ?>
					<a class="button button-primary" href="<?php echo esc_url( $welcome_url ); ?>">
						<?php echo esc_html__( 'View Setup Guide', 'learnschool' ); ?>
					</a>
					<?php endif; ?>
					<a class="learnschool-plugin-notice__setup" href="<?php echo esc_url( $welcome_url ); ?>">
						<?php echo esc_html__( 'Setup Guide', 'learnschool' ); ?>
					</a>
				</div>
			</div>
		</div>
		<?php
	}
endif;
add_action( 'admin_notices', 'learnschool_render_plugin_notice' );

if ( ! function_exists( 'learnschool_ajax_dismiss_plugin_notice' ) ) :
	/**
	 * Handles AJAX dismissal when the user clicks the native WordPress notice close button.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_ajax_dismiss_plugin_notice(): void {
		check_ajax_referer( 'learnschool_dismiss_plugin_notice', 'nonce' );

		if ( ! current_user_can( 'install_plugins' ) && ! current_user_can( 'activate_plugins' ) ) {
			wp_send_json_error( null, 403 );
		}

		$user_id = get_current_user_id();
		if ( $user_id > 0 ) {
			update_user_meta( $user_id, 'learnschool_dismissed_plugin_notice', '1' );
		}

		wp_send_json_success();
	}
endif;
add_action( 'wp_ajax_learnschool_dismiss_plugin_notice', 'learnschool_ajax_dismiss_plugin_notice' );

if ( ! function_exists( 'learnschool_reset_plugin_notice_on_theme_switch' ) ) :
	/**
	 * Resets prior notice dismissal when LearnSchool is switched to and activated again.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_reset_plugin_notice_on_theme_switch(): void {
		delete_metadata( 'user', 0, 'learnschool_dismissed_plugin_notice', '', true );
	}
endif;
add_action( 'after_switch_theme', 'learnschool_reset_plugin_notice_on_theme_switch' );
