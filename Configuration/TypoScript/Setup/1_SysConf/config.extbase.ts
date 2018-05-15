config.tx_extbase {
    persistence {
        classes {
            Interfrog\IfThemeconfiguration\Domain\Model\ThemeConfiguration {
                subclasses {
                    if_basic = Interfrog\IfBasic\Domain\Model\ThemeConfiguration
                }
            }

            Interfrog\IfBasic\Domain\Model\ThemeConfiguration {
                mapping {
                    recordType = if_basic
                    tableName = tx_ifthemeconfiguration_domain_model_themeconfiguration
                }
            }
        }
    }
}
