<?php
/**
 * School Test Data Generator for LearnSchool Block Theme
 *
 * Creates comprehensive, hierarchical educational pages and navigation menus
 * with multi-level sub-menus for testing desktop, iPad, tablet, and mobile responsiveness.
 *
 * Usage: wp eval-file bin/create-school-test-data.php --path=/Users/lokesh/Sites/development
 *
 * @package LearnSchool
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

echo "=====================================================\n";
echo " LearnSchool: Creating School Test Data & Navigation \n";
echo "=====================================================\n\n";

$school_structure = [
	[
		'title'    => 'About Us',
		'slug'     => 'about-us',
		'excerpt'  => 'Discover LearnSchool’s history, educational mission, leadership governance, and modern campus facilities.',
		'children' => [
			[
				'title'   => 'Our Mission & Values',
				'slug'    => 'mission-values',
				'excerpt' => 'Fostering intellectual curiosity, moral integrity, empathy, and global citizenship in every learner.',
			],
			[
				'title'    => 'Leadership & Governance',
				'slug'     => 'leadership',
				'excerpt'  => 'Meet our visionary school leaders, board of trustees, and administrative leadership team.',
				'children' => [
					[
						'title'   => 'Principal’s Welcome',
						'slug'    => 'principals-welcome',
						'excerpt' => 'A message from our Head of School on nurturing future-ready innovators and lifelong learners.',
					],
					[
						'title'   => 'Board of Trustees',
						'slug'    => 'board-of-trustees',
						'excerpt' => 'Dedicated stewards providing strategic governance, ethical oversight, and educational excellence.',
					],
					[
						'title'   => 'Faculty Directory',
						'slug'    => 'faculty-directory',
						'excerpt' => 'Our distinguished community of certified educators, mentors, subject specialists, and counselors.',
					],
				],
			],
			[
				'title'   => 'Campus & Facilities',
				'slug'    => 'campus-facilities',
				'excerpt' => 'State-of-the-art STEM laboratories, performing arts auditorium, Olympic sports complex, and libraries.',
			],
			[
				'title'   => 'Accreditations & Awards',
				'slug'    => 'accreditations',
				'excerpt' => 'Internationally accredited by top educational councils and recognized for STEM and arts excellence.',
			],
		],
	],
	[
		'title'    => 'Academics',
		'slug'     => 'academics',
		'excerpt'  => 'Challenging, inquiry-based curriculum designed to inspire curiosity, critical thinking, and mastery.',
		'children' => [
			[
				'title'   => 'Early Learning & Pre-K',
				'slug'    => 'early-learning',
				'excerpt' => 'Play-based foundational learning developing emotional intelligence, motor skills, and curiosity.',
			],
			[
				'title'   => 'Elementary School (Grades 1–5)',
				'slug'    => 'elementary-school',
				'excerpt' => 'Strong literacy, numeracy, experiential science, and arts in a warm, collaborative environment.',
			],
			[
				'title'   => 'Middle School (Grades 6–8)',
				'slug'    => 'middle-school',
				'excerpt' => 'Bridging fundamental skills with independent investigation, robotics, humanities, and leadership.',
			],
			[
				'title'    => 'High School (Grades 9–12)',
				'slug'     => 'high-school',
				'excerpt'  => 'Rigorous college-preparatory coursework, advanced sciences, leadership, and university guidance.',
				'children' => [
					[
						'title'   => 'Advanced Placement (AP) & Honors',
						'slug'    => 'ap-honors',
						'excerpt' => 'Over 22 college-level AP courses providing university credits and rigorous academic pathways.',
					],
					[
						'title'   => 'STEM & AI Innovation Lab',
						'slug'    => 'stem-robotics',
						'excerpt' => 'Hands-on programming, mechatronics, artificial intelligence, and competitive robotics.',
					],
					[
						'title'   => 'College Counseling & Placement',
						'slug'    => 'college-counseling',
						'excerpt' => 'Personalized guidance delivering 98% top-tier university acceptance for graduating seniors.',
					],
				],
			],
			[
				'title'   => 'Academic Calendar',
				'slug'    => 'academic-calendar',
				'excerpt' => 'Key term dates, examination schedules, parent conferences, and holiday breaks for the academic year.',
			],
			[
				'title'   => 'Library & Media Center',
				'slug'    => 'library-media-center',
				'excerpt' => 'Access over 50,000 physical volumes, digital research databases, audiobooks, and makerspaces.',
			],
		],
	],
	[
		'title'    => 'Admissions',
		'slug'     => 'admissions',
		'excerpt'  => 'We welcome ambitious, curious students from all backgrounds. Explore our admissions process and visit us.',
		'children' => [
			[
				'title'   => 'How to Apply',
				'slug'    => 'how-to-apply',
				'excerpt' => 'Clear, step-by-step application instructions, required documentation, and key submission deadlines.',
			],
			[
				'title'   => 'Tuition & Financial Aid',
				'slug'    => 'tuition-aid',
				'excerpt' => 'Transparent fee schedules, need-based scholarship grants, and flexible family payment plans.',
			],
			[
				'title'   => 'Schedule a Campus Tour',
				'slug'    => 'campus-tour',
				'excerpt' => 'Experience LearnSchool in person with student-led campus tours and interactive classroom visits.',
			],
			[
				'title'   => 'Admissions FAQs',
				'slug'    => 'admissions-faqs',
				'excerpt' => 'Answers to common questions about testing, entry criteria, international admissions, and bus transport.',
			],
		],
	],
	[
		'title'    => 'Student Life',
		'slug'     => 'student-life',
		'excerpt'  => 'A well-rounded student journey fostering passions outside the classroom in athletics, arts, and service.',
		'children' => [
			[
				'title'    => 'Athletics & Physical Education',
				'slug'     => 'athletics',
				'excerpt'  => 'Championship varsity sports, intramural fitness, teamwork, and lifelong healthy habits.',
				'children' => [
					[
						'title'   => 'Varsity Teams & Schedules',
						'slug'    => 'varsity-teams',
						'excerpt' => 'Game schedules, team rosters, coaching staff profiles, and match results.',
					],
					[
						'title'   => 'Sports Complexes & Fitness',
						'slug'    => 'sports-complex',
						'excerpt' => 'Tour our 8-lane running track, heated indoor aquatic pool, basketball arena, and fitness suites.',
					],
				],
			],
			[
				'title'   => 'Visual & Performing Arts',
				'slug'    => 'arts-music',
				'excerpt' => 'Symphonic orchestra, modern jazz band, theater productions, ceramics, and digital graphic arts.',
			],
			[
				'title'   => 'Clubs & Extracurriculars',
				'slug'    => 'clubs-activities',
				'excerpt' => 'More than 40 student-led clubs: Model UN, Debate Society, Environmental Club, Chess, and Coding.',
			],
			[
				'title'   => 'Health, Wellness & Counseling',
				'slug'    => 'health-wellness',
				'excerpt' => 'Full-time campus nurses, certified adolescent counselors, and social-emotional wellness programs.',
			],
			[
				'title'   => 'Dining & Campus Nutrition',
				'slug'    => 'dining-nutrition',
				'excerpt' => 'Fresh, scratch-cooked nutritional meals crafted daily by culinary chefs catering to all dietary needs.',
			],
		],
	],
	[
		'title'    => 'News & Events',
		'slug'     => 'news-events',
		'excerpt'  => 'Stay informed with the latest school announcements, academic achievements, events, and student highlights.',
		'children' => [
			[
				'title'   => 'School Announcements',
				'slug'    => 'announcements',
				'excerpt' => 'Official communications, term updates, academic milestones, and awards.',
			],
			[
				'title'   => 'Upcoming Events Calendar',
				'slug'    => 'events-calendar',
				'excerpt' => 'Concerts, athletic tournaments, science fairs, open houses, and graduation ceremonies.',
			],
			[
				'title'   => 'Media & Photo Gallery',
				'slug'    => 'media-gallery',
				'excerpt' => 'Highlights from campus life, student exhibitions, science competitions, and sports championships.',
			],
		],
	],
	[
		'title'    => 'Contact Us',
		'slug'     => 'contact-us',
		'excerpt'  => 'We’re here to help. Reach out to our admissions department, academic office, or campus security.',
		'children' => [
			[
				'title'   => 'Directions & Campus Map',
				'slug'    => 'campus-map',
				'excerpt' => 'Interactive map, visitor parking instructions, public transit connections, and building guides.',
			],
			[
				'title'   => 'Parent Portal Support',
				'slug'    => 'parent-portal',
				'excerpt' => 'Technical support for accessing student grade reports, daily attendance, tuition invoices, and messages.',
			],
		],
	],
];

/**
 * Generate standard, accessible Gutenberg block content for school pages.
 */
