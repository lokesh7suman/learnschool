<?php
/**
 * Title: Landing Page (Campus & Academic Academy)
 * Slug: learnschool/landing-page-2
 * Categories: pages
 * Template Types: front-page, page
 * Keywords: landing page, academy, campus, full page, preparatory
 * Description: Comprehensive full-page academic template featuring top utility bar, campus hero, curriculum pillars, key academic statistics, faculty spotlight, student testimonials, and admissions CTA.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"div","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"primary-dark","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-dark-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size" style="display:inline-flex;align-items:center;gap:6px"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><span><?php echo esc_html__( 'Campus Visiting Hours: Mon–Fri, 8:00 AM – 4:00 PM', 'learnschool' ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size" style="display:inline-flex;align-items:center;gap:6px"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg><span><?php echo esc_html__( 'Admissions Helpline: (555) 382-9011', 'learnschool' ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:700"><a href="#family-portal" style="color:var(--wp--preset--color--secondary);text-decoration:none"><?php echo esc_html__( 'Family &amp; Student Portal →', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'LearnSchool Preparatory Academy', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"base","fontSize":"display"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-display-font-size"><?php echo esc_html__( 'Cultivating Academic Rigor, Character &amp; Leadership', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="line-height:1.7"><?php echo esc_html__( 'Empowering students from grades K–12 with an intellectually ambitious curriculum, world-class laboratory spaces, and an inspiring 50-acre historic campus community.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Accredited AP &amp; Honors Capstone Curriculum Pathways', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( '10:1 Student-to-Faculty Mentorship &amp; Advisory Ratio', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'State-of-the-Art STEM Centers, Olympic Pool &amp; Arts Studios', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":"var:preset|spacing|step-3"} -->
<div style="height:var(--wp--preset--spacing--step-3)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-yellow-pill"} -->
<div class="wp-block-button is-style-yellow-pill"><a class="wp-block-button__link wp-element-button" href="#campus-tour"><?php echo esc_html__( 'Schedule a Campus Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#curriculum"><?php echo esc_html__( 'Download Prospectus', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--elevated);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Admissions 2026–2027', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Quick Inquiry Card', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Join a community where every student is challenged, valued, and encouraged to excel academically and ethically.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-4"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:16px;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-4);padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Next Open Campus Day: November 24', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Priority Application Deadline: January 15', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Merit &amp; Need-Based Scholarships Available', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill","style":{"spacing":{"padding":{"left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#inquire" style="padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'Submit Admissions Inquiry', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Academic Foundations', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Curriculum Pillars of LearnSchool Academy', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Our interdisciplinary curriculum blends rigorous scientific inquiry, critical humanist debate, artistic expression, and competitive athletic mastery.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"primary","textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-primary-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php echo esc_html__( 'PILLAR 01', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-3)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-quiz-note.svg' ) ); ?>" alt="<?php echo esc_attr__( 'STEM & Coding icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'STEM &amp; Robotics', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Research-grade labs, algorithmic coding, robotics engineering, and advanced placement physics and chemistry.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"secondary","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-secondary-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php echo esc_html__( 'PILLAR 02', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-3)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-creative-activity.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Humanities and languages icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Humanities &amp; Languages', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Classical rhetoric, world literature, competitive debate societies, and immersive Spanish and Mandarin tracks.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"purple-tint","textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-purple-tint-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php echo esc_html__( 'PILLAR 03', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-3)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/teacher-doodle-star.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Performing arts star icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Performing &amp; Fine Arts', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Symphonic orchestra, classical theater, darkroom photography, digital media studios, and choral performance.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"accent","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-accent-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php echo esc_html__( 'PILLAR 04', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-3)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-game-controller.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Athletics icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Competitive Athletics', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( '18 championship varsity teams, Olympic aquatic facility, cross-country trails, and fitness performance centers.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"primary-dark","textColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-color has-primary-dark-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"textAlign":"center"} -->
<div class="wp-block-column has-text-align-center"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"secondary","fontSize":"display"} -->
<h3 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-display-font-size"><?php echo esc_html__( '10:1', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Student-to-Faculty Ratio', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textAlign":"center","textColor":"primary-light","fontSize":"small"} -->
<p class="has-text-align-center has-primary-light-color has-text-color has-small-font-size"><?php echo esc_html__( 'Personalized mentoring in every academic discipline', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"textAlign":"center"} -->
<div class="wp-block-column has-text-align-center"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"secondary","fontSize":"display"} -->
<h3 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-display-font-size"><?php echo esc_html__( '100%', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'College Acceptance Rate', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textAlign":"center","textColor":"primary-light","fontSize":"small"} -->
<p class="has-text-align-center has-primary-light-color has-text-color has-small-font-size"><?php echo esc_html__( 'Graduates attending top universities worldwide', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"textAlign":"center"} -->
<div class="wp-block-column has-text-align-center"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"secondary","fontSize":"display"} -->
<h3 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-display-font-size"><?php echo esc_html__( '50', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Acre Historic Campus', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textAlign":"center","textColor":"primary-light","fontSize":"small"} -->
<p class="has-text-align-center has-primary-light-color has-text-color has-small-font-size"><?php echo esc_html__( 'Scenic grounds, modern labs &amp; arboretum paths', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"textAlign":"center"} -->
<div class="wp-block-column has-text-align-center"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"secondary","fontSize":"display"} -->
<h3 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-display-font-size"><?php echo esc_html__( '25+', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'AP &amp; Honors Offerings', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textAlign":"center","textColor":"primary-light","fontSize":"small"} -->
<p class="has-text-align-center has-primary-light-color has-text-color has-small-font-size"><?php echo esc_html__( 'Rigorous collegiate preparation pathways', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Faculty Leadership', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Guided by Inspiring Academic Mentors', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Our department chairs bring extensive academic credentials, laboratory research achievements, and a deep commitment to student growth.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","className":"is-style-learnschool-card-large","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card-large has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:image {"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-kristin.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Dr. Kristin Watson', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:120px;height:120px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-1"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Dr. Kristin Watson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Head of School &amp; Senior Science Faculty', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( '“At LearnSchool Academy, we nurture not just academic excellence, but the intellectual curiosity, creative resilience, and empathetic character in every student.”', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#principal-welcome"><?php echo esc_html__( 'Read Principal Welcome', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jenny.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jenny Wilson', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-1"}}}} -->
<h4 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Jenny Wilson, M.F.A.', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Chair of Fine &amp; Performing Arts', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Directs student galleries, orchestral collaborations, and theater productions.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jacob.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jacob Jones', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-1"}}}} -->
<h4 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Jacob Jones, Ph.D.', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Head of Mathematics &amp; Robotics', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Coaches national math champions and oversees our robotics engineering arena.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|step-4"} -->
<div style="height:var(--wp--preset--spacing--step-4)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"width":"80px"} -->
<div class="wp-block-column" style="flex-basis:80px"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-savannah.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Savannah Nguyen', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}}} -->
<h4 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Savannah Nguyen, M.Ed.', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Director of Humanities &amp; College Counseling', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Guiding high school scholars through academic research capstones and university applications.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Community Voices', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Parent &amp; Alumni Perspectives', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Discover how our community fosters lifelong intellectual vitality, confidence, and enduring moral purpose.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Parent Perspective', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|secondary"}}} -->
<p style="color:var(--wp--preset--color--secondary);display:inline-flex;align-items:center;gap:3px;margin-bottom:var(--wp--preset--spacing--step-2)" aria-label="<?php echo esc_attr__( '5 out of 5 stars', 'learnschool' ); ?>"><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( '“LearnSchool Preparatory has given both of our children a profound intellectual appetite and extraordinary confidence. Their teachers know them deeply and challenge them to become compassionate, thoughtful leaders.”', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"0"}}}} -->
<p style="font-weight:700;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:0"><?php echo esc_html__( 'David &amp; Eleanor Vance', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Parents of 8th &amp; 11th Grade Scholars', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Alumni Perspective', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|secondary"}}} -->
<p style="color:var(--wp--preset--color--secondary);display:inline-flex;align-items:center;gap:3px;margin-bottom:var(--wp--preset--spacing--step-2)" aria-label="<?php echo esc_attr__( '5 out of 5 stars', 'learnschool' ); ?>"><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( '“The honors seminars, robotics team leadership, and individual writing mentorship at LearnSchool set me apart in my university coursework. The school gave me an enduring foundation for both collegiate and career success.”', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"0"}}}} -->
<p style="font-weight:700;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:0"><?php echo esc_html__( 'Marcus Chen, Class of ’23', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Undergraduate Scholar, Stanford University', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"border":{"radius":"32px"},"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6","right":"var:preset|spacing|step-6"}},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"primary","textColor":"base","className":"is-style-learnschool-card-large","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-learnschool-card-large has-base-color has-primary-background-color has-text-color has-background" style="border-radius:32px;box-shadow:var(--wp--preset--shadow--elevated);padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-6);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-6)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Admissions Open 2026–2027', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"textColor":"base","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Begin Your Child’s Journey at LearnSchool Academy', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Schedule an on-campus family visit or connect with our admissions counselors today to explore our academic programs and scholarship opportunities.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-yellow-pill"} -->
<div class="wp-block-button is-style-yellow-pill"><a class="wp-block-button__link wp-element-button" href="#campus-tour"><?php echo esc_html__( 'Book Campus Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#contact-admissions"><?php echo esc_html__( 'Contact Admissions Office', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Admissions Office', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Campus Address: 742 Evergreen Terrace, Academy Park', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Phone: (555) 382-9011', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Email: admissions@learnschool.edu', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Office Hours: Monday through Friday, 8:00 AM – 4:30 PM EST', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->