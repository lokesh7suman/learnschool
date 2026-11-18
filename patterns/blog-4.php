<?php
/**
 * Title: Blog (Horizontal Article Cards)
 * Slug: learnschool/blog-4
 * Categories: posts
 * Inserter: yes
 * Keywords: horizontal, feed, list, articles, reading, cards
 * Description: Stacked horizontal article cards with side-by-side thumbnail and metadata for comprehensive reading lists.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Curated Reading', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-2"}}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--step-1);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Educational Insights &amp;', 'learnschool' ); ?> <span class="wk-accent-blog"><?php echo esc_html__( 'Perspectives', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size"><?php esc_html_e( 'In-depth articles from our educators on childhood development, creative learning, and family pedagogy.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"18px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/blog-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Students in robotics lab', 'learnschool' ); ?>" style="border-radius:18px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-1)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"border":{"radius":"9999px"}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-primary-light-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Innovation', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( '⏱️ 5 min read', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2)"><a href="#post-h-1" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Robotics Lab: Inside Our Award-Winning Elementary Team', 'learnschool' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-3)"><?php esc_html_e( 'How young students build autonomous sensors, cultivate algorithmic logic, and discover team engineering without fear of failure.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'By Dr. Kristin Watson • Head of Science', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#post-h-1"><?php echo esc_html__( 'Read Article →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"18px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/blog-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Visual arts student painting', 'learnschool' ); ?>" style="border-radius:18px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-1)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"border":{"radius":"9999px"}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-primary-light-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Creativity', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( '⏱️ 4 min read', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2)"><a href="#post-h-2" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Why Visual Arts Education Boosts Mathematical Reasoning', 'learnschool' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-3)"><?php esc_html_e( 'Exploring spatial reasoning, geometric patterns, and cognitive discipline through drawing, color theory, and sculptural design.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'By Jenny Wilson • Visual Arts Lead', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#post-h-2"><?php echo esc_html__( 'Read Article →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"18px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/blog-3.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Students organizing food drive donations', 'learnschool' ); ?>" style="border-radius:18px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-1)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"border":{"radius":"9999px"}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-primary-light-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Community', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( '⏱️ 3 min read', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2)"><a href="#post-h-3" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Building Compassionate Leaders: Our Annual Charity Food Drive', 'learnschool' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-3)"><?php esc_html_e( 'Teaching empathy, civic responsibility, and community action by mobilizing students to support local food shelters and families.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'By Jacob Jones • Mathematics &amp; Service Mentor', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#post-h-3"><?php echo esc_html__( 'Read Article →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->