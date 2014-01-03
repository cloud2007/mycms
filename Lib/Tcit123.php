<?php

/**
 * 系统核心
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
$requestArray = array_filter(explode('/', $_SERVER['PATH_INFO']));

$Controller = isset($requestArray[1]) ? ucfirst($requestArray[1]) : 'Home';
$Method = isset($requestArray[2]) ? $requestArray[2] : 'index';

if (file_exists(CONTROLLER_PATH . '/' . $Controller . '.php')) {
    $Controllers = new $Controller();
} else {
    echo 'Page not found!';
    exit();
}

if (method_exists($Controllers, $Method)) {
    $Controllers->$Method($requestArray);
} else {
    //$Controllers->index();
    $Controllers->error(404);
}

exit;
?>