<?php
/**
 * Title: Blog (Featured Story with List)
 * Slug: learnschool/blog-2
 * Categories: posts
 * Inserter: yes
 * Keywords: blog, magazine, featured, article, news, editorial
 * Description: Magazine-style blog layout featuring one prominent lead story on the left and a stacked list of recent articles on the right.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'School News &amp;', 'learnschool' ); ?> <span class="wk-accent-blog"><?php echo esc_html__( 'Stories', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php echo esc_html__( 'View All News →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"border":{"radius":"24px"}},"backgroundColor":"base-subtle","className":"is-style-learnschool-card-large","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card-large has-base-subtle-background-color has-background" style="border-radius:24px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/blog-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Students collaborating in classroom', 'learnschool' ); ?>" style="border-radius:16px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3","margin":{"bottom":"var:preset|spacing|step-2"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-2)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"border":{"radius":"9999px"}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-primary-light-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Campus Highlight', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'October 14, 2026', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2)"><a href="#post-lead" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'How Project-Based Learning Sparks Creative Confidence', 'learnschool' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7;margin-bottom:var(--wp--preset--spacing--step-4)"><?php esc_html_e( 'Discover how collaborative hands-on projects, student-driven inquiry, and iterative creative cycles develop emotional resilience, critical thinking, and genuine excitement in the elementary classroom.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#post-lead"><?php echo esc_html__( 'Read Full Story →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px"}},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-3","left":"var:preset|spacing|step-3"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%"><!-- wp:image {"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/blog-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Science experiment in classroom', 'learnschool' ); ?>" style="border-radius:16px;object-fit:cover;width:120px;height:120px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Science', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><a href="#post-mini-1" style="color:inherit;text-decoration:none"><?php echo esc_html__( '10 Fun Kitchen Experiments for Young Scientists', 'learnschool' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}}} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2)"><?php esc_html_e( 'October 8, 2026', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#post-mini-1"><?php echo esc_html__( 'Read Article →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px"}},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-3","left":"var:preset|spacing|step-3"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%"><!-- wp:image {"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/blog-3.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Children exploring nature outside', 'learnschool' ); ?>" style="border-radius:16px;object-fit:cover;width:120px;height:120px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"secondary-dark","fontSize":"small"} -->
<p class="has-secondary-dark-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Activities', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><a href="#post-mini-2" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Outdoor Nature Scavenger Hunts for Elementary Kids', 'learnschool' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}}} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2)"><?php esc_html_e( 'September 29, 2026', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#post-mini-2"><?php echo esc_html__( 'Read Article →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->