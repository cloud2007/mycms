<?php
//APP配置文件
define( 'CONTROLLER_PATH', realpath(BASEDIR . '../App/Action') . DIRECTORY_SEPARATOR );
define( 'VIEW_PATH', realpath(BASEDIR . '../App/Tpl') . DIRECTORY_SEPARATOR );

$Default = array(
    'DefaultAction' => 'HomeAction',
    'DefaultMethod' => 'Index',
)
?>