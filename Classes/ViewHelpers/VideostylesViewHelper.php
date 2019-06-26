<?php
namespace Interfrog\IfBasic\ViewHelpers;

class VideostylesViewHelper extends \TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * @param string $width to search in
	 * @param string $height to search in
	 * @return string content
	 */
    public function render($width,$height) {

    	$returnString = '';

    	if (intval($width) > 0 && intval($height) > 0) {
    		$ratio = (intval($height) / intval($width)) * 100;
    		$ratio = str_replace(',','.',$ratio);
    		$returnString .= 'style="padding: 0 0 '.$ratio.'% 0;"';
    	}

        return $returnString;
    }
}