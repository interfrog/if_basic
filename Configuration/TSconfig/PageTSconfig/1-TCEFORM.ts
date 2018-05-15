TCEFORM {

	tx_ifthemeconfiguration_domain_model_themeconfiguration {
		theme {
			addItems {
				if_basic = if_basic
			}
		}
	}

	tt_content {
		date.disabled = 1
		rowDescription.disabled = 1
		sectionIndex.disabled = 1
		linkToTop.disabled = 1
		editlock.disabled = 1
		subheader.disabled = 1
		rte_enabled.disabled = 1
		imageborder.disabled = 1
		image_compression.disabled = 1
		image_effects.disabled = 1
		layout {
			altLabels {
				0 = Default
				1 = Hintergrundfarbe: Farbe 1 (Standard)
				2 = Hintergrundfarbe: Farbe 2 (Standard)
				3 = Hintergrundfarbe: Farbe 3 (Standard)
			}
			addItems {
				4 = Hintergrundfarbe: Farbe 4 (Standard)
				5 = 1px Rahmen
			}
		}
		section_frame {
			removeItems = 1,5,6,10,11,12,20,21
			altLabels {
				0 = Bitte wählen Sie Ihr Layout
				66 = Reines Element ohne Standardisierten Rahmen
			}
			addItems {
				30 = Spezial: Button
				50 = Spezial: Bilder Gallery
				60 = Spezial: Bildbox mit Farboverlay (von links)
				61 = Spezial: Bildbox mit Farboverlay (von rechts)
				62 = Spezial: Bildbox mit Farboverlay (von oben)
				63 = Spezial: Bildbox mit Farboverlay (von unten)
				70 = Kein Abstand
				71 = Abstand nur Oben
				72 = Abstand nur Unten
			}
		}
		header_layout {
			removeItems = 1,5
			altLabels {
				0 = Kapitelüberschrift h2
				2 = Bereichsüberschrift h3
				3 = Zwischenüberschrift h4
				4 = Teilüberschrift h5 
			}
			addItems {
				6 = Seitenüberschrift h1 (SEO - nur einmal verwenden)
			}
		}
		menu_type {
			addItems {
				#specialmenu = Spezial: Beispielmenü
				20 = SEO-Übersicht
			}
		}
		imagecaption_position {
			addItems {
				block = Blocksatz
			}
		}
	}
}
