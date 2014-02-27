<?php

/**
 * 统计页面执行时间
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class Runtime {

    private $StartTime = 0;
    private $StopTime = 0;

    function getMicrotime() {
        list($usec, $sec) = explode(' ', microtime());
        return ((float) $usec + (float) $sec);
    }

    function start() {
        $this->StartTime = $this->getMicrotime();
    }

    function stop() {
        $this->StopTime = $this->getMicrotime();
    }

    function spent() {
        return round(($this->StopTime - $this->StartTime) * 1000, 1);
    }

}

?>