lib.mainmenutype = CONTENT
lib.mainmenutype {
	table = tx_ifthemeconfiguration_domain_model_themeconfiguration
	select {
		pidInList.data = leveluid : 0
		selectFields = mainmenutype
		max = 1
	}
	renderObj = TEXT
	renderObj {
		field = mainmenutype
	}
}