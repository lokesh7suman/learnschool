<?php
/**
 * Title: Post Meta
 * Slug: learnschool/post-meta
 * Categories: learnschool/features
 * Description: Post publish date and author byline metadata bar for single posts.
 * Keywords: post meta, date, author, byline, single post
 * Inserter: false
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-2","padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-3"}},"border":{"bottom":{"color":"var:preset|color|border","style":"solid","width":"1px"}}},"textColor":"contrast-subtle","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-contrast-subtle-color has-text-color has-small-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-3)"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p style="margin-top:0;margin-bottom:0">&middot;</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-1"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'By', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary-dark"}}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
