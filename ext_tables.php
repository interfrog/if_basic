<?php
	if (!defined('TYPO3_MODE')) {
		die('Access denied.');
	}

	$themeconfigKey = 'if_themeconfiguration';
	$tsTemplateName = $_EXTKEY.' - Templates & Assets';

	TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY,'Configuration/TypoScript',$tsTemplateName);

	/**
     * Register icons
     */
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'extension-ifbasic-videoframe',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:if_basic/Resources/Public/Icons/video.svg']
    );
    $iconRegistry->registerIcon(
        'extension-ifbasic-overlaybox',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:if_basic/Resources/Public/Icons/overlaybox.svg']
    );
