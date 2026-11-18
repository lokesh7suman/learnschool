<?php
/**
 * Title: Features Cards Grid
 * Slug: learnschool/features-cards
 * Categories: features, learnschool
 * Description: Three-column interactive feature cards with icons and hashtags.
 * Keywords: features, services, cards, interactive
 * Inserter: yes
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
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--quicksand)"><?php echo esc_html__( 'Our ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Interactive', 'learnschool' ); ?></span><br><?php echo esc_html__( 'Features & Pillars', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"16px","right":"16px"}},"typography":{"fontWeight":"700"}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-primary-light-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:6px;padding-right:16px;padding-bottom:6px;padding-left:16px;font-weight:700"><?php echo esc_html__( '#enjoy', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"16px","right":"16px"}},"typography":{"fontWeight":"700"}},"backgroundColor":"warning","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-warning-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:6px;padding-right:16px;padding-bottom:6px;padding-left:16px;font-weight:700"><?php echo esc_html__( '#explore', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"16px","right":"16px"}},"typography":{"fontWeight":"700"}},"backgroundColor":"base","textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-base-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:6px;padding-right:16px;padding-bottom:6px;padding-left:16px;font-weight:700"><?php echo esc_html__( '#grow', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":56,"height":56,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-quiz-note.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Quiz icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-2"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Fun Quiz Quests', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Test your understanding with short, engaging visual quizzes and playful learning questions.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#quiz"><?php echo esc_html__( 'Start Quiz', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":56,"height":56,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-creative-activity.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Creative activities icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-2"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Creative Activities', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Discover enjoyable hands-on activities such as coloring, crafting, clay sculpture, and beginner science.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#activities"><?php echo esc_html__( 'View Activities', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":56,"height":56,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-game-controller.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Game controller icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-2"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Learn with Games', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Learn something new every day while your kids play curated educational logic games.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#games"><?php echo esc_html__( 'Play Games', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
