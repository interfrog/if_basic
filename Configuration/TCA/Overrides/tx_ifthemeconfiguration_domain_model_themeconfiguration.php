<?php

$extKey = 'if_basic';
$themeconfigKey = 'if_themeconfiguration';

$temporaryThemeColumn = array(
    'name' => array(
        'label'=>'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.name',
        'config' => array(
            'type' => 'input',
            'max' => '255'
        )
    ),
    'maxwidth' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.maxwidth',
        'config' => array(
            'type' => 'input',
            'max' => 4,
            'lower' => 800,
            'upper' => 1920,
            'size' => 3,
            'default' => 1000
        )
    ),
    'pagebg' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.pagebg',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'pagetitle' => array(
        'label'=>'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.pagetitle',
        'config' => array(
            'type' => 'input',
            'max' => '255'
        )
    ),
    'pagetitlecolor' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.pagetitlecolor',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'pagetitlefont' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_font.name ASC',
        ),
    ),
    'pagetitlestyle' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'pagetitleweight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ), 
    'pagetitle2' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.pagetitle2',
        'config' => array(
            'type' => 'input',
            'max' => '255'
        )
    ),
    'pagetitle2color' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.pagetitle2color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'pagetitle2font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_font.name ASC',
        ),
    ),
    'pagetitle2style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'pagetitle2weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ), 
    'mainmenutype' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.mainmenutype',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('Standard','standard'),
                array('Typ 1','type1'),
                array('Off-Canvas','alwaysmobile'),
            ),
        )
    ),
    'defaulttext' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ), 
    'fontsize' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontsize',
        'config' => array(
            'type' => 'input',
            'max' => 2,
            'lower' => 1,
            'upper' => 99,
            'size' => 3,
        )
    ),
    'generalfont' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_font.name ASC',
        ),
    ),
    'fontweight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'logo' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.logo',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', array(
                    'appearance' => array(
                            'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
                    ),
                    'minitems' => 0,
                    'maxitems' => 1,
                    'foreign_match_fields' => array(
                        'fieldname' => 'logo'
                    ),
                    'filter' => array(
                        '0' => array(
                            'parameters' => array(
                                'allowedFileExtensions' => 'svg',
                            ),
                        ),
                    ),
        )),
    ),
    'logofallback' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.logofallback',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', array(
                    'appearance' => array(
                            'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
                    ),
                    'minitems' => 0,
                    'maxitems' => 1,
                    'foreign_match_fields' => array(
                        'fieldname' => 'logofallback'
                    ),
                    'filter' => array(
                        '0' => array(
                            'parameters' => array(
                                'allowedFileExtensions' => 'jpg,jpeg,png',
                            ),
                        ),
                    ),
        )),
    ),
    'logowidth' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.logowidth',
        'config' => array(
            'type' => 'input',
            'eval' => 'num,required',
            'size' => 1,
        ),
    ),
    'logoheight' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.logoheight',
        'config' => array(
            'type' => 'input',
            'eval' => 'num,required',
            'size' => 1,
        ),
    ),
    'headerborderbottom' => array(
        'label' => '',//LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.headerborderbottom
        'config' => Array (
            'type' => 'check',
            'default' => '1',
            'items' => array(
                array(
                    'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.headerborderbottom.true','1'
                ),
            ),
        ),
    ),  
    'headerbordercolor' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.headerbordercolor',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC'
        ),
    ), 
    'mediamenupid' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.mediamenupid',
        'config' => array(
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'maxitems' => 1,
            'minitems' => 0,
            'size' => 1
        )
    ),  
    'mediamenutext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.mediamenutext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'mediamenubackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.mediamenubackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'mediamenuborder' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.mediamenuborder',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'mediamenuhinttext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.mediamenuhinttext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'mediamenuhintbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.mediamenuhintbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'headerbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.headerbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navbarbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.navbarbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navtext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.navtext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navtexthover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.navtexthover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.navbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navtextactive' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.navtextactive',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navbackgroundhover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.navbackgroundhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navbackgroundactive' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.navbackgroundactive',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'nav2text' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.nav2text',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'nav2texthover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.nav2texthover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'nav2textactive' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.nav2textactive',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'nav2background' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.nav2background',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'nav2backgroundhover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.nav2backgroundhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'nav2backgroundactive' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.nav2backgroundactive',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),

    'offcanvasopener' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.offcanvasopener',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'offcanvastext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.offcanvastext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'offcanvasbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.offcanvasbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'offcanvasactive' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.offcanvasactive',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'footertext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.footertext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'footerbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.footerbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h1' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h1font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h1style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h1weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'h2' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h2font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h2style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h2weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'h3' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h3font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h3style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h3weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'h4' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h4font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h4style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h4weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'h5' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h5font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h5style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h5weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'formfieldbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.formfieldbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formborder' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.formborder',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formborderfocus' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.formborderfocus',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formbutton' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.formbutton',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formbuttonhover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.formbuttonhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'link' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.link',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'linkhover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.linkhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'buttonbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.buttonbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'buttontext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.buttontext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'buttonbackgroundhover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.buttonbackgroundhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'buttontexthover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.buttontexthover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'overlayboxtext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.overlayboxtext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'overlayboxbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.overlayboxbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'divider' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.divider',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'accopenerbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.accopenerbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'accopenertext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.accopenertext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'accopenerhover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.accopenerhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'accfoldoutbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.accfoldoutbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'accfoldouttext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.accfoldouttext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'sliderheightdesktop' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.sliderheightdesktop',
        'config' => array(
            'type' => 'input',
            'max' => 4,
            'lower' => 300,
            'size' => 3,
            'default' => 500
        )
    ),
    'sliderheighttablet' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.sliderheighttablet',
        'config' => array(
            'type' => 'input',
            'max' => 4,
            'lower' => 200,
            'size' => 3,
            'default' => 400
        )
    ),
    'sliderheightmobile' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.sliderheightmobile',
        'config' => array(
            'type' => 'input',
            'max' => 4,
            'lower' => 100,
            'size' => 3,
            'default' => 300
        )
    ),
    'copyrighttheme' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.copyrighttheme',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.copyrightthemebright','bright'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.copyrightthemedark','dark'),
            ),
        )
    ),
);



