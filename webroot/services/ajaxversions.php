<?php

// mb, 2013-08-19, 2015-09-25

class VersionMatcher
{

    protected $webRootPath = '/home/mbless/public_html';
    protected $knownPathBeginnings = array(
        // longest paths first!
        '/typo3cms/drafts/',
        '/typo3cms/extensions/',
        '/typo3cms/',
    );
    protected $legalNamesOfVersionFolders = array('latest', 'stable');
    protected $cont = true;                         // continue?
    protected $url = '';                            // 'https://docs.typo3.org/typo3cms/TyposcriptReference/en-us/4.7/Setup/Page/Index.html?id=3#abc'
    protected $urlPart1 = 'https://docs.typo3.org'; // 'https://docs.typo3.org'
    protected $urlPart2 = '';                       // '/typo3cms/'
    protected $urlPart3 = '';                       // 'TyposcriptReference/en-us/4.7/Setup/Page/Index.html?id=3#abc'
    protected $filePathToUrlPart2 = '';             // '/typo3cms/'

    protected $baseFolder = '';                     // 'TyposcriptReference'
    protected $localePath = '';                     // 'en-us'
    protected $versionPath = '';                    // '4.7'
    protected $relativePath = '';                   // 'Setup/Page'
    protected $htmlFile = '';                       // 'Index.html'
    protected $fragment = '';                       //  '#abc'

    /** @var array The URL, which the visitor is on, split up into its segments */
    protected $parsedUrl = array();

    protected $localeKeys = array();                // the various locales found
    protected $resultVersions = array();            // the result!
    protected $htmlResult = '';
    protected $htmlResultIntro = '
		<!-- ajaxversions intro -->
	';
    protected $htmlResultTrailer = '
		<!-- ajaxversions trailer -->
	';

    public function __construct()
    {
        // pass
    }

    protected function isValidVersionFolderName($filename)
    {
        $isValid = false;
        if (!$isValid) { // named versions
            if (in_array($filename, $this->legalNamesOfVersionFolders)) {
                $isValid = true;
            }
        }
        if (!$isValid) { // numbered versions (like 1.2.3...)
            $pattern = '~\d+\.\d+(\.\d+)*~is';
            $subpattern = array();
            $result = preg_match($pattern, $filename, $subpattern);
            if ($result and ($subpattern[0] === $filename)) {
                $isValid = true;
            }
        }
        return $isValid;
    }

    protected function isValidLocaleFolderName($segment)
    {
        $isValid = false;
        if (!$isValid) {
            // looking for 'xx-xx'
            $pattern = '~[a-z][a-z]-[a-z][a-z]~';
            $result = preg_match($pattern, $segment);
            if ($result) {
                $isValid = true;
            }
        }
        return $isValid;
    }

    /**
     * Before doing anything with the user-provided URL at all, validate that it's really
     * what we expect it to be:
     * - maybe it is not a URL at all
     * - it might point to a different server anywhere in the web
     * - it could contain malicious segments for path traversal
     *
     * @param $url string The complete string as it was provided by the user
     * @return void
     */
    protected function validateUrl($url)
    {
        /** @var boolean Whether the provided URL is valid or not */
        $isValidUrl = false;

        /**
         * Check whether what we have is a valid URL.
         * Pattern for checking validity of URLs, written by Diego Perini
         * See https://gist.github.com/dperini/729294
         * This expression has best results at https://mathiasbynens.be/demo/url-regex
         */
        $validUrlPattern = '%^(?:(?:https?|ftp)://)(?:\S+(?::\S*)?@|\d{1,3}(?:\.\d{1,3}){3}|(?:(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)(?:\.(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)*(?:\.[a-z\x{00a1}-\x{ffff}]{2,6}))(?::\d+)?(?:[^\s]*)?$%iu';
        if (preg_match($validUrlPattern, $url)) {
            $isValidUrl = true;
        }

        // Make sure that the host portion of the URL points to our own server and not somewhere else.
        // Without such a check it is possible to run the following cURL request on arbitrary servers.
        if (!$this->startsWith($url, $this->urlPart1)) {
            $isValidUrl = false;
        }

        if ($isValidUrl === false) {
            die();
        }
    }

