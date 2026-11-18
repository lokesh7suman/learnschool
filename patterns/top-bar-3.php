<?php
/**
 * Title: Top Bar (3-Segment with Quick Actions & Campus Status)
 * Slug: learnschool/top-bar-3
 * Categories: header
 * Keywords: top bar, status, portal, login, emergency
 * Description: Clean three-segment utility header with telephone contact on the left, an alert/campus status pill in the center, and quick-login portal buttons on the right.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"div","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="tel:5552345678" style="color:var(--wp--preset--color--base);text-decoration:none"><?php echo esc_html__( 'Admissions: (555) 234-5678', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="tel:5550192834" style="color:var(--wp--preset--color--secondary);text-decoration:none"><?php echo esc_html__( 'Helpline: (555) 019-2834', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600"><span style="display:inline-flex;align-items:center"><span style="display:inline-block;width:8px;height:8px;border-radius:9999px;background-color:#22c55e;margin-right:8px" aria-hidden="true"></span><span><?php echo esc_html__( 'Campus Status: Normal Operations — Classes in Session', 'learnschool' ); ?></span></span></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/#portal' ) ); ?>" style="color:var(--wp--preset--color--base);text-decoration:none"><?php echo esc_html__( 'Parent Portal Login', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/#tuition' ) ); ?>" style="color:var(--wp--preset--color--secondary);text-decoration:none;font-weight:700"><?php echo esc_html__( 'Tuition Payment', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
