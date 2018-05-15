lib.copyrighttheme = CONTENT
lib.copyrighttheme {
	table = tx_ifthemeconfiguration_domain_model_themeconfiguration
	select{
		pidInList.data = leveluid : 0
		selectFields = copyrighttheme
		max = 1
	}
	renderObj = TEXT
	renderObj {
		field = copyrighttheme
	}
}