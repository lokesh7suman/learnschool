<?php
/**
 * Title: Header - Navigation with Search and Action
 * Slug: learnschool/header-4
 * Categories: header
 * Keywords: header, search, course-finder, navigation, portals, action
 * Description: Modern functional header featuring integrated curriculum search block alongside navigation and admissions action.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"bottom":{"color":"var:preset|color|base-subtle","width":"1px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--base-subtle);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"wk-logo-group","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group wk-logo-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-logo-icon"} -->
<figure class="wp-block-image size-full wk-logo-icon"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/branding/logo.svg' ) ); ?>" alt="<?php echo esc_attr__( 'LearnSchool Logo', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wk-logo-title"} -->
<p class="wk-logo-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">LearnSchool</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}}} -->
<div class="wp-block-group"><!-- wp:navigation {"className":"wk-header-nav","overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Home', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Programs', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#programs' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Teachers', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#teachers' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Blog', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/blog/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Contact', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#contact' ) ); ?>"} /-->
<!-- /wp:navigation -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search courses', 'learnschool' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search courses...', 'learnschool' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"9999px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/#signin' ) ); ?>" style="color:var(--wp--preset--color--contrast);font-weight:600;text-decoration:none"><?php echo esc_html__( 'Sign In', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill","backgroundColor":"primary","textColor":"base","fontSize":"small"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/#apply' ) ); ?>"><?php echo esc_html__( 'Apply Online', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
