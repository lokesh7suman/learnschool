<?php
/**
 * Title: FAQ - Centered with Support Box
 * Slug: learnschool/faq-3
 * Categories: text
 * Keywords: faq, centered, support, helpdesk, questions, advisor
 * Description: Centered single-column accordion list accompanied by a bottom support contact card with advisor help.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" aria-label="<?php echo esc_attr__( 'Frequently Asked Questions', 'learnschool' ); ?>" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}},"layout":{"type":"constrained","contentSize":"840px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Frequently Asked Questions', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Got Questions?', 'learnschool' ); ?> <span class="wk-accent-asked"><?php echo esc_html__( 'We Have Answers', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Review common inquiries regarding tuition, academic milestones, and campus security.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:details {"showContent":true,"className":"is-style-learnschool-accordion"} -->
<details class="wp-block-details is-style-learnschool-accordion" open><summary><?php esc_html_e( 'How does the LearnSchool curriculum prepare children for future academic success?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Our interdisciplinary curriculum blends STEM logic, expressive literacy, and collaborative emotional skills, giving students a balanced, resilient academic foundation.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-accordion"} -->
<details class="wp-block-details is-style-learnschool-accordion"><summary><?php esc_html_e( 'Can parents monitor daily learning progress and teacher feedback?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Yes! Our secure parent mobile app provides weekly milestones, real-time teacher notes, portfolio photo uploads, and developmental recommendations.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-accordion"} -->
<details class="wp-block-details is-style-learnschool-accordion"><summary><?php esc_html_e( 'What health, safety, and campus security measures are maintained?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Campuses operate with 24/7 electronic perimeter access, background-checked staff, full-time registered pediatric nurses, and strict allergy protocols.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-accordion"} -->
<details class="wp-block-details is-style-learnschool-accordion"><summary><?php esc_html_e( 'Are trial sessions or classroom visits available for prospective families?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'We invite prospective students to participate in a complimentary Discovery Day where they attend classes, meet future teachers, and explore campus labs.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:group {"className":"is-style-learnschool-card","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"},"margin":{"top":"var:preset|spacing|step-6"}}},"backgroundColor":"primary-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-primary-light-background-color has-background" style="border-radius:24px;margin-top:var(--wp--preset--spacing--step-6);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:heading {"level":3,"textColor":"primary-dark","fontSize":"large"} -->
<h3 class="wp-block-heading has-primary-dark-color has-text-color has-large-font-size"><?php esc_html_e( 'Can’t find the answer you’re looking for?', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="line-height:1.6"><?php esc_html_e( 'Our admissions counselors and academic advisors are available Monday to Friday to assist your family.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="mailto:admissions@learnschool.edu"><?php esc_html_e( 'Email Support', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="tel:+15552345678"><?php esc_html_e( 'Call Admissions', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->