.. include:: /Includes.rst.txt

.. _System-Extensions:

=================
System Extensions
=================

Documentation of extensions managed within the core repository directly
and maintained by the core team and core contributors are called
*system extensions*. If working with the full core package, these
extensions can be found in :file:`typo3/sysext` directory.

Some of these extensions provide documentation, too. These are
listed here.

.. toctree::
   :hidden:

   adminpanel           <https://docs.typo3.org/c/typo3/cms-adminpanel/11.5/en-us/>
   dashboard            <https://docs.typo3.org/c/typo3/cms-dashboard/11.5/en-us/>
   felogin              <https://docs.typo3.org/c/typo3/cms-felogin/11.5/en-us/>
   fluid_styled_content <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/11.5/en-us/>
   form                 <https://docs.typo3.org/c/typo3/cms-form/11.5/en-us/>
   indexed_search       <https://docs.typo3.org/c/typo3/cms-indexed-search/11.5/en-us/>
   linkvalidator        <https://docs.typo3.org/c/typo3/cms-linkvalidator/11.5/en-us/>
   recycler             <https://docs.typo3.org/c/typo3/cms-recycler/11.5/en-us/>
   rte_ckeditor         <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/11.5/en-us/>
   scheduler            <https://docs.typo3.org/c/typo3/cms-scheduler/11.5/en-us/>
   seo                  <https://docs.typo3.org/c/typo3/cms-seo/11.5/en-us/>
   workspaces           <https://docs.typo3.org/c/typo3/cms-workspaces/11.5/en-us/>


Documentation of system extensions in current core version
==========================================================

The list of extensions developed directly in the core repository
changes from time to time: Some extensions are merged into others,
some are integrated, others abandoned from core and maintained at
a different place.

The list below is kept in sync with the current development version
of the core, the table further below lists extensions that were
part of the core and extracted at some point in time.


.. t3-field-list-table::
   :header-rows: 1

   - :Manual: Manual
     :ExtKey: Extension key
     :Comment: Comment

   - :Manual: `Admin Panel <https://docs.typo3.org/c/typo3/cms-adminpanel/11.5/en-us/>`_
     :ExtKey: adminpanel
     :Comment:

   - :Manual: `Dashboard <https://docs.typo3.org/c/typo3/cms-dashboard/11.5/en-us/>`_
     :ExtKey: dashboard
     :Comment:

   - :Manual: `Frontend Login <https://docs.typo3.org/c/typo3/cms-felogin/11.5/en-us/>`_
     :ExtKey: felogin
     :Comment:

   - :Manual: `Content Elements based on Fluid <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/11.5/en-us/>`_
     :ExtKey: fluid_styled_content
     :Comment:

   - :Manual: `Form framework <https://docs.typo3.org/c/typo3/cms-form/11.5/en-us/>`_
     :ExtKey: form
     :Comment: Extensive manual

   - :Manual: `Indexed Search <https://docs.typo3.org/c/typo3/cms-indexed-search/11.5/en-us/>`_
     :ExtKey: indexed_search
     :Comment:

   - :Manual: `Import / Export <https://docs.typo3.org/c/typo3/cms-impexp/11.5/en-us/>`_
     :ExtKey: impexp
     :Comment:

   - :Manual: `Link validator <https://docs.typo3.org/c/typo3/cms-linkvalidator/11.5/en-us/>`_
     :ExtKey: linkvalidator
     :Comment:

   - :Manual: `Recycler <https://docs.typo3.org/c/typo3/cms-recycler/11.5/en-us/>`_
     :ExtKey: recycler
     :Comment:

   - :Manual: `Integration of CKEditor as Rich Text Editor <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/11.5/en-us/>`_
     :ExtKey: rte_ckeditor
     :Comment: Documentation added in 2/2019, rte_ckeditor available since TYPO3 8.7 LTS

   - :Manual: `Scheduler <https://docs.typo3.org/c/typo3/cms-scheduler/11.5/en-us/>`_
     :ExtKey: scheduler
     :Comment: Recently reworked

   - :Manual: `SEO <https://docs.typo3.org/c/typo3/cms-seo/11.5/en-us/>`_
     :ExtKey: seo
     :Comment:

   - :Manual: `Workspaces and Versioning <https://docs.typo3.org/c/typo3/cms-workspaces/11.5/en-us/>`_
     :ExtKey: workspaces
     :Comment:


Documentation of system extensions abandoned from current core version
======================================================================

