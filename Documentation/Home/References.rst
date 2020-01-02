
.. include:: ../Includes.txt

.. _references:

==================
Core Documentation
==================

TYPO3 core documentation. :ref:`TYPO3 Explained <t3coreapi:start>`
is the main manual for TYPO3 features, API and concepts.

Beginners may have an additional look at :ref:`the available tutorials <tutorials>`
depending on which task should be achieved.

.. t3-field-list-table::
 :header-rows: 1

 - :Manual:       Manual
   :Versions:     Links for other TYPO3 versions
   :Description:  Description

 - :Manual:       :ref:`TYPO3 Explained <t3coreapi:start>`
   :Versions:     :ref:`master (10-dev) <t3coreapi:start>` |
                  `9.5 <https://docs.typo3.org/m/typo3/reference-coreapi/9.5/en-us/>`__ |
                  `8.7 <https://docs.typo3.org/m/typo3/reference-coreapi/8.7/en-us/>`__ |
                  `7.6 <https://docs.typo3.org/m/typo3/reference-coreapi/7.6/en-us/>`__
   :Description:  **The main document about TYPO3** Reading this is recommended for anyone.
                  This goes through all main aspects like installing, hosting, configuration,
                  security aspects and detailed programming API's. Single chapters are for
                  different target groups and outlined accordingly.

 - :Manual:       `Changelog <https://docs.typo3.org/c/typo3/cms-core/master/en-us/>`__
   :Versions:     `master (10-dev) <https://docs.typo3.org/c/typo3/cms-core/master/en-us/>`__ |
                  `9.5 <https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog-9.html>`__ |
                  `8.7 <https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog-8.html>`__ |
                  `7.6 <https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog-7.html>`__
   :Description:  New Features, Breaking Changes, Deprecations.
                  Reading up here is strongly recommended for developers.
                  For everyone else, the `What's new slides
                  <https://typo3.org/help/documentation/whats-new/>`__
                  provide the information in a more digestible way.

 - :Manual:       :ref:`t3tca:start`
   :Versions:     :ref:`master (10-dev) <t3tca:start>` |
                  :ref:`9.5 <t3tca9:start>` |
                  :ref:`8.7 <t3tca8:start>` |
                  :ref:`7.6 <t3tca7:start>`
   :Description:  Reference for the Table Configuration Array (TCA). TCA can be
                  used to extend the definition of database tables.

 - :Manual:       :ref:`t3tsconfig:start`
   :Versions:     :ref:`master (10-dev) <t3tsconfig:start>` |
                  :ref:`9.5 <t3tsconfig9:start>` |
                  :ref:`8.7 <t3tsconfig8:start>` |
                  :ref:`7.6 <t3tsconfig7:start>`
   :Description:  Reference to Page TSconfig and User TSconfig. This is used
                  to configure the backend.

 - :Manual:       :ref:`t3tsref:start`
   :Versions:     :ref:`master (10-dev) <t3tsref:start>` |
                  :ref:`9.5 <t3tsref9:start>` |
                  :ref:`8.7 <t3tsref8:start>` |
                  :ref:`7.6 <t3tsref7:start>`
   :Description:  TypoScript is a configuration language that is specific to
                  TYPO3. This is used to configure the frontend.
                  For an introduction see the
                  :ref:`TypoScript in 45 Minutes <t3ts45:start>` tutorial.

 - :Manual:       :ref:`t3viewhelper:start`
   :Versions:     :ref:`master (10-dev) <t3viewhelper:start>` |
                  :ref:`9.5 <t3viewhelper9:start>` |
                  :ref:`8.7 <t3viewhelper8:start>` |
   :Description:  A complete reference of all available Fluid ViewHelper within
                  TYPO3 CMS. The reference for 9.5 is automatically generated. The
                  others are currently maintained manually.


.. tip::

   Did you know, you can click on "Related links" at the bottom of a page in most
   manuals to select a different version? The versions of the manual correspond to the TYPO3
   version. :ref:`Read more ... <usage-version-selector>`


**Migrated manuals**


With our ongoing consolidation efforts, some documents have been merged into other documents
for better overview, less duplication and confusion. The latest versions (since TYPO3 9.5) of
these documents only show a "Has been moved" message. The information has been moved to
:ref:`t3coreapi:start`.

In case information for older TYPO3 versions (8.7 and below) is required, the obsoleted documents
are listed here:

.. t3-field-list-table::
 :header-rows: 1

 - :Manual:        Manual
   :Description:   Description

 - :Manual:        Inside TYPO3
                   :ref:`8.7 <t3inside8:start>` | :ref:`7.6 <t3inside7:start>`
   :Description:   Outdated. Core v9 version and above have been integrated into :ref:`t3coreapi:start`

 - :Manual:        Core Coding Guidelines
                   :ref:`8.7 <t3cgl8:start>` | :ref:`7.6 <t3cgl7:start>`
   :Description:   Outdated. Core v9 version and above have been integrated into :ref:`t3coreapi:cgl` (TYPO3 Explained)

 - :Manual:        TypoScript Syntax and In-depth Study
                   :ref:`8.7 <t3tssyntax8:start>` | :ref:`7.6 <t3tssyntax7:start>` | :ref:`6.2 <t3tssyntax6:start>`
   :Description:   Outdated. Core v9 version and above have been integrated into :ref:`t3coreapi:typoscript-syntax-start` (TYPO3 Explained)

 - :Manual:        Services API
                   :ref:`8.7 <t3services8:start>` | :ref:`7.6 <t3services7:start>`
   :Description:   Outdated. Core v9 version and above have been integrated into :ref:`t3coreapi:services` (TYPO3 Explained)

 - :Manual:        File Abstraction Layer
                   :ref:`8.7 <t3fal8:start>` | :ref:`6.2 <t3fal6:start>`
   :Description:   Outdated. Core v9 version and above have been integrated into :ref:`t3coreapi:fal` (TYPO3 Explained)

 - :Manual:        Security Guide
                   :ref:`8.7 <t3security8:start>`
   :Description:   Outdated. Core v9 version and above have been integrated into :ref:`t3coreapi:security` (TYPO3 Explained)


.. toctree::
   :hidden:

   TYPO3 Explained ➜   <https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/>
   Core Changelog    ➜ <https://docs.typo3.org/c/typo3/cms-core/master/en-us/>
   TCA ➜               <https://docs.typo3.org/m/typo3/reference-tca/master/en-us/>
   TSconfig ➜          <https://docs.typo3.org/m/typo3/reference-tsconfig/master/en-us/>
   TypoScript Template Reference ➜ <https://docs.typo3.org/m/typo3/reference-typoscript/master/en-us/>
   ViewHelper Reference ➜ <https://docs.typo3.org/other/typo3/view-helper-reference/master/en-us/>
