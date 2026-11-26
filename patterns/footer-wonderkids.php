<?php
/**
 * Title: Light Studio Footer with Doodles
 * Slug: learnschool/footer-wonderkids
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Clean light footer featuring brand logo with decorative mini doodles, three compact sitemap link columns, and circular outline social buttons.
 * Keywords: footer, clean, doodles, sitemap, links, social
 * Viewport Width: 1280
 * Inserter: true
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$learnschool_posts_page = ( 'page' === get_option( 'show_on_front' ) ) ? absint( get_option( 'page_for_posts' ) ) : 0;
$learnschool_blog_url   = home_url( '/#blog' );
if ( $learnschool_posts_page > 0 ) {
	$learnschool_permalink = get_permalink( $learnschool_posts_page );
	if ( is_string( $learnschool_permalink ) ) {
		$learnschool_blog_url = $learnschool_permalink;
	}
}
$learnschool_privacy_url = get_privacy_policy_url();
if ( '' === $learnschool_privacy_url ) {
	$learnschool_privacy_url = home_url( '/' );
}
?>
<!-- wp:group {"align":"full","style":{"border":{"top":{"color":"var:preset|color|border","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-color has-base-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":36,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0,"isLink":true,"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'Playful, nurturing early education built for curious young learners.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="learnschool-footer-doodles" aria-hidden="true">
	<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/sections/sunburst-yellow.svg' ) ); ?>" alt="" width="34" height="34" />
	<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/hero/concentric-circles.svg' ) ); ?>" alt="" width="34" height="34" />
	<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/sections/card-scribble.svg' ) ); ?>" alt="" width="56" height="34" />
</div>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16%"} -->
<div class="wp-block-column" style="flex-basis:16%"><!-- wp:list {"fontSize":"small","className":"is-style-learnschool-clean-list"} -->
<ul class="wp-block-list has-small-font-size is-style-learnschool-clean-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Home', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Programs', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#materials' ) ); ?>"><?php echo esc_html__( 'Curriculum', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#faculty' ) ); ?>"><?php echo esc_html__( 'Faculty', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16%"} -->
<div class="wp-block-column" style="flex-basis:16%"><!-- wp:list {"fontSize":"small","className":"is-style-learnschool-clean-list"} -->
<ul class="wp-block-list has-small-font-size is-style-learnschool-clean-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>"><?php echo esc_html__( 'Admissions', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php echo esc_html__( 'Questions & FAQ', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#materials' ) ); ?>"><?php echo esc_html__( 'Learning Kits', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( $learnschool_blog_url ); ?>"><?php echo esc_html__( 'Our Blog', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16%"} -->
<div class="wp-block-column" style="flex-basis:16%"><!-- wp:list {"fontSize":"small","className":"is-style-learnschool-clean-list"} -->
<ul class="wp-block-list has-small-font-size is-style-learnschool-clean-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>"><?php echo esc_html__( 'Schedule a Tour', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( $learnschool_privacy_url ); ?>"><?php echo esc_html__( 'Privacy Policy', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Activities', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php echo esc_html__( 'Support', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:social-links {"iconColor":"base","iconBackgroundColor":"primary","size":"has-normal-icon-size","className":"is-style-default learnschool-footer-social","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-2","left":"var:preset|spacing|step-2"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default learnschool-footer-social">
<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
<!-- wp:social-link {"url":"https://x.com","service":"x"} /-->
<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
<!-- wp:social-link {"url":"https://whatsapp.com","service":"whatsapp"} /-->
</ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
