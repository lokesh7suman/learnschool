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
?>
<!-- wp:group {"align":"full","className":"learnschool-footer-studio","style":{"border":{"top":{"color":"var:preset|color|border","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull learnschool-footer-studio has-contrast-color has-base-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":36,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0,"isLink":true,"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'Playful, nurturing early education built for curious young learners.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="learnschool-footer-doodles" aria-hidden="true">
	<img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/doodles/sections/sunburst-yellow.svg' ) ); ?>" alt="" width="34" height="34" />
	<img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/doodles/hero/concentric-circles.svg' ) ); ?>" alt="" width="34" height="34" />
	<img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/doodles/sections/card-scribble.svg' ) ); ?>" alt="" width="56" height="34" />
</div>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16%"} -->
<div class="wp-block-column" style="flex-basis:16%"><!-- wp:list {"fontSize":"small","className":"is-style-learnschool-clean-list"} -->
<ul class="wp-block-list has-small-font-size is-style-learnschool-clean-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Home', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/academics/' ) ); ?>"><?php echo esc_html__( 'Programs', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"><?php echo esc_html__( 'About', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about-us/leadership/faculty-directory/' ) ); ?>"><?php echo esc_html__( 'Faculty', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16%"} -->
<div class="wp-block-column" style="flex-basis:16%"><!-- wp:list {"fontSize":"small","className":"is-style-learnschool-clean-list"} -->
<ul class="wp-block-list has-small-font-size is-style-learnschool-clean-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/admissions/how-to-apply/' ) ); ?>"><?php echo esc_html__( 'Admissions', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/contact-us/parent-portal/' ) ); ?>"><?php echo esc_html__( 'Parent Portal', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/academics/' ) ); ?>"><?php echo esc_html__( 'Curriculum', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php echo esc_html__( 'Our Blog', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16%"} -->
<div class="wp-block-column" style="flex-basis:16%"><!-- wp:list {"fontSize":"small","className":"is-style-learnschool-clean-list"} -->
<ul class="wp-block-list has-small-font-size is-style-learnschool-clean-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php echo esc_html__( 'Contact', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php echo esc_html__( 'Privacy Policy', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php echo esc_html__( 'Terms of Service', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/accessibility/' ) ); ?>"><?php echo esc_html__( 'Accessibility', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%"><!-- wp:social-links {"iconColor":"primary","size":"has-normal-icon-size","className":"is-style-logos-only learnschool-footer-social","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-2","left":"var:preset|spacing|step-2"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only learnschool-footer-social">
<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
<!-- wp:social-link {"url":"https://x.com","service":"x"} /-->
</ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
