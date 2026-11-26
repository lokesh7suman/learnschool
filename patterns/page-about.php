<?php
/**
 * Title: About Us Page Layout
 * Slug: learnschool/page-about
 * Categories: learnschool/pages
 * Post Types: page
 * Block Types: core/post-content
 * Description: Focused About Us page layout featuring an editorial mission header, campus learning spaces gallery, educator portrait showcase, and family testimonials.
 * Keywords: about, mission, team, leadership, campus, school, page
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
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<!-- wp:pattern {"slug":"learnschool/gallery-campus"} /-->
	<!-- wp:pattern {"slug":"learnschool/teachers-photos-grid"} /-->
	<!-- wp:pattern {"slug":"learnschool/testimonials-cards"} /-->
</div>
<!-- /wp:group -->
