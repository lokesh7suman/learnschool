<?php
/**
 * Title: Header with Right-Aligned Navigation
 * Slug: learnschool/header-right-aligned
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Clean header with site logo and title on the left, and primary navigation aligned to the right without call-to-action buttons.
 * Keywords: header, navigation, logo, menu, clean, right-aligned, school, academics
 *
 * @package LearnSchool
 * @since 1.2.0
 * Viewport Width: 1280
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"header","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-3","bottom":"var:preset|spacing|step-3","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-3);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-3);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":36,"shouldSyncIcon":false} /-->

<!-- wp:site-title {"level":0,"isLink":true,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand","fontWeight":"700"}},"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","style":{"typography":{"fontWeight":"600"}},"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} /--></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
