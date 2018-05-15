lib.stdheader {
  if.isInList.field = section_frame
  if.value = 60,61,62,63
  if.negate = 1
  10 {
    1.dataWrap >
    1.wrap.cObject = COA
    1.wrap.cObject {
      10 = COA
      10 {
        wrap = <|>
        10 = TEXT
        10.value = h2
        20 = TEXT
        20.value = class="hassub"
        20.if.isTrue.field = subtitle
        20.stdWrap.noTrimWrap = | ||
        30 = TEXT
        30.value = align-{field:header_position}
        30.insertData = 1
        30.stdWrap.noTrimWrap = | data-align="|"|
      }
      50 = TEXT
      50.value = |
      99 = TEXT
      99.value = </h2>
    } 
    2 >
    2 < .1
    2.wrap.cObject.10.10.value = h3
    2.wrap.cObject.99.value = </h3>
    3 >
    3 < .1
    3.wrap.cObject.10.10.value = h4
    3.wrap.cObject.99.value = </h4>
    4 >
    4 < .1
    4.wrap.cObject.10.10.value = h5
    4.wrap.cObject.99.value = </h5>
    6 < .1
    6.wrap.cObject.10.10.value = h1
    6.wrap.cObject.99.value = </h1>
    setCurrent.htmlSpecialChars = 0

    stdWrap.postCObject = CASE
    stdWrap.postCObject {
      key.field = header_layout
      default = TEXT
      default {
        field = subtitle
        br = 1
        required = 1
        stdWrap.dataWrap = <h3 data-align="align-{field:header_position}">|</h3>
      }
      2 < .default
      2.stdWrap.dataWrap = <h4 data-align="align-{field:header_position}">|</h4>
      3 < .default
      3.stdWrap.dataWrap = <h5 data-align="align-{field:header_position}">|</h5>
      4 < .default
      4.stdWrap.dataWrap = <p data-align="align-{field:header_position}"><strong>|</strong></p>
      6 < .default
      6.stdWrap.dataWrap = <h2 data-align="align-{field:header_position}">|</h2>
    }
  }
  stdWrap.dataWrap >
}