<?php
/**
 * Title: Call to Action (Split Card with Benefits)
 * Slug: learnschool/call-to-action-2
 * Categories: call-to-action, banner
 * Keywords: cta, split, benefits, checkmarks, inquiry, form
 * Description: Two-tone split call-to-action card showcasing institutional benefits on the left and an admissions inquiry form on the right.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"border":{"radius":"32px"},"shadow":"var:preset|shadow|elevated","spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide" style="border-radius:32px;box-shadow:var(--wp--preset--shadow--elevated)"><!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6","right":"var:preset|spacing|step-6"}}},"backgroundColor":"primary","textColor":"base"} -->
<div class="wp-block-column has-base-color has-primary-background-color has-text-color has-background" style="flex-basis:50%;padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-6);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Join the LearnSchool Family', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"textColor":"base","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'Empower Your Child to', 'learnschool' ); ?> <span class="wk-font-script"><?php echo esc_html__( 'Think, Create &amp; Excel', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Join over a thousand families who trust LearnSchool to provide an innovative, loving, and academically enriching environment from preschool to graduation.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Accredited STEM & creative arts curriculum tailored for each developmental stage', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Small class sizes guaranteeing personalized educator mentorship', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Dedicated parent dashboard with real-time academic milestones & portfolio sharing', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6","right":"var:preset|spacing|step-6"}}},"backgroundColor":"base","textColor":"contrast"} -->
<div class="wp-block-column has-contrast-color has-base-background-color has-text-color has-background" style="flex-basis:50%;padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-6);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Request an Admissions Pack', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( 'Fill in your details below to receive our 2026–2027 curriculum prospectus and campus visit pass.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form action="#request-pack" method="post" onsubmit="event.preventDefault(); alert('<?php echo esc_attr__( 'Thank you! Your admissions pack has been requested.', 'learnschool' ); ?>');">
<p style="margin-bottom:12px;"><label for="cta-parent-name" style="display:block;font-weight:600;font-size:14px;margin-bottom:4px;"><?php esc_html_e( 'Parent or Guardian Name', 'learnschool' ); ?></label><input id="cta-parent-name" type="text" name="parent_name" placeholder="<?php echo esc_attr__( 'e.g., Sarah Jenkins', 'learnschool' ); ?>" required autocomplete="name" /></p>
<p style="margin-bottom:12px;"><label for="cta-email" style="display:block;font-weight:600;font-size:14px;margin-bottom:4px;"><?php esc_html_e( 'Email Address', 'learnschool' ); ?></label><input id="cta-email" type="email" name="email" placeholder="<?php echo esc_attr__( 'name@example.com', 'learnschool' ); ?>" required autocomplete="email" /></p>
<p style="margin-bottom:16px;"><label for="cta-grade-select" style="display:block;font-weight:600;font-size:14px;margin-bottom:4px;"><?php esc_html_e( 'Select Grade Level', 'learnschool' ); ?></label><select id="cta-grade-select" name="grade"><option value=""><?php esc_html_e( 'Select grade level of interest', 'learnschool' ); ?></option><option value="early-years"><?php esc_html_e( 'Early Learning (Ages 3–5)', 'learnschool' ); ?></option><option value="elementary"><?php esc_html_e( 'Elementary School (Grades 1–5)', 'learnschool' ); ?></option><option value="middle"><?php esc_html_e( 'Middle School (Grades 6–8)', 'learnschool' ); ?></option><option value="high"><?php esc_html_e( 'High School (Grades 9–12)', 'learnschool' ); ?></option></select></p>
<div class="wp-block-button is-style-yellow-pill" style="margin-bottom:12px;"><button type="submit" class="wp-block-button__link wp-element-button" style="width:100%;"><?php echo esc_html__( 'Schedule a Campus Tour', 'learnschool' ); ?></button></div>
<p style="font-size:12px;color:var(--wp--preset--color--contrast-subtle);margin:0;text-align:center;"><?php esc_html_e( 'We respect your privacy. No spam, guaranteed.', 'learnschool' ); ?></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->