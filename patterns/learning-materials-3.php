<?php
/**
 * Title: Learning Materials - 3-Column Resource Categories
 * Slug: learnschool/learning-materials-3
 * Categories: featured, services
 * Keywords: materials, cards, grid, resources, categories
 * Description: Three-column card grid categorizing learning materials into Illustrated Books, Interactive Digital Apps, and Hands-on Experiment Kits.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Comprehensive Resources', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Everything Your Child Needs to ', 'learnschool' ); ?><span class="wk-font-script" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Excel', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Balanced physical and digital tools tailored specifically for every developmental milestone and learning pace.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card","dimensions":{"minHeight":"100%"}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4);min-height:100%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Young child reading illustrated workbooks', 'learnschool' ); ?>" style="border-radius:16px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-2","margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-2"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-2)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"quiz-bg","textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-quiz-bg-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php esc_html_e( 'Ages 4–7', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"28px","height":"28px","sizeSlug":"full"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/materials-doodle-sparkle.svg' ) ); ?>" alt="" style="width:28px;height:28px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Illustrated ', 'learnschool' ); ?><span class="wk-font-script"><?php echo esc_html__( 'Workbooks', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php esc_html_e( 'Vibrant, tactile activity books filled with phonics puzzles, early math discovery games, and joyful coloring adventures.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"auto"}}}} -->
<div class="wp-block-buttons" style="margin-top:auto"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#workbooks"><?php esc_html_e( 'Explore Books →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card","dimensions":{"minHeight":"100%"}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4);min-height:100%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Student practicing on interactive e-learning tablet app', 'learnschool' ); ?>" style="border-radius:16px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-2","margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-2"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-2)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"activities-bg","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-activities-bg-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php esc_html_e( 'Ages 6–10', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"28px","height":"28px","sizeSlug":"full"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/materials-doodle-sparkle.svg' ) ); ?>" alt="" style="width:28px;height:28px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Interactive ', 'learnschool' ); ?><span class="wk-font-script"><?php echo esc_html__( 'E-Learning', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php esc_html_e( 'Adaptive touch applications featuring voice-guided reading, animated logic games, and instant encouraging feedback.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"auto"}}}} -->
<div class="wp-block-buttons" style="margin-top:auto"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#elearning"><?php esc_html_e( 'Explore Apps →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card","dimensions":{"minHeight":"100%"}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4);min-height:100%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-3.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Young learner opening science and craft project kit', 'learnschool' ); ?>" style="border-radius:16px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-2","margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-2"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-2)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"secondary","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-secondary-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php esc_html_e( 'All Ages', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"28px","height":"28px","sizeSlug":"full"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/materials-doodle-sparkle.svg' ) ); ?>" alt="" style="width:28px;height:28px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Science &amp; ', 'learnschool' ); ?><span class="wk-font-script"><?php echo esc_html__( 'Craft Kits', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php esc_html_e( 'Curated monthly maker boxes packed with safe real-world petri dishes, wooden gear sets, and clay sculpting materials.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"auto"}}}} -->
<div class="wp-block-buttons" style="margin-top:auto"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#craft-kits"><?php esc_html_e( 'Explore Kits →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
