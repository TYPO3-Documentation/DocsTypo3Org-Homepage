# AGENTS.md — Homepage of docs.typo3.org

## What this repo is

This is **not a manual**, and most of the assumptions that hold in the other
documentation repos do not hold here. It contains two different things, with
very different blast radius:

1.  `Documentation/` — the content of the https://docs.typo3.org/ homepage and
    its "glue" pages (overview, 404 page, and the "All Documentation" menu that
    every manual shows). This part is reST and is rendered like any other manual.
2.  `WebRootResources/` and `WebRootResources-api.typo3.org/` — the static files
    served from the **web document root** of docs.typo3.org and api.typo3.org.
    These are not documentation. They are the live servers' files: some affect
    every page on the server, some are no longer used at all, and deploying them
    does not always work. Do not assume a file here is live.

Read "Deployment" below before changing anything under `WebRootResources*`.

## Repo structure

```
Documentation/                    # homepage content (reST, rendered like a manual)
  Index.rst                       # the homepage itself
  404.rst                         # the site-wide 404 page
  Home/                           # glue pages (overview, wiki landing)
    ApiTypo3Org.rst               # the text of the api.typo3.org homepage
    RecentlyMovedChapters.rst     # where chapters moved between manuals are recorded
  _mainMenu.rst.txt               # the "All Documentation" menu, on EVERY manual
  mainMenu.json.rst               # renders the above to mainMenu.json
  guides.xml                      # render config; also sets typo3-core-preferred
WebRootResources/                 # served at the document root of docs.typo3.org
  robots.txt                      # crawling policy for the whole site
  llms.txt                        # guidance for AI/LLM clients for the whole site
  js/piwik.js                     # analytics, still linked by rendered pages
  favicon.ico
WebRootResources-api.typo3.org/   # served at the document root of api.typo3.org
  index.html                      # hand-adjusted render of Home/ApiTypo3Org.rst
Documentation-GENERATED-temp/     # local render output, gitignored
```

## Commands

-   `make help` — list targets with descriptions
-   `make docs` — render the homepage content locally with Docker
-   `make test-docs` — render with `--minimal-test`, the same validation CI runs;
    use this to validate any change under `Documentation/` before committing

There is no `make install` and no `Build/Scripts/runTests.sh` in this repo.

## Deployment: straight to production, but verify it arrived

This is the biggest difference from the other manuals. There is no staging step
and no separate release: `.github/workflows/docshome.yml` and `apihome.yml` copy
the files straight to the production servers over SCP.

**A green workflow does not mean the change is live.** As of 2026-09-11,
`https://docs.typo3.org/robots.txt` and `/llms.txt` both still return content with
`Last-Modified: Mon, 24 Mar 2025`, although seven commits have changed them since
and every deploy run reported success. Files that have not changed for years
(`js/piwik.js`, `favicon.ico`) do match the repo, so the copy is not simply
failing everywhere. Deletions do not propagate either: the files removed from
this repository still answer 200 on the live server after a successful run.

The likely cause is the linking described in `WebRootResources/README.md`: the
live server references entries one by one, so a path that is not linked to the
deployed directory keeps serving an old copy no matter how often the workflow
succeeds.

After changing anything under `WebRootResources/`, check the live URL and compare
it against the repo — do not trust the workflow's green check:

```
curl -sI https://docs.typo3.org/<file> | grep -i last-modified
```

If it has not moved, the fix is on the server and needs TYPO3 GmbH, not another
commit here.

-   A push to `main` touching `WebRootResources/**` triggers the deploy to the
    docs.typo3.org document root. That workflow runs with `rm: true`, so **files
    deleted here can be deleted on the live server.**
-   `WebRootResources-api.typo3.org/**` deploys to api.typo3.org through the
    "api.typo3.org Home Page" workflow, which runs on a push to `main` under that
    path and can also be started by hand (`workflow_dispatch`). It uses
    `rm: false`, because the generated API docs live in the same directory and
    must not be removed. **This one works** — see the comparison at the end of this section. Getting
    the file ready to deploy is still a manual process; see the next section.
-   Merging a PR is therefore a production deployment. Treat review of these files
    accordingly.

**New top-level files and directories in `WebRootResources/` do not go live on
their own.** The live server links the entries one by one, so adding a new file
or directory next to `robots.txt` needs a matching change on the server and thus
coordination with TYPO3 GmbH. Changes to files that already exist go live
immediately. See `WebRootResources/README.md`.

### Only the docs.typo3.org target is affected

The two workflows are nearly identical, use the same action and the same
pattern, and every run of either has reported success — but only one of them
arrives. Measured 2026-09-11:

