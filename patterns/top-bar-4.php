<?php
/**
 * Title: Top Bar (Minimal Contact & Tour Booking)
 * Slug: learnschool/top-bar-4
 * Categories: header
 * Keywords: top bar, minimal, email, tour, contact
 * Description: Elegant lightweight utility bar with direct admissions email, campus visit reservation link, and secondary accent button.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"div","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"bottom":{"color":"var:preset|color|surface","width":"1px"}}},"backgroundColor":"base-subtle","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-color has-base-subtle-background-color has-text-color has-background" style="border-bottom-color:var(--wp--preset--color--surface);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="mailto:admissions@learnschool.edu" style="color:var(--wp--preset--color--contrast);text-decoration:none"><?php echo esc_html__( 'Email: admissions@learnschool.edu', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Cambridge Campus', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/#tour' ) ); ?>" style="color:var(--wp--preset--color--contrast);text-decoration:none"><?php echo esc_html__( 'Campus Tour Booking', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"12px","right":"12px"}}},"backgroundColor":"primary","textColor":"base","fontSize":"small"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/#apply' ) ); ?>" style="border-radius:9999px;padding-top:3px;padding-right:12px;padding-bottom:3px;padding-left:12px"><?php echo esc_html__( 'Apply Online (2026/27)', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
