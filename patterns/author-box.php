<?php
/**
 * Title: Single Post Author Bio Card
 * Slug: learnschool/author-box
 * Categories: learnschool/posts, learnschool/team
 * Description: Soft studio card displaying the post author's circular halo avatar, educator label, name link, and biography for single posts or articles.
 * Keywords: author, bio, profile, writer, educator, card
 * Viewport Width: 800
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
<!-- wp:group {"className":"is-style-learnschool-soft-card learnschool-author-box","style":{"border":{"radius":"24px","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"},"margin":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5"},"blockGap":"var:preset|spacing|step-4"}},"borderColor":"border-default","backgroundColor":"base-subtle","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-learnschool-soft-card learnschool-author-box has-border-color has-border-default-border-color has-base-subtle-background-color has-background" style="border-style:solid;border-width:1px;border-radius:24px;margin-top:var(--wp--preset--spacing--step-5);margin-bottom:var(--wp--preset--spacing--step-5);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:avatar {"size":72,"borderColor":"primary-light","style":{"border":{"radius":"9999px","width":"4px","style":"solid"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-2","margin":{"bottom":"var:preset|spacing|step-1"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-1)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-weight:700;letter-spacing:0.06em;text-transform:uppercase"><?php echo esc_html__( 'About the Author', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast-subtle","fontSize":"x-small"} -->
<p class="has-contrast-subtle-color has-text-color has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-weight:600"><?php echo esc_html__( 'Educator & Contributor', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontWeight":"700"}},"fontSize":"large"} /-->

<!-- wp:post-author-biography {"textColor":"contrast-subtle","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
