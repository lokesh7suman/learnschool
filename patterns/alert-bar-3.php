<?php
/**
 * Title: Alert Bar - Open House & Event Ribbon
 * Slug: learnschool/alert-bar-3
 * Categories: banner, header
 * Keywords: event, open house, tour, ribbon, admissions, rsvp
 * Description: Two-column event announcement bar featuring calendar date chip, open house invitation, and dual RSVP buttons.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"aside","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"secondary","textColor":"contrast","layout":{"type":"constrained"}} -->
<aside class="wp-block-group alignfull has-contrast-color has-secondary-background-color has-text-color has-background" aria-label="<?php echo esc_attr__( 'Event notice', 'learnschool' ); ?>" style="padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"typography":{"fontWeight":"700"}},"backgroundColor":"contrast","textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-contrast-background-color has-text-color has-background has-small-font-size" style="border-radius:8px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-weight:700"><?php echo esc_html__( 'SAT, OCT 25 • 10:00 AM', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"2px"}}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:0;font-weight:700"><?php echo esc_html__( 'Annual Campus Open House & STEM Fair', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Meet teachers, tour makerspaces, and experience live workshops.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"16px","right":"16px"}}},"backgroundColor":"contrast","textColor":"base","fontSize":"small"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/#rsvp' ) ); ?>" style="border-radius:9999px;padding-top:6px;padding-right:16px;padding-bottom:6px;padding-left:16px"><?php echo esc_html__( 'RSVP Free Seat', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/#program' ) ); ?>" style="color:var(--wp--preset--color--contrast);text-decoration:underline;font-weight:600"><?php echo esc_html__( 'Download Program (PDF)', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></aside>
<!-- /wp:group -->
