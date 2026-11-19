<?php
/**
 * Title: Learning Materials Split Showcase
 * Slug: learnschool/learning-materials-split
 * Categories: features, featured, learnschool
 * Description: Two-column showcase highlighting hands-on educational materials, certified curriculum kits, and playful learning.
 * Keywords: materials, showcase, learning, education, books, curriculum, kids
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
<!-- wp:group {"align":"full","className":"wk-materials-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-materials-wrapper"><!-- wp:columns {"align":"wide","className":"wk-materials-container"} -->
<div class="wp-block-columns alignwide wk-materials-container"><!-- wp:column {"className":"wk-materials-text-col"} -->
<div class="wp-block-column wk-materials-text-col"><!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'The learning materials', 'learnschool' ); ?><br><?php echo esc_html__( 'provided are ', 'learnschool' ); ?><mark class="learnschool-highlight"><?php echo esc_html__( 'enjoyable', 'learnschool' ); ?></mark><br><?php echo esc_html__( 'for children', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-materials-desc"} -->
<p class="wk-materials-desc"><?php echo esc_html__( "Don't worry! Your children will be having a fun time while learning with our materials that are easy to understand.", 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#materials"><?php echo esc_html__( 'Learn more', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-materials-visual-col"} -->
<div class="wp-block-column wk-materials-visual-col"><!-- wp:group {"className":"wk-materials-pills-visual","layout":{"type":"default"}} -->
<div class="wp-block-group wk-materials-pills-visual"><!-- wp:image {"sizeSlug":"full","className":"wk-materials-doodle-sparkle"} -->
<figure class="wp-block-image size-full wk-materials-doodle-sparkle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/materials-doodle-sparkle.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-materials-doodle-wavy"} -->
<figure class="wp-block-image size-full wk-materials-doodle-wavy"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/card-activities-wavy-doodle.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-materials-doodle-lines"} -->
<figure class="wp-block-image size-full wk-materials-doodle-lines"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/card-quiz-ripple-purple.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-kid-layer wk-kid-1"} -->
<figure class="wp-block-image size-full wk-kid-layer wk-kid-1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Student smiling while learning', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-kid-layer wk-kid-2"} -->
<figure class="wp-block-image size-full wk-kid-layer wk-kid-2"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Student reading learning materials', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-kid-layer wk-kid-3"} -->
<figure class="wp-block-image size-full wk-kid-layer wk-kid-3"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-3.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Student smiling with teddy bear', 'learnschool' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
