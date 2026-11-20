<?php
/**
 * Title: Hero Centered Campus
 * Slug: learnschool/hero-centered-campus
 * Categories: learnschool/hero
 * Keywords: hero, campus, banner, admissions
 * Description: Campus hero section with call-to-action buttons, high-contrast typography, and accreditation highlights.
 * Inserter: true
 *
 * @package LearnSchool
 * @since 1.0.0
 * Viewport Width: 1280
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","textColor":"contrast","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-contrast-color has-base-subtle-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"760px","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}}},"backgroundColor":"accent","layout":{"type":"flex","verticalAlignment":"center"}} -->
<div class="wp-block-group has-accent-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"secondary-dark","fontSize":"small"} -->
<p class="has-secondary-dark-color has-text-color has-small-font-size" style="font-weight:700"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="display:inline-block;vertical-align:-2px;margin-right:6px"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.45 1-1 1H7v2h10v-2h-2c-.55 0-1-.45-1-1v-2.34c3.46-.77 6-3.8 6-7.66V4H4v3c0 3.86 2.54 6.89 6 7.66Z"/></svg><?php echo esc_html__( 'Voted #1 Early Learning Academy in District (2025–2026)', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"lineHeight":"1.15","fontFamily":"var:preset|font-family|quicksand"}},"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--quicksand);line-height:1.15"><?php echo esc_html__( 'Where Natural Curiosity Meets Purposeful Learning &amp; Lifelong Confidence', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-5"}}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-5);line-height:1.7"><?php echo esc_html__( 'LearnSchool provides a holistic, inquiry-driven foundation from preschool through kindergarten—blending creative expression, early STEM discovery, and individualized mentorship in safe, joyful classrooms.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3","margin":{"bottom":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#admissions"><?php echo esc_html__( 'Apply for 2026 Admission', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="#visit"><?php echo esc_html__( 'Take a Virtual Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
