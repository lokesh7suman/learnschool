---
name: "LearnSchool Design System"
description: "A playful, high-fidelity Full Site Editing block theme for schools, academies, and children's e-learning platforms."
colors:
  primary: "#704fe6"
  primary-dark: "#5837c7"
  primary-light: "#dec8fe"
  secondary: "#ffbe17"
  secondary-dark: "#b45309"
  accent: "#ffd25d"
  surface: "#ffffff"
  surface-slate: "#f8fafc"
  base-subtle: "#f8f9fa"
  midnight: "#1a162b"
  contrast: "#121212"
  contrast-subtle: "#4b5563"
  border: "#e2e8f0"
  success: "#16a34a"
  error: "#dc2626"
  warning: "#fef3c7"
  warning-text: "#92400e"
  success-light: "#dcfce7"
  rose-light: "#fce7f3"
  rose: "#db2777"
typography:
  display:
    fontFamily: "\"Quicksand\", \"Plus Jakarta Sans\", system-ui, sans-serif"
    fontSize: "4.75rem"
    fontWeight: 700
    lineHeight: 1.1
    letterSpacing: "-0.03em"
  headline:
    fontFamily: "\"Quicksand\", \"Plus Jakarta Sans\", system-ui, sans-serif"
    fontSize: "3.75rem"
    fontWeight: 700
    lineHeight: 1.2
    letterSpacing: "-0.02em"
  title:
    fontFamily: "\"Quicksand\", \"Plus Jakarta Sans\", system-ui, sans-serif"
    fontSize: "1.75rem"
    fontWeight: 700
    lineHeight: 1.25
  body:
    fontFamily: "\"Quicksand\", \"Plus Jakarta Sans\", system-ui, sans-serif"
    fontSize: "1.125rem"
    fontWeight: 400
    lineHeight: 1.65
  label:
    fontFamily: "\"Quicksand\", \"Plus Jakarta Sans\", system-ui, sans-serif"
    fontSize: "0.75rem"
    fontWeight: 700
    lineHeight: 1.4
    letterSpacing: "0.1em"
rounded:
  sm: "12px"
  md: "16px"
  lg: "20px"
  xl: "24px"
  arch: "120px 120px 24px 24px"
  pill: "9999px"
spacing:
  step-1: "0.5rem"
  step-2: "0.75rem"
  step-3: "1rem"
  step-4: "1.5rem"
  step-5: "2rem"
  step-6: "3rem"
  step-7: "4.5rem"
  step-8: "6rem"
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface}"
    rounded: "{rounded.pill}"
    padding: "0.5rem 0.875rem 0.5rem 1.5rem"
  button-primary-hover:
    backgroundColor: "{colors.primary-dark}"
    textColor: "{colors.surface}"
    rounded: "{rounded.pill}"
  button-secondary:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.contrast}"
    rounded: "{rounded.pill}"
    padding: "0.5rem 0.875rem 0.5rem 1.5rem"
  button-outline:
    backgroundColor: "transparent"
    textColor: "{colors.primary}"
    rounded: "{rounded.pill}"
    padding: "0.5rem 0.875rem 0.5rem 1.5rem"
  card-standard:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.contrast}"
    rounded: "{rounded.xl}"
    padding: "2rem"
  card-arch:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.contrast}"
    rounded: "{rounded.arch}"
    padding: "2rem"
---

# Design System: LearnSchool

## Overview

**Creative North Star: "The Nurturing Studio"**

LearnSchool balances academic rigor and institutional credibility with joyful, reassuring warmth. Designed specifically for early-childhood institutions, modern academies, and creative education platforms, the visual world replaces cold institutional sterility with open, human-centered spaces. Geometric rounded sans-serif typography establishes clarity, while calligraphic brush flourishes and playful doodle underlines signal curiosity, individuality, and personal care.

The interface maintains a calm, breathable reading rhythm through generous fluid spacing, pill-shaped action surfaces, and soft atmospheric shadows. High-contrast pill buttons with directional arrow badges create an immediate, tactile sense of momentum, guiding busy parents and prospective students smoothly through milestones without cognitive friction.

**Visual Anti-References:**
The system strictly rejects cold, corporate SaaS conventions (sharp rectangular grey cards, dark monotone dashboards, Inter/Roboto stacks) while equally avoiding chaotic, cartoonish nursery clichés (harsh primary red/yellow/blue combinations, messy crayon textures, low-contrast pastel-on-pastel text). It maintains the elevated, trustworthy posture of a world-class educational academy.

