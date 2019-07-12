lib.headerContent = CONTENT
lib.headerContent {
  table = tt_content
  select {
    where = colPos = 1
    orderBy = sorting
    languageField = sys_language_uid
  }
  renderObj < tt_content
  renderObj {
    stdWrap.outerWrap.cObject >
    stdWrap.outerWrap.cObject < lib.rowWrap
    stdWrap.outerWrap.cObject.10.10.stdWrap.noTrimWrap = |<div | ><div class="innerWrap">|

    textpic >
    textpic = COA
    textpic {
      10 = FILES
      10 {
        references {
          table = tt_content
          fieldName = image
          uid.field = uid
        }
        renderObj = IMAGE
        renderObj {
          file.import.data = file:current:originalUid
          file.minW.cObject = CASE
          file.minW.cObject {
            key.field = fullscreen
            1 = TEXT
            1.value = 1600
          }
          file.minW.override.cObject = TEXT
          file.minW.override.cObject {
            field = imagewidth
          }
          file.height.cObject = TEXT
          file.height.cObject {
            field = imageheight
            stdWrap.required = 1
            stdWrap.wrap = |c
          }
        }
      }
      wrap = <div class="headerImage">|</div>
    }
    image >
    image < .textpic
  }
}
