<?php
/**
 * Title: Footer
 * Slug: learnschool/footer
 * Categories: footer
 * Description: Footer with logo, mission statement, navigation columns, and social links.
 * Keywords: footer, navigation, social, links
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","className":"wk-footer-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-footer-wrapper"><!-- wp:columns {"align":"wide","className":"wk-footer-inner"} -->
<div class="wp-block-columns alignwide wk-footer-inner"><!-- wp:column {"className":"wk-footer-brand-col"} -->
<div class="wp-block-column wk-footer-brand-col"><!-- wp:group {"className":"wk-logo-group","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group wk-logo-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-logo-icon"} -->
<figure class="wp-block-image size-full wk-logo-icon"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/branding/logo.svg' ) ); ?>" alt="<?php echo esc_attr__( 'LearnSchool Logo', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wk-logo-title"} -->
<p class="wk-logo-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">LearnSchool</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"wk-footer-desc"} -->
<p class="wk-footer-desc"><?php echo esc_html__( 'LearnSchool empowers children with interactive problem-solving, cognitive development games, and joyful educational journeys.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-footer-copy"} -->
<p class="wk-footer-copy">
<?php
/* translators: %s: Current calendar year. */
printf( esc_html__( '© %s LearnSchool Learning Platform. All rights reserved.', 'learnschool' ), esc_html( gmdate( 'Y' ) ) );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"wk-footer-doodles","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group wk-footer-doodles"><!-- wp:image {"sizeSlug":"full","className":"wk-footer-doodle-star"} -->
<figure class="wp-block-image size-full wk-footer-doodle-star"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/teacher-doodle-star.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-footer-doodle-circle"} -->
<figure class="wp-block-image size-full wk-footer-doodle-circle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/footer-circle-doodle.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-footer-doodle-wavy"} -->
<figure class="wp-block-image size-full wk-footer-doodle-wavy"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/teacher-doodle-wavy.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-footer-nav-col-wrap"} -->
<div class="wp-block-column wk-footer-nav-col-wrap"><!-- wp:columns {"className":"wk-footer-nav-grid"} -->
<div class="wp-block-columns wk-footer-nav-grid"><!-- wp:column {"className":"wk-footer-nav-col"} -->
<div class="wp-block-column wk-footer-nav-col"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Home', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/activities/' ) ); ?>"><?php echo esc_html__( 'App', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/activities/' ) ); ?>"><?php echo esc_html__( 'About', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/educators/' ) ); ?>"><?php echo esc_html__( 'People', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-footer-nav-col"} -->
<div class="wp-block-column wk-footer-nav-col"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/activities/' ) ); ?>"><?php echo esc_html__( 'For school', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/activities/' ) ); ?>"><?php echo esc_html__( 'Brain training', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/activities/' ) ); ?>"><?php echo esc_html__( 'E-learning', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/activities/' ) ); ?>"><?php echo esc_html__( 'Online modules', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-footer-nav-col"} -->
<div class="wp-block-column wk-footer-nav-col"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/activities/' ) ); ?>"><?php echo esc_html__( 'Media', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/educators/' ) ); ?>"><?php echo esc_html__( 'Support Us', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php echo esc_html__( 'Contact', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/activities/' ) ); ?>"><?php echo esc_html__( 'Places', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-footer-social-col"} -->
<div class="wp-block-column wk-footer-social-col"><!-- wp:group {"className":"wk-footer-socials","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group wk-footer-socials"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-1.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Instagram', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-2.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Facebook', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-3.svg' ) ); ?>" alt="<?php echo esc_attr__( 'X (formerly Twitter)', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
