<?php
/**
 * Title: Footer - Multi-Column with Newsletter & Legal Bar
 * Slug: learnschool/footer-2
 * Categories: footer
 * Keywords: footer, newsletter, sitemap, legal, columns, mega-footer
 * Description: Four-column footer featuring newsletter signup, categorized sitemaps, social links, and bottom legal bar.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"className":"wk-logo-group","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group wk-logo-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-logo-icon"} -->
<figure class="wp-block-image size-full wk-logo-icon"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/branding/logo.svg' ) ); ?>" alt="<?php echo esc_attr__( 'LearnSchool Logo', 'learnschool' ); ?>"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wk-logo-title"} -->
<p class="wk-logo-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">LearnSchool</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-3"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Empowering young learners through interactive problem-solving, cognitive discovery, and a caring school community.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( '100 Academy Way, Cambridge, MA', 'learnschool' ); ?><br><a href="tel:5552345678" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Phone: (555) 234-5678', 'learnschool' ); ?></a><br><a href="mailto:info@learnschool.edu" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Email: info@learnschool.edu', 'learnschool' ); ?></a></p>
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

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Programs', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-2)"><a href="<?php echo esc_url( home_url( '/#early-learning' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Early Learning', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/#primary-stem' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Primary STEM', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/#arts-music' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Arts & Music', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/#summer-camps' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Summer Camps', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/#online-modules' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Online Modules', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'School Life', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-2)"><a href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Admissions', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/#portal' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Parent Portal', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/#directory' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Faculty Directory', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/#calendar' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Academic Calendar', 'learnschool' ); ?></a><br><a href="<?php echo esc_url( home_url( '/#campus-safety' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Campus Safety', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Stay Connected', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2"}}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Subscribe to our weekly school bulletin and educational parenting guides.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="learnschool-newsletter-form" action="#" method="post" style="display:flex;gap:8px;margin-top:12px;margin-bottom:16px;flex-wrap:wrap">
<label class="screen-reader-text" for="learnschool-footer2-email"><?php echo esc_html__( 'Email Address', 'learnschool' ); ?></label>
<input id="learnschool-footer2-email" type="email" name="email" placeholder="<?php echo esc_attr__( 'Enter your email...', 'learnschool' ); ?>" required style="flex:1;min-width:160px;border-radius:9999px;border:1px solid var(--wp--preset--color--contrast-subtle, #d1d5db);padding:8px 14px;font-size:14px"/>
<button type="submit" class="wp-block-button__link wp-element-button" style="border-radius:9999px;background-color:var(--wp--preset--color--primary);color:var(--wp--preset--color--base);padding:8px 16px;font-size:14px;border:none;cursor:pointer"><?php echo esc_html__( 'Subscribe', 'learnschool' ); ?></button>
</form>
<!-- /wp:html -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"wk-social-circle"} -->
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

<!-- wp:separator {"align":"wide","className":"is-style-gradient-pill","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-4"}}}} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-gradient-pill" style="margin-top:var(--wp--preset--spacing--step-5);margin-bottom:var(--wp--preset--spacing--step-4)"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size">
<?php
/* translators: %s: Current calendar year. */
printf( esc_html__( '© %s LearnSchool Academy. All rights reserved.', 'learnschool' ), esc_html( gmdate( 'Y' ) ) );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Privacy Policy', 'learnschool' ); ?></a> &bull; <a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Terms of Service', 'learnschool' ); ?></a> &bull; <a href="<?php echo esc_url( home_url( '/accessibility/' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html__( 'Accessibility', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
