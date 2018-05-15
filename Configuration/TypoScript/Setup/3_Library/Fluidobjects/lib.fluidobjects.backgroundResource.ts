lib.fluidobjects.backgroundResource = RECORDS
lib.fluidobjects.backgroundResource {
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
		renderObj = IMG_RESOURCE
      	renderObj {
      		file.import.data = file:current:originalUid
      	}
	}
}