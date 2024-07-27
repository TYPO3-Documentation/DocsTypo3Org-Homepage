..  include:: /Includes.rst.txt

..  _System-Extensions:

=================
System Extensions
=================

Documentation of extensions managed within the Core repository directly
and maintained by the Core Team and Core contributors are called
*system extensions*. If working with the full Core package, these
extensions can be found in :file:`typo3/sysext` directory.

Some of these extensions provide documentation, too. These are
listed here.

EXT:core, EXT:backend and other system extensions do not have their
own documentation; the functionality is documented in
:ref:`TYPO3 Explained <t3coreapi:start>`.

..  toctree::
    :hidden:

    adminpanel              <https://docs.typo3.org/c/typo3/cms-adminpanel/12.4/en-us/>
    dashboard                <https://docs.typo3.org/c/typo3/cms-dashboard/12.4/en-us/>
    felogin                  <https://docs.typo3.org/c/typo3/cms-felogin/12.4/en-us/>
    fluid_styled_content <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/12.4/en-us/>
    form                      <https://docs.typo3.org/c/typo3/cms-form/12.4/en-us/>
    impexp                    <https://docs.typo3.org/c/typo3/cms-impexp/12.4/en-us/>
    indexed_search         <https://docs.typo3.org/c/typo3/cms-indexed-search/12.4/en-us/>
    linkvalidator          <https://docs.typo3.org/c/typo3/cms-linkvalidator/12.4/en-us/>
    lowlevel                 <https://docs.typo3.org/c/typo3/cms-lowlevel/12.4/en-us/>
    reactions                <https://docs.typo3.org/c/typo3/cms-reactions/12.4/en-us/>
    recycler                 <https://docs.typo3.org/c/typo3/cms-recycler/12.4/en-us/>
    redirects                <https://docs.typo3.org/c/typo3/cms-redirects/12.4/en-us/>
    reports                  <https://docs.typo3.org/c/typo3/cms-reports/12.4/en-us/>
    rte_ckeditor            <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/12.4/en-us/>
    scheduler                <https://docs.typo3.org/c/typo3/cms-scheduler/12.4/en-us/>
    seo                        <https://docs.typo3.org/c/typo3/cms-seo/12.4/en-us/>
    sys_note                 <https://docs.typo3.org/c/typo3/cms-sys-note/12.4/en-us/>
    t3editor                 <https://docs.typo3.org/c/typo3/cms-t3editor/12.4/en-us/>
    workspaces              <https://docs.typo3.org/c/typo3/cms-workspaces/12.4/en-us/>

Documentation of system extensions in current Core version
==========================================================

The list of extensions developed directly in the Core repository
changes from time to time: Some extensions are merged into others,
some are integrated, others abandoned from Core and maintained at
a different place.

The list below is kept in sync with the current development version
of the Core, the table further below lists extensions that were
part of the Core and extracted at some point in time.

