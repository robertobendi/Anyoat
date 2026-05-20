# COLOUR REVIEW

## What I saw

No screenshots were captured (`review/` is empty), so this review reads
the CSS in `docs/index.html` as ground truth and computes contrast from
the declared hex values. The synthesiser should treat this as a
markup-level audit, not a pixel audit.

The full 8-colour brief palette is wired into `:root` at
`docs/index.html:24–33` exactly as `BRIEF.md § 3` specifies (manila
`#F0EBDE`, ink `#1F1D1A`, olive `#6E6E3C`, terracotta `#A8442B`,
mustard `#D9A036`, bottle `#2C4A3E`, charcoal `#4A453F`, coconut
`#FBF7EC`). Body surface is correctly set to manila (line 53), **not**
white. Olive is the dominant linework colour: it draws the hero
butterfly-roof SVG (lines 1097–1149), the plate plan illustrations, the
header monogram (`color: var(--olive)`, line 213), the form input
underlines (line 639), the primary button background (line 370), and
the compass icon. Terracotta does the rule work — the 4pt page-hero
rule (line 118), the 1pt plate caption rule (line 504), the link
underline colour (line 82), the SVG roofline strokes, and the
`box-shadow: 4px 4px 0 var(--terracotta)` on the primary button (line
379). Mustard is heavy on small UI: every eyebrow ("Section I —", line
108), the plate badge text (line 493), the 8×8 square markers, the
footer column headings, the hero sun disc, and the step/note-index
numerals. Bottle green appears only as the footer surface (line 536);
the homepage body never uses it. Coconut milk is the entire "Selected
work" section background (line 1191) and the inside of every plate
figure (line 479).

Computed contrast against manila `#F0EBDE` (L≈0.836): mustard
`#D9A036` (L≈0.403) gives ~**1.96 : 1**; against coconut `#FBF7EC`
(L≈0.929) mustard drops to ~**2.16 : 1**. Olive `#6E6E3C` (L≈0.148)
on manila is ~**4.47 : 1**. Terracotta on manila is ~**5.0 : 1**. Ink
on manila is ~16 : 1.

## Findings

### Ship blockers (must fix before publish)

- **Mustard eyebrow / section labels** — `docs/index.html:108` (`.eyebrow { color: var(--mustard) }`) rendered on manila `#F0EBDE` (body) and on coconut `#FBF7EC` (Selected-work section, line 1191) — `#D9A036` on `#F0EBDE` measures **1.96 : 1**, on `#FBF7EC` **2.16 : 1**, both at 0.8125rem (well below WCAG "large text"). Every section label on the homepage ("Section I — Anyo at Disenyo", "Section II — Folio", "Section III — The architect", "Section V — Inquiry") is informational text failing AA by a factor of two.
  → Repaint `.eyebrow` default to terracotta `#A8442B` (5.0 : 1) for informational labels, and keep mustard reserved for the genuinely decorative uses (folio numerals in the hero corner, sun disc, square markers).

- **Plate badge "Plate 01/02/03"** — `docs/index.html:489–503` (`.plate__badge { background: var(--manila); color: var(--mustard); font-size: 0.78rem }`) — mustard on manila at **1.96 : 1**, 0.78rem condensed caps. The badge is the only label that names which plate you're looking at; it must read at a glance and currently doesn't.
  → Switch badge text to ink `#1F1D1A` and keep the olive corner-border as the colour signature; or invert to mustard-fill background with ink text (mustard fill on ink would give >8 : 1).

### Important (should fix this revision pass)

- **Footer column headings** — `docs/index.html:563–571` (`.site-footer h3 { color: var(--mustard) }` on bottle `#2C4A3E`) computes **4.16 : 1** at 0.78rem 600 weight — below AA's 4.5 : 1 for small text. "Studio / Sections / Colophon" are the only nav labels in the footer.
  → Bump the footer h3 to manila `#F0EBDE` (8.1 : 1) and keep mustard for the square dividers and link hover only.

