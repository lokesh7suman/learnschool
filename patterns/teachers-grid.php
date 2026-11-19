<?php
/**
 * Title: Educator & Director Bios Grid
 * Slug: learnschool/teachers-grid
 * Categories: learnschool/features, learnschool/card
 * Keywords: teachers, educators, team, staff, directors, credentials
 * Viewport Width: 1280
 * Inserter: true
 * Description: Warm portrait grid of accredited early-childhood educators with degrees, credentials, and tenure.
 *
 * @package LearnSchool
 * @since 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--quicksand)"><?php echo esc_html__( 'Meet Our Dedicated ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Educators', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large","textColor":"contrast-subtle"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-large-font-size"><?php echo esc_html__( 'Degreed, CPR-certified, and compassionate early-childhood specialists devoted to each child’s emotional and cognitive growth.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px","width":"1px","style":"solid"},"shadow":"var:preset|shadow|card"},"borderColor":"border","backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-border-color has-border-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"metadata":{"name":"teacher_1_photo","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"sizeSlug":"full","linkDestination":"none","className":"is-style-learnschool-arch"} -->
<figure class="wp-block-image size-full is-style-learnschool-arch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jenny.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jenny Wilson - Campus Director', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"metadata":{"name":"teacher_1_name","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-1"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Jenny Wilson, M.Ed', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"teacher_1_role","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700"}},"fontSize":"small","textColor":"primary"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Campus Director • 12 Years Tenure', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"teacher_1_bio","bindings":{"content":{"source":"core/pattern-overrides"}}},"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Montessori Certified & Master of Early Childhood Education from UT Austin.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px","width":"1px","style":"solid"},"shadow":"var:preset|shadow|card"},"borderColor":"border","backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-border-color has-border-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"metadata":{"name":"teacher_2_photo","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"sizeSlug":"full","linkDestination":"none","className":"is-style-learnschool-arch"} -->
<figure class="wp-block-image size-full is-style-learnschool-arch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-kristin.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Kristin Watson - Lead Preschool Educator', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"metadata":{"name":"teacher_2_name","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-1"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Kristin Watson, B.S.', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"teacher_2_role","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700"}},"fontSize":"small","textColor":"secondary-dark"} -->
<p class="has-secondary-dark-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Lead Preschool Educator • 8 Years', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"teacher_2_bio","bindings":{"content":{"source":"core/pattern-overrides"}}},"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'Specializes in emergent phonics, socio-emotional coaching, and artistic inquiry.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px","width":"1px","style":"solid"},"shadow":"var:preset|shadow|card"},"borderColor":"border","backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-border-color has-border-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"metadata":{"name":"teacher_3_photo","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"sizeSlug":"full","linkDestination":"none","className":"is-style-learnschool-arch"} -->
<figure class="wp-block-image size-full is-style-learnschool-arch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-savannah.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Savannah Nguyen - Toddler Program Lead', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"metadata":{"name":"teacher_3_name","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-1"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Savannah Nguyen', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"teacher_3_role","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700"}},"fontSize":"small","textColor":"primary"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Toddler Specialist • 6 Years', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"teacher_3_bio","bindings":{"content":{"source":"core/pattern-overrides"}}},"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'CDA Credentialed with an emphasis on toddler sensory development & motor play.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"24px","width":"1px","style":"solid"},"shadow":"var:preset|shadow|card"},"borderColor":"border","backgroundColor":"surface","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-learnschool-card has-border-color has-border-border-color has-surface-background-color has-background" style="border-style:solid;border-width:1px;border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"metadata":{"name":"teacher_4_photo","bindings":{"url":{"source":"core/pattern-overrides"},"alt":{"source":"core/pattern-overrides"}}},"sizeSlug":"full","linkDestination":"none","className":"is-style-learnschool-arch"} -->
<figure class="wp-block-image size-full is-style-learnschool-arch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/photos/teacher-jacob.webp' ) ); ?>" alt="<?php echo esc_attr__( 'Jacob Jones - Pre-K & STEM Coordinator', 'learnschool' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"metadata":{"name":"teacher_4_name","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"spacing":{"margin":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-1"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--step-3);margin-bottom:var(--wp--preset--spacing--step-1)"><?php echo esc_html__( 'Jacob Jones, B.A.', 'learnschool' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"teacher_4_role","bindings":{"content":{"source":"core/pattern-overrides"}}},"style":{"typography":{"fontWeight":"700"}},"fontSize":"small","textColor":"secondary-dark"} -->
<p class="has-secondary-dark-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html__( 'Pre-K & STEM Lead • 7 Years', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"teacher_4_bio","bindings":{"content":{"source":"core/pattern-overrides"}}},"fontSize":"small","textColor":"contrast-subtle"} -->
<p class="has-contrast-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'B.A. Elementary Education with a passion for kindergarten-ready math & science.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
