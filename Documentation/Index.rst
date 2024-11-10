.. include:: /Includes.rst.txt

.. _start-Contributing:
.. _upgrading-typo3:
.. _templating:
.. _System-Extensions:
.. _getting-started:
.. _extensions:
..  _configuringTYPO3:
.. _creatingmanagingcontent:
.. _contribute:
.. _examples:
.. _guides:
.. _tutorials:
.. _start:

===========================================
Welcome to the official TYPO3 Documentation
===========================================

TYPO3 CMS is an Open Source Enterprise Content Management System powered by
PHP.

..  toctree::
    :hidden:

    Home/RecentlyMovedChapters


..  card-grid::
    :columns: 1
    :columns-md: 2
    :gap: 4
    :card-height: 100

    ..  card:: Getting started guide

        This guide introduces some of the core concepts of TYPO3, guides you
        through installation, helps you set up your first small project with
        a custom template and gives you information on troubleshooting.

        ..  card-footer:: :ref:`Get started with TYPO3 <t3start:start>`
            :button-style: btn btn-secondary stretched-link

    ..  card:: Site package tutorial

        This tutorial describes step by step how to create your first
        site package or theme in TYPO3 from scratch.

        ..  card-footer:: :ref:`Build your own site package <t3sitepackage:start>`
            :button-style: btn btn-secondary stretched-link

    ..  card:: Editors guide

        Learn about how you log into the TYPO3 backend, how to work with the
        page tree, how to create and manage content, how to work with translations
        and other useful tricks for editors.

        ..  card-footer:: :ref:`Add content to a TYPO3 page <t3editors:start>`
            :button-style: btn btn-secondary stretched-link

    ..  card:: Download TYPO3

        For information about the different versions of TYPO3 and their system
        requirements, visit https://get.typo3.org

        You can also download the the sources from there. We suggest to
        :ref:`Install TYPO3 using Composer <t3start:install>`, however.

        ..  card-footer:: `Download TYPO3 <https://get.typo3.org>`__
            :button-style: btn btn-secondary stretched-link

.. _references:

References
==========

:ref:`TYPO3 explained <t3coreapi:api-overview>`
    The main document for advanced developers and integrators. It describes
    the API, coding guidelines, configuration options and security
    guidelines. Introduces creating extension to enhance TYPO3.
:doc:`TYPO3 Core changelog <changelog:Index#typo3-core-changelog>`
    Learn what is new in TYPO3 and how to migrate away from deprecated
    functionality.
:ref:`Fluid ViewHelper reference <t3viewhelper:start>`
    Complete reference of all Fluid ViewHelper provided by TYPO3. Used
    to improve your templates.
:ref:`TypoScript reference <t3tsref:start>`
    Complete reference of TypoScript settings and configuration options.
    Useful to improve the frontend output of your site.
:ref:`TSconfig reference <t3tsconfig:start>`
    Configuration options to customize the TYPO3 backend.
:ref:`TCA reference <t3tca:start>`
    Complete reference of the Table Configuration Array (TCA) which
    maps raw database tables to
    records in the TYPO3 backend and in Extbase.
