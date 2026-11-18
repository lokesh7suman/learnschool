<?php
/**
 * Block pattern categories for LearnSchool theme.
 *
 * Follows the Ollie/FSE community standard taxonomy so categories map
 * predictably to the Site Editor Patterns panel (Appearance → Editor → Patterns).
 *
 * Standard Ollie-aligned category slugs registered here:
 *   hero            Hero / banner sections at the top of pages
 *   headers         Utility top bars and navigation chrome above the main header
 *   call-to-action  CTA sections and lead capture forms
 *   features        Feature grids, showcases, curriculum highlights, materials
 *   cards           Card-based grid layouts (future use)
 *   pricing         Pricing / tuition / plan comparison sections
 *   testimonials    Parent / student review and quote sections
 *   team            Educator bios and staff spotlights
 *   posts           Blog articles, news, and events
 *   pages           Full starter page compositions
 *   faq             Frequently asked questions and accordion panels
 *   learnschool     Namespace bucket — every theme pattern belongs here
 *
 * WordPress core natively provides: footer, header, text, featured, banner,
 * services, images, gallery, media, portfolio, columns, buttons, query.
 * We intentionally override core 'header'/'footer' labels with our own for
 * the Site Editor so they read "LearnSchool – Headers" vs the generic label.
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
	 * @since 1.0.0
	 * @return void
	 */
	function learnschool_register_pattern_categories(): void {

		$categories = array(

			// ── Brand namespace ──────────────────────────────────────────────
			'learnschool' => array(
				'label'       => _x( 'LearnSchool', 'Block pattern category', 'learnschool' ),
				'description' => __( 'All patterns from the LearnSchool theme.', 'learnschool' ),
			),

			// ── Page sections — Ollie standard ───────────────────────────────
			'hero'        => array(
				'label'       => _x( 'Hero', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Full-width hero and banner sections for the top of pages.', 'learnschool' ),
			),

			'features'    => array(
				'label'       => _x( 'Features', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Feature highlight grids, program showcases, learning materials, and curriculum sections.', 'learnschool' ),
			),

			'pricing'     => array(
				'label'       => _x( 'Pricing', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Tuition, fee, and pricing plan comparison sections.', 'learnschool' ),
			),

			'team'        => array(
				'label'       => _x( 'Team', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Educator bios, director spotlights, and staff profile grids.', 'learnschool' ),
			),

			'faq'         => array(
				'label'       => _x( 'FAQ', 'Block pattern category', 'learnschool' ),
				'description' => __( 'Frequently asked questions, accordion panels, and parent handbooks.', 'learnschool' ),
			),
		);

		foreach ( $categories as $slug => $args ) {
			register_block_pattern_category( $slug, $args );
		}
	}
endif;

add_action( 'init', 'learnschool_register_pattern_categories' );
