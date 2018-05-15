tt_content {
  # Define different wrappers for content elements depending on the page column
  stdWrap.outerWrap.cObject = CASE
  stdWrap.outerWrap.cObject {
    key.field = colPos
    
    default = TEXT
    default.value = |
  }
}