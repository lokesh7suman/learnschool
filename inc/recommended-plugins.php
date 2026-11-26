<?php
/**
 * Native WordPress.org companion plugin recommendations for LearnSchool.
 *
 * Uses WordPress core plugin installation, activation, and Thickbox modal APIs
 * directly on the Appearance -> LearnSchool screen without bundled third-party libraries.
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
				'name'        => __( 'School Management System & ERP – CodeClove', 'learnschool' ),
				'description' => __( 'Optional school ERP companion plugin for student profiles, online admissions forms, daily attendance tracking, fee invoicing, staff directory, and a parent and student portal.', 'learnschool' ),
				'badge'       => __( 'Free on WordPress.org', 'learnschool' ),
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
	 * Builds capability-checked WordPress core action URLs and labels for a recommended plugin.
	 *
	 * @since 1.0.0
	 * @param string $slug        Plugin directory slug on WordPress.org.
	 * @param string $plugin_file Expected plugin basename relative to plugins directory.
	 * @return array{
	 *     status: string,
	 *     status_label: string,
	 *     primary_url: string,
	 *     primary_label: string,
	 *     details_url: string,
	 *     details_label: string,
	 *     is_thickbox: bool
	 * } Display state and safe action URLs.
	 */
	function learnschool_get_recommended_plugin_action( string $slug, string $plugin_file ): array {
		$state    = learnschool_get_recommended_plugin_state( $slug, $plugin_file );
		$status   = $state['status'];
		$basename = $state['basename'];

		$primary_url   = '';
		$primary_label = '';
		$status_label  = __( 'Recommended', 'learnschool' );

		if ( 'active' === $status ) {
			$status_label = __( 'Active', 'learnschool' );
			if ( current_user_can( 'activate_plugins' ) ) {
				$primary_url   = self_admin_url( 'plugins.php' );
				$primary_label = __( 'Manage Plugins', 'learnschool' );
			}
		} elseif ( 'inactive' === $status ) {
			$status_label = __( 'Installed (Inactive)', 'learnschool' );
			if ( current_user_can( 'activate_plugins' ) ) {
				$primary_url   = wp_nonce_url(
					self_admin_url( 'plugins.php?action=activate&plugin=' . rawurlencode( $basename ) ),
					'activate-plugin_' . $basename
				);
				$primary_label = __( 'Activate Plugin', 'learnschool' );
			}
		} elseif ( current_user_can( 'install_plugins' ) ) {
			$primary_url   = wp_nonce_url(
				self_admin_url( 'update.php?action=install-plugin&plugin=' . rawurlencode( $slug ) ),
				'install-plugin_' . $slug
			);
			$primary_label = __( 'Install Plugin', 'learnschool' );
		}

		$can_install = current_user_can( 'install_plugins' );
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
			'status'        => $status,
			'status_label'  => $status_label,
			'primary_url'   => $primary_url,
			'primary_label' => $primary_label,
			'details_url'   => $details_url,
			'details_label' => $can_install ? __( 'View Details', 'learnschool' ) : __( 'View on WordPress.org', 'learnschool' ),
			'is_thickbox'   => $can_install,
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
	 *         status: string,
	 *         status_label: string,
	 *         primary_url: string,
	 *         primary_label: string,
	 *         details_url: string,
	 *         details_label: string,
	 *         is_thickbox: bool
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

if ( ! function_exists( 'learnschool_should_display_plugin_notice' ) ) :
	/**
	 * Determines whether the optional companion plugin admin notice should be shown on the current screen.
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

		if ( ! in_array( $screen->id, array( 'dashboard', 'themes', 'plugins' ), true ) ) {
			return false;
		}

		return ! empty( learnschool_get_pending_recommended_plugins() );
	}
endif;

if ( ! function_exists( 'learnschool_enqueue_plugin_notice_assets' ) ) :
	/**
	 * Enqueues persistent dismissal script exclusively when the companion plugin notice is rendered.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_enqueue_plugin_notice_assets(): void {
		if ( ! learnschool_should_display_plugin_notice() ) {
			return;
		}

		$theme_version = wp_get_theme()->get( 'Version' );
		$version       = is_string( $theme_version ) && '' !== $theme_version ? $theme_version : '1.0.0';

		wp_enqueue_script(
			'learnschool-admin-notice',
			get_theme_file_uri( 'assets/js/admin-notice.js' ),
			array(),
			$version,
			true
		);
	}
endif;
add_action( 'admin_enqueue_scripts', 'learnschool_enqueue_plugin_notice_assets' );

if ( ! function_exists( 'learnschool_render_plugin_notice' ) ) :
	/**
	 * Renders a non-intrusive, permanently dismissible admin notice recommending LearnSchool's companion plugin.
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
		$dismiss_url = wp_nonce_url(
			add_query_arg( 'learnschool_dismiss_plugin_notice', '1' ),
			'learnschool_dismiss_plugin_notice',
			'learnschool_dismiss_nonce'
		);
		$first       = $pending[0];
		$single_item = 1 === count( $pending );
		?>
		<div
			class="notice notice-info is-dismissible learnschool-plugin-notice"
			data-ajax-url="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>"
			data-dismiss-nonce="<?php echo esc_attr( wp_create_nonce( 'learnschool_dismiss_plugin_notice' ) ); ?>"
		>
			<p>
				<strong><?php echo esc_html__( 'LearnSchool Companion Plugin (Optional):', 'learnschool' ); ?></strong>
				<?php
				if ( $single_item ) {
					printf(
						/* translators: %s: Recommended plugin name. */
						esc_html__( 'Install or activate %s to add student profiles, online admissions forms, daily attendance, fee invoicing, and a parent portal. Your theme works completely without it.', 'learnschool' ),
						esc_html( (string) $first['plugin']['name'] )
					);
				} else {
					echo esc_html__( 'LearnSchool recommends optional WordPress.org companion plugins to extend school administration. Your theme works completely without them.', 'learnschool' );
				}
				?>
			</p>
			<p>
				<?php if ( $single_item ) : ?>
				<a class="button button-primary" href="<?php echo esc_url( $first['action']['primary_url'] ); ?>">
					<?php echo esc_html( $first['action']['primary_label'] ); ?>
				</a>
				<?php endif; ?>
				<a class="button <?php echo $single_item ? 'button-secondary' : 'button-primary'; ?>" href="<?php echo esc_url( $welcome_url ); ?>">
					<?php echo esc_html__( 'Recommended Plugins & Setup', 'learnschool' ); ?>
				</a>
				<a class="button-link learnschool-plugin-notice__dismiss-link" href="<?php echo esc_url( $dismiss_url ); ?>" style="margin-left:8px;vertical-align:middle">
					<?php echo esc_html__( 'Dismiss notice', 'learnschool' ); ?>
				</a>
			</p>
		</div>
		<?php
	}
endif;
add_action( 'admin_notices', 'learnschool_render_plugin_notice' );

if ( ! function_exists( 'learnschool_handle_dismiss_plugin_notice' ) ) :
	/**
	 * Persists companion plugin notice dismissal when triggered via the fallback admin link.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_handle_dismiss_plugin_notice(): void {
		if ( ! isset( $_GET['learnschool_dismiss_plugin_notice'], $_GET['learnschool_dismiss_nonce'] ) ) {
			return;
		}

		if ( ! current_user_can( 'install_plugins' ) && ! current_user_can( 'activate_plugins' ) ) {
			return;
		}

		check_admin_referer( 'learnschool_dismiss_plugin_notice', 'learnschool_dismiss_nonce' );

		$user_id = get_current_user_id();
		if ( $user_id > 0 ) {
			update_user_meta( $user_id, 'learnschool_dismissed_plugin_notice', '1' );
		}

		wp_safe_redirect( remove_query_arg( array( 'learnschool_dismiss_plugin_notice', 'learnschool_dismiss_nonce' ) ) );
		exit;
	}
endif;
add_action( 'admin_init', 'learnschool_handle_dismiss_plugin_notice' );

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