- **Primary button olive-on-manila** — `docs/index.html:370–372` (`.btn { background: var(--olive); color: var(--manila); font-size: 0.98rem }`) computes **4.47 : 1** — fails AA (4.5 : 1) by a hair at 15.7px / 500 weight. Visually fine but technically non-compliant; the hover state (ink bg) passes.
  → Either darken the resting background to ink `#1F1D1A` and use olive for hover, or thicken the button label to 600 weight + 1rem (lands in AA's 14pt-bold "large text" tier at 3 : 1).

- **Step number and note-index numerals** — `docs/index.html:851` (`.step__num { color: var(--mustard); background: var(--manila) }`) and `docs/index.html:771` (`.note-index .num { color: var(--mustard) }`) — both 0.78rem mustard on manila at **1.96 : 1**. The "01 / 02 / 03" stencils are the structural device of the Practice and Journal pages.
  → Set the numerals in terracotta `#A8442B` (5.0 : 1); they read as ink-on-paper stencils rather than washed-out marks.

- **Bottle green carries zero weight on the homepage above the footer** — `BRIEF.md § 3` puts bottle in the working palette for "caption rules, illustration shading, footer surface", and `Section 5 / Components` lists a `section--bottle` modifier (defined at `docs/index.html:414–417`) but the home long-scroll never instantiates it. The result is a hierarchy of warm tones (manila → coconut → manila) interrupted only at the footer — one of the brief's two "deep" anchors is dormant.
  → Either reskin the Inquiry strip in section--bottle (mustard rule, manila type, terracotta CTA) so the page closes on a deep ink before footer, or pull one plate-figure shade in bottle for visual rhythm.

### Nice to have (skip if budget tight)

- **Plate figure background = section background** — `.plate__figure { background: var(--coconut) }` (line 479) sits inside `<section style="background: var(--coconut)">` (line 1191). The inner figure has no surface contrast against the panel; only the 1pt olive border separates them. On a real screen this can read as a floating border instead of a discrete plate.
  → Repaint plate figures on the Selected-work section in manila `#F0EBDE` so they read as paper-on-coconut callouts.

- **Default `.hero__deck` is charcoal `#4A453F` on manila** — `docs/index.html:352`. The homepage hero overrides to `--ink` (line 1160), but every other page deck uses the default, computing ~7.4 : 1 — passes, but the warm-charcoal tone reads close enough to ink at body size that the charcoal/ink distinction the brief draws between body and meta gets lost. Consider promoting deck copy on inner pages to ink and reserving charcoal strictly for sub-credit lines.

- **Paper-grain overlay opacity** — `docs/index.html:44` declares the noise SVG with `feColorMatrix` alpha 0.55 and rect `opacity='0.45'` → effective ~22% noise tile, vs the brief's stated 4% overlay (`BRIEF.md § 5 Decorative system`). Without screenshots I can't confirm whether this reads as paper grain or as a muddier, dirtier surface; if it does mute the manila toward grey, the whole "three inks on cream" premise softens.

- **Tagalog terracotta accent in `.what-we-do__lhs`** — `docs/index.html:1011` (`color: var(--terracotta)`). Computes ~5.0 : 1 — fine — but only **one** of the three lines ("Liwanag.") is in terracotta. The pattern is half-stated. Either set all three Tagalog words in terracotta as a deliberate three-ink rhythm or step back to a single-word emphasis with a clearer hierarchy.

## Summary for the synthesiser

The palette wiring is faithful and all eight brief colours are used, but mustard `#D9A036` is repeatedly painted as the colour of informational small-caps (every section eyebrow, plate badge, step number, footer heading) where it sits at ~2 : 1 on cream and ~4.16 : 1 on bottle green — the build's most visible UI labels fail WCAG AA, and the fix is to demote mustard back to its decorative role (sun disc, square markers, folio numerals) and let terracotta carry the labels.
