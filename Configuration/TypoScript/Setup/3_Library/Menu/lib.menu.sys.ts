lib.menu.sys = HMENU
lib.menu.sys {
	special = directory
	special.value = {$config.sysNavigationPid}
	1 = TMENU
	1.noBlur = 1
	1.wrap = <ul>|</ul>
	1 {
		NO = 1
		NO {
			wrapItemAndSub = <li>|</li>
		}
		ACT = 1
		ACT {
			ATagParams = class="active"
			wrapItemAndSub = <li>|</li>
		}
	}
}