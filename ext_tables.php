<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$themeconfigKey = 'if_themeconfiguration';
$tsTemplateName = $_EXTKEY.' - Templates & Assets';
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY,'Configuration/TypoScript',$tsTemplateName);