    protected function parseUrl()
    {
        $this->parsedUrl = parse_url($this->url);
        $this->fragment = isset($this->parsedUrl['fragment']) ? '#' . $this->parsedUrl['fragment'] : '';

        // Step 1: find urlPart2 and urlPart3
        $found = false;
        foreach ($this->knownPathBeginnings as $this->urlPart2) {
            if ($this->startsWith($this->parsedUrl['path'], $this->urlPart2)) {
                $found = true;
                break;
            }
        }
        if ($found) {
            $this->filePathToUrlPart2 = $this->urlPart2;
            $this->urlPart3 = substr($this->parsedUrl['path'], strlen($this->urlPart2));
            $this->urlPart3PathSegments = explode('/', $this->urlPart3);
        } else {
            $this->cont = false;
        }
        # urlPart3PathSegments: array('TyposcriptReference', 'en-us', '4.7', 'Setup', 'Page', 'Index.html');
        # urlPart3PathSegments: array('TyposcriptReference', 'en-us', '4.7', 'singlehtml', 'Index.html');
        if ($this->cont and (count($this->urlPart3PathSegments) < 2)) {
            $this->cont = false;
        }
        $i = 0;
        if ($this->cont) {
            // 'TyposcriptReference'
            $this->baseFolder = $this->urlPart3PathSegments[$i];
            $i += 1;
        }
        if ($this->cont) {
            $segment = $this->urlPart3PathSegments[$i];
            if ($this->isValidLocaleFolderName($segment)) {
                $i += 1;
                // 'en-us'
                $this->localePath = $segment;
            }
        }
        if ($this->cont) {
            $segment = $this->urlPart3PathSegments[$i];
            if ($this->isValidVersionFolderName($segment)) {
                // '4.7'
                $this->versionPath = $segment;
                $i += 1;
            }
        }
        if ($this->cont) {
            $segment = $this->urlPart3PathSegments[$i];
            if ($segment === 'singlehtml') {
                // 'singlehtml' - skip!
                $i += 1;
            }
        }
        if ($this->cont) {
            // array('Setup', 'Page','Index.html')
            $this->relativePath = array_slice($this->urlPart3PathSegments, $i);

            // 'Index.html'
            $this->htmlFile = array_pop($this->relativePath);

            // 'Setup/Page'
            $this->relativePath = implode('/', $this->relativePath);
        }
        return;
    }

    /**
     * Returns whether the provided string starts with the specified characters/string.
     *
     * @return mixed The extracted part of the string if it does, false if it does not
     */
    protected function startsWith($haystack, $needle)
    {
        return substr($haystack, 0, strlen($needle)) === $needle;
    }


