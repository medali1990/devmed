<?php
/**
* @package   sitemed
* @subpackage easyshop
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
        $rep->title="easyshop-bootique";
        $moi="moi";
        $tpl=new jTpl();
        $tpl->assign('moi',$moi);
       	$rep->body->assign('MAIN',$tpl->fetch('easy'));

        return $rep;
    }

    function test(){
    	$rep=$this->getResponse('html');
    	$rep->title="page test";
    	$rep->bodyTpl='easyshop~test';
    	return $rep;
    }
}

