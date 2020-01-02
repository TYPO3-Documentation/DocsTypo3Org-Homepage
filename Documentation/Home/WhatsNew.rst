.. include:: ../Includes.txt

.. _whats_new:

==========
What's New
==========

.. _whats_new_slides:

What's new Slides
=================

For each new major TYPO3 release, a set of
`"What's New Slides" <https://typo3.org/help/documentation/whats-new>`__
are created  in several languages, covering the **main** new features
and changes.

.. _whats_new_changelog:

Changelog
=========

Developers should regularly check the
`Core Changelog <https://docs.typo3.org/c/typo3/cms-core/master/en-us/>`__
for changes. In comparison to the "What's new Slides", this
is a **complete** list of changes in the core, written for
a technical audience.

Additionally, the :ref:`extension scanner <t3coreapi:extension-scanner>`
is available in the TYPO3 backend (since 9.5) to check if existing extensions use
deprecated or removed functionality.

.. _new_documentation:

New Documentation
=================

While we do our best to keep existing documentation up to date, sometimes
documentation has been added long after a new feature was created.

Here is a list of documentation that was created recently:

.. _new_documentation_2019:

2019
----

Several new chapters were added to "TYPO3 Explained".

"TYPO3 Explained" API Overview:

* :ref:`New documentation for translation with Crowdin <t3coreapi:xliff-translating-server-crowdin>`
  (in fact the entire :ref:`t3coreapi:localization` chapter has been heavily updated)
* :ref:`t3coreapi:DependencyInjection`
  for TYPO3 version 10
* :ref:`t3coreapi:be-layout`
  for TYPO3 version 10
* :ref:`t3coreapi:file_processing`
  for TYPO3 version 10
* :ref:`t3coreapi:broadcast_channels`
  for TYPO3 version 10
* :ref:`t3coreapi:deprecation`
  for TYPO3 version 10
* :ref:`t3coreapi:eventlist`
  for TYPO3 version 10
* :ref:`t3coreapi:EventDispatcher`
  for TYPO3 version 10
* :ref:`adding-your-own-content-elements` (moved from fluid_styled_content documentation)
  for TYPO3 versions :ref:`10 <adding-your-own-content-elements>`,
  `9.5 <https://docs.typo3.org/m/typo3/reference-coreapi/9.5/en-us/ApiOverview/ContentElements/AddingYourOwnContentElements.html>`__
  and `8.7 <https://docs.typo3.org/m/typo3/reference-coreapi/9.5/en-us/ApiOverview/ContentElements/AddingYourOwnContentElements.html>`__
* :ref:`Request Handling (PSR-15 / Middlewares) <t3coreapi:request-handling>`
  for TYPO3 versions :ref:`10 <t3coreapi:request-handling>`
  and `9.5 <https://docs.typo3.org/m/typo3/reference-coreapi/9.5/en-us/ApiOverview/RequestHandling/Index.html>`__
* :ref:`t3coreapi:routing`
  for TYPO3 versions :ref:`10 <t3coreapi:routing>`
  and `9.5 <https://docs.typo3.org/m/typo3/reference-coreapi/9.5/en-us/ApiOverview/Routing/Index.html>`__
* :ref:`t3coreapi:seo`
  for TYPO3 versions :ref:`10 <t3coreapi:seo>`
  and `9.5 <https://docs.typo3.org/m/typo3/reference-coreapi/9.5/en-us/ApiOverview/Seo/Index.html>`__
* :ref:`t3coreapi:config-overview`
  for TYPO3 versions :ref:`10 <t3coreapi:config-overview>`
  and `9.5 <https://docs.typo3.org/m/typo3/reference-coreapi/9.5/en-us/ApiOverview/Configuration/Index.html>`__
* :ref:`t3coreapi:flexforms`
  for TYPO3 versions :ref:`10 <t3coreapi:flexforms>`,
  `9.5 <https://docs.typo3.org/m/typo3/reference-coreapi/9.5/en-us/ApiOverview/FlexForms/Index.html>`__
  and `8.7 <https://docs.typo3.org/m/typo3/reference-coreapi/8.7/en-us/ApiOverview/FlexForms/Index.html>`__
* :ref:`t3coreapi:yaml`
  for TYPO3 versions :ref:`10 <t3coreapi:yaml>`
  and `9.5 <https://docs.typo3.org/m/typo3/reference-coreapi/9.5/en-us/ApiOverview/Yaml/Index.html>`__
* :ref:`t3coreapi:locking-api`

"TYPO3 Explained" Extension Development:

* :ref:`t3coreapi:composer-json`
  for TYPO3 versions :ref:`10 <t3coreapi:composer-json>`
  and `9.5 <https://docs.typo3.org/m/typo3/reference-coreapi/9.5/en-us/ExtensionArchitecture/ComposerJson/Index.html>`__
* :ref:`t3coreapi:publish-extension`
  for TYPO3 versions :ref:`10 <t3coreapi:publish-extension>`
  and `9.5 <https://docs.typo3.org/m/typo3/reference-coreapi/9.5/en-us/ExtensionArchitecture/PublishExtension/Index.html>`__

System extensions:

* `rte_ckeditor <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/master/en-us/>`__
* `SEO <https://docs.typo3.org/c/typo3/cms-seo/master/en-us/>`__


Some documentation that was missing but is required for developer certification
version 9 was added to the "Extbase / Fluid Book":

* :ref:`Dispatching within Extbase (Request / Response) <t3extbasebook:dispatching>`

Writing Documentation for extension developers:

* :ref:`h2document:writing-doc-for-ext-start`
* :ref:`h2document:migrate`

Writing Documentation:

* :ref:`h2document:rest-cheat-sheet`