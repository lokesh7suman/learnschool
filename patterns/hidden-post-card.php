<?php
/**
 * Title: Post Card Item
 * Slug: learnschool/hidden-post-card
 * Categories: learnschool/posts
 * Inserter: false
 * Description: Reusable post card markup with featured image, category pill badge, publish date, title, excerpt, and localized read-more link.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-4","left":"0","right":"0"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-4);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","scale":"cover"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|step-4","bottom":"0","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:0;padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:post-terms {"term":"category","className":"is-style-learnschool-badge"} /-->

<!-- wp:post-date {"isLink":true,"fontSize":"small","textColor":"contrast-subtle","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":18,"textColor":"contrast-subtle","fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"0","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:0;padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:read-more {"content":"<?php echo esc_attr__( 'Read More', 'learnschool' ); ?>","style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
