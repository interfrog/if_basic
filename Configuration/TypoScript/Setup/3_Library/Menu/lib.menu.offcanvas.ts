lib.menu.offcanvas = COA
lib.menu.offcanvas {
	10 = HMENU
	10 {
		1 = TMENU
		1 {
			expAll = 1
			wrap = <ul>|</ul>
			NO = 1
			NO {
				wrapItemAndSub = <li>|</li>
			}
			ACT = 1
			ACT {
				wrapItemAndSub = <li class="active">|</li>	
			}
      IFSUB < .NO
      IFSUB {
        linkWrap = | <a href="#" class="subOpener" data-status="close"><i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a>
      }
      ACTIFSUB < .ACT
      ACTIFSUB {
        linkWrap = | <a href="#" class="subOpener" data-status="open"><i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a>
      }
		}
		2 < .1
		3 < .1
		4 < .1
	}
	20 = TEXT
	20.value = <hr>
	30 < .10
  30.special = directory
	30.special.value.cObject < lib.mediaMenuPid
  30.special.value.override.data = levelfield:-1,mediamenupid,slide
}