**Key Characteristics:**
- **Warm Geometric Typography:** Quicksand rounded geometric sans-serif paired with selective Courgette cursive flourishes.
- **Tactile Pill Surfaces:** 9999px pill buttons with circular directional arrow badges (`↗`) and 80px pill FAQ accordions.
- **Architectural Arch Silhouettes:** Signature 120px arched cards and frames evoking classical atelier doorways.
- **Atmospheric Tinted Depth:** Violet- and gold-tinted ambient shadows (`rgba(112, 79, 230, 0.08)`) with zero harsh black drop shadows.
- **Hand-Crafted Text Doodles:** Vector SVG wavy lines, loops, and brush highlights celebrating key emotional words.

## Colors

The palette establishes an emotional balance between trustworthy authority (WonderKids Purple), optimistic achievement (Sunny Gold), and calm, readable surfaces (Charcoal & Crisp White).

### Primary
- **WonderKids Purple** (`#704fe6`): The primary brand anchor. Used for principal calls-to-action, active interactive states, key iconography, and prominent section accents. Communicates wisdom, trust, and creative exploration.
- **Deep Purple** (`#5837c7`): Focused hover and pressed state for primary action surfaces; provides tactile feedback with deepened optical weight.
- **Lilac Mist** (`#dec8fe`): Soft ambient wash used for tinted container backgrounds, pill badge borders, and subtle decorative accents.

### Secondary
- **Sunny Gold** (`#ffbe17`): The catalyst of joy, achievement, and curiosity. Used for rating stars, feature tags, secondary highlight pills, and celebratory flourishes.
- **Warm Amber** (`#b45309`): High-contrast grounding text color for elements resting on sunny gold or warm pastel backgrounds to guarantee WCAG AA readability.
- **Pastel Yellow** (`#ffd25d`): Gentle luminous yellow for secondary badge surfaces, soft pill glows, and organic doodle highlights.

### Neutral
- **Charcoal Ink** (`#121212`): High-contrast primary text color for headlines and body copy. Delivers razor-sharp legibility with softer eye fatigue than pure `#000000`.
- **Muted Slate Gray** (`#4b5563`): Secondary text color for meta descriptions, publication dates, teacher credentials, and supporting captions.
- **Base Subtle / Off-White** (`#f8f9fa`): Soft paper-like canvas for alternating section backgrounds, preventing stark optical glare on large monitors.
- **Surface White** (`#ffffff`): Pure crisp white for elevated cards, modal panels, and primary reading cards.
- **Midnight Navy** (`#1a162b`): Deep cosmic navy reserved for grounding surfaces (footers, trust bands, newsletter subscription ribbons).
- **Soft Cloud Border** (`#e2e8f0`): 1px structural stroke for subtle card definition and divider rules.

### Feedback & Accent
- **Success Green** (`#16a34a`) & **Soft Mint** (`#dcfce7`): Accreditation badges, open enrollment statuses, and checkmarks.
- **Alert Red** (`#dc2626`): Form validation errors and critical deadline notices.
- **Studio Pink** (`#db2777`) & **Rose Light** (`#fce7f3`): Creative activity tags and art program indicators.

### Named Rules
**The 10% Spark Rule.** Sunny Gold (`#ffbe17`) is never used for entire page backgrounds or long-form body copy. It serves strictly as an energetic catalyst (badges, stars, highlights, secondary buttons) occupying ≤10% of any given viewport. Its rarity gives it value.

**The Ink and Paper Rule.** All core editorial reading occurs on pure white (`#ffffff`) or gentle off-white (`#f8f9fa`) with Charcoal Ink (`#121212`). Dark midnight navy (`#1a162b`) is reserved strictly for structural grounding bookends (footers, full-width trust ribbons).

## Typography

**Display & Headline Font:** Quicksand (Variable WOFF2, weights 300–700; fallbacks: Plus Jakarta Sans, system-ui, sans-serif)
**Body & Interface Font:** Quicksand (weights 400, 600)
**Flourish & Script Accent:** Courgette (WOFF2 regular 400; fallbacks: Brush Script MT, cursive)

**Character:** Quicksand's open circular geometry and gently softened terminal endings deliver immediate warmth, approachability, and high legibility. Courgette adds an authentic human signature—evoking the encouraging handwriting of a dedicated educator.

