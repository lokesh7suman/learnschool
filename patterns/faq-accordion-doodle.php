<?php
/**
 * Title: FAQ Accordion
 * Slug: learnschool/faq-accordion-doodle
 * Categories: faq, featured, learnschool
 * Description: Two-column frequently asked questions section with expandable accordion panels.
 * Keywords: faq, questions, answers, accordion, details, help, support
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
<!-- wp:group {"align":"full","className":"wk-faq-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-faq-wrapper"><!-- wp:columns {"align":"wide","className":"wk-faq-container"} -->
<div class="wp-block-columns alignwide wk-faq-container"><!-- wp:column {"className":"wk-faq-left-col"} -->
<div class="wp-block-column wk-faq-left-col"><!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'Frequently ', 'learnschool' ); ?><span class="learnschool-script" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'asked', 'learnschool' ); ?></span><br><?php echo esc_html__( 'questions', 'learnschool' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-faq-right-col"} -->
<div class="wp-block-column wk-faq-right-col"><!-- wp:details {"showContent":true,"className":"wk-faq-item"} -->
<details class="wp-block-details wk-faq-item" open><summary><?php echo esc_html__( 'What makes LearnSchool different from other education platforms?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'LearnSchool combines gamified learning science, child-friendly adaptive feedback, and zero-distraction interactive interfaces crafted exclusively for elementary and primary learners.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"wk-faq-item"} -->
<details class="wp-block-details wk-faq-item"><summary><?php echo esc_html__( 'How can I access LearnSchool?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'LearnSchool is accessible through modern web browsers, tablet apps (iPad, Android), and desktop environments, with progress syncing seamlessly across all parent-linked devices.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"wk-faq-item"} -->
<details class="wp-block-details wk-faq-item"><summary><?php echo esc_html__( "What about the security of children's data using this platform?", 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'We strictly adhere to COPPA, FERPA, and GDPR-K regulations. There are no third-party ad trackers, zero behavioral targeting, and all student data is encrypted at rest and in transit.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
