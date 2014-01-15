<?php

/**
 * 用户登录验证类
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class UserAction extends Action {

    function __construct() {
        parent::__construct();
    }

    /**
     * 栏目列表
     */
    function index() {
        $User = new UserModel();
        $UserInfo = $User->CheckLogin();
        if ($UserInfo) {
            header('Location:/admin.php');
        } else {
            $this->login();
        }
    }

    function login() {
        if (isset($_SESSION['userID']) || isset($_COOKIE['userID']))
            $this->index();
        $view = new View('user/login');
        $view->renderHeaderFooterHtml($view);
    }

    function loginAction() {
        $User = new UserModel();
        $User->LoginAction();
    }

    function LoginOut() {
        $User = new UserModel();
        $User->LoginOut();
    }

}

?>