### Hierarchy
- **Display** (`700`, `clamp(2.75rem, 5vw, 4.75rem)`, `1.1`, letter-spacing `-0.03em`): Hero banner headlines. Drives immediate brand wonder.
- **Headline / H2** (`700`, `clamp(2.25rem, 3.5vw, 3.75rem)`, `1.2`, letter-spacing `-0.02em`): Major section landmarks (Admissions, Programs, Daily Rhythm).
- **Title / H3** (`700`, `clamp(1.375rem, 2vw, 1.75rem)`, `1.25`): Feature card titles, program modules, faculty names (28px max).
- **Subtitle / H4** (`700`, `clamp(1.25rem, 1.5vw, 1.5rem)`, `1.3`): Minor group headings, curriculum highlights (24px max).
- **Subheading / H5** (`700`, `1.125rem`, `1.4`): Compact card headings, tabular item headers (18px).
- **Eyebrow / H6** (`700`, `0.75rem`, `1.4`, letter-spacing `0.1em`, uppercase): High-contrast section kicker badges (12px).
- **Body / Paragraph** (`400`, `clamp(1rem, 0.4vw + 0.9rem, 1.125rem)`, `1.65`): Long-form text. Optimal line measure is 55–70ch.
- **Script Accent** (`400`, `inherit size`, `inherit line-height`): Highlighted words inside headlines using `<span class="learnschool-script">`.

### Named Rules
**The One Accent Rule.** Courgette script flourishes (`<span class="learnschool-script">`) must highlight at most 1–2 emotional keywords per headline (e.g., "Where *Curiosity* Meets *Care*"). It must never be applied to body paragraphs, button labels, navigation links, or data tables.

**The Faux-Bold Guard Rule.** Courgette cursive is a single-weight typeface (400 Regular). Never wrap script spans inside `<strong>` or `<b>` tags without explicit `font-weight: 400` styling, protecting its delicate calligraphic brush strokes from synthetic browser distortion.

## Layout

LearnSchool employs a fluid, container-governed grid system designed to scale gracefully from compact 375px mobile viewports up to expansive 1440px desktop screens.

- **Content Constraint:** `780px` centered column for long-form narrative prose, blog articles, and policy documents, maintaining ideal typographic reading measures.
- **Wide Container:** `1320px` maximum width with fluid side padding (`var:preset|spacing|step-4`), accommodating multi-column card clusters, interactive programs, and split showcases.
- **Spacing Scale:** Built on eight mathematical fluid steps in `theme.json`:
  - `step-1` (8px): Icon gap, badge padding.
  - `step-2` (12px): Pill button vertical padding, tag margins.
  - `step-3` (16px): Compact card internal padding, list item gaps.
  - `step-4` (24px): Standard block gap, card interior padding.
  - `step-5` (32px): Sub-section grouping gap.
  - `step-6` (48px): Section rhythm separator on tablet/mobile.
  - `step-7` (72px): Standard desktop section padding.
  - `step-8` (96px): Landmark hero and showcase padding.

## Elevation & Depth

Depth in LearnSchool is atmospheric and luminous rather than mechanical. Instead of harsh grey drop shadows, surfaces float on soft, tinted ambient halos that mimic natural daylight filtered through sheer curtains.

### Shadow Vocabulary
- **Soft Pill Shadow (`card`)** (`0 10px 30px -5px rgba(112, 79, 230, 0.08), 0 4px 6px -2px rgba(112, 79, 230, 0.04)`): The standard resting elevation for program cards, faculty cards, and testimonial containers.
- **Elevated Hover Shadow (`elevated`)** (`0 20px 40px -10px rgba(18, 18, 18, 0.1), 0 8px 10px -4px rgba(18, 18, 18, 0.04)`): Applied dynamically on hover states (`transform: translateY(-4px)`), providing a responsive, buoyant lift.
- **Gold Glow Shadow (`gold`)** (`0 12px 28px -4px rgba(255, 190, 23, 0.2)`): Specialized radiance for gold pill action buttons and standout enrollment triggers.

### Named Rules
**The Tinted Ambient Rule.** Shadows on light surfaces are tinted with brand violet or warm amber; pure monochromatic black (`rgba(0,0,0,...)`) is forbidden on primary surfaces. This prevents muddy, dingy edges and preserves vibrant cleanliness.

**The Buoyant State Rule.** Elevation change must always couple shadow expansion with a subtle optical lift (`transform: translateY(-2px)` to `-4px`). Shadows never spread without spatial movement.

## Shapes

The theme's form language is defined by pill geometries, generous 24px rounded corners, and historic architectural arch silhouettes that evoke classical academy doorways.

