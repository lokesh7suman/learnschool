<?php
/**
 * Title: Header with Navigation & Tour CTA
 * Slug: learnschool/header-nav-cta
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Clean mobile-first header with logo, multi-level school navigation, and Sign In & Contact Us action buttons.
 * Keywords: header, navigation, logo, menu, tour, cta, contact, signin, school, academics, admissions
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
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":36,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0,"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand","fontWeight":"700"}},"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","style":{"typography":{"fontWeight":"600"}},"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
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
<!-- wp:navigation-submenu {"label":"<?php echo esc_html__( 'News &amp; Events', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/news-events/' ) ); ?>"} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Announcements', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/news-events/announcements/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Events Calendar', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/news-events/events-calendar/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Media Gallery', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/news-events/media-gallery/' ) ); ?>"} /-->
<!-- /wp:navigation-submenu -->
<!-- wp:navigation-submenu {"label":"<?php echo esc_html__( 'Contact', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"} -->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Campus Map &amp; Directions', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/contact-us/campus-map/' ) ); ?>"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_html__( 'Parent Portal Support', 'learnschool' ); ?>","url":"<?php echo esc_url( home_url( '/contact-us/parent-portal/' ) ); ?>"} /-->
<!-- /wp:navigation-submenu -->
<!-- /wp:navigation -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/contact-us/parent-portal/' ) ); ?>"><?php echo esc_html__( 'Sign In', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php echo esc_html__( 'Contact Us', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
