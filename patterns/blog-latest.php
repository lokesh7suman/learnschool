<?php
/**
 * Title: Read Our Blog 3-Card Grid
 * Slug: learnschool/blog-latest
 * Categories: learnschool/posts, learnschool/features
 * Description: Editorial three-column blog showcase with "Read our blog" script heading, "See All" action link, and dynamic three-column latest posts Query Loop.
 * Keywords: blog, articles, stories, journal, reading, cards, posts, query
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

$learnschool_posts_page = ( 'page' === get_option( 'show_on_front' ) ) ? absint( get_option( 'page_for_posts' ) ) : 0;
$learnschool_blog_url   = home_url( '/#blog' );
if ( $learnschool_posts_page > 0 ) {
	$learnschool_permalink = get_permalink( $learnschool_posts_page );
	if ( is_string( $learnschool_permalink ) ) {
		$learnschool_blog_url = $learnschool_permalink;
	}
}
?>
<!-- wp:group {"anchor":"blog","tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" id="blog" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-5"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Read our ', 'learnschool' ); ?><span class="learnschool-script has-primary-color"><?php echo esc_html__( 'blog', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $learnschool_blog_url ); ?>"><?php echo esc_html__( 'See All', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-5","left":"0","right":"0"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-5);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","scale":"cover"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:post-terms {"term":"category","className":"is-style-learnschool-badge"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","textColor":"contrast","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":16,"textColor":"contrast-subtle","fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:read-more {"content":"<?php echo esc_attr__( 'Read More', 'learnschool' ); ?>","style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4"}}}} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--step-4);margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'No school articles published yet. Add your first post to see it featured here.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
