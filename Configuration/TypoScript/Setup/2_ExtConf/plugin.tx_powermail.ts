config.tx_extbase{
  persistence{
      classes{
          In2code\Powermail\Domain\Model\Form {
              subclasses {
                  0 = Interfrog\IfBasic\Domain\Model\Form
              }
          }
          In2code\Powermail\Domain\Model\Page {
              subclasses {
                  0 = Interfrog\IfBasic\Domain\Model\Page
              }
          }
          In2code\Powermail\Domain\Model\Field {
              subclasses {
                  0 = Interfrog\IfBasic\Domain\Model\Field
              }
          }
          Interfrog\IfBasic\Domain\Model\Form {
              mapping {
                  tableName = tx_powermail_domain_model_form
              }
          }
          Interfrog\IfBasic\Domain\Model\Page {
              mapping {
                  tableName = tx_powermail_domain_model_page
              }
          }
          Interfrog\IfBasic\Domain\Model\Field {
              mapping {
                  tableName = tx_powermail_domain_model_field
              }
          }
      }
  }
  objects {
      In2code\Powermail\Domain\Repository\FormRepository.className = Interfrog\IfBasic\Domain\Repository\FormRepository
  }
}


plugin.tx_powermail {
  view {
    templateRootPaths {
    	1 = {$config.pluginPath}/powermail/Templates/
    }
    layoutRootPaths {
     	1 = {$config.pluginPath}/powermail/Layouts/
    }
    partialRootPaths {
    	1 = {$config.pluginPath}/powermail/Partials/
    }
  }
  settings.setup {
    ajaxUpload {
      targetFolder = fileadmin/user_upload/
      allowedMimeTypes = image/png,image/jpeg,image/gif
      allowedFileExt = png,jpg,jpeg,gif
      #allowedFileSize = 2621440
      allowedFileSize = 10485760
    }
  }
}

#remove all Powermail-Javascript
page.includeJSFooterlibs {
	powermailJQuery >
	powermailJQueryUi >
	powermailJQueryUiDatepicker >
	powermailJQueryFormValidationLanguage >
	powermailJQueryFormValidation >
	powermailJQueryTabs >
	powermailForm >
	powermail_frontend >
}