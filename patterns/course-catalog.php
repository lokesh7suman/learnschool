<?php
/**
 * Title: Course & Program Catalog Grid
 * Slug: learnschool/course-catalog
 * Categories: services, learnschool
 * Keywords: courses, programs, curriculum, academy, classes, subjects
 * Description: Academic course and program showcase grid with age brackets, duration badges, teacher info, and enrollment links.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading has-text-align-center wk-section-title"><?php echo esc_html__( 'Explore Our Learning Programs', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"textColor":"contrast-subtle"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--step-6)"><?php echo esc_html__( 'Age-appropriate, hands-on learning experiences designed to ignite curiosity and foster lifelong skills.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-5","left":"0","right":"0"}}},"backgroundColor":"base-subtle","shadow":"var:preset|shadow|card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-5);padding-left:0"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Early Literacy & Phonics student', 'learnschool' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4","top":"var:preset|spacing|step-3"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"2px","bottom":"2px","left":"10px","right":"10px"}}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"x-small"} -->
<p class="has-primary-dark-color has-primary-light-background-color has-text-color has-background has-x-small-font-size" style="border-radius:9999px;padding-top:2px;padding-right:10px;padding-bottom:2px;padding-left:10px"><strong><?php echo esc_html__( 'Ages 3–5', 'learnschool' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size"><?php echo esc_html__( '12 Weeks', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Early Literacy & Phonics', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Building strong foundations through phonemic awareness, joyful storytelling, and interactive alphabet quests.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--step-4)"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#course-details"><?php echo esc_html__( 'View Program', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-5","left":"0","right":"0"}}},"backgroundColor":"base-subtle","shadow":"var:preset|shadow|card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-5);padding-left:0"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Young Inventors STEM Lab student', 'learnschool' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4","top":"var:preset|spacing|step-3"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"2px","bottom":"2px","left":"10px","right":"10px"}}},"backgroundColor":"accent","textColor":"contrast","fontSize":"x-small"} -->
<p class="has-contrast-color has-accent-background-color has-text-color has-background has-x-small-font-size" style="border-radius:9999px;padding-top:2px;padding-right:10px;padding-bottom:2px;padding-left:10px"><strong><?php echo esc_html__( 'Ages 6–9', 'learnschool' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size"><?php echo esc_html__( '16 Weeks', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Young Inventors STEM Lab', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Hands-on scientific inquiry, robotics kits, and logic games that demystify nature and engineering principles.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--step-4)"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#course-details"><?php echo esc_html__( 'View Program', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-5","left":"0","right":"0"}}},"backgroundColor":"base-subtle","shadow":"var:preset|shadow|card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="box-shadow:var(--wp--preset--shadow--card);padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-5);padding-left:0"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-3.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Creative Arts & Music student', 'learnschool' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4","top":"var:preset|spacing|step-3"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"2px","bottom":"2px","left":"10px","right":"10px"}}},"backgroundColor":"secondary","textColor":"contrast","fontSize":"x-small"} -->
<p class="has-contrast-color has-secondary-background-color has-text-color has-background has-x-small-font-size" style="border-radius:9999px;padding-top:2px;padding-right:10px;padding-bottom:2px;padding-left:10px"><strong><?php echo esc_html__( 'Ages 7–12', 'learnschool' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size"><?php echo esc_html__( 'Year-round', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Creative Arts & Expression', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Visual arts, ceramics, digital storytelling, and choir that empower personal expression and self-confidence.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--step-4)"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#course-details"><?php echo esc_html__( 'View Program', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
