<?php
/**
 * Title: Teachers (Horizontal Departmental Roster)
 * Slug: learnschool/teachers-4
 * Categories: team
 * Inserter: yes
 * Keywords: teachers, roster, horizontal, departments, faculty
 * Description: Compact horizontal list format where each teacher appears in a wide row card with avatar on left, credentials in middle, and consultation link on right.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-5"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-5)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Academic Directory', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-2"}}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--step-1);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Departmental', 'learnschool' ); ?> <span class="wk-accent-joy"><?php echo esc_html__( 'Faculty Roster', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size"><?php esc_html_e( 'Connect directly with department leads and experienced faculty mentors across all disciplines.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2","margin":{"top":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"border":{"radius":"9999px"}},"backgroundColor":"primary","textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-primary-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700"><?php esc_html_e( 'All Faculty', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"border":{"radius":"9999px"}},"backgroundColor":"base","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-base-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:600"><?php esc_html_e( 'STEM &amp; Robotics', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"border":{"radius":"9999px"}},"backgroundColor":"base","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-base-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:600"><?php esc_html_e( 'Arts &amp; Music', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"border":{"radius":"9999px"}},"backgroundColor":"base","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-base-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:600"><?php esc_html_e( 'Languages &amp; Phonics', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"20px"}},"backgroundColor":"base","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"12%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:12%"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-kristin.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Kristin Watson', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"63%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:63%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'STEM &amp; Robotics Department', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Kristin Watson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:600;margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Head of Science &amp; Robotics • M.Ed. Harvard University', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Oversees hands-on lab experiments, robotics curriculum, and regional STEM Olympiad student mentorship.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#contact-kristin"><?php echo esc_html__( 'Contact Educator', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"20px"}},"backgroundColor":"base","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"12%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:12%"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jenny.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jenny Wilson', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"63%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:63%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Arts &amp; Creative Media Department', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Jenny Wilson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:600;margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Creative Arts Department Lead • B.F.A. RISD', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Guides visual arts workshops, campus galleries, and portfolio building for aspiring young creators.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#contact-jenny"><?php echo esc_html__( 'Contact Educator', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"20px"}},"backgroundColor":"base","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"12%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:12%"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jacob.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jacob Jones', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"63%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:63%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Mathematics Department', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Jacob Jones', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:600;margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Senior Mathematics Instructor • M.S. MIT', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Specializes in competition math, logic puzzles, and building intuitive number confidence in early learners.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#contact-jacob"><?php echo esc_html__( 'Contact Educator', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->