tt_content.videoframe = FLUIDTEMPLATE
tt_content.videoframe {
  templateName = Videoframe
  layoutRootPaths.10 = EXT:{$config.extensionDirectory}/Resources/Private/Layouts/Content/
  partialRootPaths.10 = EXT:{$config.extensionDirectory}/Resources/Private/Partials/Content/
  templateRootPaths.10 = EXT:{$config.extensionDirectory}/Resources/Private/Templates/Content/
  variables {
    header < lib.stdheader
    colorsheme = RECORDS
    colorsheme {
      tables = tx_ifthemeconfiguration_domain_model_colorsheme
      source.field = colorsheme
      dontCheckPid = 1
      conf.tx_ifthemeconfiguration_domain_model_colorsheme = TEXT
      conf.tx_ifthemeconfiguration_domain_model_colorsheme {
        field = identifier
      }
    }
  }
  dataProcessing {
    10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
    10 {
      references.fieldName = image
      references.table = tt_content
      as = images
    }
  }
}