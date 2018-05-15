tt_content.gridelements_pi1.20.10.setup {
	twocolset < lib.gridelements.defaultGridSetup
	twocolset {
		cObject = FLUIDTEMPLATE
		cObject {
			file = {$config.pluginPath}/gridelements/twoColSet.html
			variables {
				header < lib.stdheader
				layout = TEXT
				layout.field = layout
			}
		}
	}
	threecolset < .twocolset
	threecolset {
		cObject {
			file = {$config.pluginPath}/gridelements/threeColSet.html
		}
	}
	fourcolset < .twocolset
	fourcolset {
		cObject {
			file = {$config.pluginPath}/gridelements/fourColSet.html
		}
	}
	fivecolset < .twocolset
	fivecolset {
		cObject {
			file = {$config.pluginPath}/gridelements/fiveColSet.html
		}
	}
	sixcolset < .twocolset
	sixcolset {
		cObject {
			file = {$config.pluginPath}/gridelements/sixColSet.html
		}
	}
	fullslider < .twocolset
	fullslider {
		cObject {
			file = {$config.pluginPath}/gridelements/fullSlider.html
		}
	}
	accordeon < .twocolset
	accordeon {
		cObject {
			file = {$config.pluginPath}/gridelements/accordeon.html
		}
	}
}