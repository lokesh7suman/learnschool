<?php
/**
 * Title: Learning Materials Split Showcase
 * Slug: learnschool/learning-materials-split
 * Categories: learnschool/features
 * Description: Two-column showcase highlighting hands-on educational materials, certified curriculum kits, and playful learning.
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
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'Tactile Learning Standards', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"var:preset|spacing|step-3"}}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:var(--wp--preset--spacing--step-3);font-family:var(--wp--preset--font-family--quicksand);line-height:1.2"><?php echo esc_html__( 'Curated Materials Built for ', 'learnschool' ); ?><span class="learnschool-script"><span class="learnschool-underline-wavy" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Sensory Wonder', 'learnschool' ); ?></span></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-contrast-subtle-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-4);line-height:1.7"><?php echo esc_html__( 'We eliminate plastic sensory overload in favor of organic, research-backed materials that engage fine-motor coordination and spatial intuition.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#materials"><?php echo esc_html__( 'Explore Our Material Standards', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-learnschool-card","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-surface-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'FSC-Certified Natural Hardwoods', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Silky-smooth beechwood geometric blocks and building arches finished exclusively with vegetable-based food-grade waxes.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-learnschool-card","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-surface-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Sensory Tactile Manipulatives', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Natural wool felt storytelling mats, kinetic silica sand trays, and glass discovery marbles that invite delicate sensory refinement.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-learnschool-card","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-surface-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php echo esc_html__( 'Montessori Spatial & Math Chains', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Golden bead counting chains, graduated cylinder blocks, and wooden fraction boards that make abstract logic concrete.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
