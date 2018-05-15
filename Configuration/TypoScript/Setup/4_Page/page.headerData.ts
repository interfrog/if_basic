page {
  headTag (
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  )
  headerData {
    1 = TEXT
    1.field = seotitle // title
    1.noTrimWrap = |<title>| {$config.additionalPageTitle}</title>|
    3 = TEXT
    3 {
      field = canonical
      required = 1
      wrap = <link rel="canonical" href="|"/>
    }
    5 = CASE
    5 {
      key.field = backend_layout
      key.ifEmpty.data = levelfield:-2, backend_layout_next_level, slide

      #standard viewport for responsive layouts
      default = TEXT
      default.value = <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    }
    6 = TEXT
    6.value (
      <!--[if lt IE 9]>
      <script src="http://{$config.absoluteJsPath}/html5shiv.js"></script>
      <script src="http://{$config.absoluteJsPath}/html5shiv-printshiv.js"></script>
      <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
      <![endif]-->
    )
    10 = TEXT
    10.value (
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" />
    )
    20 = COA
    20 {
      10 = TEXT
      10.field = title
      10.override.field = subtitle
      10.wrap = <meta property="og:title" content="|" />

      20 = TEXT
      20.value = <meta property="og:type" content="website" />

      30 = TEXT
      30.data = getIndpEnv:REQUEST_URI
      30.dataWrap = <meta property="og:url" content="http://{getIndpEnv:HTTP_HOST}|" />
      30.dataWrap.override = <meta property="og:url" content="https://{getIndpEnv:HTTP_HOST}|" />
      30.dataWrap.override.if.isTrue.data = getIndpEnv:HTTPS


      40 = TEXT
      40.value = <meta property="og:site_name" content="{$config.additionalPageTitle}" />

      50 = TEXT
      50.field = description
      50.stripHtml = 1
      50.required = 1
      50.wrap = <meta property="og:description" content="|" />

      60 = COA
      60 {
        #required = 1
        stdWrap.dataWrap = <meta property="og:image" content="http://{getIndpEnv:HTTP_HOST}/|" />
        stdWrap.dataWrap.override = <meta property="og:image" content="https://{getIndpEnv:HTTP_HOST}/|" />
        stdWrap.dataWrap.override.if.isTrue.data = getIndpEnv:HTTPS
        10 = CONTENT
        10 {
          table = tx_ifthemeconfiguration_domain_model_themeconfiguration
          select {
            pidInList.data = leveluid : 0
            max = 1
          }
          renderObj = FILES
          renderObj {
            references {
                table = tx_ifthemeconfiguration_domain_model_themeconfiguration
                uid.field = uid
                fieldName = logo
            }     
            renderObj = TEXT
            renderObj.data = file:current:publicUrl
          }
        }
        10.stdWrap.override.cObject = FILES
        10.stdWrap.override.cObject {
          references {
            tables = pages
            uid.data = TSFE:id
            fieldName = media
          }
          renderObj = TEXT
          renderObj.data = file:current:publicUrl
        }
      }

      70 < .60
      70 {
        stdWrap.dataWrap = <link rel="image_src" href="http://{getIndpEnv:HTTP_HOST}/|" />
        stdWrap.dataWrap.override = <link rel="image_src" href="https://{getIndpEnv:HTTP_HOST}/|" />
      }
    }
  }
}

[globalString = ENV:TYPO3_CONTEXT = Development]
page.headerData.15.renderObj {
  field >
  value = {getIndpEnv:HTTP_HOST}/typo3temp/{field:theme}-{field:uid}.css
  insertData = 1
}
[global]

[globalVar = GP:tx_news_pi1|news > 0]
lib.actualnews = RECORDS
lib.actualnews {
  tables = tx_news_domain_model_news
  source.data = GP:tx_news_pi1|news
  dontCheckPid = 1
  conf.tx_news_domain_model_news = TEXT
  conf.tx_news_domain_model_news.field = title
}
page.headerData  {
  1 >
  1 < lib.actualnews
  1.conf.tx_news_domain_model_news.noTrimWrap = |<title>| {$config.additionalPageTitle}</title>|
}
page.headerData.20 {

  10 >
  10 < lib.actualnews
  10.conf.tx_news_domain_model_news.wrap = <meta property="og:title" content="|" />
  50 >
  50 < lib.actualnews
  50.conf.tx_news_domain_model_news {
    field = teaser
    stripHtml = 1
    required = 1
    override.field = bodytext
    override.stripHtml = 1
    override.if.isFalse.field = teaser
    wrap = <meta property="og:description" content="|" />
  }
  60.10.stdWrap.override.cObject >
  60.10.stdWrap.override.cObject < lib.actualnews
  60.10.stdWrap.override.cObject.conf.tx_news_domain_model_news = FILES
  60.10.stdWrap.override.cObject.conf.tx_news_domain_model_news {
    references {
      table =  tx_news_domain_model_news
      uid.field = uid
      fieldName = fal_media
    }
    renderObj = IMG_RESOURCE 
    renderObj {
      file.import.data = file:current:uid
      file.treatIdAsReference = 1
      file.width = 500
    }
  }
  70.10.stdWrap.override.cObject >
  70.10.stdWrap.override.cObject < .60.10.stdWrap.override.cObject
}
[global]
