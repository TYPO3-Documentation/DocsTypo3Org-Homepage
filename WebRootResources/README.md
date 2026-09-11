https://docs.typo3.org/ web document root resources
===================================================

The files in this directory are published in the web document root of the
documentation server at https://docs.typo3.org/.

Contents
--------

*   `robots.txt` — crawling policy for the whole documentation site.
*   `llms.txt` — guidance for AI and LLM clients, also site-wide.
*   `js/piwik.js` — analytics; rendered manual pages link this script directly.
*   `favicon.ico`

Deployment
----------

Pushing to the `main` branch triggers the "docs.typo3.org Home Page" workflow
(`.github/workflows/docshome.yml`), which copies this directory to the live
server over SCP. It runs with `rm: true`, so removing a file here can remove it
from the live server as well.

Two things to know before relying on that:

*   **A successful workflow run does not prove the change is live.** As of
    2026-09-11, `robots.txt` and `llms.txt` on the live server still carried
    `Last-Modified: Mon, 24 Mar 2025`, although several commits had changed them
    since and every deploy run reported success. After changing a file here,
    check the live URL:

        curl -sI https://docs.typo3.org/<file> | grep -i last-modified

*   **New files and directories in this directory do not go live on their own.**
    The live server references the entries one by one, so adding something next
    to `robots.txt` needs a matching change on the server, and therefore
    coordination with TYPO3 GmbH. Changes to files that already exist do not.

What is *not* served from this directory
----------------------------------------

*   **`/services/`** is deployed from `legacy_hook` in
    https://github.com/TYPO3GmbH/site-intercept, not from here. It provides
    `ajaxversions.php` (the version selector of a rendered manual),
    `ajaxdownloads.php` and the `404.php` handler. Version handling lives there.

*   **The theme.** Manuals are rendered with phpDocumentor Guides, and the
    rendered pages load their CSS and JavaScript from
    `https://cdn.typo3.com/typo3documentation/theme/typo3-docs-theme/<version>/`.

    This directory used to hold `t3SphinxThemeRtd/`, a Sphinx theme that every
    manual linked to because the render deployment ran with
    `replace_static_in_html 1`. Sphinx is no longer used for rendering, no
    published page referenced those files any more, and they have been removed
    along with `services/VersionMatcher.php` and `js/extensions-search.js`.

*   **The `includes/` files.** This directory used to hold
    `includes/footer.html` with the Google Tag Manager container, and an empty
    `includes/header.html`. render-guides provides that include itself now.
    Rendered pages do carry the GTM snippet, but the comment wrapper around the
    copy kept here appears on no live page, so this copy was not the source. The
    files were removed with the rest.

All of the above remain in the git history if they are ever needed.

Before assuming a file here still does something, check it against the live
site — and check carefully before deleting one, because the deploy can delete it
from the server too.
