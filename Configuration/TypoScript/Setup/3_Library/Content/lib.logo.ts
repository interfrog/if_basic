lib.logofallback = FILES
lib.logofallback {
    references {
         table = tx_ifthemeconfiguration_domain_model_themeconfiguration
         uid.field = uid
         fieldName = logofallback
    }
    renderObj = TEXT
    renderObj{
        data = file:current:publicUrl
    }            
}

lib.logo = CONTENT
lib.logo {
    table = tx_ifthemeconfiguration_domain_model_themeconfiguration
    select{
        pidInList.data = leveluid : 0
        max = 1
    }
    renderObj = COA
    renderObj{
        5 = FILES
        5 {
            references {
                table = tx_ifthemeconfiguration_domain_model_themeconfiguration
                uid.field = uid
                fieldName = logo
            }         
            renderObj = TEXT
            renderObj{
                data = file:current:publicUrl
                stdWrap.noTrimWrap = |src="|" |
            }
            stdWrap.ifEmpty.cObject < lib.logofallback
            stdWrap.ifEmpty.cObject.renderObj.stdWrap.noTrimWrap = |src="|" |             
        }
        7 = TEXT
        7 {
            field = logowidth
            stdWrap.noTrimWrap= |width="|" |
        }
        8 = TEXT
        8 {
            field = logoheight
            stdWrap.noTrimWrap= |height="|" |
        }
        10 < lib.logofallback
        10.renderObj.stdWrap.noTrimWrap = |onerror="this.onerror=null; this.src='|'" |
        stdWrap.noTrimWrap = |<a href="/" title="Zur Startseite"><img |></a>|
    }
}