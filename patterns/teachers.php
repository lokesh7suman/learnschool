<?php
/**
 * Title: Teachers
 * Slug: learnschool/teachers
 * Categories: team
 * Description: Team section featuring circular photo cards with teacher profiles.
 * Keywords: teachers, team, faculty, educators
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","className":"wk-teachers-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-teachers-wrapper"><!-- wp:group {"align":"wide","className":"wk-teachers-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide wk-teachers-container">
<!-- wp:image {"sizeSlug":"full","className":"wk-teacher-doodle-star"} -->
<figure class="wp-block-image size-full wk-teacher-doodle-star"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/teacher-doodle-star.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-teacher-doodle-wavy"} -->
<figure class="wp-block-image size-full wk-teacher-doodle-wavy"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/teacher-doodle-wavy.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":2,"className":"wk-teachers-title"} -->
<h2 class="wp-block-heading has-text-align-center wk-teachers-title"><?php echo esc_html__( 'We aim to help children', 'learnschool' ); ?><br><span class="wk-accent-joy"><?php echo esc_html__( 'discover the joy of creative', 'learnschool' ); ?></span><br><?php echo esc_html__( 'learning and grow into well-rounded individuals.', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","className":"wk-teachers-grid"} -->
<div class="wp-block-columns alignwide wk-teachers-grid"><!-- wp:column {"className":"wk-teacher-card"} -->
<div class="wp-block-column wk-teacher-card"><!-- wp:image {"sizeSlug":"full","className":"wk-teacher-avatar"} -->
<figure class="wp-block-image size-full wk-teacher-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-kristin.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Kristin Watson', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"wk-teacher-name"} -->
<h3 class="wp-block-heading has-text-align-center wk-teacher-name"><?php echo esc_html__( 'Kristin Watson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"wk-teacher-role"} -->
<p class="has-text-align-center wk-teacher-role"><?php echo esc_html__( 'Science Teacher', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-teacher-card"} -->
<div class="wp-block-column wk-teacher-card"><!-- wp:image {"sizeSlug":"full","className":"wk-teacher-avatar"} -->
<figure class="wp-block-image size-full wk-teacher-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jenny.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jenny Wilson', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"wk-teacher-name"} -->
<h3 class="wp-block-heading has-text-align-center wk-teacher-name"><?php echo esc_html__( 'Jenny Wilson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"wk-teacher-role"} -->
<p class="has-text-align-center wk-teacher-role"><?php echo esc_html__( 'Drawing Teacher', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-teacher-card"} -->
<div class="wp-block-column wk-teacher-card"><!-- wp:image {"sizeSlug":"full","className":"wk-teacher-avatar"} -->
<figure class="wp-block-image size-full wk-teacher-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jacob.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jacob Jones', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"wk-teacher-name"} -->
<h3 class="wp-block-heading has-text-align-center wk-teacher-name"><?php echo esc_html__( 'Jacob Jones', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"wk-teacher-role"} -->
<p class="has-text-align-center wk-teacher-role"><?php echo esc_html__( 'Math Teacher', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-teacher-card"} -->
<div class="wp-block-column wk-teacher-card"><!-- wp:image {"sizeSlug":"full","className":"wk-teacher-avatar"} -->
<figure class="wp-block-image size-full wk-teacher-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-savannah.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Savannah Nguyen', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"wk-teacher-name"} -->
<h3 class="wp-block-heading has-text-align-center wk-teacher-name"><?php echo esc_html__( 'Savannah Nguyen', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"wk-teacher-role"} -->
<p class="has-text-align-center wk-teacher-role"><?php echo esc_html__( 'Reading Teacher', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
