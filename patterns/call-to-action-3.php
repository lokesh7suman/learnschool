<?php
/**
 * Title: Call to Action (Centered Newsletter Banner)
 * Slug: learnschool/call-to-action-3
 * Categories: call-to-action, banner
 * Keywords: newsletter, subscribe, centered, banner, doodle, parents
 * Description: Full-width warm gold banner with playful sparkle doodle, engaging invitation, and inline newsletter subscription form.
 * Inserter: yes
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"accent","textColor":"contrast","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-contrast-color has-accent-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"sizeSlug":"full","align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-2"}}}} -->
<figure class="wp-block-image aligncenter size-full" style="margin-bottom:var(--wp--preset--spacing--step-2)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/materials-doodle-sparkle.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html__( 'Get Weekly Learning Activities', 'learnschool' ); ?> <span class="wk-accent-learnschool"><?php echo esc_html__( 'Delivered to Your Inbox', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-medium-font-size" style="line-height:1.7"><?php esc_html_e( 'Join 15,000+ parents and educators receiving curated hands-on science experiments, reading games, and positive learning insights every Sunday morning.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form action="#subscribe" method="post" onsubmit="event.preventDefault(); alert('<?php echo esc_attr__( 'Thank you for subscribing! Your weekly activities are on the way.', 'learnschool' ); ?>');" style="max-width:560px;margin:24px auto 16px;display:flex;gap:12px;flex-wrap:wrap;justify-content:center;align-items:center;">
<input type="email" name="subscriber_email" placeholder="<?php echo esc_attr__( 'Enter your parent or teacher email', 'learnschool' ); ?>" required autocomplete="email" aria-label="<?php echo esc_attr__( 'Email address', 'learnschool' ); ?>" style="flex:1 1 280px;background:var(--wp--preset--color--base);border-radius:9999px;padding:14px 24px;border:1.5px solid rgba(18,18,18,0.15);" />
<div class="wp-block-button is-style-learnschool-pill"><button type="submit" class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Subscribe Free', 'learnschool' ); ?></button></div>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"align":"center","textColor":"contrast","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-small-font-size"><?php esc_html_e( 'Zero spam. Unsubscribe at any time with a single click.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->