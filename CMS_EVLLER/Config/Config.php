<?php

/**
 * 配置array
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */

return array(
    'AUTHORIZECODE' => '7E2FD176E-937A-3D87-BFEA-829DEAD1C079',
    'EMAIL_CONFIG' => array(
        'SMTP_HOST' => 'smtp.qq.com', //SMTP服务器
        'SMTP_PORT' => '465', //SMTP服务器端口
        'SMTP_USER' => '', //SMTP服务器用户名
        'SMTP_PASS' => '', //SMTP服务器密码
        'FROM_EMAIL' => '', //发件人EMAIL
        'FROM_NAME' => '', //发件人名称
        'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
        'REPLY_NAME' => '', //回复名称（留空则为发件人名称）
    ),
    'NOTES' => array(
        '现在是:' . date('Y年m月d日 H:i:s') => 'javascript:;',
        '欢迎使用EvllerCMS!' => 'javascript:;'
    )
);
?>