function build_school_page_content( string $title, string $excerpt, string $parent_title = '' ): string {
	$breadcrumb = $parent_title ? esc_html( $parent_title ) . ' &rsaquo; ' : '';

	return '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->' . "\n" .
		'<div class="wp-block-group alignfull has-base-subtle-background-color has-background" style="padding-top:var(--wp--preset--spacing--step-6);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-6);padding-left:var(--wp--preset--spacing--step-4)">' . "\n" .
		'<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->' . "\n" .
		'<div class="wp-block-group alignwide">' . "\n" .
		'<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small"} -->' . "\n" .
		'<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600">' . $breadcrumb . 'LearnSchool Academy</p>' . "\n" .
		'<!-- /wp:paragraph -->' . "\n" .
		'<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.15"}},"fontSize":"xx-large"} -->' . "\n" .
		'<h1 class="wp-block-heading has-xx-large-font-size" style="line-height:1.15">' . esc_html( $title ) . '</h1>' . "\n" .
		'<!-- /wp:heading -->' . "\n" .
		'<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-subtle","fontSize":"large"} -->' . "\n" .
		'<p class="has-contrast-subtle-color has-text-color has-large-font-size" style="line-height:1.6">' . esc_html( $excerpt ) . '</p>' . "\n" .
		'<!-- /wp:paragraph -->' . "\n" .
		'</div>' . "\n" .
		'<!-- /wp:group -->' . "\n" .
		'</div>' . "\n" .
		'<!-- /wp:group -->' . "\n\n" .
		'<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|step-6","bottom":"var:preset|spacing|step-6"}}},"layout":{"type":"constrained"}} -->' . "\n" .
		'<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--step-6);padding-bottom:var(--wp--preset--spacing--step-6)">' . "\n" .
		'<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|step-4","left":"var:preset|spacing|step-5"}}}} -->' . "\n" .
		'<div class="wp-block-columns">' . "\n" .
		'<!-- wp:column {"width":"65%"} -->' . "\n" .
		'<div class="wp-block-column" style="flex-basis:65%">' . "\n" .
		'<!-- wp:heading {"level":2} -->' . "\n" .
		'<h2 class="wp-block-heading">Excellence in Learning &amp; Character</h2>' . "\n" .
		'<!-- /wp:heading -->' . "\n" .
		'<!-- wp:paragraph -->' . "\n" .
		'<p>At LearnSchool, our academic and community philosophy centers on empowering every student to unlock their highest potential. Through experiential coursework, personalized guidance, and state-of-the-art facilities, we prepare learners to succeed in top global universities and lead with empathy.</p>' . "\n" .
		'<!-- /wp:paragraph -->' . "\n" .
		'<!-- wp:paragraph -->' . "\n" .
		'<p>Our faculty members bring passion and world-class expertise into every lesson, ensuring that students develop not only essential knowledge but also critical inquiry, emotional resilience, and lifelong collaborative skills.</p>' . "\n" .
		'<!-- /wp:paragraph -->' . "\n" .
		'<!-- wp:buttons -->' . "\n" .
		'<div class="wp-block-buttons">' . "\n" .
		'<!-- wp:button {"className":"is-style-learnschool-pill","backgroundColor":"primary","textColor":"base"} -->' . "\n" .
		'<div class="wp-block-button is-style-learnschool-pill"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="' . esc_url( home_url( '/admissions/how-to-apply/' ) ) . '">Inquire Today</a></div>' . "\n" .
		'<!-- /wp:button -->' . "\n" .
		'<!-- wp:button {"className":"is-style-outline"} -->' . "\n" .
		'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="' . esc_url( home_url( '/admissions/campus-tour/' ) ) . '">Book a Tour</a></div>' . "\n" .
		'<!-- /wp:button -->' . "\n" .
		'</div>' . "\n" .
		'<!-- /wp:buttons -->' . "\n" .
		'</div>' . "\n" .
		'<!-- /wp:column -->' . "\n" .
		'<!-- wp:column {"width":"35%"} -->' . "\n" .
		'<div class="wp-block-column" style="flex-basis:35%">' . "\n" .
		'<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4","bottom":"var:preset|spacing|step-4","left":"var:preset|spacing|step-4","right":"var:preset|spacing|step-4"}},"border":{"radius":"16px"}},"backgroundColor":"base-subtle","layout":{"type":"constrained"}} -->' . "\n" .
		'<div class="wp-block-group has-base-subtle-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--step-4);padding-right:var(--wp--preset--spacing--step-4);padding-bottom:var(--wp--preset--spacing--step-4);padding-left:var(--wp--preset--spacing--step-4)">' . "\n" .
		'<!-- wp:heading {"level":3,"fontSize":"medium"} -->' . "\n" .
		'<h3 class="wp-block-heading has-medium-font-size">Quick School Facts</h3>' . "\n" .
		'<!-- /wp:heading -->' . "\n" .
		'<!-- wp:list {"className":"is-style-learnschool-checkmarks"} -->' . "\n" .
		'<ul class="wp-block-list is-style-learnschool-checkmarks">' . "\n" .
		'<li>Student-to-Teacher Ratio: 8:1</li>' . "\n" .
		'<li>100% University Acceptance Rate</li>' . "\n" .
		'<li>Over 24 AP &amp; Honors Courses</li>' . "\n" .
		'<li>40+ Clubs, Sports &amp; Activities</li>' . "\n" .
		'</ul>' . "\n" .
		'<!-- /wp:list -->' . "\n" .
		'</div>' . "\n" .
		'<!-- /wp:group -->' . "\n" .
		'</div>' . "\n" .
		'<!-- /wp:column -->' . "\n" .
		'</div>' . "\n" .
		'<!-- /wp:columns -->' . "\n" .
		'</div>' . "\n" .
		'<!-- /wp:group -->';
}

