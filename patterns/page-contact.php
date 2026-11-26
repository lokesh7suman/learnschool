<?php
/**
 * Title: Contact & Campus Visit Page Layout
 * Slug: learnschool/page-contact
 * Categories: learnschool/pages
 * Post Types: page
 * Block Types: core/post-content
 * Description: Full Contact Us page layout combining campus contact cards, open house schedule, and quick parent FAQ cards.
 * Keywords: contact, visit, hours, campus, location, page
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
	<!-- wp:pattern {"slug":"learnschool/contact-campus"} /-->
	<!-- wp:pattern {"slug":"learnschool/events"} /-->
	<!-- wp:pattern {"slug":"learnschool/faq-simple"} /-->
</div>
<!-- /wp:group -->
