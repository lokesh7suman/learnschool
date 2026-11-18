<?php
/**
 * Title: Footer - Deep Purple & Sunny Gold
 * Slug: learnschool/footer-4
 * Categories: footer
 * Keywords: footer, purple, gold, dark, contrast, contact, portals, hours
 * Description: Deep purple and sunny gold contrast footer with contact information, campus address, school portals, and hours.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"primary-dark","textColor":"base","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-base-color has-primary-dark-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:group {"className":"wk-logo-group","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group wk-logo-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-logo-icon"} -->
<figure class="wp-block-image size-full wk-logo-icon"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/branding/logo.svg' ) ); ?>" alt="<?php echo esc_attr__( 'LearnSchool Logo', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wk-logo-title","textColor":"base"} -->
<p class="wk-logo-title has-base-color has-text-color"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:var(--wp--preset--color--base);text-decoration:none"><?php echo esc_html__( 'LearnSchool', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-3"}},"typography":{"lineHeight":"1.7"}},"textColor":"primary-light","fontSize":"small"} -->
<p class="has-primary-light-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-3);line-height:1.7"><?php echo esc_html__( "Nurturing tomorrow's thinkers today. Inspiring young scholars through exploration, integrity, and creative joy.", 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small","textColor":"base"} -->
<p class="has-base-color has-text-color has-small-font-size"><?php echo esc_html__( '100 Academy Way, Cambridge, MA 02138', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"base"} -->
<p class="has-base-color has-text-color has-small-font-size"><a href="tel:5552345678" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Phone: (555) 234-5678', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"base"} -->
<p class="has-base-color has-text-color has-small-font-size"><a href="mailto:contact@learnschool.edu" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Email: contact@learnschool.edu', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-footer-doodles","layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2","margin":{"top":"var:preset|spacing|step-3"}}}} -->
<div class="wp-block-group wk-footer-doodles" style="margin-top:var(--wp--preset--spacing--step-3)"><!-- wp:image {"sizeSlug":"full","className":"wk-footer-doodle-star"} -->
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

<!-- wp:column {"width":"31%"} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:heading {"level":4,"textColor":"base","fontSize":"medium","style":{"typography":{"fontWeight":"700","letterSpacing":"0.02em"}}} -->
<h4 class="wp-block-heading has-base-color has-text-color has-medium-font-size" style="font-weight:700;letter-spacing:0.02em"><?php echo esc_html__( 'Portals & Quick Links', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2","margin":{"top":"var:preset|spacing|step-3"}}}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"fontSize":"small","textColor":"primary-light"} -->
<p class="has-primary-light-color has-text-color has-small-font-size"><a href="<?php echo esc_url( home_url( '/#portal' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Parent Portal Login', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"primary-light"} -->
<p class="has-primary-light-color has-text-color has-small-font-size"><a href="<?php echo esc_url( home_url( '/#lms' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Student LMS & Homework', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"primary-light"} -->
<p class="has-primary-light-color has-text-color has-small-font-size"><a href="<?php echo esc_url( home_url( '/#faculty' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Teacher & Staff Hub', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"primary-light"} -->
<p class="has-primary-light-color has-text-color has-small-font-size"><a href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Admissions Applications', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"primary-light"} -->
<p class="has-primary-light-color has-text-color has-small-font-size"><a href="<?php echo esc_url( home_url( '/#health-forms' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Health & Immunization Forms', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"31%"} -->
<div class="wp-block-column" style="flex-basis:31%"><!-- wp:heading {"level":4,"textColor":"base","fontSize":"medium","style":{"typography":{"fontWeight":"700","letterSpacing":"0.02em"}}} -->
<h4 class="wp-block-heading has-base-color has-text-color has-medium-font-size" style="font-weight:700;letter-spacing:0.02em"><?php echo esc_html__( 'Campus Operations & Hotline', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3"}}},"textColor":"primary-light","fontSize":"small"} -->
<p class="has-primary-light-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Office Hours: Mon–Fri, 7:30 AM – 5:30 PM', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"color":{"background":"var:preset|color|secondary","text":"var:preset|color|contrast"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"},"margin":{"top":"var:preset|spacing|step-2"}},"border":{"radius":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-contrast-color has-secondary-background-color has-text-color has-background" style="border-radius:12px;color:var(--wp--preset--color--contrast);background-color:var(--wp--preset--color--secondary);margin-top:var(--wp--preset--spacing--step-2);padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
<p class="has-small-font-size" style="font-weight:700"><?php echo esc_html__( '24/7 Security: (555) 019-2834', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-footer-socials","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2","margin":{"top":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-group wk-footer-socials" style="margin-top:var(--wp--preset--spacing--step-4)"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-1.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Instagram', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-2.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Facebook', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
<figure class="wp-block-image size-full wk-social-circle"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-3.svg' ) ); ?>" alt="<?php echo esc_attr__( 'X', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-4"}},"color":{"text":"var:preset|color|primary-light"}}} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity has-text-color has-primary-light-color" style="margin-top:var(--wp--preset--spacing--step-5);margin-bottom:var(--wp--preset--spacing--step-4)"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"small","textColor":"primary-light"} -->
<p class="has-primary-light-color has-text-color has-small-font-size">
<?php
/* translators: %s: Current calendar year. */
printf( esc_html__( '© %s LearnSchool Academy. Fully accredited independent educational institution.', 'learnschool' ), esc_html( gmdate( 'Y' ) ) );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small","textColor":"primary-light"} -->
<p class="has-primary-light-color has-text-color has-small-font-size"><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Privacy Policy', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"primary-light"} -->
<p class="has-primary-light-color has-text-color has-small-font-size"><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Terms of Use', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"primary-light"} -->
<p class="has-primary-light-color has-text-color has-small-font-size"><a href="<?php echo esc_url( home_url( '/coppa/' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'FERPA / COPPA', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
