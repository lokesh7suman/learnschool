<?php
/**
 * Title: Alert Bar - Emergency Notice
 * Slug: learnschool/alert-bar-2
 * Categories: banner, header
 * Keywords: alert, emergency, weather, notice, closure, warning
 * Description: High-visibility urgent alert bar with warning badge, emergency notice, and phone/status action links.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"aside","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"alert-bg","textColor":"alert-text","layout":{"type":"constrained"}} -->
<aside class="wp-block-group alignfull has-alert-text-color has-alert-bg-background-color has-text-color has-background" aria-label="<?php echo esc_attr__( 'Urgent notice', 'learnschool' ); ?>" style="padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"2px","bottom":"2px","left":"10px","right":"10px"}},"typography":{"fontWeight":"700"}},"backgroundColor":"amber-accessible","textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-amber-accessible-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:2px;padding-right:10px;padding-bottom:2px;padding-left:10px;font-weight:700"><?php echo esc_html__( 'URGENT NOTICE', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:500"><?php echo esc_html__( 'Severe Weather Advisory: All afternoon extracurricular activities and campus transit are rescheduled.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"9999px","width":"1px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"14px","right":"14px"}},"color":{"text":"var:preset|color|alert-text"}},"borderColor":"alert-text","fontSize":"small"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-border-color has-alert-text-border-color has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/#campus-status' ) ); ?>" style="border-width:1px;border-radius:9999px;color:var(--wp--preset--color--alert-text);padding-top:4px;padding-right:14px;padding-bottom:4px;padding-left:14px"><?php echo esc_html__( 'Campus Status Updates →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="tel:5550192834" style="color:var(--wp--preset--color--alert-text);text-decoration:underline;font-weight:600"><?php echo esc_html__( 'Helpline: (555) 019-2834', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></aside>
<!-- /wp:group -->
