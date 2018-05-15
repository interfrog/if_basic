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

tt_content.image.20.rendering.singleCaption.caption.wrap >
tt_content.image.20.rendering.singleCaption.caption.wrap = <figcaption class="csc-textpic-caption align-{field:imagecaption_position}">|</figcaption>
tt_content.image.20.rendering.singleCaption.caption.wrap.insertData = 1

tt_content.image.20.rendering.splitCaption.caption.wrap >
tt_content.image.20.rendering.splitCaption.caption.wrap = <figcaption class="csc-textpic-caption align-{field:imagecaption_position}">|</figcaption>
tt_content.image.20.rendering.splitCaption.caption.wrap.insertData = 1
