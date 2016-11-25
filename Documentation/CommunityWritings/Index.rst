
.. include:: ../Includes.txt


===========================================
Community Writings
===========================================


Extensions in the focus
=======================

What developers and users say about extensions.

Why have this here?
Choosing the right extension often is a difficult thing. While TER provides a list
of all available extensions and these (hopefully!) have their own documentation
it's often important to know: Is it under active development? Who is the maintainer?
Is it planned to keep it compatible with future TYPO3 versions? Futureproof?
The idea is to place information here that's helpful in decision making about
which extension to choose.


.. contents:: Contents:
   :local:
   :backlinks: top


ext:devlog
----------

2016-11-14 by François Suter at `Forge <https://forge.typo3.org/news/810>`__:

   Version 3.0 released and moved to GitHub

   The road to devlog version 3.0 has been long and bumpy indeed. Years ago Fabien Udriot
   started a brand new version for TYPO3 4.5, using ExtJS for the backend module. The work
   was never finished and ExtJS fell from grace. The project lay dormant for a couple of years.
   Then an attempt was made to base the devlog on TYPO3's logging API, but this also faltered along the way.

   About last year I finally found the motivation to give the project yet another fresh start.
   Alternating sprints and breaks, the new version was eventually ready. It is entirely rewritten,
   with a squeaky clean code base. The backend module relies on jQuery and DataTables for paginating,
   searching and filtering. The "Clear log entries" feature is now available from a convenient drop-down.

   The devlog also now uses a concept of log writers, which makes it possible to route devlog
   calls to different outputs/storages. By default, the extension provides a database and a file writer.

   Last but not least, I moved the extension to GitHub. Hopefully this will help people contribute and
   maybe also shift ownership to someone else, as I don't feel like continuing to maintain this extension.
   New home: https://github.com/fsuter/devlog


ext:external_import
-------------------

2016-11-17 by François Suter: External Import moving to GitHub

   The repositories for extension "external_import" and all related projects
   were moved to GitHub. Here's the list of involved extensions and the URL
   of their new home:
   `external_import    <https://github.com/cobwebch/external_import>`__,
   `externalimport_tut <https://github.com/cobwebch/externalimport_tut>`__,
   `svconnector        <https://github.com/cobwebch/svconnector>`__,
   `svconnector_csv    <https://github.com/cobwebch/svconnector_csv>`__,
   `svconnector_feed   <https://github.com/cobwebch/svconnector_feed>`__,
   `svconnector_json   <https://github.com/cobwebch/svconnector_json>`__,
   `svconnector_sql    <https://github.com/cobwebch/svconnector_sql>`__.
   Happy request pulling!


ext:powermail_finisher_ftp
--------------------------

From the README:

   This extension acts as finisher for the extension powermail and does 2 things:
   1. create an XML file with the data of the form
   2. upload the XML by means of FTP

2016-11-25 Georg Ringer `tweeted <https://twitter.com/georg_ringer/status/802083310449082368>`__:

   In case you ever need powermail form data transferred as XML via FTP,
   you could use my extension `powermail_finisher_ftp
   <https://github.com/georgringer/powermail_finisher_ftp>`__.


ext:templavoilà
---------------

2016: Alexander Schnitzler is working on code refactoring and achieving
compatibility with TYPO3 7 LTS (= 7.6). `Read more! <https://www.templavoila.support/>`__




External Blogposts and Writings
===============================

-  2016-11-21 Bernd Wilke has started writing on `"TYPO3 and StackOverflow"
   <https://docs.typo3.org/typo3cms/drafts/github/T3DocumentationStarter/Public-Info-009/>`__.
   You are invited to help and contribute.

-  ...

-  2016-11-11 Blogpost by Marcus Schwemer: `“Let’s encrypt” on localhost
   <http://typo3worx.eu/2016/11/lets-encrypt-on-localhost/>`__

-  ...

-  2016-07-27 Blogpost by Marcus Schwemer: `5 Ways to Publish a TYPO3 Extension
   <http://typo3worx.eu/2016/07/5-ways-to-publish-a-typo3-extension/>`__

-  ...

