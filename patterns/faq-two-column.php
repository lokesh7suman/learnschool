<?php
/**
 * Title: FAQ Two-Column Accordion Grid
 * Slug: learnschool/faq-two-column
 * Categories: faq, learnschool
 * Keywords: faq, accordion, two-column, admissions, academic, categories
 * Description: Two-column grid of expandable accordion questions organized into Academic and Administrative categories.
 * Inserter: yes
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
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" aria-label="<?php echo esc_attr__( 'Frequently Asked Questions', 'learnschool' ); ?>" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Help & Answers', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--quicksand)"><?php echo esc_html__( 'Everything You ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Need to Know', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Find immediate answers to questions regarding our admissions process, daily schedules, and student support services.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3","margin":{"bottom":"var:preset|spacing|step-4"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-quiz-note.svg' ) ); ?>" alt="" style="width:32px;height:32px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Admissions & Enrollment', 'learnschool' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:details {"showContent":true,"className":"is-style-learnschool-accordion"} -->
<details class="wp-block-details is-style-learnschool-accordion" open><summary><?php esc_html_e( 'What is the application deadline for the 2026/27 school year?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Priority enrollment closes on January 15, 2026. Rolling admissions continue throughout the spring semester subject to classroom capacity.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-accordion"} -->
<details class="wp-block-details is-style-learnschool-accordion"><summary><?php esc_html_e( 'Do you offer sibling discounts and financial scholarships?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Yes! We provide a 10% tuition discount for second siblings and offer both merit and need-based financial scholarships covering up to 60% of fees.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-accordion"} -->
<details class="wp-block-details is-style-learnschool-accordion"><summary><?php esc_html_e( 'What documents are required for international student transfer?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Transferring families need to submit the last two years of translated academic transcripts, immunization records, and a recommendation letter from their current teacher.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3","margin":{"bottom":"var:preset|spacing|step-4"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-creative-activity.svg' ) ); ?>" alt="" style="width:32px;height:32px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Curriculum & Daily Life', 'learnschool' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:details {"className":"is-style-learnschool-accordion"} -->
<details class="wp-block-details is-style-learnschool-accordion"><summary><?php esc_html_e( 'What is the teacher-to-student ratio in early grades?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Our kindergarten and elementary classrooms maintain a strict 10:1 to 12:1 student-to-faculty ratio, ensuring attentive personal guidance for every child.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-accordion"} -->
<details class="wp-block-details is-style-learnschool-accordion"><summary><?php esc_html_e( 'How does LearnSchool balance screentime with hands-on play?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Digital devices are limited to 30-minute interactive sessions daily. The majority of instructional time centers on tactile maker labs, outdoor exploration, and physical books.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"is-style-learnschool-accordion"} -->
<details class="wp-block-details is-style-learnschool-accordion"><summary><?php esc_html_e( 'What after-school sports and creative clubs are available?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'We host over 20 enrichment clubs including Youth Robotics, Chess Academy, Junior Orchestra, Gymnastics, Swimming, and Gardening.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->