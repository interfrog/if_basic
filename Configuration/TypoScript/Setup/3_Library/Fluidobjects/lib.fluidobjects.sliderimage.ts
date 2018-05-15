lib.fluidobjects.sliderimage = RECORDS
lib.fluidobjects.sliderimage {
	tables = tt_content
	source.current = 1
	dontCheckPid = 1
	conf.tt_content = FILES
	conf.tt_content {
		references {
	        table = tt_content
	        uid.data = uid
	        fieldName = image
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
}