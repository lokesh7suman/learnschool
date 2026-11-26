<?php
/**
 * Title: Community Enrollment CTA Banner
 * Slug: learnschool/cta-community
 * Categories: learnschool/call-to-action
 * Description: Rounded purple call-to-action card featuring an educator portrait on the left and a community inquiry form with sunny gold submit button on the right.
 * Keywords: cta, banner, form, community, admissions, contact, signup
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
<!-- wp:group {"anchor":"admissions","tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" id="admissions" style="padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","className":"learnschool-cta-banner","style":{"border":{"radius":"36px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"0","left":"var:preset|spacing|step-6","right":"var:preset|spacing|step-6"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide learnschool-cta-banner has-base-color has-primary-background-color has-text-color has-background" style="border-radius:36px;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-6);padding-bottom:0;padding-left:var(--wp--preset--spacing--step-6)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:44%"><!-- wp:image {"scale":"cover","sizeSlug":"large","linkDestination":"none","className":"learnschool-cta-banner__portrait","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image size-large learnschool-cta-banner__portrait" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustrations/cta-community-educator.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Smiling LearnSchool educator holding a notebook and welcoming families', 'learnschool' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"56%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%;padding-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"level":2,"fontSize":"x-large","textColor":"base","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}}}} -->
<h2 class="wp-block-heading has-base-color has-text-color has-x-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Join our ', 'learnschool' ); ?><br><span class="learnschool-script has-accent-color"><?php echo esc_html__( 'LearnSchool', 'learnschool' ); ?></span><br><?php echo esc_html__( 'community now', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium","textColor":"base","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-5"}}}} -->
<p class="has-base-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-5)"><?php echo esc_html__( 'Schedule a campus visit, meet our dedicated educators, and explore open spaces for your family.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-yellow"} -->
<div class="wp-block-button is-style-learnschool-yellow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( 'mailto:admissions@learnschool.edu' ); ?>"><?php echo esc_html__( 'Schedule a Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
