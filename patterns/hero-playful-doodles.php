<?php
/**
 * Title: Hero with Playful Script Highlights
 * Slug: learnschool/hero-playful-doodles
 * Categories: learnschool/hero
 * Description: Playful brand hero section with handcrafted script highlights, display typography, and dual call-to-action buttons.
 * Keywords: hero, banner, script, highlights, playful, preschool, activities, buttons
 * Viewport Width: 1280
 * Inserter: true
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-8","bottom":"var:preset|spacing|step-8","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-8);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-8);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"960px","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"lineHeight":"1.15"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-4"}}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-4);line-height:1.15"><?php echo esc_html__( 'The Best Place to ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-wavy has-primary-color"><?php echo esc_html__( 'Learn', 'learnschool' ); ?></span><?php echo esc_html__( ' &amp; ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-loop has-secondary-dark-color"><?php echo esc_html__( 'Play', 'learnschool' ); ?></span> <br><?php echo esc_html__( 'for Curious Kids', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-5"}}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-5);line-height:1.7"><?php echo esc_html__( 'Discover a nurturing, play-based early learning community where sensory discovery, foundational literacy, and caring mentorship empower every child to thrive with wonder and confidence.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#tour"><?php echo esc_html__( 'Schedule a Campus Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="#programs"><?php echo esc_html__( 'Explore Our Programs', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
