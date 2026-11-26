<?php
/**
 * Title: Safety & Credential Trust Strip
 * Slug: learnschool/trust-strip
 * Categories: learnschool/features
 * Description: 4-item credential bar highlighting keypad security, background checks, organic kitchen, and state licensing.
 * Keywords: trust, safety, licensing, credentials, security, preschool
 * Inserter: true
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
<!-- wp:group {"tagName":"section","align":"full","className":"is-style-learnschool-trust-strip","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-learnschool-trust-strip has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:html -->
<div class="learnschool-icon-wrap" style="color:var(--wp--preset--color--primary);background:rgba(112,79,230,0.08);width:52px;height:52px;border-radius:16px;display:inline-flex;align-items:center;justify-content:center;flex-shrink:0">
<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
</div>
<!-- /wp:html -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"medium"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Keypad Security', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Controlled badge access & 24/7 HD video monitors', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:html -->
<div class="learnschool-icon-wrap" style="color:var(--wp--preset--color--primary);background:rgba(112,79,230,0.08);width:52px;height:52px;border-radius:16px;display:inline-flex;align-items:center;justify-content:center;flex-shrink:0">
<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="16 11 18 13 22 9"/></svg>
</div>
<!-- /wp:html -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"medium"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Vetted Educators', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( '100% FBI background-checked & CPR-certified staff', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:html -->
<div class="learnschool-icon-wrap" style="color:var(--wp--preset--color--secondary-dark);background:rgba(255,190,23,0.15);width:52px;height:52px;border-radius:16px;display:inline-flex;align-items:center;justify-content:center;flex-shrink:0">
<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2v2"/><path d="M17 5c0 4.5-2 9-5 13-3-4-5-8.5-5-13a5 5 0 0 1 10 0z"/></svg>
</div>
<!-- /wp:html -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"medium"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Allergy-Safe Food', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Organic scratch kitchen & 100% nut-free campus', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:html -->
<div class="learnschool-icon-wrap" style="color:var(--wp--preset--color--primary);background:rgba(112,79,230,0.08);width:52px;height:52px;border-radius:16px;display:inline-flex;align-items:center;justify-content:center;flex-shrink:0">
<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
</div>
<!-- /wp:html -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"medium"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'State Licensed', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Exceeds state early-education quality and safety bars', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
