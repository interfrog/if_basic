<?php
namespace Interfrog\IfBasic\Utility;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Frontend\Utility;

class AjaxUploadController {

    protected $errors = [];
    protected $returnArr;
    protected $allowedMimeTypes = ['image/png','image/jpeg','image/gif'];
    protected $allowedFileSize = 500000;
    protected $targetFolder = 'fileadmin/user_upload/';
    protected $uploadedFile;

    /**
     *
     * @return string content
     */
    public function init() {
        $this->initTSSettings();
        header('Content-Type: application/json');
        $this->uploadedFile = $_FILES['SelectedFile'];
        $this->validateFile();
        $returnArray = [];
        if (isset($this->errors[0])) {
            $returnArray['status'] = 'failed';
            $returnArray['error'] = $this->errors;
        } else {
            $newFile = $this->targetFolder . date('Y-m-d--H-i-s') . '-' . $this->uploadedFile['name'];
            if(!move_uploaded_file($this->uploadedFile['tmp_name'], $newFile)){
                $returnArray['status'] = 'failed';
                $returnArray['error'] = 'Error uploading file - check destination is writeable or exists.';
            } else {
                $returnArray['status'] = 'done';
                $returnArray['fileName'] = $newFile;
            }
        }
        return json_encode($returnArray);
    }

    public function validateFile() {
        if($this->uploadedFile['error'] > 0){
            array_push($this->errors,'An error ocurred when uploading.');
        }
        // if(!getimagesize($this->uploadedFile['tmp_name'])){
        //     array_push($this->errors,'Please ensure you are uploading an image.');
        // }
        if(!in_array($this->uploadedFile['type'],$this->allowedMimeTypes)) {
            array_push($this->errors,'Unsupported filetype uploaded.');
        }
        if($this->uploadedFile['size'] > $this->allowedFileSize){
            array_push($this->errors,'File uploaded exceeds maximum upload size.');
        }
        if(file_exists($this->targetFolder . $this->uploadedFile['name'])){
            array_push($this->errors,'File with that name already exists.');
        }
    }

    public function initTSSettings() {
        if (!isset($_GET['id'])) {
            $firstTStemplate = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('pid','sys_template','root=1 AND deleted=0 AND hidden=0');
            $pid = $firstTStemplate['pid'];
        } else {
            $pid = $_GET['id'];
        }
        
        $GLOBALS['TSFE'] = GeneralUtility::makeInstance('TYPO3\\CMS\\Frontend\\Controller\\TypoScriptFrontendController', $TYPO3_CONF_VARS, $pid, 0, true);
        $GLOBALS['TSFE']->connectToDB();
        $GLOBALS['TSFE']->fe_user = \TYPO3\CMS\Frontend\Utility\EidUtility::initFeUser();
        $GLOBALS['TSFE']->id = $pid;
        $GLOBALS['TSFE']->determineId();
        $GLOBALS['TSFE']->initTemplate();
        $GLOBALS['TSFE']->getConfigArray();

        $uploadSettings = $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_powermail.']['settings.']['setup.']['ajaxUpload.'];
        !isset($uploadSettings['allowedMimeTypes']) ?: $this->allowedMimeTypes = explode(',',$uploadSettings['allowedMimeTypes']);
        !isset($uploadSettings['allowedFileSize']) ?: $this->allowedFileSize = $uploadSettings['allowedFileSize'];
        !isset($uploadSettings['targetFolder']) ?: $this->targetFolder = $uploadSettings['targetFolder'];

        $absLocalDir = GeneralUtility::getFileAbsFileName($this->targetFolder);
        if(!is_dir($absLocalDir)){
            mkdir($absLocalDir, 0777, true);
        }
    }
}

global $TYPO3_CONF_VARS;
$eid = GeneralUtility::makeInstance('Interfrog\IfBasic\Utility\AjaxUploadController', $TYPO3_CONF_VARS);
echo $eid->init();