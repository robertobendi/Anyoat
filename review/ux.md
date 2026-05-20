# USER EXPERIENCE REVIEW

## What I saw

No screenshots exist in `review/`; I read the four built pages
(`docs/index.html`, `work.html`, `practice.html`, `inquiry.html`)
directly and reconstructed the rendered layout from the markup and
inline SVGs. Synthesiser: pixels are not verified — this review trusts
the HTML's intent.

Home above the fold: a 12-col asymmetric hero with a 2pt olive
line-drawing of a butterfly-roofed bungalow (mustard sun disc, terracotta
jalousie fills, banaba tree on the left, "FIG. 01" plate credit at the
foot of the SVG) occupying cols 1–7; cols 8–12 stack a Khand mustard
eyebrow "Folio 01 / 2026 ▪ Section I", a large italic Recoleta H1
"Bahay, anyo, hangin." set on three lines with a clamp top of 5.5rem,
a charcoal Sentient deck explaining the practice in English, and two
CTAs side-by-side: an olive "Make an inquiry" button with a 4×4
terracotta drop-shadow, and a Khand mustard-square ghost link "See the
folio" (`docs/index.html:1085-1170`). A 4pt terracotta rule terminates
the spread. Below that: a "What we do" section (Tagalog triplet column +
two body paragraphs), a coconut-milk "Selected work" band with three
plate cards — every plate is an SVG line-illustration, never a
photograph — then "The architect" (compass-rose SVG, no portrait, no
name) and finally a Manila inquiry strip with a single "Make an inquiry"
button. No phone, no messenger link, no testimonial, no address
beyond "Batangas City, Philippines" exists anywhere on the home page
proper; the footer repeats the same incomplete address with a
Facebook link only (`docs/index.html:1357-1396`). The /inquiry page
exposes a phone card with the number `+63 917 000 0000`
(`docs/inquiry.html:1170`) and email `hello@anyoatdisenyo.ph`
(`docs/inquiry.html:1180`) — both look like template placeholders
straight out of a starter kit. The /practice page introduces "The
principal" with a generic olive bust SVG and a bio that never names the
architect: it opens "The practice is led by an architect who studied
and practiced in Manila…" (`docs/practice.html:1153`).

## Findings

### Ship blockers (must fix before publish)

- **Phone number is a placeholder** — `docs/inquiry.html:1170`,
  `<a href="tel:+639170000000">+63 917 000 0000</a>` — the brief
  named "phone call, Messenger, or contact form" as the three qualified
  inquiry routes; shipping `+63 917 000 0000` makes the primary route
  a literal dead line, and any mobile visitor who taps it is routed to
  a number that doesn't exist. → Either wire in the verified line, or
  remove the Phone route card entirely and replace it with a "Phone
  number forthcoming — Messenger or form for now" hint until the real
  number lands.

- **Principal is anonymous across the entire site** —
  `docs/practice.html:1153` "led by an architect who studied and
  practiced in Manila"; no name, no PRC license number, no portrait
  photo, only a generic SVG silhouette. For a diaspora client who the
  brief says "will judge the firm entirely on its online presence" and
  who is about to wire deposit money for a family home, an anonymous
  architect is the single biggest trust-failure on the page; it
  undercuts the brief §1 objective directly. → Name the principal, add
  the PRC license number, and ship a real cropped headshot — or
  withhold the launch until those facts are verified rather than
  papering over them with placeholder copy.

- **Home page hands the visitor zero verifiable facts** —
  `docs/index.html:1085-1353` (hero + every home section) and footer
  `1362-1367`: no phone, no street address, no email, no hours, no
  years-established, no licensure, no testimonial, no real project
  photograph, no client name. The brief §1 objective is conversion of a
  browsing client into a qualified inquiry; the page asks them to take
  a leap of faith with nothing concrete to verify against. → Add a
  visible phone + address + license-number block to the home inquiry
  strip and to the footer's Studio column; this is the bar a Filipino
  architectural firm has to clear to be taken seriously.

### Important (should fix this revision pass)

