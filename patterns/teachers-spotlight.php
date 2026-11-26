<?php
/**
 * Title: Faculty Spotlight with Principal Welcome
 * Slug: learnschool/teachers-spotlight
 * Categories: learnschool/team
 * Inserter: true
 * Keywords: teachers, principal, leadership, faculty, team
 * Description: Asymmetrical layout featuring an expansive message and bio from the school principal on the left, paired with a 2x2 grid of key subject educators on the right.
 *
 * @package LearnSchool
 * @since 1.0.0
 * Viewport Width: 1280
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Meet Our Dedicated ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-wavy has-primary-color"><?php echo esc_html__( 'Educators & Mentors', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Our certified faculty brings decades of collective experience, academic credentials, and unwavering dedication to every classroom.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"46%"} -->
<div class="wp-block-column" style="flex-basis:46%"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"},"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"border":{"radius":"22px"},"dimensions":{"width":"68px","height":"68px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"primary-light","textColor":"primary-dark","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-primary-dark-color has-primary-light-background-color has-text-color has-background" style="border-radius:22px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;width:68px;height:68px"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size"><?php echo esc_html__( 'Dr. Kristin Watson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Head of School & Active Faculty', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( '“At LearnSchool, we believe that joyful academic excellence is not the finish line—it is the foundation. Every child holds boundless potential waiting to be ignited through guided inquiry, respectful mentorship, and loving curiosity.”', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"bottom":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-base-subtle-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( '18+ Years Leadership', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Ed.D Harvard University', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--step-4)"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#principal-welcome"><?php echo esc_html__( "Principal's Welcome", 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"54%"} -->
<div class="wp-block-column" style="flex-basis:54%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-2)"><!-- wp:group {"style":{"border":{"radius":"14px"},"dimensions":{"width":"48px","height":"48px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"warning","textColor":"warning-text","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-warning-text-color has-warning-background-color has-text-color has-background" style="border-radius:14px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;width:48px;height:48px"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"contrast","fontSize":"medium"} -->
<h4 class="wp-block-heading has-contrast-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Jenny Wilson', 'learnschool' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"secondary-dark","fontSize":"x-small"} -->
<p class="has-secondary-dark-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Preschool Lead', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( '10+ Years Experience • M.Ed Texas. Specializes in child-led sensory discovery.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-2)"><!-- wp:group {"style":{"border":{"radius":"14px"},"dimensions":{"width":"48px","height":"48px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"primary-light","textColor":"primary-dark","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-primary-dark-color has-primary-light-background-color has-text-color has-background" style="border-radius:14px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;width:48px;height:48px"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"contrast","fontSize":"medium"} -->
<h4 class="wp-block-heading has-contrast-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Jacob Jones', 'learnschool' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Math & Logic', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( '8+ Years Experience • M.S. MIT. Guiding early spatial reasoning and numeracy.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"},"margin":{"top":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--step-4)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-2)"><!-- wp:group {"style":{"border":{"radius":"14px"},"dimensions":{"width":"48px","height":"48px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"primary-light","textColor":"primary-dark","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-primary-dark-color has-primary-light-background-color has-text-color has-background" style="border-radius:14px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;width:48px;height:48px"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"contrast","fontSize":"medium"} -->
<h4 class="wp-block-heading has-contrast-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Savannah Nguyen', 'learnschool' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Literature & Phonics', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( '6+ Years Experience • M.A. Columbia. Fostering phonemic awareness and storytelling.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px","width":"1.5px","style":"dashed"},"shadow":"var:preset|shadow|card"},"borderColor":"primary","backgroundColor":"primary-light","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-border-color has-primary-border-color has-primary-light-background-color has-background" style="border-style:dashed;border-width:1.5px;border-radius:20px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-2)"><!-- wp:group {"style":{"border":{"radius":"14px"},"dimensions":{"width":"48px","height":"48px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"base","textColor":"primary-dark","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-primary-dark-color has-base-background-color has-text-color has-background" style="border-radius:14px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;width:48px;height:48px"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.8px","textTransform":"uppercase"}},"textColor":"primary-dark","fontSize":"x-small"} -->
<p class="has-primary-dark-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.8px;text-transform:uppercase"><?php echo esc_html__( 'We Are Hiring!', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"textColor":"contrast","fontSize":"medium"} -->
<h4 class="wp-block-heading has-contrast-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Join Our Team', 'learnschool' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Looking for passionate educators to inspire the next generation.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="#careers"><?php echo esc_html__( 'Open Roles', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div><!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
