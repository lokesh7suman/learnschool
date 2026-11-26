<?php
/**
 * Title: Blog Header Banner
 * Slug: learnschool/hidden-blog-header
 * Categories: learnschool/posts
 * Inserter: false
 * Description: Localized blog archive title and subtitle header for the home/blog posts index template.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$learnschool_posts_page_id    = ( 'page' === get_option( 'show_on_front' ) ) ? absint( get_option( 'page_for_posts' ) ) : 0;
$learnschool_posts_page_title = $learnschool_posts_page_id > 0 ? trim( wp_strip_all_tags( get_the_title( $learnschool_posts_page_id ) ) ) : '';
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","contentSize":"780px"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|step-2"}},"typography":{"fontFamily":"var:preset|font-family|quicksand"}}} -->
<?php if ( '' !== $learnschool_posts_page_title ) : ?>
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-2);font-family:var(--wp--preset--font-family--quicksand)"><?php echo esc_html( $learnschool_posts_page_title ); ?></h1>
<?php else : ?>
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--step-2);font-family:var(--wp--preset--font-family--quicksand)"><?php echo esc_html__( 'Our News &amp; ', 'learnschool' ); ?><span class="learnschool-script learnschool-underline-wavy has-primary-color" style="white-space:nowrap"><?php echo esc_html__( 'Articles', 'learnschool' ); ?></span></h1>
<?php endif; ?>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-subtle","fontSize":"medium","style":{"spacing":{"margin":{"top":"0"}}}} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="margin-top:0"><?php echo esc_html__( 'Stay informed with the latest stories, school announcements, activities, and educational tips.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
