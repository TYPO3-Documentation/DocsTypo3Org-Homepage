:template: extensions.html

.. _extensionsManualSearch:

=======================
Extension manual search
=======================

.. ATTENTION:
   Be careful with this special folder /typo3cms/extensions !!!

.. Note the special template 'extensions.html' (see beginning of this file)

.. First
   You may add normal rst content here.

Search for documentation of third party extensions on docs.typo3.org.

.. important::

   The search results only contain documentation for third party extensions rendered on docs.typo3.org.

   It does not

   *  show documentation for third party extensions which are **not** rendered on docs.typo3.org
   *  show documentation for system extensions


.. Second:
   Don't do anything more!
   Template 'extensions.html' will insert the necessary
   javascript and html to render the extension selection
   form here.

.. How does it work?
   This document has the file-wide-metadata field 'template'
   set to 'extensions.html'. So this document will use the
   template 'extensions.html' for rendering instead of the
   usual 'page.html' of normal pages.
   The logic for this is in __init__.py of t3SphinxThemeRtd,
   which is not only a theme but is loaded as Sphinx extension
   as well.
