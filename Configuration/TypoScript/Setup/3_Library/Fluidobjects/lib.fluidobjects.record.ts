lib.fluidobjects.record = RECORDS
lib.fluidobjects.record {
	tables = tt_content
	source.current = 1
	dontCheckPid = 1
	conf.tt_content < tt_content
	conf.tt_content {
		stdWrap.innerWrap >
		stdWrap.outerWrap >
		textpic.10 >
		image.10 >
		list.10 >
		header >
		menu.10 >
		text.10 >
	}
}