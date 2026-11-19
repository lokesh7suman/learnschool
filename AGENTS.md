# AGENTS.md — WordPress Full Site Editing (FSE) Theme Development Rules

This file defines the non-negotiable architectural standards, coding conventions, file responsibilities, and verification procedures for autonomous AI agents (and human engineers) developing and maintaining the **LearnSchool** WordPress block theme.

All agents operating in this workspace must adhere to these instructions.

---

## 1. Core Architectural Principles

- **Declarative Presentation Layer:** 
  The presentation layer is 100% declarative block markup. 
  - **NEVER** write or create legacy PHP presentation templates (`index.php`, `single.php`, `archive.php`, `header.php`, `footer.php`, `sidebar.php`).
  - **NEVER** call legacy presentation functions (`get_header()`, `get_footer()`, `wp_head()`, `wp_footer()`, `the_content()`, `the_title()`) inside theme presentation files. Core block template loaders handle wrappers and asset injection automatically.
- **`theme.json` v3 as the Single Source of Truth:**
  All design tokens (colors, spacing, fluid typography, shadows), layout boundaries (`contentSize`, `wideSize`), block supports, and element styles (`button`, `link`, `heading`) are defined in `theme.json`.
- **Zero-Specificity Styling (`0-1-0` Specificity):**
  Styles emitted by `theme.json` compile to `:where(...)` selectors with zero added specificity. 
  - **NEVER** write custom CSS utility classes in `style.css` for properties supported by `theme.json` (padding, margin, colors, gap, typography).
  - **NEVER** use `!important` in theme stylesheets.
- **Componentized, Pattern-First Architecture:**
  Page layouts are composed of Core blocks and structured into auto-discovered block patterns (`patterns/*.php`) and semantic template parts (`parts/*.html`).
- **Dynamic Per-Block CSS Loading (`wp_enqueue_block_style`):**
  Block-specific styles are decoupled into separate modular stylesheets (`assets/styles/core-<block-name>.css`) and registered via `wp_enqueue_block_style()` on `init`. Styles are loaded conditionally only when that block is rendered on the page, keeping `style.css` lean and optimizing Core Web Vitals.
- **Modern PHP 8.0+ Typing & Defensive Standards:**
  The theme requires PHP 8.0+. All theme PHP code must enforce strict typing (`declare(strict_types=1);`), explicit parameter/return type hinting, direct script access guards (`if ( ! defined( 'ABSPATH' ) ) { exit; }`), and clean namespacing or prefixing.

---

## 2. Directory Structure & File Boundaries

| File / Directory | Allowed Contents | Strictly Forbidden |
| :--- | :--- | :--- |
| **`theme.json`** | Design tokens, color palettes, spacing presets, fluid typography, block style defaults, template/part registrations. | Inline CSS rules, executable PHP code, non-standard vendor properties. |
| **`templates/*.html`** | Pure HTML block comment grammar (`<!-- wp:... -->`) and semantic structural tags (`<main>`, `<article>`). | Executable PHP (`<?php ... ?>`), classic PHP template files, hardcoded utility CSS classes. |
| **`parts/*.html`** | Structural site chrome (Header, Footer, Post Meta, Comments). Preferred: delegates inner content to patterns (`<!-- wp:pattern {"slug":"learnschool/..."} /-->`). | Page-specific content, hardcoded navigation lists bypassing `core/navigation`. |
| **`patterns/*.php`** | PHP docblock header registration + block markup grammar. Translatable text strings wrapped in `esc_html__()` / `esc_attr__()`. | Database queries (`WP_Query`), procedural `while(have_posts())` loops, presentation PHP logic, unescaped output. |
| **`styles/*.json`** | Global style variations or section styles (`"blockTypes": ["core/group", "core/cover"]`). | PHP code, invalid JSON syntax, root properties conflicting with `theme.json` schema. |
| **`assets/styles/*.css`** | Per-block modular stylesheets (`core-button.css`, `core-group.css`, etc.) enqueued via `wp_enqueue_block_style()`. | Global CSS resets, full site layout rules belonging in `theme.json` or `style.css`. |
| **`assets/fonts/`** | Bundled WOFF2 font files + `OFL.txt` (SIL Open Font License 1.1). | Remote font CDN URLs, uncompressed TTF/OTF fonts, uncredited font distributions. |
| **`inc/*.php`** | Modular PHP logic: Block Bindings API registrations, pattern categories, Interactivity API state. | Presentation HTML `echo`, classic widget/sidebar registrations, shortcodes for layout. |
| **`functions.php`** | Minimal theme bootstrap (`wp_enqueue_scripts`, `add_theme_support`, modular includes). | Presentation HTML markup, `register_sidebar()`, `register_nav_menus()`. |
| **`style.css`** | Theme metadata header required by WordPress Core. Edge-case fallback CSS only. | Full CSS resets, layout grid/flexbox sheets, utility padding/color classes handled by `theme.json`. |
| **`assets/images/icons/`** | Standalone optimized vector SVG assets (`viewBox`, `currentColor` fill/stroke). | Raster images (PNG, JPG) for iconography, unoptimized SVGs with hardcoded fills where theming is required. |

