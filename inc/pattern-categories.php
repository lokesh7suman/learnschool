<?php
/**
 * Block pattern categories for LearnSchool theme.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'learnschool_register_pattern_categories' ) ) :
	/**
	 * Registers custom block pattern categories for LearnSchool theme.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_register_pattern_categories() {
		register_block_pattern_category(
			'pages',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Full page layouts and starter templates.', 'learnschool' ),
			)
		);
	}
endif;
add_action( 'init', 'learnschool_register_pattern_categories' );
