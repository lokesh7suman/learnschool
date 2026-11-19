<?php
/**
 * Title: Blog & News 3-Column Cards
 * Slug: learnschool/blog-recent-cards
 * Categories: posts, featured, learnschool
 * Description: Three-column card grid highlighting recent school news, educational game ideas, and learning articles with category tags and dates.
 * Keywords: blog, news, articles, posts, updates, cards, education
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
<!-- wp:group {"align":"full","className":"wk-blog-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-blog-wrapper"><!-- wp:group {"align":"wide","className":"wk-blog-header","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide wk-blog-header"><!-- wp:heading {"level":2,"className":"wk-section-title"} -->
<h2 class="wp-block-heading wk-section-title"><?php echo esc_html__( 'Read our ', 'learnschool' ); ?><span class="learnschool-script" style="color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'blog', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline wk-btn-see-all"} -->
<div class="wp-block-button is-style-outline wk-btn-see-all"><a class="wp-block-button__link wp-element-button" href="#blog"><?php echo esc_html__( 'See All', 'learnschool' ); ?></a></div>
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