---

## 3. The HTML Synchronization Invariant (Anti-Recovery Law)

The #1 failure mode in agent-generated block themes is Gutenberg's fatal error:
> *"This block contains unexpected or invalid content. [Attempt Block Recovery]"*

### The Invariant Rule:
1. **Class & Attribute Synchronization:** Gutenberg compiles serialized block attributes into HTML classes and inline styles during parsing. If the inner HTML in a template differs by even a single class or attribute order from the serialized JSON comment attributes, Gutenberg marks the block invalid.
   - If attributes specify `{"fontSize":"large","textColor":"primary"}`, the HTML tag **MUST** include:
     `class="has-primary-color has-text-color has-large-font-size"`
   - If attributes specify inline padding `{"style":{"spacing":{"padding":{"top":"var:preset|spacing|step-4"}}}}`, the HTML tag **MUST** declare:
     `style="padding-top:var(--wp--preset--spacing--step-4);"`
2. **Prioritize Dynamic Blocks:** Dynamic self-closing blocks (`wp:pattern`, `wp:template-part`, `wp:site-title`, `wp:post-title`, `wp:post-date`, `wp:post-content`, `wp:query`) have **no serialized inner HTML** and can never trigger invalidation errors. Always prefer dynamic blocks in templates and parts.
3. **Strict JSON Syntax:** Block comment attribute JSON must be valid RFC 8259 without trailing commas. Self-closing blocks must have a trailing slash preceded by a space: `<!-- wp:block-name {...} /-->`.

---

## 4. `theme.json` Version 3 Specifications

In `theme.json` Version 3 (WP 6.6+), core defaults remain active unless explicitly turned off.

1. **Explicitly Disable Unwanted Core Presets:**
   ```json
   "settings": {
     "color": {
       "defaultPalette": false,
       "defaultGradients": false,
       "defaultDuotone": false
     },
     "typography": {
       "defaultFontSizes": false
     },
     "spacing": {
       "defaultSpacingSizes": false
     },
     "shadow": {
       "defaultPresets": false
     }
   }
   ```
2. **Canonical Token Shorthand in Styles:**
   Always use token shorthand in `styles` objects instead of hardcoding CSS variables:
   - Colors: `"var:preset|color|<slug>"` $\rightarrow$ `var(--wp--preset--color--<slug>)`
   - Spacing: `"var:preset|spacing|<slug>"` $\rightarrow$ `var(--wp--preset--spacing--<slug>)`
   - Typography: `"var:preset|font-size|<slug>"` $\rightarrow$ `var(--wp--preset--font-size--<slug>)`
   - Shadows: `"var:preset|shadow|<slug>"` $\rightarrow$ `var(--wp--preset--shadow--<slug>)`
3. **Hybrid Fluid Spacing Scale:**
   Spacing sizes presets (`step-1` through `step-8`) use a hybrid fluid model:
   - `step-1`: `0.5rem` (fixed compact)
   - `step-2`: `0.75rem` (fixed compact)
   - `step-3`: `clamp(0.875rem, 0.4vw + 0.75rem, 1.125rem)`
   - `step-4`: `clamp(1.25rem, 1vw + 1rem, 1.75rem)`
   - `step-5`: `clamp(1.5rem, 2vw + 1rem, 2.5rem)`
   - `step-6`: `clamp(2rem, 3.5vw + 1.125rem, 3.75rem)`
   - `step-7`: `clamp(2.5rem, 5vw + 1.25rem, 5.5rem)`
   - `step-8`: `clamp(3.5rem, 7vw + 1.75rem, 7.5rem)`
   This preserves pixel-precise rhythm for tight inner padding/gaps (`step-1`, `step-2`) while providing responsive viewport-proportional cadence for major section containers.

---

## 5. Modern FSE APIs & Patterns

### 1. Pattern Registration Format
Every file in `patterns/*.php` must declare the metadata header:
```php
<?php
/**
 * Title: Features Grid
 * Slug: learnschool/features-grid
 * Categories: featured, services
 * Keywords: education, features, grid
 * Inserter: true
 */
declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
  <!-- Content -->
</div>
<!-- /wp:group -->
```

