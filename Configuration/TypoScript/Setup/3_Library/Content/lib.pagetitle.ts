lib.pagetitle = CONTENT
lib.pagetitle{
  table = tx_ifthemeconfiguration_domain_model_themeconfiguration
  select {
    pidInList.data = leveluid : 0
    max = 1
  }
  renderObj = COA
  renderObj {
    5 = TEXT
    5 {
      required = 1
      field = pagetitle
      wrap = <span class="main">|</span>
    }
    10 = TEXT
    10 {
      required=1
      field=pagetitle2
      wrap = <span class="sub">|</span>
    }
  }
}