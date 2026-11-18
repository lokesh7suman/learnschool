<?php
/**
 * Title: Footer
 * Slug: learnschool/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with logo, mission statement, navigation columns, and social links.
 * Keywords: footer, navigation, social, links
 *
 * @package LearnSchool
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","className":"wk-footer-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wk-footer-wrapper"><!-- wp:columns {"align":"wide","className":"wk-footer-inner"} -->
<div class="wp-block-columns alignwide wk-footer-inner"><!-- wp:column {"className":"wk-footer-brand-col"} -->
<div class="wp-block-column wk-footer-brand-col"><!-- wp:group {"className":"wk-logo-group","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group wk-logo-group"><!-- wp:site-logo {"width":34,"className":"wk-logo-icon","shouldSyncIcon":false} /-->

<!-- wp:site-title {"className":"wk-logo-title","level":0,"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"wk-footer-desc"} -->
<p class="wk-footer-desc"><?php echo esc_html__( 'LearnSchool empowers children with interactive problem-solving, cognitive development games, and joyful educational journeys.', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"wk-footer-copy"} -->
<p class="wk-footer-copy">
<?php
/* translators: %s: Current calendar year. */
printf( esc_html__( '© %s LearnSchool Learning Platform. All rights reserved.', 'learnschool' ), esc_html( gmdate( 'Y' ) ) );
?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"wk-footer-doodles","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group wk-footer-doodles"><!-- wp:image {"sizeSlug":"full","className":"wk-footer-doodle-star"} -->
<figure class="wp-block-image size-full wk-footer-doodle-star"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/teacher-doodle-star.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-footer-doodle-circle"} -->
<figure class="wp-block-image size-full wk-footer-doodle-circle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/footer-circle-doodle.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","className":"wk-footer-doodle-wavy"} -->
<figure class="wp-block-image size-full wk-footer-doodle-wavy"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodles/teacher-doodle-wavy.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-footer-nav-col-wrap"} -->
<div class="wp-block-column wk-footer-nav-col-wrap"><!-- wp:page-list {"className":"wk-footer-nav-list"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wk-footer-social-col"} -->
<div class="wp-block-column wk-footer-social-col"><!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#121212","className":"wk-footer-social-links","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color wk-footer-social-links"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
