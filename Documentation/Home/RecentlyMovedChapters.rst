.. include:: /Includes.rst.txt

..  _recently-moved:

=======================
Recently moved chapters
=======================

..  contents::

..  _recently-moved-ts-syntax:

TypoScript syntax into TypoScript reference
===========================================

*Starting with the documentation of TYPO3 12.4*

The chapters regarding TypoScript syntax have been moved from TYPO3 Explained
into the TypoScript reference.

You find the chapters here now: :ref:`TypoScript syntax <t3tsref:typoscript-syntax>`

References need to be changed like this:

..  code-block:: diff

    -:ref:`Code blocks <t3coreapi:typoscript-syntax-syntax-curly-brackets>`
    +:ref:`Code blocks <t3tsref:typoscript-syntax-syntax-curly-brackets>`

..  _recently-moved-ts-45:

TypoScript in 45 minutes into TypoScript reference
==================================================

*Starting with the documentation of TYPO3 12.4*

The chapters of the former TypoScript in 45 minutes tutorial have been moved
into the TypoScript reference, Getting Started section:

:ref:`Getting started: A quick introduction into TypoScript <t3tsref:guide>`

To prevent collisions all reference anchors have been prefixed with `guides-`.

..  code-block:: diff

    -:ref:`Create a menu with TypoScript <t3ts45:menu>`
    +:ref:`Create a menu with TypoScript <t3tsref:guide-menu>`

The tutorial TypoScript in 45 minutes has been discontinued.

..  _recently-moved-upgrade:

Upgrade Guide moved in TYPO3 Explained, Administration
======================================================

*Starting with the documentation of TYPO3 12.4*

The chapters of the former Upgrade Guide have been moved
into the TYPO3 Explained, Administration section:

:ref:`Upgrading the TYPO3 Core and extensions <t3coreapi:upgrading>`

..  code-block:: diff

    -:ref:`Upgrading the TYPO3 Core and extensions <t3upgrade:start>`
    +:ref:`Upgrading the TYPO3 Core and extensions <t3coreapi:upgrading>`

    -:ref:`Upgrading the TYPO3 Core and extensions <t3install:start>`
    +:ref:`Upgrading the TYPO3 Core and extensions <t3coreapi:upgrading>`

    -:ref:`Migrate a TYPO3 project to Composer <t3upgrade:migratetocomposer>`
    +:ref:`Migrate a TYPO3 project to Composer <t3coreapi:migratetocomposer>`

The Upgrade Guide has been discontinued.

..  _recently-moved-installation:

Advanced installation chapters moved from Getting Started Guide to TYPO3 Explained, Administration
=================================================================================================

*Starting with the documentation of TYPO3 12.4*

Advanced installation chapters moved from Getting Started Guide to
TYPO3 Explained, Administration:

:ref:`Installation <t3coreapi:installation_index>`

..  code-block:: diff

    -:ref:`Tuning TYPO3 <t3start:tunetypo3>`
    +:ref:`Tuning TYPO3 <t3coreapi:tunetypo3>`

    -:ref:`Legacy Installation <t3start:legacyinstallation>`
    +:ref:`Legacy Installation <t3coreapi:legacyinstallation>`

Many topics now exist in both the Getting Started Guide in a condensed form
and more verbose in TYPO3 Explained, Administration. The chapters link each
other.


..  _recently-moved-troubleshooting:

Advanced troubleshooting chapters moved from Getting Started Guide to TYPO3 Explained, Administration
=====================================================================================================

*Starting with the documentation of TYPO3 12.4*

Advanced troubleshooting for administrators moved from Getting Started Guide to
TYPO3 Explained, Administration.

:ref:`Troubleshooting <t3coreapi:troubleshooting-index>`

Anchors have been prefixed with "troubleshooting" to prevent collisions:

..  code-block:: diff

    -:ref:`Troubleshooting <t3start:troubleshooting_index>`
    +:ref:`Troubleshooting <t3coreapi:troubleshooting-index>`

    -:ref:`System Modules <t3start:system_modules>`
    +:ref:`System Modules <t3coreapi:troubleshooting-system_modules>`

Getting started has a basic trouble shooting chapter linking to the one in TYPO3
explained.

..  _recently-moved-permissions:

Permission and User Management moved from Getting Started Guide to TYPO3 Explained, Administration
=================================================================================================

*Starting with the documentation of TYPO3 12.4*

Permission and User Management moved from Getting Started Guide to
TYPO3 Explained, Administration:

*   :ref:`Backend user management <t3coreapi:user-management>`
*   :ref:`Permissions management <t3coreapi:permissions-management>`

..  code-block:: diff

    -:ref:`Permissions Management <t3start:permissions-management>`
    +:ref:`Permissions management <t3coreapi:permissions-management>`

    -:ref:`Backend user management <t3coreapi:user-management>`
    +:ref:`Backend Users <t3coreapi:user-management-backend-users>`
