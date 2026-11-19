<?php
/**
 * Title: Hero with Kid Photos & Playful Doodles
 * Slug: learnschool/hero-playful-doodles
 * Categories: learnschool/hero, learnschool/call-to-action
 * Description: Playful hero section featuring student photo badges, floating hand-drawn doodle accents, and headline with handwriting highlights.
 * Keywords: hero, banner, kids, doodles, playful, preschool, activities
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
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"840px","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"lineHeight":"1.15"}},"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="line-height:1.15"><?php echo esc_html__( 'The best place to', 'learnschool' ); ?><br><span class="learnschool-script"><span class="learnschool-underline-wavy" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'learn', 'learnschool' ); ?></span></span><?php echo esc_html__( ' and ', 'learnschool' ); ?><span class="learnschool-script"><span class="learnschool-underline-loop" style="color:var(--wp--preset--color--secondary-dark)"><?php echo esc_html__( 'play', 'learnschool' ); ?></span></span><br><?php echo esc_html__( 'for kids', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size" style="line-height:1.7"><?php echo esc_html__( "Discover thousands of fun and interactive learning activities to support your child's growth and learning process.", 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#get-started"><?php echo esc_html__( 'Get Started', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
