<?php

/**
 * system news core
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class NewsAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    function index() {
        print_r($_GET);
    }

    function add() {
        $_SESSION['col'] = $_SESSION['col'] ? $_SESSION['col'] : $_GET['col'];
        if (!$_SESSION['col']) {
            echo 'There is some wrong , please stop! ';
            die;
        }
        $view = new View('news/newsAdd');
        $data = new Menu;
        $data->load($_GET['col']);
        //print_r($data);
        $view->set('datainfo', $data);
        $view->renderHeaderFooterHtml($view);
    }

}

?>