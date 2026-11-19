<?php
/**
 * Title: Faculty Spotlight with Principal Welcome
 * Slug: learnschool/teachers-spotlight
 * Categories: learnschool/card
 * Inserter: true
 * Keywords: teachers, principal, leadership, faculty, team
 * Description: Asymmetrical layout featuring an expansive message and bio from the school principal on the left, paired with a 2x2 grid of key subject educators on the right.
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
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-5"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-5)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Academic Leadership &amp; Faculty', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand"},"spacing":{"margin":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-2"}}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--step-1);margin-bottom:var(--wp--preset--spacing--step-2);font-family:var(--wp--preset--font-family--quicksand)"><?php echo esc_html__( 'Meet Our Dedicated', 'learnschool' ); ?> <span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Educators &amp; Mentors', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size"><?php esc_html_e( 'Our certified faculty brings decades of collective experience, academic credentials, and unwavering dedication to every classroom.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"}},"border":{"radius":"24px"}},"backgroundColor":"base","className":"is-style-learnschool-card-large","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card-large has-base-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:image {"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-kristin.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Dr. Kristin Watson', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:120px;height:120px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-1"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Dr. Kristin Watson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Head of School &amp; Science Faculty', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7;margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-4)"><?php esc_html_e( '“At LearnSchool, we nurture not just academic excellence, but the innate curiosity, creative resilience, and empathetic character in every child. Welcome to our vibrant learning community.”', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#principal-welcome"><?php echo esc_html__( "Read Headmaster's Welcome", 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"},"margin":{"bottom":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--step-4)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px"}},"backgroundColor":"base","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"width":"72px","height":"72px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jenny.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jenny Wilson', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:72px;height:72px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-1"}}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Jenny Wilson', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'Visual Arts &amp; Studio Lead', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( '8+ Years Experience • B.F.A. RISD', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px"}},"backgroundColor":"base","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"width":"72px","height":"72px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jacob.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jacob Jones', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:72px;height:72px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-1"}}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Jacob Jones', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'Mathematics &amp; Logic', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( '10+ Years Experience • M.S. MIT', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px"}},"backgroundColor":"base","className":"is-style-learnschool-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"width":"72px","height":"72px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-savannah.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Savannah Nguyen', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:72px;height:72px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-1"}}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-1)"><?php esc_html_e( 'Savannah Nguyen', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'Literature &amp; Phonics', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php esc_html_e( '6+ Years Experience • M.A. Columbia', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"20px"}},"backgroundColor":"primary-light","className":"is-style-lilac","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-lilac has-primary-light-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"1px","textTransform":"uppercase"}},"textColor":"primary-dark","fontSize":"small"} -->
<p class="has-primary-dark-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'We Are Hiring!', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2"}}},"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-2)"><?php esc_html_e( 'Join Our Academic Team', 'learnschool' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast","fontSize":"small","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}}} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--step-3)"><?php esc_html_e( 'Looking for exceptional educators passionate about shaping the next generation.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
<p style="font-weight:700"><a href="#careers" style="color:var(--wp--preset--color--primary-dark);text-decoration:none;"><?php echo esc_html__( 'View Open Positions', 'learnschool' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->