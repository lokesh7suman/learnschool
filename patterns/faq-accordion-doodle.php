<?php
/**
 * Title: FAQ Accordion
 * Slug: learnschool/faq-accordion-doodle
 * Categories: learnschool/faq
 * Description: Two-column frequently asked questions section with expandable accordion panels.
 * Keywords: faq, questions, answers, accordion, details, help, support
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
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Frequently ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-wavy has-primary-color"><?php echo esc_html__( 'asked', 'learnschool' ); ?></span><br><?php echo esc_html__( 'questions', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'Have questions about admissions, daily routines, or tuition? Here are the most common questions from parents.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:details {"showContent":true,"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill" open><summary><?php echo esc_html__( 'What makes LearnSchool different from other education platforms?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'LearnSchool combines gamified learning science, child-friendly adaptive feedback, and zero-distraction interactive interfaces crafted exclusively for elementary and primary learners.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( 'How can I access LearnSchool?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'LearnSchool is accessible through modern web browsers, tablet apps (iPad, Android), and desktop environments, with progress syncing seamlessly across all parent-linked devices.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( "What about the security of children's data using this platform?", 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'We strictly adhere to COPPA, FERPA, and GDPR-K regulations. There are no third-party ad trackers, zero behavioral targeting, and all student data is encrypted at rest and in transit.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
