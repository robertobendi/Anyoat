# REVIEW

## Visual evaluation

### What I saw

**Screenshots are absent from `review/`** — no `screenshot-*.png` files exist, and all five role reviewers explicitly noted the same. Every visual judgment below is reconstructed from `docs/index.html` markup, the inline `<style>` block, and the inline SVGs, not from rendered pixels. The synthesis weights accordingly: structural and contrast claims (computable from CSS hex + WCAG math) are high confidence; "where the eye lands" is necessarily projected.

What the markup commits to: a manila-paper page (`#F0EBDE`) with a tiled noise overlay, opening on a 12-column asymmetric hero — columns 1–7 carry a 2pt olive butterfly-roof bungalow SVG with a mustard sun disc up-and-left of the roofline, terracotta jalousie pattern fills, and a banaba tree at left; columns 8–12 stack a mustard Khand eyebrow ("Folio 01 / 2026 · Section I"), a three-line italic Recoleta H1 ("Bahay, / anyo, / *hangin.*"), a charcoal Sentient deck, and — against brief — two CTA anchors (olive pill with 4×4 terracotta hard-shadow + a ghost "See the folio"). A 4pt terracotta rule terminates the hero. Below: an italic Tagalog triad against two-paragraph body prose, a coconut-milk "Selected work" band with three SVG plate illustrations, a "Section III — The architect" with the body block starting at column 6 (leaving column 5 visibly empty), and a Manila inquiry strip with a single olive CTA. Footer is full-bleed bottle green with a 72×72 raster `logo.jpg` and mustard column headings.

### Visual pass/fail checks

- **No clipped or colliding content** — PASS (markup-derived). `min-width: 0` is set on every grid track, `overflow-x: hidden` is on `body`, the vertical folio is shown only above 1300px viewport, and no `position: absolute` decorative stamps sit over body copy. Verify against the eventual screenshot.
- **Logo visible in header** — PASS. The header includes an inline-SVG `.brand__mark` (lines 1057–1062) plus a Recoleta italic wordmark "ANYO at DISENYO" with a Khand "Architectural Services" sub-mark beneath.
- **First-glance family recognizable** — PASS. The asymmetric 12-col grid, 2pt olive line-drawing of a Batangueño bungalow, Khand-mustard folio eyebrow, italic Recoleta H1, terracotta hero rule, and Manila grain together commit to the print-monograph register the brief named.
- **Decorative system visible** — PASS. Three motifs land: 2pt olive line-illustrations (hero bungalow + three plate illustrations + compass), 4pt terracotta hero rule + 1pt caption rules, 8×8 mustard square markers (eyebrow, list).
- **Source imagery placed** — PASS (minimal). `source/images/` contains only `og-image.jpg` + `favicon.ico` (no project photos existed to place); `og-image.jpg` is used as the footer logo bitmap and as the social meta image.
- **Mobile holds** — PASS (markup-derived). Media queries collapse the 12-col grid to single-column at ≤820px, the hamburger menu reveals at the same breakpoint, the brand-row tucks, and `font-size: 16px` on form inputs prevents iOS zoom. Verify against `screenshot-home-mobile.png`.

## Council consolidation

- **Designer**: Hero ships two CTAs that Brief § 4 + Per-page Home § 2 + Fingerprint #1 explicitly forbid; the Tagalog triad "Hangin. Liwanag. Lilim." renders italic despite the brief's "never italicized" voice rule; plate captions split into three lines instead of the one-line Khand credit the fingerprint names.
- **UX**: Phone number is placeholder `+63 917 000 0000`, principal is anonymous across all pages, and the home page hands the visitor zero verifiable facts (no phone, address, license, testimonial, real photo) — the build is art-directed for an objective (qualified inquiry from trust-needing clients) it does not actually serve.
- **UI**: Mobile interaction is the soft spot — the `.btn--ghost` secondary CTA is ~16px tall (well below 44×44 baseline), the inquiry radio row has no min-height on labels, and required form fields carry no visible asterisk or cue.
- **Colour**: Mustard `#D9A036` is repeatedly used as informational small-caps colour where it sits at 1.96:1 on Manila and 2.16:1 on Coconut — every section eyebrow, plate badge, step number, and footer heading fails WCAG AA; demote mustard to its decorative role and let terracotta carry the labels.
- **Programmer**: Every internal `href="/work"` / `/practice` / `/journal` / `/inquiry` 404s on a vanilla static host because the files are `work.html` etc. with no rewrite layer; `sitemap.xml` and `robots.txt` still ship `http://127.0.0.1:64865/`; the form posts to a non-existent `/forms/contact`; all five pages share byte-identical OG meta titled "Anyoat" (the brand is "Anyo at Disenyo").

