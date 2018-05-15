## mailform styling
tt_content.mailform.20 {
  ## remove formname for enabling more than one mailform on the same page
  ## (unique md5-keys will be used if no name given here)
  stdWrap.wrap >
  formName >
  accessibility = 1
  labelWrap.wrap = <div class="fieldlabel">|</div>
  radioWrap {
    setContentToCurrent = 1
    wrap >
    stdWrap {
      cObject = COA
      cObject {
        10 = TEXT
        10 {
          current = 1
          wrap = <span class="csc-mailform-radiobuttonlabel">|</span>
        }
      }
    }
  }
  checkboxesWrap < .radioWrap
  checkboxesWrap.stdWrap.cObject {
    10.wrap = <span class="csc-mailform-checkboxeslabel">|</span><br />
    20.wrap = <span class="csc-mailform-checkboxeslabel">|</span>
  }
  RADIO.layout = <div class="csc-mailform-field csc-mailform-radio">###LABEL### ###FIELD###</div>
  CHECKBOXES.layout = <div class="csc-mailform-field csc-mailform-checkboxes">###LABEL### ###FIELD###</div>
  REQ.labelWrap.noTrimWrap = |<div class="fieldlabel">|<span class="mailform-required">*</span></div>|
  #SUBMIT.layout = <div class="csc-mailform-field submitfield">###LABEL### ###FIELD###
  RESET.layout =  <span class="csc-mailform-reset">###FIELD###</span></div>
  params {
    submit = class="csc-mailform-submit" onmouseover="submitbutton_over(this);" onfocus="submitbutton_over(this);" onmouseout="submitbutton_out(this);" onblur="submitbutton_out(this);"
    reset = class="csc-mailform-submit" onmouseover="submitbutton_over(this);" onfocus="submitbutton_over(this);" onmouseout="submitbutton_out(this);" onblur="submitbutton_out(this);"
    file = class="csc-mailform-file"
  }
  submitbuttonvalueWrap.case = upper
  resetbuttonvalueWrap.case = upper
}