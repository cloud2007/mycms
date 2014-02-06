<?php

/**
 * system category core
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class SystemAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    //系统信息
    function index() {
        $view = new View('system/index');
        $view->set('Authorize', $this->Authorize);
        $view->renderHeaderFooterHtml($view, $this->RuntimeObj);
    }

}

?>