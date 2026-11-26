<?php
/**
 * Title: Default Posts 2-Column Grid Query
 * Slug: learnschool/query-posts-grid-default
 * Categories: learnschool/posts
 * Block Types: core/query
 * Inserter: false
 * Description: Two-column editorial Query Loop grid inheriting the page or archive query, shared across Home, Index, and Archive templates.
 * Keywords: blog, posts, grid, query, loop, archive
 * Viewport Width: 1280
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:pattern {"slug":"learnschool/hidden-post-card"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-5"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4"}}}} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--step-4);margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'No posts or announcements found.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
