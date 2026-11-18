<?php
/**
 * Title: Blog (Dynamic Query Loop Grid)
 * Slug: learnschool/blog-3
 * Categories: posts
 * Inserter: yes
 * Keywords: query, dynamic, posts, fse, pagination, loop
 * Description: Dynamic WordPress query loop grid with post template, featured images, author meta, and pagination controls.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Classroom Journal', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-2"}}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--step-1);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Latest From the', 'learnschool' ); ?> <span class="wk-accent-blog"><?php echo esc_html__( 'Classroom', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size"><?php esc_html_e( 'Explore recent projects, pedagogical insights, and student celebrations across all grade levels.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date"},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px"},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","className":"is-style-learnschool-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"16px"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} /-->

<!-- wp:post-date {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast-subtle","fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}}} /-->

<!-- wp:post-excerpt {"moreText":"<?php echo esc_html__( 'Read more →', 'learnschool' ); ?>","excerptLength":20,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-5"}}}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color"><?php esc_html_e( 'No classroom stories found. Please check back soon!', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->