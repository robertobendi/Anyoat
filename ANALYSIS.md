# ANALYSIS

## Business
Anyo at Disenyo is a small architectural services practice based in Batangas City, Philippines. The name is a bilingual play — "Anyo" (Tagalog: form/shape) and "Disenyo" (Tagalog: design), with "at" sitting as both English preposition and Tagalog "and" — positioning the firm around the union of form and design. Public footprint is thin (a Facebook page with ~281 followers and one check-in), which reads as a boutique or owner-led studio rather than a multi-office firm. Revenue model is almost certainly fee-for-service architectural work — residential and small commercial design, possibly drafting, permitting, and construction-administration services — billed by project or by phase. The truncated description ("an architectural firm with service expertise on…") implies a defined specialty that the rebuild needs to surface; for now treat it as **likely residential + small commercial design and consulting** [verify].

## Audience
- **Primary**: prospective clients in Batangas and surrounding Calabarzon provinces planning to build or renovate — typically 30–55, middle-class to upper-middle-class Filipino homeowners or small-business owners weighing whether to engage a designer at all, what it will cost, and whether this firm is credible. They arrive looking for evidence: previous projects, the principal's face, a phone number that answers.
- **Secondary**: contractors and trades looking for a design partner; referral sources (engineers, real-estate agents, family); occasional remote diaspora clients building a family home back in Batangas who will judge the firm entirely on its online presence.

## What they're trying to convey
- Considered, name-driven craft — the bilingual wordplay and tight monogram signal that this is a designed practice, not a drafting shop.
- Local roots in Batangas, professional services framing ("Architectural Services" sits under the mark).
- Small enough to be personal, serious enough to be hired — but the current Facebook-only presence undercuts the serious signal.

## What's broken about the current presentation
- The brand lives entirely on a Facebook page — for a buyer evaluating a long, expensive commitment, a third-party social profile reads as provisional and unowned.
- No portfolio is reachable from the public page snapshot — for an architecture firm, **work shown is the entire sales pitch**, and its absence is the single biggest gap.
- No phone, email, address, or hours visible in what was scraped; the buyer's first job ("how do I contact them?") fails.
- Description is truncated mid-sentence ("…with service expertise on…"), so the firm's actual specialty never lands.
- No principal-architect introduction — small Filipino practices are bought on trust in the named architect, and that face/bio is missing.
- Facebook's chrome (the blue, the generic UI) overwhelms the firm's own restrained olive/cream brand whenever someone visits.

## Primary objective
Convert a prospective client browsing for an architect in Batangas into a qualified inquiry (phone call, Messenger, or contact form) by proving the firm can do the work. Secondary: establish credibility for diaspora and out-of-province clients who will never visit in person; provide a permanent, owned home for the brand that outlives the Facebook page.

## Hard facts to preserve
- Business name: **Anyo at Disenyo** (often styled "ANYO at DISENYO").
- Tagline / sub-mark: **Architectural Services**.
- Location: **Batangas City, Philippines** [verify exact street address — not present in scrape].
- Facebook source URL: `facebook.com/anyoatdisenyo`.
- Followers / social proof at time of scrape: 281 likes, 1 check-in [low signal, do not feature].
- Service category: **architectural firm with service expertise on…** [truncated — verify full specialty list with client before launch].
- Phone, email, hours, principal's name: **[verify — none captured in scrape]**.

## Brand assets observed
- **Logo** `[from og-image]`: a tight square mark on a near-white cream field. Centerpiece is an interlocking lowercase **"a" / "d" monogram** in flat olive/khaki green — the two letters loop into one continuous ribbon, reading as both initials and as a single sculptural form (which lines up with the "form/design" naming). Beneath the mark, in two stacked uppercase lines, is the wordmark: **"ANYO at DISENYO"** (with "at" set smaller, in mixed case) over **"ARCHITECTURAL SERVICES"**, both in a dark warm-grey humanist sans with comfortable tracking. The source is a Facebook URL, so this og-image is the page's profile picture and is the canonical logo the rebuild must use.
- **Brand colors observed** (eyedropped from og-image pixels — the `palette.json` values are Facebook chrome and must be discarded):
  - `#6E6E3C` — olive / military-khaki — the monogram itself, the primary brand color.
  - `#4A453F` — warm dark charcoal — the wordmark and sub-mark text.
  - `#F2F1EB` — off-white cream — the logo background, the implied page surface.
- **Imagery style**: no photographs visible in the scrape — Facebook locked the page's posts behind authentication. Brand-level material on display (just the logo) reads as **flat, restrained, vector-illustrative**; the firm has not signalled a photography style publicly, so direction is open for the rebuild to define.
- **Decorative motifs already in use**: none. The brand is bare — one monogram, one wordmark, two-color flat palette. No badges, patterns, ornaments, or marginalia. This is significant: any decoration the rebuild adds is *new* direction, not preservation.
- **Social-media caveat**: Source is a Facebook URL (`social_family: "facebook"`) — anonymous scraping yielded an almost-empty HTML page, no inline images, no posts, no links, no headings. The scraped `palette.json` is Facebook UI chrome (blues, greys) and is **not the brand palette**. Visual signal comes entirely from `og-image.jpg` (the profile-picture logo); there is no screenshot. The next stages should not try to invent post copy, project lists, or testimonials from scraps — those facts need to come from the client.

## Voice
**Considered, grounded, quietly bilingual.** Short sentences, present tense, plainspoken English with occasional Tagalog inflection where it lands naturally (the firm's name already does this work). No marketing puffery, no "passionate team of creatives" — this is an audience that respects restraint, and an architect who chose a monogram this tight will not want adjective-heavy copy.

## Constraints the next stage must respect
- No `EXTRA_INSTRUCTIONS.md` and no `source/references/` — the user has not locked typography, palette, or layout direction. Direction is open.
- Logo and brand palette are fixed: the olive-green monogram, the cream surface, and the warm-charcoal text are the firm's actual identity and must carry through. The Facebook-blue values in `palette.json` are noise — discard them.
- Voice must work bilingually (the brand name is half-Tagalog) — the typographic system needs to set Tagalog and English equally cleanly, which rules out display faces with eccentric character coverage.
- The site's primary job is **showing work** — whichever direction is chosen must reserve a portfolio-grade image canvas (generous, uncrowded, high-fidelity). A decoration-dense aesthetic that fights the photography is the wrong move here.
- The current "facts" inventory is incomplete (address, phone, principal, specialty all `[verify]`) — the chosen direction should degrade gracefully when content is sparse; do not propose a layout that demands six testimonials and twenty project tiles to feel populated.
