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
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained","contentSize":"780px"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Nurturing Curious Minds & ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-wavy has-primary-color" style="white-space:nowrap"><?php echo esc_html__( 'Community', 'learnschool' ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large","textColor":"contrast-subtle","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Explore our sunlit learning studios, meet our dedicated educators, and hear from families who learn and grow with us.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

	<!-- wp:pattern {"slug":"learnschool/gallery-campus"} /-->
	<!-- wp:pattern {"slug":"learnschool/teachers-photos-grid"} /-->
	<!-- wp:pattern {"slug":"learnschool/testimonials-cards"} /-->
</div>
<!-- /wp:group -->
