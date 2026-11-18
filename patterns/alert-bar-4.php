<?php
/**
 * Title: Alert Bar - Lilac Floating Pill Banner
 * Slug: learnschool/alert-bar-4
 * Categories: banner, header
 * Keywords: floating, pill, scholarship, enrollment, lilac, banner
 * Description: Floating rounded pill notification bar with soft lilac background, icon badge, and centered enrollment offer.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"aside","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<aside class="wp-block-group alignfull" aria-label="<?php echo esc_attr__( 'Discount notice', 'learnschool' ); ?>" style="padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"border":{"radius":"9999px"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"primary-light","textColor":"primary-dark","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide has-primary-dark-color has-primary-light-background-color has-text-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-4);box-shadow:var(--wp--preset--shadow--card)"><!-- wp:image {"width":"22px","height":"22px","sizeSlug":"full"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/teacher-doodle-star.svg' ) ); ?>" alt="" style="width:22px;height:22px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Early Bird Registration Discount: Save 15% on 2026/27 tuition before November 30th.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill","backgroundColor":"primary","textColor":"base","fontSize":"small"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/#tuition-discount' ) ); ?>"><?php echo esc_html__( 'Claim Discount →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></aside>
<!-- /wp:group -->