.. t3-field-list-table::
   :header-rows: 1

   - :Manual: Manual
     :ExtKey: Extension key
     :Versions: Versions
     :Comment: Comment

   - :Manual: `ADOdb <https://docs.typo3.org/p/friendsoftypo3/adodb/8.4/en-us/>`_
     :ExtKey: adodb
     :Versions: `8.4 <https://docs.typo3.org/p/friendsoftypo3/adodb/8.4/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/adodb/7.6/>`__
     :Comment: Included until TYPO3 <= 7.6

   - :Manual: `CSS Styled Content <https://docs.typo3.org/c/typo3/cms-css-styled-content/8.7/en-us/>`_
     :ExtKey: css_styled_content
     :Versions: `8.7 <https://docs.typo3.org/c/typo3/cms-css-styled-content/8.7/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/css_styled_content/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/css_styled_content/6.2/>`__
     :Comment: Included until TYPO3 <= 8.7

   - :Manual: `Database abstraction layer <https://docs.typo3.org/p/friendsoftypo3/dbal/8.4/en-us/>`_
     :ExtKey: dbal
     :Versions: `8.4 <https://docs.typo3.org/p/friendsoftypo3/dbal/8.4/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/dbal/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/dbal/6.2/>`__
     :Comment: Included until TYPO3 <= 7.6

   - :Manual: `func <https://docs.typo3.org/typo3cms/extensions/func/stable/>`_
     :ExtKey: func
     :Versions:
     :Comment: Was removed from core in 9.0, see `Changelog <https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/9.0/Breaking-81787-DropEXTfunc.html>`__


   - :Manual: `Openid <https://docs.typo3.org/p/friendsoftypo3/openid/8.1/en-us/>`_
     :ExtKey: openid
     :Versions: `8.1 <https://docs.typo3.org/p/friendsoftypo3/openid/8.1/en-us/>`__ |
                `8.0 <https://docs.typo3.org/p/friendsoftypo3/openid/8.0/en-us/>`__ |
                `7.6 <https://docs.typo3.org/p/friendsoftypo3/openid/7.6/en-us/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/openid/6.2/>`__
     :Comment: Included until TYPO3 <= 6.2

   - :Manual: `RSA authentication <https://docs.typo3.org/c/typo3/cms-rsaauth/9.5/en-us/>`_
     :ExtKey: rsaauth
     :Versions: `9.5 <https://docs.typo3.org/c/typo3/cms-rsaauth/9.5/en-us/>`__ |
                `8.7 <https://docs.typo3.org/c/typo3/cms-rsaauth/8.7/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/rsaauth/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/rsaauth/6.2/>`__
     :Comment: Included until TYPO3 <= 9.5

   - :Manual: `htmlarea RTE <https://docs.typo3.org/p/friendsoftypo3/rtehtmlarea/8.7/en-us/>`_
     :ExtKey: rtehtmlarea
     :Versions: `8.7 <https://docs.typo3.org/p/friendsoftypo3/rtehtmlarea/8.7/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/rtehtmlarea/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/rtehtmlarea/6.2/>`__
     :Comment: Included until TYPO3 <= 7.6

   - :Manual: `Salted user password hashes <https://docs.typo3.org/c/typo3/cms-saltedpasswords/8.7/en-us/>`_
     :ExtKey: saltedpasswords
     :Versions: `8.7 <https://docs.typo3.org/c/typo3/cms-saltedpasswords/8.7/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/saltedpasswords/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/saltedpasswords/6.2/>`__
     :Comment: Merged into main core extension since TYPO3 >=7.4. See `Core API <https://docs.typo3.org/typo3cms/CoreApiReference/ApiOverview/PasswordHashing/Index.html>`_

   - :Manual: `System Actions <https://docs.typo3.org/c/typo3/cms-sys-action/9.5/en-us/>`_
     :ExtKey: sys_action
     :Versions: `9.5 <https://docs.typo3.org/c/typo3/cms-sys-action/9.5/en-us/>`__ |
                `8.7 <https://docs.typo3.org/c/typo3/cms-sys-action/8.7/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/sys_action/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/sys_action/6.2/>`__
     :Comment: Included until TYPO3 <= 9.5

   - :Manual: `Taskcenter <https://docs.typo3.org/c/typo3/cms-taskcenter/9.5/en-us/>`_
     :ExtKey: taskcenter
     :Versions: `9.5 <https://docs.typo3.org/c/typo3/cms-taskcenter/9.5/en-us/>`__ |
                `8.7 <https://docs.typo3.org/c/typo3/cms-taskcenter/8.7/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/taskcenter/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/taskcenter/6.2/>`__
     :Comment: Included until TYPO3 <= 9.5
