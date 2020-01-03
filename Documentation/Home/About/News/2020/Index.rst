
.. include:: ../../../../Includes.txt
.. highlight:: shell

.. When creating a new year page, move the ".. _latest:" anchor to that page.
.. and add new year to News/Index.rst

.. _latest:
.. _news-2020:

====
2020
====

.. _news-2020-link-to-versions:
.. rst-class:: panel panel-default


Change in Intersphinx Linking
=============================

*2020-01-03*

When linking from one manual to another, we previously always linked to
the latest (master) version of the manual. For example, if you were
reading a section in "TYPO3 Explained" for TYPO3 version 8.7 and were
referred to the "TCA Reference" by clicking a link, you would continue
reading information for the latest TYPO3 version. Changes between TYPO3
versions are minimal most of the time, but significant in some cases.

This had the following problems:

* People who were aware of this but wanted to continue reading
  documentation for the same version had to click multiple times
  to continue reading
* Often, people were not aware of this

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

* :ref:`usage-version-selector`: Switch versions in the documentation
* :ref:`h2document:intersphinx`: More information about the intersphinx
  mechanism for cross-linking between manuals
