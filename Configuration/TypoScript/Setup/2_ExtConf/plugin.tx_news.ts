plugin.tx_news {
  settings {
    cssFile >
    displayDummyIfNoMedia = 0
    detail {
      media.image.maxWidth = 600
      media.image.maxHeight = 350
      showSocialShareButtons = 0
      attachement {
        media {
          image.width = 140c
          image.height = 100c
        }
        video {
          width = 205
          height = 188
        }
      }
    }
    facebookLocale = de_DE
    googlePlusLocale = de
    disqusLocale = de
    list {
      media.image.maxWidth = 420
      media.image.maxHeight = 420
      paginate {
        itemsPerPage = 5
        insertAbove = 0
        pagesBefore = 6
        pagesAfter = 6
        lessPages = 0
      }
    }
    cropMaxCharacters = 350
  }
  view {
    templateRootPaths.100 = {$config.pluginPath}/news/Templates/
    layoutRootPaths.100 = {$config.pluginPath}/news/Layouts/
    partialRootPaths.100 = {$config.pluginPath}/news/Partials/
  }
}