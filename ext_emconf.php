<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'ifPage Basic',
	'description' => 'IfPage Basic - Distribution package based upon the if_themeconfiguration extension with basic template and styles',
	'category' => 'distribution',
	'author' => 'Interfrog',
	'author_email' => 'info@interfrog.de',
	'author_company' => 'Interfrog Produktion GmbH',
	'state' => 'beta',
	'uploadfolder' => true,
	'createDirs' => NULL,
	'clearCacheOnLoad' => true,
	'version' => '2.0.0',
	'constraints' => array(
		'depends' => array(
			'fluid_styled_content' => '8.7.0.-8.99.99',
			'rte_ckeditor' => '8.7.0.-8.99.99',
			'if_themeconfiguration' => '5.0.0-5.99.99',
			'news' => '5.3.0-5.99.99',
			'gridelements' => '8.0.0-8.99.99',
			'powermail' => '3.8.0-3.21.99',
			'realurl' => '2.0.0-2.99.99',
			'blog' => '8.7.0-8.7.99'
		),
		'conflicts' => array(
			'css_styled_content' => ''
		),
		'suggests' => array(
		),
	),
	'autoload' => array(
		'psr-4' => array('Interfrog\\IfBasic\\' => 'Classes')
	),
);