    /*
     * $absPathToManual => '/home/mbless/public_html/TYPO3/extensions/sphinx'
     * $localeSegment   => '/home/mbless/public_html/TYPO3/extensions/sphinx/fr-fr'
     */
    protected function findVersionsForLocale($absPathToManual, $localeSegment)
    {
        $directory = opendir($absPathToManual);
        while (false !== ($filename = readdir($directory))) {
            if (1
                and $filename !== '.'
                and $filename !== '..'
                and is_dir($absPathToManual . '/' . $filename)
                and $this->isValidVersionFolderName($filename)
            ) {
                $versionFolder = $filename; // 'latest', '4.7'

                // master document of other version
                $baseFound = false;
                $baseHtmlFile = '';
                $singleHtmlFound = false;
                $singleHtmlFile = '';

                // exactly the same file in subdirs of other version?
                $directFound = false;
                $directHtmlFile = '';

                foreach (array($this->htmlFile, 'Index.html', 'index.html') as $htmlFile) {
                    if (!strlen($htmlFile)) {
                        $htmlFile = 'Index.html';
                    }
                    if (!$baseFound) {
                        $absPathToHtmlFile = implode('/', array($absPathToManual, $versionFolder, $htmlFile));
                        if (file_exists($absPathToHtmlFile)) {
                            $baseHtmlFile = $htmlFile; // 'Index.html'
                            $baseFound = true;
                        }
                    }
                    if (!$singleHtmlFound) {
                        $absPathToSingleHtmlFile = implode('/', array($absPathToManual, $versionFolder, 'singlehtml', $htmlFile));
                        if (file_exists($absPathToSingleHtmlFile)) {
                            $singleHtmlFile = $htmlFile; // 'Index.html'
                            $singleHtmlFound = true;
                        }
                    }
                    if (!$directFound) {
                        if (strlen($this->relativePath)) {
                            $absPathToHtmlFile = implode('/',
                                array($absPathToManual, $versionFolder, $this->relativePath, $htmlFile));
                        } else {
                            $absPathToHtmlFile = implode('/', array($absPathToManual, $versionFolder, $htmlFile));
                        }
                        if (file_exists($absPathToHtmlFile)) {
                            // '/home/mbless/public_html/typo3cms/TyposcriptReference/latest/Setup/Page/Index.html'
                            $directHtmlFile = $htmlFile;
                            $directFound = true;
                        }
                    }
                    if ($baseFound and $directFound) {
                        break;
                    }
                }
                if ($baseFound) {
                    $key = $versionFolder;
                    $localeKey = $localeSegment ?: '_';
                    if (!in_array($localeKey, $this->localeKeys)) {
                        $this->localeKeys[] = $localeKey;
                    }
                    // $this->resultVersions['4-7']['fr-fr']
                    $this->resultVersions[$key][$localeKey] = array(
                        'absPathToHtmlFile' => $absPathToHtmlFile,
                        // '/home/mbless/public_html/typo3cms/TyposcriptReference/latest/Setup/Page/Index.html'
                        'absPathToSingleHtmlFile' => $absPathToSingleHtmlFile,
                        // '/home/mbless/public_html/typo3cms/TyposcriptReference/latest/singlehtml/Index.html' || ''
                        'fragment' => $this->fragment,
                        // '#abc'
                        'urlPart1' => $this->urlPart1,
                        // 'https://docs.typo3.org'
                        'urlPart2' => $this->urlPart2,
                        // '/typo3cms/'
                        'baseFolder' => $this->baseFolder,
                        // 'TyposcriptReference'
                        'localeSegment' => $localeSegment,
                        // 'fr-fr'
                        'versionFolder' => $versionFolder,
                        // 'latest'
                        'relativePath' => $this->relativePath,
                        // 'Setup/Page'
                        'baseHtmlFile' => $baseHtmlFile,
                        // 'Index.html'
                        'singleHtmlFile' => $singleHtmlFile,
                        // 'Index.html'
                        'directHtmlFile' => $directHtmlFile,
                        // 'Index.html'
                    );
                }
            }
        }
        closedir($directory);
    }

    protected function findVersions()
    {
        // $this->webRootPath           '/home/mbless/public_html'
        // $this->filePathToUrlPart2    '/typo3cms/'
        // $this->$baseFolder           'TyposcriptReference'
        // $this->$localePath           'en-us'
        // $this->$versionPath          '4.7'
        // $this->$relativePath         'Setup/Page'
        // $this->$indexFile            'Index.html'
        if (!$this->cont) {
            return;
        }
        $absPathToManual = $this->webRootPath . $this->filePathToUrlPart2 . $this->baseFolder;
        // '/home/marble/htdocs/LinuxData200/t3doc/versionswitcher/webroot/typo3cms/TyposcriptReference'
        $this->absPathToManual = $absPathToManual;
        $manualStartDirs = array();
        $manualStartDirs[] = array($absPathToManual, '');
        # find locale subfolders
        $pattern = $absPathToManual . '/[a-z][a-z]-[a-z][a-z]';
        foreach (glob($pattern, GLOB_ONLYDIR) as $absPathToLocalePath) {
            // /home/mbless/public_html/typo3cms/extensions/sphinx/fr-fr
            $pos = strrpos($absPathToLocalePath, '/');
            $localeSegment = substr($absPathToLocalePath, $pos + 1);
            $manualStartDirs[] = array($absPathToLocalePath, $localeSegment);
        }
        // Array(
        //     [0] => /home/mbless/public_html/TYPO3/extensions/sphinx
        //     [1] => /home/mbless/public_html/TYPO3/extensions/sphinx/fr-fr
        // )
        foreach ($manualStartDirs as $arr) {
            $manualStartDir = $arr[0];
            $localeSegment = $arr[1];
            $this->findVersionsForLocale($manualStartDir, $localeSegment);
        }
    }