- **Full Pill (`9999px`):** Primary buttons, skip links, search inputs, status badges, and age-group pills. Eliminates harsh corners entirely from interactive triggers.
- **Soft Card Radius (`24px`):** Universal boundary for cards, testimonial clusters, image frames, and table wrappers.
- **Architectural Arch Silhouette (`120px 120px 24px 24px`):** Applied via `.is-style-learnschool-card-arch` to give featured program cards and spotlight photography a distinctive editorial silhouette.
- **Pill Accordion (`80px`):** Distinctive pill-shaped boundaries for FAQ `<details>` items.
- **Hand-Drawn Vector Doodles:**
  - `underline-wavy.svg`: Playful hand-drawn lavender wave beneath emphasized words.
  - `underline-loop.svg`: Whimsical yellow loop flourish emphasizing joyful adjectives.
  - `highlight-brush.svg`: Organic watercolor oval enclosing key milestones.

## Components

### Buttons
All action buttons share a generous pill geometry (`border-radius: 9999px`), a 54px minimum touch target height, and a circular directional arrow badge (`↗`).
- **Solid Purple Pill (`.is-style-learnschool-pill`):** Primary action trigger. Background `#704fe6`, text `#ffffff`. Features a 34px circular arrow badge (`background: rgba(255,255,255,0.2)`). On hover: shifts to `#5837c7`, lifts `-2px`, and arrow badge translates `translate(2px, -2px)`.
- **Sunny Gold Pill (`.is-style-learnschool-gold-pill`):** High-priority admission CTA. Background `#ffbe17`, text `#121212`. Hover state deepens to `#e0a614` with ambient gold glow.
- **Outline Purple (`.is-style-learnschool-outline`):** Secondary action trigger. Border `1.5px solid #704fe6`, transparent background, purple text. On hover: fills with `#704fe6` and inverts text to white.

### Cards / Containers
- **Standard Card (`.is-style-learnschool-card`):** Pure white background (`#ffffff`), `24px` border radius, `card` shadow preset, 32px internal padding. On hover: lifts `translateY(-4px)` with deepened elevation shadow.
- **Arch Card (`.is-style-learnschool-card-arch`):** Features the signature `120px 120px 24px 24px` radius, framing content like a gallery window.
- **Glass Card (`.is-style-learnschool-glass`):** Translucent backdrop (`rgba(255, 255, 255, 0.75)` with `backdrop-filter: blur(12px)`), bordered by a 1px soft white stroke (`rgba(255, 255, 255, 0.3)`).
- **Tinted Card (`.is-style-learnschool-tinted`):** Light lilac wash (`rgba(112, 79, 230, 0.05)`) with a 1px border in `#dec8fe`.

### Lists
- **Playful Checkmark List (`.is-style-learnschool-checkmarks`):** Unordered lists with default bullets replaced by 22px circular SVG checkmarks (`#704fe6`). Line height set to `1.6` with `32px` left padding to ensure perfect vertical alignment between icon and text.

### Accordions / FAQ
- **FAQ Pill (`.is-style-learnschool-faq-pill`):** Pill-bordered `<details>` container (`80px` radius, 24px × 32px padding). On open or hover: expands smoothly, highlighting border in `#704fe6` with soft card shadow.

## Do's and Don'ts

### Do:
- **Do** declare all colors, typography sizes, and spacing steps strictly in `theme.json` v3.
- **Do** wrap calligraphic accents in `<span class="learnschool-script">` and keep them strictly to 1–2 keywords per headline.
- **Do** ensure all interactive buttons meet the minimum 44px tap target height (LearnSchool defaults to 54px).
- **Do** synchronize block comment JSON attributes with inner HTML classes in all `patterns/*.php` and `templates/*.html`.
- **Do** use `assets/styles/core-<block-name>.css` for modular block CSS, auto-enqueued conditionally via `wp_enqueue_block_style()`.
- **Do** pair every hover elevation lift (`translateY`) with a matching smooth `transition: transform 0.2s ease, box-shadow 0.2s ease`.

### Don't:
- **Don't** write utility classes or color overrides in `style.css` for properties supported natively by `theme.json`.
- **Don't** use `!important` in theme stylesheets.
- **Don't** apply Courgette script font to entire sentences, paragraphs, or navigation links.
- **Don't** use harsh monochromatic black shadows (`rgba(0,0,0,0.25)`); use tinted ambient halos (`rgba(112, 79, 230, 0.08)`).
- **Don't** create identical 3-column card walls with generic geometric sans icons; vary density, card heights, or introduce arch silhouettes.
- **Don't** use external font CDNs or system/OS emojis (🔒, ⭐, 🚀); use self-hosted WOFF2 and vector SVGs.
