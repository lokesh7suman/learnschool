<?php
/**
 * Title: Campus Hero
 * Slug: learnschool/hero-campus
 * Categories: banner, call-to-action
 * Keywords: hero, campus, banner, admissions
 * Description: Campus hero section with call-to-action buttons and accreditation highlights.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","textColor":"contrast","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-contrast-color has-base-subtle-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"840px","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"bottom":"var:preset|spacing|step-3"}}},"backgroundColor":"primary-light","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-light-background-color has-background" style="border-radius:9999px;margin-bottom:var(--wp--preset--spacing--step-3);padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Inspiring Excellence Since 1898', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"textAlign":"center","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Nurturing Curious Minds. Shaping Future Leaders.', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size" style="line-height:1.7"><?php esc_html_e( 'LearnSchool provides rigorous academics, competitive athletics, and vibrant arts programs across an inclusive, values-driven campus community.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#admissions"><?php esc_html_e( 'Apply for Admission', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#visit"><?php esc_html_e( 'Schedule Campus Visit', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
