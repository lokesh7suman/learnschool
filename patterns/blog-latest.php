<?php
/**
 * Title: Read Our Blog 3-Card Grid
 * Slug: learnschool/blog-latest
 * Categories: learnschool/features
 * Description: Editorial three-column blog showcase with "Read our blog" script heading, "See All" action link, and three illustrated story cards.
 * Keywords: blog, articles, stories, journal, reading, cards
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
<section class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-5"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-5)"><!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Read our ', 'learnschool' ); ?><span class="learnschool-script has-primary-color"><?php echo esc_html__( 'blog', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php echo esc_html__( 'See All', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-soft-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-5","left":"0","right":"0"}}},"backgroundColor":"base-subtle","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-soft-card has-base-subtle-background-color has-background" style="border-radius:24px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-5);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image size-large has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/blog-learning-games.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Sunlit classroom table with wooden pattern blocks, alphabet cubes, and storybook', 'learnschool' ); ?>" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":3,"fontSize":"large","textColor":"contrast"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size"><?php echo esc_html__( 'Learning with Games', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Embrace the joy of hands-on games to deepen focus, problem-solving, and curiosity.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php echo esc_html__( 'Learn more', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-soft-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-5","left":"0","right":"0"}}},"backgroundColor":"base-subtle","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-soft-card has-base-subtle-background-color has-background" style="border-radius:24px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-5);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image size-large has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/blog-game-ideas.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Colorful Montessori wooden sorting bowls, counting pegs, and pattern flashcards', 'learnschool' ); ?>" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":3,"fontSize":"large","textColor":"contrast"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size"><?php echo esc_html__( '10 Learning Game Ideas', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Playful counting, sorting, and pattern games families can enjoy together at home.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php echo esc_html__( 'Learn more', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-soft-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|step-5","left":"0","right":"0"}}},"backgroundColor":"base-subtle","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-soft-card has-base-subtle-background-color has-background" style="border-radius:24px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--step-5);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image size-large has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/illustrations/blog-fun-activities.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Sunlit studio craft table with watercolor paints, origami paper, and botanical leaves', 'learnschool' ); ?>" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"},"blockGap":"var:preset|spacing|step-2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:heading {"level":3,"fontSize":"large","textColor":"contrast"} -->
<h3 class="wp-block-heading has-contrast-color has-text-color has-large-font-size"><?php echo esc_html__( 'Fun Activities for Kids', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Screen-free watercolor painting, origami shapes, and nature crafts for rainy afternoons.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-learnschool-link-sm"} -->
<div class="wp-block-button is-style-learnschool-link-sm"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php echo esc_html__( 'Learn more', 'learnschool' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
