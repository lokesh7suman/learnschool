<?php
/**
 * Title: Search Results Main Content
 * Slug: learnschool/hidden-search-main
 * Categories: learnschool/posts
 * Inserter: false
 * Description: Localized search header, retry search form, results grid, and empty-search state for the search template.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-8","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-8);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","contentSize":"780px"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:query-title {"type":"search","textAlign":"center","fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}},"typography":{"fontFamily":"var:preset|font-family|quicksand"}}} /-->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"580px"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'learnschool' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search articles, guides...', 'learnschool' ); ?>","width":100,"widthUnit":"%","buttonText":"<?php echo esc_attr__( 'Search', 'learnschool' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

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
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--step-4);margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'No results found matching your search. Please try another keyword.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
