https://docs.typo3.org/ web document root resources
===================================================

This directory contains static resources like css and js files.

The content files and directories of this folder are published
in the web document root on the documentation live server at
https://docs.typo3.org/.

Changing these files in the 'master' branch of the 'homepage' repository
at https://github.com/TYPO3-Documentation/DocsTypo3Org-Homepage
automatically updates these resource files on the documentation server.

The resources here especially contain the main 't3SphinxThemeRtd' folder
that is used by all rendered documentation published to the documentation server:
Usually, if rendering documentation of some TYPO3 project locally, the result is 'self contained'
and brings all required static resources on its own. For the live documentation
server rendering deployment however, the docs render container uses the flag "-c replace_static_in_html 1".
With this flag, links in rendered documentation to static resources like css files change
and point to "/t3SphinxThemeRtd/...", absolute from the document root of the live server. Thus, all
rendered documentation projects point to the same .css and .js files to reduce bandwith consumption,
increase browser caching, and giving the documentation team a central place if static files should
change that then change the pages of *all* rendered docs.