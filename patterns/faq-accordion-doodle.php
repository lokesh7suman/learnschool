<?php
/**
 * Title: FAQ Accordion with Doodles
 * Slug: learnschool/faq-accordion-doodle
 * Categories: learnschool/faq
 * Description: Two-column frequently asked questions section with playful sunburst/scribble doodles on the left and pill-shaped expandable accordions on the right.
 * Keywords: faq, questions, answers, accordion, details, help, support, admissions
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
<!-- wp:group {"tagName":"section","align":"full","className":"learnschool-faq-doodle-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull learnschool-faq-doodle-section has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column learnschool-faq-doodle-col" style="flex-basis:42%"><!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-4"}}}} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'Frequently ', 'learnschool' ); ?><span class="learnschool-script has-primary-color"><?php echo esc_html__( 'asked', 'learnschool' ); ?></span><br><?php echo esc_html__( 'questions', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Clear answers on admissions, classroom ratios, nutrition, and daily routines.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( 'What makes LearnSchool different from other schools?', 'learnschool' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'We blend research-backed Montessori manipulatives with small 1:4 to 1:10 educator pods, organic daily meals, and joyful outdoor discovery.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( 'How can parents check daily updates and enrollment availability?', 'learnschool' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'Enrolled families receive real-time photo journals and milestone updates in the Parent Portal, and prospective families can schedule a campus tour anytime.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( 'What about campus safety, allergies, and student privacy?', 'learnschool' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'Our campus is 100% nut-free with CPR-certified staff, keypad-secured entry, and strict family-only photo sharing inside our encrypted Parent Portal.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
