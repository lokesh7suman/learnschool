# Implementation Plan: WonderKids Figma Landing Page to FSE Home Page

**Figma Design Reference:** [WonderKids Education Landing Page (Node 6:916)](https://www.figma.com/design/K9NrgOUFhmtaeitnbIBbOl/WonderKids-Education-Landing-page-UI-KIt---Paperpillar--Community-?node-id=6-916&p=f&t=HubpMp2yZU53MtXb-0)  
**Theme:** LearnSchool WordPress Block Theme (FSE)  
**Goal:** Deliver a pixel-accurate, 1:1 responsive homepage that assembles our existing curated patterns, maintains strict alignment and spacing cadences, uses native dynamic blocks for navigation and posts, and passes all architectural quality gates.

---

## 1. Architectural Architecture & Section Mapping

The Figma artboard (Node `6:916`) defines a cohesive educational homepage layout. We map each design section directly to our existing, production-ready block patterns and template parts:

| # | Figma Section (Node 6:916) | Pattern / Template Part | Core Blocks Used | Dynamic Behavior |
|---|-----------------------------|--------------------------|------------------|------------------|
| **0** | **Header & Navigation** | `parts/header.html`<br>↳ `patterns/header-nav-cta.php` | `core/site-logo`, `core/site-title`, `core/navigation`, `core/buttons` | **Dynamic:** Pulls site title, custom logo, and active WordPress navigation menu; responsive mobile overlay. |
| **1** | **Hero Section** | `patterns/hero-split-checklist.php` | `core/columns`, `core/heading`, `core/list`, `core/buttons`, `core/image` | Static curated copy + dynamic asset URIs; student card with vector star rating badge. |
| **2** | **Feature Pillars** | `patterns/features-cards.php` | `core/columns`, `core/group` (3 cards), `core/image`, `core/heading` | 3 pastel cards with doodle backgrounds & local SVG icons. |
| **3** | **Learning Materials** | `patterns/learning-materials-split.php` | `core/columns` (50/50), `core/list` (checkmarks), `core/image` | Split layout with student cutout, doodle accents, and checkmark list. |
| **4** | **Course Catalog** | `patterns/course-catalog.php` | `core/columns` (3 columns), `core/group` (equal height cards) | Age badges, duration tags, course cards, enrollment CTA. |
| **5** | **Teachers Spotlight** | `patterns/teachers-spotlight.php` | `core/columns` (asymmetric 45/55), `core/image` | Principal's welcome card + 2x2 grid of key faculty with round avatars. |
| **6** | **Testimonials** | `patterns/testimonials-cards.php` | `core/columns`, `core/quote`, `core/image` | Parent quotes, 5-star vector ratings, reviewer avatars. |
| **7** | **Parent FAQs** | `patterns/faq-two-column.php` | `core/columns`, `core/details` (or accordion cards) | 2-column Q&A addressing admissions, safety, and curriculum. |
| **8** | **School Blog & News** | `patterns/blog-grid.php` | `core/query`, `core/post-template`, `core/post-featured-image`, `core/post-title`, `core/post-date`, `core/post-excerpt` | **Dynamic:** Executes live `core/query` loop; automatically renders latest 3 posts from WordPress database with featured images and dates. |
| **9** | **Admissions Split CTA** | `patterns/call-to-action-split.php` | `core/columns` (32px radius card), `core/list`, `core/search` (email capture) | Left purple benefits with SVG checkmarks; right email capture with Phosphor `icon-lock.svg`. |
| **10** | **Footer** | `parts/footer.html`<br>↳ `patterns/footer-accreditation.php` | `core/columns` (4 columns), `core/site-logo`, `core/site-title`, `core/paragraph` | **Dynamic:** Site title, licensing badge, program anchor links, and copyright year. |

---

## 2. Alignment, Grid & Spacing Invariants

To guarantee exact visual parity with the Figma design:
1. **Outer Containers:** Every top-level section must use `alignfull` on `core/group` with alternating background colors (`base-subtle` $\leftrightarrow$ `base`) to create distinct visual zones without harsh dividers.
2. **Inner Content Boundaries:** Inner column wrappers must declare `alignwide` (compiled to `1320px` via `theme.json`) to keep content perfectly aligned across every section.
3. **Vertical Cadence:** Uniform section vertical padding:
   * Top/Bottom: `var:preset|spacing|step-7` (`clamp(3.5rem, 6vw, 5.5rem)`)
   * Left/Right: `var:preset|spacing|step-4` (`clamp(1rem, 2vw, 1.5rem)`)
4. **Card Geometry:** Standardized border radius tokens:
   * Outer split CTA container: `32px`
   * Feature & course cards: `24px`
   * Buttons & pill badges: `9999px` / `100px`

---

## 3. Dependency Graph & Implementation Order

```
┌─────────────────────────────────────────────────────────────┐
│ 1. Header & Footer Chrome (parts/header.html, footer.html)  │
└──────────────────────────────┬──────────────────────────────┘
                               │
┌──────────────────────────────▼──────────────────────────────┐
│ 2. Section Patterns Quality & Alignment Verification         │
│    - hero-split-checklist, features-cards, materials,       │
│      catalog, teachers, testimonials, faq                   │
└──────────────────────────────┬──────────────────────────────┘
                               │
┌──────────────────────────────▼──────────────────────────────┐
│ 3. Dynamic Components Verification                          │
│    - core/navigation in header                              │
│    - core/query in patterns/blog-grid.php                   │
└──────────────────────────────┬──────────────────────────────┘
                               │
┌──────────────────────────────▼──────────────────────────────┐
│ 4. Front Page Template Composition (templates/front-page)   │
│    - Direct pattern orchestration with zero HTML recovery   │
└──────────────────────────────┬──────────────────────────────┘
                               │
┌──────────────────────────────▼──────────────────────────────┐
│ 5. Automated Verification & E2E Validation                  │
│    - npm run check & npm run test:patterns                  │
└─────────────────────────────────────────────────────────────┘
```

---

## 4. Swarm Execution Plan

When launched, the swarm will divide work across focused roles with zero file collisions:

1. **`template_lead` (Workspace: share)**
   * Owns: `templates/front-page.html` and `patterns/landing-page.php`.
   * Composes the full sequence of sections, ensuring proper outer/inner wrappers, zero block invalidations, and clean semantics (`<main>`, `<section>`).
2. **`pattern_aligner` (Workspace: share)**
   * Owns: Section alignment verification across `patterns/hero-split-checklist.php`, `patterns/blog-grid.php`, `patterns/course-catalog.php`.
   * Verifies that all column widths, gutters (`blockGap`), and paddings match the 1320px wide grid.
3. **`dynamic_auditor` (Workspace: share)**
   * Owns: Dynamic blocks verification in `patterns/header-nav-cta.php` (`core/navigation`) and `patterns/blog-grid.php` (`core/query`).
   * Ensures query parameters (`inherit: false`, `perPage: 3`, `postType: "post"`) and navigation fallbacks operate reliably without database locks.
4. **`verifier` (Workspace: inherit)**
   * Runs `npm run check`, `npm run test:patterns`, and headless Gutenberg validation.
