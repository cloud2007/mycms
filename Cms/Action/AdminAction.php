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
    protected $Authorize;
    public $UserInfo = array();

    function __construct() {
        parent::__construct();
        $this->checkAuthorize();
        $UserAdmin = new UserModel();
        $this->UserInfo = $UserAdmin->CheckLogin();
        $this->header = new View('header');
        $this->footer = new View('footer');
        @$_SESSION['col'] = $_GET['col'] ? $_GET['col'] : $_SESSION['col'];
        @$_SESSION['dat'] = $_GET['dat'] ? $_GET['dat'] : $_SESSION['dat'];
        $MenuAdmin = new MenuTable;
        $_SESSION['lam'] = $_SESSION['col'] ? $MenuAdmin->load($_SESSION['col'])->lmID : NULL;
    }

    function checkAuthorize() {
        $cookie = ROOT_PATH . 'Config/TEMP/TMP.tmp';
        $url = curl_init("http://www.tcit123.com/Verify/index.php");
        curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($url, CURLOPT_POST, 1);
        curl_setopt($url, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($url, CURLOPT_POSTFIELDS, "Domain={$_SERVER['SERVER_NAME']}&Code=" . Config::item('Config.AuthorizeCode'));
        $Authorize = curl_exec($url);
        curl_close($url);
        $this->Authorize = json_decode($Authorize);
        if ($this->Authorize->Y != 1) {
            exit($this->Authorize->INFO);
        }
    }

}

?>