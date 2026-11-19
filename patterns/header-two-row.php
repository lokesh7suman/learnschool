<?php
/**
 * Title: Header Two-Row with Utility Bar
 * Slug: learnschool/header-two-row
 * Categories: header, learnschool
 * Block Types: core/template-part/header
 * Keywords: header, two-row, utility, top-bar, contact, portals, navigation, school, academics
 * Description: Two-tier header featuring a top utility contact strip above the primary multi-level navigation bar.
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
<!-- wp:group {"tagName":"header","align":"full","layout":{"type":"default"}} -->
<header class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","textColor":"contrast-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-subtle-color has-base-subtle-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="tel:5550192834" style="color:var(--wp--preset--color--contrast-subtle);text-decoration:none"><?php echo esc_html__( 'Call: (555) 019-2834', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Mon–Fri: 8:00 AM – 5:00 PM', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/contact-us/parent-portal/' ) ); ?>" style="color:var(--wp--preset--color--contrast-subtle);text-decoration:none"><?php echo esc_html__( 'Parent Portal', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( home_url( '/about-us/leadership/faculty-directory/' ) ); ?>" style="color:var(--wp--preset--color--contrast-subtle);text-decoration:none"><?php echo esc_html__( 'Staff Directory', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-1"}}} -->
<div class="wp-block-group"><!-- wp:image {"width":"18px","height":"18px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-1.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Instagram', 'learnschool' ); ?>" style="width:18px;height:18px"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"18px","height":"18px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-2.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Facebook', 'learnschool' ); ?>" style="width:18px;height:18px"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"18px","height":"18px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/social-3.svg' ) ); ?>" alt="<?php echo esc_attr__( 'X', 'learnschool' ); ?>" style="width:18px;height:18px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"bottom":{"color":"var:preset|color|base-subtle","width":"1px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--base-subtle);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":34,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0,"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Home', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/' ) ); ?>"} /-->
<!-- wp:navigation-submenu {"label":"<?php echo esc_html__( 'About Us', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/about-us/' ) ); ?>"} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Our Mission &amp; Values', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/about-us/mission-values/' ) ); ?>"} /-->
<!-- wp:navigation-submenu {"label":"<?php echo esc_html__( 'Leadership &amp; Governance', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/about-us/leadership/' ) ); ?>"} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Principal’s Welcome', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/about-us/leadership/principals-welcome/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Board of Trustees', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/about-us/leadership/board-of-trustees/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Faculty Directory', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/about-us/leadership/faculty-directory/' ) ); ?>"} /-->
<!-- /wp:navigation-submenu -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Campus &amp; Facilities', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/about-us/campus-facilities/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Accreditations &amp; Awards', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/about-us/accreditations/' ) ); ?>"} /-->
<!-- /wp:navigation-submenu -->
<!-- wp:navigation-submenu {"label":"<?php echo esc_html__( 'Academics', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/academics/' ) ); ?>"} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Early Learning &amp; Pre-K', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/academics/early-learning/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Elementary School', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/academics/elementary-school/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Middle School', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/academics/middle-school/' ) ); ?>"} /-->
<!-- wp:navigation-submenu {"label":"<?php echo esc_html__( 'High School', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/academics/high-school/' ) ); ?>"} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'AP &amp; Honors Program', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/academics/high-school/ap-honors/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'STEM &amp; AI Lab', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/academics/high-school/stem-robotics/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'College Counseling', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/academics/high-school/college-counseling/' ) ); ?>"} /-->
<!-- /wp:navigation-submenu -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Academic Calendar', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/academics/academic-calendar/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Library &amp; Media Center', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/academics/library-media-center/' ) ); ?>"} /-->
<!-- /wp:navigation-submenu -->
<!-- wp:navigation-submenu {"label":"<?php echo esc_html__( 'Admissions', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/admissions/' ) ); ?>"} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'How to Apply', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/admissions/how-to-apply/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Tuition &amp; Aid', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/admissions/tuition-aid/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Schedule a Tour', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/admissions/campus-tour/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Admissions FAQs', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/admissions/admissions-faqs/' ) ); ?>"} /-->
<!-- /wp:navigation-submenu -->
<!-- wp:navigation-submenu {"label":"<?php echo esc_html__( 'Student Life', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/student-life/' ) ); ?>"} -->
<!-- wp:navigation-submenu {"label":"<?php echo esc_html__( 'Athletics &amp; Sports', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/student-life/athletics/' ) ); ?>"} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Varsity Teams', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/student-life/athletics/varsity-teams/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Sports Complex', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/student-life/athletics/sports-complex/' ) ); ?>"} /-->
<!-- /wp:navigation-submenu -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Arts &amp; Music', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/student-life/arts-music/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Clubs &amp; Activities', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/student-life/clubs-activities/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Health &amp; Wellness', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/student-life/health-wellness/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Dining &amp; Nutrition', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/student-life/dining-nutrition/' ) ); ?>"} /-->
<!-- /wp:navigation-submenu -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Contact', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"} /-->
<!-- /wp:navigation -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill","backgroundColor":"primary","textColor":"base"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/admissions/how-to-apply/' ) ); ?>"><?php echo esc_html__( 'Enroll Now', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
