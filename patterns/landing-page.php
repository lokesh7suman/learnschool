<?php
/**
 * Title: Landing Page
 * Slug: learnschool/landing-page
 * Categories: pages, learnschool
 * Template Types: front-page, page
 * Description: Full landing page layout including hero, features, materials, team, blog, FAQ, and call to action.
 * Keywords: landing page, home, starter, education
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","className":"wk-hero-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-hero-wrapper"><!-- wp:group {"align":"wide","className":"wk-hero-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide wk-hero-container"><!-- wp:group {"className":"wk-hero-decor-left","layout":{"type":"default"}} -->
<div class="wp-block-group wk-hero-decor-left"><!-- wp:image {"sizeSlug":"full","className":"wk-hero-kid-badge"} -->
<figure class="wp-block-image size-full wk-hero-kid-badge"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/hero-kid-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'LearnSchool student smiling', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-hero-loop-arrow"} -->
<figure class="wp-block-image size-full wk-hero-loop-arrow"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/hero-loop-arrow.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-hero-ripple-rings"} -->
<figure class="wp-block-image size-full wk-hero-ripple-rings"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/hero-ripple-rings.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wk-hero-decor-right","layout":{"type":"default"}} -->
<div class="wp-block-group wk-hero-decor-right"><!-- wp:image {"sizeSlug":"full","className":"wk-hero-sticker-badge"} -->
<figure class="wp-block-image size-full wk-hero-sticker-badge"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/hero-badge-sticker.svg' ) ); ?>" alt="<?php echo esc_attr__( 'LearnSchool learning sticker badge', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-hero-lilac-dot"} -->
<figure class="wp-block-image size-full wk-hero-lilac-dot"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/hero-lilac-dot.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-hero-thumbsup-kid"} -->
<figure class="wp-block-image size-full wk-hero-thumbsup-kid"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/hero-kid-2.webp' ) ); ?>" alt="<?php echo esc_attr__( 'LearnSchool student thumbs up', 'learnschool' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"wk-hero-headline"} -->
<h1 class="wp-block-heading wk-hero-headline"><?php echo esc_html__( 'The best place to', 'learnschool' ); ?><br><span class="wk-accent-learn"><?php echo esc_html__( 'learn', 'learnschool' ); ?></span><?php echo esc_html__( ' and ', 'learnschool' ); ?><span class="wk-accent-play"><?php echo esc_html__( 'play', 'learnschool' ); ?></span><br><?php echo esc_html__( 'for kids', 'learnschool' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-hero-subtitle"} -->
<p class="wk-hero-subtitle"><?php echo esc_html__( "Discover thousands of fun and interactive learning activities to support your child's growth and learning process.", 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-pill"} -->
<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link wp-element-button" href="#get-started"><?php echo esc_html__( 'Get Started', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

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

<!-- wp:group {"align":"full","className":"wk-materials-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-materials-wrapper"><!-- wp:columns {"align":"wide","className":"wk-materials-container"} -->
<div class="wp-block-columns alignwide wk-materials-container"><!-- wp:column {"className":"wk-materials-text-col"} -->
<div class="wp-block-column wk-materials-text-col"><!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'The learning materials', 'learnschool' ); ?><br><?php echo esc_html__( 'provided are', 'learnschool' ); ?> <span class="wk-accent-enjoyable codeclove-accent-enjoyable"><?php echo esc_html__( 'enjoyable', 'learnschool' ); ?></span><br><?php echo esc_html__( 'for children', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-materials-desc"} -->
<p class="wk-materials-desc"><?php echo esc_html__( "Don't worry! Your children will be having a fun time while learning with our materials that are easy to understand.", 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-purple"} -->
<div class="wp-block-button is-style-outline-purple"><a class="wp-block-button__link wp-element-button" href="#materials"><?php echo esc_html__( 'Learn more', 'learnschool' ); ?></a></div>
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
<figure class="wp-block-image size-full wk-kid-layer wk-kid-1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-1.webp' ) ); ?>?v=2" alt="<?php echo esc_attr__( 'Student smiling while learning', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-kid-layer wk-kid-2"} -->
<figure class="wp-block-image size-full wk-kid-layer wk-kid-2"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-2.webp' ) ); ?>?v=2" alt="<?php echo esc_attr__( 'Student reading learning materials', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-kid-layer wk-kid-3"} -->
<figure class="wp-block-image size-full wk-kid-layer wk-kid-3"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/materials-kid-3.webp' ) ); ?>?v=2" alt="<?php echo esc_attr__( 'Student smiling with teddy bear', 'learnschool' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"wk-teachers-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-teachers-wrapper"><!-- wp:group {"align":"wide","className":"wk-teachers-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide wk-teachers-container"><!-- wp:image {"sizeSlug":"full","className":"wk-teacher-doodle-star"} -->
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

<!-- wp:group {"align":"full","className":"wk-blog-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-blog-wrapper"><!-- wp:group {"align":"wide","className":"wk-blog-header","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide wk-blog-header"><!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'Read our ', 'learnschool' ); ?><span class="wk-accent-blog"><?php echo esc_html__( 'blog', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline-purple wk-btn-see-all"} -->
<div class="wp-block-button is-style-outline-purple wk-btn-see-all"><a class="wp-block-button__link wp-element-button" href="#blog"><?php echo esc_html__( 'See All', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"wk-blog-grid"} -->
<div class="wp-block-columns alignwide wk-blog-grid"><!-- wp:column {"className":"wk-blog-card"} -->
<div class="wp-block-column wk-blog-card"><!-- wp:image {"sizeSlug":"full","className":"wk-blog-card-thumb"} -->
<figure class="wp-block-image size-full wk-blog-card-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/blog-1.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Learning with games', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"wk-blog-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group wk-blog-card-body"><!-- wp:group {"className":"wk-blog-card-meta","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group wk-blog-card-meta"><!-- wp:paragraph {"className":"wk-blog-card-badge"} -->
<p class="wk-blog-card-badge"><?php echo esc_html__( 'Play &amp; Learn', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-blog-card-date"} -->
<p class="wk-blog-card-date"><?php echo esc_html__( 'Oct 18, 2026', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"wk-blog-card-title"} -->
<h3 class="wp-block-heading wk-blog-card-title"><a href="#post-1"><?php echo esc_html__( 'Learning with Games? Why not?', 'learnschool' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-blog-card-excerpt"} -->
<p class="wk-blog-card-excerpt"><?php echo esc_html__( 'Embrace the joy of games to enhance your learning experience!', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"wk-blog-card-btn-wrap"} -->
<div class="wp-block-buttons wk-blog-card-btn-wrap"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#post-1"><?php echo esc_html__( 'Read Article', 'learnschool' ); ?><span class="screen-reader-text"> <?php echo esc_html__( 'about Learning with Games? Why not?', 'learnschool' ); ?></span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-blog-card"} -->
<div class="wp-block-column wk-blog-card"><!-- wp:image {"sizeSlug":"full","className":"wk-blog-card-thumb"} -->
<figure class="wp-block-image size-full wk-blog-card-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/blog-2.webp' ) ); ?>" alt="<?php echo esc_attr__( '10 Learning Game Ideas', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"wk-blog-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group wk-blog-card-body"><!-- wp:group {"className":"wk-blog-card-meta","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group wk-blog-card-meta"><!-- wp:paragraph {"className":"wk-blog-card-badge is-category-amber"} -->
<p class="wk-blog-card-badge is-category-amber"><?php echo esc_html__( 'Game Ideas', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-blog-card-date"} -->
<p class="wk-blog-card-date"><?php echo esc_html__( 'Oct 15, 2026', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"wk-blog-card-title"} -->
<h3 class="wp-block-heading wk-blog-card-title"><a href="#post-2"><?php echo esc_html__( '10 Learning Game Ideas', 'learnschool' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-blog-card-excerpt"} -->
<p class="wk-blog-card-excerpt"><?php echo esc_html__( '10 ideas for learning games for your kids to have fun.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"wk-blog-card-btn-wrap"} -->
<div class="wp-block-buttons wk-blog-card-btn-wrap"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#post-2"><?php echo esc_html__( 'Read Article', 'learnschool' ); ?><span class="screen-reader-text"> <?php echo esc_html__( 'about 10 Learning Game Ideas', 'learnschool' ); ?></span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-blog-card"} -->
<div class="wp-block-column wk-blog-card"><!-- wp:image {"sizeSlug":"full","className":"wk-blog-card-thumb"} -->
<figure class="wp-block-image size-full wk-blog-card-thumb"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/blog-3.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Fun Activities for Kids', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"wk-blog-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group wk-blog-card-body"><!-- wp:group {"className":"wk-blog-card-meta","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group wk-blog-card-meta"><!-- wp:paragraph {"className":"wk-blog-card-badge is-category-green"} -->
<p class="wk-blog-card-badge is-category-green"><?php echo esc_html__( 'Activities', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-blog-card-date"} -->
<p class="wk-blog-card-date"><?php echo esc_html__( 'Oct 12, 2026', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"wk-blog-card-title"} -->
<h3 class="wp-block-heading wk-blog-card-title"><a href="#post-3"><?php echo esc_html__( 'Fun Activities for Kids', 'learnschool' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-blog-card-excerpt"} -->
<p class="wk-blog-card-excerpt"><?php echo esc_html__( 'Want to do something outside from your laptop? Here are our recommendations.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"wk-blog-card-btn-wrap"} -->
<div class="wp-block-buttons wk-blog-card-btn-wrap"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="#post-3"><?php echo esc_html__( 'Read Article', 'learnschool' ); ?><span class="screen-reader-text"> <?php echo esc_html__( 'about Fun Activities for Kids', 'learnschool' ); ?></span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"wk-faq-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-faq-wrapper"><!-- wp:columns {"align":"wide","className":"wk-faq-container"} -->
<div class="wp-block-columns alignwide wk-faq-container"><!-- wp:column {"className":"wk-faq-left-col"} -->
<div class="wp-block-column wk-faq-left-col"><!-- wp:image {"sizeSlug":"full","className":"wk-faq-doodle-bg"} -->
<figure class="wp-block-image size-full wk-faq-doodle-bg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/faq-element.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'Frequently ', 'learnschool' ); ?><span class="wk-accent-asked"><?php echo esc_html__( 'asked', 'learnschool' ); ?></span><br><?php echo esc_html__( 'questions', 'learnschool' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-faq-right-col"} -->
<div class="wp-block-column wk-faq-right-col"><!-- wp:details {"showContent":true,"className":"wk-faq-item"} -->
<details class="wp-block-details wk-faq-item" open><summary><?php echo esc_html__( 'What makes LearnSchool different from other education platforms?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'LearnSchool combines gamified learning science, child-friendly adaptive feedback, and zero-distraction interactive interfaces crafted exclusively for elementary and primary learners.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"wk-faq-item"} -->
<details class="wp-block-details wk-faq-item"><summary><?php echo esc_html__( 'How can I access LearnSchool?', 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'LearnSchool is accessible through modern web browsers, tablet apps (iPad, Android), and desktop environments, with progress syncing seamlessly across all parent-linked devices.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"wk-faq-item"} -->
<details class="wp-block-details wk-faq-item"><summary><?php echo esc_html__( "What about the security of children's data using this platform?", 'learnschool' ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html__( 'We strictly adhere to COPPA, FERPA, and GDPR-K regulations. There are no third-party ad trackers, zero behavioral targeting, and all student data is encrypted at rest and in transit.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"wk-cta-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-cta-wrapper"><!-- wp:group {"align":"wide","className":"wk-cta-card","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wk-cta-card"><!-- wp:image {"sizeSlug":"full","className":"wk-cta-mascot"} -->
<figure class="wp-block-image size-full wk-cta-mascot"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/cta-kid.webp' ) ); ?>" alt="<?php echo esc_attr__( 'LearnSchool cheerful student mascot', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-cta-squiggle-doodle"} -->
<figure class="wp-block-image size-full wk-cta-squiggle-doodle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/cta-squiggle.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-cta-corner-lines"} -->
<figure class="wp-block-image size-full wk-cta-corner-lines"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/cta-dots.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"wk-cta-content","layout":{"type":"default"}} -->
<div class="wp-block-group wk-cta-content"><!-- wp:heading {"level":2,"className":"wk-cta-headline"} -->
<h2 class="wp-block-heading wk-cta-headline"><?php echo esc_html__( 'Join our', 'learnschool' ); ?><br><span class="wk-accent-learnschool"><?php echo esc_html__( 'LearnSchool', 'learnschool' ); ?></span><br><?php echo esc_html__( 'community now', 'learnschool' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"wk-cta-form","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group wk-cta-form"><!-- wp:html -->
<form class="wk-cta-form-el" action="#join" method="post" onsubmit="event.preventDefault();">
<input class="wk-cta-input-field" type="text" name="name" placeholder="<?php echo esc_attr__( 'Name', 'learnschool' ); ?>" required aria-label="<?php echo esc_attr__( 'Name', 'learnschool' ); ?>"/>
<input class="wk-cta-input-field" type="text" name="contact" placeholder="<?php echo esc_attr__( 'Email or Phone', 'learnschool' ); ?>" required aria-label="<?php echo esc_attr__( 'Email or Phone', 'learnschool' ); ?>"/>
<div class="wk-cta-btn-wrap">
<button type="submit" class="wp-block-button__link wp-element-button wk-cta-submit-btn"><?php echo esc_html__( 'Submit', 'learnschool' ); ?></button>
</div>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->