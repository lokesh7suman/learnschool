<?php
/**
 * Title: Teachers (3-Column Bio Cards with Accreditations)
 * Slug: learnschool/teachers-3
 * Categories: team
 * Inserter: yes
 * Keywords: teachers, profiles, bio, credentials, qualifications
 * Description: Three-column card layout displaying rich educator profiles with subject pill tags, degrees/accreditations, short philosophy blurbs, and social connection icons.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"border":{"radius":"9999px"}},"backgroundColor":"primary-light","textColor":"primary-dark","fontSize":"small"} -->
<p class="has-text-align-center has-primary-dark-color has-primary-light-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Certified Educators', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2"}}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Passionate Teachers', 'learnschool' ); ?> <span class="wk-accent-joy"><?php echo esc_html__( 'Guiding Every Step', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size"><?php esc_html_e( 'Our certified educators combine deep academic credentials with patience, empathy, and creative joy.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"}},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:image {"width":"96px","height":"96px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-kristin.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Kristin Watson', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:96px;height:96px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-1"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'STEM Specialist', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Kristin Watson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:600;margin-bottom:var(--wp--preset--spacing--step-3)"><?php esc_html_e( 'M.Ed. Harvard University', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6;margin-bottom:var(--wp--preset--spacing--step-4)"><?php esc_html_e( 'Dedicated to transforming natural curiosity into scientific mastery through hands-on robotics and laboratory experiments.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full is-resized wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-1.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Instagram Profile of Kristin Watson', 'learnschool' ); ?>" style="width:32px;height:32px"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full is-resized wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-2.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Facebook Profile of Kristin Watson', 'learnschool' ); ?>" style="width:32px;height:32px"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full is-resized wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-3.svg' ) ); ?>" alt="<?php echo esc_attr__( 'X Profile of Kristin Watson', 'learnschool' ); ?>" style="width:32px;height:32px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"}},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:image {"width":"96px","height":"96px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jenny.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jenny Wilson', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:96px;height:96px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-1"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Visual Arts', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Jenny Wilson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:600;margin-bottom:var(--wp--preset--spacing--step-3)"><?php esc_html_e( 'B.F.A. Rhode Island School of Design', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6;margin-bottom:var(--wp--preset--spacing--step-4)"><?php esc_html_e( 'Empowers students to discover their unique expressive voice through mixed media, illustration, and tactile sculpture.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full is-resized wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-1.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Instagram Profile of Jenny Wilson', 'learnschool' ); ?>" style="width:32px;height:32px"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full is-resized wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-2.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Facebook Profile of Jenny Wilson', 'learnschool' ); ?>" style="width:32px;height:32px"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full is-resized wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-3.svg' ) ); ?>" alt="<?php echo esc_attr__( 'X Profile of Jenny Wilson', 'learnschool' ); ?>" style="width:32px;height:32px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"}},"backgroundColor":"base-subtle","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:image {"width":"96px","height":"96px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jacob.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jacob Jones', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:96px;height:96px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.5px","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-1"}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.5px;text-transform:uppercase;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Mathematics &amp; Logic', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-1"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Jacob Jones', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:600;margin-bottom:var(--wp--preset--spacing--step-3)"><?php esc_html_e( 'M.S. MIT', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6;margin-bottom:var(--wp--preset--spacing--step-4)"><?php esc_html_e( 'Inspires students to see patterns, solve complex puzzles, and build intuitive mathematical reasoning with joyful confidence.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full is-resized wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-1.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Instagram Profile of Jacob Jones', 'learnschool' ); ?>" style="width:32px;height:32px"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full is-resized wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-2.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Facebook Profile of Jacob Jones', 'learnschool' ); ?>" style="width:32px;height:32px"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"32px","height":"32px","sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full is-resized wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-3.svg' ) ); ?>" alt="<?php echo esc_attr__( 'X Profile of Jacob Jones', 'learnschool' ); ?>" style="width:32px;height:32px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->