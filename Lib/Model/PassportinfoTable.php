<?php

/**
 * 系统news表
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
class PassportinfoTable extends Data {

    function __construct() {
        $options = array(
            'key' => 'id',
            'table' => TABLE_PREFIX . '_' . 'passport_info',
            'columns' => array(
                'id' => 'id',
                'order_id' => 'order_id',
                'user_id' => 'user_id',
                'status' => 'status',
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

}

?>