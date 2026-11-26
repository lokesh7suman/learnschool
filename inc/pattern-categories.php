<?php
/**
 * Block pattern categories for LearnSchool theme.
 *
 * Strictly follows the Ollie FSE taxonomy architecture:
 * Categories are namespaced (`learnschool/*`) to guarantee isolation from
 * core and third-party plugins while presenting clean, canonical section labels
 * in the Site Editor and Block Inserter.
 *
 * Registered theme categories:
 *   learnschool/call-to-action Call To Action (admissions roadmaps, tours, enrollments)
 *   learnschool/faq            FAQ (frequently asked questions, expandable accordions)
 *   learnschool/features       Features (program pillars, highlights)
 *   learnschool/hero           Hero (entrance banners and campus introductions)
 *   learnschool/pages          Pages (complete full-page starter layouts)
 *   learnschool/team           Faculty & Staff (educator profiles, teacher grids, leadership bios)
 *   learnschool/testimonial    Testimonials (parent reviews, ratings, leadership quotes)
 *
 * Core template part categories:
 *   header                     Headers (navigation chrome, top bars, alert bars)
 *   footer                     Footers (site footers, newsletter footers, accreditation)
 *
 * @package LearnSchool
 * @since   1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'learnschool_register_pattern_categories' ) ) :
	/**
	 * Registers custom block pattern categories for LearnSchool theme.
	 *
	 * Hooked at priority 9 (matching Ollie) so categories exist before
	 * theme and core patterns are registered.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_register_pattern_categories(): void {

		$categories = array(
			'learnschool/call-to-action' => array(
				'label'       => _x( 'Call To Action', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Conversion-focused sections, admissions roadmaps, event schedules, and enrollment forms.', 'learnschool' ),
			),

			'learnschool/faq'            => array(
				'label'       => _x( 'FAQ', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Frequently asked questions, expandable accordions, and parent handbook guides.', 'learnschool' ),
			),

			'learnschool/features'       => array(
				'label'       => _x( 'Features', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Feature highlight grids, program showcases, and curriculum sections.', 'learnschool' ),
			),

			'learnschool/hero'           => array(
				'label'       => _x( 'Hero', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Full-width hero and banner sections for the top of pages.', 'learnschool' ),
			),

			'learnschool/pages'          => array(
				'label'       => _x( 'Pages', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Complete starter layouts for school home, about, programs, admissions, and contact pages.', 'learnschool' ),
			),

			'learnschool/team'           => array(
				'label'       => _x( 'Faculty & Staff', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Educator profiles, teacher grids, leadership bios, and faculty spotlights.', 'learnschool' ),
			),

			'learnschool/testimonial'    => array(
				'label'       => _x( 'Testimonials', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Parent reviews, student stories, and quote showcases.', 'learnschool' ),
			),
		);

		foreach ( $categories as $slug => $args ) {
			register_block_pattern_category( $slug, $args );
		}
	}
endif;

add_action( 'init', 'learnschool_register_pattern_categories', 9 );
