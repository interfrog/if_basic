<?php
namespace Interfrog\IfBasic\Domain\Model;

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class Page
 * @package Interfrog\IfBasic\Domain\Model
 */
class Page extends \In2code\Powermail\Domain\Model\Page
{

    /**
     * Powermail Fields
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Interfrog\IfBasic\Domain\Model\Field>
     */
    protected $fields = null;

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $fields
     * @return void
     */
    public function setFields(ObjectStorage $fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getFields()
    {
        return $this->fields;
    }
}