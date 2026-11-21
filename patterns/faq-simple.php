<?php
/**
 * Title: FAQ Simple Cards
 * Slug: learnschool/faq-simple
 * Categories: learnschool/faq
 * Description: Frequently asked questions accordion with circular toggle buttons.
 * Keywords: faq, questions, accordion, help
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
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Frequently ', 'learnschool' ); ?><span class="learnschool-script"><span class="learnschool-underline-wavy" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Asked', 'learnschool' ); ?></span></span><br><?php echo esc_html__( 'Questions', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Everything you need to know about our modern curriculum, safety standards, and daily classroom routines.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#contact"><?php echo esc_html__( 'Ask a Question', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:details {"showContent":true,"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill" open><summary><?php echo esc_html__( 'What makes LearnSchool different from other education platforms?', 'learnschool' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'LearnSchool combines gamified learning science, child-friendly adaptive feedback, and zero-distraction interactive interfaces crafted exclusively for elementary and primary learners.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( 'How can I access LearnSchool learning tools and reports?', 'learnschool' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'LearnSchool is accessible through modern web browsers, tablet apps (iPad, Android), and desktop environments, with progress syncing seamlessly across all parent-linked devices.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( "What about the security of children's data using this platform?", 'learnschool' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'We strictly adhere to COPPA, FERPA, and GDPR-K regulations. There are no third-party ad trackers, zero behavioral targeting, and all student data is encrypted at rest and in transit.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( 'Are financial aid options or sibling discounts available?', 'learnschool' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'Yes! We provide a 10% tuition discount for the second sibling and offer both need-based and merit-based financial assistance packages.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
