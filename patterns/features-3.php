<?php
/**
 * Title: Features - Split Media and Feature Stack
 * Slug: learnschool/features-3
 * Categories: services, featured
 * Keywords: split, media, photo, benefits, showcase, student
 * Description: Two-column showcase pairing a large student photo with a vertical stack of three rich feature benefit items.
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
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"border":{"radius":"28px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:28px;box-shadow:var(--wp--preset--shadow--elevated);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Engaged student exploring interactive learning materials', 'learnschool' ); ?>" style="border-radius:20px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"},"margin":{"top":"var:preset|spacing|step-3"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:9999px;box-shadow:var(--wp--preset--shadow--card);margin-top:var(--wp--preset--spacing--step-3);padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"amber-accessible","fontSize":"small"} -->
<p class="has-amber-accessible-color has-text-color has-small-font-size" style="font-weight:700"><?php esc_html_e( '⭐ 98% Parent Satisfaction', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'The LearnSchool Difference', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Designed to Make Children ', 'learnschool' ); ?><span class="wk-font-script" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Fall in Love', 'learnschool' ); ?></span><?php echo esc_html__( ' with Learning', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Our child-first pedagogy blends structured academic foundations with self-directed creative exploration, ensuring every child thrives at their own pace.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-4","margin":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--step-4);margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"44px","height":"44px","sizeSlug":"full"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-quiz-note.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Adaptive pace icon', 'learnschool' ); ?>" style="width:44px;height:44px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Adaptive Learning Pace', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php esc_html_e( 'Intelligent challenge levels automatically adjust to each learner’s progress, preventing frustration and boosting lasting confidence.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"44px","height":"44px","sizeSlug":"full"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-creative-activity.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Zero distraction icon', 'learnschool' ); ?>" style="width:44px;height:44px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Zero Distraction Environment', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php esc_html_e( 'An ad-free, completely safe digital space dedicated entirely to immersive, curiosity-driven exploration and discovery.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"44px","height":"44px","sizeSlug":"full"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-game-controller.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Teacher guidance icon', 'learnschool' ); ?>" style="width:44px;height:44px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Certified Teacher Guidance', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php esc_html_e( 'Accredited elementary educators monitor milestones and deliver weekly actionable insights directly to parents.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#curriculum"><?php esc_html_e( 'Explore Full Curriculum →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->