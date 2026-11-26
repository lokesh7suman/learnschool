<?php
/**
 * Title: Single Post Navigation
 * Slug: learnschool/hidden-post-navigation
 * Categories: learnschool/posts
 * Inserter: false
 * Description: Localized previous and next post navigation bar for single posts.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"className":"learnschool-post-nav","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5"},"blockGap":"var:preset|spacing|step-4"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group learnschool-post-nav" style="margin-top:var(--wp--preset--spacing--step-5);margin-bottom:var(--wp--preset--spacing--step-5)"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"label":"<?php echo esc_attr__( 'Previous Story', 'learnschool' ); ?>"} /-->
<!-- wp:post-navigation-link {"type":"next","showTitle":true,"label":"<?php echo esc_attr__( 'Next Story', 'learnschool' ); ?>"} /--></div>
<!-- /wp:group -->