$created_count = 0;
$updated_count = 0;
$page_id_map   = [];

/**
 * Recursively create or update pages.
 */
function create_pages_recursive( array $items, int $parent_id, string $parent_title, array &$page_id_map, int &$created_count, int &$updated_count ): array {
	$result = [];

	foreach ( $items as $item ) {
		$slug    = $item['slug'];
		$title   = $item['title'];
		$excerpt = $item['excerpt'];

		// Check if page already exists with this slug and parent.
		$existing = get_posts( [
			'post_type'      => 'page',
			'name'           => $slug,
			'post_parent'    => $parent_id,
			'post_status'    => 'any',
			'posts_per_page' => 1,
			'fields'         => 'ids',
		] );

		$content = build_school_page_content( $title, $excerpt, $parent_title );

		if ( ! empty( $existing ) ) {
			$page_id = $existing[0];
			wp_update_post( [
				'ID'           => $page_id,
				'post_title'   => $title,
				'post_content' => $content,
				'post_excerpt' => $excerpt,
				'post_status'  => 'publish',
			] );
			$updated_count++;
		} else {
			$page_id = wp_insert_post( [
				'post_title'   => $title,
				'post_name'    => $slug,
				'post_content' => $content,
				'post_excerpt' => $excerpt,
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_parent'  => $parent_id,
			] );
			$created_count++;
		}

		$page_id_map[ $slug ] = $page_id;
		$permalink            = get_permalink( $page_id );

		$node = [
			'id'       => $page_id,
			'title'    => $title,
			'slug'     => $slug,
			'url'      => $permalink,
			'children' => [],
		];

		if ( ! empty( $item['children'] ) ) {
			$node['children'] = create_pages_recursive( $item['children'], $page_id, $title, $page_id_map, $created_count, $updated_count );
		}

		$result[] = $node;
	}

	return $result;
}

