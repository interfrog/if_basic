<?php
namespace Interfrog\IfBasic\Domain\Model;

/**
 * ThemeConfiguration model for default ThemeConfiguration
 *
 * @package TYPO3
 * @subpackage tx_ifthemeconfiguration
 */
class ThemeConfiguration extends \Interfrog\IfThemeconfiguration\Domain\Model\ThemeConfiguration {

    /**
    *pid
    *
    *@var int
    */
    protected $maxwidth;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $pagebg;

    /**
    *pid
    *
    *@var int
    */
    protected $mediamenupid;

    /**
    *pagetitle          
    *
    *@var string
    */
    protected $pagetitle;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $pagetitlecolor;

    /**
    *determines pagetitle font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $pagetitlefont;

    /**
    *pagetitlestyle          
    *
    *@var string
    */
    protected $pagetitlestyle;

    /**
    *pagetitleweight          
    *
    *@var string
    */
    protected $pagetitleweight;

    /**
    *pagetitle 2nd line         
    *
    *@var string
    */
    protected $pagetitle2;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $pagetitle2color;

    /**
    *determines pagetitle2 font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $pagetitle2font;

    /**
    *pagetitle2style          
    *
    *@var string
    */
    protected $pagetitle2style;

    /**
    *pagetitle2weight          
    *
    *@var string
    */
    protected $pagetitle2weight;  

    /**
	*determines css-class of mainMenu/nav
	*
	*@var string
	*/
	protected $mainmenutype;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $defaulttext;        
     
    /**
    *fontsize in px
    *
    *@var int
    */
    protected $fontsize;

    /**
    *determines general font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $generalfont;

    /**
    *fontweight          
    *
    *@var string
    */
    protected $fontweight;

    /**
    *svg logo
    *
    *@var string
    */
    protected $logo;

    /**
    *png/jpg/jpeg
    *
    *@var string
    */
    protected $logofallback;

    /**
    *width of logo
    *
    *@var int
    */
    protected $logowidth;

    /**
    *height of logo
    *
    *@var int
    */
    protected $logoheight;

    /**
    *heade rborder active?
    *
    *@var int
    */
    protected $headerborderbottom;

    /**
    *color of headers border
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    protected $headerbordercolor;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $mediamenutext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $mediamenubackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $mediamenuborder;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $mediamenuhinttext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $mediamenuhintbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $headerbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $navbarbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $navtext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $navtexthover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $navtextactive;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $navbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $navbackgroundhover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $navbackgroundactive;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $nav2text;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $nav2texthover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $nav2textactive;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $nav2background;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $nav2backgroundhover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $nav2backgroundactive;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $offcanvasopener;
    
    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $offcanvasbackground;
 
     /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $offcanvastext;  

     /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $offcanvasactive;   
    
    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $footertext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $footerbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $h1;

    /**
    *font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $h1font;

    /**
    *h1style          
    *
    *@var string
    */
    protected $h1style;

    /**
    *h1weight          
    *
    *@var string
    */
    protected $h1weight;
    
    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $h2;

    /**
    *font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $h2font;

    /**
    *h2style          
    *
    *@var string
    */
    protected $h2style;

    /**
    *h2weight          
    *
    *@var string
    */
    protected $h2weight;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $h3;

    /**
    *font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $h3font;

    /**
    *h3style          
    *
    *@var string
    */
    protected $h3style;

    /**
    *h3weight          
    *
    *@var string
    */
    protected $h3weight;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $h4;

    /**
    *font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $h4font;

    /**
    *h4style          
    *
    *@var string
    */
    protected $h4style;

    /**
    *h4weight          
    *
    *@var string
    */
    protected $h4weight;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $h5;

    /**
    *font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $h5font;

    /**
    *h5style          
    *
    *@var string
    */
    protected $h5style;

