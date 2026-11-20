<?php
/**
 * Title: Hero with Tour Booking & Arch Photo
 * Slug: learnschool/hero-split-tour
 * Categories: learnschool/hero
 * Description: Split hero layout with headline, handwriting accent, tour booking CTA, trust metrics, and arch-framed classroom portrait.
 * Keywords: hero, banner, tour, admissions, preschool, kindergarten
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
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"54%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:54%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"border":{"radius":"9999px"}},"backgroundColor":"primary-light","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-primary-light-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small","textColor":"primary"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'State-Licensed Early Learning & Care', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3"}},"typography":{"fontFamily":"var:preset|font-family|quicksand","lineHeight":"1.15"}},"fontSize":"display"} -->
<h1 class="wp-block-heading has-display-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-3);font-family:var(--wp--preset--font-family--quicksand);line-height:1.15"><?php echo esc_html__( 'The best place to ', 'learnschool' ); ?><span class="learnschool-script"><span class="learnschool-underline-wavy" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'learn', 'learnschool' ); ?></span></span><?php echo esc_html__( ' and ', 'learnschool' ); ?><span class="learnschool-script"><span class="learnschool-underline-loop" style="color:var(--wp--preset--color--secondary-dark)"><?php echo esc_html__( 'play', 'learnschool' ); ?></span></span><?php echo esc_html__( ' for kids', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-5"}}},"fontSize":"large","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-5)"><?php echo esc_html__( 'Empowering children aged 6 weeks to 5 years through Montessori-inspired sensory discovery, low student-teacher ratios, and joyful play-based learning.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3","margin":{"bottom":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--step-5)"><!-- wp:button {"className":"is-style-learnschool-pill","backgroundColor":"primary","textColor":"base"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/#tour' ) ); ?>"><?php echo esc_html__( 'Schedule a Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-learnschool-warm-accent"} -->
<div class="wp-block-button is-style-learnschool-warm-accent"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Explore Programs', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium","textColor":"secondary-dark"} -->
<p class="has-secondary-dark-color has-text-color has-medium-font-size" style="font-weight:700" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'learnschool' ); ?>"><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display:inline-block;vertical-align:-2px"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display:inline-block;vertical-align:-2px"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display:inline-block;vertical-align:-2px"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display:inline-block;vertical-align:-2px"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display:inline-block;vertical-align:-2px"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Rated 4.9/5 by 350+ local parent reviews', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"46%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:46%"><!-- wp:group {"className":"is-style-learnschool-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}}},"backgroundColor":"primary-light","textColor":"primary-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-dark-color has-primary-light-background-color has-text-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Visit Our Campus', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="font-weight:700"><?php echo esc_html__( 'Experience Joyful Learning in Person', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Meet our dedicated educators, explore our child-centered inquiry labs, and see our daily rhythm in action.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"top":"var:preset|spacing|step-3"}},"border":{"radius":"16px"}},"backgroundColor":"base-subtle","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group has-base-subtle-background-color has-background" style="border-radius:16px;margin-top:var(--wp--preset--spacing--step-3);padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small","textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( '1:4 Ratio (Infant Room)', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small","textColor":"primary"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Enrolling for Fall', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
