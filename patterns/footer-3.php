<?php
/**
 * Title: Footer - Centered Minimal
 * Slug: learnschool/footer-3
 * Categories: footer
 * Keywords: footer, minimal, centered, clean, simple
 * Description: Streamlined centered footer with brand icon, horizontal navigation, social icons, and copyright.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"wk-logo-group","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group wk-logo-group"><!-- wp:image {"width":"36px","height":"36px","sizeSlug":"full","linkDestination":"custom","className":"wk-logo-icon"} -->
<figure class="wp-block-image size-full is-resized wk-logo-icon"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/branding/logo.svg' ) ); ?>" alt="<?php echo esc_attr__( 'LearnSchool Logo', 'learnschool' ); ?>" style="width:36px;height:36px"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wk-logo-title"} -->
<p class="wk-logo-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">LearnSchool</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Home', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Programs', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Admissions', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/#teachers' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Faculty', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Blog', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Contact', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-footer-socials","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group wk-footer-socials"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-1.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Instagram', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-2.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Facebook', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-3.svg' ) ); ?>" alt="<?php echo esc_attr__( 'X', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-gradient-pill","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-gradient-pill" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-2)"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size">
<?php
/* translators: %s: Current calendar year. */
printf( esc_html__( '© %s LearnSchool. Joyful learning for every child. All rights reserved.', 'learnschool' ), esc_html( gmdate( 'Y' ) ) );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