    /**
    *h5weight          
    *
    *@var string
    */
    protected $h5weight;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $formfieldbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $formborder;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $formborderfocus;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $formbutton;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $formbuttonhover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $link;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $linkhover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $buttonbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $buttontext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $buttonbackgroundhover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $buttontexthover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $overlayboxtext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $overlayboxbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $divider;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $accopenerbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $accopenertext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $accopenerhover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $accfoldoutbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $accfoldouttext;

    /**
    *pid
    *
    *@var int
    */
    protected $sliderheightdesktop;

    /**
    *pid
    *
    *@var int
    */
    protected $sliderheighttablet;

    /**
    *pid
    *
    *@var int
    */
    protected $sliderheightmobile;

    /**
    *copyrightheme
    *
    *@var string
    */
    protected $copyrighttheme;

	/**
	*__construct
	*
        *@param void
	*@return void
	*/

	public function __construct(){
    }

    /**
    *get the maxwidth
    *
    *@param void
    *@return int maxwidth
    */
    public function getMaxwidth(){
        return $this->maxwidth;
    }

    /**
    *set the maxwidth
    *
    *@param int $maxwidth
    *@return void
    */
    public function setMaxwidth($maxwidth){
        $this->maxwidth=$maxwidth;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getPagebg(){
        return $this->pagebg;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $pagebg
    * @return void
    */
    public function setPagebg($pagebg){
        $this->pagebg=$pagebg;
    }

    /**
    *get the pid
    *
    *@param void
    *@return int mediamenupid
    */
    public function getMediamenupid(){
        return $this->mediamenupid;
    }

    /**
    *set the pid
    *
    *@param int $red
    *@return void
    */
    public function setMediamenupid($mediamenupid){
        $this->mediamenupid=$mediamenupid;
    }
    
    /**
    *returns the pagetitle
    *
    *@return string
    */
    public function getPagetitle(){
        return $this->pagetitle;
    }

    /**
    *set the pagetitle
    *
    *@param string $pagetitle
    *@return void
    */
    public function setPagetitle($pagetitle){
        $this->pagetitle=$pagetitle;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getPagetitlecolor(){
        return $this->pagetitlecolor;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $pagetitlecolor
    * @return void
    */
    public function setPagetitlecolor($pagetitlecolor){
        $this->pagetitlecolor=$pagetitlecolor;
    }

    /**
    *returns pagetitle font
    *
    *@return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getPagetitlefont(){
        return $this->pagetitlefont;
    }

    /**
    *set the pagetitlefont
    *
    *@param Interfrog\IfThemeconfiguration\Domain\Model\Font $pagetitlefont
    *@return void
    */
    public function setPagetitlefont($pagetitlefont){
        $this->pagetitlefont=$pagetitlefont;
    }

    /**
    *returns the pagetitlestyle
    *
    *@return string
    */
    public function getPagetitlestyle(){
        return $this->pagetitlestyle;
    }

    /**
    *set the pagetitlestyle
    *
    *@param string $pagetitlestyle
    *@return void
    */
    public function setPagetitlestyle($pagetitlestyle){
        $this->pagetitlestyle=$pagetitlestyle;
    }

    /**
    *returns the pagetitleweight
    *
    *@return string
    */
    public function getPagetitleweight(){
        return $this->pagetitleweight;
    }

    /**
    *set the pagetitleweight
    *
    *@param string $pagetitleweight
    *@return void
    */
    public function setPagetitleweight($pagetitleweight){
        $this->pagetitleweight=$pagetitleweight;
    }

     /**
    *returns the second line of pagetitle
    *
    *@return string
    */
    public function getPagetitle2(){
        return $this->pagetitle2;
    }

    /**
    *set the second line of pagetitle
    *
    *@param string $pagetitle2
    *@return void
    */
    public function setPagetitle2($pagetitle2){
        $this->pagetitle2=$pagetitle2;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getPagetitle2color(){
        return $this->pagetitle2color;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $pagetitle2color
    * @return void
    */
    public function setPagetitle2color($pagetitle2color){
        $this->pagetitle2color=$pagetitle2color;
    }
    
    /**
    *returns pagetitle2 font
    *
    *@return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getPagetitle2font(){
        return $this->pagetitle2font;
    }

    /**
    *set the pagetitle2font
    *
    *@param Interfrog\IfThemeconfiguration\Domain\Model\Font $pagetitle2font
    *@return void
    */
    public function setPagetitle2font($pagetitle2font){
        $this->pagetitle2font=$pagetitle2font;
    }

    /**
    *returns the pagetitle2style
    *
    *@return string
    */
    public function getPagetitle2style(){
        return $this->pagetitle2style;
    }

    /**
    *set the pagetitle2style
    *
    *@param string $pagetitle2style
    *@return void
    */
    public function setPagetitle2style($pagetitle2style){
        $this->pagetitle2style=$pagetitle2style;
    }

    /**
    *returns the pagetitle2weight
    *
    *@return string
    */
    public function getPagetitle2weight(){
        return $this->pagetitle2weight;
    }

    /**
    *set the pagetitle2weight
    *
    *@param string $pagetitle2weight
    *@return void
    */
    public function setPagetitle2weight($pagetitle2weight){
        $this->pagetitle2weight=$pagetitle2weight;
    }   

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getDefaulttext(){
        return $this->defaulttext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $defaulttext
    * @return void
    */
    public function setDefaulttext($defaulttext){
        $this->defaulttext=$defaulttext;
    }    
    
    /**
    *set the fontsize part
    *
    *@param int $fontsize
    *@return void
    */
    public function setFontsize($fontsize){
        $this->fontsize=$fontsize;
    }

    /**
    *get the fontsize part
    *
    *@param void
    *@return int fontsize
    */
    public function getFontsize(){
        return $this->fontsize;
    }

    /**
    *returns general font
    *
    *@return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getGeneralfont(){
        return $this->generalfont;
    }

    /**
    *set the generalfont
    *
    *@param Interfrog\IfThemeconfiguration\Domain\Model\Font $generalfont
    *@return void
    */
    public function setGeneralfont($generalfont){
        $this->generalfont=$generalfont;
    }

    /**
    *returns the fontweight
    *
    *@return string
    */
    public function getFontweight(){
        return $this->fontweight;
    }

    /**
    *set the fontweight
    *
    *@param string $fontweight
    *@return void
    */
    public function setFontweight($fontweight){
        $this->fontweight=$fontweight;
    }
   
    /**
    * returns the mainmenutype
    * 
    * @param void
    * @return string type of mainMenu
    */
    public function getMainmenutype(){
        return $this->mainmenutype;
    }

    /**
    * set the mainmenutype
    * 
    * @param string $mainmenutype the new mainmenutype
    * @return void
    */
    public function setMainmenutype($mainmenutype){
        $this->mainmenutype=$mainmenutype;
    }

    /**
    * returns the logo
    * 
    * @param void
    * @return string logo
    */
    public function getLogo(){
        return $this->logo;
    }
        
    /**
    * set the logo
    * 
    * @param string $logo the new logo
    * @return void
    */
    public function setLogo($logo){
        $this->logo=$logo;
    }

    /**
    * returns the logofallback
    * 
    * @param void
    * @return string logo
    */
    public function getLogofallback(){
        return $this->logofallback;
    }
        
    /**
    * set the logofallback
    * 
    * @param string $logofallback the new logofallback
    * @return void
    */
    public function setLogofallback($logofallback){
        $this->logofallback=$logofallback;
    }

    /**
    *get the logo width
    *
    *@param void
    *@return int logowidth
    */
    public function getLogowidth(){
        return $this->logowidth;
    }

    /**
    *set the logo width
    *
    *@param int $red
    *@return void
    */
    public function setLogowidth($logowidth=0){
        $this->logowidth=$logowidth;
    }

    /**
    *get the logo height
    *
    *@param void
    *@return int logoheight
    */
    public function getLogoheight(){
        return $this->logoheight;
    }

    /**
    *set the logo height
    *
    *@param int $logoheight
    *@return void
    */
    public function setLogoheight($logoheight=0){
        $this->logoheight=$logoheight;
    }

    /**
    * active border-bottom of header
    * 
    * @param void
    * @return int
    */
    public function getHeaderborderbottom(){
        return $this->headerborderbottom;
    }
        
    /**
    * set the color
    * 
    * @param int $headerborderbottom
    * @return void
    */
    public function setHeaderborderbottom($headerborderbottom){
        $this->headerborderbottom=$headerborderbottom;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getHeaderbordercolor(){
        return $this->headerbordercolor;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $headerbordercolor
    * @return void
    */
    public function setHeaderbordercolor($headerbordercolor){
        $this->headerbordercolor=$headerbordercolor;
    }


    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getMediamenutext(){
        return $this->mediamenutext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $mediamenutext
    * @return void
    */
    public function setMediamenutext($mediamenutext){
        $this->mediamenutext=$mediamenutext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getMediamenubackground(){
        return $this->mediamenubackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $mediamenubackground
    * @return void
    */
    public function setMediamenubackground($mediamenubackground){
        $this->mediamenubackground=$mediamenubackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getMediamenuborder(){
        return $this->mediamenuborder;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $mediamenuborder
    * @return void
    */
    public function setMediamenuborder($mediamenuborder){
        $this->mediamenuborder=$mediamenuborder;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getMediamenuhinttext(){
        return $this->mediamenuhinttext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $mediamenuhinttext
    * @return void
    */
    public function setMediamenuhinttext($mediamenuhinttext){
        $this->mediamenuhinttext=$mediamenuhinttext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getmediamenuhintbackground(){
        return $this->mediamenuhintbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $mediamenuhintbackground
    * @return void
    */
    public function setMediamenuhintbackground($mediamenuhintbackground){
        $this->mediamenuhintbackground=$mediamenuhintbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getHeaderbackground(){
        return $this->headerbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $headerbackground
    * @return void
    */
    public function setHeaderbackground($headerbackground){
        $this->headerbackground=$headerbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNavbarbackground(){
        return $this->navbarbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $navbarbackground
    * @return void
    */
    public function setNavbarbackground($navbarbackground){
        $this->navbarbackground=$navbarbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNavtext(){
        return $this->navtext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $navtext
    * @return void
    */
    public function setNavtext($navtext){
        $this->navtext=$navtext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNavtexthover(){
        return $this->navtexthover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $navtexthover
    * @return void
    */
    public function setNavtexthover($navtexthover){
        $this->navtexthover=$navtexthover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNavtextactive(){
        return $this->navtextactive;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $navtextactive
    * @return void
    */
    public function setNavtextactive($navtextactive){
        $this->navtextactive=$navtextactive;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNavbackground(){
        return $this->navbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $navbackground
    * @return void
    */
    public function setNavbackground($navbackground){
        $this->navbackground=$navbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNavbackgroundhover(){
        return $this->navbackgroundhover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $navbackgroundhover
    * @return void
    */
    public function setNavbackgroundhover($navbackgroundhover){
        $this->navbackgroundhover=$navbackgroundhover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNavbackgroundactive(){
        return $this->navbackgroundactive;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $navbackgroundactive
    * @return void
    */
    public function setNavbackgroundactive($navbackgroundactive){
        $this->navbackgroundactive=$navbackgroundactive;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNav2text(){
        return $this->nav2text;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $nav2text
    * @return void
    */
    public function setNav2text($nav2text){
        $this->nav2text=$nav2text;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNav2texthover(){
        return $this->nav2texthover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $nav2texthover
    * @return void
    */
    public function setNav2texthover($nav2texthover){
        $this->nav2texthover=$nav2texthover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNav2textactive(){
        return $this->nav2textactive;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $nav2textactive
    * @return void
    */
    public function setNav2textactive($nav2textactive){
        $this->nav2textactive=$nav2textactive;
    }

     /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNav2background(){
        return $this->nav2background;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $nav2background
    * @return void
    */
    public function setNav2background($nav2background){
        $this->nav2background=$nav2background;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNav2backgroundhover(){
        return $this->nav2backgroundhover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $nav2backgroundhover
    * @return void
    */
    public function setNav2backgroundhover($nav2backgroundhover){
        $this->nav2backgroundhover=$nav2backgroundhover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNav2backgroundactive(){
        return $this->nav2backgroundactive;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $nav2backgroundactive
    * @return void
    */
    public function setNav2backgroundactive($nav2backgroundactive){
        $this->nav2backgroundactive=$nav2backgroundactive;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getOffcanvasopener(){
        return $this->offcanvasopener;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $offcanvasopener
    * @return void
    */
    public function setOffcanvasopener($offcanvasopener){
        $this->offcanvasopener=$offcanvasopener;
    }    

     /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getOffcanvasbackground(){
        return $this->offcanvasbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $offcanvasbackground
    * @return void
    */
    public function setOffcanvasbackground($offcanvasbackground){
        $this->offcanvasbackground=$offcanvasbackground;
    }    
 
      /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getOffcanvastext(){
        return $this->offcanvastext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $offcanvastext
    * @return void
    */
    public function setOffcanvastext($offcanvastext){
        $this->offcanvastext=$offcanvastext;
    }   

      /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getOffcanvasactive(){
        return $this->offcanvasactive;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $offcanvasactive
    * @return void
    */
    public function setOffcanvasactive($offcanvasactive){
        $this->offcanvasactive=$offcanvasactive;
    }     
    
    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFootertext(){
        return $this->footertext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $footertext
    * @return void
    */
    public function setFootertext($footertext){
        $this->footertext=$footertext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFooterbackground(){
        return $this->footerbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $footerbackground
    * @return void
    */
    public function setFooterbackground($footerbackground){
        $this->footerbackground=$footerbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getH1(){
        return $this->h1;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setH1($h1){
        $this->h1=$h1;
    }

    /**
    * h1font
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getH1font(){
        return $this->h1font;
    }

    /**
    * set the h1font
    *
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Font $h1font
    * @return void
    */
    public function setH1font($h1font){
        $this->h1font=$h1font;
    }

    /**
    *returns the h1style
    *
    *@return string
    */
    public function getH1style(){
        return $this->h1style;
    }

    /**
    *set the h1style
    *
    *@param string $h1style
    *@return void
    */
    public function setH1style($h1style){
        $this->h1style=$h1style;
    }

    /**
    *returns the h1weight
    *
    *@return string
    */
    public function getH1weight(){
        return $this->h1weight;
    }

    /**
    *set the h1weight
    *
    *@param string $h1weight
    *@return void
    */
    public function setH1weight($h1weight){
        $this->h1weight=$h1weight;
    } 
    
    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getH2(){
        return $this->h2;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setH2($h2){
        $this->h2=$h2;
    }

    /**
    * h2font
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getH2font(){
        return $this->h2font;
    }

    /**
    * set the h2font
    *
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Font $h2font
    * @return void
    */
    public function setH2font($h2font){
        $this->h2font=$h2font;
    }

    /**
    *returns the h2style
    *
    *@return string
    */
    public function getH2style(){
        return $this->h2style;
    }

    /**
    *set the h2style
    *
    *@param string $h2style
    *@return void
    */
    public function setH2style($h2style){
        $this->h2style=$h2style;
    }

    /**
    *returns the h2weight
    *
    *@return string
    */
    public function getH2weight(){
        return $this->h2weight;
    }

    /**
    *set the h2weight
    *
    *@param string $h2weight
    *@return void
    */
    public function setH2weight($h2weight){
        $this->h2weight=$h2weight;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getH3(){
        return $this->h3;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setH3($h3){
        $this->h3=$h3;
    }

    /**
    * h3font
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getH3font(){
        return $this->h3font;
    }

    /**
    * set the h3font
    *
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Font $h3font
    * @return void
    */
    public function setH3font($h3font){
        $this->h3font=$h3font;
    }

    /**
    *returns the h3style
    *
    *@return string
    */
    public function getH3style(){
        return $this->h3style;
    }

    /**
    *set the h3style
    *
    *@param string $h3style
    *@return void
    */
    public function setH3style($h3style){
        $this->h3style=$h3style;
    }

    /**
    *returns the h3weight
    *
    *@return string
    */
    public function getH3weight(){
        return $this->h3weight;
    }

    /**
    *set the h3weight
    *
    *@param string $h3weight
    *@return void
    */
    public function setH3weight($h3weight){
        $this->h3weight=$h3weight;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getH4(){
        return $this->h4;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setH4($h4){
        $this->h4=$h4;
    }

    /**
    * h4font
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getH4font(){
        return $this->h4font;
    }

    /**
    * set the h4font
    *
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Font $h4font
    * @return void
    */
    public function setH4font($h4font){
        $this->h4font=$h4font;
    }

    /**
    *returns the h4style
    *
    *@return string
    */
    public function getH4style(){
        return $this->h4style;
    }

    /**
    *set the h4style
    *
    *@param string $h4style
    *@return void
    */
    public function setH4style($h4style){
        $this->h4style=$h4style;
    }

    /**
    *returns the h4weight
    *
    *@return string
    */
    public function getH4weight(){
        return $this->h4weight;
    }

    /**
    *set the h4weight
    *
    *@param string $h4weight
    *@return void
    */
    public function setH4weight($h4weight){
        $this->h4weight=$h4weight;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getH5(){
        return $this->h5;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setH5($h5){
        $this->h5=$h5;
    }

    /**
    * h5font
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getH5font(){
        return $this->h5font;
    }

    /**
    * set the h5font
    *
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Font $h5font
    * @return void
    */
    public function setH5font($h5font){
        $this->h5font=$h5font;
    }

    /**
    *returns the h5style
    *
    *@return string
    */
    public function getH5style(){
        return $this->h5style;
    }

    /**
    *set the h5style
    *
    *@param string $h5style
    *@return void
    */
    public function setH5style($h5style){
        $this->h5style=$h5style;
    }

    /**
    *returns the h5weight
    *
    *@return string
    */
    public function getH5weight(){
        return $this->h5weight;
    }

    /**
    *set the h5weight
    *
    *@param string $h5weight
    *@return void
    */
    public function setH5weight($h5weight){
        $this->h5weight=$h5weight;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFormfieldbackground(){
        return $this->formfieldbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $formfieldbackground
    * @return void
    */
    public function setFormfieldbackground($formfieldbackground){
        $this->formfieldbackground=$formfieldbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFormborder(){
        return $this->formborder;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $formborder
    * @return void
    */
    public function setFormborder($formborder){
        $this->formborder=$formborder;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFormborderfocus(){
        return $this->formborderfocus;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $formborderfocus
    * @return void
    */
    public function setFormborderfocus($formborderfocus){
        $this->formborderfocus=$formborderfocus;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFormbutton(){
        return $this->formbutton;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $formbutton
    * @return void
    */
    public function setFormbutton($formbutton){
        $this->formbutton=$formbutton;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFormbuttonhover(){
        return $this->formbuttonhover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $formbuttonhover
    * @return void
    */
    public function setFormbuttonhover($formbuttonhover){
        $this->formbuttonhover=$formbuttonhover;
    } 

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getOverlayboxtext(){
        return $this->overlayboxtext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setOverlayboxtext($overlayboxtext){
        $this->overlayboxtext=$overlayboxtext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getLink(){
        return $this->link;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setLink($link){
        $this->link=$link;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getLinkhover(){
        return $this->linkhover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setLinkhover($linkhover){
        $this->linkhover=$linkhover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getButtonbackground(){
        return $this->buttonbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setButtonbackground($buttonbackground){
        $this->buttonbackground=$buttonbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getButtontext(){
        return $this->buttontext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setButtontext($buttontext){
        $this->buttontext=$buttontext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getButtonbackgroundhover(){
        return $this->buttonbackgroundhover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setButtonbackgroundhover($buttonbackgroundhover){
        $this->buttonbackgroundhover=$buttonbackgroundhover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getButtontexthover(){
        return $this->buttontexthover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setButtontexthover($buttontexthover){
        $this->buttontexthover=$buttontexthover;
    }


    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getDivider(){
        return $this->divider;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $divider
    * @return void
    */
    public function setDivider($divider){
        $this->divider=$divider;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getAccopenerbackground(){
        return $this->accopenerbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $accopenerbackground
    * @return void
    */
    public function setAccopenerbackground($accopenerbackground){
        $this->accopenerbackground=$accopenerbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getAccopenertext(){
        return $this->accopenertext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $accopenertext
    * @return void
    */
    public function setAccopenertext($accopenertext){
        $this->accopenertext=$accopenertext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getAccopenerhover(){
        return $this->accopenerhover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $accopenerhover
    * @return void
    */
    public function setAccopenerhover($accopenerhover){
        $this->accopenerhover=$accopenerhover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getAccfoldoutbackground(){
        return $this->accfoldoutbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $accfoldoutbackground
    * @return void
    */
    public function setAccfoldoutbackground($accfoldoutbackground){
        $this->accfoldoutbackground=$accfoldoutbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getAccfoldouttext(){
        return $this->accfoldouttext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $accfoldouttext
    * @return void
    */
    public function setAccfoldouttext($accfoldouttext){
        $this->accfoldouttext=$accfoldouttext;
    }

    /**
    *get the sliderheightdesktop
    *
    *@param void
    *@return int sliderheightdesktop
    */
    public function getSliderheightdesktop(){
        return $this->sliderheightdesktop;
    }

    /**
    *set the sliderheightdesktop
    *
    *@param int $sliderheightdesktop
    *@return void
    */
    public function setSliderheightdesktop($sliderheightdesktop){
        $this->sliderheightdesktop=$sliderheightdesktop;
    }

    /**
    *get the sliderheighttablet
    *
    *@param void
    *@return int sliderheighttablet
    */
    public function getSliderheighttablet(){
        return $this->sliderheighttablet;
    }

    /**
    *set the sliderheighttablet
    *
    *@param int $sliderheighttablet
    *@return void
    */
    public function setSliderheighttablet($sliderheighttablet){
        $this->sliderheighttablet=$sliderheighttablet;
    }

    /**
    *get the sliderheightmobile
    *
    *@param void
    *@return int sliderheightmobile
    */
    public function getSliderheightmobile(){
        return $this->sliderheightmobile;
    }

    /**
    *set the sliderheightmobile
    *
    *@param int $sliderheightmobile
    *@return void
    */
    public function setSliderheightmobile($sliderheightmobile){
        $this->sliderheightmobile=$sliderheightmobile;
    }

    /**
    * returns the copyrighttheme
    * 
    * @param void
    * @return string type of copyrighttheme
    */
    public function getCopyrighttheme(){
        return $this->copyrighttheme;
    }

    /**
    * set the copyrighttheme
    * 
    * @param string $copyrighttheme the new copyrighttheme
    * @return void
    */
    public function setCopyrighttheme($copyrighttheme){
        $this->copyrighttheme=$copyrighttheme;
    }
}
?>