<?php
/**
 * Title: Learning Materials
 * Slug: learnschool/learning-materials
 * Categories: services, learnschool
 * Description: Showcase section with student photography and enjoyable learning materials.
 * Keywords: materials, showcase, learning, education
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","className":"wk-materials-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-materials-wrapper"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"wk-materials-container"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center wk-materials-container"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"wk-materials-text-col"} -->
<div class="wp-block-column is-vertically-aligned-center wk-materials-text-col" style="flex-basis:50%"><!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'The learning materials', 'learnschool' ); ?><br><?php echo esc_html__( 'provided are', 'learnschool' ); ?> <span class="wk-accent-enjoyable codeclove-accent-enjoyable"><?php echo esc_html__( 'enjoyable', 'learnschool' ); ?></span><br><?php echo esc_html__( 'for children', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-materials-desc"} -->
<p class="wk-materials-desc"><?php echo esc_html__( "Don't worry! Your children will be having a fun time while learning with our materials that are easy to understand.", 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#materials"><?php echo esc_html__( 'Learn more', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"border":{"radius":"28px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-subtle-background-color has-background" style="border-radius:28px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Student smiling while learning', 'learnschool' ); ?>" style="border-radius:20px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-2","margin":{"top":"var:preset|spacing|step-3"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"primary","textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-primary-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php echo esc_html__( 'Active Learning', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/materials-doodle-sparkle.svg' ) ); ?>" alt="" style="width:32px;height:32px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
