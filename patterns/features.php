<?php
/**
 * Title: Features
 * Slug: learnschool/features
 * Categories: services, learnschool
 * Description: Three-column interactive feature cards with icons and hashtags.
 * Keywords: features, services, cards, interactive
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","className":"wk-features-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-features-wrapper"><!-- wp:group {"align":"wide","className":"wk-features-header","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide wk-features-header"><!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'Our ', 'learnschool' ); ?><span class="wk-accent-interactive"><?php echo esc_html__( 'interactive', 'learnschool' ); ?></span><br><?php echo esc_html__( 'features', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"wk-tags-cluster","layout":{"type":"default"}} -->
<div class="wp-block-group wk-tags-cluster"><!-- wp:image {"sizeSlug":"full","className":"wk-tags-bg-doodle"} -->
<figure class="wp-block-image size-full wk-tags-bg-doodle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/tag-bg-vector.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"wk-tag-pill wk-tag-enjoy"} -->
<p class="wk-tag-pill wk-tag-enjoy"><?php echo esc_html__( '#enjoy', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-tag-pill wk-tag-funny"} -->
<p class="wk-tag-pill wk-tag-funny"><?php echo esc_html__( '#funny', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-tag-pill wk-tag-happy"} -->
<p class="wk-tag-pill wk-tag-happy"><?php echo esc_html__( '#happy', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"wk-features-grid"} -->
<div class="wp-block-columns alignwide wk-features-grid"><!-- wp:column {"className":"wk-feature-card wk-card-quiz"} -->
<div class="wp-block-column wk-feature-card wk-card-quiz"><!-- wp:image {"sizeSlug":"full","className":"wk-card-doodle-bg"} -->
<figure class="wp-block-image size-full wk-card-doodle-bg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/card-quiz-ripple-purple.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-card-icon"} -->
<figure class="wp-block-image size-full wk-card-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-quiz-note.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Quiz icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"wk-card-title"} -->
<h3 class="wp-block-heading wk-card-title"><?php echo esc_html__( 'Fun', 'learnschool' ); ?><br><span class="wk-font-script"><?php echo esc_html__( 'Quiz', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-card-desc"} -->
<p class="wk-card-desc"><?php echo esc_html__( 'Test your understanding with a short but fun quizzes!', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-feature-card wk-card-activities"} -->
<div class="wp-block-column wk-feature-card wk-card-activities"><!-- wp:image {"sizeSlug":"full","className":"wk-card-doodle-bg"} -->
<figure class="wp-block-image size-full wk-card-doodle-bg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/card-activities-wavy-doodle.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-card-icon"} -->
<figure class="wp-block-image size-full wk-card-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-creative-activity.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Creative activities icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"wk-card-title"} -->
<h3 class="wp-block-heading wk-card-title"><?php echo esc_html__( 'Creative', 'learnschool' ); ?><br><span class="wk-font-script"><?php echo esc_html__( 'Activities', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-card-desc"} -->
<p class="wk-card-desc"><?php echo esc_html__( 'Discover enjoyable activities such as coloring, crafting, and science.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-feature-card wk-card-games"} -->
<div class="wp-block-column wk-feature-card wk-card-games"><!-- wp:image {"sizeSlug":"full","className":"wk-card-doodle-bg"} -->
<figure class="wp-block-image size-full wk-card-doodle-bg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/card-games-dots.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-card-icon"} -->
<figure class="wp-block-image size-full wk-card-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-game-controller.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Game controller icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"wk-card-title"} -->
<h3 class="wp-block-heading wk-card-title"><?php echo esc_html__( 'Learn with', 'learnschool' ); ?><br><span class="wk-font-script"><?php echo esc_html__( 'Games', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-card-desc"} -->
<p class="wk-card-desc"><?php echo esc_html__( 'Learn something new while your kids playing games!', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
