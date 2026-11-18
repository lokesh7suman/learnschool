# Master Refactoring Plan: LearnSchool Theme

**Goal:** Transform LearnSchool into a 100% DRY, high-performance, token-driven WordPress block theme matching WonderKids aesthetics cleanly without hacks.

---

## Task Breakdown & Order of Execution

- [ ] **Phase 1: Prune & Modernize `style.css` (css_cleaner)**
  - Strip ~3,000 lines of dead `.wk-*` section wrappers.
  - Add WonderKids decorative CSS properties (`.wk-highlight-brush`, `.wk-card-doodle-*`, `.wk-showcase-badge`).
  - Verify `npm run lint:css` passes with 0 errors.

- [ ] **Phase 2: Consolidate Card Styles in `theme.json` (token_architect)**
  - Register `learnschool-card` under `styles.blocks["core/group"].variations` alongside `learnschool-elevated`, `learnschool-glass`, and `learnschool-tinted`.
  - Verify `npm run lint:schema` passes with 0 errors.

- [ ] **Phase 3: Polish Patterns for WonderKids Visual Parity (pattern_polisher)**
  - Add handwritten highlight brush to key words in `hero-split-checklist.php` and `learning-materials-split.php`.
  - Add card doodle classes to `features-cards.php`.
  - Verify HTML synchronization invariant.

- [ ] **Phase 4: Full Automated Verification & Release Bundling (verifier)**
  - Run `npm run check` (PHPCS, PHPStan Level 8, schema, blocks, css, json).
  - Run `node .tests/gutenberg-e2e-validate.js` across all 39 patterns.
  - Run `npm run bundle` to generate production release zip.
