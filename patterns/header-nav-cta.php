<?php
/**
 * Title: Header with Navigation & Tour CTA
 * Slug: learnschool/header-nav-cta
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Clean mobile-first header with logo, multi-level school navigation, and Sign In & Contact Us action buttons.
 * Keywords: header, navigation, logo, menu, tour, cta, contact, signin, school, academics, admissions
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
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":36,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0,"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand","fontWeight":"700"}},"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","style":{"typography":{"fontWeight":"600"}},"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/contact-us/parent-portal/' ) ); ?>"><?php echo esc_html__( 'Sign In', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php echo esc_html__( 'Contact Us', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