| | `apihome.yml` → api.typo3.org | `docshome.yml` → docs.typo3.org |
|---|---|---|
| Runs | 7 (4 on `push`, 3 by hand) | 4, all on `push` |
| Result | all green | all green |
| **Reaches the server** | **yes** | **no** |
| Evidence | live page byte-identical to `main`; run at `2026-04-27T06:29:23Z`, live `Last-Modified` six seconds later | `robots.txt` and `llms.txt` frozen at `2025-03-24`; deletions do not arrive either |
| `rm:` | `false` | `true` |

So SCP from GitHub Actions to a TYPO3 GmbH host is not broken in general. Whatever
is wrong is specific to the docs.typo3.org web root: a different set of secrets
(`DEPLOY_DOCS_HOST`, `DEPLOY_KEY`, `TARGET_PATH`) and a document root whose
entries are linked one by one. The useful question is not "why is deployment
broken" but "why does the same mechanism land on the API host and not in the docs
web root" — most likely `TARGET_PATH` no longer pointing where the web root reads
from.

The sharpest single case is PR #321: merged `2026-07-17T11:41:00Z`, its deploy run
started `11:41:03Z` and reported success, and the file on the server never
changed.


## The api.typo3.org homepage is built by hand

The page at https://api.typo3.org/ is assembled from two places:

