<?php
/**
 * Title: Hero (Asymmetrical 3-Column with Feature Flanks)
 * Slug: learnschool/hero-4
 * Categories: banner, featured
 * Keywords: hero, asymmetrical, columns, cards, education
 * Description: Asymmetrical 3-column hero layout featuring flanking visual showcase cards and an empowering central message core.
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
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"28%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:28%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--elevated);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/hero-kid-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Student exploring hands-on robotics equipment', 'learnschool' ); ?>" style="border-radius:16px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-2","right":"var:preset|spacing|step-2"},"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-2"}}},"backgroundColor":"quiz-bg","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-quiz-bg-background-color has-background" style="border-radius:9999px;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-2);padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-2)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-text-color has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Robotics & STEM', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Hands-on coding labs from Grade 1.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%"><!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"bottom":"var:preset|spacing|step-3"}}},"backgroundColor":"accent","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-accent-background-color has-background" style="border-radius:9999px;margin-bottom:var(--wp--preset--spacing--step-3);padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Enrolling Now for Next Term', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"fontSize":"clamp(1.75rem, 3.2vw, 2.5rem)","lineHeight":"1.2"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:clamp(1.75rem, 3.2vw, 2.5rem);line-height:1.2"><?php echo esc_html__( 'Empowering Every Child to', 'learnschool' ); ?> <span class="wk-accent-learn"><?php echo esc_html__( 'Reach', 'learnschool' ); ?></span> <?php echo esc_html__( 'Their', 'learnschool' ); ?> <span class="wk-accent-play"><?php echo esc_html__( 'Potential', 'learnschool' ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'At LearnSchool, our balanced curriculum blends academic rigor with creative expression, preparing confident problem-solvers for a rapidly changing world.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#enroll"><?php esc_html_e( 'Enroll Today', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#curriculum"><?php esc_html_e( 'Explore Curriculum', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"28%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:28%"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--elevated);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/hero-kid-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Student displaying creative visual artwork', 'learnschool' ); ?>" style="border-radius:16px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-2","right":"var:preset|spacing|step-2"},"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-2"}}},"backgroundColor":"activities-bg","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group has-activities-bg-background-color has-background" style="border-radius:9999px;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-2);padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-2);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-2)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Visual Arts & Music', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Fostering expressive creativity and confidence.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
