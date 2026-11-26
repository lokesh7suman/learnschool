<?php
/**
 * Title: Admissions & FAQ Page Layout
 * Slug: learnschool/page-admissions
 * Categories: learnschool/pages
 * Post Types: page
 * Block Types: core/post-content
 * Description: Complete Admissions page layout with enrollment roadmap steps, open house events schedule, expandable FAQ accordion, and tour scheduling banner.
 * Keywords: admissions, enrollment, apply, faq, events, page
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
	<!-- wp:pattern {"slug":"learnschool/admissions-roadmap"} /-->
	<!-- wp:pattern {"slug":"learnschool/events"} /-->
	<!-- wp:pattern {"slug":"learnschool/faq-accordion-doodle"} /-->
	<!-- wp:pattern {"slug":"learnschool/cta-community"} /-->
</div>
<!-- /wp:group -->
