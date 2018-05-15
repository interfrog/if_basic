tx_gridelements.setup.twocolset {
	title = 2-spaltiges Element
	description = Breite wählbar
    config {
		colCount = 2
		rowCount = 1
		rows {
			1 {
				columns {
					1 {
						name = Linke Spalte
						colPos = 10
					}
					2 {
						name = Rechte Spalte
						colPos = 11
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
                <colSetUp type="array">
                    <TCEforms type="array">
                        <label>Spaltenaufteilung</label>
                        <config type="array">
                            <type>select</type>
                            <default>5050</default>
                            <items type="array">
                                <numIndex index="0" type="array">
                                    <numIndex index="0">25% / 75%</numIndex>
                                    <numIndex index="1">2575</numIndex>
                                </numIndex>
                                <numIndex index="1" type="array">
                                    <numIndex index="0">33% / 66%</numIndex>
                                    <numIndex index="1">3366</numIndex>
                                </numIndex>
                                <numIndex index="2" type="array">
                                    <numIndex index="0">50% / 50%</numIndex>
                                    <numIndex index="1">5050</numIndex>
                                </numIndex>
                                <numIndex index="3" type="array">
                                    <numIndex index="0">66% / 33%</numIndex>
                                    <numIndex index="1">6633</numIndex>
                                </numIndex>
                                <numIndex index="4" type="array">
                                    <numIndex index="0">75% / 25%</numIndex>
                                    <numIndex index="1">7525</numIndex>
                                </numIndex>
                            </items>
                        </config>
                    </TCEforms>
                </colSetUp>
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