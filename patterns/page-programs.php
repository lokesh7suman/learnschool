<?php
/**
 * Title: Programs & Curriculum Page Layout
 * Slug: learnschool/page-programs
 * Categories: learnschool/pages
 * Post Types: page
 * Block Types: core/post-content
 * Description: Complete Programs page layout with campus tour hero, signature learning programs, tactile curriculum showcase, four-step learning journey, and tour CTA.
 * Keywords: programs, academics, curriculum, classes, page
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
	<!-- wp:pattern {"slug":"learnschool/hero-split-tour"} /-->
	<!-- wp:pattern {"slug":"learnschool/interactive-programs"} /-->
	<!-- wp:pattern {"slug":"learnschool/learning-materials-reversed"} /-->
	<!-- wp:pattern {"slug":"learnschool/features-journey"} /-->
	<!-- wp:pattern {"slug":"learnschool/cta-community"} /-->
</div>
<!-- /wp:group -->
