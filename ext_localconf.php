<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:sitepackage/Configuration/TSConfig/Page/Page.tsconfig'"
);
