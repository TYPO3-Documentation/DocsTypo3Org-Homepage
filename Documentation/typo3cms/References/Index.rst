
.. include:: ../../Includes.txt

.. _references:

==========
References
==========

Reference manuals are exhaustive documents about one particular aspect of TYPO3 CMS:
important APIs, TypoScript options, TCA properties, etc.

If you are new to TYPO3 CMS and feel lost in such documents, please make sure
that you have been through :ref:`all the available tutorials <tutorials>`.


.. t3-field-list-table::
 :header-rows: 1

 - :Manual:       Manual
   :Description:  Description

 - :Manual:       `Core ChangeLog <https://docs.typo3.org/typo3cms/extensions/core/latest/>`__
   :Description:  New Features, Breaking Changes, Deprecations.
                  Reading up here is strongly recommended for developers.
                  For everyone else, the `What's new slides
                  <https://typo3.org/help/documentation/whats-new/>`__
                  provide the information in a more digestible way.

 - :Manual:       :ref:`Core API <t3coreapi:start>`
   :Description:  A technical reference of the TYPO3 core.
                  Reading this is strongly recommended for core developers and
                  extension developers. Also contains :ref:`cgl`

 - :Manual:       :ref:`t3tca:start`
   :Description:  Reference for the Table Configuration Array (TCA). TCA can be
                  used to extend the definition of database tables.

 - :Manual:       :ref:`t3tsconfig:start`
   :Description:  Reference to Page TSconfig and User TSconfig. This is used
                  to configurate the backend.

 - :Manual:       :ref:`t3tsref:start`
   :Description:  TypoScript reference. TypoScript is a configuration
                  language that is specific to TYPO3. For an introduction
                  see the :ref:`TypoScript in 45 Minutes <t3ts45:start>` tutorial.


With our ongoing consolidation efforts, some documents have been merged into other documents
for better overview, less duplication and confusion. The latest versions of these documents only
show a "Has been moved" message, but in case outdated information for older TYPO3 versions is looked
for, these obsoleted documents are listed here:

.. t3-field-list-table::
 :header-rows: 1

 - :Manual:       Manual
   :Description:  Description

 - :Manual:        :ref:`(OLD) Inside TYPO3 <t3inside:start>`
   :Description:   OLD, current core v9 version has been integrated into :ref:`Core API <t3coreapi:start>`

 - :Manual:       :ref:`(OLD) Core Coding Guidelines <t3cgl:start>`
   :Description:  OLD, current core v9 version has been integrated into :ref:`Core API <t3coreapi:cgl>`

 - :Manual:       :ref:`(OLD) TypoScript Syntax and In-depth Study <t3tssyntax:start>`
   :Description:  OLD, current core v9 version has been integrated into :ref:`Core API <t3coreapi:typoscript-syntax-start>`

 - :Manual:       :ref:`(OLD) Services API <t3services:start>`
   :Description:  OLD, current core v9 version has been integrated into :ref:`Core API <t3coreapi:services>`

 - :Manual:       :ref:`(OLD) File Abstraction Layer <t3fal:start>`
   :Description:  OLD, current core v9 version has been integrated into :ref:`Core API <t3coreapi:fal>`




.. toctree::
   :hidden:

   Core Changelog    ➜ <https://docs.typo3.org/typo3cms/extensions/core/latest/>
   Core Api ➜          <https://docs.typo3.org/typo3cms/CoreApiReference/>
   Tca ➜               <https://docs.typo3.org/typo3cms/TCAReference/>
   TSconfig ➜          <https://docs.typo3.org/typo3cms/TSconfigReference/>
   TypoScript Reference ➜ <https://docs.typo3.org/typo3cms/TyposcriptReference/>
