
.. include:: ../../Includes.txt
.. highlight:: shell

.. When creating a new year page, move the ".. _latest:" anchor to that page.

.. _latest:
.. _news-2018:

====
2018
====


.. _news-2018-05-31:
.. rst-class:: panel panel-default

"Secret" plans of better documentation rendering
------------------------------------------------

2018-05-31 by Martin Bless

All this is about documentation published at `docs.typo3.org 
<https://docs.typo3.org>`__.

Sometimes it's difficult to do all the necessary things simultaneously.
Informing the public is an easy candidate to be forgotten. Let's try to fix
this.

A small number of people met at the end of March 2018 in Düsseldorf. Main goals: Get an
overview of the current state and design a strategy for the "new documentation
server". Results of that meeting:

* The documentation team provides an improved and up to date Docker image that
  will serve as model for the server setup. It will be much smaller, since
  we drop the capability of reading OpenOffice files and the capability to
  generate LaTeX and PDF.

**Note: As of May 24, 2018 this first step has been achieved.**

Find the stripped-down version in the `develop-debian-html
<https://github.com/t3docs/docker-render-documentation/tree/develop-debian-html>`__
branch of the `t3docs/render-documentation
<https://github.com/t3docs/docker-render-documentation>`__ repository. The
master branch still has the OpenOffice and LaTeX-Pdf capabilities. I would
recommend it for local use.

**So development can now continue with the next steps:**

* The TYPO3 GmbH is offering to create a powerful automization solution based
  on that rendering recipe.

* Implementing a global "elastic" search will be part of that process. The
  documentation team contributes the necessary theme and rendering
  modifications.

* All rendering of manuals and extension manuals will be triggered
  based on hooks of their respective repositories. Automatically, instantly,
  fast, in parallel, with some rule-based automatic transformation of
  repository names to path names.

* Any developer can use the rendering chain by calling the proper hooks. These
  hooks will be developed in the process of creating the server automation.

* We don't publish PDF files any more.

* OpenOffice files are not valid documentation any more.

* We require that projects have a :file:`composer.json` file. Wherever possible
  we refer to this file to identify values. This means: The project name, the
  version number, allowed TYPO3 versions and so on, that appear in the
  documentation, will be taken from that :file:`composer.json` file.

* We will only publish documentation of extensions that are working with the
  currently maintained TYPO3 versions.

**Again: The Docker solution**

Coming back to the current `Docker solution for documentation rendering
<https://github.com/t3docs/docker-render-documentation>`__ - let me take the
chance to mention some highlights:

* improved typoscript highlighter
* packages (zip-archives) are smaller, due to excluded fonts an improved html
  font-stack
* Sphinx caching is enabled: for example, re-render the core ChangeLog in
  seconds, not 20 minutes or more
* contains a solution (in docs and in the 'show-shell-commands' code) for the
  'mtime' problem. Sphinx-caching is based on filetimes. The
  `git-restore-mtime 
  <https://github.com/MestreLion/git-tools/blob/master/git-restore-mtime>`__ 
  script presents the solution for repositories.
* theme is up to date
* No Piwik calls in offline package
* YouTube directive works. But not in LaTeX. And that's not needed.
* The Sphinx extensions that we DO use are loaded by default. No need to
  mention them in Settings.cfg.
* Improvements in the toolchain

Keep on finding the words!



.. _news-2018-05-02:
.. rst-class:: panel panel-default

Revamped TSconfig Reference
---------------------------

2018-05-02 by Christian Kuhn

We modernized some of the main TYPO3 core documents with more than 100
single commits the last days:

* The old "Inside TYPO3" document is gone and all information has been merged into the
  :ref:`TYPO3 Core API <t3coreapi:start>`. The Core API document more and more evolves
  into **the** TYPO3 core documentation compendium where all conceptual core related
  information should be looked up in. The term "Core API" will probably change at
  some point to reflect this, too.

