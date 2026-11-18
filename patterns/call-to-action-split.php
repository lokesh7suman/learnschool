<?php
/**
 * Title: Call to Action — Split Card with Admissions Form
 * Slug: learnschool/call-to-action-split
 * Categories: call-to-action, learnschool
 * Description: Two-tone split card with institutional benefits on the left and an email admissions-pack capture form on the right.
 * Keywords: cta, split, admissions, form, benefits, email, inquiry
 * Viewport Width: 1280
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","backgroundColor":"base-subtle","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)">

<!-- wp:columns {"align":"wide","style":{"border":{"radius":"32px"},"shadow":"var:preset|shadow|elevated","spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide" style="border-radius:32px;box-shadow:var(--wp--preset--shadow--elevated)">

<!-- wp:column {"width":"50%","backgroundColor":"primary","textColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6","right":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-column has-primary-background-color has-background has-base-color has-text-color" style="flex-basis:50%;padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-6);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-6)">

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase">Join the LearnSchool Family</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"textColor":"base","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size">Empower Your Child to Think, Create &amp; Excel</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","fontSize":"medium","style":{"typography":{"lineHeight":"1.7"}}} -->
<p class="has-base-color has-text-color has-medium-font-size" style="line-height:1.7">Join over a thousand families who trust LearnSchool to provide an innovative, loving, and academically enriching environment from preschool to graduation.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li>Accredited STEM &amp; creative arts curriculum tailored for each developmental stage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Small class sizes guaranteeing personalized educator mentorship</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dedicated parent dashboard with real-time academic milestones &amp; portfolio sharing</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","backgroundColor":"base","textColor":"contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6","right":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-column has-base-background-color has-background has-contrast-color has-text-color" style="flex-basis:50%;padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-6);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-6)">

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Request an Admissions Pack</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size">Fill in your details below to receive our 2025–2026 curriculum prospectus and campus visit pass.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|step-2"} -->
<div style="height:var(--wp--preset--spacing--step-2)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Email address","showLabel":false,"placeholder":"Enter your email address","buttonText":"Get Started","buttonPosition":"button-inside","buttonUseIcon":false,"style":{"border":{"radius":"100px"}}} /-->

<!-- wp:spacer {"height":"var:preset|spacing|step-1"} -->
<div style="height:var(--wp--preset--spacing--step-1)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-lock.svg' ) ); ?>" alt="" width="16" height="16" style="vertical-align:-2px;margin-right:6px;display:inline-block"/>Your information is safe. We never share your details.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</section>
<!-- /wp:group -->
