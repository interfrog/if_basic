lib.menu.main = HMENU
lib.menu.main {
  #special = directory
  #special.value = {$config.mainNavigationPid}
  1 = TMENU
  1 {
    wrap = <ul class="Level1">|</ul>
    expAll = 1
    NO = 1
    NO.wrapItemAndSub = <li>|</li>
    ACT = 1
    ACT.wrapItemAndSub = <li class="active">|</li>
    IFSUB = 1
    IFSUB.wrapItemAndSub = <li class="dropdown">|</li>
    ACTIFSUB = 1
    ACTIFSUB.wrapItemAndSub = <li class="dropdown active">|</li>
  }
  2 < .1
  2.wrap = <ul class="submenu Level2">|</ul>
  3 < .1
  3.wrap = <ul class="submenu Level3">|</ul>
  4 < .1
  4.wrap = <ul class="submenu Level4">|</ul>
}

#lib.menu.main = HMENU
#lib.menu.main {
#  special = directory
#  special.value = {$config.mainNavigationPid}
#  1 = TMENU
#  1.noBlur = 1
#  1.wrap = <ul>|</ul>
#  1 {
#    NO = 1
#    NO {
#      wrapItemAndSub = <li>|</li>
#    }
#    ACT = 1
#    ACT {
#      ATagParams = class="active"
#      wrapItemAndSub = <li>|</li>
#    }
#  }
#}
