.. include:: /Includes.rst.txt

.. _System-Extensions:

=================
System Extensions
=================

Documentation of extensions managed within the core repository directly
and maintained by the core team and core contributors are called
*system extensions*. If working with the full core package, these
extensions can be found in the
`typo3/sysext <https://github.com/TYPO3/typo3/tree/master/typo3/sysext>`__
directory.

Some of these extensions provide documentation, too. The documentation
is linked here. You can find a more detailed list below. 

.. toctree::
   :hidden:

   adminpanel           <https://docs.typo3.org/c/typo3/cms-adminpanel/master/en-us/>
   dashboard            <https://docs.typo3.org/c/typo3/cms-dashboard/master/en-us/>
   felogin              <https://docs.typo3.org/c/typo3/cms-felogin/master/en-us/>
   fluid_styled_content <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/master/en-us/>
   form                 <https://docs.typo3.org/c/typo3/cms-form/master/en-us/>
   indexed_search       <https://docs.typo3.org/c/typo3/cms-indexed-search/master/en-us/>
   linkvalidator        <https://docs.typo3.org/c/typo3/cms-linkvalidator/master/en-us/>
   lowlevel             <https://docs.typo3.org/c/typo3/cms-lowlevel/master/en-us/>
   recycler             <https://docs.typo3.org/c/typo3/cms-recycler/master/en-us/>
   redirects            <https://docs.typo3.org/c/typo3/cms-redirects/master/en-us/>
   rte_ckeditor         <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/master/en-us/>
   scheduler            <https://docs.typo3.org/c/typo3/cms-scheduler/master/en-us/>
   seo                  <https://docs.typo3.org/c/typo3/cms-seo/master/en-us/>
   workspaces           <https://docs.typo3.org/c/typo3/cms-workspaces/master/en-us/>


Documentation of system extensions in current core version
==========================================================

