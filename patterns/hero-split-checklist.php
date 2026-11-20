<?php
/**
 * Title: Hero Split with Media & Checklist
 * Slug: learnschool/hero-split-checklist
 * Categories: learnschool/hero
 * Keywords: hero, split, checklist, enrollment, education
 * Description: Two-column split hero section with enrollment checklist, dual CTA buttons, and student showcase card with floating rating badge.
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
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'State-Certified Pre-K &amp; Kindergarten', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand","lineHeight":"1.15"}},"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--quicksand);line-height:1.15"><?php echo esc_html__( 'Inspiring Young Minds to ', 'learnschool' ); ?><mark class="learnschool-highlight"><span class="learnschool-script" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Explore', 'learnschool' ); ?></span></mark>, <?php echo esc_html__( 'Create &amp; ', 'learnschool' ); ?><mark class="learnschool-highlight"><span class="learnschool-script" style="color:var(--wp--preset--color--secondary-dark)"><?php echo esc_html__( 'Grow', 'learnschool' ); ?></span></mark></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-contrast-subtle-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-4);line-height:1.7"><?php echo esc_html__( 'Our curiosity-led early learning environment empowers children with the social confidence, creative freedom, and foundational skills needed for lifelong joyful achievement.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Low 1:4 Student-Teacher Ratio for Attentive Individual Mentorship', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Accredited Early STEM & Reggio-Inspired Creative Arts Curriculum', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Safe, Light-Filled Classrooms & Outdoor Nature Discovery Gardens', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#book-tour"><?php echo esc_html__( 'Book a Campus Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="#programs"><?php echo esc_html__( 'Explore Programs', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:group {"className":"is-style-learnschool-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"typography":{"fontWeight":"700"}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"x-small"} -->
<p class="has-primary-dark-color has-primary-light-background-color has-text-color has-background has-x-small-font-size" style="border-radius:9999px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-weight:700"><span style="display:inline-block;width:6px;height:6px;border-radius:50%;background-color:#16a34a;margin-right:6px;vertical-align:1px"></span><?php echo esc_html__( 'Open for Tours', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="font-weight:700"><?php echo esc_html__( 'Experience Our Classrooms Live', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-4);line-height:1.6"><?php echo esc_html__( 'Join a small guided campus walk with our educators. Observe inquiry-based activities, explore our natural outdoor discovery spaces, and meet our teaching staff.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#tour-reserve"><?php echo esc_html__( 'Schedule Your Visit', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-4"}}},"layout":{"type":"flex","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"secondary-dark","fontSize":"small"} -->
<p class="has-secondary-dark-color has-text-color has-small-font-size" style="font-weight:700" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'learnschool' ); ?>"><svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display:inline-block;vertical-align:-1px"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display:inline-block;vertical-align:-1px"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display:inline-block;vertical-align:-1px"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display:inline-block;vertical-align:-1px"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="display:inline-block;vertical-align:-1px"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html__( '4.9/5 Rating • Free visit', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
