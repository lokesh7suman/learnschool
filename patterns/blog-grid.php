<?php
/**
 * Title: Blog Grid (3 Columns)
 * Slug: learnschool/blog-grid
 * Categories: posts, learnschool
 * Description: Exact Figma 3-column rounded blog cards with top cover images, titles, excerpts, and mini pill buttons.
 * Keywords: blog, articles, news, kids, learnschool, figma
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
<!-- wp:group {"align":"full","className":"wk-blog-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-blog-wrapper"><!-- wp:heading {"textAlign":"center","className":"wk-section-title"} -->
<h2 class="wp-block-heading has-text-align-center wk-section-title"><?php echo esc_html__( 'From the Blog', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"wk-section-desc"} -->
<p class="has-text-align-center wk-section-desc"><?php echo esc_html__( 'Tips, resources, and stories from our learning community.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"wk-blog-card is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group wk-blog-card is-style-learnschool-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:group {"className":"wk-blog-card-body","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group wk-blog-card-body"><!-- wp:post-terms {"term":"category","className":"wk-blog-card-category"} /-->

<!-- wp:post-title {"isLink":true,"className":"wk-blog-card-title"} /-->

<!-- wp:post-excerpt {"numberOfWords":20,"className":"wk-blog-card-excerpt"} /-->

<!-- wp:post-date {"className":"wk-blog-card-date"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Read More', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'No posts found.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
