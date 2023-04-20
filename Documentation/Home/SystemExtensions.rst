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

EXT:core, EXT:backend and other system extensions do not have their
own documentation; the functionality is documented in
:ref:`TYPO3 Explained <t3coreapi:start>`.

.. toctree::
   :hidden:

   adminpanel           <https://docs.typo3.org/c/typo3/cms-adminpanel/11.5/en-us/>
   dashboard            <https://docs.typo3.org/c/typo3/cms-dashboard/11.5/en-us/>
   felogin              <https://docs.typo3.org/c/typo3/cms-felogin/11.5/en-us/>
   fluid_styled_content <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/11.5/en-us/>
   form                 <https://docs.typo3.org/c/typo3/cms-form/11.5/en-us/>
   impexp               <https://docs.typo3.org/c/typo3/cms-impexp/11.5/en-us/>
   indexed_search       <https://docs.typo3.org/c/typo3/cms-indexed-search/11.5/en-us/>
   linkvalidator        <https://docs.typo3.org/c/typo3/cms-linkvalidator/11.5/en-us/>
   lowlevel             <https://docs.typo3.org/c/typo3/cms-lowlevel/11.5/en-us/>
   reactions            <https://docs.typo3.org/c/typo3/cms-reactions/main/en-us/>
   recycler             <https://docs.typo3.org/c/typo3/cms-recycler/11.5/en-us/>
   redirects            <https://docs.typo3.org/c/typo3/cms-redirects/11.5/en-us/>
   reports              <https://docs.typo3.org/c/typo3/cms-reports/main/en-us/>
   rte_ckeditor         <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/11.5/en-us/>
   scheduler            <https://docs.typo3.org/c/typo3/cms-scheduler/11.5/en-us/>
   seo                  <https://docs.typo3.org/c/typo3/cms-seo/11.5/en-us/>
   t3editor             <https://docs.typo3.org/c/typo3/cms-t3editor/11.5/en-us/>
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