`adminpanel <https://docs.typo3.org/c/typo3/cms-adminpanel/master/en-us/>`__ |
backend |
belog |
beuser |
core |
`dashboard <https://docs.typo3.org/c/typo3/cms-dashboard/master/en-us/>`__ |
extbase |
extensionmanager |
`felogin <https://docs.typo3.org/c/typo3/cms-felogin/master/en-us/>`__ |
filelist |
filemetadata |
fluid |
`fluid_styled_content <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/master/en-us/>`__ |
`form <https://docs.typo3.org/c/typo3/cms-form/master/en-us/>`__ |
frontend |
impexp |
`indexed_search <https://docs.typo3.org/c/typo3/cms-indexed-search/master/en-us/>`__ |
info |
install |
`linkvalidator <https://docs.typo3.org/c/typo3/cms-linkvalidator/master/en-us/>`__ |
lowlevel |
opendocs |
recordlist |
recycler |
redirects |
reports |
rte_ckeditor |
scheduler |
seo |
setup |
sys_note |
t3editor |
tstemplate |
viewpage |
workspaces |

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

            .. rubric:: `Admin Panel (adminpanel) <https://docs.typo3.org/c/typo3/cms-adminpanel/master/en-us/>`__

         .. container:: card-body

            The TYPO3 admin panel provides a panel with additional functionality in the frontend (Debugging, Caching, Preview...)

            Packagist: `typo3/cms-adminpanel <https://packagist.org/packages/typo3/cms-adminpanel>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-adminpanel/master/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-adminpanel/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-adminpanel/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Dashboard (dashboard) <https://docs.typo3.org/c/typo3/cms-dashboard/master/en-us/>`__

         .. container:: card-body

            A Dashboard for the TYPO3 backend

            Packagist: `typo3/cms-dashboard <https://packagist.org/packages/typo3/cms-dashboard>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-dashboard/master/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-dashboard/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-dashboard/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Frontend Login (felogin) <https://docs.typo3.org/c/typo3/cms-felogin/master/en-us/>`__

         .. container:: card-body

            Frontend login based on frontend users and user groups

            Packagist: `typo3/cms-indexed-search <https://packagist.org/packages/typo3/cms-indexed-search>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-felogin/master/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-felogin/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-felogin/11.5/en-us/>`__


   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Fluid Styled Content (fluid_styled_content) <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/master/en-us/>`_

         .. container:: card-body

            Content Elements based on Fluid

            Packagist: `typo3/cms-fluid-styled-content <https://packagist.org/packages/typo3/cms-fluid-styled-content>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/master/en-us/>`_
            - `11.5 <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/11.5/en-us/>`_
            - `10.4 <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/10.4/en-us/>`_

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Form framework (form) <https://docs.typo3.org/c/typo3/cms-form/master/en-us/>`__

         .. container:: card-body

            Form Library, Plugin and Editor

            Packagist: `typo3/cms-form <https://packagist.org/packages/typo3/cms-form>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-form/master/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-form/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-form/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Indexed Search (indexed_search) <https://docs.typo3.org/c/typo3/cms-indexed-search/master/en-us/>`__

         .. container:: card-body

            Indexed Search Engine for TYPO3 pages, PDF-files, Word-files, HTML and text files. Provides a backend module for statistics of the indexer and a frontend plugin.

            Packagist: `typo3/cms-indexed_search <https://packagist.org/packages/typo3/cms-indexed_search>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-indexed-search/master/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-indexed-search/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-indexed-search/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Import / Export <https://docs.typo3.org/c/typo3/cms-impexp/master/en-us/>`__

         .. container:: card-body

            Import and Export of records from TYPO3 in a custom serialized format (.T3D) for data exchange with other TYPO3 systems.

            Packagist: `typo3/impexp <https://packagist.org/packages/typo3/cms-impexp>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-impexp/master/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-impexp/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-impexp/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Link Validator <https://docs.typo3.org/c/typo3/cms-linkvalidator/master/en-us/>`__

         .. container:: card-body

            The Link Validator checks the links in your website for validity

            Packagist: `typo3/cms-linkvalidator <https://packagist.org/packages/typo3/cms-linkvalidator>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-linkvalidator/master/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-linkvalidator/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-linkvalidator/10.4/en-us/>`__

   .. container:: col-md-6 pl-0 pr-3 py-3 m-0

      .. container:: card px-0 h-100

         .. rst-class:: card-header h3

            .. rubric:: `Lowlevel <https://docs.typo3.org/c/typo3/cms-lowlevel/master/en-us/>`__

         .. container:: card-body

            Enables the 'Config' and 'DB Check' modules for technical analysis of the system. This includes raw database search, checking relations, counting pages and records etc.

            Packagist: `typo3/cms-lowlevel <https://packagist.org/packages/typo3/cms-lowlevel>`__

         .. container:: card-footer pb-0

            .. rst-class:: horizbuttons-striking-m

            - `12-dev <https://docs.typo3.org/c/typo3/cms-lowlevel/master/en-us/>`__
            - `11.5 <https://docs.typo3.org/c/typo3/cms-lowlevel/11.5/en-us/>`__
            - `10.4 <https://docs.typo3.org/c/typo3/cms-lowlevel/10.4/en-us/>`__


.. t3-field-list-table::
   :header-rows: 1

   - :Manual: Documentation
     :Package: Package
     :Descr: Description

   - :Manual: `Recycler <https://docs.typo3.org/c/typo3/cms-recycler/master/en-us/>`_
     :Package: typo3/cms-recycler
     :Descr: The recycler offers the possibility to restore deleted records or remove them from the database permanently.

   - :Manual: `Redirects <https://docs.typo3.org/c/typo3/cms-redirects/master/en-us/>`_
     :Package: typo3/cms-redirects
     :Descr: Custom redirects in TYPO3

   - :Manual: `CKEditor <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/master/en-us/>`_
     :Package: typo3/cms-rte-ckeditor
     :Descr: Integration of CKEditor as Rich Text Editor

   - :Manual: `Scheduler <https://docs.typo3.org/c/typo3/cms-scheduler/master/en-us/>`_
     :Package: typo3/cms-scheduler
     :Descr: The TYPO3 Scheduler lets you register tasks to happen at a specific time

   - :Manual: `SEO <https://docs.typo3.org/c/typo3/cms-seo/master/en-us/>`_
     :Package: typo3/cms-seo
     :Descr: SEO features for TYPO3

   - :Manual: `Workspaces and Versioning <https://docs.typo3.org/c/typo3/cms-workspaces/master/en-us/>`_
     :Package: typo3/cms-workspaces
     :Descr: Adds workspaces functionality with custom stages to TYPO3.


Documentation of system extensions abandoned from current core version
======================================================================

