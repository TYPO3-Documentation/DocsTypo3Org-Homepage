:orphan:


.. include:: ../../../Includes.txt


.. _build:

===================
Documentation build
===================



Trigger documentation rendering
===============================

Moved to https://docs.typo3.org/typo3cms/HowToDocument/TipOfTheDay.html#tip-of-the-day


Files in the build folder
=========================

.. table:: Files in the build folder

    ====================== ========== =============
    File                   Purpose    Description
    ====================== ========== =============
    warnings.txt           log        **Watch this file:** Contains errors and warnings collected during the build process. A length of zero indicates a perfect result.
    request_rebuild.php    config     Click this file to request a rebuild.
    REBUILD_REQUESTED      config     Indicates that a rebuild is pending. The cron job is running every five minutes.
    checksum.build         control    A checksum of the Documentation part. Needs to change for rendering to occur.
    conf.py                config     Is almost generic and all manuals almost have the same conf.py. Only the line
                                      `t3DocTeam['relpath_to_master_doc'] = '...'` needs to be adapted.
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


