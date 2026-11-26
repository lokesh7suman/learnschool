<?php
/**
 * Title: Campus Contact & Visit Details
 * Slug: learnschool/contact-campus
 * Categories: learnschool/call-to-action
 * Description: Three-column admissions desk, campus hours, and campus address cards with tour scheduling CTA buttons.
 * Keywords: contact, phone, email, hours, campus, location, admissions
 * Viewport Width: 1280
 * Inserter: true
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"anchor":"contact","tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" id="contact" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-2"}}}} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Get in ', 'learnschool' ); ?><span class="learnschool-script has-primary-color"><?php echo esc_html__( 'touch', 'learnschool' ); ?></span><?php echo esc_html__( ' with us', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"medium","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Reach our admissions coordinators by phone, email, or in person during school hours.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"},"blockGap":"var:preset|spacing|step-2"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":3,"fontSize":"large","textColor":"contrast","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Admissions Desk', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Questions about tours, waitlists, or enrollment documents? Call us directly.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<p class="has-medium-font-size" style="font-weight:700"><a href="<?php echo esc_url( 'tel:5550192834' ); ?>"><?php echo esc_html__( '(555) 019-2834', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"},"blockGap":"var:preset|spacing|step-2"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":3,"fontSize":"large","textColor":"contrast","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Campus Location', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( '1450 Discovery Way, Suite 100 — Main Early Learning Wing', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Parent drop-off & visitor parking available', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"},"blockGap":"var:preset|spacing|step-2"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":3,"fontSize":"large","textColor":"contrast","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'School Hours', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Morning tours by appointment Tuesday through Friday.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<p class="has-contrast-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Mon–Fri: 8:00 AM – 5:00 PM', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
