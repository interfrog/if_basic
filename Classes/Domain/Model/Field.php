<?php
namespace Interfrog\IfBasic\Domain\Model;

/**
 * Class Field
 * @package Interfrog\IfBasic\Domain\Model
 */
class Field extends \In2code\Powermail\Domain\Model\Field {
	
	/**
	 * labelposition
	 *
	 * @var string
	 */
	protected $labelposition;

	/**
	 * allowedmimetypes
	 *
	 * @var string
	 */
	protected $allowedmimetypes;

	/**
	 * multiple
	 *
	 * @var int
	 */
	protected $multiple;

	/**
	 * preview
	 *
	 * @var int
	 */
	protected $preview;

	/**
	 * advancedprogress
	 *
	 * @var int
	 */
	protected $advancedprogress;
	
	/**
	 * @param string $labelposition
	 * @return void
	 */
	public function setLabelposition($labelposition) {
		$this->labelposition = $labelposition;
	}
	/**
	 * @return string
	 */
	public function getLabelposition() {
		return $this->labelposition;
	}

	/**
	 * @param string $allowedmimetypes
	 * @return void
	 */
	public function setAllowedmimetypes($allowedmimetypes) {
		$this->allowedmimetypes = $allowedmimetypes;
	}
	/**
	 * @return string
	 */
	public function getAllowedmimetypes() {
		return $this->allowedmimetypes;
	}

	/**
	 * @param int $multiple
	 * @return void
	 */
	public function setMultiple($multiple) {
		$this->multiple = $multiple;
	}
	/**
	 * @return bool
	 */
	public function getMultiple() {
		return $this->multiple;
	}

	/**
	 * @param int $preview
	 * @return void
	 */
	public function setPreview($preview) {
		$this->preview = $preview;
	}
	/**
	 * @return bool
	 */
	public function getPreview() {
		return $this->preview;
	}

	/**
	 * @param int $advancedprogress
	 * @return void
	 */
	public function setAdvancedprogress($advancedprogress) {
		$this->advancedprogress = $advancedprogress;
	}
	/**
	 * @return bool
	 */
	public function getAdvancedprogress() {
		return $this->advancedprogress;
	}
}