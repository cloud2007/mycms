<?php

/**
 * home
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class CoreAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $Menu = new Menu();

        $PageSize = 20;
        $PageNo = (int) $_GET['PageNo'] ? (int) $_GET['PageNo'] : 1;
        $PageNum = ($PageNo - 1) * $PageSize;
        $Pager = new Pager();
        $PagerData = $Pager->getPagerData($Menu->count(), $PageNo, '/admin.php/Core?', 2, $PageSize); //参数记录数 当前页数 链接地址 显示样式 每页数量

        $MenuList = $Menu->find(
                array(
                    'order' => array('lmId' => 'asc'),
                    'limit' => "{$PageNum},{$PageSize}"
                )
        );

        $view = new View('core/menuList');
        $view->set('MenuList', $MenuList);
        $view->set('PagerData', $PagerData);
        $view->renderHeaderFooterHtml($view);
    }

    function addMenu() {
        $view = new View('core/menuAdd');
        //$view->set('MenuList', $MenuList);
        //$view->set('PagerData', $PagerData);
        $view->renderHeaderFooterHtml($view);
    }

}

?>