<?php
/**
 * Title: Call to Action
 * Slug: learnschool/call-to-action
 * Categories: call-to-action, banner, learnschool
 * Description: Curved purple call-to-action card with mascot student illustration, cursive title, and pill form inputs.
 * Keywords: cta, call to action, subscribe, form, learnschool
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","className":"wk-cta-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-cta-wrapper"><!-- wp:group {"align":"wide","className":"wk-cta-card","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wk-cta-card"><!-- wp:image {"sizeSlug":"full","className":"wk-cta-mascot"} -->
<figure class="wp-block-image size-full wk-cta-mascot"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/cta-kid.webp' ) ); ?>" alt="<?php echo esc_attr__( 'LearnSchool cheerful student mascot', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-cta-squiggle-doodle"} -->
<figure class="wp-block-image size-full wk-cta-squiggle-doodle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/cta-squiggle.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-cta-corner-lines"} -->
<figure class="wp-block-image size-full wk-cta-corner-lines"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/cta-dots.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"wk-cta-content","layout":{"type":"default"}} -->
<div class="wp-block-group wk-cta-content"><!-- wp:heading {"level":2,"className":"wk-cta-headline"} -->
<h2 class="wp-block-heading wk-cta-headline"><?php echo esc_html__( 'Join our', 'learnschool' ); ?><br><span class="wk-accent-learnschool"><?php echo esc_html__( 'LearnSchool', 'learnschool' ); ?></span><br><?php echo esc_html__( 'community now', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"wk-cta-form","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"flex-start"}} -->
<div class="wp-block-group wk-cta-form"><!-- wp:search {"label":"Email","showLabel":false,"placeholder":"Enter your email address","buttonText":"Get Started","buttonPosition":"button-inside","buttonUseIcon":false,"className":"wk-cta-search-form"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
