﻿.. include:: /Includes.rst.txt
.. _start:

.. _examples:
.. _guides:
.. _tutorials:

===========================================
Welcome to the official TYPO3 Documentation
===========================================

..       1         2         3         4         5         6         7         8
   45678901234567890123456789012345678901234567890123456789012345678901234567890
   Usual maximum line length is 79 char plus newline (=80 in total). This
   allows easy online editing and side by side comparisons. Technically lines
   can have any length, and there may be reasons to have longer lines. Try to
   approximate the 79+1 line length whenever you change text anyway.

.. sidebar:: About

   * :ref:`About TYPO3 Documentation <about-documentation>`
   * :ref:`Using this site <usage-start-page-manual>`
   * :ref:`Documentation News <news>`

TYPO3 CMS is an Open Source Enterprise Content Management System powered by
PHP.

.. rst-class:: horizbuttons-primary-m

*  :ref:`getting-started`
*  :ref:`references`
*  :ref:`extensions`

__________

.. _start-getting-stared:

Getting Started with TYPO3
==========================

.. container:: row m-0 p-0

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: :ref:`Getting Started <getting-started>`

         .. container:: card-body

            *  Follow the :ref:`quick installation guide <t3install:install-via-composer>`
               to install TYPO3 using Composer.

            *  The :ref:`t3start:start` introduces you to TYPO3's backend - the interface
               used for managing content and configuring your TYPO3 installation.

            *  Add a domain, set up languages and configure URL handling with the
               :ref:`site configuration <sitehandling-basics>` tutorial.


   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: :ref:`Creating & Managing Content <creatingmanagingcontent>`

         .. container:: card-body

            *  The :ref:`editors tutorial <t3editors:start>` explains the creation and management of pages and content.
            *  The :ref:`form system extension <form:quickstartEditors>` is a powerful
               tool that gives backend users the ability to create web forms.

   .. _start-theme:

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: :ref:`Templating & Sitepackages <templating>`

         .. container:: card-body

            *  :ref:`Fluid is TYPO3’s templating engine. <t3coreapi:fluid>`
               Fluid acts as the glue between your static HTML templates and the content you create in TYPO3’s backend.

            * :ref:`Sitepackages <t3sitepackage:start>` allow you to bundle your Fluid templates and other site assets into a single, reusable extension.


   .. _start-extdev:

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: :ref:`Developing & using extensions <extensions>`

         .. container:: card-body

            Getting started with extension development:

            *  :ref:`Introduction to extensions in TYPO3
               <t3coreapi:extension-architecture-introduction>`

            *  Extension :ref:`t3coreapi:extension-files-locations`

            *  :ref:`t3coreapi:extension-naming` and :ref:`t3coreapi:cgl`


   .. _start-configuration:

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: :ref:`Configuring TYPO3 <configuringTYPO3>`

         .. container:: card-body

            The :ref:`configuration overview <t3coreapi:config-overview>`
            in :ref:`TYPO3 Explained <t3coreapi:start>`
            gives an overview of the various configuration options available.
            It contains a description of the main system configuration options.

            *  :ref:`Site Handling and Configuration <sitehandling-basics>` shows you how
               to setup domains, languages, human-readable URLs and error pages.

            *  :ref:`Backend User Management <t3start:user-management>` explains how you
               setup backend users and grant them specific access to your installation of
               TYPO3.

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: :ref:`References <references>`

         .. container:: card-body

            *  :ref:`TYPO3 Explained <t3coreapi:start>` contains detailed information
               about concepts and APIs for core and extension developers.

            *  The `Core changelog <https://docs.typo3.org/c/typo3/cms-core/master/en-us/>`__
               lists all relevant changes for each TYPO3 version since 7.

            * The :ref:`references section <references>` lists all available reference manuals.



   .. _start-localization:

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: How to create translations

         .. container:: card-body

            *Internationalization* | *Translation* | *Multiple Languages*

            *  :ref:`Supported languages <t3coreapi:i18n_languages>`

            *  :ref:`Manage backend languages <t3start:changing-backend-language>`

            *  :ref:`Working with languages as an editor <t3editors:languages>`

            *  :ref:`t3coreapi:internationalization` in "TYPO3 Explained"

__________

Contributing
============

.. _start-coredev:

.. container:: row m-0 p-0

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: Contribute to the core

         .. container:: card-body

            The "Core contribution guide" contains information for creating core
            patches:

            *  :ref:`Create a patch <t3contribute:quickstart-create-a-patch>`

            *  :ref:`Commit message rules <t3contribute:commitmessage>`

            *  :ref:`Setup an installation with DDEV <t3contribute:ddev>`


            But contributions aren't just about writing patches. Contributions happen
            in numerous other ways, including

            *  :ref:`Writing issues <t3contribute:forge-index>`

            *  :ref:`Review patches <t3contribute:improving-a-patch>`



   .. _start-contribute-docs:

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header

            .. rubric:: Contribute to official documentation

         .. container:: card-body

            You are welcome to click on the "Edit on GitHub" button on any page to propose
            a change in the official documentation whenever you see something that you
            think can be improved.

            *  The blog post `Start Improving Docs Now to Grow TYPO3
               <https://typo3.com/blog/start-improving-docs-now-to-grow-typo3>`__ gives a
               good introduction to documentation contribution.

            *  :ref:`h2document:docs-contribute` explains the workflow for contributing.

            *  The documentation is edited in text files using reStructuredText syntax. Use
               the :ref:`rest-cheat-sheet` to lookup most commonly used directives.

            *  General conventions can be found in :ref:`h2document:conventions`

            *  :ref:`h2document:docs-official-how-you-can-help` lists some general tasks to
               get you started.

.. toctree::
   :hidden:

   Home/GettingStarted
   Home/CreatingManagingContent
   Home/Templating
   Home/ConfiguringTYPO3
   Home/ExtensionManuals
   Home/References
   Home/Contribute

..
   Cheat Sheets         <https://docs.typo3.org/m/typo3/docs-cheatsheets/master/en-us/>

            Support is available via StackOverflow and Slack. Visit the `help page
         <https://typo3.org/help>`__ for more information.

         For information about the different versions of TYPO3 and its system
         requirements, visit https://get.typo3.org.
