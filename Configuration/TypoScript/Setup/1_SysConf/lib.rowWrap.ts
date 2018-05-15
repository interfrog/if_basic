lib.rowWrap = COA
lib.rowWrap {
  # if.isInList.field = CType
  # if.value = div,shortcut
  # if.negate = 1
  10 = COA
  10 {
    if.equals.field = tx_gridelements_container
    if.value = 0
    10 = COA
    10 {
      stdWrap.noTrimWrap = |<div | data-inview="false"><div class="innerWrap">|
      10 = COA
      10 {
        stdWrap.noTrimWrap = | class="row |"|
        10 = TEXT
        10.value = hasbackground
        10.stdWrap.noTrimWrap = | ||
        10.if.isTrue.field = backgroundimage
        20 = COA
        20 {
          if.isInList.field = CType
          if.value = div
          if.negate = 1
          stdWrap.noTrimWrap = | ||
          10 = CASE
          10 {
            key.field = frame_class
            default = TEXT
            default {
              value = regularPadding
            }
            70 < .default
            70.value = noPadding
            71 < .default
            71.value = topPadding
            72 < .default
            72.value = bottomPadding
          }
        }
        30 = TEXT
        30.value = hideOnMobile
        30.stdWrap.noTrimWrap = | ||
        30.if.isTrue.field = hidemobile
        40 = TEXT
        40.value = hideOnDesktop
        40.stdWrap.noTrimWrap = | ||
        40.if.isTrue.field = hidedesktop
      }
      20 = RECORDS
      20 {
        tables = tx_ifthemeconfiguration_domain_model_colorsheme
        source.field = colorsheme
        dontCheckPid = 1
        conf.tx_ifthemeconfiguration_domain_model_colorsheme = TEXT
        conf.tx_ifthemeconfiguration_domain_model_colorsheme {
          field = identifier
          stdWrap.noTrimWrap = | data-colorsheme="|"|
        }
      }
      30 = TEXT
      30.value = true
      30.if.isTrue.field = fullscreen
      30.stdWrap.noTrimWrap = | data-fullscreen="|"|
    }
    50 = TEXT
    50.value = |
    99 = TEXT
    99.value = </div></div>
  }
}