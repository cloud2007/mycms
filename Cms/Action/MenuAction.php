<?php

/**
 * menu
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class MenuAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $Menu = new MenuTable();
        $Menu->whereAnd('id', '!=1');
        $MenuList = $Menu->groupBy(array('lmName'), array('Count' => 'id'), array('order' => array('orderNo' => 'asc')));
        foreach ($MenuList as $k => $v) {
            $MenuList[$k]['son'] = $Menu->find(
                    array(
                        'whereAnd' => array(array('lmName', "='" . $v['lmName'] . "'"), array('id', 'not in(1,2,4)')),
                        'order' => array('orderNo' => 'asc'),
                    )
            );
        }

        $view = new View('menu');
        $view->set('MenuList', $MenuList);
        $view->renderHtml($view);
    }

}

?>