<?php
/**
 * Title: Header with Right-Aligned Navigation
 * Slug: learnschool/header-right-aligned
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Clean header with site logo and title on the left, primary navigation aligned to the right, and call-to-action button.
 * Keywords: header, navigation, logo, menu, clean, right-aligned, school, academics, modern
 * Viewport Width: 1280
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$learnschool_news_url = function_exists( 'learnschool_get_news_url' ) ? learnschool_get_news_url() : home_url( '/news/' );
?>
<!-- wp:group {"align":"full","className":"learnschool-header-main","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"bottom":{"color":"var:preset|color|border-default","width":"1px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull learnschool-header-main has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-default);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":36,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0,"isLink":true,"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
<!-- wp:home-link {"label":"<?php echo esc_attr__( 'Home', 'learnschool' ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'About Us', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/about/' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Programs', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/programs/' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Admissions', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/admissions/' ) ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'News', 'learnschool' ); ?>","url":"<?php echo esc_url( $learnschool_news_url ); ?>","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Contact', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/contact/' ) ); ?>","kind":"custom"} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"className":"learnschool-header-actions"} -->
<div class="wp-block-buttons learnschool-header-actions"><!-- wp:button {"className":"is-style-learnschool-pill","backgroundColor":"primary","textColor":"base"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/admissions/' ) ); ?>"><?php echo esc_html__( 'Enroll Now', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
