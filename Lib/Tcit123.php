<?php

/**
 * 系统核心
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 * $_GET = array(
 *      'm' = 控制器名称
 *      'c' = 方法名称
 *      其他参数为数字序号  从1开始
 * )
 */
$RuntimeObj = new Runtime();
$RuntimeObj->start();

$requestArray = array_filter(explode('/', @$_SERVER['PATH_INFO']));

$Controller = isset($requestArray[1]) ? ucfirst($requestArray[1]) . 'Action' : $Default['DefaultAction'];
$Method = isset($requestArray[2]) ? $requestArray[2] : $Default['DefaultMethod'];

$_GET['m'] = str_replace('Action', '', $Controller);
$_GET['c'] = $Method;

if (count($requestArray) > 2) {
    unset($requestArray[1]);
    unset($requestArray[2]);
    $requestArray = array_values($requestArray);
    foreach ($requestArray as $k => $v) {
        $_GET[$k + 1] = $v;
    }
}

if (file_exists(CONTROLLER_PATH . '/' . $Controller . '.php')) {
    $Controllers = new $Controller();
} else {
    echo 'Page not found!';
    exit();
}

if (method_exists($Controllers, $Method)) {
    $Controllers->$Method();
} else {
    //$Controllers->index();
    $Controllers->error(404);
}

exit;
?>