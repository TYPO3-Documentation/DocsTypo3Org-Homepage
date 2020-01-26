
.. include:: ../../../../Includes.txt
.. highlight:: shell

.. When creating a new year page, move the ".. _latest:" anchor to that page.
.. and add new year to News/Index.rst

.. _latest:
.. _news-2020:

====
2020
====

.. _news-2020-tsref:
.. rst-class:: panel panel-default


TypoScript Reference
====================

*2020-01-26*

We made several changes to the :ref:`TypoScript reference <t3tsref>` and documentation for the
topic TypoScript in general.

**Summary**

* Renamed to "TypoScript Templating Reference"
* Menu was restructured
* Consolidated older versions (finalized migration, ...)
* Added introduction, links to other information and quick links to start page




**In more detail:**

.. figure:: files/tsmenu-before.png
   :class:  float-left


.. figure:: files/tsmenu-new.png
   :class: float-left


.. rst-class:: clear-both


Menu before and after restructuring


#. It was pointed out that the **"TypoScript Reference"** menu was confusing in parts:
   some functions (such as calc and objectSplit) were found under "Objects and Properties",
   top-level objects were hidden in a rubric "setup" etc. This resulted in things not
   being found where they were expected. We managed to simplify the menu and sort the topics accordingly.
#. The use of objects and object types was used inconsistently, some types were referred
   to as "objects" and vice versa. Especially, the term "cObject" was used inconsistently,
   sometimes to refer to the type, sometimes as synonym for "content objects". We corrected
   the use of these terms in some places and added a :ref:`glossary <t3tsref:glossary>`.
#. We renamed "TypoScript Reference" to "TypoScript Templating Reference" because the
   term TypoScript has 2 meanings and in this reference we mean TypoScript templating
   and not (primarily) TypoScript syntax (which is handled in :ref:`t3coreapi:typoscript-syntax-start`
   in "TYPO3 Explained". See `decisions.typo3.org <https://decisions.typo3.org/t/clarification-of-term-typoscript/560/9>`__
   for dicussion about this topic.
#. The chapter "Introduction" contained no introduction into the topic - this is a common
   problem in the documentation: There is a chapter "Introduction" where you expect to
   find information about the topic or what the manual is about and often this only contains
   very little information about the manual, credits, how to give feedback etc. For this
   reason we renamed the current Introduction to "About this manual", moved it to the end
   of the menu and added a real :ref:`Introduction <t3tsref:introduction>`.
#. We linked to other manuals where topics are handled in depth (TypoScript in 45 minutes
   and "TypoScript syntax" in "TYPO3 Explained"), both on the start page and in the "Introduction"
#. We added the chapter "Using and setting TypoScript" to the older versions <= 8.7.
   Previously it only existed for versions 9.5 and master (10). (This is due to the fact
   that the migration of some manuals - like "TypoScript Syntax and in depth study"
   was done for version 9.5 and had not been
   performed for previous versions. This is now being done, step by step.)
#. We added "TypoScript Syntax" to older versions <= 8.7 in "TYPO3 Explained".
#. Added quick links to start page


**Further improvements:**

* The topic of using objects and objects types was addressed but could still be improved.
* Additionally, a number of pages could be improved. For example, the page FLUIDTEMPLATE
  could use a better introduction.

If you would like to help with this, please look at the
`open issues <https://github.com/TYPO3-Documentation/TYPO3CMS-Reference-Typoscript/issues>`__.







.. _news-2020-link-to-versions:
.. rst-class:: panel panel-default


Change in Intersphinx Linking
=============================

*2020-01-03*

When linking from one manual to another, we previously always linked to
the latest (master) version of the manual. For example, if you were
reading a section in "TYPO3 Explained" for TYPO3 version 8.7 and were
referred to the "TCA Reference" by clicking a link, you would continue
reading information for the latest TYPO3 version (currently, the
not yet released as LTS version 10.2). Changes between TYPO3
versions are minimal most of the time, but significant in some cases
(for example, see `Changelog for 9.0 <https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/9.0/Index.html>`__).

This caused the following problems:

* People who were aware of this but wanted to continue reading
  documentation for the same version had to click multiple times
  (to jump to the requested version) before continuing.
* Often, readers were not aware of this and did not notice the 
  change in version. They would then assume, the information 
  was correct for the version they started reading in.

Reading documentation on docs.typo3.org should not require knowledge
about such technical details. It should be possible to read and click,
regardless of how the documentation is separated into repositories.

These problems were pointed out in the #typo3-documentation Slack
channel, we created an `issue <https://github.com/TYPO3-Documentation/T3DocTeam/issues/81>`__
and now changed the procedure, so that links across manuals link
to the documentation for the **same TYPO3 version**.

.. figure:: ../../../Images/version-link.png
   :class: with-shadow

   Link to "TCA Reference" from "TYPO3 Explained" version 8.7

.. seealso::

* :ref:`documentationTypo3Version`: Find out how documentation is available
  for several TYPO3 versions
* :ref:`h2document:intersphinx`: More information about the intersphinx
  mechanism for cross-linking between manuals
