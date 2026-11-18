<?php
/**
 * Title: Top Bar with Contact Details
 * Slug: learnschool/top-bar-contact
 * Categories: header, learnschool
 * Keywords: top bar, utility, contact, phone
 * Description: Top utility row providing contact info and portal links.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 * Viewport Width: 1280
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"div","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"primary-dark","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-dark-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size" style="display:inline-flex;align-items:center;gap:6px"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg><span><?php esc_html_e( 'Main Office: (555) 234-5678', 'learnschool' ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size" style="display:inline-flex;align-items:center;gap:6px"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg><span><?php esc_html_e( 'Main Campus: 100 Academy Way, Cambridge', 'learnschool' ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#" style="color:var(--wp--preset--color--base);text-decoration:none"><?php esc_html_e( 'Parent Portal', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#" style="color:var(--wp--preset--color--base);text-decoration:none"><?php esc_html_e( 'Student Portal', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#" style="color:var(--wp--preset--color--base);text-decoration:none"><?php esc_html_e( 'Staff Directory', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#" style="color:var(--wp--preset--color--secondary);text-decoration:none;font-weight:700"><?php esc_html_e( 'Academic Calendar', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
