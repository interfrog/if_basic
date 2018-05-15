config {

  #-> Header Settings
  doctype = html5
  doctypeSwitch = 0
  xmlprologue = none

  compressJs = 1
  compressCss = 1
  concatenateCss = 1
  concatenateJs = 1
  moveJsFromHeaderToFooter = 1

  htmlTag_langKey = de
  locale_all = de_DE.UTF-8
  language = de

  #-> dev options
  debug = 0
  admPanel = 0
  disablePrefixComment = 1

  #-> caching with cache-controll-headers!
  sendCacheHeaders = 0
  sendCacheHeaders_onlyWhenLoginDeniedInBranch = 0

  #-> the number of second a page may remain in cache
  cache_period = 86400
  cache_clearAtMidnight = 0
  no_cache = 0

  removeDefaultJS = external
  inlineStyle2TempFile = 1

  #-> Spamschutz - @doku: tsRef -> Setup -> CONFIG
  spamProtectEmailAddresses = -2
  spamProtectEmailAddresses_atSubst = <span style="display:none;">nospam</span>@
  #spamProtectEmailAddresses_lastDotSubst = -punkt-

  #-> RealURL
  simulateStaticDocuments = 0
  tx_realurl_enable = 1
  absRefPrefix = /
  prefixLocalAnchors = all

  #-> AwStats
  stat_apache = 0 
  stat_apache_logfile = dummy.log 
  stat_excludeBEuserHits = 1 
  stat_mysql = 0 
  stat_typeNumList = 0
  stat_apache_pagenames = [path][title].html

  #-> settings for indexed search
  index_enable = 1
  index_externals = 0
  index_metatags = 0

  #-> kürzere links in plainText-Mails
  notification_email_encoding = base64
  notification_email_urlmode = all
  
  #-> Link target configuration
  extTarget = _blank
  intTarget = _self
  fileTarget = _blank

  #-> direct_mail
  insertDmailerBoundaries = 0
  incT3Lib_htmlmail = 0

  jumpurl = 0
  
  noPageTitle = 1

}


# English language, sys_language.uid = 1
[globalVar = GP:L = 1]
config {
  sys_language_uid = 1
  language = en
  locale_all = en_EN.UTF-8
  htmlTag_langKey = en
}
[global]

# French language, sys_language.uid = 2
[globalVar = GP:L = 2]
config {
  sys_language_uid = 2
  language = fr
  locale_all = fr_FR.UTF-8
  htmlTag_langKey = fr
}
[global]

# Spanish language, sys_language.uid = 3
[globalVar = GP:L = 3]
config {
  sys_language_uid = 3
  language = es
  locale_all = es_ES.UTF-8
  htmlTag_langKey = es
}
[global]

# Italien language, sys_language.uid = 4
[globalVar = GP:L = 4]
config {
  sys_language_uid = 4
  language = it
  locale_all = it_IT.UTF-8
  htmlTag_langKey = it
}
[global]

# Russian language, sys_language.uid = 5
[globalVar = GP:L = 5]
config {
  sys_language_uid = 5
  language = ru
  locale_all = ru_RU.UTF-8
  htmlTag_langKey = ru
}
[global]

# Polish language, sys_language.uid = 6
[globalVar = GP:L = 6]
config {
  sys_language_uid = 6
  language = pl
  locale_all = pl_PL.UTF-8
  htmlTag_langKey = pl
}
[global]