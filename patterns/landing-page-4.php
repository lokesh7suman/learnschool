<?php
/**
 * Title: Landing Page (Online Academy & Courses)
 * Slug: learnschool/landing-page-4
 * Categories: pages
 * Template Types: front-page, page
 * Keywords: landing page, elearning, online courses, digital school
 * Description: Modern digital academy starter page featuring course finder hero, popular learning tracks, interactive quiz/game features, instructor roster, latest educational articles, and free trial sign-up.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Next-Gen Online Academy', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"display"} -->
<h1 class="wp-block-heading has-display-font-size"><?php echo esc_html__( 'Learn Anytime, Anywhere with Interactive Mastery', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="line-height:1.7"><?php echo esc_html__( 'Live small-group cohorts, gamified STEM challenges, and certified 1-on-1 mentor guidance tailored for curious learners aged 6–16.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-3"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);margin-top:var(--wp--preset--spacing--step-4);margin-bottom:var(--wp--preset--spacing--step-3);padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:html -->
<form action="#course-finder" method="get" style="display:flex;flex-wrap:wrap;gap:8px;align-items:center;" onsubmit="event.preventDefault();">
<input type="search" name="q" placeholder="<?php echo esc_attr__( 'What do you want to learn? (e.g., Coding, Math, Science)', 'learnschool' ); ?>" style="flex:1 1 240px;border:none;padding:var(--wp--preset--spacing--step-2) var(--wp--preset--spacing--step-3);border-radius:12px;background:var(--wp--preset--color--base-subtle);font-size:var(--wp--preset--font-size--medium);" aria-label="<?php echo esc_attr__( 'Search online courses', 'learnschool' ); ?>" />
<button type="submit" class="wp-block-button__link wp-element-button" style="background-color:var(--wp--preset--color--primary);color:var(--wp--preset--color--base);border-radius:9999px;padding:var(--wp--preset--spacing--step-2) var(--wp--preset--spacing--step-4);border:none;font-weight:700;cursor:pointer;"><?php echo esc_html__( 'Explore Courses', 'learnschool' ); ?></button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Popular Topics:', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-2","right":"var:preset|spacing|step-2"}}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-primary-light-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-2)"><a href="#coding" style="text-decoration:none;color:inherit"><?php echo esc_html__( '#KidsCoding', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-2","right":"var:preset|spacing|step-2"}}},"backgroundColor":"activities-bg","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-activities-bg-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-2)"><a href="#math" style="text-decoration:none;color:inherit"><?php echo esc_html__( '#MentalMath', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-2","right":"var:preset|spacing|step-2"}}},"backgroundColor":"games-bg","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-games-bg-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-2)"><a href="#science" style="text-decoration:none;color:inherit"><?php echo esc_html__( '#ScienceLabs', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%"><!-- wp:group {"style":{"border":{"radius":"28px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:28px;box-shadow:var(--wp--preset--shadow--elevated);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Student engaged in online interactive learning', 'learnschool' ); ?>" style="border-radius:20px"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html__( '100+ Live Courses', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'STEM, Arts, Math &amp; Code', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"secondary-dark","fontSize":"medium"} -->
<p class="has-secondary-dark-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html__( '★ 4.9 Rating', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'From 2,500+ Active Parents', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Specialized Curriculum', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Featured Subject Learning Tracks', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Structured, age-tailored pathways engineered by veteran curriculum designers to guide students from curiosity to certified skill mastery.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} -->
<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--step-3)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-game-controller.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Kids coding track icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Kids Coding &amp; AI', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Scratch animations, Python game design, web development, and ethical AI concepts for ages 8–15.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#coding-track"><?php echo esc_html__( 'View Coding Track', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} -->
<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--step-3)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-quiz-note.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Mental math track icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Mental Math &amp; Logic', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Visual arithmetic strategies, competition math puzzles, geometry, and spatial reasoning for ages 6–13.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#math-track"><?php echo esc_html__( 'View Math Track', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} -->
<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--step-3)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-creative-activity.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Young writers track icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Young Writers Studio', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Creative worldbuilding, poetry, journalism, persuasive essays, and public speechcraft for ages 7–15.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#writing-track"><?php echo esc_html__( 'View Writing Track', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} -->
<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--step-3)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/teacher-doodle-star.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Science labs track icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Virtual Science Labs', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Interactive physics simulations, microbiology mysteries, and environmental ecosystems for ages 8–16.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#science-track"><?php echo esc_html__( 'View Science Track', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"wk-features-wrapper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wk-features-wrapper"><!-- wp:group {"align":"wide","className":"wk-features-header","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide wk-features-header"><!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'Gamified &amp; ', 'learnschool' ); ?><span class="wk-accent-interactive"><?php echo esc_html__( 'interactive', 'learnschool' ); ?></span><br><?php echo esc_html__( 'learning features', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"wk-tags-cluster","layout":{"type":"default"}} -->
<div class="wp-block-group wk-tags-cluster"><!-- wp:image {"sizeSlug":"full","className":"wk-tags-bg-doodle"} -->
<figure class="wp-block-image size-full wk-tags-bg-doodle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/tag-bg-vector.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wk-tag-pill wk-tag-enjoy"} -->
<p class="wk-tag-pill wk-tag-enjoy"><?php echo esc_html__( '#quests', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-tag-pill wk-tag-funny"} -->
<p class="wk-tag-pill wk-tag-funny"><?php echo esc_html__( '#badges', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-tag-pill wk-tag-happy"} -->
<p class="wk-tag-pill wk-tag-happy"><?php echo esc_html__( '#live', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"wk-features-grid"} -->
<div class="wp-block-columns alignwide wk-features-grid"><!-- wp:column {"className":"wk-feature-card wk-card-quiz"} -->
<div class="wp-block-column wk-feature-card wk-card-quiz"><!-- wp:image {"sizeSlug":"full","className":"wk-card-doodle-bg"} -->
<figure class="wp-block-image size-full wk-card-doodle-bg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/card-quiz-ripple-purple.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-card-icon"} -->
<figure class="wp-block-image size-full wk-card-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-quiz-note.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Diagnostic quiz icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"wk-card-title"} -->
<h3 class="wp-block-heading wk-card-title"><?php echo esc_html__( 'Adaptive', 'learnschool' ); ?><br><span class="wk-font-script"><?php echo esc_html__( 'Quizzes', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-card-desc"} -->
<p class="wk-card-desc"><?php echo esc_html__( 'Real-time diagnostic quizzes that adapt difficulty to each student’s pace.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-feature-card wk-card-activities"} -->
<div class="wp-block-column wk-feature-card wk-card-activities"><!-- wp:image {"sizeSlug":"full","className":"wk-card-doodle-bg"} -->
<figure class="wp-block-image size-full wk-card-doodle-bg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/card-activities-wavy-doodle.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-card-icon"} -->
<figure class="wp-block-image size-full wk-card-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-creative-activity.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Creative projects icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"wk-card-title"} -->
<h3 class="wp-block-heading wk-card-title"><?php echo esc_html__( 'Project', 'learnschool' ); ?><br><span class="wk-font-script"><?php echo esc_html__( 'Challenges', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-card-desc"} -->
<p class="wk-card-desc"><?php echo esc_html__( 'Real-world coding and writing assignments reviewed by expert mentors.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-feature-card wk-card-games"} -->
<div class="wp-block-column wk-feature-card wk-card-games"><!-- wp:image {"sizeSlug":"full","className":"wk-card-doodle-bg"} -->
<figure class="wp-block-image size-full wk-card-doodle-bg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/card-games-dots.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-card-icon"} -->
<figure class="wp-block-image size-full wk-card-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-game-controller.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Multiplayer quests icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"wk-card-title"} -->
<h3 class="wp-block-heading wk-card-title"><?php echo esc_html__( 'Multiplayer', 'learnschool' ); ?><br><span class="wk-font-script"><?php echo esc_html__( 'Quests', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-card-desc"} -->
<p class="wk-card-desc"><?php echo esc_html__( 'Live team-based science and math showdowns with peers worldwide!', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Why Learn Online', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Why Families Choose Our Online Academy', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'We combine the flexibility of modern digital education with the rigorous standards and human care of a premier school.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Self-Paced &amp; Live Schedules', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Watch recorded concept breakdowns anytime, or join live small-cohort discussions that accommodate busy family routines across global time zones.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( '1-on-1 Mentor Guidance', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Every enrolled student is paired with a dedicated subject mentor for personalized code review, essay critiques, and weekly progress check-ins.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Certified Badges &amp; Portfolios', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Learners graduate with demonstrable project portfolios, verified competency credentials, and digital certificates recognized by top prep schools.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"wk-teachers-wrapper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wk-teachers-wrapper"><!-- wp:group {"align":"wide","className":"wk-teachers-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide wk-teachers-container"><!-- wp:image {"sizeSlug":"full","className":"wk-teacher-doodle-star"} -->
<figure class="wp-block-image size-full wk-teacher-doodle-star"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/teacher-doodle-star.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":2,"className":"wk-teachers-title"} -->
<h2 class="wp-block-heading has-text-align-center wk-teachers-title"><?php echo esc_html__( 'Meet our online', 'learnschool' ); ?><br><span class="wk-accent-joy"><?php echo esc_html__( 'expert instructors &amp; mentors', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","className":"wk-teachers-grid"} -->
<div class="wp-block-columns alignwide wk-teachers-grid"><!-- wp:column {"className":"wk-teacher-card"} -->
<div class="wp-block-column wk-teacher-card"><!-- wp:image {"sizeSlug":"full","className":"wk-teacher-avatar"} -->
<figure class="wp-block-image size-full wk-teacher-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jacob.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jacob Jones', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"wk-teacher-name"} -->
<h3 class="wp-block-heading has-text-align-center wk-teacher-name"><?php echo esc_html__( 'Jacob Jones', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"wk-teacher-role"} -->
<p class="has-text-align-center wk-teacher-role"><?php echo esc_html__( 'Lead Coding &amp; AI Mentor', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-teacher-card"} -->
<div class="wp-block-column wk-teacher-card"><!-- wp:image {"sizeSlug":"full","className":"wk-teacher-avatar"} -->
<figure class="wp-block-image size-full wk-teacher-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-savannah.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Savannah Nguyen', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"wk-teacher-name"} -->
<h3 class="wp-block-heading has-text-align-center wk-teacher-name"><?php echo esc_html__( 'Savannah Nguyen', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"wk-teacher-role"} -->
<p class="has-text-align-center wk-teacher-role"><?php echo esc_html__( 'Mental Math Olympiad Coach', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-teacher-card"} -->
<div class="wp-block-column wk-teacher-card"><!-- wp:image {"sizeSlug":"full","className":"wk-teacher-avatar"} -->
<figure class="wp-block-image size-full wk-teacher-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-kristin.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Kristin Watson', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"wk-teacher-name"} -->
<h3 class="wp-block-heading has-text-align-center wk-teacher-name"><?php echo esc_html__( 'Kristin Watson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"wk-teacher-role"} -->
<p class="has-text-align-center wk-teacher-role"><?php echo esc_html__( 'Virtual Science Lab Director', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-teacher-card"} -->
<div class="wp-block-column wk-teacher-card"><!-- wp:image {"sizeSlug":"full","className":"wk-teacher-avatar"} -->
<figure class="wp-block-image size-full wk-teacher-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jenny.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jenny Wilson', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"wk-teacher-name"} -->
<h3 class="wp-block-heading has-text-align-center wk-teacher-name"><?php echo esc_html__( 'Jenny Wilson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"wk-teacher-role"} -->
<p class="has-text-align-center wk-teacher-role"><?php echo esc_html__( 'Creative Writing &amp; Digital Arts', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"wk-blog-wrapper","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wk-blog-wrapper"><!-- wp:group {"align":"wide","className":"wk-blog-header","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide wk-blog-header"><!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'Latest educational ', 'learnschool' ); ?><span class="wk-accent-blog"><?php echo esc_html__( 'guides', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-purple wk-btn-see-all"} -->
<div class="wp-block-button is-style-outline-purple wk-btn-see-all"><a class="wp-block-button__link wp-element-button" href="#articles"><?php echo esc_html__( 'All Guides', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"wk-blog-grid"} -->
<div class="wp-block-columns alignwide wk-blog-grid"><!-- wp:column {"className":"wk-blog-card"} -->
<div class="wp-block-column wk-blog-card"><!-- wp:image {"sizeSlug":"full","className":"wk-blog-card-thumb"} -->
<figure class="wp-block-image size-full wk-blog-card-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/blog-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Learning through interactive digital games', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"wk-blog-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group wk-blog-card-body"><!-- wp:heading {"level":3,"className":"wk-blog-card-title"} -->
<h3 class="wp-block-heading wk-blog-card-title"><a href="#article-1"><?php echo esc_html__( 'How Game-Based Coding Boosts Spatial Cognition', 'learnschool' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-blog-card-excerpt"} -->
<p class="wk-blog-card-excerpt"><?php echo esc_html__( 'Explore research showing how visual programming builds resilient logical reasoning in early learners.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"wk-blog-card-btn-wrap"} -->
<div class="wp-block-buttons wk-blog-card-btn-wrap"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#article-1"><?php echo esc_html__( 'Read Guide', 'learnschool' ); ?><span class="screen-reader-text"> <?php echo esc_html__( 'about How Game-Based Coding Boosts Spatial Cognition', 'learnschool' ); ?></span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-blog-card"} -->
<div class="wp-block-column wk-blog-card"><!-- wp:image {"sizeSlug":"full","className":"wk-blog-card-thumb"} -->
<figure class="wp-block-image size-full wk-blog-card-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/blog-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Parent strategies for online learning success', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"wk-blog-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group wk-blog-card-body"><!-- wp:heading {"level":3,"className":"wk-blog-card-title"} -->
<h3 class="wp-block-heading wk-blog-card-title"><a href="#article-2"><?php echo esc_html__( 'Screen-Smart Habits for Healthy Digital Students', 'learnschool' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-blog-card-excerpt"} -->
<p class="wk-blog-card-excerpt"><?php echo esc_html__( 'Practical ergonomic tips, eye rest intervals, and active posture guidelines for home learning desks.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"wk-blog-card-btn-wrap"} -->
<div class="wp-block-buttons wk-blog-card-btn-wrap"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#article-2"><?php echo esc_html__( 'Read Guide', 'learnschool' ); ?><span class="screen-reader-text"> <?php echo esc_html__( 'about Screen-Smart Habits for Healthy Digital Students', 'learnschool' ); ?></span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-blog-card"} -->
<div class="wp-block-column wk-blog-card"><!-- wp:image {"sizeSlug":"full","className":"wk-blog-card-thumb"} -->
<figure class="wp-block-image size-full wk-blog-card-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/blog-3.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Creative offline activities complementing online classes', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"wk-blog-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group wk-blog-card-body"><!-- wp:heading {"level":3,"className":"wk-blog-card-title"} -->
<h3 class="wp-block-heading wk-blog-card-title"><a href="#article-3"><?php echo esc_html__( 'Balancing Screen Lessons with Hands-On Maker Play', 'learnschool' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-blog-card-excerpt"} -->
<p class="wk-blog-card-excerpt"><?php echo esc_html__( 'Our recommended offline projects that reinforce concepts learned in virtual science and coding labs.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"wk-blog-card-btn-wrap"} -->
<div class="wp-block-buttons wk-blog-card-btn-wrap"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#article-3"><?php echo esc_html__( 'Read Guide', 'learnschool' ); ?><span class="screen-reader-text"> <?php echo esc_html__( 'about Balancing Screen Lessons with Hands-On Maker Play', 'learnschool' ); ?></span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"border":{"radius":"32px"},"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6","right":"var:preset|spacing|step-6"}},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"primary-dark","textColor":"base","className":"is-style-learnschool-card-large","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-learnschool-card-large has-base-color has-primary-dark-background-color has-text-color has-background" style="border-radius:32px;box-shadow:var(--wp--preset--shadow--elevated);padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-6);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-6)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Risk-Free Learning Exploration', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"textColor":"base","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Start Your 14-Day Free Online Academy Trial', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Enjoy unlimited access to over 100 live interactive workshops, gamified quizzes, and self-paced video lessons. No credit card required.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Instant access to full course catalog &amp; learning materials', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Free 30-minute 1-on-1 mentor onboarding session', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Zero commitment — cancel anytime with a single click', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Create Student Account', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Set up your student profile in less than 60 seconds.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form action="#trial" method="post" onsubmit="event.preventDefault(); alert('<?php echo esc_attr__( 'Your 14-day free trial has been activated! Check your inbox for login details.', 'learnschool' ); ?>');">
<p style="margin-bottom:var(--wp--preset--spacing--step-2);"><input class="wk-cta-input-field" type="text" name="parent_name" placeholder="<?php echo esc_attr__( 'Parent / Guardian Name', 'learnschool' ); ?>" required aria-label="<?php echo esc_attr__( 'Parent / Guardian Name', 'learnschool' ); ?>" style="width:100%;box-sizing:border-box;" /></p>
<p style="margin-bottom:var(--wp--preset--spacing--step-2);"><input class="wk-cta-input-field" type="email" name="email" placeholder="<?php echo esc_attr__( 'Email Address', 'learnschool' ); ?>" required aria-label="<?php echo esc_attr__( 'Email Address', 'learnschool' ); ?>" style="width:100%;box-sizing:border-box;" /></p>
<p style="margin-bottom:var(--wp--preset--spacing--step-3);"><select class="wk-cta-input-field" name="grade_level" aria-label="<?php echo esc_attr__( 'Select Grade Level', 'learnschool' ); ?>" style="width:100%;box-sizing:border-box;background-color:var(--wp--preset--color--base);"><option value=""><?php echo esc_html__( 'Select Grade Level (Grades 1–10)', 'learnschool' ); ?></option><option value="grades-1-3"><?php echo esc_html__( 'Grades 1–3 (Ages 6–8)', 'learnschool' ); ?></option><option value="grades-4-6"><?php echo esc_html__( 'Grades 4–6 (Ages 9–11)', 'learnschool' ); ?></option><option value="grades-7-10"><?php echo esc_html__( 'Grades 7–10 (Ages 12–15)', 'learnschool' ); ?></option></select></p>
<button type="submit" class="wp-block-button__link wp-element-button" style="width:100%;background-color:var(--wp--preset--color--primary);color:var(--wp--preset--color--base);border-radius:9999px;padding:var(--wp--preset--spacing--step-2) var(--wp--preset--spacing--step-4);border:none;font-weight:700;cursor:pointer;"><?php echo esc_html__( 'Start Free Trial Now', 'learnschool' ); ?></button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->