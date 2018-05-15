tx_gridelements.setup.accordeon {
	title = Content-Element Akkordeon
	description = Erzeugt ein Akkordeon aus Content-Elementen.
	topLevelLayout = 1
    config {
		colCount = 1
		rowCount = 1
		rows {
			1 {
				columns {
					1 {
						name = Akkordeon Elemente
						colPos = 10
                        allowed = text,textpic,image,videoframe,media,gridelements_pi1
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
                <style type="array">
                    <TCEforms type="array">
                        <label>Grafischer Stil</label>
                        <config type="array">
                            <type>select</type>
                            <default>normal</default>
                            <items type="array">
                                <numIndex index="0" type="array">
                                    <numIndex index="0">Normal</numIndex>
                                    <numIndex index="1">normal</numIndex>
                                </numIndex>
                                <numIndex index="1" type="array">
                                    <numIndex index="0">Boxed - Flächen farbig gefüllt</numIndex>
                                    <numIndex index="1">flat</numIndex>
                                </numIndex>
                            </items>
                        </config>
                    </TCEforms>
                </style>
            </el>
        </ROOT>
    </T3DataStructure>
  	)
}