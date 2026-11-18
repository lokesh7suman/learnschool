# Task List: Theme Refactoring & Parity Polish

- [ ] **Task 1: CSS Pruning & WonderKids Decorative Classes**
  - Worker: `css_cleaner` (workspace: share)
  - Files touched: `style.css`
  - Acceptance Criteria:
    - Dead `.wk-*` section wrapper styles removed (~3,000 lines).
    - `.wk-highlight-brush` added using `materials-highlight.svg`.
    - `.wk-card-doodle-quiz`, `.wk-card-doodle-activities`, `.wk-card-doodle-games` added.
    - `npm run lint:css` passes with 0 errors.

- [ ] **Task 2: Design Token & Card Consolidation in `theme.json`**
  - Worker: `token_architect` (workspace: share)
  - Files touched: `theme.json`
  - Acceptance Criteria:
    - `learnschool-card` declared under `styles.blocks["core/group"].variations`.
    - 100% compliant with theme.json v3 schema.
    - `npm run lint:schema` passes with 0 errors.

- [ ] **Task 3: Pattern Visual Parity Polish**
  - Worker: `pattern_polisher` (workspace: share)
  - Files touched: `patterns/hero-split-checklist.php`, `patterns/learning-materials-split.php`, `patterns/features-cards.php`
  - Acceptance Criteria:
    - Highlight brush spans added to headline words.
    - Card doodle background classes applied to feature cards.
    - Strict HTML synchronization invariant maintained (zero Gutenberg recovery errors).

- [ ] **Task 4: Full Quality Gate Verification & Bundling**
  - Worker: `verifier` (workspace: inherit)
  - Acceptance Criteria:
    - `npm run check` exits with code 0.
    - `node .tests/gutenberg-e2e-validate.js` passes with 0 block recovery errors across all 39 patterns.
    - `npm run bundle` generates clean production release archive.
