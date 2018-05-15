tt_content.stdWrap.innerWrap.cObject.default {
	20 {
		40 = CASE
		40 {
			key.field = section_frame
			default = TEXT
			default.value =
			default.noTrimWrap = || |
			1 < .default
			1.value = colorBox
		}
		50 = TEXT
		50 {
			value = hideOnMobile
			noTrimWrap = || |
			if.isTrue.field = hidemobile
		}
		60 = TEXT
		60 {
			value = hideOnDesktop
			noTrimWrap = || |
			if.isTrue.field = hidedesktop
		}
	}
	26 = COA
	26 {
		10 = TEXT
		10.field = CType
		10.stdWrap.noTrimWrap = | data-type="|" |
	}
}