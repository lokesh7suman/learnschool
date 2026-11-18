<?php
/**
 * Title: Features - Alternating Feature Rows
 * Slug: learnschool/features-4
 * Categories: services, featured
 * Keywords: alternating, zig-zag, rows, deep-dive, curriculum, pillars
 * Description: Two alternating rows with photo and feature highlights for in-depth curriculum presentation.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Curriculum Deep Dive', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Core Pillars of ', 'learnschool' ); ?><span class="wk-font-script" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Our Academy', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Discover how our holistic framework cultivates inquisitive minds, technical mastery, and expressive creative confidence.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"24px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Students conducting hands-on science experiments', 'learnschool' ); ?>" style="border-radius:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-primary-light-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php esc_html_e( 'STEM & DISCOVERY', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Interactive ', 'learnschool' ); ?><span class="wk-font-script"><?php echo esc_html__( 'Science Experiments', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Students engage directly with physical lab kits and digital simulations, investigating physics, biology, and chemistry through safe, wonder-filled experiments.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Weekly hands-on experiment activity kits delivered directly', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Guided digital hypothesis builders and scientific note-taking', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Real-world inquiry projects that foster analytical reasoning', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#science-units"><?php esc_html_e( 'View Science Units →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-gradient-pill","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-gradient-pill" style="margin-top:var(--wp--preset--spacing--step-6);margin-bottom:var(--wp--preset--spacing--step-6)"/>
<!-- /wp:separator -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"activities-bg","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-activities-bg-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;display:inline-block"><?php esc_html_e( 'CREATIVITY & ARTS', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Expressive Arts, ', 'learnschool' ); ?><span class="wk-font-script"><?php echo esc_html__( 'Music &amp; Storytelling', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Unleash imagination through guided drawing, instrumental rhythm exploration, and creative narrative writing that celebrates every child’s voice.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Comprehensive multimedia art supplies and illustrated workbooks', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Ear training and musical rhythm games for cognitive synchronization', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Creative story starters and illustrated self-publishing projects', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#creative-units"><?php esc_html_e( 'View Creative Units →', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"24px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-3.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Student exploring creative arts and craft activities', 'learnschool' ); ?>" style="border-radius:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->