- **Inquiry strip on the home offers only one route** —
  `docs/index.html:1341-1353`, single olive "Make an inquiry" button
  → bouncing through to /inquiry. The brief lists Phone, Messenger,
  AND form as primary routes and audiences differ on which they
  prefer (Tito's-WhatsApp generation reaches for Messenger; diaspora
  reach for email; locals reach for phone). Forcing a click-through
  costs you the visitor who was ready to call NOW. → Place phone +
  Messenger links inline beside the button in the strip — three
  routes, three labels, like the /inquiry route-row miniaturised.

- **Every "project" on Selected work is illustrative, not real** —
  `docs/index.html:1198-1305` and `docs/work.html:1153-…` all use SVG
  plan-illustrations only, no `<img>` of an actual built house. Plate
  names "Casa M., Lipa 2024" / "Bahay sa Tabi, Calatagan 2025" /
  "Tindahan ni Manong" read as plausible but cannot be verified.
  Brief §1 promises "prove the firm can do the work" — line-drawings
  alone don't prove anything, and they risk reading as
  fictionalised projects if the names aren't real. → Either confirm
  these are real commissions and add a photo per plate when available,
  or relabel them as "concept plates / forthcoming work" so the
  visitor isn't misled.

- **Hero H1 is untranslated Tagalog with no inline gloss** —
  `docs/index.html:1159`, `<h1>Bahay,<br>anyo,<br><em>hangin.</em></h1>`.
  The Tagalog-comfortable primary audience reads it instantly; the
  brief's named secondary audience (diaspora) and an English-only
  scanner have to drop into the deck to decode it. The deck does
  deliver, but the 5-second test loses the "What does this DO" beat to
  decoding work. → Either keep the H1 as-is and tighten the deck to
  one short line ("A Batangas architectural practice — homes shaped by
  Philippine light, climate, and family.") that lands in <2 seconds,
  or add a small Khand english-gloss line under the H1
  ("House. Form. Air.") in charcoal.

- **No service-scope signal on the home** — `docs/index.html:1172-1189`:
  the Service categories (residential, small-commercial, renovation,
  rebuild) are buried in two paragraphs of body prose. A
  qualified-inquiry-conversion page should tell the visitor "we do X,
  X, X" in scannable chips so they can answer "are these the right
  architect for me?" in one glance — otherwise the wrong leads
  inquire and the right leads bounce. → Surface a 4-item Khand
  mono-caps list of the service types directly under the H2 "What
  we do, and how we do it."

- **Footer Studio block lacks a phone and email** —
  `docs/index.html:1359-1368`: only mailing line + Facebook. Every
  page repeats this footer, so on every page the visitor has to
  navigate to /inquiry to find contact details. The footer is
  conventionally the "contact backstop" — it should hold phone,
  email, hours, and the Facebook link. → Add phone, email, Mon–Fri
  9–5 Manila hours to the Studio column.

### Nice to have (skip if budget tight)

- **Nav label "Inquiry" is the printed-folio register's correct word
  but a less printed-folio audience reads it as cold/formal** —
  `docs/index.html:1076`. "Contact" or "Get in touch" tests warmer
  for Filipino SME owners. Brief insists on print-folio voice, so
  this is at most an A/B nice-to-have, not a fix.

- **"See the folio" ghost link in the hero competes with "Make an
  inquiry"** — `docs/index.html:1162-1164`. Two CTAs of nearly equal
  weight on the primary conversion page splits attention from the
  brief's single objective. The ghost link is appropriately
  subordinated, but a one-button hero with the folio link demoted
  into the body section heading would be cleaner.

- **No "established since" / count of completed projects** anywhere
  on the site — a single Khand-stamp line "PRACTICING IN BATANGAS
  SINCE 20XX · 0N COMPLETED PROJECTS" in the inquiry strip would
  buy more trust than another decorative SVG.

- **The "We reply within two working days" service promise is buried
  on the inquiry page only** — `docs/inquiry.html:1155`. That
  sentence is the single best trust-line the build owns and it
  should sit beside the home hero CTA where the conversion happens.

## Summary for the synthesiser

The build looks like the brief's printed-folio system but ships a
fake placeholder phone, an anonymous architect, no verifiable facts
on the home page, and zero real photographs of work — so the page is
beautifully art-directed for an objective (qualified inquiry from
trust-needing Filipino + diaspora clients) it does not actually
serve, and must not ship until at least the phone, the principal's
name, and one real client signal are in place.
