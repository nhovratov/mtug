<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'sitepackage',
    'Configuration/TypoScript',
    'Sitepackage'
);
