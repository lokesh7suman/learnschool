<?php
/**
 * Title: Post Loop Grid
 * Slug: learnschool/post-loop-grid
 * Categories: learnschool/posts
 * Description: 3-column post loop grid that inherits query context, with responsive card layout, pagination, and empty state.
 * Keywords: query, loop, blog, archive, grid, learnschool
 * Viewport Width: 1280
 * Block Types: core/query
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
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:pattern {"slug":"learnschool/card-post"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"flex","flexDirection":"column","alignItems":"center","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-6);padding-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"medium","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'No posts or announcements found.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
