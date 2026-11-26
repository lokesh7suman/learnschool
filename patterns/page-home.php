<?php
/**
 * Title: Home Page Layout
 * Slug: learnschool/page-home
 * Categories: learnschool/pages
 * Post Types: page
 * Block Types: core/post-content
 * Description: Focused homepage starter layout combining the playful doodles hero, safety trust strip, interactive features, faculty portrait grid, live blog feed, and tour CTA.
 * Keywords: home, homepage, landing, full-page, layout
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
	<!-- wp:pattern {"slug":"learnschool/hero-playful-doodles"} /-->
	<!-- wp:pattern {"slug":"learnschool/trust-strip"} /-->
	<!-- wp:pattern {"slug":"learnschool/features-activities"} /-->
	<!-- wp:pattern {"slug":"learnschool/teachers-photos-grid"} /-->
	<!-- wp:pattern {"slug":"learnschool/blog-latest"} /-->
	<!-- wp:pattern {"slug":"learnschool/cta-community"} /-->
</div>
<!-- /wp:group -->
