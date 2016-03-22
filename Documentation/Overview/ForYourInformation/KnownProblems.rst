.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt

==============================
Known Problems
==============================


For Readers
===========

.. _known-problem-html-content-cut-off:

When HTML content is cut off
----------------------------

Firefox and wide code-blocks within tables
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Firefox does things correctly: It displays wide code-blocks as desired
and then adjusts column widths of tables appropriately. This may lead
to hidden content though in fixed width layout.
See this :ref:`example page <t3coreapi:high-priority-functions>`.

**Tip:**
Use "adaptive" layout and a wide monitor in that case or switch to
a different browser.

For Documentation Writers
=========================

.. _known-problem-1050:

Anonymous Intersphinx Labels
----------------------------

Currently, 2012-12-03, anonymous intersphinx labels don't work as they
are not part of object.inv. See sphinx bug report `#1050`__ and the
`discussion about that`__ in the Sphinx-Users group.

__ https://bitbucket.org/birkenfeld/sphinx/issue/1050
__ https://groups.google.com/forum/?fromgroups=#!topic/sphinx-users/159KrjLnUpQ


