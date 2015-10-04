<?php
/**
* @package   sitemed
* @subpackage 
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/


require_once (JELIX_LIB_CORE_PATH.'response/jResponseHtml.class.php');

class myHtmlResponse extends jResponseHtml {

    public $bodyTpl = 'sitemed~main';

    function __construct() {
        parent::__construct();


    $this->addCssLink($baseDirectory."assets/bootstrap/css/bootstrap.min.css");
    $this->addCssLink($baseDirectory."assets/bootstrap/css/font-awesome.min.css");
    $this->addCssLink($baseDirectory."assets/bootstrap/css/simple-line-icons.css");
    $this->addCssLink($baseDirectory."assets/bootstrap/css/animate.css");
    $this->addCssLink($baseDirectory."assets/bootstrap/css/style.css");


    $this->addJsLink($baseDirectory."assets/js/modernizr.custom.js");
    $this->addJsLink($baseDirectory."assets/js/jquery-1.11.1.min.js");
    $this->addJsLink($baseDirectory."assets/bootstrap/js/bootstrap.min.js");
    $this->addJsLink($baseDirectory."assets/js/jquery.parallax-1.1.3.js");
    $this->addJsLink($baseDirectory."assets/js/imagesloaded.pkgd.js");
    $this->addJsLink($baseDirectory."assets/js/jquery.sticky.js");
    $this->addJsLink($baseDirectory."assets/js/smoothscroll.js");
    $this->addJsLink($baseDirectory."assets/js/wow.min.js");
    $this->addJsLink($baseDirectory."assets/js/jquery.easypiechart.js");
    $this->addJsLink($baseDirectory."assets/js/waypoints.min.js");
    $this->addJsLink($baseDirectory."assets/js/jquery.cbpQTRotator.js");
    $this->addJsLink($baseDirectory."assets/js/custom.js");




        // Include your common CSS and JS files here
        $this->addCssLink('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
        $this->addCssLink('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css');
        //$this->addCssLink('/css/bootstrap-theme.css.map');
        //$this->addCssLink('/css/bootstrap.min.css');
        //$this->addCssLink('/css/bootstrap.css.map');
        //$resp->addJsLink(jApp::config()->urlengine['basepath'].'js/bootstrap.min.js');
        $this->addJsLink('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.js');
        $this->addJsLink('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');
    }

    protected function doAfterActions() {
        // Include all process in common for all actions, like the settings of the
        // main template, the settings of the response etc..

        $this->body->assignIfNone('MAIN','<p>no content</p>');
    }
}
