<?php
/**
 * Title: Parent Handbook & FAQ Accordion (Zero-JS)
 * Slug: learnschool/faq-accordion
 * Categories: learnschool/faq
 * Description: Zero-JS expandable accordion built with native core/details blocks for parent questions.
 * Keywords: faq, accordion, questions, details, immunization, meals, tuition
 *
 * @package LearnSchool
 * @since 1.1.0
 * Viewport Width: 1280
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"textAlign":"center","level":2} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Frequently Asked ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-wavy has-primary-color"><?php echo esc_html__( 'Parent Questions', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium","textColor":"contrast-subtle"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Clear answers on health, safety, tuition, and classroom routines.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( 'What are your student-to-teacher ratios in each classroom?', 'learnschool' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'We strictly adhere to and exceed state licensing standards. Our Infant room is maintained at 1:4, Toddlers at 1:6, Preschool at 1:10, and Pre-K at 1:12. Every lead educator is backed by a certified co-teacher.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( 'How do you handle food allergies and dietary preferences?', 'learnschool' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'Our entire school campus is 100% nut-free. Our on-site chef prepares organic, non-GMO warm meals daily and accommodates gluten-free, dairy-free, vegetarian, and individualized medical allergy plans.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( 'What is your diapering and potty training philosophy?', 'learnschool' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'Children do not need to be potty trained to enroll in our Toddler or Preschool rooms. We partner with parents through positive reinforcement and gentle bathroom routines when your child demonstrates readiness cues.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( 'What is your health and immunization safety policy?', 'learnschool' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'To ensure community safety, all enrolled children must provide up-to-date state health department immunization records or an official medical exemption before their first day on campus.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-faq-pill"} -->
<details class="wp-block-details is-style-learnschool-faq-pill"><summary><?php echo esc_html__( 'How does your waitlist work and do you offer sibling discounts?', 'learnschool' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color"><?php echo esc_html__( 'Waitlist priority is determined by application date, with priority placement given to currently enrolled families. We offer a 10% tuition discount for the second enrolled sibling.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
