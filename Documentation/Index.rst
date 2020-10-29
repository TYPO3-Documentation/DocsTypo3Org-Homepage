.. include:: /Includes.rst.txt

.. _start:

===========================================
Welcome to the official TYPO3 Documentation
===========================================

.. Usual maximum line length is 79 char plus newline (=80 in total). This
   allows easy online editing and side by side comparisons.

TYPO3 CMS is an Open Source Enterprise Content Management System powered by
PHP.

.. rst-class:: horizbuttons-primary-m

- :ref:`tutorials`
- :ref:`references`
- :ref:`extensions`

__________

.. _start-getting-stared:

Getting Started
===============

*  Follow the :ref:`quick installation guide <t3install:install-via-composer>`
   to install TYPO3 using Composer.

*  The :ref:`t3start:start` introduces you to TYPO3's backend - the interface
   used for managing content and configuring your TYPO3 installation.

*  Add a domain, set up languages and configure URL handling with the
  :ref:`site configuration <sitehandling-basics>` tutorial.

*  Additional resources are available in the :ref:`tutorials` section.

Support is available via StackOverflow and Slack. Visit the `help page
<https://typo3.org/help>`__ for more information.

For information about the different versions of TYPO3 and its system
requirements, visit https://get.typo3.org.


.. _how-the-documentation-is-organized:

How the documentation is organized
==================================

* :ref:`Tutorials and Guides <tutorials>` contain a comprehensive list of
  resources for both new and existing users of TYPO3 including documentation
  for editors, integrators and developers.

* :ref:`references` features detailed information about TYPO3's core and is
  intended for integrators and developers.

* :ref:`System-Extensions` provide a list of all extensions currently used in
  TYPO3's core along with documentation for each of the extensions listed.

* :ref:`extensions` allow you to search for documentation that has been
  provided for third party extensions.


.. _start-theme:

Templating with Fluid
=====================

TYPO3 uses Fluid as its templating engine. Fluid acts as the glue between your
HTML templates and the content you create in TYPO3. You can find out more about
templating and where to get started by visiting the `Templating Tutorial.
<https://docs.typo3.org/m/typo3/tutorial-templating/master/en-us/>`__

*  `Backend Layouts
   <https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/BackendLayout/Index.html#be-layout>`__
   join the content you create in TYPO3 to specific points in your HTML
   templates. With backend layouts we are able to map our content to selected
   points in our HTML where we wish to display our content.

*  The `Fluid repository <https://github.com/TYPO3/Fluid>`__ contains further
   information about Fluid. As it is an independent project, the documentation
   is not maintained on docs.typo3.org.

*  `Custom content elements
   <https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/ContentElements/AddingYourOwnContentElements.html#adding-your-own-content-elements>`__
   give us the ability to create our own custom content types.


Manage your templates and more with Sitepackages
================================================

`Sitepackages
<https://www.slideshare.net/benjaminkott/typo3-the-anatomy-of-sitepackages>`__
allow you to bundle your Fluid templates and other site assets into a single,
reusable extension that can be installed with a single click.


.. _start-extdev:

Develop custom extensions
=========================

:ref:`references` lists all relevant core manuals. One of these is
:ref:`t3coreapi:start`. It contains detailed information for core and extension
developers,

Getting started with extension development:

* :ref:`Introduction to extensions in TYPO3
  <t3coreapi:extension-architecture-introduction>`

* Extension :ref:`t3coreapi:extension-files-locations`

* :ref:`t3coreapi:extension-naming` and :ref:`t3coreapi:cgl`

More topics can be found in :ref:`t3coreapi:start`, for example:

*  :ref:`QueryBuilder <t3coreapi:database-query-builder>` based on Doctrine

*  :ref:`t3coreapi:DependencyInjection`
*  :ref:`t3coreapi:request-handling`

If you are updating TYPO3 to the next major version, you may need to make
changes in your custom extensions.

The `Core changelog <https://docs.typo3.org/c/typo3/cms-core/master/en-us/>`__
lists all relevant changes for each TYPO3 version since 7.



.. _start-configuration:

Configure your TYPO3 installation
=================================

TYPO3 is well known for being extensive and easy to configure. The
:ref:`t3coreapi:config-overview` in :ref:`TYPO3 Explained <t3coreapi:start>`
gives you an overview of the various configuration options available to you.

*  :ref:`Site Handling and Configuration <sitehandling-basics>` shows you how
   to setup domains, languages, human-readable URLs and error pages.

*  :ref:`Backend User Management <t3start:user-management>` explains how you
   setup backend users and grant them specific access to your installation of
   TYPO3.

*  The :ref:`Form system extension <form:quickstartIntegrators>` is a powerful
   tool that gives backend users the ability to create web forms.

*  :ref:`TypoScript in 45 Minutes <t3ts45:start>` introduces you to TypoScript,
   TYPO3's very own configuration language. TypoScript is used to configure the
   rendering of web pages, navigation menus, page content and much more.


.. _start-localization:

How to create translations
==========================

*Internationalization* | *Translation* | *Multiple Languages*

*  :ref:`Supported languages <t3coreapi:i18n_languages>`

*  :ref:`Manage backend languages <t3start:changing-backend-language>`

*  :ref:`Working with languages as an editor <t3editors:languages>`

*  :ref:`t3coreapi:internationalization` in "TYPO3 Explained"

__________

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

   Getting Started      <https://docs.typo3.org/#gettting-started>
   Home/GuidesAndTutorials
   Home/References
   Home/Extensions
   Home/WhatsNew
   Cheat Sheets         <https://docs.typo3.org/m/typo3/docs-cheatsheets/master/en-us/>
   Home/About/Index
   Home/Contribute
