<?php
/**
 * Title: Header - Centered Logo and Navigation
 * Slug: learnschool/header-3
 * Categories: header
 * Keywords: header, centered, crest, academy, traditional, menu
 * Description: Traditional academy-style header with centered logo badge and balanced horizontal menu below.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"align":"center","width":"52px","height":"52px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/branding/logo.svg' ) ); ?>" alt="<?php echo esc_attr__( 'LearnSchool Crest', 'learnschool' ); ?>" style="width:52px;height:52px"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"large","className":"wk-logo-title"} -->
<p class="has-text-align-center has-large-font-size wk-logo-title" style="margin-top:0;margin-bottom:0;font-weight:700"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration:none;color:inherit"><?php echo esc_html__( 'LearnSchool Academy', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"align":"wide","className":"is-style-gradient-pill","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3"}}}} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-gradient-pill" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-3)"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-purple","fontSize":"small"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/#tour' ) ); ?>"><?php echo esc_html__( 'Campus Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:navigation {"className":"wk-header-nav","overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Home', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Academics', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#academics' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Admissions', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#admissions' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Faculty', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#faculty' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'News', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/blog/' ) ); ?>"} /-->
<!-- /wp:navigation -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-yellow-pill","backgroundColor":"secondary","textColor":"contrast","fontSize":"small"} -->
<div class="wp-block-button is-style-yellow-pill"><a class="wp-block-button__link has-contrast-color has-secondary-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/#apply' ) ); ?>"><?php echo esc_html__( 'Apply Now', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
