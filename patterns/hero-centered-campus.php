<?php
/**
 * Title: Hero Centered Campus
 * Slug: learnschool/hero-centered-campus
 * Categories: learnschool/hero
 * Keywords: hero, campus, banner, admissions
 * Description: Campus hero section with call-to-action buttons, high-contrast display typography, and arched campus showcase illustration.
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
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-8","bottom":"var:preset|spacing|step-8","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-8);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-8);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"960px","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"lineHeight":"1.15","fontFamily":"var:preset|font-family|quicksand"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-4"}}},"fontSize":"display"} -->
<h1 class="wp-block-heading has-text-align-center has-display-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-4);font-family:var(--wp--preset--font-family--quicksand);line-height:1.15"><?php echo esc_html__( 'Where Natural Curiosity Meets Purposeful Learning &amp; Lifelong Confidence', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-5"}}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-5);line-height:1.7"><?php echo esc_html__( 'LearnSchool provides a holistic, inquiry-driven foundation from preschool through kindergarten—blending creative expression, early STEM discovery, and individualized mentorship in safe, joyful classrooms.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#tour"><?php echo esc_html__( 'Schedule a Campus Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="#programs"><?php echo esc_html__( 'Explore Our Programs', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-6"}}}} -->
<figure class="wp-block-image aligncenter size-full" style="margin-top:var(--wp--preset--spacing--step-6)"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/campus-showcase-art.png' ) ); ?>" alt="<?php echo esc_attr__( 'LearnSchool joyful campus grounds and discovery classrooms illustration', 'learnschool' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
