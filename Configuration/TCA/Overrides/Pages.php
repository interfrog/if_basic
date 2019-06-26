<?php
$extKey="if_basic";

$temporaryPageColumns = array (
    'iconconfig' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig',
        'config' => array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.no' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.house' ,'fa fa-home'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.envelope' ,'fa fa-envelope'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.glass' ,'fa fa-search'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.twitter' ,'fa fa-twitter'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.facebook' ,'fa fa-facebook'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.googleplus' ,'fa fa-google-plus'),
            ),
        )
    ),
    'seotitle' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.seotitle',
        'config' => Array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        )
    ),
    'robots' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.robots',
        'config' => array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.robots.default' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.robots.nofollow' ,'1'),
            ),
        )
    ),
    'canonical' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.canonical',
        'config' => Array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        )
    ),
    'fblike' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.fblike',
        'config' => array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.recursive' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.enable' ,'enable'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.disable' ,'disable'),
            ),
        )
    ),
    'twitter' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.twitter',
        'config' => array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.recursive' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.enable' ,'enable'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.disable' ,'disable'),
            ),
        )
    ),
    'googleplus' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.googleplus',
        'config' => array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.recursive' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.enable' ,'enable'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.disable' ,'disable'),
            ),
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'pages',
    $temporaryPageColumns,
    1
);

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'pages_language_overlay',
    $temporaryPageColumns,
    1
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages_language_overlay',
    'visibility',
    'iconconfig',
    'after:title'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'visibility',
    'iconconfig',
    'after:title'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.div.seo,seotitle,robots,canonical',
    1,
    'after:lastUpdated'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages_language_overlay',
    '--div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.div.seo,seotitle,robots,canonical',
    1,
    'after:lastUpdated'
);

$GLOBALS['TCA']['pages']['palettes']['socialplugins'] = array(
    'showitem' => 'fblike,twitter,googleplus',
    'canNotCollapse' => TRUE
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.palette.socialplugins;socialplugins;',
    '',
    'after:backend_layout_next_level'
);
