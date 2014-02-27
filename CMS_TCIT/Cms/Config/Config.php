<?php
//APP配置文件
define( 'CONTROLLER_PATH', realpath(BASEDIR . '../Cms/Action') . DIRECTORY_SEPARATOR );
define( 'VIEW_PATH', realpath(BASEDIR . '../Cms/Tpl') . DIRECTORY_SEPARATOR );


$Default = array(
    'DefaultAction' => 'HomeAction',
    'DefaultMethod' => 'Index',
)
?>