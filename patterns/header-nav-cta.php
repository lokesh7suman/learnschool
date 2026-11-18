<?php
/**
 * Title: Header with Navigation & Tour CTA
 * Slug: learnschool/header-nav-cta
 * Categories: header, learnschool
 * Block Types: core/template-part/header
 * Description: Clean mobile-first header with logo, navigation links, and a prominent Book a Tour pill CTA button.
 * Keywords: header, navigation, logo, menu, tour, cta
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
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0,"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand","fontWeight":"700"}},"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","style":{"typography":{"fontWeight":"600"}},"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Home', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Programs', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#programs' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Admissions', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#admissions' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Curriculum', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#curriculum' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Educators', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#educators' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Parent FAQs', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#faq' ) ); ?>"} /-->
<!-- /wp:navigation -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color" style="font-weight:600"><a href="<?php echo esc_url( 'tel:5551234567' ); ?>" style="text-decoration:none;color:inherit"><?php echo esc_html__( '(555) 123-4567', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill","backgroundColor":"primary","textColor":"base"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/#tour' ) ); ?>"><?php echo esc_html__( 'Book a Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
