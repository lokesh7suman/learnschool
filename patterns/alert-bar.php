<?php
/**
 * Title: Alert Bar
 * Slug: learnschool/alert-bar
 * Categories: header
 * Keywords: alert, notice, emergency, banner, announcement
 * Description: A high-visibility alert banner for urgent school notices and announcements.
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
<!-- wp:group {"tagName":"aside","align":"full","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<aside class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background" aria-label="<?php echo esc_attr__( 'Notice', 'learnschool' ); ?>" style="padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:500;display:inline-flex;align-items:center;gap:10px"><span style="display:inline-flex;align-items:center;justify-content:center;width:26px;height:26px;border-radius:9999px;background:rgba(255,255,255,0.18);flex-shrink:0;"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3 11 18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg></span><span><?php echo esc_html__( 'Admissions for Academic Year 2026–2027 are now open! Early registration benefits apply.', 'learnschool' ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"primary-dark","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"16px","right":"16px"}},"typography":{"fontWeight":"700"}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-primary-dark-color has-base-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="#admissions" style="border-radius:9999px;padding-top:5px;padding-right:16px;padding-bottom:5px;padding-left:16px;font-weight:700"><?php echo esc_html__( 'Apply Online', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></aside>
<!-- /wp:group -->
