<?php
/**
 * Title: Hero with Kid Photos & Playful Doodles
 * Slug: learnschool/hero-playful-doodles
 * Categories: hero, featured, learnschool
 * Description: Playful hero section featuring student photo badges, floating hand-drawn doodle accents, and headline with handwriting highlights.
 * Keywords: hero, banner, kids, doodles, playful, preschool, activities
 * Viewport Width: 1280
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","className":"wk-hero-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-hero-wrapper"><!-- wp:group {"align":"wide","className":"wk-hero-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide wk-hero-container"><!-- wp:heading {"level":1,"className":"wk-hero-headline"} -->
<h1 class="wp-block-heading wk-hero-headline"><?php echo esc_html__( 'The best place to', 'learnschool' ); ?><br><span class="learnschool-script"><span class="learnschool-underline-wavy" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'learn', 'learnschool' ); ?></span></span><?php echo esc_html__( ' and ', 'learnschool' ); ?><span class="learnschool-script"><span class="learnschool-underline-loop" style="color:var(--wp--preset--color--secondary-dark)"><?php echo esc_html__( 'play', 'learnschool' ); ?></span></span><br><?php echo esc_html__( 'for kids', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-hero-subtitle"} -->
<p class="wk-hero-subtitle"><?php echo esc_html__( "Discover thousands of fun and interactive learning activities to support your child's growth and learning process.", 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#get-started"><?php echo esc_html__( 'Get Started', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
