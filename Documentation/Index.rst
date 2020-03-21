.. include:: Includes.txt

.. _start:

===========================================
Welcome to the official TYPO3 Documentation
===========================================

TYPO3 CMS is an Open Source Enterprise Content Management System powered by PHP.

.. rst-class:: horizbuttons-primary-m

- :ref:`tutorials`
- :ref:`references`
- :ref:`extensions`

__________________________________________________

.. _start-getting-stared:

Getting Started
===============

To find out more information about the different versions of TYPO3 and its system requirements, visit https://get.typo3.org.

Follow the :ref:`Quick installation guide with Composer <t3install:install-via-composer>`
to install TYPO3.

.. code-block:: bash

   composer create-project typo3/cms-base-distribution YourNewProjectFolder

Set up the :ref:`site configuration <sitehandling-basics>` in the backend to configure
the domain, languages, URLs and error pages.

The :ref:`t3start:start` walks you through the backend - the interface for editing
content and configuring the TYPO3 installation. You need a browser and a working
TYPO3 installation.

Find more tutorials in :ref:`tutorials`.
You can ask for support via StackOverflow or Slack.
Find out more on the `help page <https://typo3.org/help>`__


.. _how-the-documentation-is-organized:

How the documentation is organized
==================================

* :ref:`Tutorials and Guides <tutorials>` contains a comprehensive list of
  guides and tutorials for each area of the CMS.
* The :ref:`references` section provides information about the TYPO3 core
  for technical users (developers, integrators). The main reference
  manual is :ref:`t3coreapi:start`.
* :ref:`System-Extensions` contains documentation for system
  extensions. These are extensions that are included in the
  TYPO3 core.
* :ref:`extensions` can be used to search for documentation for third party
  extensions.

.. _start-theme:

Templating with Fluid
=====================

TYPO3 uses Fluid as its templating engine. Fluid acts as the glue between your HTML templates and the content
you create in TYPO3. You can find out more about templating and where to get started by visiting the
`Templating Tutorial. <https://docs.typo3.org/m/typo3/tutorial-templating/master/en-us/>`__

* `Backend Layouts <https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/BackendLayout/Index.html#be-layout>`__
 join the content you create in TYPO3 to specific points in your HTML templates. With backend layouts we are able to map our content
to selected points in our HTML where we wish to display our content.
* The `Fluid repository <https://github.com/TYPO3/Fluid>`__
  contains further information about Fluid. As it is an independent project, the documentation is not
  maintained on docs.typo3.org.
* `Custom content elements <https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/ContentElements/AddingYourOwnContentElements.html#adding-your-own-content-elements>`__
 give us the ability to create our own custom content types.

Manage your templates and more with Sitepackages
================================================

`Sitepackages <https://www.slideshare.net/benjaminkott/typo3-the-anatomy-of-sitepackages>`__ allow you to bundle
your Fluid templates and other site assets into a single, reusable extension that can be installed with a single click.


.. _start-extdev:

Develop custom extensions
=========================

:ref:`references` lists all relevant core manuals. One of these is
:ref:`t3coreapi:start`. It contains detailed information for core and extension developers,

Getting started with extension development:

* :ref:`Introduction to extensions in TYPO3 <t3coreapi:extension-architecture-introduction>`
* Extension :ref:`t3coreapi:extension-files-locations`
* :ref:`t3coreapi:extension-naming` and :ref:`t3coreapi:cgl`

More topics can be found in :ref:`t3coreapi:start`, for example:

* :ref:`QueryBuilder <t3coreapi:database-query-builder>` based on
  Doctrine
* :ref:`t3coreapi:DependencyInjection`
* :ref:`t3coreapi:request-handling`

If you are updating TYPO3 to the next major version, you may need to make changes
in your custom extensions.

The `Core changelog <https://docs.typo3.org/c/typo3/cms-core/master/en-us/>`__ lists
all relevant changes for each TYPO3 version since 7.



.. _start-configuration:

Configure TYPO3
===============

One of the major features of TYPO3 is its configurability. The :ref:`t3coreapi:config-overview`
in "TYPO3 Explained" gives you an overview of various configuration languages.

Specifically, you might want to

* Set up the :ref:`site configuration <sitehandling-basics>` in the backend to configure
  the domain, languages, URLs and error pages.
* Configure :ref:`rte_ckeditor <ckeditor:configuration>`
  to enhance the editing experience when handling rich text editing.
* :ref:`Configure the form system extension <form:quickstartIntegrators>` to create
  custom forms for the frontend.
* :ref:`Configure backend users <t3start:user-management>`


.. _start-localization:

How to create translations
==========================

*Internationalization* | *Translation* | *Multiple Languages*

* :ref:`Supported languages <t3coreapi:i18n_languages>`
* :ref:`Manage backend languages <t3start:changing-backend-language>`
* :ref:`Working with languages as an editor <t3editors:languages>`
* :ref:`t3coreapi:internationalization` in "TYPO3 Explained"

__________________________________________________

.. _start-coredev:

Contribute to the core
======================

The "Core contribution guide" contains information for creating core
patches:

* :ref:`Create a patch <t3contribute:quickstart-create-a-patch>`
* :ref:`Commit message rules <t3contribute:commitmessage>`
* :ref:`Setup an installation with DDEV <t3contribute:ddev>`

But contributions aren't just about writing patches. You can contribute
in numerous other ways, including

* :ref:`Writing issues <t3contribute:forge-index>`
* :ref:`Review patches <t3contribute:improving-a-patch>`



.. _start-contribute-docs:

Contribute to official documentation
====================================

You are welcome to click on the "Edit on GitHub" button on any page
to propose a change in the official documentation whenever you see something that
you think can be improved.

* The blog post `Start Improving Docs Now to Grow TYPO3 <https://typo3.com/blog/start-improving-docs-now-to-grow-typo3>`__
  gives a good introduction to documentation contribution.
* :ref:`h2document:docs-contribute` explains the workflow for contributing.
* The documentation is edited in text files using reStructuredText syntax.
  Use the :ref:`rest-cheat-sheet` to lookup most commonly used directives.
* General conventions can be found in :ref:`h2document:conventions`
* :ref:`h2document:docs-official-how-you-can-help` lists some general tasks
  to get you started.

.. toctree::
   :hidden:

   Getting Started <https://docs.typo3.org/#gettting-started>
   Home/GuidesAndTutorials
   Home/References
   Home/Extensions
   Home/WhatsNew
   Cheat Sheets                     <https://docs.typo3.org/m/typo3/docs-cheatsheets/master/en-us/>
   Tell Me Something About Topic X  <https://docs.typo3.org/typo3cms/TellMeSomethingAbout/>
   Snippets                         <https://docs.typo3.org/typo3cms/Snippets/>
   Home/About/Index
   Home/Contribute
