# Task List: WonderKids Homepage Implementation

- [ ] **Task 1: Verify & Refine Dynamic Components (Navigation & Query Loop)**
  - **Description:** Audit `patterns/header-nav-cta.php` and `patterns/blog-grid.php` to guarantee dynamic WordPress rendering. Ensure `core/navigation` has appropriate semantic fallback links, and `core/query` in `blog-grid.php` is configured with `postType: "post"`, `perPage: 3`, and valid inner `core/post-template` structure.
  - **Acceptance Criteria:**
    - Navigation block renders cleanly with mobile overlay and site title/logo.
    - Query block renders live posts from the database with featured image, date, title, and excerpt.
    - Zero console warnings or block recovery errors.
  - **Verification:** `npm run check && php .tests/e2e-patterns-test.php --only-existing`

- [ ] **Task 2: Alignment, Padding, & Container Cadence Audit**
  - **Description:** Verify all 9 sections in `patterns/landing-page.php` to ensure 100% alignment parity with the Figma artboard: alternating `base-subtle` and `base` background sections, `alignwide` containers constrained to 1320px, consistent `step-7` top/bottom section padding, and standardized border radii.
  - **Acceptance Criteria:**
    - All sections transition smoothly without misaligned margins or broken gutters.
    - Zero horizontal overflow on mobile viewports.
    - Correct typography pairings (*Quicksand* headings + *Courgette* decorative accents).
  - **Verification:** `node bin/lint-blocks.js && wp-scripts lint-style 'style.css'`

- [ ] **Task 3: Compose Front Page Template (`templates/front-page.html`)**
  - **Description:** Update `templates/front-page.html` so that it directly embeds the full WonderKids landing page experience out-of-the-box via `<!-- wp:pattern {"slug":"learnschool/landing-page"} /-->` wrapped in semantic `<main>`, bounded by the dynamic `header` and `footer` template parts.
  - **Acceptance Criteria:**
    - Visiting `/` in a fresh install immediately displays the complete Figma landing page.
    - Valid block AST with zero recovery issues.
    - Preserves compatibility for users editing via the Site Editor.
  - **Verification:** `node bin/lint-blocks.js && node .tests/gutenberg-e2e-validate.js`

- [ ] **Task 4: Full Quality Gate & Bundling Verification**
  - **Description:** Execute the entire verification suite (PHPCS, PHPStan Level 8, Stylelint, JSON schema validation, headless Gutenberg AST check) and generate the release zip.
  - **Acceptance Criteria:**
    - `npm run check` exits code 0.
    - `npm run test:patterns` exits code 0.
    - `npm run bundle` produces clean production zip.
  - **Verification:** `npm run bundle`
