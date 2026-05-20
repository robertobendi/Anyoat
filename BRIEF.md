# BRIEF

## 0 · Selected direction
- **Picked**: Candidate B — Mid-century architectural print × Filipino tropical modernism (Push Pin × Lindy Roy)
- **Justification**: ANALYSIS.md identifies graceful degradation under sparse content and visible Filipino-architect identity as the two hardest problems — Candidate B is the only direction that solves both at once, because the olive line-illustration kit (butterfly roofs, jalousies, banaba trees) carries the visual weight when project photography is missing, and the vernacular vocabulary localizes the firm in a way the diaspora audience will immediately recognize. Candidate A is ruled out by selection rule #4 (no reference committed to restraint, so restraint is not earned), and Candidate C's 032c-monograph register, while strong, is closer to the AI-default editorial-luxury aesthetic than B's three-ink printed-page system, which is harder to confuse with a generic Claude site.

## 1 · Analysis
- **Business**: Anyo at Disenyo is a small, owner-led architectural practice in Batangas City, Philippines, doing residential and small-commercial design under a bilingual "form-and-design" name.
- **Primary audience**: 30–55 year-old middle-to-upper-middle-class Filipino homeowners and small-business owners in Batangas / Calabarzon evaluating whether to engage an architect, plus diaspora clients building a family home remotely who will judge the firm entirely on its online presence.
- **Primary objective**: Convert a prospective client browsing for an architect into a qualified inquiry (phone call, Messenger, or contact form) by proving the firm can do the work; secondarily, establish credibility for diaspora and out-of-province clients.
- **Hard facts**: Business name "Anyo at Disenyo" (styled "ANYO at DISENYO"), sub-mark "Architectural Services", location Batangas City, Philippines, Facebook source `facebook.com/anyoatdisenyo`, service category "architectural firm with service expertise on…" [verify full specialty list], street address [verify], phone [verify], email [verify], principal's name [verify], hours [verify].
- **Voice**: considered, grounded, quietly bilingual — short present-tense sentences, plainspoken English with occasional Tagalog phrases sitting unitalicized, no marketing puffery or "passionate team" filler.
- **Constraints**: typography must set Tagalog and English equally cleanly; portfolio canvas must remain generous (decoration cannot fight photography); layout must degrade gracefully when project photos and verified facts are sparse; logo and brand palette (olive monogram, cream surface, warm-charcoal text) are fixed and must carry through — Facebook-chrome palette values in `palette.json` are discarded.

## 2 · Aesthetic family

- **Family**: Mid-century architectural print × Filipino tropical modernism (Push Pin × Lindy Roy)
- **One-line signature**: An asymmetric 12-column grid where columns 1–7 hold a 2pt olive line-drawing of a butterfly-roofed Batangueño bungalow with terracotta-filled jalousies and a mustard sun disc above it, while columns 8–12 stack a stencilled "FOLIO 01" in calamansi mustard above an italic Recoleta H1 set in burnt umber — the page feels printed in three inks on manila paper, not rendered.

This is mid-century architectural-print warmth filtered through Filipino tropical modernism — closer to a Lindy Roy fold-out plan plate or a Paul Rand IBM annual than to either 032c or Toiletpaper. The audience is professional and provincial, so the page reads as *printed, considered, finished* rather than experimental or chaotic. Push Pin Studios' hand-drawn linework is the touchstone for the illustration kit, but the vocabulary is local: butterfly roofs, jalousie clusters, banaba trees, stilted verandas — the shapes a Batangueño homeowner sees from their car window every morning. Manila-paper grain and terracotta-brick fills root the page in physical print, which matters because the Facebook-only presence is failing precisely because it reads as provisional and unphysical.

## 3 · Brand

### Verdict
keep-and-polish. The interlocking a/d olive monogram is the single strongest signal the firm currently owns (per ANALYSIS.md §Brand assets observed), and the rebuild's whole credibility argument depends on honoring it — the family promotes olive from sole accent to primary ink, which strengthens rather than dilutes the existing identity.

