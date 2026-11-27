<?php
/**
 * Title: Hero with Playful Script Highlights
 * Slug: learnschool/hero-playful-doodles
 * Categories: learnschool/hero
 * Description: Playful brand hero section (includes the page H1) with handcrafted script highlights, display typography, and dual call-to-action buttons. Best paired with Front Page, Page (No Title), or Landing Page templates.
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
<!-- wp:group {"tagName":"section","align":"full","className":"learnschool-hero-doodles","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull learnschool-hero-doodles has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"880px","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"lineHeight":"1.24","fontWeight":"600","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-4"}}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-4);font-weight:600;letter-spacing:-0.02em;line-height:1.24"><?php echo esc_html__( 'The best place to', 'learnschool' ); ?><br><span class="learnschool-script learnschool-underline-wavy has-primary-color"><?php echo esc_html__( 'learn', 'learnschool' ); ?></span> <?php echo esc_html__( 'and', 'learnschool' ); ?> <span class="learnschool-script learnschool-underline-loop has-secondary-gold-color"><?php echo esc_html__( 'play', 'learnschool' ); ?></span><br><?php echo esc_html__( 'for kids', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-5"}}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-5)"><?php echo esc_html__( 'Discover fun, interactive learning activities to support your child’s growth and curiosity every day.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Schedule a Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/programs/' ) ); ?>"><?php echo esc_html__( 'Explore Programs', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
