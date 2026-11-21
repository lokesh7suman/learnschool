# AGENTS.md — LearnSchool Theme Rules

Minimal, non-negotiable standards for agents and developers working on this WordPress FSE block theme.

---

## 1. Core Architecture (FSE Strictness)
- **100% Declarative Presentation:** All layout markup lives in `templates/*.html`, `parts/*.html`, and `patterns/*.php`. Root `index.php` must exist strictly as an empty compatibility stub. NEVER create legacy PHP templates (`single.php`, `header.php`, `footer.php`, etc.) or call legacy template tags (`get_header()`, `wp_head()`, `the_content()`).
- **`theme.json` v3 is Single Source of Truth:** Colors, typography, spacing scale (`var:preset|spacing|step-*`), layout dimensions, and element styles belong strictly in `theme.json`. Never write CSS utility classes in `style.css` for properties supported by `theme.json`. Never use `!important`.
- **Modular Block Styles:** Block-specific CSS belongs in `assets/styles/core-<block-name>.css` (auto-enqueued via `wp_enqueue_block_style`). Recurring UI treatments (cards, badges) belong in block styles (`is-style-*`) so visual updates cascade without touching pattern markup. Keep `style.css` strictly for minimal edge-case fallbacks.

---

## 2. File Boundaries & Responsibilities
- **`templates/*.html`:** Pure Gutenberg block comment grammar (`<!-- wp:... -->`). NO executable PHP (`<?php ... ?>`). Prefer dynamic self-closing blocks. Delegate layout sections to patterns (`<!-- wp:pattern {"slug":"..."} /-->`).
- **`parts/*.html`:** Reusable structural chrome (Header, Footer, Meta). Prefer delegating inner content to patterns (`<!-- wp:pattern {"slug":"..."} /-->`).
- **`patterns/*.php`:** Docblock metadata header (slug prefixed with `learnschool/`) + block markup. **Structure only:** Consume `theme.json` presets (`var:preset|spacing|step-*`, semantic color classes) and block styles (`is-style-*`). NEVER hardcode raw hex colors or fixed pixel spacing—UI/design updates must cascade from `theme.json` or CSS without mass-editing pattern files. Escape all translatable text using `'learnschool'` (`esc_html__( 'Text', 'learnschool' )`, `esc_attr__()`). NEVER run database queries (`WP_Query`) or PHP render loops.
- **`inc/*.php`:** Modular backend PHP (Block Bindings, pattern categories). Strict typing (`declare(strict_types=1);`), access guard (`if ( ! defined( 'ABSPATH' ) ) exit;`).
- **`assets/fonts/`:** Self-hosted WOFF2 only (SIL OFL 1.1). Zero external font CDNs (Google Fonts, Bunny, etc.).
- **`assets/images/icons/`:** Vector SVGs only (`viewBox`, `currentColor`). NO system/OS emojis (🔒, ⭐, 🚀).

---

## 3. Gutenberg Markup Invariant (Zero Block Recovery Errors)
- **Class & Style Synchronization:** Comment JSON attributes must strictly mirror inner HTML tags:
  - Color/fontSize attributes require exact matching classes (e.g., `{"textColor":"primary"}` → `class="has-primary-color has-text-color"`).
  - Inline style objects require an identical `style="..."` declaration.
- **Strict Syntax:** Block attributes must be valid RFC 8259 JSON (no trailing commas). Self-closing tags must end with a space and trailing slash: `<!-- wp:block-name {...} /-->`.
- **HTML Modification:** When filtering block output in PHP, ALWAYS use `\WP_HTML_Tag_Processor`. Never use regex (`preg_replace`) or `str_replace` on serialized HTML.

---

## 4. Verification Suite (Zero-Docker & Playwright)
- **Zero-Docker / Native Valet:** Never run Docker or `wp-env`. Tests execute directly against native WordPress (`https://development.test`) via `@wordpress/scripts test-playwright`.
- **Required Checks:** Run and pass before completing any task (exit code `0`):
```bash
npm run test:e2e # Automated Playwright UI & WordPress.org TRT compliance suite
npm run check    # Stylelint (CSS), ESLint (JS), pkg-json lint, PHPCS, and theme-utils
npm run bundle   # Official verification + release packaging
```
