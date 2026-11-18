<?php
/**
 * Title: Tuition & Pricing Plans
 * Slug: learnschool/pricing
 * Categories: pricing, learnschool
 * Keywords: pricing, tuition, plans, fee, tiers, enroll
 * Description: Three-tier tuition and admission pricing plan comparison with badge highlights and CTA buttons.
 * Viewport Width: 1280
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.1.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":2} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Simple, Transparent Tuition Plans', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"textColor":"contrast-subtle"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--step-6)"><?php echo esc_html__( 'Invest in your child’s future with comprehensive curricula, certified educators, and flexible schedules.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"metadata":{"name":"plan_1_title","bindings":{"content":{"source":"core/pattern-overrides"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Explorer', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"plan_1_desc","bindings":{"content":{"source":"core/pattern-overrides"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Early foundation for toddlers (Ages 3–5). Half-day program.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:2.5rem;font-weight:700"><?php echo esc_html__( '$320', 'learnschool' ); ?><span style="font-size:1rem;font-weight:400;color:var(--wp--preset--color--contrast-subtle)"> / <?php echo esc_html__( 'month', 'learnschool' ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks"><li><?php echo esc_html__( 'Morning sessions (9am - 12pm)', 'learnschool' ); ?></li><li><?php echo esc_html__( 'Creative arts & sensory play', 'learnschool' ); ?></li><li><?php echo esc_html__( 'Healthy snack included daily', 'learnschool' ); ?></li><li><?php echo esc_html__( 'Parent communication portal', 'learnschool' ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--step-5)"><!-- wp:button {"metadata":{"name":"plan_1_cta","bindings":{"text":{"source":"core/pattern-overrides"},"url":{"source":"core/pattern-overrides"}}},"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="#enroll"><?php echo esc_html__( 'Enroll Now', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"color":"var:preset|color|primary","width":"2px"},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-border-color has-primary-border-color has-base-background-color has-background" style="border-color:var(--wp--preset--color--primary);border-width:2px;box-shadow:var(--wp--preset--shadow--elevated);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}}},"backgroundColor":"primary-light","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group has-primary-light-background-color has-background" style="border-radius:9999px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary-dark","fontSize":"x-small"} -->
<p class="has-primary-dark-color has-text-color has-x-small-font-size" style="font-weight:700"><?php echo esc_html__( 'MOST POPULAR', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"metadata":{"name":"plan_2_title","bindings":{"content":{"source":"core/pattern-overrides"}}},"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Achiever', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"plan_2_desc","bindings":{"content":{"source":"core/pattern-overrides"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Comprehensive primary academy (Ages 6–10). Full-day immersive curriculum.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:2.5rem;font-weight:700"><?php echo esc_html__( '$540', 'learnschool' ); ?><span style="font-size:1rem;font-weight:400;color:var(--wp--preset--color--contrast-subtle)"> / <?php echo esc_html__( 'month', 'learnschool' ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks"><li><?php echo esc_html__( 'Full day (8:30am - 3:30pm)', 'learnschool' ); ?></li><li><?php echo esc_html__( 'STEM, coding & language labs', 'learnschool' ); ?></li><li><?php echo esc_html__( 'Organic lunch & 2 snacks included', 'learnschool' ); ?></li><li><?php echo esc_html__( 'After-school club access included', 'learnschool' ); ?></li><li><?php echo esc_html__( 'Weekly progress reports & portfolio', 'learnschool' ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--step-5)"><!-- wp:button {"metadata":{"name":"plan_2_cta","bindings":{"text":{"source":"core/pattern-overrides"},"url":{"source":"core/pattern-overrides"}}},"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#enroll"><?php echo esc_html__( 'Enroll in Achiever', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"metadata":{"name":"plan_3_title","bindings":{"content":{"source":"core/pattern-overrides"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Scholar Honor', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"plan_3_desc","bindings":{"content":{"source":"core/pattern-overrides"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Advanced gifted learning with 1-on-1 mentorship and competition prep.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:2.5rem;font-weight:700"><?php echo esc_html__( '$780', 'learnschool' ); ?><span style="font-size:1rem;font-weight:400;color:var(--wp--preset--color--contrast-subtle)"> / <?php echo esc_html__( 'month', 'learnschool' ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks"><li><?php echo esc_html__( 'Extended hours (8am - 5:30pm)', 'learnschool' ); ?></li><li><?php echo esc_html__( '1-on-1 tutoring (4 hrs/month)', 'learnschool' ); ?></li><li><?php echo esc_html__( 'Robotics, chess & math Olympiad', 'learnschool' ); ?></li><li><?php echo esc_html__( 'All field trips & materials covered', 'learnschool' ); ?></li><li><?php echo esc_html__( 'Dedicated academic advisor', 'learnschool' ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--step-5)"><!-- wp:button {"metadata":{"name":"plan_3_cta","bindings":{"text":{"source":"core/pattern-overrides"},"url":{"source":"core/pattern-overrides"}}},"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="#enroll"><?php echo esc_html__( 'Enroll Now', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
