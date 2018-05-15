#
# Table structure for table 'pages'
#
CREATE TABLE pages (
	iconconfig varchar(255) DEFAULT '' NOT NULL,
    seotitle varchar(255) DEFAULT '' NOT NULL,
    robots varchar(255) DEFAULT '' NOT NULL,
    canonical varchar(255) DEFAULT '' NOT NULL,
    fblike varchar(255) DEFAULT '0' NOT NULL,
    twitter varchar(255) DEFAULT '0' NOT NULL,
    googleplus varchar(255) DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'pages_language_overlay'
#
CREATE TABLE pages_language_overlay (
    iconconfig varchar(255) DEFAULT '' NOT NULL,
    seotitle varchar(255) DEFAULT '' NOT NULL,
    robots varchar(255) DEFAULT '' NOT NULL,
    canonical varchar(255) DEFAULT '' NOT NULL,
    fblike varchar(255) DEFAULT '0' NOT NULL,
    twitter varchar(255) DEFAULT '0' NOT NULL,
    googleplus varchar(255) DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    subtitle varchar(255) DEFAULT '' NOT NULL,
    fullscreen tinyint(4) DEFAULT '0' NOT NULL,
    hidemobile tinyint(4) DEFAULT '0' NOT NULL,
    hidedesktop tinyint(4) DEFAULT '0' NOT NULL,
    url varchar(255) DEFAULT '' NOT NULL,
    sourcetype varchar(255) DEFAULT '' NOT NULL,
    ratio varchar(255) DEFAULT '' NOT NULL,
    autoplay tinyint(4) DEFAULT '0' NOT NULL,
    showrel tinyint(4) DEFAULT '0' NOT NULL,
    showinfo tinyint(4) DEFAULT '0' NOT NULL,
    videoloop tinyint(4) DEFAULT '0' NOT NULL,
);

CREATE TABLE tx_powermail_domain_model_field (
    labelposition varchar(255) DEFAULT '' NOT NULL,
    allowedmimetypes varchar(255) DEFAULT '' NOT NULL,
    multiple tinyint(4) DEFAULT '0' NOT NULL,
    preview tinyint(4) DEFAULT '0' NOT NULL,
    advancedprogress tinyint(4) DEFAULT '0' NOT NULL,
);

CREATE TABLE tx_ifthemeconfiguration_domain_model_themeconfiguration (
    mediamenupid int(11) DEFAULT '0' NOT NULL,
    maxwidth int(11) unsigned DEFAULT '0' NOT NULL,
    pagebg int(11) unsigned DEFAULT '0' NOT NULL,

    pagetitle varchar(255) DEFAULT '' NOT NULL,
    pagetitlecolor int(11) unsigned DEFAULT '0' NOT NULL,
    pagetitlefont int(11) unsigned DEFAULT '0' NOT NULL,
    pagetitlestyle varchar(255) DEFAULT 'normal' NOT NULL,
    pagetitleweight varchar(255) DEFAULT '400' NOT NULL,
    pagetitle2 varchar(255) DEFAULT '' NOT NULL,
    pagetitle2color int(11) unsigned DEFAULT '0' NOT NULL,
    pagetitle2font int(11) unsigned DEFAULT '0' NOT NULL,
    pagetitle2style varchar(255) DEFAULT 'normal' NOT NULL,
    pagetitle2weight varchar(255) DEFAULT '400' NOT NULL,

    mainmenutype varchar(255) DEFAULT 'standard' NOT NULL,

    defaulttext int(11) unsigned DEFAULT '0' NOT NULL,
    fontsize int(11) DEFAULT '14' NOT NULL,
    generalfont int(11) unsigned DEFAULT '0' NOT NULL,
    fontweight varchar(255) DEFAULT '400' NOT NULL,

    logo varchar(255) DEFAULT '' NOT NULL,
    logofallback varchar(255) DEFAULT '' NOT NULL,
    logowidth int(11) DEFAULT '0' NOT NULL,
    logoheight int(11) DEFAULT '0' NOT NULL,

    headerborderbottom int(11) unsigned DEFAULT '1' NOT NULL,
    headerbordercolor int(11) unsigned DEFAULT '0' NOT NULL,

    mediamenutext int(11) unsigned DEFAULT '0' NOT NULL,
    mediamenubackground int(11) unsigned DEFAULT '0' NOT NULL,
    mediamenuborder int(11) unsigned DEFAULT '0' NOT NULL,
    mediamenuhinttext int(11) unsigned DEFAULT '0' NOT NULL,
    mediamenuhintbackground int(11) unsigned DEFAULT '0' NOT NULL,

    headerbackground int(11) unsigned DEFAULT '0' NOT NULL,

    navbarbackground int(11) unsigned DEFAULT '0' NOT NULL,
    navtext int(11) unsigned DEFAULT '0' NOT NULL,
    navtexthover int(11) unsigned DEFAULT '0' NOT NULL,
    navtextactive int(11) unsigned DEFAULT '0' NOT NULL,
    navbackground int(11) unsigned DEFAULT '0' NOT NULL,
    navbackgroundhover int(11) unsigned DEFAULT '0' NOT NULL,
    navbackgroundactive int(11) unsigned DEFAULT '0' NOT NULL,
    nav2text int(11) unsigned DEFAULT '0' NOT NULL,
    nav2texthover int(11) unsigned DEFAULT '0' NOT NULL,
    nav2textactive int(11) unsigned DEFAULT '0' NOT NULL,
    nav2background int(11) unsigned DEFAULT '0' NOT NULL,
    nav2backgroundhover int(11) unsigned DEFAULT '0' NOT NULL,
    nav2backgroundactive int(11) unsigned DEFAULT '0' NOT NULL,

    offcanvasopener int(11) unsigned DEFAULT '0' NOT NULL,
    offcanvastext int(11) unsigned DEFAULT '0' NOT NULL,
    offcanvasbackground int(11) unsigned DEFAULT '0' NOT NULL,
    offcanvasactive int(11) unsigned DEFAULT '0' NOT NULL,
    footertext int(11) unsigned DEFAULT '0' NOT NULL,
    footerbackground int(11) unsigned DEFAULT '0' NOT NULL,

    h1 int(11) unsigned DEFAULT '0' NOT NULL,
    h1font int(11) unsigned DEFAULT '0' NOT NULL,
    h1style varchar(255) DEFAULT 'normal' NOT NULL,
    h1weight varchar(255) DEFAULT '400' NOT NULL,
    h2 int(11) unsigned DEFAULT '0' NOT NULL,
    h2font int(11) unsigned DEFAULT '0' NOT NULL,
    h2style varchar(255) DEFAULT 'normal' NOT NULL,
    h2weight varchar(255) DEFAULT '400' NOT NULL,
    h3 int(11) unsigned DEFAULT '0' NOT NULL,
    h3font int(11) unsigned DEFAULT '0' NOT NULL,
    h3style varchar(255) DEFAULT 'normal' NOT NULL,
    h3weight varchar(255) DEFAULT '400' NOT NULL,
    h4 int(11) unsigned DEFAULT '0' NOT NULL,
    h4font int(11) unsigned DEFAULT '0' NOT NULL,
    h4style varchar(255) DEFAULT 'normal' NOT NULL,
    h4weight varchar(255) DEFAULT '400' NOT NULL,
    h5 int(11) unsigned DEFAULT '0' NOT NULL,
    h5font int(11) unsigned DEFAULT '0' NOT NULL,
    h5style varchar(255) DEFAULT 'normal' NOT NULL,
    h5weight varchar(255) DEFAULT '400' NOT NULL,

    formfieldbackground int(11) unsigned DEFAULT '0' NOT NULL,
    formborder int(11) unsigned DEFAULT '0' NOT NULL,
    formborderfocus int(11) unsigned DEFAULT '0' NOT NULL,
    formbutton int(11) unsigned DEFAULT '0' NOT NULL,
    formbuttonhover int(11) unsigned DEFAULT '0' NOT NULL,

    link int(11) unsigned DEFAULT '0' NOT NULL,
    linkhover int(11) unsigned DEFAULT '0' NOT NULL,    

    buttonbackground int(11) unsigned DEFAULT '0' NOT NULL,
    buttontext int(11) unsigned DEFAULT '0' NOT NULL,
    buttonbackgroundhover int(11) unsigned DEFAULT '0' NOT NULL,
    buttontexthover int(11) unsigned DEFAULT '0' NOT NULL,

    overlayboxtext int(11) unsigned DEFAULT '0' NOT NULL,    
    overlayboxbackground int(11) unsigned DEFAULT '0' NOT NULL,
    divider int(11) unsigned DEFAULT '0' NOT NULL,
    accopenerbackground int(11) unsigned DEFAULT '0' NOT NULL,
    accopenertext int(11) unsigned DEFAULT '0' NOT NULL,
    accopenerhover int(11) unsigned DEFAULT '0' NOT NULL,
    accfoldoutbackground int(11) unsigned DEFAULT '0' NOT NULL,
    accfoldouttext int(11) unsigned DEFAULT '0' NOT NULL,
    sliderheightdesktop int(11) unsigned DEFAULT '0' NOT NULL,
    sliderheighttablet int(11) unsigned DEFAULT '0' NOT NULL,
    sliderheightmobile int(11) unsigned DEFAULT '0' NOT NULL,
    copyrighttheme varchar(255) DEFAULT 'bright' NOT NULL,
);