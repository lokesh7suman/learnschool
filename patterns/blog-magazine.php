<?php
/**
 * Title: Blog (2 Columns)
 * Slug: learnschool/blog-2
 * Categories: posts, learnschool
 * Inserter: yes
 * Keywords: blog, magazine, featured, article, news, editorial
 * Description: 2-column blog layout with real posts query.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","className":"wk-blog-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-blog-wrapper"><!-- wp:heading {"textAlign":"center","className":"wk-section-title"} -->
<h2 class="wp-block-heading has-text-align-center wk-section-title"><?php echo esc_html__( 'School News &amp; Stories', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"wk-section-desc"} -->
<p class="has-text-align-center wk-section-desc"><?php echo esc_html__( 'Discover the latest stories, achievements, and updates from our school.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":2,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"wk-blog-card is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group wk-blog-card is-style-learnschool-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:group {"className":"wk-blog-card-body","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group wk-blog-card-body"><!-- wp:post-terms {"term":"category","className":"wk-blog-card-category"} /-->

<!-- wp:post-title {"isLink":true,"className":"wk-blog-card-title"} /-->

<!-- wp:post-excerpt {"numberOfWords":25,"className":"wk-blog-card-excerpt"} /-->

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
