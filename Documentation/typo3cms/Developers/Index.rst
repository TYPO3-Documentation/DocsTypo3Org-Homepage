.. _resources-developers:


.. ------------------------------------------------------------
.. todos:
.. Look through the following resources if they are up-to-date
.. and can be used or update / migrate / delete them
..
.. - Wiki: https://wiki.typo3.org/Extension_Developers_Guide
.. - Wiki: https://wiki.typo3.org/Extension_Development
.. -------------------------------------------------------------

========================
Resources for Developers
========================

This page contains some resources for TYPO3 developers including information
about **extension development**, **site package extension development** and
**core development**.

It contains links to official TYPO3 docs. However, if the official docs are
outdated and there are newer resources available elsewhere (e.g. on blogs),
a link to these is supplied.

You can assume that whatever starts with
`http://docs.typo3.org/typo3cms` and is linked from this page is official
TYPO3 documentation.

.. _resources-developers-extension:

Extension Development
=====================

.. _resources-developers-extension-getting-started:

Getting started
---------------

For getting started with TYPO3 development, please ask for up-to-date
resources in the Slack channel **#typo3-cms** or **#typo3-documentation**
(register for Slack here: https://my.typo3.org/)

It is difficult to give general information here because it depends on the
TYPO3 version you will be using and what you plan to do.

.. _resources-developers-extension-getting-started-extbase-fluid:

Extbase / Fluid
~~~~~~~~~~~~~~~

.. todo: question: can these resources still be recommended for TYPO3 8?
.. should additional information be added here?

For a walkthrough guide on Extension Development with Extbase / Fluid
you can look at:

* :ref:`Developing TYPO3 Extensions with Extbase and Fluid <t3extbasebook:start>`
  (Official TYPO3 docs, a translation of the German book by Kurfürst and  Rau, updated
  by the community)
* The (hardcover) book: Michael Schams and Patrick Lobacher: The TYPO3 Extbase Book
  (http://extbase-book.org) The latest version is for TYPO3 7.6.

.. todo: insert general informational text about current status of Extbase


Fluid
~~~~~

Note that Fluid is now maintained outside of the TYPO3 core. The core itself
contains an extension named EXT:fluid with some TYPO3-specific functionality and
there is a composer dependency on typo3fluid/fluid, which is the main Fluid
core. You can find it in your installation under :file:`vendor/typo3fluid/fluid`

For this reason, main Fluid documentation is found outside of docs.typo3.org.

Go to the main `Fluid page on Github <https://github.com/TYPO3/Fluid>`__
for a list of resources.

.. _resources-developers-extension-getting-started-site-package:

Develop a site package
~~~~~~~~~~~~~~~~~~~~~~

For up-to-date tutorials on developing a "Site Package" (aka template) Extension,
please see these Videos in the TYPO3 channel on YouTube:

* `Tutorial - Site Packages - Part 1 <https://www.youtube.com/watch?v=HtBmim7pc0o>`__
* `Tutorial - Site Packages - Part 2 <https://www.youtube.com/watch?v=deSMVfCSCXY>`__

There are also 2 manuals currently in draft that may be useful to you:

* DRAFT: `Site Package Tutorial
  <https://docs.typo3.org/typo3cms/drafts/github/TYPO3-Documentation/SitePackageTutorial/>`__
* DRAFT: `Templating with FLUIDTEMPLATE
  <https://docs.typo3.org/typo3cms/drafts/github/TYPO3-Documentation/TYPO3CMS-Tutorial-TemplatingWithFluidtemplate/>`__

.. _resources-developers-extension-general:

General Resources
-----------------

.. _resources-developers-extension-general-references:

Reference Guides in the official TYPO3 documentation
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Look at the official list of references: :ref:`List of TYPO3 references<references>`

For developing you will be interested in all the manuals listed there, especially the
:ref:`TYPO3 Core API <t3coreapi:start>`.

Additionally, see the references for TYPO3 Fluid ViewHelpers.

* :ref:`Reference for Fluid ViewHelpers <t3extbasebook:viewhelpers>`


.. _resources-developers-extension-general-videos:

YouTube Videos
~~~~~~~~~~~~~~

* `TYPO3 YouTube Channel <https://www.youtube.com/channel/UCwpl8LY9Tr3PB26Kk2FYW_w>`__

Unofficial Resources
~~~~~~~~~~~~~~~~~~~~

These are not "official" TYPO3 resources, but they have been reported to be very
useful and sometimes provide more up-to-date information than the official docs.

Blogs:

.. note to editors: please only add blogs specifically dedicated to programming for TYPO3 or
.. link to specific blog articles about programming for TYPO3

* Daniel Goerz: `Usetypo3 <https://usetypo3.com/>`__  This might be the best resource for getting
  started, for example look at `Good practices in Extensions <https://usetypo3.com/good-practices-in-extensions.html>`__,
  and `24 Tips & Tricks for Fluid <https://usetypo3.com/24-fluid-tips.html>`__
  Marcus Schwemer: `TYPO3 WORX <https://typo3worx.eu>`__
* Andreas Fernandez (member of TYPO3 core team): `SCRIPTING-BASE <https://scripting-base.de/blog.html>`__
  provides some in-depth information for example about Ajax and RequireJS and also very useful
  instructions for :ref:`migrating-extensions`.
* Helmut Hummel (member of TYPO3 core team): `doc_core_insight <https://usetypo3.com/>`__ Helmut's
  resources are especially useful, if you are looking at information about composer and TYPO3,
  executing commands from the console (typo3_console), caching, autoloading etc. It is often in-depth
  information that helps to understand things, not always suitable for beginners.


Specific Resources
------------------

.. _migrating-extensions:

Migrating extensions
~~~~~~~~~~~~~~~~~~~~

You may be maintaining a TYPO3 installation and need to update to the
next major TYPO3 version. TYPO3 already takes care of everything you
need to do very nicely in the Upgrade Wizard. Third party extensions
can also be updated easily.

If you have developed some extensions yourself, you will want to make
sure, that they will be ready for the next major TYPO3 version *before*
you update!

For this, the deprecation log and :ref:`Extension Scanner <extension-scanner>`
(Extension Scanner since TYPO3 version 9) is very valuable.

Additionally, look at these resources:

* Check the `Official Changelogs <https://docs.typo3.org/typo3cms/extensions/core/latest/>`__
  for "Breaking changes" for your target version. Also checkout the "Changes for Developers"
  section in the `What's new slides <https://typo3.org/help/documentation/whats-new/>`__ for
  the target version
* `Usetypo3: Updating TYPO3 Projects <https://usetypo3.com/upgrading-projects.html>`__
* For migrating TCA: `SCRIPTING-BASE: Cleaning the hood: TCA <https://scripting-base.de/blog/cleaning-the-hood-tca.html>`__

If your extensions are quite old, also look at:

* `ClassAliasMap.php
  <https://git.typo3.org/Packages/TYPO3.CMS.git/blob/refs/heads/TYPO3_6-2:/typo3/sysext/core/Migrations/Code/ClassAliasMap.php>`__
  for a mapping of old and new class names
* :ref:`namespaces <t3coreapi:namespaces>`




TYPO3 Core development
======================

* If you want to get started with core development, see
  :ref:`TYPO3 Contribution Guide <t3contribute:start>` for a walkthrough
  through the toolchain
* Look at the official :ref:`Core API<t3coreapi:start>` for introduction to basic concepts



