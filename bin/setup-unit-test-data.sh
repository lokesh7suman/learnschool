#!/usr/bin/env bash
# Import official WordPress Theme Unit Test data and configure recommended reading/discussion settings.
# Usage: bash bin/setup-unit-test-data.sh [--path=/path/to/wp] [--force]

set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
THEME_DIR="$(cd "$SCRIPT_DIR/.." && pwd)"
FIXTURE="$THEME_DIR/tests/fixtures/themeunittestdata.wordpress.xml"
WP_PATH="${WP_PATH:-$(cd "$THEME_DIR/../../.." && pwd)}"
FORCE=0

for arg in "$@"; do
	case "$arg" in
		--path=*)
			WP_PATH="${arg#--path=}"
			;;
		--force)
			FORCE=1
			;;
		*)
			echo "Unknown argument: $arg" >&2
			exit 1
			;;
	esac
done

if [ ! -f "$FIXTURE" ]; then
	echo "Missing Theme Unit Test fixture: $FIXTURE" >&2
	exit 1
fi

if [ ! -f "$WP_PATH/wp-load.php" ]; then
	echo "WordPress root not found at: $WP_PATH (pass --path=/path/to/wordpress)" >&2
	exit 1
fi

WP="wp --path=$WP_PATH"

# Import fixture if sentinel Theme Unit Test post is absent or --force was passed.
SENTINEL_COUNT="$($WP post list --name=template-paginated --post_type=post --post_status=publish --format=count 2>/dev/null || echo 0)"
if [ "$FORCE" -eq 1 ] || [ "$SENTINEL_COUNT" -eq 0 ]; then
	IMPORTER_WAS_ACTIVE=0
	if $WP plugin is-active wordpress-importer >/dev/null 2>&1; then
		IMPORTER_WAS_ACTIVE=1
	else
		if ! $WP plugin is-installed wordpress-importer >/dev/null 2>&1; then
			$WP plugin install wordpress-importer --activate
		else
			$WP plugin activate wordpress-importer
		fi
	fi

	$WP import "$FIXTURE" --authors=create

	if [ "$IMPORTER_WAS_ACTIVE" -eq 0 ]; then
		$WP plugin deactivate wordpress-importer >/dev/null 2>&1 || true
	fi
else
	echo "Theme Unit Test posts already imported (pass --force to re-import)."
fi

# Theme Unit Test recommended reading, discussion, and permalink settings.
CURRENT_PERMALINK="$($WP option get permalink_structure 2>/dev/null || true)"
if [ -z "$CURRENT_PERMALINK" ]; then
	$WP rewrite structure '/%postname%/' --hard
fi

$WP option update posts_per_page 5
$WP option update thread_comments 1
$WP option update thread_comments_depth 10
$WP option update page_comments 1
$WP option update comments_per_page 5
$WP option update show_on_front posts
$WP rewrite flush --hard

# Sync the primary wp_navigation post from the imported Testing Menu (includes 10-level depth tree).
$WP eval '
$menu = wp_get_nav_menu_object( "testing-menu" );
if ( $menu && class_exists( "WP_Classic_To_Block_Menu_Converter" ) ) {
	$blocks = WP_Classic_To_Block_Menu_Converter::convert( $menu );
	if ( ! is_wp_error( $blocks ) && "" !== trim( $blocks ) ) {
		$nav_posts = get_posts(
			array(
				"post_type"      => "wp_navigation",
				"post_status"    => "publish",
				"posts_per_page" => 1,
				"orderby"        => "date",
				"order"          => "DESC",
			)
		);
		if ( ! empty( $nav_posts ) ) {
			wp_update_post(
				array(
					"ID"           => $nav_posts[0]->ID,
					"post_content" => wp_slash( $blocks ),
				)
			);
			echo "Updated wp_navigation #" . $nav_posts[0]->ID . " from Testing Menu.\n";
		} else {
			$new_id = wp_insert_post(
				array(
					"post_type"    => "wp_navigation",
					"post_status"  => "publish",
					"post_title"   => "Navigation",
					"post_name"    => "navigation",
					"post_content" => wp_slash( $blocks ),
				)
			);
			echo "Created wp_navigation #" . $new_id . " from Testing Menu.\n";
		}
	}
}
'