$typeConfig = array('showitem' => '
    --div--;LLL:EXT:if_themeconfiguration/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.general,name,theme,themeconfig,maxwidth,pagebg,
    --div--;Navigation,mainmenutype,navbarbackground,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.navlevel1;'.$extKey.'_navlevel1;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.navlevel2;'.$extKey.'_navlevel2;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.mediamenu;'.$extKey.'_mediamenu;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.offcanvas;'.$extKey.'_offcanvas;,
    --div--;Header,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.pagetitle;'.$extKey.'_pagetitle;,
    --palette--;Logo;'.$extKey.'_logo;,headerbackground,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.headerborder;'.$extKey.'_headerborder;,
    --div--;Text,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.generaltext;'.$extKey.'_generaltext;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading1;'.$extKey.'_heading1;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading2;'.$extKey.'_heading2;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading3;'.$extKey.'_heading3;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading4;'.$extKey.'_heading4;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading5;'.$extKey.'_heading5;,
    --palette--;Links;'.$extKey.'_links;,
    --palette--;Buttons;'.$extKey.'_buttons;,
    --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.form,formfieldbackground,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.formborders;'.$extKey.'_formborders;,
    --palette--;Buttons;'.$extKey.'_formbuttons;,
    --div--;Footer,footertext,footerbackground,copyrighttheme,
    --div--;Special,--palette--;Overlay-Box;'.$extKey.'_overlaybox;,divider,
    --palette--;Accordeon;'.$extKey.'_accordeon;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.slider;'.$extKey.'_slider;,
    --div--;LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.colorshemes,colorshemes,
    --div--;LLL:EXT:if_themeconfiguration/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.generated,scssfile,cssfile'
);

