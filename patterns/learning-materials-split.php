<?php
/**
 * Title: Learning Materials Split Showcase
 * Slug: learnschool/learning-materials-split
 * Categories: learnschool/features
 * Description: Two-column showcase highlighting enjoyable learning materials on the left and staggered colorful capsule vignettes with doodles on the right.
 * Keywords: materials, showcase, learning, education, books, curriculum, kids, montessori
 * Viewport Width: 1280
 * Inserter: true
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"anchor":"materials","tagName":"section","align":"full","className":"learnschool-materials-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull learnschool-materials-section has-base-background-color has-background" id="materials" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-6","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-4"}}}} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'The learning materials provided are ', 'learnschool' ); ?><span class="learnschool-script learnschool-oval-highlight has-primary-color"><?php echo esc_html__( 'enjoyable', 'learnschool' ); ?></span><?php echo esc_html__( ' for children', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-5"}}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-contrast-subtle-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--step-5)"><?php echo esc_html__( 'Don’t worry! Children have a joyful time learning with tactile storybooks, guided touch labs, and creative kits designed to be easy to understand.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Learn more', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%"><!-- wp:group {"className":"learnschool-materials-capsules","style":{"spacing":{"blockGap":"var:preset|spacing|step-4"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<div class="wp-block-group learnschool-materials-capsules"><!-- wp:group {"className":"learnschool-materials-capsule learnschool-materials-capsule--lilac","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"},"blockGap":"var:preset|spacing|step-3"}},"backgroundColor":"primary-light","textColor":"contrast","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group learnschool-materials-capsule learnschool-materials-capsule--lilac has-contrast-color has-primary-light-background-color has-text-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"width":"116px","height":"116px","scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"learnschool-capsule-media","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-medium is-resized has-custom-border learnschool-capsule-media"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/materials-storybooks-kit.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Illustrated storybooks and wooden alphabet blocks', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:116px;height:116px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"medium","textColor":"contrast"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Illustrated Storybooks', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-small-font-size"><?php echo esc_html__( 'Phonics readers & wooden blocks', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"learnschool-materials-capsule learnschool-materials-capsule--purple","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"},"blockGap":"var:preset|spacing|step-3"}},"backgroundColor":"primary","textColor":"base","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"right"}} -->
<div class="wp-block-group learnschool-materials-capsule learnschool-materials-capsule--purple has-base-color has-primary-background-color has-text-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"medium","textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Interactive Touch Labs', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small","textColor":"base"} -->
<p class="has-base-color has-text-color has-small-font-size"><?php echo esc_html__( 'Play-based geometry & puzzles', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"width":"116px","height":"116px","scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"learnschool-capsule-media","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-medium is-resized has-custom-border learnschool-capsule-media"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/materials-digital-kit.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Kid-safe digital tablet and Montessori wooden shape pieces', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:116px;height:116px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"learnschool-materials-capsule learnschool-materials-capsule--gold","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-2","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"},"blockGap":"var:preset|spacing|step-3"}},"backgroundColor":"accent","textColor":"contrast","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group learnschool-materials-capsule learnschool-materials-capsule--gold has-contrast-color has-accent-background-color has-text-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-2);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-2);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:image {"width":"120px","height":"120px","scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"learnschool-capsule-media learnschool-capsule-media--blend","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-medium is-resized has-custom-border learnschool-capsule-media learnschool-capsule-media--blend"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/creative-classroom-art.png' ) ); ?>" alt="<?php echo esc_attr__( 'Creative arts easel, crayons, and sensory play supplies', 'learnschool' ); ?>" style="border-radius:9999px;object-fit:cover;width:120px;height:120px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"medium","textColor":"contrast"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Tactile Craft & STEM Kits', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast"} -->
<p class="has-contrast-color has-text-color has-small-font-size"><?php echo esc_html__( 'Hands-on art, botany & building', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
