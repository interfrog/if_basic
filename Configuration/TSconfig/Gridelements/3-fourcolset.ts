tx_gridelements.setup.fourcolset {
	title = 4-spaltiges Element
	description = 4 Spalten mit vordefinierter Breite
	topLevelLayout = 1
    config {
		colCount = 4
		rowCount = 1
		rows {
			1 {
				columns {
					1 {
						name = Spalte 1
						colPos = 10
					}
					2 {
						name = Spalte 2
						colPos = 11
					}
                    3 {
                        name = Spalte 3
                        colPos = 12
                    }
                    4 {
                        name = Spalte 4
                        colPos = 13
                    }
				}
			}
		}
    }
    flexformDS (
    <T3DataStructure>
        <meta type="array">
        <langDisable>1</langDisable>
        </meta>
        <ROOT type="array">
            <el type="array">
                <nogap type="array">
                    <TCEforms type="array">
                        <label>Spaltenabstand deaktivieren</label>
                        <config type="array">
                            <type>check</type>
                        </config>
                    </TCEforms>
                </nogap>
            </el>
        </ROOT>
    </T3DataStructure>
  	)
}