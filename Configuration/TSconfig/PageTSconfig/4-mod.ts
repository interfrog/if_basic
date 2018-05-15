mod.SHARED {
	defaultLanguageFlag = de.gif
	defaultLanguageLabel = Deutsch
}

mod.wizards.newContentElement.wizardItems {
	common {
		elements {
            videoframe {
                title = Video-Frame-Element
                description = Erstellt ein Eingebettetes Video aus einer Quelle wie Youtube, Vimeo oder einfach als Iframe
                icon = ../typo3conf/ext/if_basic/Resources/Public/Icons/video.svg
                tt_content_defValues {
                    CType = videoframe
                }
            }
        }
    	show := addToList(videoframe)
    }
}