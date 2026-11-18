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

---

## 2. Directory Structure & File Boundaries

| File / Directory | Allowed Contents | Strictly Forbidden |
| :--- | :--- | :--- |
| **`theme.json`** | Design tokens, color palettes, spacing presets, fluid typography, block style defaults, template/part registrations. | Inline CSS rules, executable PHP code, non-standard vendor properties. |
| **`templates/*.html`** | Pure HTML block comment grammar (`<!-- wp:... -->`) and semantic structural tags (`<main>`, `<article>`). | Executable PHP (`<?php ... ?>`), classic PHP template files, hardcoded utility CSS classes. |
| **`parts/*.html`** | Structural site chrome (Header, Footer, Post Meta, Comments). Preferred: delegates inner content to patterns (`<!-- wp:pattern {"slug":"learnschool/..."} /-->`). | Page-specific content, hardcoded navigation lists bypassing `core/navigation`. |
| **`patterns/*.php`** | PHP docblock header registration + block markup grammar. Translatable text strings wrapped in `esc_html__()` / `esc_attr__()`. | Database queries (`WP_Query`), procedural `while(have_posts())` loops, presentation PHP logic, unescaped output. |
| **`styles/*.json`** | Global style variations or section styles (`"blockTypes": ["core/group", "core/cover"]`). | PHP code, invalid JSON syntax, root properties conflicting with `theme.json` schema. |
| **`inc/*.php`** | Modular PHP logic: Block Bindings API registrations, pattern categories, Interactivity API state. | Presentation HTML `echo`, classic widget/sidebar registrations, shortcodes for layout. |
| **`functions.php`** | Minimal theme bootstrap (`wp_enqueue_scripts`, `add_theme_support`, modular includes). | Presentation HTML markup, `register_sidebar()`, `register_nav_menus()`. |
| **`style.css`** | Theme metadata header required by WordPress Core. Edge-case fallback CSS only. | Full CSS resets, layout grid/flexbox sheets, utility padding/color classes handled by `theme.json`. |

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
