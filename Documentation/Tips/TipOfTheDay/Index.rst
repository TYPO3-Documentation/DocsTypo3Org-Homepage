
.. include:: ../../Includes.txt



==============
Tip Of The Day
==============

.. always let the 'Tip-of-the-day' target point to the first entry:

.. _Tip-of-the-day:




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


