.. include:: ../../../Includes.txt


.. _build:

===================
Documentation build
===================



Trigger documentation rendering
===============================

To trigger a rebuild of a manual, click the "request_rebuild.php" file
in the respective .../\*.git.make folder.

Here are the links:

- Request rebuild for `the official TYPO3 CMS manuals <https://docs.typo3.org/~mbless/github.com/TYPO3-Documentation/TYPO3/>`_
- Request rebuild for `TYPO3 system extension manuals <https://docs.typo3.org/~mbless/git.typo3.org/TYPO3CMS/Extensions>`_
- Request rebuild for `manuals of extensions hosted on GitHub <https://docs.typo3.org/~mbless/github.com>`_


**Note:** After the rebuild, the \*.git.make folder also contains some
informative log files:


Files in the build folder
=========================

.. table:: Files in the build folder

    ====================== ========== =============
    File                   Purpose    Description
    ====================== ========== =============
    warnings.txt           log        **Watch this file:** Contains errors and warnings collected during the build process. A length of zero indicates a perfect result.
    request_rebuild.php    config     Click this file to request a rebuild.
    REBUILD_REQUESTED      config     Indicates that a rebuild is pending. The cron job is running every five minutes.
    conf.py                config     Is almost generic and all manuals almost have the same conf.py. Only the line ``t3DocTeam['relpath_to_master_doc'] = '...'`` needs to be adapted.
    Make                   config     The makefile for the sphinx build process.
    10_conf_py.yml         log        The initial Sphinx settings taken from internal presets and the conf.py file.
    20_GlobalSettings.yml  log        The global settings we provide as a default for all manuals.
    30_Settings.yml        log        The settings that belong to the respective manual.
    10+20_conf_py.yml      log        The combined result of 10 + 20
    10+20+30_conf_py.yml   log        The combined result of 10 + 20 + 30: These are the final settings that are effective in the end.
    dirs-of-last-build.txt log        Just a logfile. For your and admin's information only.
    ====================== ========== =============

The log files in the build folder exist for manual inspection only and
can be removed at any time.


