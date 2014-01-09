<?php

/**
 * 系统管理员
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-08
 */
class User extends Data {

    function __construct() {
        $options = array(
            'key' => 'id',
            'table' => TABLE_PREFIX . '_' . 'user',
            'columns' => array(
                'id' => 'id',
                'userID' => 'userID',
                'passWord' => 'passWord',
                'grantWord' => 'grantWord',
                'creatTime' => 'creatTime',
                'loginTime' => 'loginTime',
            ),
            'saveNeeds' => array('id', 'userId'),
        );
        parent::init($options);
    }

}

?>