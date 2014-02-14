<?php

/**
 * Member
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class MemberAction extends Action {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if ($_POST) {
            $Model = new MemberModel();
            //if ($Model->checkUserID() != 1)
            //ShowMsg('账户已经存在', 'Member/');
            //if ($Model->checkEmail() != 1)
            //ShowMsg('邮箱已经存在', 'Member/');
            ShowMsg($Model->save(), 'Member/');
        }
        $view = new View('Member/index');
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * 激活用户
     */
    function active() {
        echo $_GET['active'];
        $id = Util::authcode($_GET['active'], 'DECODE');
        echo $id;
    }

}

?>