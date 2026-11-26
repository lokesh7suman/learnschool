<?php
/**
 * Title: Faculty & Teacher Circular Portrait Showcase
 * Slug: learnschool/teachers-photos-grid
 * Categories: learnschool/team
 * Description: Full-width brand purple faculty showcase featuring a bold editorial statement, yellow script highlight, and four circular teacher portraits on colored studio backdrops.
 * Keywords: teachers, faculty, photos, portraits, educators, team, staff
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
<!-- wp:group {"anchor":"faculty","tagName":"section","align":"full","className":"learnschool-teachers-purple","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-8","bottom":"var:preset|spacing|step-8","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull learnschool-teachers-purple has-base-color has-primary-background-color has-text-color has-background" id="faculty" style="padding-top:var(--wp--preset--spacing--step-8);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-8);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"880px","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-7"}}}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-7)"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large","textColor":"base","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-xx-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'We aim to help children ', 'learnschool' ); ?><span class="learnschool-script has-accent-color"><?php echo esc_html__( 'discover the joy of creative', 'learnschool' ); ?></span> <?php echo esc_html__( 'learning and grow into well-rounded individuals.', 'learnschool' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"learnschool-teacher-avatar-wrap","backgroundColor":"accent","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-1","right":"var:preset|spacing|step-1"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group learnschool-teacher-avatar-wrap has-accent-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-1);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-1)"><!-- wp:image {"metadata":{"name":"teacher_photo_1","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"aspectRatio":"1","scale":"cover","sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustrations/realistic-teacher-kristin.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Kristin Watson, Science Teacher', 'learnschool' ); ?>" style="border-radius:9999px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"metadata":{"name":"teacher_name_1","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Kristin Watson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","metadata":{"name":"teacher_role_1","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-center has-base-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Science Teacher', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"learnschool-teacher-avatar-wrap","backgroundColor":"warning","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-1","right":"var:preset|spacing|step-1"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group learnschool-teacher-avatar-wrap has-warning-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-1);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-1)"><!-- wp:image {"metadata":{"name":"teacher_photo_2","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"aspectRatio":"1","scale":"cover","sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustrations/realistic-teacher-jenny.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Jenny Wilson, Phonics & Literacy Teacher', 'learnschool' ); ?>" style="border-radius:9999px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"metadata":{"name":"teacher_name_2","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Jenny Wilson', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","metadata":{"name":"teacher_role_2","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-center has-base-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Literacy Teacher', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"learnschool-teacher-avatar-wrap","backgroundColor":"primary-light","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-1","right":"var:preset|spacing|step-1"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group learnschool-teacher-avatar-wrap has-primary-light-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-1);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-1)"><!-- wp:image {"metadata":{"name":"teacher_photo_3","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"aspectRatio":"1","scale":"cover","sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustrations/realistic-teacher-marcus.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Marcus Hayes, Music & Rhythm Teacher', 'learnschool' ); ?>" style="border-radius:9999px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"metadata":{"name":"teacher_name_3","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Marcus Hayes', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","metadata":{"name":"teacher_role_3","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-center has-base-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Music Teacher', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|step-3"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"learnschool-teacher-avatar-wrap","backgroundColor":"info-light","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-1","right":"var:preset|spacing|step-1"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group learnschool-teacher-avatar-wrap has-info-light-background-color has-background" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-1);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-1)"><!-- wp:image {"metadata":{"name":"teacher_photo_4","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"aspectRatio":"1","scale":"cover","sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/illustrations/realistic-teacher-sofia.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Portrait of Sofia Chen, Drawing & Studio Arts Teacher', 'learnschool' ); ?>" style="border-radius:9999px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"metadata":{"name":"teacher_name_4","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Sofia Chen', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","metadata":{"name":"teacher_role_4","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base","fontSize":"small"} -->
<p class="has-text-align-center has-base-color has-text-color has-small-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html__( 'Drawing Teacher', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
