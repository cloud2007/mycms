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
    public $user = array();

    function __construct() {
        $this->header = new View('header');
        $this->footer = new View('footer');
    }

}

?>