..  card-grid::
    :columns: 1
    :columns-md: 2
    :gap: 4
    :class: pb-4
    :card-height: 100

    ..  card:: `Admin Panel <https://docs.typo3.org/c/typo3/cms-adminpanel/12.4/en-us/>`__

        The TYPO3 admin panel provides a panel with additional functionality in the frontend (Debugging, Caching,
        Preview...).

        Composer: :composer:`typo3/cms-adminpanel`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-adminpanel/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-adminpanel/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-adminpanel/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Dashboard <https://docs.typo3.org/c/typo3/cms-dashboard/12.4/en-us/>`__

        A Dashboard for the TYPO3 backend.

        Composer: :composer:`typo3/cms-dashboard`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-dashboard/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-dashboard/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-dashboard/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Frontend Login <https://docs.typo3.org/c/typo3/cms-felogin/12.4/en-us/>`__

        Frontend login based on frontend users and user groups

        Composer: :composer:`typo3/cms-felogin`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-felogin/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-felogin/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-felogin/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Fluid Styled Content <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/12.4/en-us/>`_

        Content Elements based on Fluid.

        Composer: :composer:`typo3/cms-fluid-styled-content`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/12.4/en-us/>`_ `11.5 <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/11.5/en-us/>`_
            :button-style: btn btn-secondary

    ..  card:: `Form framework <https://docs.typo3.org/c/typo3/cms-form/12.4/en-us/>`__

        Form Library, Plugin and Editor.

        Composer: :composer:`typo3/cms-form`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-form/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-form/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-form/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Indexed Search <https://docs.typo3.org/c/typo3/cms-indexed-search/12.4/en-us/>`__

        Indexed Search Engine for TYPO3 pages, PDF-files, Word-files, HTML and text files. Provides a backend module
        for statistics of the indexer and a frontend plugin.

        Composer: :composer:`typo3/cms-indexed-search`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-indexed-search/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-indexed-search/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-indexed-search/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Import / Export <https://docs.typo3.org/c/typo3/cms-impexp/12.4/en-us/>`__

        Import and Export of records from TYPO3 in a custom serialized format (.T3D) for data exchange with other
        TYPO3 systems.

        Composer: :composer:`typo3/cms-impexp`

        ..  card-footer::  `13-dev <https://docs.typo3.org/c/typo3/cms-impexp/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-impexp/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-impexp/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Link Validator <https://docs.typo3.org/c/typo3/cms-linkvalidator/12.4/en-us/>`__

        The Link Validator checks the links in your website for validity.

        Composer: :composer:`typo3/cms-linkvalidator`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-linkvalidator/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-linkvalidator/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-linkvalidator/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Lowlevel <https://docs.typo3.org/c/typo3/cms-lowlevel/12.4/en-us/>`__

        Enables the 'Config' and 'DB Check' modules for technical analysis of the system. This includes raw
        database search, checking relations, counting pages and records etc.

        Composer: :composer:`typo3/cms-lowlevel`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-lowlevel/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-lowlevel/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-lowlevel/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Reactions <https://docs.typo3.org/c/typo3/cms-reactions/12.4/en-us/>`__

        This extension handles incoming webhooks to TYPO3.

        Composer: :composer:`typo3/cms-reactions`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-reactions/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-reactions/12.4/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Recycler <https://docs.typo3.org/c/typo3/cms-recycler/12.4/en-us/>`__

        The recycler offers the possibility to restore deleted records or remove them from the database permanently.

        Composer: :composer:`typo3/cms-recycler`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-recycler/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-recycler/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-recycler/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Redirects <https://docs.typo3.org/c/typo3/cms-redirects/12.4/en-us/>`__

        Create manual redirects, list existing redirects and automatically create\nredirects on slug changes.

        Composer: :composer:`typo3/cms-redirects`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-redirects/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-redirects/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-redirects/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Reports <https://docs.typo3.org/c/typo3/cms-reports/12.4/en-us/>`__

        This extension shows status reports and installed services in the
        :guilabel:`System > Reports` backend module.

        Composer: :composer:`typo3/cms-reports`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-reports/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-reports/12.4/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `CKEditor <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/12.4/en-us/>`__

        Integration of CKEditor as a Rich Text Editor for the TYPO3 backend.

        Composer: :composer:`typo3/cms-rte-ckeditor`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Scheduler <https://docs.typo3.org/c/typo3/cms-scheduler/12.4/en-us/>`_

        The TYPO3 Scheduler lets you register tasks to happen at a specific time.

        Composer: :composer:`typo3/cms-scheduler`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-scheduler/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-scheduler/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-scheduler/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `SEO <https://docs.typo3.org/c/typo3/cms-seo/12.4/en-us/>`_

        SEO features including specific fields for SEO purposes, rendering of HTML meta tags and sitemaps.

        Composer: :composer:`typo3/cms-seo`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-seo/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-seo/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-seo/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `System Notes <https://docs.typo3.org/c/typo3/cms-sys-note/12.4/en-us/>`_

        The internal notes are a useful feature for adding context and notes to pages.
        It provides a way for users to document important information related to specific pages.

        Composer: :composer:`typo3/cms-sys-note`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-sys-note/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-sys-note/12.4/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `T3Editor <https://docs.typo3.org/c/typo3/cms-t3editor/12.4/en-us/>`__

        This system extension provides a backend editor with syntax highlighting.

        Composer: :composer:`typo3/cms-t3editor`

        This system extension was merged into EXT:backend with TYPO3 v13.0.

        ..  card-footer:: `12.4 <https://docs.typo3.org/c/typo3/cms-t3editor/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-t3editor/11.5/en-us/>`__
            :button-style: btn btn-secondary

    ..  card:: `Workspaces and Versioning <https://docs.typo3.org/c/typo3/cms-workspaces/12.4/en-us/>`__

        Adds workspaces functionality with custom stages to TYPO3.

        Composer: :composer:`typo3/cms-workspaces`

        ..  card-footer:: `13-dev <https://docs.typo3.org/c/typo3/cms-workspaces/main/en-us/>`__ `12.4 <https://docs.typo3.org/c/typo3/cms-workspaces/12.4/en-us/>`__ `11.5 <https://docs.typo3.org/c/typo3/cms-workspaces/11.5/en-us/>`__
            :button-style: btn btn-secondary


