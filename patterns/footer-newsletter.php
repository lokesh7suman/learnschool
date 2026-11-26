<?php
/**
 * Title: Footer with Newsletter & Legal Bar
 * Slug: learnschool/footer-newsletter
 * Categories: footer
 * Block Types: core/template-part/footer
 * Keywords: footer, newsletter, sitemap, legal, columns, mega-footer
 * Description: Four-column footer featuring newsletter signup, categorized sitemaps, social links, and bottom legal bar.
 * Inserter: true
 * Viewport Width: 1280
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":34,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0,"isLink":true,"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-3"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Empowering young learners through interactive problem-solving, cognitive discovery, and a caring school community.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( '100 Academy Way, Cambridge, MA', 'learnschool' ); ?><br><a href="<?php echo esc_url( 'tel:5552345678' ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Phone: (555) 234-5678', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( 'mailto:info@learnschool.edu' ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Email: info@learnschool.edu', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":2,"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Programs', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"fontSize":"small","className":"is-style-learnschool-clean-list"} -->
<ul class="wp-block-list has-small-font-size is-style-learnschool-clean-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Early Learning', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Primary STEM', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Arts & Music', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Summer Camps', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#materials' ) ); ?>"><?php echo esc_html__( 'Online Modules', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":2,"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'School Life', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"fontSize":"small","className":"is-style-learnschool-clean-list"} -->
<ul class="wp-block-list has-small-font-size is-style-learnschool-clean-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>"><?php echo esc_html__( 'Admissions', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>"><?php echo esc_html__( 'Parent Portal', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#faculty' ) ); ?>"><?php echo esc_html__( 'Faculty Directory', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>"><?php echo esc_html__( 'Academic Calendar', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php echo esc_html__( 'Campus Safety', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"level":2,"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Stay Connected', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-3"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Stay up to date with weekly school bulletins, upcoming events, and admissions notices.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>"><?php echo esc_html__( 'Contact Us', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:social-links {"iconColor":"primary","iconBackgroundColor":"base-subtle","size":"has-normal-icon-size","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-2","left":"var:preset|spacing|step-2"},"margin":{"top":"var:preset|spacing|step-3"}}}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--step-3)">
<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
<!-- wp:social-link {"url":"https://x.com","service":"x"} /-->
<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /-->
</ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"align":"wide","className":"is-style-learnschool-gradient-pill","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-4"}}}} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-learnschool-gradient-pill" style="margin-top:var(--wp--preset--spacing--step-5);margin-bottom:var(--wp--preset--spacing--step-4)"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"learnschool/copyright"}}},"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( '© LearnSchool', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><a href="<?php echo esc_url( '' !== get_privacy_policy_url() ? get_privacy_policy_url() : home_url( '/' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Privacy Policy', 'learnschool' ); ?></a> &bull; <a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'FAQ', 'learnschool' ); ?></a> &bull; <a href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Admissions', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