    protected function generateOutputUntil20150925()
    {
        $NL = "\n";
        $result = '';
        $rowCount = 0;

        // 'absPathToHtmlFile' => $absPathToHtmlFile,
        // 'urlPart1'          => $this->urlPart1,
        // 'urlPart2'          => $this->urlPart2,
        // 'baseFolder'        => $this->baseFolder,
        // 'versionFolder'     => $versionFolder,
        // 'relativePath'      => $this->relativePath,
        // 'baseHtmlFile'      => $baseHtmlFile,
        // 'directHtmlFile'    => $directHtmlFile,

        // $this->resultVersions[<version>][<locale>] => Array(
        //    [absPathToHtmlFile] => /home/mbless/public_html/TYPO3/extensions/sphinx/fr-fr/1.1.0/Index.html
        //    [fragment] =>
        //    [urlPart1] => https://docs.typo3.org
        //    [urlPart2] => /typo3cms/extensions/
        //    [baseFolder] => sphinx
        //    [versionFolder] => 1.1.0
        //    [relativePath] =>
        //    [baseHtmlFile] => Index.html
        //    [directHtmlFile] => Index.html
        //)

        if ($this->cont and count($this->resultVersions)) {

            $result = $this->htmlResultIntro;

            ksort($this->localeKeys);
            krsort($this->resultVersions);

            if (count($this->localeKeys) > 1) {
                $result .= '<tr>';
                foreach ($this->localeKeys as $localeKey) {
                    $locale = $localeKey === '_' ? 'default' : $localeKey;
                    $result .= '<th>' . htmlspecialchars($locale) . '</th>';
                }
                $result .= '</tr>';
            }

            foreach ($this->resultVersions as $versionName => $localeData) {
                $rowClass = $rowCount % 2 ? ' class="row-odd"' : '';
                $result .= '<tr' . $rowClass . '>';

                // Always loop through locales in the same order
                foreach ($this->localeKeys as $localeKey) {
                    $valueBase = '-';
                    $valueDirect = '-';

                    if (isset($localeData[$localeKey])) {
                        // Current version has corresponding locale
                        $v = $localeData[$localeKey];
                        if (strlen($v['baseHtmlFile'])) {
                            $destUrl = $v['urlPart1'] . $v['urlPart2'] . $v['baseFolder'] . '/';
                            if (strlen($v['localeSegment'])) {
                                $destUrl .= $v['localeSegment'] . '/';
                            }
                            if (strlen($v['versionFolder']) and $v['versionFolder'] !== 'stable') {
                                $destUrl .= $v['versionFolder'] . '/';
                            }
                            if (!(strlen($v['baseHtmlFile'] === 'Index.html' or $v['baseHtmlFile'] === 'index.html'))) {
                                $destUrl .= $v['baseHtmlFile'];
                            }
                            $valueBase = '<a href="' . htmlspecialchars($destUrl) . '">' . htmlspecialchars($versionName) . '</a>';
                        }

                        if (strlen($v['directHtmlFile'])) {
                            $destUrl = $v['urlPart1'] . $v['urlPart2'] . $v['baseFolder'] . '/';
                            if (strlen($v['localeSegment'])) {
                                $destUrl .= $v['localeSegment'] . '/';
                            }
                            if (strlen($v['versionFolder']) and $v['versionFolder'] !== 'stable') {
                                $destUrl .= $v['versionFolder'] . '/';
                            }
                            if (strlen($v['relativePath'])) {
                                $destUrl .= $v['relativePath'] . '/';
                            }
                            if (!(strlen($v['directHtmlFile'] === 'Index.html' or $v['directHtmlFile'] === 'index.html'))) {
                                $destUrl .= $v['directHtmlFile'];
                            }
                            $destUrl .= $v['fragment'];
                            $valueDirect = '<a href="' . htmlspecialchars($destUrl) . '">' . htmlspecialchars($versionName) . '</a>';
                        }
                    }

                    if ($valueDirect !== '-') {
                        $result .= '<td class="rollover">' . $valueDirect . '</td>';
                    } elseif ($valueBase !== '-') {
                        $result .= '<td class="rollover">' . $valueBase . '</td>';
                    } else {
                        $result .= '<td>' . $valueBase . '</td>';
                    }
                }

                $result .= '</tr>';
                $rowCount += 1;
            }
            $result .= $this->htmlResultTrailer;
        }

        return $result;
    }