Documentation of system extensions abandoned from current Core version
======================================================================

..  t3-field-list-table::
    :header-rows: 1

    -   :Manual: Manual
        :Composer: Composer name
        :Comment: Comment

    -   :Manual: `ADOdb <https://docs.typo3.org/p/friendsoftypo3/adodb/8.4/en-us/>`_
        :Composer: :composer:`friendsoftypo3/adodb`
        :Comment: Included until TYPO3 <= 7.6

    -   :Manual: `CSS Styled Content <https://docs.typo3.org/c/typo3/cms-css-styled-content/8.7/en-us/>`_
        :Composer: :composer:`typo3/cms-css-styled-content`
        :Comment: Included until TYPO3 <= 8.7

    -   :Manual: `Database abstraction layer <https://docs.typo3.org/p/friendsoftypo3/dbal/8.4/en-us/>`_
        :Composer: :composer:`friendsoftypo3/dbal`
        :Comment: Included until TYPO3 <= 7.6

    -   :Manual: `func <https://docs.typo3.org/p/friendsoftypo3/cms-func/9.0/en-us/>`_
        :Composer: :composer:`friendsoftypo3/cms-func`
        :Comment: Was removed from Core in 9.0, see `Changelog <https://docs.typo3.org/c/typo3/cms-core/main/en-us/Changelog/9.0/Breaking-81787-DropEXTfunc.html>`__

    -   :Manual: `Openid <https://docs.typo3.org/p/friendsoftypo3/openid/8.1/en-us/>`_
        :Composer: :composer:`friendsoftypo3/openid`
        :Comment: Included until TYPO3 <= 6.2

    -   :Manual: `RSA authentication <https://docs.typo3.org/c/typo3/cms-rsaauth/9.5/en-us/>`_
        :Composer: :composer:`typo3/cms-rsaauth`
        :Comment: Included until TYPO3 <= 9.5

    -   :Manual: `htmlarea RTE <https://docs.typo3.org/p/friendsoftypo3/rtehtmlarea/8.7/en-us/>`_
        :Composer: :composer:`friendsoftypo3/rtehtmlarea`
        :Comment: Included until TYPO3 <= 7.6

    -   :Manual: `Salted user password hashes <https://docs.typo3.org/c/typo3/cms-saltedpasswords/8.7/en-us/>`_
        :Composer: :composer:`typo3/cms-saltedpasswords`
        :Comment: Merged into main Core extension since TYPO3 >=7.4. See `Core API <https://docs.typo3.org/typo3cms/CoreApiReference/ApiOverview/PasswordHashing/Index.html>`_

    -   :Manual: `System Actions <https://docs.typo3.org/c/typo3/cms-sys-action/9.5/en-us/>`_
        :Composer: :composer:`typo3/cms-sys-action`
        :Comment: Included until TYPO3 <= 9.5

    -   :Manual: `Taskcenter <https://docs.typo3.org/c/typo3/cms-taskcenter/9.5/en-us/>`_
        :Composer: :composer:`typo3/cms-taskcenter`
        :Comment: Included until TYPO3 <= 9.5
