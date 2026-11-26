<?php
/**
 * Title: Hero Split with Media & Checklist
 * Slug: learnschool/hero-split-checklist
 * Categories: learnschool/hero
 * Keywords: hero, split, checklist, enrollment, education, illustration
 * Description: Two-column split hero section with enrollment checklist, display typography, dual CTA buttons, and joyful creative classroom illustration.
 * Inserter: true
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
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-8","bottom":"var:preset|spacing|step-8","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-8);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-8);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.15"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-3"}}}} -->
<h1 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-3);line-height:1.15"><?php echo esc_html__( 'Inspiring Young Minds to ', 'learnschool' ); ?><span class="learnschool-script has-primary-color"><?php echo esc_html__( 'Explore,', 'learnschool' ); ?></span> <?php echo esc_html__( 'Create &amp; ', 'learnschool' ); ?><span class="learnschool-script has-secondary-dark-color"><?php echo esc_html__( 'Grow', 'learnschool' ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-4"}}},"textColor":"contrast-subtle","fontSize":"large"} -->
<p class="has-contrast-subtle-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--step-4)"><?php echo esc_html__( 'Our curiosity-led early learning environment empowers children with the social confidence, creative freedom, and foundational skills needed for lifelong joyful achievement.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-learnschool-checkmarks","fontSize":"medium"} -->
<ul class="wp-block-list is-style-learnschool-checkmarks has-medium-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( 'State-Certified Pre-K &amp; Kindergarten with Low 1:4 Student-Teacher Ratio', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Accredited Early STEM &amp; Reggio-Inspired Creative Arts Curriculum', 'learnschool' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Safe, Light-Filled Classrooms &amp; Outdoor Nature Discovery Gardens', 'learnschool' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|step-3","margin":{"top":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--step-4)"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#admissions' ) ); ?>"><?php echo esc_html__( 'Book a Tour', 'learnschool' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-learnschool-outline"} -->
<div class="wp-block-button is-style-learnschool-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#programs' ) ); ?>"><?php echo esc_html__( 'Explore Programs', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"aspectRatio":"75/56","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustrations/creative-classroom-art.png' ) ); ?>" alt="<?php echo esc_attr__( 'Creative classroom arts and science discovery illustration with school kids', 'learnschool' ); ?>" style="aspect-ratio:75/56;object-fit:contain"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