$page_tree = create_pages_recursive( $school_structure, 0, '', $page_id_map, $created_count, $updated_count );

echo "✔ Created {$created_count} new pages, updated {$updated_count} existing pages.\n";

/**
 * Build Navigation Block Markup with Multi-Level Submenus.
 */
function build_navigation_markup( array $page_tree ): string {
	$markup = '';

	// 1. Home Link
	$home_url = esc_url( home_url( '/' ) );
	$markup  .= '<!-- wp:navigation-link {"label":"Home","url":"' . $home_url . '","kind":"custom","isTopLevelLink":true} /--> ' . "\n";

	// 2. Loop through top-level sections
	foreach ( $page_tree as $top_page ) {
		$top_title = esc_attr( $top_page['title'] );
		$top_url   = esc_url( $top_page['url'] );
		$top_id    = (int) $top_page['id'];

		if ( empty( $top_page['children'] ) ) {
			$markup .= '<!-- wp:navigation-link {"label":"' . $top_title . '","url":"' . $top_url . '","id":' . $top_id . ',"kind":"post-type","type":"page","isTopLevelLink":true} /--> ' . "\n";
			continue;
		}

		// Top-level item with submenu
		$markup .= '<!-- wp:navigation-submenu {"label":"' . $top_title . '","url":"' . $top_url . '","id":' . $top_id . ',"kind":"post-type","type":"page","isTopLevelItem":true} -->' . "\n";

		foreach ( $top_page['children'] as $child_page ) {
			$child_title = esc_attr( $child_page['title'] );
			$child_url   = esc_url( $child_page['url'] );
			$child_id    = (int) $child_page['id'];

			if ( empty( $child_page['children'] ) ) {
				$markup .= '  <!-- wp:navigation-link {"label":"' . $child_title . '","url":"' . $child_url . '","id":' . $child_id . ',"kind":"post-type","type":"page"} /--> ' . "\n";
			} else {
				// Level 3 nested submenu (Grandchild flyout)
				$markup .= '  <!-- wp:navigation-submenu {"label":"' . $child_title . '","url":"' . $child_url . '","id":' . $child_id . ',"kind":"post-type","type":"page"} -->' . "\n";
				foreach ( $child_page['children'] as $grandchild ) {
					$gc_title = esc_attr( $grandchild['title'] );
					$gc_url   = esc_url( $grandchild['url'] );
					$gc_id    = (int) $grandchild['id'];
					$markup  .= '    <!-- wp:navigation-link {"label":"' . $gc_title . '","url":"' . $gc_url . '","id":' . $gc_id . ',"kind":"post-type","type":"page"} /--> ' . "\n";
				}
				$markup .= '  <!-- /wp:navigation-submenu -->' . "\n";
			}
		}

		$markup .= '<!-- /wp:navigation-submenu -->' . "\n";
	}

	return trim( $markup );
}

