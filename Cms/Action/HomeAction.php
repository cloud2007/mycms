<?php

/**
 * home
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class HomeAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $view = new View('index');
        $view->set('UserInfo', $this->UserInfo);
        $view->renderHtml($view);
    }

    function welcome() {
        //echo SendMail('190296465@qq.com', 'Cloud', 'test', '中文测试邮件');
        $view = new View('welcome');
        $view->renderHtml($view);
    }

}

?>