### Logo asset
- **Source file**: `source/images/og-image.jpg` (the canonical logo — Facebook profile picture, contains the actual mark).
- **How the build should use it**: copy to `assets/img/logo.png`, but **also** trace the monogram silhouette to an inline SVG at `assets/img/monogram.svg` so it can be recolored, scaled crisply, and sat against any palette surface. In the header, use the SVG monogram at 44px height on the left, with the wordmark "ANYO at DISENYO" set fresh in Recoleta 500 italic at 1.05rem (matching x-height) and the sub-mark "ARCHITECTURAL SERVICES" in Khand 600 condensed all-caps at 0.72rem with 0.18em tracking sitting directly underneath the wordmark in india ink. The bitmap `og-image.jpg` is only used as the social meta image, not in-page.
- **What the logo actually looks like**: A tight square mark on a near-white cream field — centerpiece is an interlocking lowercase "a" / "d" monogram in flat olive/khaki green, the two letters looping into one continuous ribbon, beneath which "ANYO at DISENYO" (with "at" smaller, mixed case) sits over "ARCHITECTURAL SERVICES", both in a dark warm-grey humanist sans with comfortable tracking.

### Palette
- `#F0EBDE` — Manila paper — surface (dominant background, 4% paper-grain SVG overlay)
- `#1F1D1A` — India ink — primary ink (body, H1/H2 display)
- `#6E6E3C` — Olive khaki — brand ink (linework, monogram, section heads — promoted from accent)
- `#A8442B` — Terracotta brick — secondary ink (fills inside line-illustrations, dividers, eyebrow rules)
- `#D9A036` — Calamansi mustard — highlight (folio numbers, list markers, hover state, sun discs)
- `#2C4A3E` — Bottle green — tertiary ink (caption rules, illustration shading, footer surface)
- `#4A453F` — Warm charcoal — secondary text, captions on light surface (preserves original wordmark tone)
- `#FBF7EC` — Coconut milk — secondary surface (callout panels, inset cards)

### Typography
- **Display**: **Recoleta** at weight 500 italic — a geometric serif with Push Pin warmth; sets Tagalog cleanly.
- **Body**: **Sentient** at weight 400 (1.0625rem) — a contemporary serif that holds texture in long-form and keeps Tagalog and English at equal weight.
- **Accent / eyebrow**: **Khand** at weight 600 condensed all-caps, tracked 0.16em — the stencilled folio numbers, section labels, plate credits.

The trio is mid-century-print-monograph in stance: a warm italic serif display, a print-feel serif body, and a stencilled condensed sans for utility — the same three-voice system a 1960s monograph would use, transposed to a Filipino practice.

### Voice
**Considered, grounded, quietly bilingual.** Short present-tense sentences in plainspoken English, with occasional Tagalog phrases sitting bare on their own line ("Hangin. Liwanag. Lilim.") and never italicized — no marketing puffery, no adjective stacks, no "passionate team" filler. Captions are credited in Khand mono-caps as plate credits ("PLATE 03 — CASA M., LIPA, 2024"). Section names use a bilingual letter-conceit ("Section II — Sa Tabi ng Dagat / By the Sea").

### Sample copy
- **Hero headline**: "Bahay, anyo, hangin."
- **Hero subhead**: "Anyo at Disenyo is a Batangas architectural practice designing homes and small buildings shaped by Philippine light, climate, and the way a family actually lives in a room."
- **Primary CTA**: "Make an inquiry"

## 4 · Plan

### Site map
- **Home** (`/`) — introduce the practice and its visual language; route the visitor toward Work or Inquiry — primary action: scan the folio plates and tap "Make an inquiry"
- **Work** (`/work`) — show every project as a numbered plate in a printed-folio sequence — primary action: open a plate to read it
- **Practice** (`/practice`) — say who the architect is, what they design, and what working with them is like — primary action: trust the firm enough to inquire
- **Journal** (`/journal`) — short editorial notes on climate, materials, sites, neighborhood — primary action: stay long enough to bookmark and return (graceful — degrades to one note if needed)
- **Inquiry** (`/inquiry`) — give the visitor every contact route and the form — primary action: send an inquiry or pick up the phone

### Navigation
- **Header nav**: Work · Practice · Journal · Inquiry (4 items, right-aligned; logo monogram left-aligned)
- **Footer**: Studio address (Batangas City [verify]), phone [verify], email [verify], Facebook link, hours [verify], a small "© 2026 Anyo at Disenyo" set rule, and a colophon line naming Recoleta + Sentient + Khand in mustard Khand small-caps.