### 2. Synced Pattern Overrides (WP 6.6+)
Use synced pattern overrides to allow users to edit text and buttons per-page while locking master layout structure:
```html
<!-- wp:heading {
  "metadata":{
    "name":"Card Heading",
    "bindings":{"content":{"source":"core/pattern-overrides"}}
  }
} -->
<h2 class="wp-block-heading">Default Title</h2>
<!-- /wp:heading -->
```

### 3. Block Bindings API (WP 6.5+)
Bind post metadata directly to block attributes rather than authoring custom dynamic PHP blocks:
```html
<!-- wp:paragraph {
  "metadata":{
    "bindings":{
      "content":{
        "source":"core/post-meta",
        "args":{"key":"course_credits"}
      }
    }
  }
} -->
<p>3 Credits</p>
<!-- /wp:paragraph -->
```

### 4. Native Interactivity API
For interactive UI widgets (accordions, mobile navigation toggles, dynamic counters), use the native `@wordpress/interactivity` runtime with directives (`data-wp-interactive`, `data-wp-context`, `data-wp-on--click`) instead of custom standalone JS libraries or jQuery.

### 5. Safe Markup Modification via `\WP_HTML_Tag_Processor` (WP 6.2+)
When intercepting and augmenting block output via render filters (`render_block` or `render_block_{$this->name}`), **NEVER** use fragile regex (`preg_replace`), string splitting, or `str_replace()` on serialized HTML tags. 
Always use WordPress Core's official `\WP_HTML_Tag_Processor` to inspect, set, or modify tags, classes, and attributes safely:
```php
function learnschool_filter_block_markup( string $block_content ): string {
	$processor = new \WP_HTML_Tag_Processor( $block_content );
	if ( $processor->next_tag( array( 'class_name' => 'target-class' ) ) ) {
		$processor->set_attribute( 'aria-expanded', 'false' );
		$processor->add_class( 'is-enhanced' );
	}
	return $processor->get_updated_html();
}
```

---

## 6. Anti-Slop Design Guidelines

- **Cohesive Color Palette:** 90% neutral surfaces (`base`, `surface`, `contrast`, `border`), with 1 primary brand accent hue. Never introduce unmotivated gradient fills or rainbow accents.
- **Strict Typography Scale:** Fluid typography using `clamp()`. Headings larger than 32px must use tight line-heights ($\le 1.2$) and subtle negative letter-spacing (`-0.02em`).
- **Consistent Shape Language:** Standardized border-radius tokens across all cards, buttons, and form inputs.
- **Fluid Whitespace Cadence:** Section spacing governed strictly by `theme.json` `spacingSizes` presets (`step-1` through `step-8`).

---

## 7. Autonomous Verification & Testing Runbook

Before considering any task complete, an agent must execute and pass the project's verification suite:

```bash
# 1. Full static pre-flight check (CSS linting, package.json check, PHPCS WPCS, PHPStan Level 8)
npm run check

# 2. Block pattern AST and syntax verification (ensures zero Gutenberg block recovery errors)
npm run test:patterns

# 3. Clean database overrides if testing in a local WordPress instance
npm run clean:db

# 4. Release bundle packaging test
npm run bundle
```

### Passing Criteria:
- `npm run check` exits with code `0` (Zero PHPCS errors, Zero PHPStan errors, Zero Stylelint errors).
- `npm run test:patterns` exits with code `0` (Zero invalid block markup errors).
- No uncommitted extraneous or temporary build artifacts left in repository.

---

## 8. Premium Theme & Iconography Guidelines

### 1. Local Vector SVGs & Glyph Consistency
- **Optimized Standalone Icons:** Store all custom iconography in `assets/images/icons/` as clean, standalone SVG vector assets (standard `viewBox="0 0 256 256"` or `0 0 24 24"`, and `fill="currentColor"` or `stroke="currentColor"` for dynamic theming).
- **Asset Referencing:** In block pattern markup (`patterns/*.php`), reference icon paths via `esc_url( get_theme_file_uri( 'assets/images/icons/<name>.svg' ) )` for `<img>` tags, or embed clean inline SVG vectors.
- **Strict Emoji Ban:** **NEVER** use OS emojis (such as 🔒, ⭐, 🚀, 💡) in production patterns or templates. System emojis render inconsistently across operating systems and clash with the theme's visual standards.
- **CSS Mask Data-URIs:** For bullet checkmarks (e.g., `ul.is-style-learnschool-checkmarks`) and recurring UI glyphs, use CSS mask data-URIs in `style.css` so icons render crisply and inherit theme color tokens:
  ```css
  ul.is-style-learnschool-checkmarks > li::before {
    content: "";
    display: inline-block;
    width: 1.25rem;
    height: 1.25rem;
    background-color: var(--wp--preset--color--primary, currentColor);
    mask-image: url("data:image/svg+xml,...");
    -webkit-mask-image: url("data:image/svg+xml,...");
    mask-size: contain;
    -webkit-mask-size: contain;
    mask-repeat: no-repeat;
    -webkit-mask-repeat: no-repeat;
  }
  ```

