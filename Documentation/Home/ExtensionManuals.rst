:template: extensions.html

.. _extensions:

=============================
Developing & Using Extensions
=============================

.. ATTENTION:
   Be careful with this special folder /typo3cms/extensions !!!

.. Note the special template 'extensions.html' (see beginning of this file)

.. First
   You may add normal rst content here.

Extension Development
=====================

.. container:: row m-0 p-0

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: Getting started with extension development

         .. container:: card-body

            *  :ref:`Introduction to extensions in TYPO3
               <t3coreapi:extension-architecture-introduction>`

            *  Extension :ref:`t3coreapi:extension-files-locations`

            *  :ref:`t3coreapi:extension-naming` and :ref:`t3coreapi:cgl`

            * :doc:`t3extbasebook:Index`


   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: TYPO3 Explained - API Quicklinks

         .. container:: card-body

            *  :ref:`QueryBuilder <t3coreapi:database-query-builder>` based on Doctrine
            *  :ref:`t3coreapi:DependencyInjection`
            *  :ref:`t3coreapi:request-handling`

Extension Manuals
==================

.. container:: row m-0 p-0

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: System Extensions

         .. container:: card-body

            Here you can find documentation of system extensions and third party extensions,
            if available.

            System extensions are shipped with the TYPO3 core. A list of all available
            system extension documentation is found in the
            :ref:`system extensions section <System-Extensions>`.


   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: Third-party extensions

         .. container:: card-body

            Third party extensions are available through the
            `TYPO3 Extension Repository (TER) <https://extensions.typo3.org/>`__ or via composer.

            **Use the form below to search by extension keys.**

Extension Manual Search
=======================

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
   Extension Manuals  <https://docs.typo3.org/Home/ExtensionManuals.html#extension-manual-search>
