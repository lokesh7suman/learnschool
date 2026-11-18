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
		$categories = array(
			'learnschool'       => array(
				'label'       => _x( 'LearnSchool', 'Block pattern category', 'learnschool' ),
				'description' => __( 'All patterns from the LearnSchool theme.', 'learnschool' ),
			),
			'school-hero'       => array(
				'label'       => _x( 'School: Hero & Banners', 'Block pattern category', 'learnschool' ),
				'description' => __( 'High-impact hero banners and welcome sections.', 'learnschool' ),
			),
			'school-programs'   => array(
				'label'       => _x( 'School: Programs & Age Tracks', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Curriculum tracks from Infants to Pre-K.', 'learnschool' ),
			),
			'school-admissions' => array(
				'label'       => _x( 'School: Admissions & Tours', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Enrollment funnels, tuition tables, and tour booking.', 'learnschool' ),
			),
			'school-team'       => array(
				'label'       => _x( 'School: Educators & Staff', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Teacher and director bio grids with credentials.', 'learnschool' ),
			),
			'school-curriculum' => array(
				'label'       => _x( 'School: Curriculum & Rhythm', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Daily rhythm schedules, learning pillars, and routines.', 'learnschool' ),
			),
			'school-trust'      => array(
				'label'       => _x( 'School: Safety & Trust', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Accreditation, licensing, and campus security trust strips.', 'learnschool' ),
			),
			'school-pages'      => array(
				'label'       => _x( 'School: Full Pages', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Full page starter templates ready for 1-click publishing.', 'learnschool' ),
			),
		);

		foreach ( $categories as $slug => $properties ) {
			register_block_pattern_category( $slug, $properties );
		}
	}
endif;
add_action( 'init', 'learnschool_register_pattern_categories' );
