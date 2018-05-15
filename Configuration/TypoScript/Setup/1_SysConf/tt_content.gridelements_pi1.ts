tt_content.gridelements_pi1.20.10.setup {
	twocolset < lib.gridelements.defaultGridSetup
	twocolset {
		columns.default.renderObj >
		columns.default.renderObj =< tt_content
		cObject = FLUIDTEMPLATE
		cObject {
			templateName = TwoColSet
			layoutRootPaths.10 = EXT:{$config.extensionDirectory}/Resources/Private/Layouts/Content/
			partialRootPaths {
				0 = EXT:fluid_styled_content/Resources/Private/Partials/
				10 = EXT:{$config.extensionDirectory}/Resources/Private/Partials/Content/
			}
			templateRootPaths.10 = EXT:{$config.extensionDirectory}/Resources/Private/Templates/Content/
		}
	}
	threecolset < .twocolset
	threecolset.cObject.templateName = ThreeColSet
	fourcolset < .twocolset
	fourcolset.cObject.templateName = FourColSet
	fivecolset < .twocolset
	fivecolset.cObject.templateName = FiveColSet
	sixcolset < .twocolset
	sixcolset.cObject.templateName = SixColSet
	fullslider < .twocolset
	fullslider.cObject.templateName = FullSlider
	accordeon < .twocolset
	accordeon.cObject.templateName = Accordeon
}