.. t3-field-list-table::
   :header-rows: 1

   - :Manual: Manual
     :Package: Extension key
     :Versions: Versions
     :Descr: Comment

   - :Manual: `ADOdb <https://docs.typo3.org/p/friendsoftypo3/adodb/8.4/en-us/>`_
     :Package: adodb
     :Versions: `8.4 <https://docs.typo3.org/p/friendsoftypo3/adodb/8.4/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/adodb/7.6/>`__
     :Descr: Included until TYPO3 <= 7.6

   - :Manual: `CSS Styled Content <https://docs.typo3.org/c/typo3/cms-css-styled-content/8.7/en-us/>`_
     :Package: css_styled_content
     :Versions: `8.7 <https://docs.typo3.org/c/typo3/cms-css-styled-content/8.7/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/css_styled_content/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/css_styled_content/6.2/>`__
     :Descr: Included until TYPO3 <= 8.7

   - :Manual: `Database abstraction layer <https://docs.typo3.org/p/friendsoftypo3/dbal/8.4/en-us/>`_
     :Package: dbal
     :Versions: `8.4 <https://docs.typo3.org/p/friendsoftypo3/dbal/8.4/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/dbal/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/dbal/6.2/>`__
     :Descr: Included until TYPO3 <= 7.6

   - :Manual: `func <https://docs.typo3.org/typo3cms/extensions/func/stable/>`_
     :Package: func
     :Versions:
     :Descr: Was removed from core in 9.0, see `Changelog <https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/9.0/Breaking-81787-DropEXTfunc.html>`__


   - :Manual: `Openid <https://docs.typo3.org/p/friendsoftypo3/openid/8.1/en-us/>`_
     :Package: openid
     :Versions: `8.1 <https://docs.typo3.org/p/friendsoftypo3/openid/8.1/en-us/>`__ |
                `8.0 <https://docs.typo3.org/p/friendsoftypo3/openid/8.0/en-us/>`__ |
                `7.6 <https://docs.typo3.org/p/friendsoftypo3/openid/7.6/en-us/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/openid/6.2/>`__
     :Descr: Included until TYPO3 <= 6.2

   - :Manual: `RSA authentication <https://docs.typo3.org/c/typo3/cms-rsaauth/9.5/en-us/>`_
     :Package: rsaauth
     :Versions: `9.5 <https://docs.typo3.org/c/typo3/cms-rsaauth/9.5/en-us/>`__ |
                `8.7 <https://docs.typo3.org/c/typo3/cms-rsaauth/8.7/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/rsaauth/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/rsaauth/6.2/>`__
     :Descr: Included until TYPO3 <= 9.5

   - :Manual: `htmlarea RTE <https://docs.typo3.org/p/friendsoftypo3/rtehtmlarea/8.7/en-us/>`_
     :Package: rtehtmlarea
     :Versions: `8.7 <https://docs.typo3.org/p/friendsoftypo3/rtehtmlarea/8.7/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/rtehtmlarea/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/rtehtmlarea/6.2/>`__
     :Descr: Included until TYPO3 <= 7.6

   - :Manual: `Salted user password hashes <https://docs.typo3.org/c/typo3/cms-saltedpasswords/8.7/en-us/>`_
     :Package: saltedpasswords
     :Versions: `8.7 <https://docs.typo3.org/c/typo3/cms-saltedpasswords/8.7/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/saltedpasswords/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/saltedpasswords/6.2/>`__
     :Descr: Merged into main core extension since TYPO3 >=7.4. See `Core API <https://docs.typo3.org/typo3cms/CoreApiReference/ApiOverview/PasswordHashing/Index.html>`_

   - :Manual: `System Actions <https://docs.typo3.org/c/typo3/cms-sys-action/9.5/en-us/>`_
     :Package: sys_action
     :Versions: `9.5 <https://docs.typo3.org/c/typo3/cms-sys-action/9.5/en-us/>`__ |
                `8.7 <https://docs.typo3.org/c/typo3/cms-sys-action/8.7/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/sys_action/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/sys_action/6.2/>`__
     :Descr: Included until TYPO3 <= 9.5

   - :Manual: `Taskcenter <https://docs.typo3.org/c/typo3/cms-taskcenter/9.5/en-us/>`_
     :Package: taskcenter
     :Versions: `9.5 <https://docs.typo3.org/c/typo3/cms-taskcenter/9.5/en-us/>`__ |
                `8.7 <https://docs.typo3.org/c/typo3/cms-taskcenter/8.7/en-us/>`__ |
                `7.6 <https://docs.typo3.org/typo3cms/extensions/taskcenter/7.6/>`__ |
                `6.2 <https://docs.typo3.org/typo3cms/extensions/taskcenter/6.2/>`__
     :Descr: Included until TYPO3 <= 9.5
