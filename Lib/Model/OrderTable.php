<?php

/**
 * 系统news表
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
class OrderTable extends Data {

    function __construct() {
        $options = array(
            'key' => 'id',
            'table' => TABLE_PREFIX . '_' . 'order',
            'columns' => array(
                'id' => 'id',
                'user_id' => 'user_id',
                'uname' => 'uname',
                'utel' => 'utel',
                'orderid' => 'orderid',
                'okdate' => 'okdate',
                'countdate' => 'countdate',
                'recivedate' => 'recivedate',
                'sentdate' => 'sentdate',
                'type' => 'type',
                'num' => 'num',
                'sendtype' => 'sendtype',
                'paytype' => 'paytype',
                'safe' => 'safe',
                'taobaoid' => 'taobaoid',
                'teamid' => 'teamid',
                'price' => 'price',
                'pay' => 'pay',
                'addr' => 'addr',
                'status' => 'status',
                'content' => 'content',
                'beizhu' => 'beizhu',
                'creatTime' => 'creatTime',
            ),
            'saveNeeds' => array(),
        );
        parent::init($options);
    }

    /**
     * 覆盖save方法，写入creattime
     * @return \NewsTable
     */
    public function save() {
        if (!$this->creatTime)
            $this->creatTime = time();
        else
            $this->creatTime = strtotime($this->creatTime) ? strtotime($this->creatTime) : $this->creatTime;
        parent::save();
        return $this;
    }

    function user_id() {
        $obj = new UserTable();
        try {
            $obj->load($this->user_id);
            return $obj->userID ? $obj->userID : NULL;
        } catch (Exception $exc) {
            return NULL;
        }
    }
    
    function okdate($style = 'Y-m-d'){
        return $this->dateConvert($style, $this->okdate);
    }
    function countdate($style = 'Y-m-d'){
        return $this->dateConvert($style, $this->countdate);
    }
    function recivedate($style = 'Y-m-d'){
        return $this->dateConvert($style, $this->recivedate);
    }
    function sentdate($style = 'Y-m-d'){
        return $this->dateConvert($style, $this->sentdate);
    }

}

?>