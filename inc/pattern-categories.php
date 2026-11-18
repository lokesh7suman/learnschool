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
	 * Standard WordPress core categories (banner, call-to-action, featured,
	 * footer, header, pages, posts, services, team, testimonials, text)
	 * are provided natively by core. LearnSchool registers the unified brand category.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_register_pattern_categories() {
		register_block_pattern_category(
			'learnschool',
			array(
				'label'       => _x( 'LearnSchool', 'Block pattern category', 'learnschool' ),
				'description' => __( 'All patterns from the LearnSchool theme.', 'learnschool' ),
			)
		);
	}
endif;
add_action( 'init', 'learnschool_register_pattern_categories' );
