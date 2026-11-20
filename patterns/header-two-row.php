<?php
/**
 * Title: Header Two-Row with Utility Bar
 * Slug: learnschool/header-two-row
 * Categories: header
 * Block Types: core/template-part/header
 * Keywords: header, two-row, utility, top-bar, contact, portals, navigation, school, academics
 * Description: Two-tier header featuring a top utility contact strip above the primary multi-level navigation bar.
 * Inserter: true
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
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/contact-us/parent-portal/' ) ); ?>" style="color:var(--wp--preset--color--contrast-subtle);text-decoration:none"><?php echo esc_html__( 'Parent Portal', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/about-us/leadership/faculty-directory/' ) ); ?>" style="color:var(--wp--preset--color--contrast-subtle);text-decoration:none"><?php echo esc_html__( 'Staff Directory', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"contrast-subtle","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-1","left":"var:preset|spacing|step-1"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
<!-- wp:social-link {"url":"https://x.com","service":"x"} /-->
</ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"bottom":{"color":"var:preset|color|base-subtle","width":"1px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--base-subtle);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":34,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0,"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} /-->

<!-- wp:buttons {"className":"learnschool-header-actions"} -->
<div class="wp-block-buttons learnschool-header-actions"><!-- wp:button {"className":"is-style-learnschool-pill","backgroundColor":"primary","textColor":"base"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/admissions/how-to-apply/' ) ); ?>"><?php echo esc_html__( 'Enroll Now', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
