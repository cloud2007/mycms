<?php

/**
 * 核心Controller
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class Action {

    protected $RuntimeObj;
    public $Runtime;

    function __construct() {
        $this->RuntimeObj = new Runtime();
        $this->RuntimeObj->start();
    }

    function error($error_id) {
        echo $error_id;
    }

    function __destruct() {
        //$this->RuntimeObj->stop();
        //$this->Runtime = $this->RuntimeObj->spent() . " 毫秒";
        //echo "页面执行时间: " . $this->Runtime;
    }

}

?>