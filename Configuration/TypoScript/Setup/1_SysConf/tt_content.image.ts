tt_content.image.20 {
  maxW.cObject = CASE
  maxW.cObject {
    key.field = fullscreen
    default = CONTENT
    default {
      table = tx_ifthemeconfiguration_domain_model_themeconfiguration
      select {
        pidInList.data = leveluid:0
        max = 1
      }
      renderObj = TEXT
      renderObj {
        field = maxwidth
      }
    }
    1 = TEXT
    1.value = 1920
  }
}


tt_content.image.20.stdWrap.override.stdWrap.cObject = CASE
tt_content.image.20.stdWrap.override.stdWrap.cObject {
  key.field = section_frame

  60 = COA
  60 {
    wrap = <div class="coloredOverlayBox leftToRight">|</div>
    10 = FILES
    10 {
      references {
        table = tt_content
        uid.data = uid
        fieldName = image
      }
      renderObj = COA
      renderObj {
        stdWrap.outerWrap = <div class="image">|</div>
        stdWrap.typolink.parameter.cObject = IMG_RESOURCE
        stdWrap.typolink.parameter.cObject {
          file {
            import.data = file:current:originalUid
            maxW = 1290
            minW = 1000
            minH = 800
            maxH = 1000
          }
        }
        stdWrap.typolink.parameter.override.field = header_link
        stdWrap.typolink.parameter.override.override.data = file:current:link
        stdWrap.typolink.ATagParams.cObject = COA
        stdWrap.typolink.ATagParams.cObject {
          10 = TEXT
          10 {
            field = imageheight
            noTrimWrap = |style="max-height:|px"|
            if {
              equals.field = imageheight
              value = 0
              negate = 1
            }
          }
          20 = TEXT
          20 {
            value = class="fancybox"
            if.isFalse.data = file:current:link
          }
        }
        10 = IMAGE
        10 {
          altText.data = file:current:alternative
          titleText.data = file:current:title
          file {
            import.data = file:current:originalUid
            width.override.field = imagewidth
            height.override.field = imageheight
          }
        }
        20 = COA
        20 {
          wrap = <div class="overlay">|</div>
          10 = TEXT
          10.data = file:current:title
          10.required = 1
          10.wrap = <h3>|</h3>
          20 = TEXT
          20.data = file:current:description
          20.required = 1
          20.wrap = <p>|</p>
          30 = TEXT
          30.value = &raquo; Mehr
          30.if.isTrue.data = file:current:link
          30.typolink.parameter.data = file:current:link
        }
      }
    }
    20 = COA
    20 {
      stdWrap.required = 1
      stdWrap.wrap = <div class="textBox">|</div>
      10 < lib.stdheader
      10.if >
      20 = TEXT
      20.field = bodytext
      20.parseFunc < lib.parseFunc_RTE
    }
  }
  61 < .60
  61 {
    wrap = <div class="coloredOverlayBox rightToLeft">|</div>
  }
  62 < .60
  62 {
    wrap = <div class="coloredOverlayBox topToBottom">|</div>
  }
  63 < .60
  63 {
    wrap = <div class="coloredOverlayBox bottomToTop">|</div>
  }
}


tt_content.image.20.rendering.singleCaption.caption.wrap >
tt_content.image.20.rendering.singleCaption.caption.wrap = <figcaption class="csc-textpic-caption align-{field:imagecaption_position}">|</figcaption>
tt_content.image.20.rendering.singleCaption.caption.wrap.insertData = 1

tt_content.image.20.rendering.splitCaption.caption.wrap >
tt_content.image.20.rendering.splitCaption.caption.wrap = <figcaption class="csc-textpic-caption align-{field:imagecaption_position}">|</figcaption>
tt_content.image.20.rendering.splitCaption.caption.wrap.insertData = 1