-   `Documentation/Home/ApiTypo3Org.rst` — the **text** of the page (headline,
    the cards linking each TYPO3 version's API, the list for older versions).
-   `WebRootResources-api.typo3.org/index.html` — the **deployed page**: the
    rendered result of that reST, adjusted by hand and committed as HTML.

Nothing regenerates `index.html` automatically. `make docs` does not produce it,
and it is not rebuilt on deploy. The process, which is not automated yet:

1.  Change the wording in `Documentation/Home/ApiTypo3Org.rst`.
2.  Render the documentation so the page comes out with the current theme.
3.  Adjust the rendered page by hand for api.typo3.org.
4.  Commit the finished HTML as `WebRootResources-api.typo3.org/index.html`.
5.  Deploy by running the "api.typo3.org Home Page" workflow.

Two things to watch:

-   **The hand adjustments are not reproducible from the reST.** `index.html`
    contains things its source does not, such as the shortlink added in `08b2a64`,
    alongside styling and menu changes (`0bd5181`, `80eb67d`). A fresh render
    discards all of them, so re-apply them rather than replacing the file
    wholesale — and never edit only `index.html` when the wording changes, or the
    reST source falls out of date.
-   **It holds a copy of content maintained elsewhere in this repo**, such as the
    "All Documentation" menu, and that copy does not update itself. Shared changes
    have to be made again by hand here, as `2f01a91` and `edb02fc` show. Expect
    the two homepages to drift, and check this file when changing the other one.

## Changes here that affect every manual on the server

Several files in this repo are not local to the homepage. Changing them changes
pages across all of docs.typo3.org, including manuals maintained elsewhere:

-   `WebRootResources/js/piwik.js` — rendered manual pages still link this script
    directly, so it runs on pages across the site.
-   `Documentation/_mainMenu.rst.txt` — the contents of the menu that opens from
    the "All Documentation" button, which every manual on the server displays.
    Rendered to `mainMenu.json` via `mainMenu.json.rst`.
-   `WebRootResources/robots.txt` and `WebRootResources/llms.txt` — the crawling
    and AI-client policy for the whole documentation site, not just the homepage.
-   `Documentation/guides.xml` — `typo3-core-preferred` names the TYPO3 version
    the site presents as current.

When one of these changes, say so explicitly in the commit message: the diff
alone does not show that the change reaches beyond this repo.

## Not everything under `WebRootResources/` is still in use

`WebRootResources/README.md` describes `t3SphinxThemeRtd/` as the shared theme
that every rendered manual links to, via the renderer's `replace_static_in_html`
flag. **That is no longer how the site works.** The manuals are no longer built
with Sphinx at all: rendering is done by phpDocumentor Guides, through the
`ghcr.io/typo3-documentation/render-guides` image that `make docs` runs, and
`Documentation/guides.xml` is its config. Nothing produces pages that reference a
Sphinx theme any more. Checked on 2026-09-11:

-   Rendered pages load their CSS and JS from
    `https://cdn.typo3.com/typo3documentation/theme/typo3-docs-theme/<version>/`.
    Neither a current manual (13.4) nor an old one (11.5) references
    `t3SphinxThemeRtd` at all, though the files still serve.
-   `js/piwik.js` **is** still referenced by rendered pages.
-   The Google Tag Manager snippet on live pages comes from render-guides,
    which provides that include itself. `includes/footer.html` held an identical
    copy, but its comment wrapper appears on no live page, so this copy was not
    the source. Local renders carry no GTM at all, since it is added only for
    production.

**`services/` on the live server does not come from this repo.** It is deployed
from `legacy_hook` in https://github.com/TYPO3GmbH/site-intercept, which serves
`ajaxversions.php` (the version selector), `ajaxdownloads.php` and the `404.php`
handler. Version handling in particular lives there now, not here.

What remains in `WebRootResources/` is `robots.txt`, `llms.txt`, `js/piwik.js`
and `favicon.ico` — all verified in use. The leftovers of the Sphinx era
(`t3SphinxThemeRtd/`, `services/VersionMatcher.php`, `js/extensions-search.js`,
`includes/`) have been removed; git history has them if they are ever needed.
They still answer 200 on the live server, because the deploy has not propagated
the removal either — see "Deployment" above.

Verify against the live site before assuming a file here still does anything —
and before deleting one, since the deploy runs with `rm: true`.

## Moving content between manuals

When a chapter moves from one manual into another, or two manuals are merged,
record it in `Documentation/Home/RecentlyMovedChapters.rst`. The content change
itself happens in another repository, but the move is not finished until it is
listed here: readers use this page to find relocated chapters, and the authors of
other manuals use it to repair their own references.

Follow the shape of the existing entries:

-   an `..  _recently-moved-<topic>:` anchor above the section headline;
-   a headline naming the move, e.g. "TSconfig reference into TypoScript Explained";
-   a line in italics giving the version it starts with, e.g.
    `*Starting with the documentation of TYPO3 13.4*`;
-   where the chapters live now, as permalinks or interlink `:ref:` targets;
-   a `..  code-block:: diff` showing the old and the new reference for each moved
    anchor, so other manuals can update their links mechanically;
-   a note where anchors had to be renamed or prefixed to avoid collisions, and
    where a manual has been discontinued altogether.

Entries are removed again once the move is no longer recent.

## CI does not validate `WebRootResources/`

`.github/workflows/test-documentation.yml` renders `Documentation/` only. Nothing
checks `robots.txt`, `llms.txt`, the theme files, or anything else under
`WebRootResources*`, and `make test-docs` does not either. Those files have no
safety net beyond review, so verify them by hand — for `robots.txt`, against a
parser that implements RFC 9309 wildcards (`*` and `$`); Python's
`urllib.robotparser` supports neither and will silently mis-report.

## Documentation writing rules

The reST and content rules are the workspace-wide ones defined in
[TYPO3CMS-Guide-HowToDocument](https://github.com/TYPO3-Documentation/TYPO3CMS-Guide-HowToDocument)
— sentence case headlines, 4-space indentation for directive bodies, single
backticks, an anchor above every headline, American English. Do not restate or
work around them here; if a rule is wrong, fix it in that guide.

Specific to this repo:

-   Validate with `make test-docs` before committing changes under `Documentation/`.
-   `WebRootResources/` is not reST. Match the surrounding file's own format and
    comment style.
-   Never commit or push without being asked.

## Commit message format

-   Prefix the subject with `[TASK]`, `[BUGFIX]` or `[FEATURE]`, then a short
    imperative summary.
-   Explain *why* in the body; the diff already shows what changed. If the change
    touches one of the site-wide files listed above, say so.
-   End with a `Signed-off-by: Your Name` trailer. This repo's history uses the
    name only, without an email address.
-   If AI assistance went beyond spelling and grammar, add an `Assisted-by:` trailer,
    e.g. `Assisted-by: Claude Opus 5 <noreply@anthropic.com>`.
-   **No `Releases:` trailer.** The homepage is not versioned and this repo has a
    single `main` branch, so there is nothing to backport and no `backport <version>`
    labels apply — unlike the manuals that maintain several LTS branches.

## Pull requests

-   When a PR contains a single commit, the PR title and body must match that
    commit's subject and body exactly.
-   Remember that merging deploys to production. If a PR touches
    `WebRootResources*`, the description should make the live effect obvious to
    the reviewer.

## References

-   `WebRootResources/README.md` — how the web root deployment and the shared
    theme directory work
-   [TYPO3CMS-Guide-HowToDocument](https://github.com/TYPO3-Documentation/TYPO3CMS-Guide-HowToDocument)
    — writing style guide and reST reference
-   https://docs.typo3.org/m/typo3/docs-how-to-document/main/en-us/Howto/EditLocal.html
    — commit and PR conventions
