<?php

/**
 * 系统会员
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
class MemberTable extends Data {

    public static $sexText = array(
        '0' => '男',
        '1' => '女',
    );
    public static $statusText = array(
        '0' => '<font color="red">未激活</font>',
        '1' => '<font color="green">正常</font>',
        '2' => '<font color="blue">锁定</font>',
    );

    function __construct() {
        $options = array(
            'key' => 'id',
            'table' => TABLE_PREFIX . '_' . 'member',
            'columns' => array(
                'id' => 'id',
                'lmID' => 'lmID',
                'userID' => 'userID',
                'realName' => 'realName',
                'passWord' => 'passWord',
                'mailCode' => 'mailCode',
                'sex' => 'sex',
                'phone' => 'phone',
                'tel' => 'tel',
                'addr' => 'addr',
                'avatar' => 'avatar',
                'email' => 'email',
                'youbian' => 'youbian',
                'status' => 'status',
                'creatTime' => 'creatTime',
                'loginTime' => 'loginTime',
                'attributeData' => 'attributeData',
            ),
            'saveNeeds' => array(),
        );
        parent::init($options);
    }

    public function save() {
        if (!$this->creatTime)
            $this->creatTime = time();
        parent::save();
        return $this;
    }

    //是否有头像
    public function avatar() {
        if ($this->avatar)
            return '<font color="red">[有]</font>';
        return;
    }

}

?>