$nav_content = build_navigation_markup( $page_tree );

// Find or create wp_navigation post
$nav_posts = get_posts( [
	'post_type'      => 'wp_navigation',
	'post_status'    => 'publish',
	'posts_per_page' => 1,
] );

if ( ! empty( $nav_posts ) ) {
	$nav_id = $nav_posts[0]->ID;
	wp_update_post( [
		'ID'           => $nav_id,
		'post_title'   => 'Primary School Navigation',
		'post_content' => $nav_content,
		'post_status'  => 'publish',
	] );
	echo "✔ Updated existing wp_navigation menu (ID: {$nav_id}) with multi-level school navigation.\n";
} else {
	$nav_id = wp_insert_post( [
		'post_title'   => 'Primary School Navigation',
		'post_content' => $nav_content,
		'post_status'  => 'publish',
		'post_type'    => 'wp_navigation',
	] );
	echo "✔ Created new wp_navigation menu (ID: {$nav_id}) with multi-level school navigation.\n";
}

echo "\nSummary of Created School Navigation Structure:\n";
echo "  [Home] (Top-Level)\n";
foreach ( $page_tree as $top ) {
	$count = count( $top['children'] );
	echo "  ├─ [{$top['title']}] ({$count} sub-items)\n";
	foreach ( $top['children'] as $child ) {
		$gc_count = count( $child['children'] );
		$gc_info  = $gc_count > 0 ? " [{$gc_count} sub-levels]" : '';
		echo "  │   ├─ {$child['title']}{$gc_info}\n";
		foreach ( $child['children'] as $gc ) {
			echo "  │   │   └─ {$gc['title']}\n";
		}
	}
}

echo "\n=====================================================\n";
echo " ✓ School Test Data & Multi-Level Navigation Ready!   \n";
echo "=====================================================\n";
