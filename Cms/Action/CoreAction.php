<?php

/**
 * home
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class CoreAction extends Action {

    function __construct() {

    }

    function index($id = NULL) {
        $Menu = new Menu();
        //$Menu->whereAnd('menuId', '!=1');
        $MenuList = $Menu->find();

        $view = new View('core/index');
        $view->set('MenuList', $MenuList);
        $view->renderHtml($view);
    }

    function addMenu(){
        echo 'addmenu';
    }

}

?>