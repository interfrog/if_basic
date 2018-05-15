lib.footerContent = CONTENT
lib.footerContent {
  table = tt_content
  select {
    where = colPos = 10
    orderBy = sorting
    languageField = sys_language_uid
  }
  slide = -1
}