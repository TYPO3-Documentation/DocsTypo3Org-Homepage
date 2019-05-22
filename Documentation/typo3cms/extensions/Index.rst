:template: extensions.html

.. _extensions:

===========================
Extensions by Extension Key
===========================

.. ATTENTION:
   Be careful with this special folder /typo3cms/extensions !!!

.. Note the special template 'extensions.html' (see beginning of this file)

.. First
   You may add normal rst content here.

Here you can find documentation of extensions if available and successfully rendered.
The url schema is docs.typo3.org/typo3cms/extensions/<EXTKEY>/<VERSION>/ and includes
system extensions as well as third party extensions.

System extensions are shipped with the TYPO3 core. See the
:ref:`system extensions section <System-Extensions>`.

Third party extensions are available through the
`TYPO3 Extension Repository (TER) <https://extensions.typo3.org/>`__.

**Use the following form to search by extension keys.**

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

