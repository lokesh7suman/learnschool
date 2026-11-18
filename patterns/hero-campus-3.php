<?php
/**
 * Title: Campus Hero (Heritage & Key Facts Grid)
 * Slug: learnschool/hero-campus-3
 * Categories: banner, call-to-action
 * Keywords: campus, stats, heritage, numbers, facts
 * Description: Full-width base background campus hero presenting school heritage and a 4-column key metrics stats grid.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-contrast-color has-base-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","contentSize":"840px"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"bottom":"var:preset|spacing|step-3"}}},"backgroundColor":"primary-light","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-light-background-color has-background" style="border-radius:9999px;margin-bottom:var(--wp--preset--spacing--step-3);padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Excellence in Education Since 1898', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"textAlign":"center","fontSize":"display"} -->
<h1 class="wp-block-heading has-text-align-center has-display-font-size"><?php echo esc_html__( 'Where', 'learnschool' ); ?> <span class="wk-accent-learn"><?php echo esc_html__( 'Heritage', 'learnschool' ); ?></span> <?php echo esc_html__( "Meets Tomorrow's", 'learnschool' ); ?> <span class="wk-accent-play"><?php echo esc_html__( 'Innovators', 'learnschool' ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size" style="line-height:1.7"><?php esc_html_e( 'For more than a century, LearnSchool has cultivated scholarly distinction, compassionate character, and forward-thinking leadership in a dynamic community.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#admissions"><?php esc_html_e( 'Apply for Admission', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#prospectus"><?php esc_html_e( 'Download Prospectus', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-6"},"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--step-6)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="font-size:clamp(1.75rem, 2.5vw, 2.25rem);font-weight:700;line-height:1.1;margin-bottom:8px;white-space:nowrap"><?php esc_html_e( '50 Acres', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"contrast","fontSize":"medium"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Historic Campus Grounds', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Sprawling green spaces, botanical arboretum, and modern research pavilions.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"secondary-dark"} -->
<p class="has-text-align-center has-secondary-dark-color has-text-color" style="font-size:clamp(1.75rem, 2.5vw, 2.25rem);font-weight:700;line-height:1.1;margin-bottom:8px;white-space:nowrap"><?php esc_html_e( '100%', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"contrast","fontSize":"medium"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'College Acceptance Rate', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Graduates matriculate to top-tier universities and distinguished institutes globally.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="font-size:clamp(1.75rem, 2.5vw, 2.25rem);font-weight:700;line-height:1.1;margin-bottom:8px;white-space:nowrap"><?php esc_html_e( '10:1', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"contrast","fontSize":"medium"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Student-to-Faculty Ratio', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Intimate class sizes ensuring every scholar receives dedicated mentorship.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"secondary-dark"} -->
<p class="has-text-align-center has-secondary-dark-color has-text-color" style="font-size:clamp(1.75rem, 2.5vw, 2.25rem);font-weight:700;line-height:1.1;margin-bottom:8px;white-space:nowrap"><?php esc_html_e( '32+', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"contrast","fontSize":"medium"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'State &amp; Regional Titles', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Championship athletic programs and award-winning academic decathlon teams.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