### Page content briefs

**Home (`/`)** — single goal: orient + route. Section order: (1) Hero with line-illustration spread and Recoleta H1 + Khand FOLIO 01, terracotta 4pt rule terminates the hero; (2) "What we do" — a three-line bilingual paragraph in Sentient on Manila surface, no card grid; (3) Selected work — three to six plates from the folio, each plate is a numbered figure (PLATE 01 / PLATE 02 …) with caption in mono-caps; (4) Practice card — small Khand label "Section IV — Anyo at Disenyo" + a four-sentence introduction with a hand-drawn olive portrait sketch or fall-back illustration; (5) Inquiry strip — full-bleed Manila surface with terracotta rule, Recoleta italic line "Bahay, anyo, hangin.", phone + Messenger + "Make an inquiry" CTA. Imagery: line illustrations primary, optional photo plates if available.

**Work (`/work`)** — single goal: prove the firm can do the work via the folio format. Section order: (1) Folio cover — page title "FOLIO — WORK" in Khand, Recoleta italic deck "Houses, rooms, plans, and the climate that shapes them.", terracotta 4pt rule; (2) Plate sequence — each project as a numbered plate ("PLATE 01 — CASA M., LIPA, 2024"), one wide figure with hand-drawn olive plan or photo, body paragraph in Sentient, terracotta caption rule. Degrades to one plate; expands to ten without redesign. No filters, no tags — the folio is sequential.

