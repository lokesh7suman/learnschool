<?php
/**
 * Title: Header - Two-Row with Top Utility Bar
 * Slug: learnschool/header-2
 * Categories: header
 * Block Types: core/template-part/header
 * Keywords: header, two-row, utility, top-bar, contact, portals, navigation
 * Description: Two-tier header featuring a top utility contact strip above the primary navigation bar.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"header","align":"full","layout":{"type":"default"}} -->
<header class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","textColor":"contrast-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-subtle-color has-base-subtle-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="tel:5550192834" style="color:var(--wp--preset--color--contrast-subtle);text-decoration:none"><?php echo esc_html__( 'Call: (555) 019-2834', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Mon–Fri: 8:00 AM – 5:00 PM', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/#portal' ) ); ?>" style="color:var(--wp--preset--color--contrast-subtle);text-decoration:none"><?php echo esc_html__( 'Parent Portal', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/#directory' ) ); ?>" style="color:var(--wp--preset--color--contrast-subtle);text-decoration:none"><?php echo esc_html__( 'Staff Directory', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-1"}}} -->
<div class="wp-block-group"><!-- wp:image {"width":"18px","height":"18px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-1.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Instagram', 'learnschool' ); ?>" style="width:18px;height:18px"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"18px","height":"18px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-2.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Facebook', 'learnschool' ); ?>" style="width:18px;height:18px"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"18px","height":"18px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-3.svg' ) ); ?>" alt="<?php echo esc_attr__( 'X', 'learnschool' ); ?>" style="width:18px;height:18px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"bottom":{"color":"var:preset|color|base-subtle","width":"1px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--base-subtle);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"wk-logo-group","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group wk-logo-group"><!-- wp:site-logo {"width":34,"className":"wk-logo-icon","shouldSyncIcon":false} /-->

<!-- wp:site-title {"className":"wk-logo-title","level":0,"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"className":"wk-header-nav","overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Home', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Programs', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#programs' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Admissions', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#admissions' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Teachers', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#teachers' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Blog', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/blog/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Contact', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/#contact' ) ); ?>"} /-->
<!-- /wp:navigation -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill","backgroundColor":"primary","textColor":"base"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/#enroll' ) ); ?>"><?php echo esc_html__( 'Enroll Now', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
