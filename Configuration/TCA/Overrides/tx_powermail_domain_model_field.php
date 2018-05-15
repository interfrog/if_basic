<?php

    $extKey = 'if_basic';
    $llPath = 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.';

    $temporaryPowermailColumn = array(
        'labelposition' => array(
            'exclude' => 1,
            'label' => $llPath.'labelposition',
            'config' => array (
                'type' => 'select',
                'items' => array (
                    array($llPath.'labelposition.default' ,''),
                    array($llPath.'labelposition.right' ,'right'),
                    array($llPath.'labelposition.bottom' ,'bottom'),
                    array($llPath.'labelposition.left' ,'left'),
                    array($llPath.'labelposition.hide' ,'hide'),
                ),
            ),
        ),
        'allowedmimetypes' => array(
            'exclude' => 1,
            'label' => $llPath.'allowedmimetypes',
            'config' => Array (
                'type' => 'input',
                'size' => 50,
                'max' => 255,
            )
        ),
        'multiple' => array(
            'exclude' => 1,
            'label' => $llPath.'multiple',
            'config' => Array (
                'type' => 'check',
                'items' => array(
                    array(
                        $llPath.'multiple.true','1'
                    ),
                ),
            )
        ),
        'preview' => array(
            'exclude' => 1,
            'label' => $llPath.'preview',
            'config' => Array (
                'type' => 'check',
                'items' => array(
                    array(
                        $llPath.'preview.true','1'
                    ),
                ),
            )
        ),
        'advancedprogress' => array(
            'exclude' => 1,
            'label' => $llPath.'advancedprogress',
            'config' => Array (
                'type' => 'check',
                'items' => array(
                    array(
                        $llPath.'advancedprogress.true','1'
                    ),
                ),
            )
        ),
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tx_powermail_domain_model_field',
        $temporaryPowermailColumn,
        1
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tx_powermail_domain_model_field',
        '--div--;'.$llPath.'div.extconfig,labelposition',
        '',
        'after:own_marker_select'
    );


    $GLOBALS['TCA']['tx_powermail_domain_model_field']['columns']['type']['config']['items'][] = ['Ajax Upload','ajax'];
    $GLOBALS['TCA']['tx_powermail_domain_model_field']['types']['ajax']['showitem'] = 'pages, title, type, ' .
    '--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1, ' .
    '--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation_title;21, ' .
    '--palette--;Prefill;3, ' .
    '--palette--;Layout;41, ' .
    'allowedmimetypes,multiple,preview,advancedprogress,description' .
    '--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5, ' .
    '--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:' .
        'tabs.access, sys_language_uid, ' .
    'l10n_parent, l10n_diffsource, hidden, starttime, endtime';
;