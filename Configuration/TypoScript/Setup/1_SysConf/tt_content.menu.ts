tt_content {
  # Remove the ancient onfocus="blurLink(this);" from sitemap links
  # Unfortunately this hasn't been fully implemented in css_styled_content yet
  # See also bug 11367
  menu.20 {
    default.1.noBlur = 1
    1.1.noBlur = 1
    4.1.noBlur = 1
    5.1.noBlur = 1
    6.1.noBlur = 1
    7.1.noBlur = 1
    7.2.noBlur = 1
    20=COA
    20{
      wrap = <table id="seotable" style="border:solid 1px;text-align:center;"><tr style="border-bottom:1px solid"><th style="padding:0.5em;">Link</th><th style="padding:0.5em;border-left:1px solid;">SEO-Titel</th><th style="padding:0.5em;border-left:1px solid;">Beschreibung</th></tr>|</table>
      5=HMENU
      5{
        1=TMENU
        1{
          NO=1
          NO{
            doNotLinkIt=1
            stdWrap.cObject= COA
            stdWrap.cObject {
              10 = TEXT
              10.field = title
              10.typolink.parameter.field = uid
              10.typolink.returnLast = url
              10.wrap = <td style="padding:0.5em;text-align:left;">|</td>
              20 = TEXT
              20.field = seotitle
              20.wrap = <td style="padding:0.5em;border-left:1px solid;">|</td>
              20.wrap.override = <td style="background-color:rgb(245,211,208);border-left:1px solid;">|</td>
              20.wrap.override.if.isFalse.field = seotitle
              20.ifEmpty = <i class="fa fa-times"></i>
              #20.ifEmpty.wrap.override = <td>haha|</td>
              30 = TEXT
              30.field = description
              30.wrap = <td style="padding:0.5em;border-left:1px solid;">|</td>
              30.ifEmpty = <i class="fa fa-times"></i>
            }
            stdWrap.wrap = <tr style="border-bottom:1px solid;">|</tr>
          }
          expAll=1
        }
        2 < .1
        3 < .1
        4 < .1
        5 < .1
        6 < .1
        7 < .1
        8 < .1
        9 < .1
        10 < .1
      }
    }
  }
}