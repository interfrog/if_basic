lib.contentRight = CONTENT
lib.contentRight {
  table = tt_content
  select {
    where = colPos = 2
    orderBy = sorting
    languageField = sys_language_uid
  }
}
