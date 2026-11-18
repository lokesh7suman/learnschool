<?php
/**
 * Title: Landing Page (Early Childhood & Kindergarten)
 * Slug: learnschool/landing-page-3
 * Categories: pages
 * Template Types: front-page, page
 * Keywords: landing page, kindergarten, preschool, early childhood, kids
 * Description: Playful, child-focused starter page structured with playful hero, age-group programs, daily schedule & activities, interactive learning materials, parent testimonials, and enrollment banner.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","className":"wk-hero-wrapper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wk-hero-wrapper"><!-- wp:group {"align":"wide","className":"wk-hero-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide wk-hero-container"><!-- wp:group {"className":"wk-hero-decor-left","layout":{"type":"default"}} -->
<div class="wp-block-group wk-hero-decor-left"><!-- wp:image {"sizeSlug":"full","className":"wk-hero-kid-badge"} -->
<figure class="wp-block-image size-full wk-hero-kid-badge"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/hero-kid-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Cheerful young learner', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-hero-loop-arrow"} -->
<figure class="wp-block-image size-full wk-hero-loop-arrow"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/hero-loop-arrow.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-hero-ripple-rings"} -->
<figure class="wp-block-image size-full wk-hero-ripple-rings"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/hero-ripple-rings.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-hero-decor-right","layout":{"type":"default"}} -->
<div class="wp-block-group wk-hero-decor-right"><!-- wp:image {"sizeSlug":"full","className":"wk-hero-sticker-badge"} -->
<figure class="wp-block-image size-full wk-hero-sticker-badge"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/hero-badge-sticker.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Learning badge sticker', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-hero-lilac-dot"} -->
<figure class="wp-block-image size-full wk-hero-lilac-dot"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/hero-lilac-dot.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-hero-thumbsup-kid"} -->
<figure class="wp-block-image size-full wk-hero-thumbsup-kid"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/hero-kid-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Happy student giving thumbs up', 'learnschool' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Early Childhood &amp; Kindergarten Center', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"className":"wk-hero-headline"} -->
<h1 class="wp-block-heading has-text-align-center wk-hero-headline"><?php echo esc_html__( 'Nurturing Little Learners Through', 'learnschool' ); ?><br><span class="wk-accent-learn"><?php echo esc_html__( 'Play', 'learnschool' ); ?></span><?php echo esc_html__( ', ', 'learnschool' ); ?><span class="wk-accent-play"><?php echo esc_html__( 'Joy', 'learnschool' ); ?></span><?php echo esc_html__( ' &amp; Wonder', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","className":"wk-hero-subtitle"} -->
<p class="has-text-align-center wk-hero-subtitle"><?php echo esc_html__( 'A warm, loving preschool and kindergarten community where children explore sensory discovery, build social confidence, and discover the wonder of learning.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#enrollment"><?php echo esc_html__( 'Enroll for Kindergarten', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#schedule-tour"><?php echo esc_html__( 'Schedule a Classroom Visit', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Age-Appropriate Learning Tracks', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Programs Tailored for Every Developmental Milestone', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'From sensory toddler exploration to confident kindergarten readiness, each classroom is carefully designed for joyful growth.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"28px"},"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"quiz-bg","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-quiz-bg-background-color has-background" style="border-radius:28px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"base","textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-base-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php echo esc_html__( 'Ages 2–3 Years', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-2"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-4);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Toddler Discovery', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.7"><?php echo esc_html__( 'Sensory exploration, motor coordination, song &amp; story circles, and tender emotional bonding in a safe, nurturing environment.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"small"} -->
<ul class="is-style-learnschool-checkmarks has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( '4:1 Child-to-Caregiver Ratio', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Sensory Bins &amp; Water Play Labs', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Gentle Potty Training Partnership', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"28px"},"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"activities-bg","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-activities-bg-background-color has-background" style="border-radius:28px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"base","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-base-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php echo esc_html__( 'Ages 3–4 Years', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-2"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-4);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Preschool Explorer', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.7"><?php echo esc_html__( 'Creative arts, foundational phonics, collaborative play, outdoor nature gardens, and hands-on scientific curiosity.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"small"} -->
<ul class="is-style-learnschool-checkmarks has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( '7:1 Child-to-Educator Ratio', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Music, Movement &amp; Outdoor Play', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Early Phonics &amp; Counting Foundations', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"28px"},"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"games-bg","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-games-bg-background-color has-background" style="border-radius:28px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"primary","textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-primary-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php echo esc_html__( 'Ages 5–6 Years', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-2"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-4);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Kindergarten Readiness', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.7"><?php echo esc_html__( 'Confident literacy, numeracy problem solving, early science experiments, and social preparedness for elementary school.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"small"} -->
<ul class="is-style-learnschool-checkmarks has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( '10:1 Certified Teacher Ratio', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Independent Reading &amp; Math Puzzles', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Full Elementary Transition Program', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"wk-materials-wrapper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wk-materials-wrapper"><!-- wp:columns {"align":"wide","verticalAlignment":"center","className":"wk-materials-container"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center wk-materials-container"><!-- wp:column {"verticalAlignment":"center","className":"wk-materials-visual-col"} -->
<div class="wp-block-column is-vertically-aligned-center wk-materials-visual-col"><!-- wp:group {"className":"wk-materials-pills-visual","layout":{"type":"default"}} -->
<div class="wp-block-group wk-materials-pills-visual"><!-- wp:image {"sizeSlug":"full","className":"wk-materials-doodle-sparkle"} -->
<figure class="wp-block-image size-full wk-materials-doodle-sparkle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/materials-doodle-sparkle.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-materials-doodle-wavy"} -->
<figure class="wp-block-image size-full wk-materials-doodle-wavy"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/card-activities-wavy-doodle.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-kid-layer wk-kid-2"} -->
<figure class="wp-block-image size-full wk-kid-layer wk-kid-2"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Preschool student exploring interactive learning materials', 'learnschool' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"wk-materials-text-col"} -->
<div class="wp-block-column is-vertically-aligned-center wk-materials-text-col"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Tactile Learning Kits', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'Hands-On Learning That Sparks', 'learnschool' ); ?><br><span class="wk-accent-enjoyable codeclove-accent-enjoyable"><?php echo esc_html__( 'Wonder &amp; Joy', 'learnschool' ); ?></span><br><?php echo esc_html__( 'Every Single Day', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-materials-desc"} -->
<p class="wk-materials-desc"><?php echo esc_html__( 'Children learn best through multisensory engagement. Our classrooms feature thoughtfully curated, tactile materials that make phonics, counting, and science tangible and fun.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Montessori-inspired wooden counting &amp; pattern blocks', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Interactive phonetic sound cards and tactile letter trays', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Living biology observation kits &amp; child-friendly gardening tools', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#explore-materials"><?php echo esc_html__( 'Explore Our Materials', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Daily Enrichment', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Daily Rhythm &amp; Enrichment Activities', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Our predictable yet flexible daily rhythm ensures a balanced day of focused learning, joyful creativity, nourishing meals, and active play.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} -->
<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--step-3)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-creative-activity.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Arts and crafts icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Arts &amp; Crafts', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Watercolors, clay sculpting, and finger-painting projects that unlock creative self-expression.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} -->
<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--step-3)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/teacher-doodle-star.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Music and rhythm star icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Music &amp; Rhythm', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Joyful sing-alongs, percussion instruments, and rhythmic dance that stimulate auditory cognition.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} -->
<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--step-3)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-game-controller.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Nature play icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Nature &amp; Outdoor Play', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Organic garden harvesting, sensory sandboxes, and safe playground climbing structures.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} -->
<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--step-3)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-quiz-note.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Phonics fun icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Phonics &amp; Story Time', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Puppet stories, alphabet games, interactive rhymes, and cozy reading nooks.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Parent Love', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'What Our Kindergarten Parents Say', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Hear firsthand how our attentive early educators create a second home for your little ones.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|secondary"}}} -->
<p style="color:var(--wp--preset--color--secondary);display:inline-flex;align-items:center;gap:3px;margin-bottom:var(--wp--preset--spacing--step-2)" aria-label="<?php echo esc_attr__( '5 out of 5 stars', 'learnschool' ); ?>"><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( '“Our 3-year-old was timid and had never been away from home. Within two weeks, she was singing songs at breakfast and greeting her teachers with huge hugs!”', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"0"}}}} -->
<p style="font-weight:700;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:0"><?php echo esc_html__( 'Emily &amp; Liam Turner', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Parents of Maya (Toddler Room)', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|secondary"}}} -->
<p style="color:var(--wp--preset--color--secondary);display:inline-flex;align-items:center;gap:3px;margin-bottom:var(--wp--preset--spacing--step-2)" aria-label="<?php echo esc_attr__( '5 out of 5 stars', 'learnschool' ); ?>"><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( '“The kindergarten transition was completely seamless. The daily phonics games, science experiments, and warm outdoor time prepared our son beautifully for 1st grade.”', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"0"}}}} -->
<p style="font-weight:700;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:0"><?php echo esc_html__( 'Carlos &amp; Sofia Rodriguez', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Parents of Lucas (Kindergarten)', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|secondary"}}} -->
<p style="color:var(--wp--preset--color--secondary);display:inline-flex;align-items:center;gap:3px;margin-bottom:var(--wp--preset--spacing--step-2)" aria-label="<?php echo esc_attr__( '5 out of 5 stars', 'learnschool' ); ?>"><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( '“The communication through daily photo updates and milestones brings us so much joy during our workday. We feel so fortunate to be in this school community.”', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"0"}}}} -->
<p style="font-weight:700;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:0"><?php echo esc_html__( 'Priya &amp; Arjun Patel', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Parents of Ananya (Preschool)', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"wk-faq-wrapper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wk-faq-wrapper"><!-- wp:columns {"align":"wide","className":"wk-faq-container"} -->
<div class="wp-block-columns alignwide wk-faq-container"><!-- wp:column {"className":"wk-faq-left-col"} -->
<div class="wp-block-column wk-faq-left-col"><!-- wp:image {"sizeSlug":"full","className":"wk-faq-doodle-bg"} -->
<figure class="wp-block-image size-full wk-faq-doodle-bg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/faq-element.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'Frequently ', 'learnschool' ); ?><span class="wk-accent-asked"><?php echo esc_html__( 'asked', 'learnschool' ); ?></span><br><?php echo esc_html__( 'parent questions', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'Everything you need to know about starting preschool or kindergarten with confidence.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-faq-right-col"} -->
<div class="wp-block-column wk-faq-right-col"><!-- wp:details {"showContent":true,"className":"wk-faq-item"} -->
<details class="wp-block-details wk-faq-item" open><summary><?php echo esc_html__( 'What is your child-to-teacher ratio in early classrooms?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'We maintain strict low ratios: 4:1 in our toddler rooms, 7:1 in preschool, and 10:1 in kindergarten. Every classroom is co-led by a certified lead teacher and dedicated assistant educator.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"wk-faq-item"} -->
<details class="wp-block-details wk-faq-item"><summary><?php echo esc_html__( 'How do you help children transition during the first few weeks?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'We offer a gentle, phased orientation schedule. Parents are invited to stay during initial classroom discovery hours, and each child is assigned a warm primary educator who greets them each morning.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"wk-faq-item"} -->
<details class="wp-block-details wk-faq-item"><summary><?php echo esc_html__( 'What are your health, safety, and nutrition standards?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Our facility is entirely peanut- and tree-nut-free. We serve freshly prepared organic fruits, vegetables, and hot balanced lunches, and our entire teaching staff is certified in pediatric first aid and CPR.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"wk-faq-item"} -->
<details class="wp-block-details wk-faq-item"><summary><?php echo esc_html__( 'What are your enrollment options and operating hours?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'We offer half-day morning sessions (8:30 AM – 12:30 PM) and full-day programs (8:30 AM – 3:30 PM), with optional extended sunrise care from 7:30 AM and sunset aftercare until 5:30 PM.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"wk-cta-wrapper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wk-cta-wrapper"><!-- wp:group {"align":"wide","className":"wk-cta-card","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wk-cta-card"><!-- wp:image {"sizeSlug":"full","className":"wk-cta-mascot"} -->
<figure class="wp-block-image size-full wk-cta-mascot"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/cta-kid.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Cheerful student ready for kindergarten enrollment', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-cta-squiggle-doodle"} -->
<figure class="wp-block-image size-full wk-cta-squiggle-doodle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/cta-squiggle.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-cta-corner-lines"} -->
<figure class="wp-block-image size-full wk-cta-corner-lines"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/cta-dots.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"wk-cta-content","layout":{"type":"default"}} -->
<div class="wp-block-group wk-cta-content"><!-- wp:heading {"level":2,"className":"wk-cta-headline"} -->
<h2 class="wp-block-heading wk-cta-headline"><?php echo esc_html__( 'Give your child a', 'learnschool' ); ?><br><span class="wk-accent-learnschool"><?php echo esc_html__( 'joyful start', 'learnschool' ); ?></span><br><?php echo esc_html__( 'at LearnSchool', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"wk-cta-form","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group wk-cta-form"><!-- wp:html -->
<form class="wk-cta-form-el" action="#enroll" method="post" onsubmit="event.preventDefault(); alert('<?php echo esc_attr__( 'Thank you for your enrollment interest! Our admissions director will reach out within 24 hours.', 'learnschool' ); ?>');">
<input class="wk-cta-input-field" type="text" name="parent_name" placeholder="<?php echo esc_attr__( 'Parent / Guardian Name', 'learnschool' ); ?>" required aria-label="<?php echo esc_attr__( 'Parent / Guardian Name', 'learnschool' ); ?>"/>
<input class="wk-cta-input-field" type="text" name="contact_info" placeholder="<?php echo esc_attr__( 'Email or Phone Number', 'learnschool' ); ?>" required aria-label="<?php echo esc_attr__( 'Email or Phone Number', 'learnschool' ); ?>"/>
<div class="wk-cta-btn-wrap">
<button type="submit" class="wp-block-button__link wp-element-button wk-cta-submit-btn"><?php echo esc_html__( 'Request Enrollment Pack', 'learnschool' ); ?></button>
</div>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->