# GRAPHIC DESIGNER REVIEW

## What I saw

**Screenshots absent.** No `review/screenshot-*.png` files exist on this machine, so every observation below is projected from `docs/index.html` markup + computed CSS, not from rendered pixels. The synthesiser should weight this lens accordingly. If a true render is available later, the hero buttons / nested-em behaviour calls below should be re-verified visually.

What the markup commits to (projecting): a 12-column hero where cols 1–7 carry an inline-SVG butterfly-roof bungalow in olive (`#6E6E3C`) 2pt linework over a calamansi-mustard sun disc (radius 62, fill `#D9A036`) sitting top-left of the roof line, with terracotta-filled jalousie patterns on the windows and a "FIG. 01 — BUTTERFLY ROOF · BATANGAS BUNGALOW · 2pt OLIVE" plate caption baked into the SVG (`docs/index.html:1151`). Cols 8–12 stack: a Khand mustard eyebrow `Folio 01 / 2026 · Section I` at 0.8125rem / 0.16em tracking (`docs/index.html:1158`), a Recoleta 500 italic H1 with the words `Bahay,` / `anyo,` / `<em>hangin.</em>` hard-broken across three lines at `clamp(2.75rem, 6vw + 0.5rem, 5.5rem)` / line-height 0.96 (`docs/index.html:339, 1159`), a Sentient deck at 1.0625rem in india ink, then a primary "Make an inquiry" pill button (olive fill, 4×4px terracotta hard shadow) followed by a ghost "See the folio" link (`docs/index.html:1161-1165`). The hero terminates in a 4px terracotta rule full-container-width (`docs/index.html:1168`). Body sits on Manila (`#F0EBDE`) with a 4% tiled noise SVG grain. Container is capped at 1180px with 24px gutters and `clamp(20px, 4vw, 64px)` page gutter.

## Findings

### Ship blockers (must fix before publish)

- **Hero CTAs** — `docs/index.html:1161-1165` — Brief § 4 ("3-line Sentient deck, no buttons") and per-page Home § 2 ("3-line Sentient deck, no buttons") *explicitly* exclude buttons from the hero; Fingerprint #1 names only folio eyebrow + H1 + deck for cols 8–12. The build ships **two** CTAs in the hero column (an olive pill with a 4px terracotta drop-shadow + a ghost "See the folio"). This is the layout signature's identity moment — the print-monograph register the direction was picked to win — and tacking a SaaS-style hero pill onto it collapses the signature back toward the centred-hero-with-button pattern the brief listed as "What NOT to do" item #1. The pill's 4px terracotta hard-shadow (`box-shadow: 4px 4px 0 var(--terracotta)`, `docs/index.html:379`) is a separate stylistic register from "printed in three inks on manila paper" — it imports an Are.na/Memphis sticker idiom into the one composition the brief asked to be quiet.
  → Remove both anchors from `.hero__text`; the inquiry strip at the bottom of the page already carries the conversion ask, exactly as the brief planned.

### Important (should fix this revision pass)

- **H1 nested `<em>` collapses italic→upright on "hangin."** — `docs/index.html:1159` (`<em>hangin.</em>` inside an already-italic `.hero__h1`) — Default browser behaviour for `em` nested inside italic is to render upright as inversion-emphasis. The strip-phrase at `docs/index.html:1344` does the same trick deliberately on "anyo" — but if the hero H1's third line "hangin." renders upright while "Bahay" and "anyo" stay italic, the headline's typographic rhythm breaks at the punchline word, and the two compositions read inconsistently (strip emphasises middle word; hero emphasises last word). Pick one: either drop the `<em>` in the hero so all three lines stay italic, or wrap "anyo" in `<em>` consistently across both compositions.
  → Either delete the `<em>` from the H1 or move it onto "anyo" to match the strip phrase.

- **"What we do" bilingual triad rendered italic, brief says unitalicised** — `docs/index.html:1177-1181` (the `.what-we-do__lhs` stack `Hangin. / Liwanag. / Lilim.`) — Brief § 3 voice spec: "occasional Tagalog phrases sitting bare on their own line ('Hangin. Liwanag. Lilim.') and **never italicised**." The CSS at `docs/index.html:1005` applies `font-style: italic` to the whole `.what-we-do__lhs` block, so all three Tagalog words render in Recoleta italic. The page's most direct bilingual signature word-stack ships in exactly the style the brief forbade.
  → Set `.what-we-do__lhs { font-style: normal; }` (keep Recoleta the display face, drop the italic) and let the terracotta tint on "Liwanag." carry the accent.

