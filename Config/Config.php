<?php

/**
 * 配置array
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
/*
  $url = curl_init("http://www.tcit123.com/Verify/index.php");
  curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($url, CURLOPT_POST, 1);
  curl_setopt($url, CURLOPT_POSTFIELDS, "Domain={$_SERVER['SERVER_NAME']}&Code=" . Config::item('Config.AUTHORIZECODE'));
  $Authorize = curl_exec($url);
  curl_close($url); */

return array(
    'AUTHORIZECODE' => '7E2FD76E-937A-3D87-BFEA-829DEAD1C079',
    'EMAIL_CONFIG' => array(
        'SMTP_HOST' => 'smtp.qq.com', //SMTP服务器
        'SMTP_PORT' => '465', //SMTP服务器端口
        'SMTP_USER' => '190296465@qq.com', //SMTP服务器用户名
        'SMTP_PASS' => 'nys312', //SMTP服务器密码
        'FROM_EMAIL' => '190296465@qq.com', //发件人EMAIL
        'FROM_NAME' => 'Cloud', //发件人名称
        'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
        'REPLY_NAME' => '', //回复名称（留空则为发件人名称）
    ),
    'NOTES' => array(
        '这是一条公告这条公告这是一条公告这条公告这是一条公告这条公1' => 'http://www.baidu.com1',
        '这是一条公告这条公告这是一条公告这条公告这是一条公告这条公2' => 'http://www.baidu.com2',
        '这是一条公告这条公告这是一条公告这条公告这是一条公告这条公3' => 'http://www.baidu.com3',
    )
);
?>