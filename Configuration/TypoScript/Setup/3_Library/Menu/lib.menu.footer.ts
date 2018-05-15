lib.menu.footer = HMENU
lib.menu.footer {
  special = directory
  special.value = {$config.footerNavigationPid}
  wrap = <nav>|</nav>
  1 = TMENU
  1 {
    noBlur = 1
    wrap = <ul>|</ul>
    NO = 1
    NO {
      wrapItemAndSub = <li>|</li>
    }
    ACT = 1
    ACT {
      wrapItemAndSub = <li>|</li>
      ATagParams = class="active"
    }
  }
}