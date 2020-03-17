.. include:: ../../../Includes.txt

.. _usage-tips:

==========
Usage tips
==========

.. _usage-structure:


General structure
=================

The page you are currently reading is part of a few start pages we call **"glue pages"**.
From here, everything else is linked. The entire documentation is built out of individual
**"manuals"**. This can be an extension manual like
`ext:form <https://docs.typo3.org/typo3cms/extensions/form/latest/>`__ or a tutorial
like :ref:`t3start:start`.

You can regard the "glue pages" as a special top-level manual which is used for information,
orientation and navigation.
Most manuals are linked to from the "glue pages", so you can use the "glue pages" to
find what you are looking for.


The "glue pages" **contain**:

* the start page https://docs.typo3.org
* :ref:`tutorials`: A list of tutorials and guides
* :ref:`references`: A list of core documentation manuals, including :ref:`t3coreapi:start`
  and several references.
* this page and the entire :ref:`about-documentation` section
* ...


.. _usage-menu:

Menu
====

Menu of glue pages
------------------

When you are on one of the "glue pages" (for example this page or the start
page https://docs.typo3.org), you can use the menu to navigate, for
example go to the :ref:`guides` page to select a guide or tutorial
or :ref:`extensions` to go to the documentation of an extension.

.. figure:: _images/mobilemenu.png
   :class: with-shadow

   Open menu on mobile


Menu of other manuals
---------------------

As soon as you go to a manual (e.g. :ref:`t3start:start`), you leave the "glue pages"
and the menu will look different:

* **On a glue page**: Menu of "glue pages", no search field
* **On a page of a manual**: Menu of the manual, search field


.. figure:: _images/menu-of-getting-started.png
   :class: with-shadow

   Menu of "Getting Started Tutorial"



.. _usage-start-page:

Go to start page
================

Wherever you are, you can click :guilabel:`TYPO3 Documentation` in the top
left to return to the start page:


.. figure:: _images/home.png
   :alt: Go to documentation start page https://docs.typo3.org

   Go to documentation start page https://docs.typo3.org




.. _usage-start-page-manual:

Go to the start page of a manual
================================

When you are viewing a page of a manual (not the "glue pages"), you can
go to the start page of the manual by clicking on the title of the manual
(directly under :guilabel:`"TYPO3 Documentation"`).


.. figure:: _images/getting-started-menu-startpage.png
   :class: with-shadow
   :alt: Go to start page of "Getting Started Tutorial"

   Go to start page of "Getting Started Tutorial"

.. _usage-version-selector:

Version selector
================

When you are reading a manual, for example the :ref:`t3start:start`, you can select
a version from the version selector (which is located under the title).

The version usually reflects the TYPO3 version, so for example
choose 8.7 if you are using TYPO3 8.7 LTS.

.. figure:: _images/versionselector.png
   :class: with-shadow

   Version selector

You cannot select a version from the page you are currently reading. The "glue pages"
are not specific to a TYPO3 version.


.. _usage-search:

Search
======

The search box only searches in the selected manual. For example, if you are
reading :ref:`t3start:start`, then search will only search within this manual.

Alternatively, you can use an external search engine:

Restrict the search to `site:docs.typo3.org`, *if* you only want to search within
the official documentation on docs.typo3.org.

Just add your search query to one of these queries:

* `Google search: site:docs.typo3.org <https://google.com?q=site%3Adocs.typo3.org>`__
* `DuckDuckGo search site:docs.typo3.org <https://duckduckgo.com/?q=site%3Adocs.typo3.org&t=h_&ia=web>`__
* `Startpage.com <https://www.startpage.com/do/search>`__ (add `site:docs.typo3.org` in the search field)




.. _usage-browse-pages-by-keyboard:

Browse pages by keyboard
========================

Each manual knows about a linear sequence of its pages. Click on the buttons
:guilabel:`Next` or :guilabel:`Previous` to move forwards or
backwards in that sequence. The buttons are located on the bottom
of every page and on the top (in a smaller and more dimmed variant).

The good news is that these functions are also available
from the keyboard by the "access keys".

What's an "Access Key"?
-----------------------

  In a web browser, an `access key or accesskey`__ allows a computer
  user to jump to a specific part of a web page via the
  keyboard.

__ http://en.wikipedia.org/wiki/Accesskey

Unfortunately each browser seems to use `its own modifier`__ to
make the access key work.
In most web browsers the user invokes the access key by pressing
the "modifier (which often is :kbd:`Alt` or :kbd:`Ctrl`) simultaneously with the
appropriate character on the keyboard. So we have for example:

__ http://en.wikipedia.org/wiki/Accesskey#Access_in_different_browsers

================= ============================== =====================
OS                Browser                        Modifier
================= ============================== =====================
Linux             any                            :kbd:`Alt` + :kbd:`Shift`
OSX 10.6          Safari, Firefox, Chrome, iCab  :kbd:`Ctrl` + :kbd:`Alt`
OSX 10.7          Firefox                        :kbd:`Ctrl`
Win7              Chrome, Safari                 :kbd:`Alt`
Win7              Firefox                        :kbd:`Shift` + :kbd:`Alt`
Windows           IE                             :kbd:`Alt` + :kbd:`<character>` + :kbd:`enter`
================= ============================== =====================


.. tip::
   Hover over the :guilabel:`Next` or :guilabel:`Previous` button on the top
   or bottom of the page to see the tooltip.

Next page
---------

Press :kbd:`access key` + :kbd:`n` or click :guilabel:`Next` to advance to the next
page in line.


Previous page
-------------

Press :kbd:`access key` + :kbd:`p` or click "Previous" to go to the page that
precedes the current page.



