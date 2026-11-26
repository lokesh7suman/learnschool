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
