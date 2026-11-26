<?php
/**
 * Title: About Us Page Layout
 * Slug: learnschool/page-about
 * Categories: learnschool/pages
 * Post Types: page
 * Block Types: core/post-content
 * Description: Full About Us page layout featuring school mission highlights, safety and credential trust strip, leadership spotlight, family testimonials, and community CTA.
 * Keywords: about, mission, team, leadership, school, page
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
	<!-- wp:pattern {"slug":"learnschool/hero-split-checklist"} /-->
	<!-- wp:pattern {"slug":"learnschool/trust-strip"} /-->
	<!-- wp:pattern {"slug":"learnschool/teachers-spotlight"} /-->
	<!-- wp:pattern {"slug":"learnschool/testimonials-cards"} /-->
	<!-- wp:pattern {"slug":"learnschool/cta-community"} /-->
</div>
<!-- /wp:group -->
