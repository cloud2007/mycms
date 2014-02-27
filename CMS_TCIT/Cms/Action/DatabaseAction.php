<?php

/**
 * menu
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class DatabaseAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    function index() {

    }

    function backup() {
        $Data = new DatabaseModel();
        $File = $Data->backup();
        $this->RuntimeObj->stop();
        ShowNote("数据备份成功,耗时" . $this->RuntimeObj->spent() . "毫秒<br /><a href='/{$File}' style='color:red' target='_blank'>下载(点击右键另存)</a>");
    }

    function recovery() {
        ShowNote('恢复数据库请联系系统管理员!');
    }

    function initialization(){
        ShowNote('数据初始化请联系系统管理员!');
    }
}

?>