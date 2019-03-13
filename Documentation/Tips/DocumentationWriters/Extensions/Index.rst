:orphan:

.. include:: ../../../Includes.txt


.. _extensions:

==========
Extensions
==========


.. default-role:: code
.. highlight:: shell



((2016-07-04: Work in progress))

.. seealso::

   https://extensions.typo3.org/faq/


To be edited:

1. If you use PHPStorm for developing, there is a nice How-To from the Documentation Team.
   There is a description how they are working to build the Core Documentation:
   https://docs.typo3.org/typo3cms/drafts/github/wmdbsystems/RSTingWithPhpStormGuide/

2. If you'd rather work with a text program, there are several editors for editing reST
   on the wiki page: https://wiki.typo3.org/Editors_(reST)

If you have more questions or issues with writing documentation in reST, don't hesitate to contact
the `Documentation Team <documentation@typo3.org>`__


To be edited:

Although I uploaded a manual, it is not displayed at typo3.org - why?

Check that your documentation is located at the right place in your extension. That is ./Documentation/Index.rst or ./README.rst.
If your documentation still is not rendered, there can be an syntax error in your reStructuredText.
Warnings and errors will be saved to http://docs.typo3.org/typo3cms/extensions/YOUREXTKEY/warnings.txt, so take a look there.
In addition you can use the extension sphinx to proof if everything is fine on your local system.
To get an introduction to reStructuredText take the sphinx extension as an example. Further more the format is well documented at sphinx-doc.org/rest.html.
In addition the documentation of the sphinx extension has further information.

https://extensions.typo3.org/extension/sphinx/

http://sphinx-doc.org/rest.html

http://docs.typo3.org/typo3cms/extensions/sphinx/WritersManual/SphinxRest/Index.html

