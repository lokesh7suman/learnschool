<?php
/**
 * Title: Creative Activities 3-Card Grid
 * Slug: learnschool/features-activities
 * Categories: features, featured, learnschool
 * Description: Three-column creative activity cards highlighting quizzes, art, and educational games with clean modern cards.
 * Keywords: features, activities, cards, quiz, games, creative
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
<!-- wp:group {"align":"full","className":"wk-features-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-features-wrapper"><!-- wp:group {"align":"wide","className":"wk-features-header","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide wk-features-header"><!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'Our ', 'learnschool' ); ?><span class="learnschool-script" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'interactive', 'learnschool' ); ?></span><br><?php echo esc_html__( 'features', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"wk-tags-cluster","layout":{"type":"default"}} -->
<div class="wp-block-group wk-tags-cluster"><!-- wp:paragraph {"className":"wk-tag-pill wk-tag-enjoy"} -->
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
<div class="wp-block-columns alignwide wk-features-grid"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wk-feature-card wk-card-quiz"} -->
<div class="wp-block-group wk-feature-card wk-card-quiz"><!-- wp:image {"sizeSlug":"full","className":"wk-card-icon"} -->
<figure class="wp-block-image size-full wk-card-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-quiz-note.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Quiz icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"wk-card-title"} -->
<h3 class="wp-block-heading wk-card-title"><?php echo esc_html__( 'Fun', 'learnschool' ); ?><br><span class="wk-font-script"><?php echo esc_html__( 'Quiz', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-card-desc"} -->
<p class="wk-card-desc"><?php echo esc_html__( 'Test your understanding with a short but fun quizzes!', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wk-feature-card wk-card-activities"} -->
<div class="wp-block-group wk-feature-card wk-card-activities"><!-- wp:image {"sizeSlug":"full","className":"wk-card-icon"} -->
<figure class="wp-block-image size-full wk-card-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-creative-activity.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Creative activities icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"wk-card-title"} -->
<h3 class="wp-block-heading wk-card-title"><?php echo esc_html__( 'Creative', 'learnschool' ); ?><br><span class="wk-font-script"><?php echo esc_html__( 'Activities', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-card-desc"} -->
<p class="wk-card-desc"><?php echo esc_html__( 'Discover enjoyable activities such as coloring, crafting, and science.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"wk-feature-card wk-card-games"} -->
<div class="wp-block-group wk-feature-card wk-card-games"><!-- wp:image {"sizeSlug":"full","className":"wk-card-icon"} -->
<figure class="wp-block-image size-full wk-card-icon"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/icon-game-controller.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Game controller icon', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"wk-card-title"} -->
<h3 class="wp-block-heading wk-card-title"><?php echo esc_html__( 'Learn with', 'learnschool' ); ?><br><span class="wk-font-script"><?php echo esc_html__( 'Games', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-card-desc"} -->
<p class="wk-card-desc"><?php echo esc_html__( 'Learn something new while your kids playing games!', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
