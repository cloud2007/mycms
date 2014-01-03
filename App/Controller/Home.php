<?php

/**
 * home
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class Home extends Controller {

    function __construct() {

    }

    function index($id = NULL) {

        $header = new View('header');
        $footer = new View('footer');
        $view = new View('index');



        $view->renderHtml($header . $view . $footer);
    }

}

?>