<?php
/**
 * Title: Blog Post Card
 * Slug: learnschool/card-post
 * Categories: learnschool/card, learnschool/posts
 * Description: Modular blog post card with rounded styling, 16/9 featured image, category badge, publication date, Quicksand title, excerpt, and read more link.
 * Keywords: card, blog, post, article, news, learnschool
 * Viewport Width: 600
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
<!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-4","left":"0","right":"0"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-4);padding-left:0"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"0","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:0;padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-2)"><!-- wp:post-terms {"term":"category","className":"is-style-learnschool-badge"} /-->
<!-- wp:post-date {"fontSize":"small","textColor":"contrast-subtle"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"large","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-2"}}}} /-->

<!-- wp:post-excerpt {"numberOfWords":18,"textColor":"contrast-subtle","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"0","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:0;padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:read-more {"content":"<?php echo esc_html__( 'Read Article', 'learnschool' ); ?> →","style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
