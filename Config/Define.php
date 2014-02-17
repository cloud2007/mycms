<?php

/**
 * 配置文件
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
session_start();
date_default_timezone_set('PRC');
//全站通用配置文件
//header("Content-Type: text/html; charset=utf-8");
// 报错级别设定,一般在开发环境中用E_ALL,这样能够看到所有错误提示
// 系统正常运行后,直接设定为E_ALL || ~E_NOTICE,取消错误显示
error_reporting(E_ALL);
ini_set('display_errors', 'OFF');

define('BASEDIR', strtr(dirname(__FILE__) . DIRECTORY_SEPARATOR, "\\", '/'));
define('ROOT_PATH', realpath(BASEDIR . '../') . DIRECTORY_SEPARATOR);
define('LIB_PATH', realpath(BASEDIR . '../Lib') . DIRECTORY_SEPARATOR);
define('MODEL_PATH', realpath(BASEDIR . '../Lib/Model') . DIRECTORY_SEPARATOR);
define('LIBRARY_PATH', realpath(BASEDIR . '../Lib/Library') . DIRECTORY_SEPARATOR);
define('STATIC_PATH', realpath(BASEDIR . '../Static') . DIRECTORY_SEPARATOR);
define('PUBLIC_PATH', realpath(BASEDIR . '../Public') . DIRECTORY_SEPARATOR);
define('UPLOAD_PATH', '/Uploads');
define('UPLOADS_PATH', realpath(BASEDIR . '../Uploads') . DIRECTORY_SEPARATOR);
define('APP_PATH', realpath(BASEDIR . '../App') . DIRECTORY_SEPARATOR);
define('ADMIN_PATH', realpath(BASEDIR . '../Cms') . DIRECTORY_SEPARATOR);

define('APP_NAME', 'MYCMSV1.0');

define('AUTHCODE_KEY', 'TCITCMS'); //authcode加密密钥

define('TABLE_PREFIX', 'tcit');
?>