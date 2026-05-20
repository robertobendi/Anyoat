# FRONTEND ENGINEER REVIEW

## What I saw

Screenshots in `review/` are absent (only the empty directory exists), so I'm reading directly from the five exported HTML files in `docs/`. The build is a five-page static export (`index.html`, `work.html`, `practice.html`, `journal.html`, `inquiry.html`) sharing a 1,050-line inline `<style>` block in each `<head>` (PebbleStack-style — CSS in head, no external stylesheet). Markup is mostly clean: each page has exactly one `<h1>` (the italic hero `Bahay, anyo, hangin.` etc.), `<html lang="en">` is set, a `.skip-link` to `#main` exists, `<header>`/`<nav aria-label="Primary">`/`<main id="main">`/`<footer>` landmarks are present, the menu toggle has `aria-controls` + `aria-expanded`, decorative SVGs carry `aria-hidden="true"`, and meaningful SVGs (hero illustrations) carry `role="img"` + `aria-label`. Forms on `inquiry.html` use `<label for=...>` correctly on the four real inputs, with `autocomplete`, `required`, and `type` set sensibly; a honeypot `_hp` field is correctly hidden via `aria-hidden`+`tabindex=-1`.

However, every internal href is root-absolute against extension-less URLs that the static export never produces: `<a href="/work">` on index.html:1073 but the file is `docs/work.html` — nothing rewrites `/work` to `/work.html`, and there is no `.htaccess` or `_redirects` in `docs/`. The brand link is `href="/"` (1055). The inquiry form posts to `action="/forms/contact"` (inquiry.html:1198) — no such endpoint. `docs/sitemap.xml` ships with `<loc>http://127.0.0.1:64865/</loc>` and an entry for a non-existent `/blog`; `docs/robots.txt` declares `Sitemap: http://127.0.0.1:64865/sitemap.xml`. The `og:title`/`og:description` block is byte-identical across all five pages and reads "Anyoat — Architectural practice, Batangas" (note: brand is "Anyo at Disenyo" everywhere else). `og:image` is `/uploads/logo.jpg` — a relative path OG scrapers won't follow. CSS defines `.site-nav a[aria-current="page"]` styling in all five files but no nav link in any file actually sets `aria-current` — the "you are here" mustard dot never renders. The "Preferred contact route" radio group at inquiry.html:1219 uses a bare `<label>` with no `for=` as the group caption (no `<fieldset>`/`<legend>`).

## Findings

### Ship blockers (must fix before publish)

- **Site-wide internal links** — every `<a href="/work">`, `/practice`, `/journal`, `/inquiry`, `/` in nav (index.html:1073-1076), CTAs (1162, 1164, 1198, 1231, 1267, 1309, 1335, 1349), footer nav (1373-1377), and the equivalent lines in every other page — these resolve to nothing in the shipped `docs/` (the files are `work.html` etc., and no rewrite layer ships with the export). Clicking the primary nav 404s on any vanilla static host. → Rewrite all internal hrefs to the actual exported filenames (`href="work.html"`, `href="index.html"` for "Home", etc.) or ship a `_redirects`/`.htaccess` that maps extensionless URLs to `.html`.
- **`docs/sitemap.xml` and `docs/robots.txt`** — sitemap.xml:4 and :7 contain `http://127.0.0.1:64865/` and a `/blog` URL that doesn't exist in the build; robots.txt:5 declares `Sitemap: http://127.0.0.1:64865/sitemap.xml`. Search engines will ingest a localhost host and a phantom URL. → Regenerate both with the production domain and the real five-page URL set (`/`, `/work`, `/practice`, `/journal`, `/inquiry`), and drop the `/blog` entry.

### Important (should fix this revision pass)

- **`<meta property="og:title">` and `og:description`** — identical strings on all five pages (e.g. index.html:11-12 vs inquiry.html:11-12), and the title says "Anyoat" while the brand everywhere else is "Anyo at Disenyo". Social shares of the Inquiry/Work/Journal/Practice pages will all show the homepage card. → Give each page its own `og:title` and `og:description` (mirroring the existing per-page `<title>` and `<meta name="description">`) and correct the wordmark to "Anyo at Disenyo".
- **`og:image` is a root-relative path** (`/uploads/logo.jpg`, index.html:13 and four others) — the OG spec requires absolute URLs and major scrapers (Facebook, Slack, X) drop relative ones. → Replace with the full `https://<domain>/uploads/logo.jpg` URL once the deploy domain is known.
- **Inquiry form `action`** — `<form ... action="/forms/contact">` (inquiry.html:1198) targets a backend route the static export does not provide; submission will produce a 404 page or the host's default error. → Either point the form at a real handler (Formspree, Netlify Forms, the production PHP endpoint) or document the intended host-side rewrite; do not ship a form that visibly fails.
- **Nav "you are here" state never applied** — CSS for `.site-nav a[aria-current="page"]` exists in all five files (index.html:252, 259, 309 etc.) but no `<a>` in any of the five `<nav class="site-nav">` blocks (1072-1077) sets `aria-current`. The mustard 8×8 active marker is dead CSS, and screen-reader users get no current-page cue. → Add `aria-current="page"` to the appropriate link in each file's nav (e.g. `<a href="work.html" aria-current="page">Work</a>` in `work.html`).
- **Radio group has no programmatic label** — at inquiry.html:1219 the "Preferred contact route" caption is `<label style="margin-top: 1.4rem;">` with no `for` attribute, sitting above three radio inputs. The individual radios are labeled, but the group caption is not associated. → Wrap the three radios in `<fieldset>` with the caption as `<legend>` (and remove the bare `<label>`), or convert the caption to a `<span id="route-label">` referenced via `role="radiogroup" aria-labelledby="route-label"` on the wrapper.

### Nice to have (skip if budget tight)

- **Tagalog passages not marked with `lang="tl"`** — phrases like `Bahay, anyo, hangin.` (index.html:1159), `Hangin. Liwanag. Lilim.` (1178-1180), and the principal's pull quote (practice.html:1159) sit inside `<html lang="en">` with no language switch, so screen readers will read them with English phonemes. → Wrap each Tagalog block in `<span lang="tl">…</span>`.
- **Journal index links all point to `/journal`** (journal.html:1209, 1217, 1225, 1233, 1241) — five different note titles, one destination. Either back the notes with real per-post `.html` pages or mark the index as a preview so readers don't click expecting unique content.
- **Footer logo `<img>` has no `loading="lazy"`** (e.g. index.html:1361). It's a 72×72 logo so the perf impact is negligible, but it's deep below the fold on every page and a free hint. → Add `loading="lazy" decoding="async"`.
- **`<input type="text">` for "Phone or email"** (inquiry.html:1203) is paired with `autocomplete="email"`, which biases the browser's autofill to the wrong field when the user is supplying a phone number. → Either split into two inputs (`type="email"` + `type="tel"`) or set `autocomplete="off"` and adjust the label.

## Summary for the synthesiser

The markup is largely well-structured and accessible, but the export is shipped against a URL scheme (`/work`, `/practice`, `/inquiry`) that doesn't exist as files and isn't rewritten — primary navigation, every CTA, and the contact form all 404 on a plain static host, and `sitemap.xml`/`robots.txt` still carry localhost URLs.

---

programmer review written.