$GLOBALS['TCA']['tx_ifthemeconfiguration_domain_model_themeconfiguration']['types'][$extKey] = $typeConfig;

$newPalettes = array(
    $extKey."_pagetitle" => array("showitem" => "pagetitle,pagetitlecolor,--linebreak--,pagetitlefont,pagetitlestyle,pagetitleweight,--linebreak--,pagetitle2,pagetitle2color,--linebreak--,pagetitle2font,pagetitle2style,pagetitle2weight","canNotCollapse" => true),
    $extKey."_logo" => array("showitem" => "logo,--linebreak--,logowidth,logoheight,--linebreak--,logofallback","canNotCollapse" => true),
    $extKey."_headerborder" => array("showitem" => "headerborderbottom,headerbordercolor","canNotCollapse" => true),
    $extKey."_navlevel1" => array("showitem" => "navtext,navbackground,--linebreak--,navtexthover,navbackgroundhover,--linebreak--,navtextactive,navbackgroundactive","canNotCollapse" => true),
    $extKey."_navlevel2" => array("showitem" => "nav2text,nav2background,--linebreak--,nav2texthover,nav2backgroundhover,--linebreak--,nav2textactive,nav2backgroundactive","canNotCollapse" => true),
    $extKey."_mediamenu" => array("showitem" => "mediamenupid,mediamenuborder,--linebreak--,mediamenutext,mediamenubackground,--linebreak--,mediamenuhinttext,mediamenuhintbackground","canNotCollapse" => true),
    $extKey."_offcanvas" => array("showitem" => "offcanvasopener,offcanvasbackground,offcanvastext,offcanvasactive","canNotCollapse" => true),
    $extKey."_generaltext" => array("showitem" => "fontsize,defaulttext,generalfont,fontweight","canNotCollapse" => true),
    $extKey."_heading1" => array("showitem" => "h1,h1font,h1style,h1weight","canNotCollapse" => true),
    $extKey."_heading2" => array("showitem" => "h2,h2font,h2style,h2weight","canNotCollapse" => true),
    $extKey."_heading3" => array("showitem" => "h3,h3font,h3style,h3weight","canNotCollapse" => true),
    $extKey."_heading4" => array("showitem" => "h4,h4font,h4style,h4weight","canNotCollapse" => true),
    $extKey."_heading5" => array("showitem" => "h5,h5font,h5style,h5weight","canNotCollapse" => true),
    $extKey."_formborders" => array("showitem" => "formborder,formborderfocus","canNotCollapse" => true),
    $extKey."_formbuttons" => array("showitem" => "formbutton,formbuttonhover","canNotCollapse" => true),
    $extKey."_links" => array("showitem" => "link,linkhover","canNotCollapse" => true),
    $extKey."_buttons" => array("showitem" => "buttontext,buttonbackground,--linebreak--,buttontexthover,buttonbackgroundhover","canNotCollapse" => true),
    $extKey."_overlaybox" => array("showitem" => "overlayboxtext,overlayboxbackground","canNotCollapse" => true),
    $extKey."_accordeon" => array("showitem" => "accopenerbackground,accopenertext,accopenerhover,--linebreak--,accfoldoutbackground,accfoldouttext","canNotCollapse" => true),
    $extKey."_slider" => array("showitem" => "sliderheightdesktop,sliderheighttablet,sliderheightmobile","canNotCollapse" => true),
);

foreach ($newPalettes as $key => $value) {
    $GLOBALS['TCA']['tx_ifthemeconfiguration_domain_model_themeconfiguration']['palettes'][$key] = $value;
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_ifthemeconfiguration_domain_model_themeconfiguration',
    $temporaryThemeColumn,
    1
);