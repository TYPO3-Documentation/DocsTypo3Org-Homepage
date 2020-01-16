.. include:: Includes.txt

.. _start:

===========================================
Welcome to the official TYPO3 Documentation
===========================================

TYPO3 CMS is an Open Source Enterprise Content Element System based on PHP.

__________________________________________________

Quick links:
    :ref:`t3install:start` |
    :ref:`TYPO3 Explained <t3coreapi:Start>` |
    `Core ChangeLog <https://docs.typo3.org/typo3cms/extensions/core/latest/>`__ |
    :ref:`TCA Reference <t3tca:Start>` |
    :ref:`TSconfig Reference <t3tsconfig:Start>` |
    :ref:`TypoScript Reference <t3tsref:Start>` |
    :ref:`ViewHelper Reference <t3viewhelper:Start>` |
    :ref:`Core Contribution Guide <t3contribute:start>`

__________________________________________________

How the documentation is organized
==================================

* :ref:`Tutorials and Guides <tutorials>` is a comprehensive list of
  further guides and tutorials for each area of the CMS.
* The :ref:`references` section provides information about the TYPO3 core
  for a technical audience (developers, integrators). The main reference
  manual is :ref:`t3coreapi:start`.
* :ref:`System-Extensions` contains documentation for system
  extensions. These are extensions that are included in the
  TYPO3 core.


__________________________________________________

.. _start-theme:

Theme
=====

*Theme* | *Templating* | *Sitepackage*

It is good practice to create a **Sitepackage**. This is an extension which
contains the resources required for a theme.

Sitepackage
    * `Concept of Sitepackages <https://www.slideshare.net/benjaminkott/typo3-the-anatomy-of-sitepackages>`__
    * :ref:`t3sitepackage:start`

More introductions
    * The `Fluid documentation <https://github.com/TYPO3/Fluid>`__
      contains information about Fluid. As it is an independent project, the documentation is not
      maintained on docs.typo3.org.
    * The system extension :ref:`fluid_styled_content <fsc:start>` handles the rendering of the default
      set of content elements shipped with the core by using the template engine
      `Fluid <https://typo3.org/fluid>`__
    * :ref:`Backend layouts <t3coreapi:be-layout>`
    * :ref:`Create custom content elements <t3coreapi:adding-your-own-content-elements>`

References
    * :ref:`t3tsref:start`
    * :ref:`t3viewhelper:start`

__________________________________________________

.. _start-extdev:

Extension development
=====================

* :ref:`QueryBuilder <t3coreapi:database-query-builder>` based on
  Doctrine
* :ref:`t3coreapi:DependencyInjection`
* :ref:`t3coreapi:request-handling`
* :ref:`t3coreapi:mail`

More topics can be found in the :ref:`API Overview <t3coreapi:api-overview>`
in "TYPO3 Explained".

Are you are an extension author and want to add documentation?
Please read :ref:`h2document:how-to-start-documentation-for-ext`.

__________________________________________________

.. _start-configuration:

Configuration
=============

A major feature for TYPO3 is its configurability. The :ref:`t3coreapi:config-overview`
in "TYPO3 Explained" gives you an overview of various configuration languages.

Specifically, you might want to

* Set up the :ref:`site configuration <sitehandling-basics>` in the backend to configure
  the domain, languages, URLs and error pages.
* Configure :ref:`rte_ckeditor <ckeditor:configuration>`
  to enhance the editing experience when handling rich text editing.
* :ref:`Configure the form system extension <form:quickstartIntegrators>` to create
  custom forms for the frontend.
* :ref:`Configure backend users <t3start:user-management>`

For further information, look in the references:

* :ref:`t3tsref:start`: TypoScript is used for configuration *and* templating.
* :ref:`t3tca:start`: TCA is specific to database fields and how they behave and
  can be edited in the backend.
* :ref:`t3tsconfig:start`: is used to configure and customize the backend on a page
  (page TSconfig) and a user or group basis (user TSconfig).

__________________________________________________

.. _start-localization:

Multiple languages
==================

*Internationalization* | *Translation* | *Multiple Languages*

* :ref:`Supported languages <t3coreapi:i18n_languages>`
* :ref:`Manage backend languages <t3start:changing-backend-language>`
* :ref:`Working with languages as an editor <t3editors:languages>`

__________________________________________________

.. _start-coredev:

Core development contribution
=============================

    * :ref:`Create a patch <t3contribute:quickstart-create-a-patch>`
    * :ref:`Commit message rules <t3contribute:commitmessage>`
    * :ref:`Setup an installation with DDEV <t3contribute:ddev>`

__________________________________________________

.. _start-contribute-docs:

Contribute to official documentation
====================================

You are welcome to click on the "Edit me on GitHub" button on any page
to propose a change in the official documentation if you see something that
can be improved.

* :ref:`h2document:docs-contribute` gives a good introduction to the workflow
* The documentation is edited in text files using reStructuredText syntax.
  Use the :ref:`rest-cheat-sheet` to lookup most commonly used directives.

.. toctree::
   :hidden:

   Home/GettingStarted
   Home/GuidesAndTutorials
   Home/References
   Home/SystemExtensions
   Home/WhatsNew
   Home/Extensions
   Cheat Sheets ➜ <https://docs.typo3.org/m/typo3/docs-cheatsheets/master/en-us/>
   Tell Me Something About Topic X  ➜  <https://docs.typo3.org/typo3cms/TellMeSomethingAbout/>
   Snippets  ➜  <https://docs.typo3.org/typo3cms/Snippets/>
   Home/About/Index
   Home/Contribute

