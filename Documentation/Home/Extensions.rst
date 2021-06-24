:template: extensions.html

.. _extensions:

==========
Extensions
==========

.. ATTENTION:
   Be careful with this special folder /typo3cms/extensions !!!

.. Note the special template 'extensions.html' (see beginning of this file)

.. First
   You may add normal rst content here.

Here you can find documentation of system extensions and third party extensions,
if available.

The url schema for third party extensions is:
``docs.typo3.org/p/<VENDOR>/<EXTKEY>/<VERSION>/en-us``.

The url schema for system extensions is:
``docs.typo3.org/c/typo3/cms-<EXTKEY>/<VERSION>/en-us/``

System extensions are shipped with the TYPO3 core. A list of all available
system extension documentation is found in the
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

.. toctree::
   :hidden:

   Extension Development Basics <https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ExtensionArchitecture/Index.html>
   Extensions with Extbase & Fluid <https://docs.typo3.org/m/typo3/book-extbasefluid/master/en-us/>
   SystemExtensions
