<?php
/**
 * Title: Call to Action (Dual Audience Split)
 * Slug: learnschool/call-to-action-4
 * Categories: call-to-action, banner
 * Keywords: dual, parents, educators, split, options, cards
 * Description: Dual-audience call-to-action section with tailored decision pathways for prospective families and institutional partners.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","contentSize":"840px"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Choose Your Learning Pathway', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Take the Next Step With', 'learnschool' ); ?> <span class="wk-accent-learnschool"><?php echo esc_html__( 'LearnSchool', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size" style="line-height:1.7"><?php esc_html_e( 'Whether you are a parent seeking an extraordinary education for your child or an educator eager to partner with our programs, we welcome you to our community.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"border":{"radius":"28px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"quiz-bg","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-quiz-bg-background-color has-text-color has-background" style="border-radius:28px;box-shadow:var(--wp--preset--shadow--elevated);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:image {"sizeSlug":"full","width":48,"height":48} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-creative-activity.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Creative activity icon', 'learnschool' ); ?>" width="48" height="48"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'For Prospective Families', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( "Start Your Child's Journey", 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast","fontSize":"medium"} -->
<p class="has-contrast-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Schedule a private campus tour, observe our active project-based classes, and submit your admissions application for the upcoming academic year.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Personalized academic placement advising', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Flexible tuition assistance & family scholarships', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Year-round admissions consultation appointments', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#admissions"><?php esc_html_e( 'Apply for Admission', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"border":{"radius":"28px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|elevated"},"backgroundColor":"surface","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-surface-background-color has-text-color has-background" style="border-radius:28px;box-shadow:var(--wp--preset--shadow--elevated);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:image {"sizeSlug":"full","width":48,"height":48} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-quiz-note.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Quiz note icon', 'learnschool' ); ?>" width="48" height="48"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'For Educators & Institutions', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Partner With Our Platform', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Integrate LearnSchool curriculum kits, teacher professional development modules, and interactive STEM labs into your school district or learning center.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Standards-aligned STEM and arts curriculum kits', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Accredited educator workshop certifications', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'District-wide volume licensing & dedicated support', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#partner-demo"><?php esc_html_e( 'Request Institutional Demo', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->