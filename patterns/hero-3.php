<?php
/**
 * Title: Hero (Centered Media Card & Trust Badges)
 * Slug: learnschool/hero-3
 * Categories: banner, featured
 * Keywords: hero, centered, video, media, trust, education
 * Description: Centered hero layout featuring an eyebrow tag, display headline, dual buttons, centered featured media card, and 3-column metrics sub-row.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","contentSize":"840px"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-3)"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"18px","right":"18px"},"blockGap":"var:preset|spacing|step-1"}},"backgroundColor":"primary-light","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-primary-light-background-color has-background" style="border-radius:9999px;padding-top:6px;padding-right:18px;padding-bottom:6px;padding-left:18px"><!-- wp:image {"width":"20px","height":"20px","sizeSlug":"full"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/materials-doodle-sparkle.svg' ) ); ?>" alt="" style="width:20px;height:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Creative Early Learning', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"textAlign":"center","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Where', 'learnschool' ); ?> <span class="wk-accent-learn"><?php echo esc_html__( 'Curiosity', 'learnschool' ); ?></span> <?php echo esc_html__( 'Meets', 'learnschool' ); ?> <span class="wk-accent-play"><?php echo esc_html__( 'Joyful Discovery', 'learnschool' ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size" style="line-height:1.7"><?php esc_html_e( 'Every child deserves an inspiring learning space where imaginations take flight, friendships blossom, and foundational discovery becomes an exciting daily journey.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#apply"><?php esc_html_e( 'Apply for 2026-2027', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#virtual-tour"><?php esc_html_e( 'Virtual Open House', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"border":{"radius":"28px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background" style="border-radius:28px;box-shadow:var(--wp--preset--shadow--elevated);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/hero-kid-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Young students engaged in creative classroom discovery', 'learnschool' ); ?>" style="border-radius:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Inspiring Creative Confidence Every Day', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Our experiential campus program combines imaginative exploration with supportive mentorship, nurturing curious lifelong learners in an environment built for childhood wonder.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Interactive Discovery Labs', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Low 15:1 Student-Teacher Ratio', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Holistic Character & Emotional Growth', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-6"},"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--step-6)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"xx-large"} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size" style="font-weight:700"><?php esc_html_e( '98%', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"contrast","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Kindergarten Readiness', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Comprehensive literacy, numeracy, and social-emotional benchmarks met across all classrooms.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"secondary-dark","fontSize":"xx-large"} -->
<p class="has-text-align-center has-secondary-dark-color has-text-color has-xx-large-font-size" style="font-weight:700"><?php esc_html_e( '15:1', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"contrast","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Student-Faculty Ratio', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Attentive personalized mentorship from certified, passionate early education specialists.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"xx-large"} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size" style="font-weight:700"><?php esc_html_e( '25+', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"contrast","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'After-School Enrichment Clubs', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'From robotics and chess to performing arts, music, and recreational athletics.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->