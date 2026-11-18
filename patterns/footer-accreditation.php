<?php
/**
 * Title: Footer with Accreditation
 * Slug: learnschool/footer-accreditation
 * Categories: footer, learnschool
 * Block Types: core/template-part/footer
 * Description: 4-column preschool footer with state licensing badge, program links, campus hours, and parent resources.
 * Keywords: footer, licensing, hours, campus, contact, links
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
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"},"margin":{"bottom":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":38,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0,"isLink":true,"style":{"typography":{"fontWeight":"700"}},"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'Nurturing curiosity, confidence, and compassion in young minds through inquiry-based learning and joyful play.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"border":{"radius":"9999px","width":"1px","style":"solid"}},"borderColor":"border","backgroundColor":"surface","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-border-color has-border-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:9999px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small","textColor":"primary"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html__( '✓ State Licensed #ECE-94812', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Our Programs', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-default"} -->
<ul class="wp-block-list is-style-default"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Infants (6w–12m)', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Toddlers (1–2y)', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Preschool (3–4y)', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Pre-K Readiness (4–5y)', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Summer Discovery Camp', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Parent Resources', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-default"} -->
<ul class="wp-block-list is-style-default"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>"><?php echo esc_html__( 'Admissions Roadmap', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#tuition' ) ); ?>"><?php echo esc_html__( 'Tuition & Financial Aid', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#curriculum' ) ); ?>"><?php echo esc_html__( 'Daily Rhythm Schedule', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php echo esc_html__( 'Immunization & Health', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/#tour' ) ); ?>"><?php echo esc_html__( 'Schedule Campus Visit', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Campus Hours', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><strong><?php echo esc_html__( 'Monday – Friday:', 'learnschool' ); ?></strong><br><?php echo esc_html__( '7:30 AM – 6:00 PM', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><strong><?php echo esc_html__( 'Campus Location:', 'learnschool' ); ?></strong><br><?php echo esc_html__( '124 Early Learning Way, Suite 100', 'learnschool' ); ?><br><?php echo esc_html__( 'Austin, TX 78701', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( 'tel:5551234567' ); ?>"><?php echo esc_html__( '📞 (555) 123-4567', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-4"}}},"backgroundColor":"border"} -->
<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--step-5);margin-bottom:var(--wp--preset--spacing--step-4)"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size">
<?php
/* translators: %s: Current calendar year. */
printf( esc_html__( '© %s LearnSchool Early Learning Academy. All rights reserved.', 'learnschool' ), esc_html( gmdate( 'Y' ) ) );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Equal Opportunity Early Childhood Care Provider', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
