<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

if (TYPO3_MODE === 'BE') {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['file'] = 'Interfrog\\IfBasic\\Provider\\FileProvider';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutFileProvider']['dir'][] = 'EXT:'.$_EXTKEY.'/Configuration/BackendLayouts/';
}

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['if_presets'] = 'EXT:'.$_EXTKEY.'/Configuration/RTE/Presets.yaml';

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:'.$_EXTKEY.'/Configuration/TSconfig/pageTsConfig.ts">');

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['ajaxupload'] = 'EXT:'.$_EXTKEY.'/Classes/Utility/AjaxUploadEid.php';

?>