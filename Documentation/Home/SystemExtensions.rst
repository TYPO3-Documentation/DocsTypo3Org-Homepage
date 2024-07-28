.. include:: /Includes.rst.txt

.. _System-Extensions:

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

    aditor             <https://docs.typo3.org/c/typo3/cms-t3editor/12.4/en-us/>
    workminpanel           <https://docs.typo3.org/c/typo3/cms-adminpanel/12.4/en-us/>
    dashboard            <https://docs.typo3.org/c/typo3/cms-dashboard/12.4/en-us/>
    felogin              <https://docs.typo3.org/c/typo3/cms-felogin/12.4/en-us/>
    fluid_styled_content <https://docs.typo3.org/c/typo3/cms-fluid-styled-content/12.4/en-us/>
    form                 <https://docs.typo3.org/c/typo3/cms-form/12.4/en-us/>
    impexp               <https://docs.typo3.org/c/typo3/cms-impexp/12.4/en-us/>
    indexed_search       <https://docs.typo3.org/c/typo3/cms-indexed-search/12.4/en-us/>
    linkvalidator        <https://docs.typo3.org/c/typo3/cms-linkvalidator/12.4/en-us/>
    lowlevel             <https://docs.typo3.org/c/typo3/cms-lowlevel/12.4/en-us/>
    reactions            <https://docs.typo3.org/c/typo3/cms-reactions/12.4/en-us/>
    recycler             <https://docs.typo3.org/c/typo3/cms-recycler/12.4/en-us/>
    redirects            <https://docs.typo3.org/c/typo3/cms-redirects/12.4/en-us/>
    reports              <https://docs.typo3.org/c/typo3/cms-reports/12.4/en-us/>
    rte_ckeditor         <https://docs.typo3.org/c/typo3/cms-rte-ckeditor/12.4/en-us/>
    scheduler            <https://docs.typo3.org/c/typo3/cms-scheduler/12.4/en-us/>
    seo                  <https://docs.typo3.org/c/typo3/cms-seo/12.4/en-us/>
    sys_note             <https://docs.typo3.org/c/typo3/cms-sys-note/12.4/en-us/>
    t3edspaces           <https://docs.typo3.org/c/typo3/cms-workspaces/12.4/en-us/>

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
    :card-height: 100

    ..  card:: :doc:`Admin Panel <typo3/cms-adminpanel:Index>`

        The TYPO3 admin panel provides a panel with additional functionality in the frontend (Debugging, Caching,
        Preview...).

        Composer name: :composer:`typo3/cms-adminpanel`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-adminpanel/dev:Index>`
            :doc:`12.4 <typo3/cms-adminpanel:Index>`
            :doc:`11.5 <typo3/cms-adminpanel/oldstable:Index>`

    ..  card:: :doc:`Dashboard <typo3/cms-dashboard:Index>`

        A Dashboard for the TYPO3 backend.

        Composer name: :composer:`typo3/cms-dashboard`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-dashboard/dev:Index>`
            :doc:`12.4 <typo3/cms-dashboard:Index>`
            :doc:`11.5 <typo3/cms-dashboard/oldstable:Index>`

    ..  card:: :doc:`Frontend Login <typo3/cms-felogin:Index>`

        Frontend login based on frontend users and user groups

        Composer name: :composer:`typo3/cms-felogin`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-felogin/dev:Index>`
            :doc:`12.4 <typo3/cms-felogin:Index>`
            :doc:`11.5 <typo3/cms-felogin/oldstable:Index>`


    ..  card:: :doc:`Fluid Styled Content <typo3/cms-fluid-styled-content:Index>`

        Content Elements based on Fluid.

        Composer name: :composer:`typo3/cms-fluid-styled-content`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-fluid-styled-content/dev:Index>`
            :doc:`12.4 <typo3/cms-fluid-styled-content:Index>`
            :doc:`11.5 <typo3/cms-fluid-styled-content/oldstable:Index>`

    ..  card:: :doc:`Form framework <typo3/cms-form:Index>`

        Form Library, Plugin and Editor.

        Composer name: :composer:`typo3/cms-form`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-form/dev:Index>`
            :doc:`12.4 <typo3/cms-form:Index>`
            :doc:`11.5 <typo3/cms-form/oldstable:Index>`

    ..  card:: :doc:`Indexed Search <typo3/cms-indexed-search:Index>`

        Indexed Search Engine for TYPO3 pages, PDF-files, Word-files, HTML and text files. Provides a backend module
        for statistics of the indexer and a frontend plugin.

        Composer name: :composer:`typo3/cms-indexed-search`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-indexed-search/dev:Index>`
            :doc:`12.4 <typo3/cms-indexed-search:Index>`
            :doc:`11.5 <typo3/cms-indexed-search/oldstable:Index>`

    ..  card:: :doc:`Import / Export <typo3/cms-impexp:Index>`

        Import and Export of records from TYPO3 in a custom serialized format (.T3D) for data exchange with other
        TYPO3 systems.

        Composer name: :composer:`typo3/cms-impexp`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-impexp/dev:Index>`
            :doc:`12.4 <typo3/cms-impexp:Index>`
            :doc:`11.5 <typo3/cms-impexp/oldstable:Index>`

    ..  card:: :doc:`Link Validator <typo3/cms-linkvalidator:Index>`

        The Link Validator checks the links in your website for validity.

        Composer name: :composer:`typo3/cms-linkvalidator`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-linkvalidator/dev:Index>`
            :doc:`12.4 <typo3/cms-linkvalidator:Index>`
            :doc:`11.5 <typo3/cms-linkvalidator/oldstable:Index>`

    ..  card:: :doc:`Lowlevel <typo3/cms-lowlevel:Index>`

        Enables the 'Config' and 'DB Check' modules for technical analysis of the system. This includes raw
        database search, checking relations, counting pages and records etc.

        Composer name: :composer:`typo3/cms-lowlevel`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-lowlevel/dev:Index>`
            :doc:`12.4 <typo3/cms-lowlevel:Index>`
            :doc:`11.5 <typo3/cms-lowlevel/oldstable:Index>`

    ..  card:: :doc:`Reactions <typo3/cms-reactions:Index>`

        This extension handles incoming webhooks to TYPO3.

        Composer name: :composer:`typo3/cms-reactions`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-reactions/dev:Index>`
            :doc:`12.4 <typo3/cms-reactions:Index>`

    ..  card:: :doc:`Recycler <typo3/cms-recycler:Index>`

        The recycler offers the possibility to restore deleted records or remove them from the database permanently.

        Composer name: :composer:`typo3/cms-recycler`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-recycler/dev:Index>`
            :doc:`12.4 <typo3/cms-recycler:Index>`
            :doc:`11.5 <typo3/cms-recycler/oldstable:Index>`

    ..  card:: :doc:`Redirects <typo3/cms-redirects:Index>`

        Create manual redirects, list existing redirects and automatically create\nredirects on slug changes.

        Composer name: :composer:`typo3/cms-redirects`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-redirects/dev:Index>`
            :doc:`12.4 <typo3/cms-redirects:Index>`
            :doc:`11.5 <typo3/cms-redirects/oldstable:Index>`

    ..  card:: :doc:`Reports <typo3/cms-reports:Index>`

        This extension shows status reports and installed services in the
        :guilabel:`System > Reports` backend module.

        Composer name: :composer:`typo3/cms-reports`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-reports/dev:Index>`
            :doc:`12.4 <typo3/cms-reports:Index>`

    ..  card:: :doc:`CKEditor <typo3/cms-rte-ckeditor:Index>`

        Integration of CKEditor as a Rich Text Editor for the TYPO3 backend.

        Composer name: :composer:`typo3/cms-rte-ckeditor`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-rte-ckeditor/dev:Index>`
            :doc:`12.4 <typo3/cms-rte-ckeditor:Index>`
            :doc:`11.5 <typo3/cms-rte-ckeditor/oldstable:Index>`

    ..  card:: :doc:`Scheduler <typo3/cms-scheduler:Index>`_

        The TYPO3 Scheduler lets you register tasks to happen at a specific time.

        Composer name: :composer:`typo3/cms-scheduler`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-scheduler/dev:Index>`
            :doc:`12.4 <typo3/cms-scheduler:Index>`
            :doc:`11.5 <typo3/cms-scheduler/oldstable:Index>`

    ..  card:: :doc:`SEO <typo3/cms-seo:Index>`

        SEO features including specific fields for SEO purposes, rendering of HTML meta tags and sitemaps.

        Composer name: :composer:`typo3/cms-seo`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-seo/dev:Index>`
            :doc:`12.4 <typo3/cms-seo:Index>`
            :doc:`11.5 <typo3/cms-seo/oldstable:Index>`

    ..  card:: :doc:`System Notes <typo3/cms-sys-note:Index>`

        The internal notes are a useful feature for adding context and notes to pages.
        It provides a way for users to document important information related to specific pages.

        Composer name: :composer:`typo3/cms-sys-note`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-sys-note/dev:Index>`
            :doc:`12.4 <typo3/cms-sys-note:Index>`

    ..  card:: :doc:`T3Editor <typo3/cms-t3editor:Index>`

        This system extension provides a backend editor with syntax highlighting.

        Composer name: :composer:`typo3/cms-t3editor`

        This system extension was merged into EXT:backend with TYPO3 v13.0.

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-t3editor/dev:Index>`
            :doc:`12.4 <typo3/cms-t3editor:Index>`
            :doc:`11.5 <typo3/cms-t3editor/oldstable:Index>`

    ..  card:: :doc:`Workspaces and Versioning <typo3/cms-workspaces:Index>`

        Adds workspaces functionality with custom stages to TYPO3.

        Composer name: :composer:`typo3/cms-workspaces`

        ..  card-footer::
            :button-styles: secondary

            :doc:`13-dev <typo3/cms-workspaces/dev:Index>`
            :doc:`12.4 <typo3/cms-workspaces:Index>`
            :doc:`11.5 <typo3/cms-workspaces/oldstable:Index>`

.. _System-Extensions-outdated:

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
        :Comment: Was removed from Core in 9.0, see `Changelog <changelog:breaking-81787>`

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
        :Comment: Merged into main Core extension since TYPO3 >=7.4. See :ref:`Core API <t3coreapi:password-hashing>`

    -   :Manual: `System Actions <https://docs.typo3.org/c/typo3/cms-sys-action/9.5/en-us/>`_
        :Composer: :composer:`typo3/cms-sys-action`
        :Comment: Included until TYPO3 <= 9.5

    -   :Manual: `Taskcenter <https://docs.typo3.org/c/typo3/cms-taskcenter/9.5/en-us/>`_
        :Composer: :composer:`typo3/cms-taskcenter`
        :Comment: Included until TYPO3 <= 9.5