    protected function generateOutputFor_rtdSphinxThemeRtd()
    {
        $NL = "\n";
        $result = $NL;
        $rowCount = 0;

        // 'absPathToHtmlFile' => $absPathToHtmlFile,
        // 'urlPart1'          => $this->urlPart1,
        // 'urlPart2'          => $this->urlPart2,
        // 'baseFolder'        => $this->baseFolder,
        // 'versionFolder'     => $versionFolder,
        // 'relativePath'      => $this->relativePath,
        // 'baseHtmlFile'      => $baseHtmlFile,
        // 'directHtmlFile'    => $directHtmlFile,

        // $this->resultVersions[<version>][<locale>] => Array(
        //    [absPathToHtmlFile] => /home/mbless/public_html/TYPO3/extensions/sphinx/fr-fr/1.1.0/Index.html
        //    [fragment] =>
        //    [urlPart1] => https://docs.typo3.org
        //    [urlPart2] => /typo3cms/extensions/
        //    [baseFolder] => sphinx
        //    [versionFolder] => 1.1.0
        //    [relativePath] =>
        //    [baseHtmlFile] => Index.html
        //    [directHtmlFile] => Index.html
        //)

        if ($this->cont) {
            $result = $this->htmlResultIntro . $NL;

            if (count($this->resultVersions) < 1) {
                $result .= '<dd class="nolink">None.</dd>';

            } else {
                ksort($this->localeKeys);
                krsort($this->resultVersions);

                foreach ($this->resultVersions as $versionName => $localeData) {
                    $rowClass = $rowCount % 2 ? ' class="row-odd"' : '';

                    // Always loop through locales in the same order
                    foreach ($this->localeKeys as $localeKey) {
                        $valueBase = '-';
                        $valueSingleHtml = '-';
                        $valueDirect = '-';

                        if (isset($localeData[$localeKey])) {
                            // Current version has corresponding locale
                            $v = $localeData[$localeKey];
                            if (strlen($v['baseHtmlFile'])) {
                                $destUrl = $v['urlPart1'] . $v['urlPart2'] . $v['baseFolder'] . '/';
                                if (strlen($v['localeSegment'])) {
                                    $destUrl .= $v['localeSegment'] . '/';
                                }
                                if (strlen($v['versionFolder']) and $v['versionFolder'] !== 'stable') {
                                    $destUrl .= $v['versionFolder'] . '/';
                                }
                                if (!(strlen($v['baseHtmlFile'] === 'Index.html' or $v['baseHtmlFile'] === 'index.html'))) {
                                    $destUrl .= $v['baseHtmlFile'];
                                }
                                $linkText = $localeKey === '_' ? $versionName : $versionName . ' ' . $localeKey;
                                $valueBase = '<a href="' . htmlspecialchars($destUrl) . '">' . htmlspecialchars($linkText) . '</a>';
                            }

                            if (strlen($v['absPathToSingleHtmlFile'])) {
                                $destUrl = $v['urlPart1'] . $v['urlPart2'] . $v['baseFolder'] . '/';
                                if (strlen($v['localeSegment'])) {
                                    $destUrl .= $v['localeSegment'] . '/';
                                }
                                if (strlen($v['versionFolder']) and $v['versionFolder'] !== 'stable') {
                                    $destUrl .= $v['versionFolder'] . '/';
                                }
                                $destUrl .= 'singlehtml/';
                                if (!(strlen($v['singleHtmlFile'] === 'Index.html' or $v['singleHtmlFile'] === 'index.html'))) {
                                    $destUrl .= $v['singleHtmlFile'];
                                }
                                $linkText = $localeKey === '_' ? $versionName : $versionName . ' ' . $localeKey;
                                $linkText .= ' (in one file)';
                                $valueSingleHtml = '<a href="' . htmlspecialchars($destUrl) . '">' . htmlspecialchars($linkText) . '</a>';
                            }

                            if (strlen($v['directHtmlFile'])) {
                                $destUrl = $v['urlPart1'] . $v['urlPart2'] . $v['baseFolder'] . '/';
                                if (strlen($v['localeSegment'])) {
                                    $destUrl .= $v['localeSegment'] . '/';
                                }
                                if (strlen($v['versionFolder']) and $v['versionFolder'] !== 'stable') {
                                    $destUrl .= $v['versionFolder'] . '/';
                                }
                                if (strlen($v['relativePath'])) {
                                    $destUrl .= $v['relativePath'] . '/';
                                }
                                if (!(strlen($v['directHtmlFile'] === 'Index.html' or $v['directHtmlFile'] === 'index.html'))) {
                                    $destUrl .= $v['directHtmlFile'];
                                }
                                $destUrl .= $v['fragment'];
                                $linkText = $localeKey === '_' ? $versionName : $versionName . ' ' . $localeKey;
                                $valueDirect = '<a href="' . htmlspecialchars($destUrl) . '">' . htmlspecialchars($linkText) . '</a>';
                            }
                        }

                        if ($valueDirect !== '-') {
                            $result .= '<dd>' . $valueDirect;
                            if ($valueSingleHtml !== '-') {
                                $result .= $valueSingleHtml;
                            }
                            $result .= '</dd>' . $NL;
                        } elseif ($valueBase !== '-') {
                            $result .= '<dd>' . $valueBase;
                            if ($valueSingleHtml !== '-') {
                                $result .= $valueSingleHtml;
                            }
                            $result .= '</dd>' . $NL;
                        } elseif (0) {
                            $result .= '<td class="nolink">' . $valueBase . '</td>' . $NL;
                        }
                    }

                    $rowCount += 1;
                }
            }
            $result .= $this->htmlResultTrailer . $NL;
        }

        return $result;
    }

    /**
     * Main logic of the class.
     *
     * Generate the link to the different versions in HTML format.
     *
     * @param $url string The complete URL as it was requested by the website visitor
     * @param $webRootPath mixed Internal server path to the main folder, which contains the different rendered projects
     * @return string The HTML code with the versions
     */
    public function processTheUrl($url, $webRootPath = null)
    {
        $this->validateUrl($url);
        $this->url = $url;
        if (!is_null($webRootPath)) {
            $this->webRootPath = $webRootPath;
        }
        $this->parseUrl();
        $this->findVersions();
        $this->htmlResult = $this->generateOutputFor_rtdSphinxThemeRtd();
        return $this->htmlResult;
    }
}

$vm = new VersionMatcher();

$url = $_GET['url'];
$htmlResult = $vm->processTheUrl($url);

echo $htmlResult;

?>