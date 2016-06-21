.. include:: ../Includes.txt

==============================
Setting up PDF rendering
==============================

Preface
========================

docs.typo3.org can automatically generate a PDF file in TYPO3 look out of your documentation.



If docs.typo3.org can generate PDF files, why was I then brought here?
======================================================================

Well, either you clicked this page in the menu or you requested a PDF file, which does not exist.

PDF rendering must be especially enabled (see below). If you clicked a link to a PDF file
(usually with :file:`/_pdf/` in the URL) and you were **not** brought to a PDF file, but instead came here,
this usually means the extension author has not yet configured PDF output for his extension.

Bug him to add according configuration to get a PDF!



Configuring PDF rendering
=========================

If you want docs.typo3.org to generate a PDF file out of your documentation project, your
documentation project must have a file :file:`Settings.yml` (located at the root of your
:file:`Documentation/` folder). Make sure this file, inside a block for :file:`conf.py`,
at least contains the following configuration options (lines 6 to 15);
in this example taken from the TYPO3 extension "sphinx":

.. code-block:: yaml
	:linenos:
	:emphasize-lines: 6-15

	conf.py:
	  copyright: 2013-2014
	  project: Sphinx Python Documentation Generator and Viewer
	  version: 2.1
	  release: 2.1.0
	  latex_documents:
	  - - Index
	    - sphinx.tex
	    - Sphinx Python Documentation Generator and Viewer
	    - Xavier Perseguers
	    - manual
	  latex_elements:
	    papersize: a4paper
	    pointsize: 10pt
	    preamble: \usepackage{typo3}

Lines 7 to 11 define options for value ``latex_documents`` which determines how to group the document tree into LaTeX
source files. This is a list of tuples: ``startdocname``, ``targetname``, ``title``, ``author``, ``documentclass``, where
the items are:

startdocname
	Document name that is the "root" of the LaTeX files. All documents referenced by it in TOC trees will be included
	in the LaTeX file too.

	.. warning::
		Always use ``Index`` here.

targetname
	File name of the LaTeX file in the output directory.

	.. warning::
		Always use your extension key followed by ``.tex`` here.

title
	LaTeX document title. This is inserted as LaTeX markup, so special characters like a backslash or ampersand must be
	represented by the proper LaTeX commands if they are to be inserted literally.

author
	Author for the LaTeX document. The same LaTeX markup caveat as for *title* applies. Use ``\and`` to separate
	multiple authors, as in: ``'John \and Sarah'``.

documentclass
	Normally, one of ``manual`` or ``howto`` (provided by Sphinx).

	.. tip::
		To keep TYPO3 branding, you should always use ``manual`` here.

Lines 12 to 15 should be kept as they are. Especially the exact content of line 15 is important:
This code actually is the "trigger" for PDF rendering.

When activated, your PDF automatically gets rendered on https://docs.typo3.org under
:file:`https://docs.typo3.org/typo3cms/extensions/{extension-key}/_pdf/`. E.g.,
https://docs.typo3.org/typo3cms/extensions/sphinx/_pdf/.


(Information taken from the `documentation of the sphinx extension`__ by Xavier Perseguers.)

__ https://docs.typo3.org/typo3cms/extensions/sphinx/WritersManual/DocsTypo3Org/Index.html#pdf-rendering



