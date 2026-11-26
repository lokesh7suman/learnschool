<?php
/**
 * Title: Admissions & Parent Resources Sidebar
 * Slug: learnschool/sidebar-admissions
 * Categories: learnschool/posts, learnschool/call-to-action
 * Block Types: core/template-part/sidebar
 * Inserter: false
 * Description: Parent resources sidebar featuring quick handbook links, admissions office hours, and an arched family tour card.
 * Keywords: sidebar, admissions, resources, hours, contact, parents
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"className":"learnschool-sidebar-rail","style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}},"layout":{"type":"default"}} -->
<div class="wp-block-group learnschool-sidebar-rail"><!-- wp:group {"className":"is-style-learnschool-soft-card","style":{"border":{"radius":"24px","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"borderColor":"border-default","backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-soft-card has-border-color has-border-default-border-color has-base-subtle-background-color has-background" style="border-style:solid;border-width:1px;border-radius:24px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":2,"fontSize":"medium","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-2"}}}} -->
<h2 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Parent Resources', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"fontSize":"small","className":"is-style-learnschool-clean-list"} -->
<ul class="wp-block-list has-small-font-size is-style-learnschool-clean-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>"><?php echo esc_html__( 'Admissions Roadmap', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#tuition' ) ); ?>"><?php echo esc_html__( 'Tuition &amp; Financial Aid', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Programs &amp; Curriculum', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php echo esc_html__( 'Parent Handbook &amp; FAQ', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-learnschool-card","style":{"border":{"radius":"24px","width":"1px","style":"solid"},"shadow":"var:preset|shadow|card","spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"borderColor":"border-default","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-border-color has-border-default-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":2,"fontSize":"medium","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-2"}}}} -->
<h2 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Admissions Office', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}}}} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3)"><strong><?php echo esc_html__( 'Mon – Fri:', 'learnschool' ); ?></strong> <?php echo esc_html__( '8:00 AM – 5:00 PM', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-1"}}}} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-1);font-weight:700"><a href="<?php echo esc_url( 'tel:5550192834' ); ?>"><?php echo esc_html__( '(555) 019-2834', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"primary","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-primary-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0;font-weight:600"><a href="<?php echo esc_url( 'mailto:admissions@learnschool.edu' ); ?>"><?php echo esc_html__( 'admissions@learnschool.edu', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-learnschool-card-arch","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card-arch has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"medium","textColor":"base","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-2"}}}} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-2)"><?php echo esc_html__( 'Schedule a Visit', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small","textColor":"base","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-4"}}}} -->
<p class="has-text-align-center has-base-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'Meet our classroom teachers and tour our discovery studios in person.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-yellow"} -->
<div class="wp-block-button is-style-learnschool-yellow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>"><?php echo esc_html__( 'Book a Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