**Practice (`/practice`)** — single goal: introduce the architect and the way of working. Section order: (1) Page head — Khand "SECTION II" + Recoleta italic H1 "On the practice."; (2) Principal block — olive line-portrait or fallback monogram, four-paragraph bio in Sentient, two-line bilingual pull-quote in raw-silk callout; (3) How we work — three numbered steps (Khand 01/02/03) each on a Manila card with a tiny olive line-icon (compass, plan, key); (4) Inquiry strip (shared component). [Verify principal's name + bio — page degrades to a "The architect" placeholder.]

**Journal (`/journal`)** — single goal: hold long-form editorial credibility. Section order: (1) Folio cover — "JOURNAL" in Khand, Recoleta italic deck; (2) Index — a numbered list of notes (Khand mustard markers), title in Recoleta italic, date + read-time in driftwood Cabinet-style small-caps (use Khand here for trio discipline); (3) Pagination — "PAGE 01 — 03". Degrades to one note if needed; the index format makes "one" feel intentional.

**Inquiry (`/inquiry`)** — single goal: collect contact information or route to a phone. Section order: (1) Page head — Khand "SECTION V" + Recoleta italic H1 "Make an inquiry."; (2) Three-route card row — Phone, Messenger, Form (each card on Coconut milk with olive 1pt border, mustard square markers in Khand at top); (3) Inquiry form — name, contact (phone or email), project location, project type (select), brief description (textarea), preferred contact route (radio), mailto fallback action. Form labels in Khand mono-caps tracked 0.16em; submit button in olive on Manila surface.

### Collections
PebbleStack default collections cover the brief:
- `pages` — Home, Work cover, Practice, Journal cover, Inquiry (5 static pages).
- `posts` — repurposed as the **Journal note** type (slug, title, body markdown, dek, dateline, eyebrow label).
- `contact` — collects inquiry submissions (mailto-routed in this build).
- **NEW: `plates`** — justified. The Work page is a sequential plate folio; each plate has structured fields (plate number, title, location, year, hero image, plan illustration, body markdown, primary photograph) that `posts` cannot represent without leaking concerns. Fields: `plate_number` (number), `title` (text), `location` (text), `year` (number), `body` (markdown), `hero_image` (url), `plan_image` (url), `slug` (slug), `published` (boolean).

### Forms
- **Mailto fallback**: `<a href="mailto:hello@anyoatdisenyo.ph">` [verify exact address — placeholder until client confirms]. Inquiry form uses `action="mailto:hello@anyoatdisenyo.ph"` with `enctype="text/plain"` and an HTML comment alongside noting that this should be swapped to Formspree when an endpoint is configured.

## 5 · Design

### Direction
This is a printed-folio practice, not a web page — every screen reads as a numbered plate in a monograph the firm has been quietly producing for years. Touchstones explicitly: Push Pin Studios' hand-drawn architectural posters for the olive linework, mid-century IBM/Knoll annual reports for the Khand stencil-caps + terracotta rule system, and Filipino tropical-modernism plates (the kind Lindy Roy or Bobby Mañosa monographs reproduce) for the vernacular vocabulary — butterfly roofs, jalousie clusters, banaba trees, stilted verandas. Olive is promoted from a sole accent into a primary working ink, which honors the existing brand identity instead of relegating it to a single hover state.

### Layout signature
Every primary page opens with a 12-column manila-paper spread where columns 1–7 carry a 2pt olive hand-drawn line-illustration of a Batangueño architectural subject (butterfly-roof bungalow, jalousie cluster, banaba tree, stilted veranda) with terracotta brick fills and a calamansi mustard sun disc above it, while columns 8–12 stack a Khand stencilled "FOLIO 0N" label above an italic Recoleta H1 in india ink with a terracotta 4pt rule running the full grid width terminating the spread.

### Type scale
Default ratio 1.5 (perfect fifth) — the print-monograph register justifies a generous, opinionated scale.

- **Display (giant hero h1)**: `clamp(2.75rem, 6vw + 0.5rem, 5.5rem)` / line-height 0.96 / weight 500 italic (Recoleta)
- **H1**: `clamp(2.25rem, 4vw + 0.5rem, 3.75rem)` / line-height 1.02 / weight 500 italic
- **H2**: `clamp(1.5rem, 2vw + 0.5rem, 2.25rem)` / line-height 1.1 / weight 500 italic
- **H3**: `1.25rem` / line-height 1.2 / weight 600 (Sentient)
- **Body**: `1.0625rem` / line-height 1.55 / weight 400 (Sentient)
- **Small / caption**: `0.8125rem` Khand 600 condensed all-caps, `letter-spacing: 0.16em`, used for eyebrow folios + plate credits
- **Vertical folio**: `0.875rem` Khand 600 condensed all-caps, writing-mode vertical-rl, gutter-right

Weights to load: Recoleta 500 italic; Sentient 400; Khand 600.

### Spacing & rhythm
- Container max-width: **1180px** generous — fits a 12-column print grid with breathing gutters but doesn't go cinematic. Pages set on a 12-column CSS grid with 24px gutters; outer page gutter `clamp(20px, 4vw, 64px)`.
- Section vertical padding: small = `4.5rem`, large = `8rem` (between major folio sections on Home).
- Grid gutters: 24px column gap on desktop, 16px on tablet, single-column stack on mobile.
- No strict typographic baseline grid — print-folio rhythm is run-by-run, not line-by-line; Sentient body is `line-height: 1.55` and section padding is the rhythm device.

### Decorative system
- **Hand-drawn olive 2pt line-illustration** — one per major section: Home hero gets the butterfly-roof bungalow, Work cover gets a banaba tree, Practice gets a compass + plan, Journal cover gets a jalousie cluster, Inquiry gets the stilted veranda.
- **Stencilled Khand folio number in calamansi mustard** — top-left of every page hero ("FOLIO 01 / 2026", "FOLIO 02", etc.) and re-used as the section label ("SECTION II — On the practice").
- **Terracotta 4pt rule** — terminates every hero across the full grid; lighter 1pt terracotta rule under every plate caption.
- **Calamansi mustard square markers** (8×8px filled squares) — list bullets, nav item active-state, page-of-N indicator in pagination.
- **Manila paper grain** — a tiled 4% noise SVG sitting on every Manila-surface (`#F0EBDE`) page background; never on Coconut milk or Bottle green.

### Components

- **Header / nav** — Manila surface, 88px tall, no shadow. Left: 44px inline SVG monogram in olive + fresh Recoleta italic wordmark "ANYO at DISENYO" with Khand sub-mark beneath. Right: 4 nav items in Sentient 400 with Khand small-caps secondary label below the active one ("FOLIO 02"). Mobile collapses to a Khand "MENU" caps trigger that drops a single-column manila panel.
- **Hero** — Asymmetric 12-column spread. Columns 1–7 hold the section line-illustration, columns 8–12 stack the folio label (Khand mustard), the Recoleta italic H1 (india ink), and a 3-line Sentient deck (warm charcoal). Terminates with a terracotta 4pt rule full-grid.
- **Content section** — a Khand mustard section label "SECTION III — XXX" sits flush-left above an italic Recoleta H2; body sets in Sentient 1.0625rem with terracotta hairline dividers between sub-sections.
- **Card (plate)** — a Manila card with a 1pt olive border on three sides (top, right, bottom-only on the index list); top-right corner carries a Khand mustard "PLATE 0N" badge; bottom carries a terracotta caption rule with the credit in Khand small-caps.
- **Footer** — full-bleed Bottle green (`#2C4A3E`) surface with Manila-paper text. Three-column layout: studio block (address + phone + email), nav block (sitemap), colophon block (typefaces named, "© 2026 Anyo at Disenyo"). Mustard square dividers between columns.
- **Buttons (primary)** — olive solid pill-less rectangle, `padding: 0.9rem 1.5rem`, body text in Manila paper at 0.95rem Sentient 500, no rounded corners (2px corner-radius max), terracotta 2px right-edge underline shifting to mustard on hover.
- **Buttons (secondary)** — Khand mono-caps text-link with mustard square marker preceding it; underline appears on hover in terracotta.
- **Forms** — Manila surface inputs with olive 1pt bottom border only (no boxes); labels in Khand mono-caps tracked 0.16em above each field; textarea has a terracotta hairline rule on its left edge; submit button in olive primary style.

### Per-page layout

**Home (`/`)**
1. Header — described in Components.
2. Hero — Layout signature lands: columns 1–7 hold a 2pt olive line-illustration of a butterfly-roofed Batangueño bungalow with terracotta-filled jalousies and a mustard sun disc above it; columns 8–12 stack "FOLIO 01 / 2026" (Khand mustard), Recoleta italic H1 "Bahay, anyo, hangin." (india ink, 5.5rem desktop), 3-line Sentient deck, no buttons. Terracotta 4pt rule terminates the hero across the full 12 columns.
3. "What we do" — single Manila section, Khand label "SECTION I — ANYO AT DISENYO", Sentient body two-paragraph bilingual prose, terracotta 1pt closing rule.
4. Selected work — Khand "SECTION II — FOLIO" + Recoleta italic H2 "Selected work." Then a 3-up plate row on desktop (stacks on mobile), each plate is a 4:3 hand-drawn olive plan illustration (or photo if available), with PLATE 0N badge top-right and terracotta-ruled caption beneath. Mustard "VIEW THE FOLIO →" Khand link bottom-right.
5. Practice card — Khand "SECTION III — THE ARCHITECT" + 4-sentence Sentient introduction, with an olive line-portrait or compass illustration in columns 1–4 and copy in columns 5–12.
6. Inquiry strip — full-bleed Manila with terracotta 4pt rule top, Recoleta italic line "Bahay, anyo, hangin." in india ink, mustard "MAKE AN INQUIRY →" Khand CTA.
7. Footer.

**Work (`/work`)**
1. Header.
2. Folio cover — Layout signature: columns 1–7 hold a 2pt olive banaba tree line-illustration with mustard fruit dots; columns 8–12 stack "FOLIO — WORK" Khand mustard, Recoleta italic H1 "Houses, rooms, plans, and the climate that shapes them." Terracotta rule.
3. Plate sequence — each plate is a 12-column horizontal figure (image columns 1–8, body columns 9–12 on desktop; full-width on mobile). The PLATE 0N badge appears as the first vertical Khand folio in the rightmost gutter. Terracotta caption rule.
4. End-rule — a single centered Khand "—— END OF FOLIO" line in india ink.
5. Footer.

**Practice (`/practice`)**
1. Header.
2. Section head — Layout signature: olive line-compass illustration columns 1–7 + "SECTION II — PRACTICE" Khand + Recoleta italic H1 "On the practice." columns 8–12.
3. Principal block — olive line-portrait or fallback monogram columns 1–5, four-paragraph Sentient bio columns 6–12, with a Coconut milk raw-silk pull-quote panel in Recoleta italic 1.75rem floated right.
4. How we work — three Khand-numbered cards (01/02/03) each on Coconut milk with a tiny olive line-icon (compass, plan, key).
5. Inquiry strip (shared).
6. Footer.

**Journal (`/journal`)**
1. Header.
2. Folio cover — Layout signature: olive jalousie-cluster line-illustration columns 1–7, "JOURNAL" Khand mustard + Recoleta italic H1 "Notes from the studio." columns 8–12.
3. Note index — numbered list (mustard squares as markers), each note: Khand date small-cap, Recoleta italic title, Sentient 1-line dek, terracotta 1pt rule between notes.
4. Pagination strip — "PAGE 01 — 03" in Khand mustard.
5. Footer.

**Inquiry (`/inquiry`)**
1. Header.
2. Section head — Layout signature: olive stilted-veranda line-illustration columns 1–7, "SECTION V — INQUIRY" Khand + Recoleta italic H1 "Make an inquiry." columns 8–12.
3. Three-route card row — Phone / Messenger / Form, each a Coconut milk card with mustard square marker top, Khand mono-cap label, body in Sentient.
4. Form — single column, max-width 560px, Khand mono-cap labels, olive bottom-border inputs, olive submit button. Mailto fallback action wired in.
5. Footer.

### Imagery plan

| Page | Slot | Treatment | Source | Search query (if photo) | Aspect |
|---|---|---|---|---|---|
| Home | Hero (cols 1–7) | SVG illustration (inline) — butterfly-roof bungalow + jalousies + mustard sun disc, 2pt olive linework, terracotta fills | SVG illustration | — | 4:3 |
| Home | "What we do" eyebrow icon | SVG illustration — 1pt olive compass rose | SVG illustration | — | 1:1, 32px |
| Home | Selected work plates ×3 | Hand-drawn olive plan illustrations (placeholder fallbacks); when real photos exist, `duotone(#1F1D1A, #6E6E3C)` treatment with terracotta border | SVG illustration / Photograph (Wikimedia via `./scripts/bismuth-tool fetch-image`) | "Filipino bahay kubo interior", "tropical modernist house Philippines", "Batangas architectural plan" | 4:3 |
| Home | Practice card portrait/fallback | SVG illustration — olive line-portrait silhouette or compass+plan icon stack | SVG illustration | — | 1:1 |
| Work | Folio cover illustration | SVG illustration — banaba tree with mustard fruit dots, 2pt olive | SVG illustration | — | 4:3 |
| Work | Plate hero ×N | `duotone(#1F1D1A, #6E6E3C)` if real photo; otherwise SVG olive plan illustration fallback | Source asset (uploaded by client when available) / Photograph (Wikimedia) | "Filipino modernist house exterior", "Batangas residence", "jalousie window interior" | 16:10 |
| Work | Plate plan view | SVG illustration — hand-drawn olive line plan with terracotta fill on roofline | SVG illustration | — | 4:3 |
| Practice | Section illustration | SVG illustration — olive compass rose + plan square | SVG illustration | — | 4:3 |
| Practice | Principal portrait | Source asset `assets/img/principal.jpg` if available, treated `cutout-shadow` with olive 1pt border; otherwise SVG olive line-portrait silhouette | Source asset | — | 3:4 |
| Practice | How-we-work icons ×3 | SVG illustration — olive line icons (compass / plan scroll / key) | SVG illustration | — | 1:1, 56px |
| Journal | Folio cover illustration | SVG illustration — jalousie cluster, 2pt olive | SVG illustration | — | 4:3 |
| Journal | Note thumbs (optional) | SVG illustration — small olive vignettes per note (palm, tile, lamp); fallback is mustard square | SVG illustration | — | 1:1 |
| Inquiry | Section illustration | SVG illustration — stilted veranda + banaba branch, 2pt olive | SVG illustration | — | 4:3 |
| All | Header monogram | SVG (traced from `source/images/og-image.jpg`) at 44px | Source asset | — | 1:1 |
| All | OG / social card | Source asset `source/images/og-image.jpg` reused | Source asset | — | 1:1 |

Every page has at least one real hand-drawn illustration in the hero slot; the brief commits to inline SVG line-illustrations as the primary visual carrier, with photographs (when supplied) treated in duotone to sit inside the olive/india-ink palette.

### Motion
Motion is restrained and print-feeling — no scroll-jacking, no parallax, no fades-in-on-scroll. Hover states on links and buttons use a 180ms ease-out shift of the terracotta underline to mustard. Mustard square markers in the nav use a 120ms scale 1.0 → 1.15 transition on hover. Form inputs animate their olive bottom-border from 1pt to 2pt on focus over 160ms. The nav toggle on mobile uses a tiny vanilla `<script>` (≤20 lines) to toggle an `[data-open]` attribute; everything else is pure CSS. No JS-driven animation libraries.

### What NOT to do
1. **No centered-hero-on-white with a single button and an Inter heading** — the family rejects centered hero compositions; the layout signature is asymmetric 12-column.
2. **No `border-radius: 8px` as the only decoration** — corners are 0–2px max; the decoration system is line-illustrations + terracotta rules + mustard squares, not soft-rounded cards.
3. **No three-card "Services" grid on the homepage** — the firm's services are absorbed into the "What we do" prose section and the folio plates; no service-tile triptych.
4. **No Inter, no Lora, no DM Sans, no Plus Jakarta** — the trio is Recoleta + Sentient + Khand and must not drift.
5. **No bright photo full-bleed under the header without duotone treatment** — incoming photographs are duotoned `#1F1D1A → #6E6E3C` to sit inside the palette; the page never accepts a raw, untreated tourist photograph.
6. **No fading-in-on-scroll, no parallax, no scroll-snap** — the page is a printed folio; motion is hover-level only.
7. **No olive used only once as a hover accent** — olive is promoted to primary ink and must appear on every section as linework, section heads, or borders; relegating it back to a single hover state is the exact failure this direction was picked to defeat.

## 6 · Fingerprint

1. **Home hero is an asymmetric 12-column spread**: columns 1–7 hold a 2pt olive inline-SVG line-illustration of a butterfly-roofed Batangueño bungalow with terracotta (`#A8442B`) jalousie fills and a calamansi-mustard (`#D9A036`) sun disc above the roof; columns 8–12 stack "FOLIO 01 / 2026" in Khand 600 condensed mustard tracked 0.16em above a Recoleta 500 italic H1 "Bahay, anyo, hangin." in india ink (`#1F1D1A`) at `clamp(2.75rem, 6vw + 0.5rem, 5.5rem)` with line-height 0.96.
2. **A 4pt terracotta-brick (`#A8442B`) rule runs the full 12-column grid width terminating every page hero**, immediately below the hero composition and above the next section's eyebrow.
3. **Every page hero carries a stencilled Khand 600 condensed all-caps "FOLIO 0N" or "SECTION 0N" label in calamansi mustard (`#D9A036`) at 0.8125rem with `letter-spacing: 0.16em`**, sitting flush-left in the top of columns 8–12 above the Recoleta H1.
4. **Every Manila paper surface (`#F0EBDE`) carries a 4% tiled noise SVG paper-grain overlay**; Coconut milk (`#FBF7EC`) and Bottle green (`#2C4A3E`) surfaces do not.
5. **The Work page renders each project as a numbered plate** — a Khand mustard "PLATE 0N" badge in the top-right corner of the figure, a terracotta 1pt caption rule beneath the image, and the credit set in Khand 600 condensed all-caps at 0.8125rem with 0.16em tracking ("PLATE 03 — CASA M., LIPA, 2024").
6. **Body text uses Sentient at 1.0625rem with line-height 1.55 on the Manila paper surface (`#F0EBDE`), never on pure white**; the H1/H2 display uses Recoleta 500 italic in india ink (`#1F1D1A`).
7. **Folio numbers are set vertically up the rightmost gutter on every primary page** — Khand 600 condensed all-caps in driftwood-warm-charcoal (`#4A453F`) at 0.875rem with `writing-mode: vertical-rl`, anchored to the page-edge gutter.
8. **The header carries the original logo as an inline SVG monogram in olive (`#6E6E3C`) at 44px height**, paired with a fresh Recoleta 500 italic wordmark "ANYO at DISENYO" and a Khand 600 condensed sub-mark "ARCHITECTURAL SERVICES" tracked 0.18em sitting directly beneath.
9. **List markers and active-state nav indicators are 8×8px filled calamansi-mustard (`#D9A036`) squares**, never circles, never default disc bullets.
10. **The footer is a full-bleed bottle-green (`#2C4A3E`) surface with Manila-paper (`#F0EBDE`) text**, three columns separated by mustard 8×8px square dividers, closing with a Khand mono-caps colophon line naming the three typefaces ("SET IN RECOLETA · SENTIENT · KHAND").
