lib.mainContent = CONTENT
lib.mainContent {
  table = tt_content
  select {
    where = colPos = 0
    orderBy = sorting
    languageField = sys_language_uid
  }
}

lib.mainContentWrapped = CONTENT
lib.mainContentWrapped {
  table = tt_content
  select {
    where = colPos = 0
    orderBy = sorting
    languageField = sys_language_uid
  }
  renderObj < tt_content
  renderObj.stdWrap.outerWrap.cObject >
  renderObj.stdWrap.outerWrap.cObject < lib.rowWrap
}