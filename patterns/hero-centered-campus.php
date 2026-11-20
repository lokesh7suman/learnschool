<?php
/**
 * Title: Hero Centered Campus
 * Slug: learnschool/hero-centered-campus
 * Categories: learnschool/hero
 * Keywords: hero, campus, banner, admissions
 * Description: Campus hero section with call-to-action buttons and high-contrast typography.
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
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","textColor":"contrast","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-contrast-color has-base-subtle-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"780px","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2);font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( '★ Voted #1 Early Learning Academy (2025–2026)', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"lineHeight":"1.15","fontFamily":"var:preset|font-family|quicksand"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}}},"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3);font-family:var(--wp--preset--font-family--quicksand);line-height:1.15"><?php echo esc_html__( 'Where Natural Curiosity Meets Purposeful Learning &amp; Lifelong Confidence', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-4);line-height:1.7"><?php echo esc_html__( 'LearnSchool provides a holistic, inquiry-driven foundation from preschool through kindergarten—blending creative expression, early STEM discovery, and individualized mentorship in safe, joyful classrooms.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#admissions"><?php echo esc_html__( 'Apply for 2026 Admission', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="#visit"><?php echo esc_html__( 'Take a Virtual Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
