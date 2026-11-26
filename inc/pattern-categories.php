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
 *   learnschool/posts          Posts (blog grids, lists, archives, and author cards)
 *   learnschool/pricing        Tuition & Pricing (tuition tables and program plan comparisons)
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
				'label'       => esc_html_x( 'Call To Action', 'Block pattern category', 'learnschool' ),
				'description' => esc_html__( 'Conversion-focused sections, admissions roadmaps, event schedules, and enrollment forms.', 'learnschool' ),
			),

			'learnschool/faq'            => array(
				'label'       => esc_html_x( 'FAQ', 'Block pattern category', 'learnschool' ),
				'description' => esc_html__( 'Frequently asked questions, expandable accordions, and parent handbook guides.', 'learnschool' ),
			),

			'learnschool/features'       => array(
				'label'       => esc_html_x( 'Features', 'Block pattern category', 'learnschool' ),
				'description' => esc_html__( 'Feature highlight grids, program showcases, and curriculum sections.', 'learnschool' ),
			),

			'learnschool/hero'           => array(
				'label'       => esc_html_x( 'Hero', 'Block pattern category', 'learnschool' ),
				'description' => esc_html__( 'Full-width hero and banner sections for the top of pages.', 'learnschool' ),
			),

			'learnschool/pages'          => array(
				'label'       => esc_html_x( 'Pages', 'Block pattern category', 'learnschool' ),
				'description' => esc_html__( 'Complete starter layouts for school home, about, programs, admissions, blog, and contact pages.', 'learnschool' ),
			),

			'learnschool/posts'          => array(
				'label'       => esc_html_x( 'Posts & Blog', 'Block pattern category', 'learnschool' ),
				'description' => esc_html__( 'Blog post grids, list layouts, archive streams, and single-post author cards.', 'learnschool' ),
			),

			'learnschool/pricing'        => array(
				'label'       => esc_html_x( 'Tuition & Pricing', 'Block pattern category', 'learnschool' ),
				'description' => esc_html__( 'Tuition tables, program tier comparisons, and sibling discount highlights.', 'learnschool' ),
			),

			'learnschool/team'           => array(
				'label'       => esc_html_x( 'Faculty & Staff', 'Block pattern category', 'learnschool' ),
				'description' => esc_html__( 'Educator profiles, teacher grids, leadership bios, and faculty spotlights.', 'learnschool' ),
			),

			'learnschool/testimonial'    => array(
				'label'       => esc_html_x( 'Testimonials', 'Block pattern category', 'learnschool' ),
				'description' => esc_html__( 'Parent reviews, student stories, and quote showcases.', 'learnschool' ),
			),
		);

		foreach ( $categories as $slug => $args ) {
			register_block_pattern_category( $slug, $args );
		}
	}
endif;

add_action( 'init', 'learnschool_register_pattern_categories', 9 );
