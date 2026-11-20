<?php
/**
 * Title: Educator & Director Bios Grid
 * Slug: learnschool/teachers-grid
 * Categories: learnschool/team
 * Keywords: teachers, educators, team, staff, directors, credentials
 * Viewport Width: 1280
 * Inserter: true
 * Description: Warm portrait grid of accredited early-childhood educators with degrees, credentials, and tenure.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--quicksand)"><?php echo esc_html__( 'Meet Our Dedicated ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Educators', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Degreed, CPR-certified, and compassionate early-childhood specialists devoted to each child’s emotional and cognitive growth.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-surface-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"22px"},"dimensions":{"width":"72px","height":"72px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|step-3","left":"auto","right":"auto"}}},"backgroundColor":"primary-light","textColor":"primary-dark","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-primary-dark-color has-primary-light-background-color has-text-color has-background" style="border-radius:22px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;margin-top:0;margin-right:auto;margin-bottom:var(--wp--preset--spacing--step-3);margin-left:auto;width:72px;height:72px"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/><path d="M22 10v6"/><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"metadata":{"name":"teacher_1_name","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-2"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-2);font-weight:700;line-height:1.2"><?php echo esc_html__( 'Jenny Wilson, M.Ed', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","metadata":{"name":"teacher_1_role","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"bottom":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-dark-color has-primary-light-background-color has-text-color has-background has-x-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php echo esc_html__( 'Campus Director • 12 Years Tenure', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textAlign":"center","metadata":{"name":"teacher_1_bio","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"lineHeight":"1.55"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.55"><?php echo esc_html__( 'Montessori Certified & Master of Early Childhood Education from UT Austin.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-surface-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"22px"},"dimensions":{"width":"72px","height":"72px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|step-3","left":"auto","right":"auto"}}},"backgroundColor":"warning","textColor":"warning-text","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-warning-text-color has-warning-background-color has-text-color has-background" style="border-radius:22px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;margin-top:0;margin-right:auto;margin-bottom:var(--wp--preset--spacing--step-3);margin-left:auto;width:72px;height:72px"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/><path d="M6 6h10"/><path d="M6 10h7"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"metadata":{"name":"teacher_2_name","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-2"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-2);font-weight:700;line-height:1.2"><?php echo esc_html__( 'Kristin Watson, B.S.', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","metadata":{"name":"teacher_2_role","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"bottom":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"warning","textColor":"warning-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-warning-text-color has-warning-background-color has-text-color has-background has-x-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php echo esc_html__( 'Lead Preschool Educator • 8 Years', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textAlign":"center","metadata":{"name":"teacher_2_bio","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"lineHeight":"1.55"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.55"><?php echo esc_html__( 'Specializes in emergent phonics, sensory nature discovery, and early STEAM.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-surface-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"22px"},"dimensions":{"width":"72px","height":"72px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|step-3","left":"auto","right":"auto"}}},"backgroundColor":"primary-light","textColor":"primary-dark","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-primary-dark-color has-primary-light-background-color has-text-color has-background" style="border-radius:22px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;margin-top:0;margin-right:auto;margin-bottom:var(--wp--preset--spacing--step-3);margin-left:auto;width:72px;height:72px"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"metadata":{"name":"teacher_3_name","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-2"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-2);font-weight:700;line-height:1.2"><?php echo esc_html__( 'Savannah Nguyen', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","metadata":{"name":"teacher_3_role","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"bottom":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-dark-color has-primary-light-background-color has-text-color has-background has-x-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php echo esc_html__( 'Toddler Specialist • 6 Years', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textAlign":"center","metadata":{"name":"teacher_3_bio","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"lineHeight":"1.55"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.55"><?php echo esc_html__( 'CDA Credentialed with an emphasis on toddler sensory development & motor play.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-surface-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"22px"},"dimensions":{"width":"72px","height":"72px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|step-3","left":"auto","right":"auto"}}},"backgroundColor":"warning","textColor":"warning-text","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-warning-text-color has-warning-background-color has-text-color has-background" style="border-radius:22px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;margin-top:0;margin-right:auto;margin-bottom:var(--wp--preset--spacing--step-3);margin-left:auto;width:72px;height:72px"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"metadata":{"name":"teacher_4_name","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-2"}}},"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-2);font-weight:700;line-height:1.2"><?php echo esc_html__( 'Jacob Jones, B.A.', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","metadata":{"name":"teacher_4_role","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"bottom":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"warning","textColor":"warning-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-warning-text-color has-warning-background-color has-text-color has-background has-x-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php echo esc_html__( 'Pre-K & STEM Lead • 7 Years', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textAlign":"center","metadata":{"name":"teacher_4_bio","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"lineHeight":"1.55"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.55"><?php echo esc_html__( 'B.A. Elementary Education with a passion for kindergarten-ready math & science.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
