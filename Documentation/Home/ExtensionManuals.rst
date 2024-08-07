.. _extensions:

=============================
Developing & Using Extensions
=============================

.. _extensions-development:

Extension Development
=====================

..  card-grid::
    :columns: 1
    :columns-md: 2
    :gap: 4
    :card-height: 100

    ..  card::  Getting started with extension development

        *  :ref:`Introduction to extensions in TYPO3
           <t3coreapi:extension-architecture-introduction>`

        *  Extension :ref:`t3coreapi:extension-files-locations`

        *  :ref:`t3coreapi:extension-naming` and :ref:`t3coreapi:cgl`


    ..  card::  TYPO3 Explained - API Quicklinks

        *  :ref:`QueryBuilder <t3coreapi:database-query-builder>` based on Doctrine
        *  :ref:`t3coreapi:DependencyInjection`
        *  :ref:`t3coreapi:request-handling`

.. _extension-manuals:

Extension Manuals
=================

..  card-grid::
    :columns: 1
    :columns-md: 2
    :gap: 4
    :card-height: 100

    ..  card:: System Extensions

        Here you can find documentation of system extensions and third-party extensions,
        if available.

        System extensions are shipped with the TYPO3 core. A list of all available
        system extension documentation is found in the
        :ref:`system extensions section <System-Extensions>`.

    ..  card:: Third-party extensions

        Third-party extensions are available through the
        TYPO3 Extension Repository (TER) or via composer.

        Go to the `TYPO3 Extension Repository (TER) <https://extensions.typo3.org/>`__ to search
        for documentation of third-party extensions.

    ..  card:: Document an extension

        Documentation is an essential part of an extension.
        Learn :ref:`how to document <h2document:how-to-start-docs-extension>` an extension
        and :ref:`publish the documentation <h2document:webhook>` on docs.typo3.org.


.. toctree::
   :hidden:

   Extension Development Basics <https://docs.typo3.org/m/typo3/reference-coreapi/main/en-us/ExtensionArchitecture/Index.html>
   SystemExtensions
   Third-party extensions <https://extensions.typo3.org/>
   Document an extension <https://docs.typo3.org/m/typo3/docs-how-to-document/main/en-us/Howto/WritingDocForExtension/Index.html>
