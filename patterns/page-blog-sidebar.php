<?php
/**
 * Title: Blog & School News Page (With Sidebar)
 * Slug: learnschool/page-blog-sidebar
 * Categories: learnschool/pages
 * Post Types: page
 * Block Types: core/post-content
 * Description: Complete Blog & School Journal page layout with editorial intro header, blog feed paired with a right sidebar rail, and tour enrollment CTA. Best paired with the Page (No Title) or Full Width template.
 * Keywords: blog, news, journal, articles, sidebar, two-columns, page
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
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:group {"tagName":"section","align":"full","style":{"border":{"bottom":{"color":"var:preset|color|border-default","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained","contentSize":"780px"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-default);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'School Stories & Classroom ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-wavy has-primary-color" style="white-space:nowrap"><?php echo esc_html__( 'Journal', 'learnschool' ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large","textColor":"contrast-subtle","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Explore seasonal reflections, classroom activity highlights, and parenting tips from our early learning educators.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"learnschool/posts-with-sidebar"} /-->

<!-- wp:pattern {"slug":"learnschool/cta-community"} /--></div>
<!-- /wp:group -->
