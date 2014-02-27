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
        $Grantword = explode('|', $this->UserInfo->grantWord);
        if ($this->UserInfo->userID == 'cloud') {
            $MenuList = $Menu->groupBy(array('lmName'), array('Count' => 'id'), array('order' => array('orderNo' => 'asc')));
            foreach ($MenuList as $k => $v) {
                $MenuList[$k]['son'] = $Menu->find(
                        array(
                            'whereAnd' => array(array('lmName', "='" . $v['lmName'] . "'"), array('id', 'not in(1,2,4,7)')),
                            'order' => array('orderNo' => 'asc'),
                        )
                );
            }
        } elseif (in_array('ALL', $Grantword)) {
            $Menu->whereAnd('grantWord', "not in('Core','Grant')");
            $MenuList = $Menu->groupBy(array('lmName'), array('Count' => 'id'), array('order' => array('orderNo' => 'asc')));
            foreach ($MenuList as $k => $v) {
                $MenuList[$k]['son'] = $Menu->find(
                        array(
                            'whereAnd' => array(array('lmName', "='" . $v['lmName'] . "'"), array('id', 'not in(1,2,4,7)'),array('grantWord', "not in('Core','Grant')")),
                            'order' => array('orderNo' => 'asc'),
                        )
                );
            }
        } else {
            $GrantwordStrArray = '';
            foreach ($Grantword as $v) {
                $GrantwordStrArray[] = '\'' . $v . '\'';
            }
            $GrantwordStr = implode(',', $GrantwordStrArray);
            $GrantwordStr = '(' . $GrantwordStr . ')';
            $Menu->whereAnd('grantWord', 'in' . $GrantwordStr);
            $MenuList = $Menu->groupBy(array('lmName'), array('Count' => 'id'), array('order' => array('orderNo' => 'asc')));
            foreach ($MenuList as $k => $v) {
                $MenuList[$k]['son'] = $Menu->find(
                        array(
                            'whereAnd' => array(array('lmName', "='" . $v['lmName'] . "'"), array('id', 'not in(1,2,4,7)'), array('grantWord', 'in' . $GrantwordStr)),
                            'order' => array('orderNo' => 'asc'),
                        )
                );
            }
        }
        $view = new View('menu');
        $view->set('MenuList', $MenuList);
        $view->renderHtml($view);
    }

}