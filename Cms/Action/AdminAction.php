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
    private $Authorize;
    public $UserInfo = array();

    function __construct() {
        $this->checkAuthorize();
        $UserAdmin = new UserModel();
        $this->UserInfo = $UserAdmin->CheckLogin();
        $this->header = new View('header');
        $this->footer = new View('footer');
        @$_SESSION['col'] = $_GET['col'] ? $_GET['col'] : $_SESSION['col'];
        @$_SESSION['dat'] = $_GET['dat'] ? $_GET['dat'] : $_SESSION['dat'];
        $MenuAdmin = new MenuTable;
        $_SESSION['lam'] = $_SESSION['col'] ? $MenuAdmin->load($_SESSION['col'])->lmID : NULL;
        /**
          if (!$_SESSION['col'] && !$_SESSION['dat']) {
          echo 'There is some wrong , please stop! ';
          die;
          }
         */
    }

    function checkAuthorize() {
        $cookie = ROOT_PATH . 'Config/TEMP/TMP.tmp';
        $url = curl_init("http://www.tcit123.com/Verify/index.php");
        curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($url, CURLOPT_POST, 1);
        curl_setopt($url, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($url, CURLOPT_POSTFIELDS, "Domain={$_SERVER['SERVER_NAME']}&Code=7E2FD76E-937A-3D87-BFEA-829DEAD1C079");
        $Authorize = curl_exec($url);
        curl_close($url);
        $Authorize = json_decode($Authorize);
        $this->Authorize = $Authorize;
        if ($this->Authorize->Y != 1) {
            //$this->sq();到输入授权码页面。
            die('未授权用户！');
        }
    }

}

?>