- **Plate caption credits split into three lines instead of the brief's one Khand mono-caps line** — `docs/index.html:1226-1228` (and Plates 02/03) — Brief Fingerprint #5: "credit set in Khand 600 condensed all-caps at 0.8125rem with 0.16em tracking ('PLATE 03 — CASA M., LIPA, 2024')" — i.e. one compact Khand line. Build ships: a `.plate__credit` ("PLATE 01 — CASA M.") + a `.plate__title` in Recoleta italic 1.45rem ("Single-bay house with a butterfly roof.") + a second muted `.plate__credit` ("LIPA, BATANGAS · RESIDENTIAL · 2024"). Three text blocks per plate dilutes the printed-plate-card density the brief named as a fingerprint; the figcaption now reads like a blog card, not a folio plate.
  → Collapse to one Khand line ("PLATE 01 — CASA M., LIPA, 2024") and either move the italic Recoleta title above the figure as an *intra-plate title* or drop it on the home overview (keep it on `/work`).

- **Home "Section III — The architect" grid skips column 5** — `docs/index.html:1318, 1331` — Brief § Per-page Home § 5: "olive line-portrait or compass illustration in **columns 1–4** and copy in **columns 5–12**." Build sets the illustration `grid-column: 1 / span 4` and the body `grid-column: 6 / span 7`, leaving column 5 visibly empty. The result on desktop is an unbalanced gap-then-text block where the brief expected a tighter 4 + 8 division. It also subtly contradicts the hero's 7+5 logic — the page would feel more composed if Section III mirrored the hero's asymmetry inversely (4 illustration | 8 copy) instead of (4 illustration | 1 air | 7 copy).
  → Change `grid-column: 6 / span 7` to `grid-column: 5 / span 8`.

### Nice to have (skip if budget tight)

- **Sun disc placed up-and-left of the bungalow, not directly above** — `docs/index.html:1095` (`<circle cx="148" cy="118" r="62" fill="#D9A036"/>` vs the bungalow body at x≈240–640) — Brief § 2 and § 5 both say "a mustard sun disc **above** [the bungalow]"; the SVG hangs the sun in the upper-left quadrant, well to the left of the roof apex (x≈440). Compositionally it works as a Push Pin morning-sun gesture, but a sun centred on the roof's axis would tighten the hierarchy and make the mustard disc feel like the page's true accent point rather than a stray planet.
  → Move `cx` from 148 to ~440 (over the roof apex), keep the radius.

- **Footer logo treatment looks placeholder vs the inline-SVG monogram elsewhere** — `docs/index.html:1361` (`<img class="site-footer__logo" src="/uploads/logo.jpg" ...>`) — Header uses the traced inline-SVG monogram (a/d ribbon, recolourable), which is the brief's commitment. Footer drops back to a 72×72 bitmap of the Facebook OG image, bordered in mustard against manila — a visibly raster moment in an otherwise vector page. The print-monograph register asks for the same SVG mark recoloured onto bottle-green.
  → Reuse the `.brand__mark` SVG in the footer, set `color: var(--manila)` so the monogram reads in paper white against bottle green.

- **Vertical right-gutter folio hidden below 1300px viewport** — `docs/index.html:179-181` — Fingerprint #7 says "Folio numbers are set vertically up the rightmost gutter on **every primary page**"; the build only shows it above 1300px viewport width. A 1280×800 laptop — common for the diaspora audience — never sees the device. Either shrink the trigger to ≥1180px (the container width), or anchor the vertical folio to the container edge instead of the viewport edge so it can ride along on narrower laptops.
  → Drop the breakpoint to `@media (min-width: 1180px)` and clamp it to the container, not `position: fixed`.

## Summary for the synthesiser

The asymmetric 12-column layout signature lands on the page, but the hero's two CTA buttons (explicitly forbidden by Brief §4 and Fingerprint #1) drag the composition out of the print-monograph register the whole direction was picked to defend — strip them and the page recovers its signature in one edit.
