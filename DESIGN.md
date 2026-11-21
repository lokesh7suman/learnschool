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

<!-- impeccable:design-map -->
Name: LearnSchool Design System
Colors: primary: primary #704fe6; secondary: secondary #ffbe17; neutral: surface #ffffff; accent: success #16a34a; primary: primary-dark #5837c7; primary: primary-light #dec8fe (+9 more in the sidecar)
Fonts: Quicksand (display, headline, title, body, label)
Spacing: step-1 0.5rem, step-2 0.75rem, step-3 1rem, step-4 1.5rem, step-5 2rem, step-6 3rem, step-7 4.5rem, step-8 6rem
Radius: sm 12px, md 16px, lg 20px, xl 24px, arch 120px 120px 24px 24px, pill 9999px
North Star: "The Nurturing Studio"
Rules:
- The 10% Spark Rule. Sunny Gold (`#ffbe17`) is never used for entire page backgrounds or long-form body copy.
- The Ink and Paper Rule. All core editorial reading occurs on pure white (`#ffffff`) or gentle off-white (`#f8f9fa`) with Charcoal Ink (`#121212`).
- The One Accent Rule. Courgette script flourishes (`<span class="learnschool-script">`) must highlight at most 1–2 emotional keywords per headline (e.g., "Where *Curiosity* Meets *Care*").
- The Faux-Bold Guard Rule. Courgette cursive is a single-weight typeface (400 Regular).
- The Tinted Ambient Rule. Shadows on light surfaces are tinted with brand violet or warm amber; pure monochromatic black (`rgba(0,0,0,...)`) is forbidden on primary surfaces.
- (+1 more)
Elevation:
- Soft Pill Shadow (`card`): 0 10px 30px -5px rgba(112, 79, 230, 0.08), 0 4px 6px -2px rgba(112, 79, 230, 0.04)
- Elevated Hover Shadow (`elevated`): 0 20px 40px -10px rgba(18, 18, 18, 0.1), 0 8px 10px -4px rgba(18, 18, 18, 0.04)
- Gold Glow Shadow (`gold`): 0 12px 28px -4px rgba(255, 190, 23, 0.2)
Don't:
- Don't write utility classes or color overrides in `style.css` for properties supported natively by `theme.json`.
- Don't use `!important` in theme stylesheets.
- Don't apply Courgette script font to entire sentences, paragraphs, or navigation links.
- Don't use harsh monochromatic black shadows (`rgba(0,0,0,0.25)`); use tinted ambient halos (`rgba(112, 79, 230, 0.08)`).
- Don't create identical 3-column card walls with generic geometric sans icons; vary density, card heights, or introduce arch silhouettes.
- Don't use external font CDNs or system/OS emojis (🔒, ⭐, 🚀); use self-hosted WOFF2 and vector SVGs.
Map: theme.json
Map: style.css
Full: .impeccable/design-full.md (read a section when you need its detail)
