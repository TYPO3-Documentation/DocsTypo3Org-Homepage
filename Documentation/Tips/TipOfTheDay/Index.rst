
.. include:: ../../Includes.txt



==============
Tip Of The Day
==============

.. always let the 'Tip-of-the-day' target point to the first entry:

.. _Tip-of-the-day:




.. _tip-of-the-day-2017-02-13:
.. rst-class:: panel panel-default

'toctree' and the hierarchical structure of a manual
====================================================

2017-02-13 by Martin Bless

TYPO3 documentation usually starts with a textfile :file:`PROJECT/Documentation/Index.rst`.
The text may go into more than one textfile and these can be "pulled in" and
referenced by the
`.. toctree:: directive <http://www.sphinx-doc.org/en/stable/markup/toctree.html>`__.
Note:

#. Each `.. toctree::` directive creates a sublevel of headlines in the menu.

#. The sublevel refers to the *current level*.

#. Sometimes you don't get what you expect. Example of such a **problem**:

   .. code-block:: rst

      ================
      My Documentation
      ================

      Introduction
      ============
      This project does something very useful ...
      See the individual chapters.

      .. toctree::

         Chapter-1
         Chapter-2
         Chapter-3

   The example feels very natural. We are thinking of the introduction
   follwed by the single chapters. Unfortunately we get something different.
   The chapters will all be a *subpart* of *Introduction* and not at the same level.
   It is exactly what the Sphinx documentation states and there is no way to
   "tweak" this.

#. **Solution:**

   The solution comes with these rules of thumb:

   #. All or nothing: Pull in *all* content of a given level via `toctree`
      or none. If none, that would mean: Don't use `toctree` and write the
      chapters directly in the file.

   #. In other words:
      Do not use a headline ("section") in a document before a `.. toctree::`
      directive unless you really want that the pulled in documents
      go to a *sublevel* of that section.

   Here is how we can fix the example.
   Move the introduction to an extra file and pull it in just like the others.

   **Fixed examples:**

   .. code-block:: rst

      ================
      My Documentation
      ================

      You can have text here. But don't introduce headlines,
      if you want to have the pulled in files at the same level.

      .. toctree::

         Introduction
         Chapter-1
         Chapter-2
         Chapter-3



.. _tip-of-the-day-2016-12-29:
.. rst-class:: panel panel-default

How to start Documentation for Your TYPO3 Extension
===================================================

2016-12-29 by Martin Bless

**Quickstart:**

-  Get yourself one of the T3DocumentationStarter projects that look like
   https://docs.typo3.org/typo3cms/drafts/github/T3DocumentationStarter/Public-Info-000/

-  Read the frontpage of the starter to learn how it works.

-  You may edit directly at Github. Just do a little update and save (=push),
   and some very few minutes later you can reload the page and see what the
   server has rendered for you. You don't have to install or render anything yourself.
   The server will do that for you.

-  Or work with Github as you usually do.

-  To become the owner of a starter project send a mail with your **Github username**
   to the docteam to documentation@typo3.org and ask for a T3DocumentationStarter project.

-  Later: Copy the :file:`./Documentation` folder of the starter project to your extension.
   Write your documentation. Edit the metadata in :file:`./Documentation/Settings.cfg` and
   you are done.

Come to the sunny side of documentation - have fun!



.. _tip-of-the-day-2016-10-08:
.. rst-class:: panel panel-default

How to write inline code
========================

2016-10-08 by Martin Bless

Preferred: Use single backticks ` ... `
---------------------------------------

1. In general we are using `interpreted text roles`_ for small inline
   code snippets. Surround the code by *single backticks* and don't start or end
   the code with whitespace. Example: Type ```2 + 2 = 4``` to get `2 + 2 = 4`
   as result.

2. Just write the code as it is - don't escape or double anything.

3. Even better: Explicitely specify what kind of code (= textrole) it is. This better shows
   the semantics and in the output there may be a a special coloring or highlighting (on the way):

   ================ ================================================= ============================================ ===
   Role             Source                                            Output                                       Note
   ================ ================================================= ============================================ ===
   (default)        ```result = (1 + x) * 32```                       `result = (1 + x) * 32`                      This works because in :file:`Includes.txt` we set the default role to ``:code:`...```
   aspect           ``:aspect:`Description:```                        :aspect:`Description:`                       For better optics
   code             ``:code:`result = (1 + x) * 32```                 :code:`result = (1 + x) * 32`
   file             ``:file:`/etc/passwd```                           :file:`/etc/passwd`
   js               ``:js:`var f = function () {return 1;}```         :js:`var f = function () {return 1;}`
   jts              ``:jts:`(javascript) typescript```                :jts:`...`                                   WIP - planned
   html             ``:html:`<a href="#">```                          :html:`<a href="#">`
   ts               ``:ts:`lib.hello.value = Hello World!```          :ts:`lib.hello.value = Hello World!`
   typoscript       ``:typoscript:`lib.hello.value = Hello World!```  :typoscript:`lib.hello.value = Hello World!`
   php              ``:php:`$result = $a + 23;```                     :php:`$result = $a + 23;`
   ================ ================================================= ============================================ ===


When to use literal code \`\`...``
----------------------------------

Things get tricky if your inline code already contains single backquotes (backticks).

4. In many cases you can still use the *interpreted textrole* as described in 1. to 3.
   For example we can write ``:code:`:html:`<br>```` to get :code:`:html:`<br>``

   This is possible if (a) your code doesn't start with a backtick and (b) if no backtick in
   your code has a trailing whitespace.

5. **But:** To be really free to include inline any code containing backticks you will want to use
   `inline literals`_. Again: Don't escape or double anything, whitespace is maintained.
   *Example:*

      Write

         .. code-block:: rst

            SQL-example code: ``SELECT  `tt_content` . `bodytext`  AS  `t1` . `text`;``

      to get:

         SQL-example code: ``SELECT  `tt_content` . `bodytext`  AS  `t1` . `text`;``

   **The drawbacks** of literal inline code notation are:

   -  there is no way to semantically classify the kind of code
   -  there is no special coloring or highlighting
   -  the raw reST code looks less beautiful and is less readable

.. _interpreted text roles: http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#interpreted-text
.. _inline literals: http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#inline-literals



.. _tip-of-the-day-2016-09-11:
.. rst-class:: panel panel-default

Optional: Add borders to your images
====================================

2016-09-11 by Martin Bless

The next version of the `t3SphinxThemeRtd`_ (following 3.6.0) will know a general css class `with-border`.
Some images look best without an extra border because their outline is clearly visible. Others benefit from
having a border because they are not separated enough from the background. Example:

.. _t3SphinxThemeRtd: https://github.com/TYPO3-Documentation/t3SphinxThemeRtd

1. Here is the markup to include an image as a 'figure'. Figures always are of css type 'block' and can have
   a caption:

   .. figure:: files/2016-09-11-1.png
      :class: with-border

2. And this is what we see. The image is not clearly distinguished:

   .. figure:: files/2016-09-11-2.png

3. Now the same markup plus the extra class:

   .. figure:: files/2016-09-11-3.png
      :class: with-border

4. This screenshot benefits from having a border:

   .. figure:: files/2016-09-11-4.png

Now: To border or not to border, that's at your decision.





.. _tip-of-the-day-2016-09-02:
.. rst-class:: panel panel-default

Are there open pull requests?
=============================

2016-09-02 by Martin Bless

Read :ref:`Are-there-open-pull-requests`


