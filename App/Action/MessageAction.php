<?php

/**
 * Message
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class MessageAction extends Action {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if ($_POST) {
            $Message = new MessageTable();
            $Message->lmID=1;
            foreach ($_POST as $k => $v) {
                $Message->$k = $_POST[$k];
            }
            $Message->save();
        }
        $view = new View('Message/index');
        $view->renderHeaderFooterHtml($view);
    }

}

?>