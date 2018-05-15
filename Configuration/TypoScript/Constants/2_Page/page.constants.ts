config {
  baseURL = http://basic.ifpage.de/
  facebookURL = http://basic.ifpage.de
  secureBaseURL = https://basic.ifpage.de/

  additionalPageTitle =  - Basic ifPage by Interfrog
  copyright = Copyright © Interfrog Produktion GmbH

  #Insert new extension path
  extensionDirectory = if_basic

  jsPath = EXT:{$config.extensionDirectory}/Resources/Public/Scripts
  absoluteJsPath = typo3conf/ext/{$config.extensionDirectory}/Resources/Public/Scripts
  cssPath = EXT:{$config.extensionDirectory}/Resources/Public/Styles
  htmlPath = EXT:{$config.extensionDirectory}/Resources/Public
  imagePath = EXT:{$config.extensionDirectory}/Resources/Public/Assets
  absoluteImagePath = typo3conf/ext/{$config.extensionDirectory}/Resources/Public/Images
  demoPath = EXT:{$config.extensionDirectory}/Resources/Public
  pluginPath = EXT:{$config.extensionDirectory}/Plugins
  fluidPath = EXT:{$config.extensionDirectory}/Resources/Private/

  jsPathBase = EXT:{$config.extensionDirectory}/Resources/Public/Scripts
  cssPathBase = EXT:{$config.extensionDirectory}/Resources/Public/Styles

  mainNavigationPid = 6
  #Footer Navigation mainly used for SEO reasons
  footerNavigationPid = 1
  #System Navigation contains typical points for legal reasons like imprint and disclaimer

  googleAnalyticsCode = 0
}
