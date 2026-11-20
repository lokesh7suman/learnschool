<?php
/**
 * Title: Features Four-Step Learning Journey
 * Slug: learnschool/features-journey
 * Categories: learnschool/features
 * Keywords: steps, journey, progression, features, process, milestone
 * Description: Four-column sequential journey cards highlighting the student learning progression from discovery to mastery.
 * Inserter: true
 *
 * @package LearnSchool
 * @since 1.0.0
 * Viewport Width: 1280
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-7","bottom":"var:preset|spacing|step-7","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-7);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-7);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--step-6)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'How Your Child Grows at LearnSchool', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|quicksand"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--quicksand)"><?php echo esc_html__( 'Four-Step Progressive ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Learning Pathway', 'learnschool' ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"textColor":"contrast-subtle","fontSize":"medium"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-medium-font-size" style="line-height:1.7"><?php echo esc_html__( 'A proven, age-appropriate progression that guides young learners from initial curiosity to certified mastery and independent creative thinking.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"primary","textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-primary-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700"><?php echo esc_html__( 'STEP 01', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="learnschool-icon-wrap" style="color:var(--wp--preset--color--primary);display:inline-flex;align-items:center;justify-content:center">
<svg width="32" height="32" viewBox="0 0 56 56" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
<path d="M30.1192 46.6916C30.5908 46.8013 30.637 47.4268 30.1796 47.5856C30.0083 47.6451 29.834 47.7042 29.6567 47.7633L25.97 48.9767C16.7067 51.9633 11.83 49.4667 8.82 40.2033L5.83333 30.9867C2.84667 21.7233 5.32 16.8233 14.5833 13.8367L17.1607 12.9831C17.5635 12.8497 17.9457 13.2499 17.8108 13.6523C17.5208 14.5174 17.2595 15.4656 17.01 16.4967L14.7233 26.2733C12.1567 37.2633 15.9133 43.33 26.9033 45.9433L30.1192 46.6916Z" fill="currentColor"/>
<path d="M40.0633 7.49L36.1667 6.58C28.3733 4.73667 23.73 6.25333 21 11.9C20.3 13.3233 19.74 15.05 19.2733 17.0333L16.9867 26.81C14.7 36.5633 17.71 41.37 27.44 43.68L31.36 44.6133C32.7133 44.94 33.9733 45.15 35.14 45.2433C42.42 45.9433 46.2933 42.5367 48.2533 34.1133L50.54 24.36C52.8267 14.6067 49.84 9.77667 40.0633 7.49ZM35.6767 31.1033C35.4667 31.8967 34.7667 32.41 33.9733 32.41C33.8333 32.41 33.6933 32.3867 33.53 32.3633L26.74 30.6367C25.8067 30.4033 25.2467 29.4467 25.48 28.5133C25.7133 27.58 26.67 27.02 27.6033 27.2533L34.3933 28.98C35.35 29.2133 35.91 30.17 35.6767 31.1033ZM42.5133 23.2167C42.3033 24.01 41.6033 24.5233 40.81 24.5233C40.67 24.5233 40.53 24.5 40.3667 24.4767L29.05 21.6067C28.1167 21.3733 27.5567 20.4167 27.79 19.4833C28.0233 18.55 28.98 17.99 29.9133 18.2233L41.23 21.0933C42.1867 21.3033 42.7467 22.26 42.5133 23.2167Z" fill="currentColor"/>
</svg>
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-font-size"><?php echo esc_html__( 'Curiosity ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Spark', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Fun interactive challenges and diagnostic quests that identify natural inclinations and awaken a love for discovery.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"secondary","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-secondary-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700"><?php echo esc_html__( 'STEP 02', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="learnschool-icon-wrap" style="color:var(--wp--preset--color--secondary-dark);display:inline-flex;align-items:center;justify-content:center">
<svg width="32" height="32" viewBox="0 0 36 40" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
<path d="M16.8099 0V6.34742H18.9659V0H16.8097H16.8099ZM8.00623 1.9075L6.23983 3.14426L9.87993 8.34245L11.6454 7.10565L8.00623 1.9075ZM27.7691 1.9075L24.1301 7.10568L25.8958 8.34248L29.5358 3.14426L27.7694 1.9075H27.7691ZM17.8874 8.08411C12.6132 8.08411 8.33767 11.2869 8.33767 15.2383L13.7634 31.6698H22.0124L27.4377 15.2383C27.4377 11.2869 23.1624 8.08411 17.8879 8.08411H17.8874ZM0.736633 9.98907L0 12.0162L5.96163 14.1867L6.701 12.1605L0.7365 9.98907H0.736633ZM35.0387 9.98907L29.0742 12.1607L29.811 14.1871L35.7756 12.0162L35.0387 9.98907ZM6.413 19.256L0.283 20.9002L0.8392 22.9812L6.9692 21.3394L6.4131 19.256H6.413ZM29.3623 19.256L28.8065 21.3393L34.9365 22.9809L35.4923 20.8998L29.3623 19.2559V19.256ZM13.6431 32.8676V35.7238H22.1327V32.8681H13.6432L13.6431 32.8676ZM13.6431 37.1437V39.9999H22.1327V37.1442H13.6432L13.6431 37.1437Z" fill="currentColor"/>
</svg>
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-font-size"><?php echo esc_html__( 'Creative ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--secondary-dark)"><?php echo esc_html__( 'Labs', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Guided experiments, coding puzzles, and art projects built for real understanding and active experimentation.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"primary","textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-primary-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700"><?php echo esc_html__( 'STEP 03', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="learnschool-icon-wrap" style="color:var(--wp--preset--color--primary);display:inline-flex;align-items:center;justify-content:center">
<svg width="32" height="32" viewBox="0 0 56 56" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
<path d="M34.9951 11.6667C39.2798 11.6647 43.3938 13.3463 46.4502 16.3493C49.5065 19.3522 51.2605 23.4359 51.334 27.72C51.4074 32.0042 49.7945 36.1456 46.8429 39.2516C43.8913 42.3575 39.8374 44.1793 35.5551 44.3241L34.9951 44.3334H21.0044C16.7196 44.3355 12.6057 42.6538 9.54929 39.6509C6.49292 36.6479 4.73895 32.5642 4.66549 28.2801C4.59203 23.996 6.20495 19.8546 9.15657 16.7486C12.1082 13.6426 16.1621 11.8209 20.4444 11.6761L21.0021 11.6667H34.9927H34.9951ZM34.4164 29.1668C33.6428 29.1668 32.901 29.474 32.354 30.021C31.807 30.568 31.4997 31.3099 31.4997 32.0834C31.4997 32.857 31.807 33.5988 32.354 34.1458C32.901 34.6928 33.6428 35.0001 34.4164 35.0001C35.1899 35.0001 35.9318 34.6928 36.4788 34.1458C37.0258 33.5988 37.3331 32.857 37.3331 32.0834C37.3331 31.3099 37.0258 30.568 36.4788 30.021C35.9318 29.474 35.1899 29.1668 34.4164 29.1668ZM18.6664 21.0001C18.2435 21.0001 17.8349 21.1532 17.5162 21.4312C17.1975 21.7092 16.9902 22.0931 16.9327 22.5121L16.9164 22.7501V26.2454H13.4164C12.9698 26.2409 12.5385 26.4072 12.2106 26.7104C11.8827 27.0135 11.6831 27.4306 11.6527 27.8761C11.6222 28.3217 11.7633 28.762 12.0469 29.1069C12.3306 29.4518 12.7354 29.6752 13.1784 29.7314L13.4164 29.7478L16.9164 29.7454V33.2501C16.9165 33.6935 17.085 34.1203 17.3877 34.4443C17.6904 34.7682 18.1048 34.9653 18.5471 34.9955C18.9895 35.0257 19.4268 34.8869 19.7708 34.6071C20.1147 34.3273 20.3396 33.9273 20.4001 33.4881L20.4164 33.2501V29.7454H23.9164C24.357 29.7413 24.7799 29.5711 25.1005 29.2688C25.4211 28.9666 25.6159 28.5545 25.6459 28.1149C25.676 27.6752 25.5391 27.2405 25.2626 26.8974C24.9861 26.5543 24.5903 26.3281 24.1544 26.2641L23.9164 26.2478L20.4164 26.2454V22.7501C20.4164 22.286 20.232 21.8408 19.9038 21.5126C19.5756 21.1845 19.1305 21.0001 18.6664 21.0001ZM39.0831 21.0001C38.3095 21.0001 37.5676 21.3074 37.0207 21.8544C36.4737 22.4013 36.1664 23.1432 36.1664 23.9168C36.1664 24.6903 36.4737 25.4322 37.0207 25.9791C37.5676 26.5261 38.3095 26.8334 39.0831 26.8334C39.8566 26.8334 40.5985 26.5261 41.1455 25.9791C41.6924 25.4322 41.9997 24.6903 41.9997 23.9168C41.9997 23.1432 41.6924 22.4013 41.1455 21.8544C40.5985 21.3074 39.8566 21.0001 39.0831 21.0001Z" fill="currentColor"/>
</svg>
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-font-size"><?php echo esc_html__( 'Social ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--primary)"><?php echo esc_html__( 'Play', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Collaborative multiplayer challenges and peer problem-solving teaching teamwork, empathy, and communication.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"className":"is-style-learnschool-card","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|step-5","bottom":"var:preset|spacing|step-5","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"shadow":"var:preset|shadow|card"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-learnschool-card has-base-background-color has-background" style="border-radius:24px;box-shadow:var(--wp--preset--shadow--card);min-height:100%;padding-top:var(--wp--preset--spacing--step-5);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-5);padding-left:var(--wp--preset--spacing--step-4)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|step-3"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--step-3)"><!-- wp:paragraph {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|step-1","bottom":"var:preset|spacing|step-1","left":"var:preset|spacing|step-3","right":"var:preset|spacing|step-3"}},"typography":{"fontWeight":"700"}},"backgroundColor":"secondary","textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-secondary-background-color has-text-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--step-1);padding-right:var(--wp--preset--spacing--step-3);padding-bottom:var(--wp--preset--spacing--step-1);padding-left:var(--wp--preset--spacing--step-3);font-weight:700"><?php echo esc_html__( 'STEP 04', 'learnschool' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="learnschool-icon-wrap" style="color:var(--wp--preset--color--secondary-dark);display:inline-flex;align-items:center;justify-content:center">
<svg width="32" height="32" viewBox="0 0 56 56" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
<path d="M28 4C18.06 4 10 12.06 10 22C10 27.52 12.49 32.46 16.42 35.76L13.2 50.8C13.06 51.46 13.68 52 14.32 51.78L28 47.22L41.68 51.78C42.32 52 42.94 51.46 42.8 50.8L39.58 35.76C43.51 32.46 46 27.52 46 22C46 12.06 37.94 4 28 4ZM28 8C35.73 8 42 14.27 42 22C42 29.73 35.73 36 28 36C20.27 36 14 29.73 14 22C14 14.27 20.27 8 28 8ZM28 14.2L25.64 19.46L19.92 20.08L24.18 24.04L23.01 29.7L28 26.86L32.99 29.7L31.82 24.04L36.08 20.08L30.36 19.46L28 14.2ZM19.26 38.32C21.84 40.03 24.84 41 28 41C31.16 41 34.16 40.03 36.74 38.32L39.12 47.78L28 44.07L16.88 47.78L19.26 38.32Z" fill="currentColor"/>
</svg>
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"contrast","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-font-size"><?php echo esc_html__( 'Milestone ', 'learnschool' ); ?><span style="font-family:var(--wp--preset--font-family--courgette);color:var(--wp--preset--color--secondary-dark)"><?php echo esc_html__( 'Badges', 'learnschool' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-subtle-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html__( 'Celebrate verified milestones with tangible certificates, achievement badges, and portfolio showcases.', 'learnschool' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
