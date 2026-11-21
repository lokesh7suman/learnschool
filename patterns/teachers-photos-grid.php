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
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Meet Our Dedicated ', 'learnschool' ); ?><span class="learnschool-script"><span class="learnschool-underline-wavy" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Educators', 'learnschool' ); ?></span></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Degreed, CPR-certified, and compassionate early-childhood specialists devoted to each child’s emotional and cognitive growth.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"metadata":{"name":"teacher_photo_1","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"9999px"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3","left":"auto","right":"auto"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-right:auto;margin-bottom:var(--wp--preset--spacing--step-3);margin-left:auto"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/educator-portrait-art.png' ) ); ?>" alt="<?php echo esc_attr__( 'Educator portrait photo', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"metadata":{"name":"teacher_name_1","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1);font-weight:700;line-height:1.2"><?php echo esc_html__( 'Kristin Watson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","metadata":{"name":"teacher_role_1","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-3);font-weight:700"><?php echo esc_html__( 'Early STEM Lead', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textAlign":"center","metadata":{"name":"teacher_bio_1","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"lineHeight":"1.55"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.55"><?php echo esc_html__( 'Fostering natural curiosity through outdoor botany and hands-on laboratory quests.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|step-3"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Degree: M.Ed', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Tenure: 8 Yrs', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"metadata":{"name":"teacher_photo_2","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"9999px"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3","left":"auto","right":"auto"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-right:auto;margin-bottom:var(--wp--preset--spacing--step-3);margin-left:auto"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/educator-portrait-art.png' ) ); ?>" alt="<?php echo esc_attr__( 'Educator portrait photo', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"metadata":{"name":"teacher_name_2","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1);font-weight:700;line-height:1.2"><?php echo esc_html__( 'Jenny Wilson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","metadata":{"name":"teacher_role_2","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"textColor":"secondary-dark","fontSize":"small"} -->
<p class="has-text-align-center has-secondary-dark-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-3);font-weight:700"><?php echo esc_html__( 'Phonics & Literacy', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textAlign":"center","metadata":{"name":"teacher_bio_2","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"lineHeight":"1.55"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.55"><?php echo esc_html__( 'Creating immersive phonics worlds, speech development, and puppet storytelling.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|step-3"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Degree: B.A. ECE', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Tenure: 6 Yrs', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-surface-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"metadata":{"name":"teacher_photo_3","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"9999px"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3","left":"auto","right":"auto"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-right:auto;margin-bottom:var(--wp--preset--spacing--step-3);margin-left:auto"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/educator-portrait-art.png' ) ); ?>" alt="<?php echo esc_attr__( 'Educator portrait photo', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"metadata":{"name":"teacher_name_3","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1);font-weight:700;line-height:1.2"><?php echo esc_html__( 'Marcus Hayes', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","metadata":{"name":"teacher_role_3","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-3);font-weight:700"><?php echo esc_html__( 'Music & Movement', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textAlign":"center","metadata":{"name":"teacher_bio_3","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"lineHeight":"1.55"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.55"><?php echo esc_html__( 'Orff Schulwerk rhythm specialist unlocking cognitive focus through melody and movement.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|step-3"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Degree: B.Mus', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Tenure: 5 Yrs', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"metadata":{"name":"teacher_photo_4","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"9999px"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3","left":"auto","right":"auto"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-right:auto;margin-bottom:var(--wp--preset--spacing--step-3);margin-left:auto"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/educator-portrait-art.png' ) ); ?>" alt="<?php echo esc_attr__( 'Educator portrait photo', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"metadata":{"name":"teacher_name_4","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1);font-weight:700;line-height:1.2"><?php echo esc_html__( 'Sofia Chen', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","metadata":{"name":"teacher_role_4","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-3);font-weight:700"><?php echo esc_html__( 'Visual Arts Studio', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textAlign":"center","metadata":{"name":"teacher_bio_4","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"lineHeight":"1.55"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-4);line-height:1.55"><?php echo esc_html__( 'Guiding fine motor coordination and joyful sensory creativity with clay and tempera.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|step-3"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
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
