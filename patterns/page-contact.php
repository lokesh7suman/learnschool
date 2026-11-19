<?php
/**
 * Title: Contact & Campus Visit Page
 * Slug: learnschool/page-contact
 * Categories: learnschool/pages
 * Template Types: front-page, page
 * Description: Full Contact & Campus Visit page layout with interactive inquiry form, visiting hours, location details, and FAQ accordion.
 * Keywords: contact, visit, campus, inquiry, tour, map, hours
 *
 * @package LearnSchool
 * @since 1.2.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Connect With Us', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand"}},"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--quicksand)"><?php echo esc_html__( 'Visit Our ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Campus', 'learnschool' ); ?></span><br><?php echo esc_html__( '& Schedule a Tour', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'We welcome parents, prospective students, and community members to explore our state-of-the-art facilities, meet our educators, and experience daily life at LearnSchool.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-learnschool-card","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"},"blockGap":"var:preset|spacing|step-4"}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;color:var(--wp--preset--color--primary)"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Campus Location', 'learnschool' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( '100 Academy Way, Cambridge, MA 02138', 'learnschool' ); ?><br><?php echo esc_html__( 'Visitor parking available at North Gate Entrance.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;color:var(--wp--preset--color--primary)"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Hours of Operation', 'learnschool' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Monday – Friday: 7:30 AM – 6:00 PM', 'learnschool' ); ?><br><?php echo esc_html__( 'Saturday (Tours by Appointment): 9:00 AM – 1:00 PM', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}}} -->
<div class="wp-block-group"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex-shrink:0;color:var(--wp--preset--color--primary)"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Direct Contact', 'learnschool' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Main Office: (555) 234-5678', 'learnschool' ); ?><br><?php echo esc_html__( 'Admissions: admissions@learnschool.edu', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:group {"className":"is-style-learnschool-card","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-subtle-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":2,"fontSize":"x-large","style":{"typography":{"fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-x-large-font-size" style="font-weight:700"><?php echo esc_html__( 'Send Us an Inquiry', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Complete the inquiry form below and our admissions team will respond within one business day.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form action="#" method="post" style="display:flex;flex-direction:column;gap:var(--wp--preset--spacing--step-3);margin-top:var(--wp--preset--spacing--step-3)">
	<div>
		<label for="contact-name" style="display:block;margin-bottom:var(--wp--preset--spacing--step-1);font-weight:600;font-size:var(--wp--preset--font-size--small);color:var(--wp--preset--color--contrast)"><?php echo esc_html__( 'Parent / Guardian Name', 'learnschool' ); ?> *</label>
		<input type="text" id="contact-name" name="name" required placeholder="<?php echo esc_attr__( 'Jane Doe', 'learnschool' ); ?>" />
	</div>
	<div style="display:grid;grid-template-columns:1fr 1fr;gap:var(--wp--preset--spacing--step-3)">
		<div>
			<label for="contact-email" style="display:block;margin-bottom:var(--wp--preset--spacing--step-1);font-weight:600;font-size:var(--wp--preset--font-size--small);color:var(--wp--preset--color--contrast)"><?php echo esc_html__( 'Email Address', 'learnschool' ); ?> *</label>
			<input type="email" id="contact-email" name="email" required placeholder="<?php echo esc_attr__( 'jane@example.com', 'learnschool' ); ?>" />
		</div>
		<div>
			<label for="contact-phone" style="display:block;margin-bottom:var(--wp--preset--spacing--step-1);font-weight:600;font-size:var(--wp--preset--font-size--small);color:var(--wp--preset--color--contrast)"><?php echo esc_html__( 'Phone Number', 'learnschool' ); ?></label>
			<input type="tel" id="contact-phone" name="phone" placeholder="<?php echo esc_attr__( '(555) 123-4567', 'learnschool' ); ?>" />
		</div>
	</div>
	<div>
		<label for="contact-program" style="display:block;margin-bottom:var(--wp--preset--spacing--step-1);font-weight:600;font-size:var(--wp--preset--font-size--small);color:var(--wp--preset--color--contrast)"><?php echo esc_html__( 'Program of Interest', 'learnschool' ); ?></label>
		<select id="contact-program" name="program">
			<option value=""><?php echo esc_html__( 'Select a program...', 'learnschool' ); ?></option>
			<option value="early-learning"><?php echo esc_html__( 'Infants &amp; Toddlers (6w - 2y)', 'learnschool' ); ?></option>
			<option value="preschool"><?php echo esc_html__( 'Preschool &amp; Pre-K (3 - 5y)', 'learnschool' ); ?></option>
			<option value="primary"><?php echo esc_html__( 'Primary Elementary (K - Grade 5)', 'learnschool' ); ?></option>
			<option value="summer-camp"><?php echo esc_html__( 'Summer Discovery Camps', 'learnschool' ); ?></option>
		</select>
	</div>
	<div>
		<label for="contact-message" style="display:block;margin-bottom:var(--wp--preset--spacing--step-1);font-weight:600;font-size:var(--wp--preset--font-size--small);color:var(--wp--preset--color--contrast)"><?php echo esc_html__( 'Questions or Tour Request Notes', 'learnschool' ); ?></label>
		<textarea id="contact-message" name="message" rows="4" placeholder="<?php echo esc_attr__( 'Tell us about your child or requested tour dates...', 'learnschool' ); ?>"></textarea>
	</div>
	<div style="margin-top:var(--wp--preset--spacing--step-2)">
		<button type="submit" class="wp-element-button" style="background-color:var(--wp--preset--color--primary);color:var(--wp--preset--color--base);padding:var(--wp--preset--spacing--step-3) var(--wp--preset--spacing--step-5);border:none;border-radius:9999px;font-weight:700;font-size:var(--wp--preset--font-size--medium);cursor:pointer"><?php echo esc_html__( 'Send Inquiry', 'learnschool' ); ?></button>
	</div>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"learnschool/faq-simple"} /-->
