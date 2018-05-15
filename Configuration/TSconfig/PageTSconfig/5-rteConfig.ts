RTE.default.buttons.link.properties.class.allowedClasses := addToList(download-button,flat-button,fullwidth-button)

RTE.default {
	enableWordClean = 1
	enableWordClean.HTMLparser < RTE.default.proc.entryHTMLparser_db
	contentCSS = typo3conf/ext/if_basic/Resources/Public/Styles/rte.css 
	allowedTags (
		b, strong, i, em, u, strike, del, big, small, sub, sup, ol, ul, li, a, link,
		br, p, pre, h1, h2, h3, h4,h5,h6, hr, span,
		table, tr, th, td, thead, tbody, tfoot
	)
	keepButtonGroupTogether = 1
	removeComments = 1
	bold.hotKey = b
	italic.hotKey = i
	underline.hotKey = u
	toggleborders {
		setOnTableCreation = 1
		setOnRTEOpen = 1
	}
	proc {
		allowedClasses := removeFromList(csc-frame-frame1, csc-frame-frame2, important, name-of-person, detail)
		allowedClasses := addToList(external-link, external-link-new-window, internal-link,internal-link-new-window, download, mail)
		allowedClasses := addToList(align-left, align-center, align-right,alternatedtable)
	}
	classesAnchor {
		allowedClasses := addToList(external-link, external-link-new-window, internal-link,internal-link-new-window, download, mail)
		allowedClasses := addToList(align-left, align-center, align-right,alternatedtable)	
	}
	# classesAnchor (
	# 	external-link, external-link-new-window,
	# 	internal-link, internal-link-new-window, download, mail,
	# 	sch_button
	# )
	classesAnchor.default {
		page >
		url >
		file > 
		mail > 
	}
	buttons { 
		#pastetoggle.setActiveOnRteOpen = 1
		blockstyle.tags.div.allowedClasses := removeFromList(csc-frame-frame1, csc-frame-frame2)
		blockstyle.tags.table.allowedClasses = alternatedtable
	}

	showButtons (
		blockstyle, textstyle,formatblock, bold, italic, underline, strikethrough, big, small, subscript, superscript,
		orderedlist, unorderedlist, left, center, right, justifyfull, copy, cut, paste,pastetoggle,
		undo, redo, removeformat, link, unlink, line, insertparagraphbefore, insertparagraphafter,
		chMode, table, tableproperties, toggleborders, tablerestyle,
		rowproperties, rowinsertabove, rowinsertunder, rowdelete, rowsplit,
		columnproperties, columninsertbefore, columninsertafter, columndelete, columnsplit,
		cellproperties, cellinsertbefore, cellinsertafter, celldelete, cellsplit, cellmerge
	)
	RTEHeightOverride = 700
	rteResize = 1
	contextMenu.disabled = 0
	showStatusBar = 1
	dontConvBRtoParagraph = 1
	preserveDIVSections = 0
	allowTagsOutside (
		blockquote, h1, h2, h3, h4,h5,h6, hr, pre, table, ul, ol
	)
}

### TABLE FEATURES ###
RTE.default {
	buttons {
		table {
			enableHandles = 0	
			disableEnterParagraphs = 1
			properties {
				removed = 
				widthUnit.defaultValue = %
				widthUnit.removeItems = px, em  
				heightUnit.defaultValue = %
				heightUnit.removeItems = px, em 
				borderStyle.defaultValue = solid
			}
		}

		rowproperties {
			removeFieldsets = 
			properties {
				widthUnit.defaultValue = %
				widthUnit.removeItems = px, em
				heightUnit.defaultValue = %
				heightUnit.removeItems = px, em
			}
		}
  
		cellproperties {
			removeFieldsets = 
			properties {
				widthUnit.defaultValue = %
				widthUnit.removeItems = px, em
				heightUnit.defaultValue = %
				heightUnit.removeItems = px, em 
			}
		}
	}

	## table configuration
	disableAlignmentFieldsetInTableOperations = 0
	disableSpacingFieldsetInTableOperations = 1 
	disableColorFieldsetInTableOperations = 0
	disableLayoutFieldsetInTableOperations = 1
	disableBordersFieldsetInTableOperations = 0

	disableLayoutFieldsetInTableOperations	= 0
	disableSpacingFieldsetInTableOperations   = 0
	disableAlignmentFieldsetInTableOperations = 0
	disableBordersFieldsetInTableOperations   = 1
	disableColorFieldsetInTableOperations	= 1
}

RTE.classes {
  alternatedtable {
    name = Hintergrund alternierend farbflächig
    value = background-color: #EDEBF1; padding: 2px 4px 2px 4px; border: 1px solid #333333;
  }
}