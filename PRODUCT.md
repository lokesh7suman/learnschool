# Product

<!-- impeccable:product-schema 1 -->

## Platform

web

## Users

- **Primary builders**: WordPress agencies and site builders customizing sites for educational institutions, academies, preschools, and K-12 schools.
- **End visitors**: Prospective parents evaluating enrollment, current families accessing the Parent Portal and office hours, and school staff using the Staff Directory.

## Product Purpose

LearnSchool is a Full Site Editing (FSE) WordPress block theme (`learnschool`, by `codeclove`) that enables agencies and site builders to launch accessible, fast, zero-bloat websites for schools, academies, and educational institutions without third-party page builders. Success means builders can customize layouts, patterns, and global styles directly in the WordPress Site Editor while passing WordPress.org Theme Review Team (TRT) and accessibility checks out of the box.

## Positioning

Pure WordPress FSE architecture with zero page-builder bloat and full WordPress.org Theme Review Team (TRT) compliance—all layout, global styles, and school-specific patterns live natively in `theme.json` v3, `templates/*.html`, `parts/*.html`, and `patterns/*.php`.

## Operating Context

- **Site customization**: WordPress Site Editor (FSE) with block patterns (`learnschool/*`), template parts (`parts/header.html`, `parts/footer.html`), and `theme.json` v3 presets.
- **Local verification**: Native WordPress environment (`https://development.test`) with Playwright E2E + `@axe-core/playwright`, Stylelint, ESLint, PHPCS, PHPStan, and `theme-utils.mjs` (`npm run test:e2e`, `npm run check`, `npm run bundle`).

## Capabilities and Constraints

- **100% declarative FSE presentation**: All markup lives in `templates/*.html`, `parts/*.html`, and `patterns/*.php`; root `index.php` is an empty compatibility stub. No legacy PHP templates or template tags (`get_header()`, `wp_head()`, `the_content()`).
- **WordPress compatibility**: Requires WordPress 6.6+ (tested up to 7.0), PHP 8.0+, GPL-2.0-or-later license, text domain `'learnschool'`.
- **Single source of truth**: `theme.json` v3 governs colors, typography, spacing (`var:preset|spacing|step-*`), and element styles; no `!important` rules; block-specific CSS lives in `assets/styles/core-<block-name>.css`.
- **Markup invariants**: Strict Gutenberg block comment JSON/HTML synchronization (zero block recovery errors), `\WP_HTML_Tag_Processor` for any PHP HTML filtering, self-hosted WOFF2 fonts only (`assets/fonts/`), and vector SVGs only (`assets/images/icons/`, no OS emojis).
- **Zero-Docker testing**: Tests run natively against `https://development.test` (never Docker or `wp-env`).

## Brand Commitments

- **Theme name & author**: LearnSchool (`learnschool`) by `codeclove` (`https://codeclove.com/learnschool`).
- **Editorial identity**: "The Nurturing Studio" (documented in `DESIGN.md`).

## Evidence on Hand

- Existing FSE theme implementation in `templates/`, `parts/`, `patterns/`, `assets/styles/`, `theme.json`, and `readme.txt`.
- Automated quality & compliance suite in `package.json` (`npm run check`, `npm run test:e2e`, `npm run bundle`).
- Critique snapshot history in `.impeccable/critique/`.
- **Absences not to fabricate**: Real school phone numbers, physical addresses, social profile URLs, and live enrollment metrics (currently placeholder demo content in patterns must not be presented as real institution data).

## Product Principles

1. **Zero-bloat FSE purity**: Every layout and component works natively in the WordPress Site Editor without third-party page builders or custom runtime frameworks.
2. **Agency-ready customization**: Global tokens (`theme.json` v3) and modular block patterns cascade cleanly so site builders can rebrand without editing pattern markup.
3. **WordPress.org TRT compliance by default**: Strict escaping, licensing, self-hosted assets, and Gutenberg markup validity are non-negotiable on every change.
4. **Accessible for every family**: WCAG 2.2 AA conformance and keyboard/screen-reader usability are verified automatically via `@axe-core/playwright`.

## Accessibility & Inclusion

- **Required standard**: WCAG 2.2 AA conformance + WordPress.org TRT compliance.
- **Automated enforcement**: `@axe-core/playwright` E2E checks (`npm run test:e2e`), 4.5:1 text contrast minimum, visible focus indicators, and pointer-adaptive 44×44px touch targets on coarse pointers.