* The :ref:`TSconfig Reference <t3tsconfig:start>` received a major overhaul. This document
  is one of the most important documents next to the other two references, namely the
  :ref:`TypoScript Reference <t3tsref:start>` and the :ref:`TCA Reference <t3tca:start>`.
  The TSconfig Reference didn't receive too much love within the last years, but now it comes with
  a reworked menu structure, a lot of streamlined information and a simplified property listing
  with more examples. Various chapters have been moved around between the main core documents
  to make them more consistent and confined, readers should now find information at places
  they expect them to be.


.. _news-2018-03-28:
.. rst-class:: panel panel-default

Become a TYPO3 Documentation Team member
----------------------------------------

2018-03-28 by Martin Bless

We are about to re-establish regular, monthly online meetings of the TYPO3
Documentation Team. Please consider becoming a team member. This means: You are
willing to participate in the monthly meetings and you are willing to take over
a task or another on a regular and not just random basis. You have that
feeling? Great! Please get yourself a `Slack invite
<https://forger.typo3.com/slack>`__, if you haven't yet, and let us know
in the `#typo3-documentation channel
<https://typo3.slack.com/archives/C028JEPJL/p1522245664000027>`__.

And please, participate in this `Doodle
<https://doodle.com/poll/yk89nh4qk4kc3cii>`__ and vote for date and time of the
first meeting. To just join the meeting you don't need to become a member or
vote. Meetings are always open for guests.

Please vote: https://doodle.com/poll/yk89nh4qk4kc3cii

First possible dates are in the range of April 12-16, 2018.

.. figure:: files/2018-03-28-doodle-teaser.png
   :target: https://doodle.com/poll/yk89nh4qk4kc3cii
   :class: with-shadow
   :alt: Teaser image of the Doodle survey


.. _news-2018-02-13:
.. rst-class:: panel panel-default

HELP: My extension documentation was rendered with the OLD layout!
------------------------------------------------------------------

2018-02-13 by Martin Bless

That is actually a good sign. Why? Read on!

Shortly after an extension upload to the TER the documentation server will
render the documentation that (hopefully!) comes with that version.
BUT: At the moment this automatic rendering process still uses the old layout.
Unfortunately the current server is very old and can't run the new toolchain.
And we haven't managed to switch everything to a new server yet. That is why
you initially may feel you've done something wrong because that outdated
layout is used.
At the moment I'm running the new toolchain manually "every now and then" from my
local machine. In general that should happen at least once a day. The plan is,
of course, to set up a fully automated process for that. But we can't foresee
at the moment when exactly that will be.

What does this mean? If you see your documentation in the old layout that
actually is a good sign. It proofs that the documentation can be found and
rendered. Just stay calm and patient until the new layout appears. That's the
only thing you need to do.

Easy - you can do it!


.. _news-2018-02-02:
.. rst-class:: panel panel-default

New manual: "Tell me something about topic X"
---------------------------------------------

2018-02-02 by Martin Bless

Often questions are centered around topics: How does TYPO3
caching work? How can I improve performance? How to use
composer with TYPO3? And often answers are given in
blogpostings, slides, videos and so on.

`The new manual <https://docs.typo3.org/typo3cms/TellMeSomethingAbout/>`__
is the dedicated spot to list and collect
those topics. And it's up to you and everybody in the
community to come up with explanations, helpful texts
and links.

Can we make that manual a success? Yes, we can!
Everybody is counting on YOU!



.. _news-2018-01-20:
.. rst-class:: panel panel-default

Document restructurings
-----------------------

2018-01-20 by Christian Kuhn

Next to many contributors fixing various documentation parts,
we're currently in a bigger restructuring process of main
manuals: Various documents are merged into one,
the Homepage gets some love to find stuff quicker and other
good stuff.

Stay tuned!



.. _news-2018-01-19:
.. rst-class:: panel panel-default

Youtube Tutorial - Contribute to docs.typo3.org
-----------------------------------------------

2018-01-19 by Mathias Schreiber

.. youtube:: wNxO-aXY5Yw

