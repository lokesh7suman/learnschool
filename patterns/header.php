<?php
/**
 * Title: Header
 * Slug: learnschool/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with logo, navigation links, and contact button.
 * Keywords: header, navigation, logo, menu
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","className":"wk-header-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-header-wrapper"><!-- wp:group {"align":"wide","className":"wk-header-inner","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide wk-header-inner"><!-- wp:group {"className":"wk-logo-group","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group wk-logo-group"><!-- wp:site-logo {"width":34,"className":"wk-logo-icon","shouldSyncIcon":false} /-->

<!-- wp:site-title {"className":"wk-logo-title","level":0,"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"className":"wk-header-nav","overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Home', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Features', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#features' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Materials', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#materials' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Teachers', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#teachers' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Blog', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/blog/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'FAQ', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#faq' ) ); ?>"} /-->
<!-- /wp:navigation -->

<!-- wp:group {"className":"wk-header-actions","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group wk-header-actions"><!-- wp:paragraph {"className":"wk-signin-link"} -->
<p class="wk-signin-link"><a href="<?php echo esc_url( home_url( '/#signin' ) ); ?>"><?php echo esc_html__( 'Sign In', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-purple wk-header-contact-btn"} -->
<div class="wp-block-button is-style-outline-purple wk-header-contact-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php echo esc_html__( 'Contact Us', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
