lib.mediaMenuPid = CONTENT
lib.mediaMenuPid {
	table = tx_ifthemeconfiguration_domain_model_themeconfiguration
	select {
		pidInList.data = leveluid : 0
		max = 1
	}
	renderObj = TEXT
	renderObj {
    	field = mediamenupid
	}
}

lib.menu.media = HMENU
lib.menu.media {
	special = directory
	special.value.cObject < lib.mediaMenuPid
	1 = TMENU
	1 {
		wrap = <ul>|</ul>
		NO = 1
		NO {
			doNotLinkIt = 1
			wrapItemAndSub = <li>|</li>
			stdWrap.cObject = TEXT
			stdWrap.cObject {
				field = title
				typolink {
					parameter.field = uid
					ATagParams = class="noIcon"
				}
			}
			stdWrap.override.stdWrap.cObject = COA
			stdWrap.override.stdWrap.cObject {
				if.isTrue.field = iconconfig
				10 = TEXT
				10.value = <i class="{field:iconconfig}"></i>
				10.insertData = 1
				20 = TEXT
				20.field = title
				20.wrap = <div class="hint">|</div>
				stdWrap.typolink {
					parameter.field = uid
					ATagParams = class="icon"
				}
			}
		}
	}
}