.. container:: row m-0 p-0

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Admin Panel <https://docs.typo3.org/c/typo3/cms-adminpanel/main/en-us/>`__

         .. container:: card-body

            The TYPO3 admin panel provides a panel with additional functionality in the frontend (Debugging, Caching,
            Preview...).

            `typo3/cms-adminpanel <https://packagist.org/packages/typo3/cms-adminpanel>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-adminpanel/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-adminpanel/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-adminpanel/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Dashboard <https://docs.typo3.org/c/typo3/cms-dashboard/main/en-us/>`__

         .. container:: card-body

            A Dashboard for the TYPO3 backend.

            `typo3/cms-dashboard <https://packagist.org/packages/typo3/cms-dashboard>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-dashboard/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-dashboard/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-dashboard/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Frontend Login <https://docs.typo3.org/c/typo3/cms-felogin/main/en-us/>`__

         .. container:: card-body

            Frontend login based on frontend users and user groups

            `typo3/cms-felogin <https://packagist.org/packages/typo3/cms-felogin>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-felogin/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-felogin/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-felogin/11.5/en-us/>`__


   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Fluid Styled Content <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/main/en-us/>`_

         .. container:: card-body

            Content Elements based on Fluid.

            `typo3/cms-fluid-styled-content <https://packagist.org/packages/typo3/cms-fluid-styled-content>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/main/en-us/>`_
            - `11.5 <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/11.5/en-us/>`_
            - `10.4 <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/10.4/en-us/>`_

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Form framework <https://docs.typo3.org/c/typo3/cms-form/main/en-us/>`__

         .. container:: card-body

            Form Library, Plugin and Editor.

            `typo3/cms-form <https://packagist.org/packages/typo3/cms-form>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-form/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-form/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-form/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Indexed Search <https://docs.typo3.org/c/typo3/cms-indexed-search/main/en-us/>`__

         .. container:: card-body

            Indexed Search Engine for TYPO3 pages, PDF-files, Word-files, HTML and text files. Provides a backend module
            for statistics of the indexer and a frontend plugin.

            `typo3/cms-indexed-search <https://packagist.org/packages/typo3/cms-indexed-search>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-indexed-search/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-indexed-search/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-indexed-search/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Import / Export <https://docs.typo3.org/c/typo3/cms-impexp/main/en-us/>`__

         .. container:: card-body

            Import and Export of records from TYPO3 in a custom serialized format (.T3D) for data exchange with other
            TYPO3 systems.

            `typo3/cms-impexp <https://packagist.org/packages/typo3/cms-impexp>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-impexp/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-impexp/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-impexp/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Link Validator <https://docs.typo3.org/c/typo3/cms-linkvalidator/main/en-us/>`__

         .. container:: card-body

            The Link Validator checks the links in your website for validity.

            `typo3/cms-linkvalidator <https://packagist.org/packages/typo3/cms-linkvalidator>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-linkvalidator/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-linkvalidator/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-linkvalidator/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Lowlevel <https://docs.typo3.org/c/typo3/cms-lowlevel/main/en-us/>`__

         .. container:: card-body

            Enables the 'Config' and 'DB Check' modules for technical analysis of the system. This includes raw
            database search, checking relations, counting pages and records etc.

            `typo3/cms-lowlevel <https://packagist.org/packages/typo3/cms-lowlevel>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-lowlevel/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-lowlevel/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-lowlevel/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Reactions <https://docs.typo3.org/c/typo3/cms-reactions/main/en-us/>`__

         .. container:: card-body

            This extension handles incoming webhooks to TYPO3.

            `typo3/cms-reactions <https://packagist.org/packages/typo3/cms-reactions>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-reactions/main/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Recycler <https://docs.typo3.org/c/typo3/cms-recycler/main/en-us/>`__

         .. container:: card-body

            The recycler offers the possibility to restore deleted records or remove them from the database permanently.

            `typo3/cms-recycler <https://packagist.org/packages/typo3/cms-recycler>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-recycler/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-recycler/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-recycler/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Redirects <https://docs.typo3.org/c/typo3/cms-redirects/main/en-us/>`__

         .. container:: card-body

            Create manual redirects, list existing redirects and automatically create\nredirects on slug changes.

            `typo3/cms-redirects <https://packagist.org/packages/typo3/cms-redirects>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-redirects/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-redirects/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-redirects/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Reports <https://docs.typo3.org/c/typo3/cms-reports/main/en-us/>`__

         .. container:: card-body

            This extension shows status reports and installed services in the
            :guilabel:`System > Reports` backend module.

            `typo3/cms-reports <https://packagist.org/packages/typo3/cms-reports>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-reports/main/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `CKEditor <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/main/en-us/>`__

         .. container:: card-body

            Integration of CKEditor as a Rich Text Editor for the TYPO3 backend.

            `typo3/cms-rte-ckeditor <https://packagist.org/packages/typo3/cms-rte-ckeditor>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Scheduler <https://docs.typo3.org/c/typo3/cms-scheduler/main/en-us/>`_

         .. container:: card-body

            The TYPO3 Scheduler lets you register tasks to happen at a specific time.

            `typo3/cms-scheduler <https://packagist.org/packages/typo3/cms-scheduler>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `SEO <https://docs.typo3.org/c/typo3/cms-seo/main/en-us/>`_

         .. container:: card-body

            SEO features including specific fields for SEO purposes, rendering of HTML meta tags and sitemaps.

            `typo3/cms-seo <https://packagist.org/packages/typo3/cms-seo>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-seo/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-seo/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-seo/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `T3Editor <https://docs.typo3.org/c/typo3/cms-t3editor/main/en-us/>`__

         .. container:: card-body

            This system extension provides a backend editor with syntax highlighting.

            `typo3/cms-t3editor <https://packagist.org/packages/typo3/cms-t3editor>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-t3editor/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-t3editor/11.5/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Workspaces and Versioning <https://docs.typo3.org/c/typo3/cms-workspaces/main/en-us/>`__

         .. container:: card-body

            Adds workspaces functionality with custom stages to TYPO3.

            `typo3/cms-workspaces <https://packagist.org/packages/typo3/cms-workspaces>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-workspaces/main/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-workspaces/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-workspaces/10.4/en-us/>`__


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
     :Comment: Was removed from core in 9.0, see `Changelog <https://docs.typo3.org/c/typo3/cms-core/main/en-us/Changelog/9.0/Breaking-81787-DropEXTfunc.html>`__


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
