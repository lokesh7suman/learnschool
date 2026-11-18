<?php
/**
 * Title: Campus Hero (with Admissions Quick Card)
 * Slug: learnschool/hero-campus-2
 * Categories: banner, call-to-action
 * Keywords: campus, hero, inquiry, admissions, visit
 * Description: Deep purple campus hero featuring campus highlights and a high-conversion admissions inquiry quick card.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"primary-dark","textColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-color has-primary-dark-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Historic Campus & State-of-the-Art Facilities', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"base","fontSize":"display"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-display-font-size"><?php echo esc_html__( 'A Vibrant 50-Acre Campus Designed for', 'learnschool' ); ?> <span class="wk-font-script" style="color:var(--wp--preset--color--secondary)"><?php echo esc_html__( 'Exploration & Growth', 'learnschool' ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="line-height:1.7"><?php esc_html_e( 'Nestled in serene natural surroundings, LearnSchool Academy offers world-class classrooms, athletic complexes, and performing arts centers designed to inspire academic and personal excellence.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Olympic-Sized Aquatic Center & Multi-Sport Fields', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Dedicated Maker Spaces & Innovation Laboratories', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( '10,000 Volume Library & Modern Media Commons', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-yellow-pill"} -->
<div class="wp-block-button is-style-yellow-pill"><a class="wp-block-button__link wp-element-button" href="#virtual-tour"><?php esc_html_e( 'Explore Virtual Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--elevated);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"bottom":"var:preset|spacing|step-2"}}},"backgroundColor":"primary-light","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group has-primary-light-background-color has-background" style="border-radius:9999px;margin-bottom:var(--wp--preset--spacing--step-2);padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Now Booking 2026-2027 Tours', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Plan Your', 'learnschool' ); ?> <span class="wk-font-script" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Campus Visit', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Experience our classrooms in action, meet world-class faculty, and discover the LearnSchool difference firsthand.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:16px;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-3);padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Visiting Hours: Monday – Friday, 8:30 AM – 3:30 PM', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Admissions Hotline: (555) 382-9011', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Campus Tours: Every Tuesday & Thursday', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill","style":{"spacing":{"padding":{"left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#book-visit" style="padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><?php esc_html_e( 'Book a Family Visit', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->