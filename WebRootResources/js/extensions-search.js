/**
 * JS library for filtering the TYPO3 CMS extensions page on docs.typo3.org
 *
 * This file has been copied from https://docs.typo3.orgtypo3cms/extensions/extension-search.js
 * from the old docs server in may 2019. It is maintained in the homepage repository in
 * WebRootResources/js/extensions-search.js at
 * https://github.com/TYPO3-Documentation/DocsTypo3Org-Homepage/tree/master/WebRootResources/js.
 *
 * It is used in https://docs.typo3.org/Home/Extensions.html
 * and creates the extension selector. It is referenced in Home/Extensions.rst through the
 * extensions.html template that is included in
 * https://github.com/TYPO3-Documentation/t3SphinxThemeRtd/blob/master/t3SphinxThemeRtd/ when
 * rendering the homepage.
 *
 * This file is copied from web document root /js/extension-search.js to
 * web document root /Home/extension-search.js when the homepage is rendered by the homepage
 * deployment in bamboo.
 *
 * There are two further files needed for the extension search / selector:
 * * web document root /Home/systemextensions.js - which is unused and is only an empty file
 *   created during deployment of a rendered homepage
 * * web document root /Home/extensions.js - this file contains the list of searchable
 *   rendered extensions and their versions. It is generated and deployed by intercept at
 *   https://bitbucket.typo3.com/projects/INT/repos/intercept/browse whenever an extension
 *   documentation is rendered to always represent an up-to-date list of currently rendered
 *   extensions.
 *
 * NOTE: some jQuery stuff may appear old-stlye, but it is needed to match usage
 * of older jQuery versions on typo3.org (would need to be verified)
 */

// Object encapsulating the extensions search functionality
var ExtensionSearch = {
	oddRow: true,
	/**
	 * Loads some DOM objects
	 */
	init: function() {
		this.listContainer = $('#extension_list');
		this.resultsContainer = $('#search_results');
	},
	/**
	 * Performs the search in the extension list
	 * @param value The value typed in the search filter
	 */
	performSearch: function(value) {
		this.resultsContainer.empty().append('<div>Type at least three characters in the search field</div>');
		// If the filter is empty, remove any list that might be currently displayed
		if (value == '') {
			this.listContainer.empty();

		// If the filter is not empty, proceed
		} else {
			// Empty current result list and issue a "waiting" message (not really necessary, since it's so fast)
			this.resultsContainer.empty().append('<div>Searching...</div>');
			// Perform a search only if at least 3 characters were typed
			if (value.length >= 3) {
				this.listContainer.empty();
				this.oddRow = true;
				var matchingExtensions = 0;
				var resultsList = '';
				// Loop on all extension to find an exact match first
				for (var i = 0; i < extensionList.length; i++) {
					if (extensionList[i].key == value) {
						resultsList += this.formatResult(extensionList[i]);
						matchingExtensions++;
					}
				}
				// Loop on all extension to find partial matches (avoiding the exact match, if any)
				for (var j = 0; j < extensionList.length; j++) {
					if (extensionList[j].key.indexOf(value) > -1 && extensionList[j].key != value) {
						resultsList += this.formatResult(extensionList[j]);
						matchingExtensions++;
					}
				}
				// Display result of filtering
					// If an extension matches, display a link to its latest documentation
					// (and possibly older manuals, if available)
					// NOTE: this could be cleaner with a templating engine, but might be a bit overkill
				if (matchingExtensions == 0) {
					this.resultsContainer.empty().append('<div>No matching extensions</div>');
				} else {
					var fullList = '<table class="docutils">';
					fullList += '<thead><tr><th>Extension</th><th>Versions</th></tr></thead>'
					fullList += resultsList;
					fullList += '</table>';
					this.listContainer.append(fullList);
					var message = matchingExtensions + ' matching extension(s). Click to access the documentation of the latest version or use the selector for older versions.';
					this.resultsContainer.empty().append('<div>' + message + '</div>');
				}
			// Add information that at least 3 characters must be entered to trigger a search
			} else {
				this.listContainer.empty();
				this.resultsContainer.empty().append('<div>Type at least three characters in the search field.</div>');
			}
		}

	},
	/**
	 * Formats the output result for a given extension
	 * @param extension Array containing the extension information
	 * @return {String}
	 */
	formatResult: function(extension) {
		var result = '';
		var url = extension.key + '/' + extension.latest + '/';
		var title = extension.key + ' ' + extension.latest;
		result += '<tr class="' + ((this.oddRow) ? 'tr-odd' : 'tr-even') + '"><td>';
		this.oddRow = !this.oddRow;
		result += '<a href="' + url + '" title="' + title + '">' + extension.key + '</a></td><td>';
		// Loop on older versions (if any)
		if (extension.versions.length > 1) {
			result += '<select name="version_selector_' + extension.key + '">';
			result += '<option value="">Select version</option>';
			for (var j = 0; j < extension.versions.length - 1; j++) {
				var olderUrl = extension.key + '/' + extension.versions[j] + '/';
				result += '<option value="' + olderUrl + '">' + extension.versions[j] + '</option>';
			}
			result += '</select>';
		} else {
			result += '&nbsp;';
		}
		result += '</td></tr>';
		return result;
	}
};

// Activate the search on document ready
$(document).ready(
	function() {
		var extensionFilter = $('#extension_filter');
		var listContainer = $('#extension_list');
		// Set the focus on the filter field
		extensionFilter.focus();
		ExtensionSearch.init();
		// React on key input in the filter field
		extensionFilter.keyup(function(event) {
			ExtensionSearch.performSearch($(this).val());
		});
		// React on change even in version selector
		// NOTE: selectors are created on the fly, hence the use of "delegate"
		listContainer.delegate('select', 'change', function() {
			document.location.href = $(this).val();
		});
		// Block form submission. It is meant to be used just as a filter.
		$('#extension_filter_form').submit(function() {
			return false;
		});
	}
);
