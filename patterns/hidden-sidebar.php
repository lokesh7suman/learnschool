<?php
/**
 * Title: Default School Sidebar
 * Slug: learnschool/hidden-sidebar
 * Categories: learnschool/posts
 * Block Types: core/template-part/sidebar
 * Inserter: false
 * Description: Localized sidebar featuring site search, curated topic chips, and recent school news links.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"className":"learnschool-sidebar-rail","style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}},"layout":{"type":"default"}} -->
<div class="wp-block-group learnschool-sidebar-rail"><!-- wp:group {"className":"is-style-learnschool-card","style":{"border":{"radius":"24px","width":"1px","style":"solid"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"borderColor":"border-default","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-border-color has-border-default-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":2,"fontSize":"medium","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}}}} -->
<h2 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Search School', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'learnschool' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search articles, guides...', 'learnschool' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'learnschool' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-learnschool-soft-card","style":{"border":{"radius":"24px","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"borderColor":"border-default","backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-soft-card has-border-color has-border-default-border-color has-base-subtle-background-color has-background" style="border-style:solid;border-width:1px;border-radius:24px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":2,"fontSize":"medium","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}}}} -->
<h2 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Popular Topics', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"taxonomy":"category","numberOfTags":8,"smallestFontSize":"0.875rem","largestFontSize":"0.875rem"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-learnschool-card","style":{"border":{"radius":"24px","width":"1px","style":"solid"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"borderColor":"border-default","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-border-color has-border-default-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":2,"fontSize":"medium","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-2"}}}} -->
<h2 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Recent News', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
