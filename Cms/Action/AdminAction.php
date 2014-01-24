<?php

/**
 * 后台核心Controller
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class AdminAction extends Action {

    public $header, $footer;
    public $UserInfo = array();

    function __construct() {
        $UserAdmin = new UserModel();
        $this->UserInfo = $UserAdmin->CheckLogin();
        $this->header = new View('header');
        $this->footer = new View('footer');
        $_SESSION['col'] = $_GET['col'] ? $_GET['col'] : $_SESSION['col'];
        $_SESSION['dat'] = $_GET['dat'] ? $_GET['dat'] : $_SESSION['dat'];
        $MenuAdmin = new MenuTable;
        $_SESSION['lam'] = $_SESSION['col'] ? $MenuAdmin->load($_SESSION['col'])->lmID : NULL;
        /**
          if (!$_SESSION['col'] && !$_SESSION['dat']) {
          echo 'There is some wrong , please stop! ';
          die;
          }
         */
    }

}

?>