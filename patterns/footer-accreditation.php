<?php
/**
 * Title: Footer with Accreditation
 * Slug: learnschool/footer-accreditation
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: 4-column preschool footer on a deep midnight surface with state licensing badge, program links, campus hours, and parent resources.
 * Keywords: footer, licensing, hours, campus, contact, links
 * Viewport Width: 1280
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"midnight","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-midnight-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"},"margin":{"bottom":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide" style="margin-bottom:var(--wp--preset--spacing--step-5)"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-2"}}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":36,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0,"isLink":true,"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"0"}}},"textColor":"border-default","fontSize":"small"} -->
<p class="has-border-default-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:0"><?php echo esc_html__( 'Nurturing curiosity, confidence, and compassion in young minds through inquiry-based learning and joyful play.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":2,"fontSize":"medium","textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Our Programs', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"fontSize":"small","className":"is-style-learnschool-clean-list"} -->
<ul class="wp-block-list has-small-font-size is-style-learnschool-clean-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>"><?php echo esc_html__( 'Infants (6w–12m)', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>"><?php echo esc_html__( 'Toddlers (1–2y)', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>"><?php echo esc_html__( 'Preschool (3–4y)', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>"><?php echo esc_html__( 'Pre-K Readiness (4–5y)', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>"><?php echo esc_html__( 'Summer Discovery Camp', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":2,"fontSize":"medium","textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Parent Resources', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"fontSize":"small","className":"is-style-learnschool-clean-list"} -->
<ul class="wp-block-list has-small-font-size is-style-learnschool-clean-list"><!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/admissions/' ) ); ?>"><?php echo esc_html__( 'Admissions Roadmap', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/admissions/' ) ); ?>"><?php echo esc_html__( 'Tuition & Financial Aid', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>"><?php echo esc_html__( 'Curriculum & Programs', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html__( 'Faculty & Campus', 'learnschool' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html__( 'Schedule Campus Visit', 'learnschool' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:heading {"level":2,"fontSize":"medium","textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Campus Hours', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"border-default","fontSize":"small"} -->
<p class="has-border-default-color has-text-color has-small-font-size"><strong style="color:var(--wp--preset--color--base)"><?php echo esc_html__( 'Monday – Friday:', 'learnschool' ); ?></strong><br><?php echo esc_html__( '7:30 AM – 6:00 PM', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"border-default","fontSize":"small"} -->
<p class="has-border-default-color has-text-color has-small-font-size"><strong style="color:var(--wp--preset--color--base)"><?php echo esc_html__( 'Campus Location:', 'learnschool' ); ?></strong><br><?php echo esc_html__( '124 Early Learning Way, Suite 100', 'learnschool' ); ?><br><?php echo esc_html__( 'Austin, TX 78701', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small","textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="font-weight:700"><a href="<?php echo esc_url( 'tel:5551234567' ); ?>" style="text-decoration:none;color:inherit"><?php echo esc_html__( '(555) 123-4567', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconBackgroundColor":"primary","size":"has-normal-icon-size","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-2","left":"var:preset|spacing|step-2"},"margin":{"top":"var:preset|spacing|step-3"}}}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--step-3)">
<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
<!-- wp:social-link {"url":"https://x.com","service":"x"} /-->
<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /-->
</ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-4"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--step-5);margin-bottom:var(--wp--preset--spacing--step-4)"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"learnschool/copyright"}}},"textColor":"border-default","fontSize":"small"} -->
<p class="has-border-default-color has-text-color has-small-font-size"><?php echo esc_html__( '© LearnSchool', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"border-default","fontSize":"small"} -->
<p class="has-border-default-color has-text-color has-small-font-size"><?php echo esc_html__( 'Equal Opportunity Early Childhood Care Provider', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
