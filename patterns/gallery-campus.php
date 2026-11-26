<?php
/**
 * Title: Campus Classrooms & Activities Gallery
 * Slug: learnschool/gallery-campus
 * Categories: learnschool/features
 * Description: Asymmetric two-column architectural showcase highlighting our creative arts studio, sensory STEM pods, and low 1:4 mentorship classrooms.
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
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3)"><?php echo esc_html__( 'Explore Our Learning ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-wavy has-primary-color" style="white-space:nowrap"><?php echo esc_html__( 'Spaces', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Sunlit classrooms, sensory discovery studios, and welcoming mentorship designed for curious minds.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"54%"} -->
<div class="wp-block-column" style="flex-basis:54%"><!-- wp:group {"className":"is-style-learnschool-card-arch","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-4","left":"0","right":"0"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card-arch has-base-subtle-background-color has-background" style="min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-4);padding-left:0"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustrations/creative-classroom-art.png' ) ); ?>" alt="<?php echo esc_attr__( 'Sunlit creative arts and story studio with children exploring paints, crafts, and books', 'learnschool' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"0","left":"var:preset|spacing|step-5","right":"var:preset|spacing|step-5"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-5);padding-bottom:0;padding-left:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Creative Arts &amp; Story Studio', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Sunlit Reggio-inspired studio tables stocked with watercolors, non-toxic clays, puppetry stages, and cozy picture-book reading nooks.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"46%"} -->
<div class="wp-block-column" style="flex-basis:46%"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|step-4"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"className":"is-style-learnschool-card","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-4","left":"0","right":"0"}}},"backgroundColor":"primary-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-primary-light-background-color has-background" style="border-radius:24px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-4);padding-left:0"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustrations/kids-discovery-art.png' ) ); ?>" alt="<?php echo esc_attr__( 'Young students building wooden geometric blocks and exploring science kits together', 'learnschool' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"0","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"},"blockGap":"var:preset|spacing|step-1"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:0;padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":3,"fontSize":"large","textColor":"contrast","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Sensory STEM &amp; Discovery Pods', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast","fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Hands-on geometry blocks, botanical science tables, and collaborative problem-solving stations.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-learnschool-card","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-surface-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"is-style-learnschool-arch learnschool-portrait-top"} -->
<figure class="wp-block-image size-medium is-style-learnschool-arch learnschool-portrait-top"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustrations/realistic-teacher-kristin.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Lead educator Kristin Watson mentoring small groups on campus', 'learnschool' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"62%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:62%"><!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-1"}}}} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Small 1:4 Mentorship Ratios', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-subtle","fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Certified early childhood educators guiding small pods with personalized care and daily parent updates.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
