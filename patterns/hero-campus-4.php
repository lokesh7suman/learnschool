<?php
/**
 * Title: Campus Hero (Cover Banner with Overlapping Action Box)
 * Slug: learnschool/hero-campus-4
 * Categories: banner, call-to-action
 * Keywords: campus, cover, dates, events, admissions
 * Description: Cover block hero with deep purple overlay and an overlapping floating action box highlighting key admissions deadlines and visit actions.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-7","left":"0","right":"0"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-7);padding-left:0"><!-- wp:cover {"overlayColor":"primary-dark","minHeight":480,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-8","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-cover alignfull has-primary-dark-background-color has-background-dim" style="min-height:480px;padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-8);padding-left:var(--wp--preset--spacing--step-4)"><span aria-hidden="true" class="wp-block-cover__background has-primary-dark-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"840px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Experience LearnSchool Academy', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"textColor":"base","fontSize":"display"} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-display-font-size"><?php echo esc_html__( 'Discover a Community Where Every Child', 'learnschool' ); ?> <span class="wk-font-script" style="color:var(--wp--preset--color--secondary)"><?php echo esc_html__( 'Flourishes', 'learnschool' ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"base","fontSize":"large"} -->
<p class="has-text-align-center has-base-color has-text-color has-large-font-size" style="line-height:1.7"><?php esc_html_e( 'Experience academic excellence, transformative arts, and inclusive camaraderie on our historic learning campus.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"},"margin":{"top":"calc(var(--wp--preset--spacing--step-6) * -1)"}},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-contrast-color has-base-background-color has-text-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--elevated);margin-top:calc(var(--wp--preset--spacing--step-6) * -1);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Open Campus Day', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Next Open Campus Day: November 24', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Guided tours, faculty meet-and-greets, and student demonstration sessions.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"secondary-dark","fontSize":"small"} -->
<p class="has-secondary-dark-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Priority Admissions', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Admissions Application Deadline: January 15', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Early decision notifications and scholarship candidate evaluations.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#schedule-consultation"><?php esc_html_e( 'Schedule Admissions Consultation', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Virtual or in-person 1-on-1 sessions available daily.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->