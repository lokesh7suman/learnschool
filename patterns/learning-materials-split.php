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
<div class="wp-block-column wk-materials-visual-col"><!-- wp:image {"sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Student smiling while learning with engaging textbooks', 'learnschool' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
