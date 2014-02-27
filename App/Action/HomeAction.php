<?php

/**
 * Home
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class HomeAction extends Action {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $Obj = new MenuTable();
        $Obj->load(1);
        echo '<pre>';
        print_r($Obj);
        $view = new View('index');
        $view->renderHeaderFooterHtml($view);
    }

}

?>