<?php
namespace Interfrog\IfBasic\ViewHelpers;

class YoutubeurlViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {


	protected $searchStrings = array('watch?v=','/embed/');
	protected $youtubeid = '';
	protected $originUrl = '';
	protected $protocol = '';

	/**
	 * @param string $url to search in
	 * @return string content
	 */
    public function render($url) {

    	$this->originUrl = $url;

    	foreach ($this->searchStrings as $needle) {
    		if (strpos($url,$needle)) {
    			$this->youtubeid = explode($needle, $url)[1];
    		}
    	}

    	if (empty($this->youtubeid)) {
    		$returnURL = $this->originUrl;
    	} else {
    		$returnURL = '//www.youtube.com/embed/'.$this->youtubeid;
    	}

        return $returnURL;
    }
}