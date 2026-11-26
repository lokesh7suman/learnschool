<?php
/**
 * Title: Interactive Features 3-Card Showcase
 * Slug: learnschool/features-activities
 * Categories: learnschool/features
 * Description: Three-column playful feature showcase with tilted hashtag doodles and colorful Fun Quiz, Creative Activities, and Learn with Games cards.
 * Keywords: features, interactive, quiz, activities, games, cards
 * Viewport Width: 1280
 * Inserter: true
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"anchor":"programs","tagName":"section","align":"full","className":"learnschool-interactive-features","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull learnschool-interactive-features has-base-background-color has-background" id="programs" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"},"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Our ', 'learnschool' ); ?><span class="learnschool-script has-primary-color"><?php echo esc_html__( 'interactive', 'learnschool' ); ?></span><br><?php echo esc_html__( 'features', 'learnschool' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%"><!-- wp:group {"className":"learnschool-hashtags-cluster","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group learnschool-hashtags-cluster"><!-- wp:paragraph {"className":"learnschool-tag-tilt-left","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"primary-light","textColor":"contrast","fontSize":"medium"} -->
<p class="learnschool-tag-tilt-left has-contrast-color has-primary-light-background-color has-text-color has-background has-medium-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( '#funny', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"learnschool-tag-tilt-right","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"accent","textColor":"contrast","fontSize":"medium"} -->
<p class="learnschool-tag-tilt-right has-contrast-color has-accent-background-color has-text-color has-background has-medium-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( '#enjoy', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"learnschool-tag-tilt-flat","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"primary","textColor":"base","fontSize":"medium"} -->
<p class="learnschool-tag-tilt-flat has-base-color has-primary-background-color has-text-color has-background has-medium-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( '#happy', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"learnschool-feature-card learnschool-feature-card--lilac","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"48px"},"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}}},"backgroundColor":"primary-light","textColor":"contrast","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group learnschool-feature-card learnschool-feature-card--lilac has-contrast-color has-primary-light-background-color has-text-color has-background" style="border-radius:48px;min-height:100%;padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:html -->
<div class="learnschool-feature-card__badge" aria-hidden="true">
<svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="15" x2="15" y2="15"/><line x1="9" y1="11" x2="11" y2="11"/></svg>
</div>
<!-- /wp:html -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"x-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-x-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Fun ', 'learnschool' ); ?><br><span class="learnschool-script"><?php echo esc_html__( 'Quiz', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium","textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Test your understanding with short, playful quizzes and joyful milestone check-ins.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"learnschool-feature-card learnschool-feature-card--purple","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"48px"},"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group learnschool-feature-card learnschool-feature-card--purple has-base-color has-primary-background-color has-text-color has-background" style="border-radius:48px;min-height:100%;padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:html -->
<div class="learnschool-feature-card__badge" aria-hidden="true">
<svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .23 2.23 1.5 3.5A4.61 4.61 0 0 1 8.91 14"/></svg>
</div>
<!-- /wp:html -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"x-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-x-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Creative ', 'learnschool' ); ?><br><span class="learnschool-script"><?php echo esc_html__( 'Activities', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium","textColor":"base"} -->
<p class="has-base-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Discover enjoyable activities such as watercolor painting, clay crafting, and early science.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"learnschool-feature-card learnschool-feature-card--gold","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"48px"},"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}}},"backgroundColor":"accent","textColor":"contrast","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group learnschool-feature-card learnschool-feature-card--gold has-contrast-color has-accent-background-color has-text-color has-background" style="border-radius:48px;min-height:100%;padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:html -->
<div class="learnschool-feature-card__badge" aria-hidden="true">
<svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="6" y1="11" x2="10" y2="11"/><line x1="8" y1="9" x2="8" y2="13"/><line x1="15" y1="12" x2="15.01" y2="12"/><line x1="18" y1="10" x2="18.01" y2="10"/><path d="M17.32 5H6.68a4 4 0 0 0-3.978 3.59c-.006.052-.01.101-.017.152C2.604 9.416 2 14.456 2 16a3 3 0 0 0 3 3c1 0 1.5-.5 2-1l1.414-1.414A2 2 0 0 1 9.828 16h4.344a2 2 0 0 1 1.414.586L17 18c.5.5 1 1 2 1a3 3 0 0 0 3-3c0-1.545-.604-6.584-.685-7.258-.007-.05-.011-.1-.017-.151A4 4 0 0 0 17.32 5z"/></svg>
</div>
<!-- /wp:html -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"x-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-x-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Learn with ', 'learnschool' ); ?><br><span class="learnschool-script"><?php echo esc_html__( 'Games', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium","textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Learn something new every day while children explore collaborative puzzle games.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
