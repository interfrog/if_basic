tx_gridelements.setup.fullslider {
	title = Content-Element Slider
	description = Erzeugt einen Slider aus Content-Elementen.
	topLevelLayout = 1
    config {
		colCount = 1
		rowCount = 1
		rows {
			1 {
				columns {
					1 {
						name = Slide Elemente
						colPos = 10
                        allowed = text,textpic,image
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
                <mode type="array">
                    <TCEforms type="array">
                        <label>Modus</label>
                        <config type="array">
                            <type>select</type>
                            <default>background</default>
                            <items type="array">
                                <numIndex index="0" type="array">
                                    <numIndex index="0">Bilder als Hintergrundbilder</numIndex>
                                    <numIndex index="1">background</numIndex>
                                </numIndex>
                                <numIndex index="1" type="array">
                                    <numIndex index="0">Bilder als Image-Tag</numIndex>
                                    <numIndex index="1">inline</numIndex>
                                </numIndex>
                            </items>
                        </config>
                    </TCEforms>
                </mode>
                <slideSpeed type="array">
                    <TCEforms type="array">
                        <label>Geschwindigkeit der Slidebewegung</label>
                        <config>
                            <type>input</type>
                            <size>20</size>
                            <max>30</max>
                            <eval>trim</eval>
                        </config>
                    </TCEforms>
                </slideSpeed>
                <autoplay type="array">
                    <TCEforms type="array">
                        <label>Autoplay aktivieren</label>
                        <config>
                            <type>check</type>
                            <default>1</default>
                        </config>
                    </TCEforms>
                </autoplay>
                <autoplaySpeed type="array">
                    <TCEforms type="array">
                        <label>Autoplay - Geschwindigkeit</label>
                        <config>
                            <type>input</type>
                            <size>20</size>
                            <max>30</max>
                            <eval>trim</eval>
                        </config>
                    </TCEforms>
                </autoplaySpeed>
            </el>
        </ROOT>
    </T3DataStructure>
  	)
}