## Prioritised findings

### Must fix (revision will close these)

- **Site-wide internal links** — `docs/index.html:1073-1076, 1162, 1164, 1198, 1349` and equivalents across `work.html`, `practice.html`, `journal.html`, `inquiry.html` — every `href` uses extensionless `/work`, `/practice`, `/journal`, `/inquiry`, `/`, but the exported files are `work.html` etc. with no rewrite layer; primary nav, every CTA, the brand link, and the form all 404 on a static host — rewrite every internal href to the actual filename (`work.html`, `index.html`, etc.).
- **Hero CTAs violate fingerprint #1** — `docs/index.html:1161-1165` — the hero ships an olive pill button with a 4×4 terracotta hard-shadow + a ghost "See the folio" link in `.hero__text`; Brief § 4, Per-page Home § 2, and Fingerprint #1 list only folio eyebrow + H1 + deck in cols 8–12 with "no buttons", and the 4×4 hard-shadow imports an Are.na sticker register into the print-monograph composition — remove both anchors from `.hero__text` and let the inquiry strip carry conversion.
- **Mustard small-caps fail WCAG AA across the build** — `docs/index.html:108` (`.eyebrow`), `:489-503` (`.plate__badge`), `:563-571` (footer h3 on bottle), `:851` (step num), `:771` (note-index num) — `#D9A036` on `#F0EBDE` is 1.96:1, on `#FBF7EC` is 2.16:1, on `#2C4A3E` is 4.16:1, all at 0.78–0.8125rem; every section eyebrow on the homepage and every footer column heading is informational text failing AA — repaint `.eyebrow`, `.plate__badge` text, `.step__num`, `.note-index .num` to terracotta `#A8442B` (5.0:1) and footer h3 to manila `#F0EBDE` (8.1:1); reserve mustard for the genuinely decorative uses (sun disc, square markers, folio numerals in corners).
- **Sitemap and robots ship with localhost URLs** — `docs/sitemap.xml:4,7` (`http://127.0.0.1:64865/` and a `/blog` URL that doesn't exist) and `docs/robots.txt:5` (`Sitemap: http://127.0.0.1:64865/sitemap.xml`) — search engines will ingest localhost; regenerate both against the real five-page set (`/`, `/work`, `/practice`, `/journal`, `/inquiry`) on the production domain and drop the phantom `/blog` entry.
- **Placeholder phone "+63 917 000 0000" + zero verifiable facts on home** — `docs/inquiry.html:1170` (placeholder tel) and `docs/index.html:1085-1353` + footer `1359-1367` (no phone, no address, no email, no license number anywhere on the home page or footer) — either wire the verified phone or remove the Phone route card entirely with a "Phone forthcoming — Messenger or form for now" hint; add a phone+email+address+license block to the home inquiry strip and the footer's Studio column (UX ship blocker + brief § 1 objective).
- **Tagalog triad "Hangin. Liwanag. Lilim." renders italic** — `docs/index.html:1005, 1177-1181` (`.what-we-do__lhs { font-style: italic }`) — Brief § 3 voice spec: "occasional Tagalog phrases sitting bare on their own line ('Hangin. Liwanag. Lilim.') and **never italicised**"; the page's most direct bilingual signature word-stack ships in the exact style the brief forbade — set `.what-we-do__lhs { font-style: normal; }` and keep the terracotta tint on "Liwanag." as the accent.
- **Plate captions ship as three text blocks, not one Khand line** — `docs/index.html:1226-1228` (and plates 02/03 + the Work page) — Fingerprint #5 names one compact Khand line ("PLATE 03 — CASA M., LIPA, 2024"); build ships `.plate__credit` + italic `.plate__title` + a second muted credit per plate, diluting the printed-plate-card density into a blog card — collapse to one Khand line; keep the italic Recoleta title only on the per-plate page if it exists, drop it from the home overview.
- **Form integrity gaps** — `docs/inquiry.html:1199-1217` required fields carry no asterisk/cue (users learn requiredness only by failing submit); `docs/inquiry.html:1219` "Preferred contact route" caption is a bare `<label>` with no `for` (no `<fieldset>`/`<legend>`); `docs/inquiry.html:1198` form posts to `/forms/contact` which doesn't exist; `.btn--ghost` (`docs/index.html:384-406`) is ~16px tall on mobile — mark required fields with a styled asterisk + legend, wrap the radio group in `<fieldset>`/`<legend>`, point the form action at a real handler or the mailto fallback the brief specifies, and bump `.btn--ghost` to `min-height: 44px` with vertical padding.

### Defer

- **Section III grid skips column 5** — `docs/index.html:1318,1331` — body block at `grid-column: 6 / span 7` leaves column 5 visibly empty; brief expected `5 / span 8`. Layout micro-fix; defer.
- **Sun disc placed up-and-left of the bungalow, not above it** — `docs/index.html:1095` (`cx="148" cy="118"` vs roof apex x≈440); compositional preference, build still works.
- **Vertical folio gutter only renders at ≥1300px viewport** — `docs/index.html:179-181` — 1280×800 laptops never see it; would be cleaner at ≥1180px, but it's a fingerprint-fidelity nicety rather than a blocker.
- **Brand-mark SVG aspect mismatch** — `docs/index.html:1057` viewBox 2:1 in a ~1.27:1 box; ~8px of empty vertical space; cosmetic.
- **Footer logo is a bitmap, not the inline-SVG monogram recoloured** — `docs/index.html:1361` — raster moment in an otherwise vector page; nice-to-have.
- **`<input type="text">` paired with `autocomplete="email"` on a "Phone or email" field** — `docs/inquiry.html:1203` — autofill bias; split the field or set `autocomplete="off"` later.

## Fingerprint check

- **1. Asymmetric 12-col hero (illustration 1–7, FOLIO + italic Recoleta H1 + deck 8–12)** — PARTIAL. Grid and illustration land (`docs/index.html:1087-1167`), but the spec for cols 8–12 names only folio eyebrow + H1 + deck — the build adds two CTA anchors that contaminate the signature moment.
- **2. 4pt terracotta rule terminating every page hero** — PRESENT. `.rule-4` at `docs/index.html:1168` and equivalent on inner pages.
- **3. Stencilled Khand mustard FOLIO/SECTION label at 0.8125rem 0.16em tracking** — PRESENT structurally, but contrast fails AA on Manila (1.96:1) — colour issue, not a missing element.
- **4. Manila surface carries a 4% tiled noise SVG paper-grain overlay** — PARTIAL. The noise filter at `docs/index.html:44` uses `feColorMatrix` alpha 0.55 and rect `opacity='0.45'` — effective ~22% grain, not the brief's 4%; without a screenshot I can't confirm whether Manila reads as cream-paper or muddy-grey.
- **5. Work page plate format (Khand badge + 1pt terracotta caption rule + one-line Khand credit)** — PARTIAL. Badge and caption rule present; the one-line Khand credit is split into three text blocks per plate.
- **6. Sentient 1.0625rem / lh 1.55 on Manila, Recoleta italic for display** — PRESENT.
- **7. Vertical folio numbers up the rightmost gutter on every primary page** — PARTIAL. Element exists (`docs/index.html:1081`) but is hidden below 1300px viewport; common 1280px laptops never see it.
- **8. Inline-SVG monogram in olive at 44px in header + Recoleta wordmark + Khand sub-mark** — PRESENT. The monogram (two interlocking rounded rectangles) is a heavy abstraction rather than a faithful trace of the a/d ribbon, but the lockup, colour, and Khand sub-mark all land.
- **9. 8×8 filled mustard squares as list markers and active-state indicators** — PRESENT. Used on eyebrows, in footer dividers, and (by CSS) on the nav active state — though `aria-current="page"` is never set, so the active-marker never actually renders.
- **10. Full-bleed bottle-green footer with manila text and mustard square dividers** — PRESENT structurally; mustard column headings fail AA contrast (4.16:1).

## Generic-AI tells

- **Centered hero on white over generic stock photo** — ABSENT. Asymmetric 12-col on manila; no stock; hero illustration is a bespoke inline SVG.
- **Only Inter / Inter + Lora loaded as fonts** — ABSENT. Recoleta + Sentient + Khand wired per brief.
- **Palette is 3 neutrals + 1 muted accent** — ABSENT. All 8 brief colours wired in `:root`.
- **H1 / display capped near 3rem (no real display type)** — ABSENT. `clamp(2.75rem, 6vw + 0.5rem, 5.5rem)` italic Recoleta — real display register.
- **Three identical cards as the home page's primary content** — ABSENT. The three plates are deliberate folio plates with a Khand badge + caption rule, not the centred services-tile pattern the brief lists as "What NOT to do" #3.
- **All decoration is border-radius + soft shadow** — ABSENT. Decoration is line-illustrations, terracotta rules, and mustard squares; corners are 0–2px. The one soft-shadow moment is the hero CTA's 4×4 terracotta hard-shadow — itself a register-collision flagged in Must Fix.
- **Modular scale 1.25 with body-sized H1** — ABSENT. Scale 1.5; hero H1 up to 5.5rem.
- **Logo missing or replaced by generic SVG when og-image existed** — PRESENT (mild). `source/images/og-image.jpg` contains the actual interlocking a/d monogram; the header inline-SVG is two interlocking rounded rectangles — a generic abstraction rather than the traced silhouette the brief named. The footer falls back to the raster bitmap of the same og-image. The lockup credibly evokes the mark, but it is not the trace the brief specified.
- **Real source imagery dropped (source/images/* unused)** — ABSENT. `source/images/` held only `og-image.jpg` and `favicon.ico`; `og-image.jpg` is used as the footer logo and as the social meta image, so nothing is dropped.
- **Decorative kit unused — all ornament is CSS only** — ABSENT. Bespoke inline-SVG line-illustrations carry the decoration on every section.

## Overall

The build commits to the brief's print-monograph register more credibly than most first-pass outputs — asymmetric 12-col, real display type, full 8-colour palette, bespoke SVG line-illustrations, terracotta rules, Manila grain — and the structural generic-AI tells are almost all absent. But the build is also unshippable as-is: every internal link 404s on a vanilla static host, mustard text fails WCAG AA across every section eyebrow and footer heading, the hero ships two CTAs the brief explicitly forbids in its fingerprint, the Tagalog triad is italicized in the exact spot the brief said "never italicized", the phone number is a placeholder, the principal is anonymous, and `sitemap.xml`/`robots.txt` still carry localhost URLs. Five of those are CSS one-liners or find/replace edits; the trust-signal gap (phone, name, license) needs the client. I would not sign my name to this going out as a portfolio piece — too many of the brief's own voice and fingerprint rules are visibly broken on the home page, before counting the routing failure that takes the whole site down on click.

**All five role reviews landed on disk** — designer, UX, UI, colour, programmer. All five flagged that no screenshots existed in `review/`, so this synthesis combines markup-level audits across all lenses; pixel-level checks (clipping, grain density, exact eye-path) remain unverified.

## Verdict

verdict: revise
