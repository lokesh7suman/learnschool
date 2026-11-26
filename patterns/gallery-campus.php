<?php
/**
 * Title: Campus Classrooms & Activities Gallery
 * Slug: learnschool/gallery-campus
 * Categories: learnschool/features
 * Description: Clean architectural campus showcase featuring a full-width flagship studio split above a balanced two-column gallery for Sensory STEM pods and 1:4 educator mentorship.
 * Keywords: gallery, campus, classrooms, photos, portfolio, studios, spaces
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
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}}}} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Explore Our Learning ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-wavy has-primary-color" style="white-space:nowrap"><?php echo esc_html__( 'Spaces', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"medium","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Sunlit classrooms, sensory discovery studios, and welcoming mentorship designed for curious minds.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"is-style-learnschool-card learnschool-gallery-static-card learnschool-gallery-featured-card","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"bottom":"var:preset|spacing|step-5"}}},"backgroundColor":"base-subtle","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-learnschool-card learnschool-gallery-static-card learnschool-gallery-featured-card has-base-subtle-background-color has-background" style="border-radius:24px;margin-bottom:var(--wp--preset--spacing--step-5);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"56%"} -->
<div class="wp-block-column" style="flex-basis:56%"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustrations/space-creative-arts-studio.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Sunlit Reggio-inspired creative arts and story studio with watercolor palettes, clay pots, picture books, and a window reading bench', 'learnschool' ); ?>" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"},"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":3,"fontSize":"medium-large","textColor":"contrast","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-medium-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Creative Arts & Story Studio', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"base","style":{"spacing":{"margin":{"top":"var:preset|spacing|step-2","bottom":"0"}}}} -->
<p class="has-contrast-subtle-color has-text-color has-base-font-size" style="margin-top:var(--wp--preset--spacing--step-2);margin-bottom:0"><?php echo esc_html__( 'Sunlit Reggio-inspired studio tables stocked with watercolors, non-toxic clays, puppetry stages, and cozy picture-book reading nooks.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary-dark","fontSize":"small","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"0"}}}} -->
<p class="has-primary-dark-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:0;font-weight:700"><?php echo esc_html__( 'Ages 2–6  ·  Natural Daylight Atelier', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"className":"is-style-learnschool-card learnschool-gallery-static-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-5","left":"0","right":"0"},"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card learnschool-gallery-static-card has-surface-background-color has-background" style="border-radius:24px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-5);padding-left:0"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustrations/space-sensory-stem-pod.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Sunlit Montessori sensory STEM discovery table with wooden geometric blocks, balance scale, magnifying lenses, and potted sprouts', 'learnschool' ); ?>" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"0","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:0;padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":3,"fontSize":"large","textColor":"contrast","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Sensory STEM & Discovery Pods', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"base","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-contrast-subtle-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Hands-on geometry blocks, botanical science tables, and collaborative problem-solving stations.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary-dark","fontSize":"small","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|step-1","bottom":"0"}}}} -->
<p class="has-primary-dark-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-1);margin-bottom:0;font-weight:700"><?php echo esc_html__( 'Ages 3–6  ·  Botanical & Math Lab', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"className":"is-style-learnschool-card learnschool-gallery-static-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-5","left":"0","right":"0"},"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card learnschool-gallery-static-card has-surface-background-color has-background" style="border-radius:24px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-5);padding-left:0"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"learnschool-gallery-nook-photo"} -->
<figure class="wp-block-image size-large learnschool-gallery-nook-photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustrations/space-mentorship-reading-nook.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Early childhood educator preparing an illustrated storybook and observation journal in a sunlit reading nook', 'learnschool' ); ?>" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"0","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:0;padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":3,"fontSize":"large","textColor":"contrast","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Small 1:4 Mentorship Ratios', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"base","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-contrast-subtle-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Certified early childhood educators guiding small pods with personalized care and daily parent updates.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary-dark","fontSize":"small","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|step-1","bottom":"0"}}}} -->
<p class="has-primary-dark-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--step-1);margin-bottom:0;font-weight:700"><?php echo esc_html__( '1:4 Educator Ratio  ·  Daily Parent Journals', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
