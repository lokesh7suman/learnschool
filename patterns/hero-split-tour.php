<?php
/**
 * Title: Hero with Tour Booking & Discovery Illustration
 * Slug: learnschool/hero-split-tour
 * Categories: learnschool/hero
 * Description: Clean split hero layout with joyful discovery illustration, display typography, handwriting highlights, and dual call-to-action buttons.
 * Keywords: hero, banner, tour, admissions, preschool, kindergarten, illustration
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
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}},"typography":{"fontFamily":"var:preset|font-family|quicksand","lineHeight":"1.15"}},"fontSize":"display"} -->
<h1 class="wp-block-heading has-display-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3);font-family:var(--wp--preset--font-family--quicksand);line-height:1.15"><?php echo esc_html__( 'A Joyful Foundation for ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-wavy" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Curiosity', 'learnschool' ); ?></span><?php echo esc_html__( ' &amp; ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-loop" style="color:var(--wp--preset--color--secondary-dark)"><?php echo esc_html__( 'Wonder', 'learnschool' ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-5"}},"typography":{"lineHeight":"1.7"}},"fontSize":"large","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-5);line-height:1.7"><?php echo esc_html__( 'Empowering young children through intentional sensory discovery, low student-teacher ratios, and joyful play-based learning environments that foster natural independence.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#tour"><?php echo esc_html__( 'Schedule a Discovery Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="#programs"><?php echo esc_html__( 'Explore Classrooms', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"aspectRatio":"75/56","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/kids-discovery-art.png' ) ); ?>" alt="<?php echo esc_attr__( 'Joyful early learning discovery illustration with school kids, building blocks, and books', 'learnschool' ); ?>" style="aspect-ratio:75/56;object-fit:contain"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
