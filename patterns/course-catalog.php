<?php
/**
 * Title: Course & Program Catalog Grid
 * Slug: learnschool/course-catalog
 * Categories: learnschool/card
 * Keywords: courses, programs, curriculum, academy, classes, subjects, cards
 * Description: Academic course and program showcase grid with age brackets, duration badges, equal-height card alignment, and enrollment links.
 * Viewport Width: 1280
 * Inserter: true
 *
 * @package LearnSchool
 * @since 1.1.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--quicksand)"><?php echo esc_html__( 'Explore Our ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Learning Programs', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Age-appropriate, hands-on learning experiences designed to ignite curiosity and foster lifelong skills.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"border":{"radius":"16px"},"dimensions":{"minHeight":"52px"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-2","right":"var:preset|spacing|step-2"}}},"backgroundColor":"primary-light","textColor":"primary-dark","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-primary-dark-color has-primary-light-background-color has-text-color has-background" style="border-radius:16px;min-height:52px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-2)"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/><path d="M12 6v7"/><path d="M9.5 8.5l5 0"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"x-small"} -->
<p class="has-primary-dark-color has-primary-light-background-color has-text-color has-background has-x-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700"><?php echo esc_html__( 'Ages 3–5', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.8px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1);font-weight:700;letter-spacing:0.8px;text-transform:uppercase"><?php echo esc_html__( 'Language & Phonics', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1.25"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2);font-weight:700;line-height:1.25"><?php echo esc_html__( 'Early Literacy & ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Phonics', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-4);line-height:1.6"><?php echo esc_html__( 'Building strong foundations through phonemic awareness, joyful storytelling, and tactile alphabet quests.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"14px","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}}},"borderColor":"border","backgroundColor":"base-subtle","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-border-border-color has-base-subtle-background-color has-text-color has-background" style="border-style:solid;border-width:1px;border-radius:14px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase"><?php echo esc_html__( 'Duration', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( '12 Wks', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase"><?php echo esc_html__( 'Ratio', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( '1:6', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase"><?php echo esc_html__( 'Schedule', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Morning', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--step-4)"><!-- wp:button {"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="#course-details"><?php echo esc_html__( 'Explore Curriculum', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px","width":"2px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"borderColor":"primary","backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-border-color has-primary-border-color has-base-background-color has-background" style="border-style:solid;border-width:2px;border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"3px","bottom":"3px","left":"12px","right":"12px"},"margin":{"bottom":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700","letterSpacing":"0.8px","textTransform":"uppercase"}},"backgroundColor":"primary","textColor":"base","fontSize":"x-small"} -->
<p class="has-base-color has-primary-background-color has-text-color has-background has-x-small-font-size" style="border-radius:9999px;padding-top:3px;padding-right:12px;padding-bottom:3px;padding-left:12px;margin-bottom:var(--wp--preset--spacing--step-3);font-weight:700;letter-spacing:0.8px;text-transform:uppercase;display:inline-block"><?php echo esc_html__( '★ Most Popular', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"border":{"radius":"16px"},"dimensions":{"minHeight":"52px"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-2","right":"var:preset|spacing|step-2"}}},"backgroundColor":"warning","textColor":"warning-text","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-warning-text-color has-warning-background-color has-text-color has-background" style="border-radius:16px;min-height:52px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-2)"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"warning","textColor":"warning-text","fontSize":"x-small"} -->
<p class="has-warning-text-color has-warning-background-color has-text-color has-background has-x-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700"><?php echo esc_html__( 'Ages 4–6', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.8px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"secondary-dark","fontSize":"x-small"} -->
<p class="has-secondary-dark-color has-text-color has-x-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1);font-weight:700;letter-spacing:0.8px;text-transform:uppercase"><?php echo esc_html__( 'STEM & Robotics', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1.25"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2);font-weight:700;line-height:1.25"><?php echo esc_html__( 'Young Inventors ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--secondary-dark)"><?php echo esc_html__( 'STEM Lab', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-4);line-height:1.6"><?php echo esc_html__( 'Hands-on scientific inquiry, tactile robotics kits, and logic games that demystify nature and engineering principles.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"14px","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}}},"borderColor":"border","backgroundColor":"warning","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-border-border-color has-warning-background-color has-text-color has-background" style="border-style:solid;border-width:1px;border-radius:14px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"}},"textColor":"warning-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-warning-text-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase"><?php echo esc_html__( 'Duration', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( '16 Wks', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"}},"textColor":"warning-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-warning-text-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase"><?php echo esc_html__( 'Ratio', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( '1:6', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"}},"textColor":"warning-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-warning-text-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase"><?php echo esc_html__( 'Schedule', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Full Day', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--step-4)"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#course-details"><?php echo esc_html__( 'Explore Curriculum', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"border":{"radius":"16px"},"dimensions":{"minHeight":"52px"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-2","right":"var:preset|spacing|step-2"}}},"backgroundColor":"primary-light","textColor":"primary-dark","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-primary-dark-color has-primary-light-background-color has-text-color has-background" style="border-radius:16px;min-height:52px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-2)"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="13.5" cy="6.5" r=".5"/><circle cx="17.5" cy="10.5" r=".5"/><circle cx="8.5" cy="7.5" r=".5"/><circle cx="6.5" cy="12.5" r=".5"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.563-2.512 5.563-5.563C22 6.5 17.5 2 12 2z"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"x-small"} -->
<p class="has-primary-dark-color has-primary-light-background-color has-text-color has-background has-x-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700"><?php echo esc_html__( 'Ages 3–6', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.8px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1);font-weight:700;letter-spacing:0.8px;text-transform:uppercase"><?php echo esc_html__( 'Studio Arts & Music', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1.25"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2);font-weight:700;line-height:1.25"><?php echo esc_html__( 'Creative Arts & ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Expression', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-4);line-height:1.6"><?php echo esc_html__( 'Tactile pottery, eco-painting, rhythm percussion, and dramatic storytelling that empower personal expression.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"14px","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}}},"borderColor":"border","backgroundColor":"base-subtle","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-border-border-color has-base-subtle-background-color has-text-color has-background" style="border-style:solid;border-width:1px;border-radius:14px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase"><?php echo esc_html__( 'Duration', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Year-Round', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase"><?php echo esc_html__( 'Ratio', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( '1:8', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase"><?php echo esc_html__( 'Schedule', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Afternoon', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--step-4)"><!-- wp:button {"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="#course-details"><?php echo esc_html__( 'Explore Curriculum', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
