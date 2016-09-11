
.. include:: ../../Includes.txt



==============
Tip Of The Day
==============

.. always let the 'Tip-of-the-day' target point to the first entry:

.. _Tip-of-the-day:




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


