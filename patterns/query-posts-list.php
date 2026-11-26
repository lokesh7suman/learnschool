<?php
/**
 * Title: Posts Horizontal List Layout
 * Slug: learnschool/query-posts-list
 * Categories: learnschool/posts
 * Block Types: core/query
 * Description: Editorial single-column horizontal post cards with media thumbnail on the left and details on the right.
 * Keywords: blog, posts, list, query, journal, editorial
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
<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}},"layout":{"type":"default"}} -->
<!-- wp:group {"className":"is-style-learnschool-card learnschool-post-list-card","backgroundColor":"base","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-learnschool-card learnschool-post-list-card has-base-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"16px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2","margin":{"bottom":"var:preset|spacing|step-1"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-1)"><!-- wp:post-terms {"term":"category","className":"is-style-learnschool-badge"} /-->
<!-- wp:post-date {"fontSize":"small","textColor":"contrast-subtle"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:post-excerpt {"numberOfWords":22,"textColor":"contrast-subtle","fontSize":"small"} /-->

<!-- wp:read-more {"content":"<?php echo esc_attr__( 'Read More', 'learnschool' ); ?>","style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-5"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4"}}}} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--step-4);margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'No posts or announcements published yet.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
