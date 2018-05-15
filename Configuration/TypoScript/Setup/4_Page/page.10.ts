page = PAGE
page {
  typeNum = 0

  bodyTagCObject = TEXT
  bodyTagCObject.value = <body data-pageid="{TSFE:id}" data-title="{page:title}">
  bodyTagCObject.insertData = 1

  10 = FLUIDTEMPLATE
  10 {
    templateName = Page
    partialRootPaths.10 = EXT:{$config.extensionDirectory}/Resources/Private/Partials/Page/
    layoutRootPaths.10 = EXT:{$config.extensionDirectory}/Resources/Private/Layouts/Page/
    templateRootPaths.10 = EXT:{$config.extensionDirectory}/Resources/Private/Templates/Page/
    variables {

      headerContent < lib.headerContent
      mainContent < lib.mainContent
      mainContentWrapped < lib.mainContentWrapped
      contentRight < lib.contentRight
      footerContent < lib.footerContent

      copyrighttheme < lib.copyrighttheme

      pagetitle < lib.pagetitle
      mainmenutype < lib.mainmenutype
      test < page.11

      mediaMenu < lib.menu.media
      mainMenu < lib.menu.main
      footerMenu < lib.menu.footer
      sysMenu < lib.menu.sys
      offCanvas < lib.menu.offcanvas
      permanentOffCanvas < lib.menu.permoffcanvas

      absoluteImagePath = TEXT
      absoluteImagePath.value = {$config.absoluteImagePath}
      
      logo < lib.logo
      page = TEXT
      page.field = uid
      pageTitle = TEXT
      pageTitle.field = title
      pageLayout = TEXT
      pageLayout {
        field = layout
        ifEmpty.data = levelfield:-2, layout, slide
      }
      backendLayout = TEXT
      backendLayout {
        field = backend_layout
        ifEmpty.data = levelfield:-2, backend_layout_next_level, slide
        stdWrap.replacement {
          10 {
            search = file__
            replace =
          }
        }
      }
      fblike = TEXT
      fblike {
        data = levelfield:-1, fblike, slide
        override.field = fblike
        if.equals {
          data = levelfield:-1, fblike, slide
          override.field = fblike
        }
        if.value = disable
        if.negate = 1
      }
      twitter < .fblike
      twitter {
        data = levelfield:-1, twitter, slide
        override.field = twitter
        if.equals {
          data = levelfield:-1, twitter, slide
          override.field = twitter
        }
      }
      googleplus < .fblike
      googleplus {
        data = levelfield:-1, googleplus, slide
        override.field = googleplus
        if.equals {
          data = levelfield:-1, googleplus, slide
          override.field = googleplus
        }
      }
      pageURL = TEXT
      pageURL {
        value = 1
        typolink.parameter.data = TSFE:id
        typolink.addQueryString = 1
        typolink.addQueryString.method = get
        typolink.returnLast = url
        stdWrap.wrap = {$config.baseURL}|
      }
      year = TEXT
      year {
        data = date:U
        strftime = %Y
      }
    }
  }
}

[globalString = IENV:HTTP_HOST = {$config.liveURL}]
page {
  999 = TEXT
  999.value (
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '{$config.googleAnalyticsCode}']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_gat._anonymizeIp']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>
  )
  999.if.isTrue = {$config.googleAnalyticsCode} 
}
[global]