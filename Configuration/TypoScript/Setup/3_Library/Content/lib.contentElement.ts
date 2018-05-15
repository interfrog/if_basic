lib.contentElement {
	layoutRootPaths.10 = EXT:{$config.extensionDirectory}/Resources/Private/Layouts/Content/
	partialRootPaths.10 = EXT:{$config.extensionDirectory}/Resources/Private/Partials/Content/
	templateRootPaths.10 = EXT:{$config.extensionDirectory}/Resources/Private/Templates/Content/
	variables {
		hideOnMobile = TEXT
		hideOnMobile {
			value = hideOnMobile
			noTrimWrap = || |
			if.isTrue.field = hidemobile
		}
		hideOnDesktop = TEXT
		hideOnDesktop {
			value = hideOnDesktop
			noTrimWrap = || |
			if.isTrue.field = hidedesktop
		}
	}
}