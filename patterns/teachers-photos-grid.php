<?php
/**
 * Title: Faculty & Teacher Photo Cards Grid
 * Slug: learnschool/teachers-photos-grid
 * Categories: learnschool/team
 * Description: Four-column grid of educator portrait photo cards with rounded styling, role badges, bios, and pattern overrides.
 * Keywords: teachers, faculty, photos, portraits, educators, team, staff
 * Viewport Width: 1280
 * Inserter: true
 *
 * @package LearnSchool
 * @since 1.2.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"},"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Meet Our Dedicated ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-wavy has-primary-color"><?php echo esc_html__( 'Educators', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Degreed, CPR-certified, and compassionate early-childhood specialists devoted to each child\'s emotional and cognitive growth.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%"><!-- wp:group {"style":{"border":{"radius":"20px","width":"1px","style":"solid","color":"var:preset|color|border"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"},"blockGap":"var:preset|spacing|step-2"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-base-background-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-radius:20px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","lineHeight":"1"}},"textColor":"primary","fontSize":"xx-large"} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size" style="font-weight:700;line-height:1">26+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.4","fontWeight":"600"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="font-weight:600;line-height:1.4"><?php echo esc_html__( 'Years Combined Teaching Experience', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-4","left":"0","right":"0"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-4);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"metadata":{"name":"teacher_photo_1","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/realistic-teacher-kristin.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Kristin Watson, Early STEM Lead', 'learnschool' ); ?>" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-2"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-2","right":"var:preset|spacing|step-2"}}},"backgroundColor":"primary-light","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-primary-light-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-2)"><!-- wp:paragraph {"metadata":{"name":"teacher_role_1","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700"}},"textColor":"primary-dark","fontSize":"x-small"} -->
<p class="has-primary-dark-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Early STEM Lead', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"metadata":{"name":"teacher_name_1","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-1);margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Kristin Watson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"teacher_bio_1","bindings":{"content":{"source":"core/pattern-overrides"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Fostering natural curiosity through outdoor botany and hands-on laboratory quests.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Degree: M.Ed', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Tenure: 8 Yrs', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-4","left":"0","right":"0"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-4);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"metadata":{"name":"teacher_photo_2","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/realistic-teacher-jenny.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Jenny Wilson, Phonics & Literacy teacher', 'learnschool' ); ?>" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-2"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-2","right":"var:preset|spacing|step-2"}}},"backgroundColor":"warning","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-warning-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-2)"><!-- wp:paragraph {"metadata":{"name":"teacher_role_2","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700"}},"textColor":"secondary-dark","fontSize":"x-small"} -->
<p class="has-secondary-dark-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Phonics & Literacy', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"metadata":{"name":"teacher_name_2","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-1);margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Jenny Wilson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"teacher_bio_2","bindings":{"content":{"source":"core/pattern-overrides"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Creating immersive phonics worlds, speech development, and puppet storytelling.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Degree: B.A. ECE', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Tenure: 6 Yrs', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-4","left":"0","right":"0"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-4);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"metadata":{"name":"teacher_photo_3","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/realistic-teacher-marcus.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Marcus Hayes, Music & Movement teacher', 'learnschool' ); ?>" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-2"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-2","right":"var:preset|spacing|step-2"}}},"backgroundColor":"success-light","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-success-light-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-2)"><!-- wp:paragraph {"metadata":{"name":"teacher_role_3","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700"}},"textColor":"success","fontSize":"x-small"} -->
<p class="has-success-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Music & Movement', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"metadata":{"name":"teacher_name_3","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-1);margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Marcus Hayes', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"teacher_bio_3","bindings":{"content":{"source":"core/pattern-overrides"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Orff Schulwerk rhythm specialist unlocking cognitive focus through melody and movement.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Degree: B.Mus', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Tenure: 5 Yrs', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-4","left":"0","right":"0"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-4);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"metadata":{"name":"teacher_photo_4","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/realistic-teacher-sofia.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Sofia Chen, Visual Arts Studio teacher', 'learnschool' ); ?>" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-2"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-2","right":"var:preset|spacing|step-2"}}},"backgroundColor":"rose-light","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-rose-light-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-2)"><!-- wp:paragraph {"metadata":{"name":"teacher_role_4","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700"}},"textColor":"rose","fontSize":"x-small"} -->
<p class="has-rose-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Visual Arts Studio', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"metadata":{"name":"teacher_name_4","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-1);margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Sofia Chen', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"teacher_bio_4","bindings":{"content":{"source":"core/pattern-overrides"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Guiding fine motor coordination and joyful sensory creativity with clay and tempera.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Degree: B.F.A.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Tenure: 4 Yrs', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
