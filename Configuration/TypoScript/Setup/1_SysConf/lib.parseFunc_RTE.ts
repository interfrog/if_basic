lib.parseFunc_RTE {
  externalBlocks.table {
    ## remove table spacing and padding
    stdWrap {
      HTMLparser = 1
      #HTMLparser.tags.table.overrideAttribs = cellpadding="0" cellspacing="0" border="0"
      HTMLparser.tags.table.fixAttrib.class {
        default = contenttable
        always = 1
        list = contenttable, alternatedtable
      }
      HTMLparser.keepNonMatchedTags = 1
    }

    ## nochmaliges parsen von tabellenzellen auschalten, damit inhalte nicht wieder in p gepackt werden
    HTMLtableCells.default.callRecursive = 0

    ## enable links in Tablecells
    HTMLtableCells.default.stdWrap.parseFunc {
      makelinks = 1
      makelinks.http.keep = scheme,path,query
      makelinks.mailto.keep = path
      tags {
        link = TEXT
        link {
          current = 1
          typolink.parameter.data = parameters : allParams
        }
      }
    }
  }
  # remove class="bodytext" from paragraphs
  nonTypoTagStdWrap.encapsLines {
    addAttributes.P.class >
    addAttributes.P.class.setOnly >
  }
}

tt_content.text.20.parseFunc.tags.link.typolink {
  wrap = <span>|</span>
  ATagBeforeWrap = 1
}

lib.parseFunc_RTE.externalBlocks.table.stdWrap.HTMLparser.tags.table.fixAttrib.class.list = contenttable, alternatedtable

