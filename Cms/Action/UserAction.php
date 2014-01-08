<?php

/**
 * 用户登录验证类
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class UserAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    /**
     * 栏目列表
     */
    function index() {
        $this->login();
        die;
        $view = new View('core/menuList');
        $view->renderHeaderFooterHtml($view);
    }

    function login() {
        $view = new View('user/login');
        $view->renderHeaderFooterHtml($view);
    }

    function loginAction() {
        if (!$_POST['userID'] || !$_POST['passWord']) {
            echo '用户名密码不能为空！';
        } else {
            $user = new User();
            $res = $user->find(
                    array(
                        'whereAnd' => array(array('userID', '=\'' . $_POST['userID'] . '\''))
                    )
            );
            if ($res) {
                if ($res[0]->passWord == md5($_POST['passWord'])) {
                    echo 1;
                } else {
                    echo '密码错误！';
                }
            } else {
                echo '无此用户!';
            }
        }
    }

}

?>