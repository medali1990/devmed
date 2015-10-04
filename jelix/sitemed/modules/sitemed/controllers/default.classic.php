<?php
/**
* @package   sitemed
* @subpackage sitemed
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class defaultCtrl extends jController {
    /**
    *
    */
    function index() {
        $rep = $this->getResponse('html');
        $rep->title="Dernieres actualités";

        $tpl=new jtpl();
        

        $rep->body->assign('MAIN',$tpl->fetch('liste_news'));

        return $rep;
    }
}
