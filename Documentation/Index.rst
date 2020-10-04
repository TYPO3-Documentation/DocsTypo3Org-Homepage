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

Create a theme
==============

*Theme* | *Templating* | *Sitepackage*

It is considered good practice to create a **Sitepackage**. This is an extension which
contains the resources required for a theme.

Sitepackage:

* `Concept of Sitepackages <https://www.slideshare.net/benjaminkott/typo3-the-anatomy-of-sitepackages>`__
* :ref:`t3sitepackage:start`

More introductions:

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

Configure your TYPO3 installation
=================================

TYPO3 is well known for being extensive and easy to configure. The :ref:`t3coreapi:config-overview`
in :ref:`TYPO3 Explained <t3coreapi:start>` gives you an overview of the various configuration options available to you.

* :ref:`Site Handling and Configuration <sitehandling-basics>` shows you how to setup domains, languages, human-readable URLs and error pages.
* :ref:`Backend User Management <t3start:user-management>` explains how you setup backend users and grant them specific access to your installation of TYPO3.
* The :ref:`Form system extension <form:quickstartIntegrators>` is a powerful tool that gives backend users the ability to create web forms.
* :ref:`TypoScript in 45 Minutes <t3ts45:start>` introduces you to TypoScript, TYPO3's very own configuration language.
  TypoScript is used to configure the rendering of web pages, navigation menus, page content and much more.

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
