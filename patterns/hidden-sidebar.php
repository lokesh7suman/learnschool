<?php
/**
 * Title: Default School Sidebar
 * Slug: learnschool/hidden-sidebar
 * Categories: learnschool/posts
 * Block Types: core/template-part/sidebar
 * Inserter: false
 * Description: Localized sidebar featuring site search, recent school news links, and an admissions tour card.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-learnschool-soft-card","style":{"border":{"radius":"24px","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"borderColor":"border","backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-soft-card has-border-color has-border-border-color has-base-subtle-background-color has-background" style="border-style:solid;border-width:1px;border-radius:24px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":2,"fontSize":"large","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}}}} -->
<h2 class="wp-block-heading has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Search School', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'learnschool' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search articles, guides...', 'learnschool' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'learnschool' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-learnschool-soft-card","style":{"border":{"radius":"24px","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"borderColor":"border","backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-soft-card has-border-color has-border-border-color has-base-subtle-background-color has-background" style="border-style:solid;border-width:1px;border-radius:24px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":2,"fontSize":"large","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}}}} -->
<h2 class="wp-block-heading has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Recent News', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":4,"displayPostDate":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-learnschool-card","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"primary-light","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-contrast-color has-primary-light-background-color has-text-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":2,"fontSize":"large","textColor":"primary-dark","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-2"}}}} -->
<h2 class="wp-block-heading has-primary-dark-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Plan a Family Visit', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}}} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'See our classrooms in action and talk with our admissions coordinator.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>"><?php echo esc_html__( 'Book a Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