### 2. Section Styles via Block Style Variations
- **`theme.json` Registration:** Declare container style variations under `styles.blocks["core/group"].variations` in `theme.json` (e.g., `learnschool-glass`, `learnschool-elevated`, `learnschool-tinted`):
  ```json
  "styles": {
    "blocks": {
      "core/group": {
        "variations": {
          "learnschool-glass": {
            "color": {
              "background": "rgba(255, 255, 255, 0.75)"
            },
            "border": {
              "color": "rgba(255, 255, 255, 0.3)",
              "width": "1px",
              "style": "solid",
              "radius": "16px"
            },
            "css": "backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);"
          },
          "learnschool-elevated": {
            "shadow": "var:preset|shadow|card",
            "border": { "radius": "12px" }
          },
          "learnschool-tinted": {
            "color": {
              "background": "var:preset|color|surface-accent"
            },
            "border": {
              "color": "var:preset|color|primary-light",
              "width": "1px",
              "style": "solid",
              "radius": "12px"
            }
          }
        }
      }
    }
  }
  ```
- **Block Markup Invariant:** In patterns and templates, attach variations using the `className` attribute (`<!-- wp:group {"className":"is-style-learnschool-glass"} -->`) and the corresponding HTML class `<div class="wp-block-group is-style-learnschool-glass">`.

### 3. Modern Zero-JS CSS Features & Micro-Interactions
- **Scroll-Driven Animations:** Utilize native CSS scroll-driven animations (`animation-timeline: scroll(root);`) for performance-critical interactions like reading progress indicators:
  ```css
  @keyframes learnschool-progress-grow {
    from { transform: scaleX(0); }
    to { transform: scaleX(1); }
  }

  .learnschool-reading-progress {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, var(--wp--preset--color--primary) 0%, var(--wp--preset--color--secondary) 100%);
    transform-origin: left;
    transform: scaleX(0);
    animation: learnschool-progress-grow linear;
    animation-timeline: scroll(root);
    z-index: 9999;
  }
  ```
- **Card Micro-Interactions:** Enhance card interactivity with subtle hover lifts (`transform: translateY(-4px); transition: transform 0.25s ease, box-shadow 0.25s ease;`).
- **Motion Preference Fallbacks:** **ALWAYS** pair animations and transitions with `prefers-reduced-motion` fallbacks to respect accessibility requirements:
  ```css
  @media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
      animation-duration: 0.01ms;
      animation-iteration-count: 1;
      transition-duration: 0.01ms;
      scroll-behavior: auto;
    }
    .learnschool-reading-progress {
      display: none;
    }
  }
  ```

### 4. Dynamic Per-Block CSS Enqueuing (`wp_enqueue_block_style`)
To optimize page performance and Core Web Vitals (FCP/LCP), block-specific styles are stored in separate files under `assets/styles/core-<block>.css` and enqueued dynamically on `init`:
```php
function learnschool_enqueue_block_styles(): void {
	$files = glob( get_template_directory() . '/assets/styles/*.css' );
	if ( ! is_array( $files ) ) {
		return;
	}
	foreach ( $files as $file ) {
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );
		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "learnschool-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', 'learnschool_enqueue_block_styles' );
```
WordPress Core loads these stylesheets **only when the corresponding block is rendered on the page**.

### 5. Font Licensing & Privacy-First Typography (Zero-CDN)
- **Local Font Bundling:** All fonts (`Quicksand`, `Courgette`) must be self-hosted locally in `assets/fonts/*.woff2` and declared in `theme.json` `settings.typography.fontFamilies`.
- **Zero External CDNs:** Theme files must **NEVER** link or enqueue fonts from external CDNs (Google Fonts, Bunny, Typekit). This is mandatory for GDPR privacy compliance.
- **SIL OFL 1.1 Documentation:** All bundled fonts must be licensed under SIL Open Font License 1.1. The complete license text and upstream author copyright statements must be maintained in `assets/fonts/OFL.txt` and referenced in `readme.txt`.
