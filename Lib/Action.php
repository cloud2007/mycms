<?php

/**
 * 核心Controller
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class Action extends View {
    
    public static $StatusArray = array(
        1 => array('id' => 1, 'text' => '收件'),
        2 => array('id' => 2, 'text' => '补充材料'),
        3 => array('id' => 3, 'text' => '材料完成'),
        4 => array('id' => 4, 'text' => '送签'),
        5 => array('id' => 5, 'text' => '送签到领馆'),
        6 => array('id' => 6, 'text' => '出签'),
        7 => array('id' => 7, 'text' => '邮寄给客户'),
    );
    
    public static $MediumArray = array(
        1 => array('id' => 1, 'text' => '渠道一'),
        2 => array('id' => 2, 'text' => '渠道二'),
        3 => array('id' => 3, 'text' => '渠道三'),
    );
    
    public static $TypeArray = array(
        1 => array('id' => 1, 'text' => '旅游签证'),
        2 => array('id' => 2, 'text' => 'XX签证'),
        3 => array('id' => 3, 'text' => '临时出国'),
    );
    
    public static $SendArray = array(
        1 => array('id' => 1, 'text' => '顺丰快递'),
        2 => array('id' => 2, 'text' => '韵达快递'),
        3 => array('id' => 3, 'text' => '圆通快递'),
    );
    
    public static $YesnoArray = array(
        1 => array('id' => 0, 'text' => '否'),
        2 => array('id' => 1, 'text' => '是'),
    );

    function __construct() {
        parent::__construct();
    }

    function error($error_id) {
        echo $error_id;
    }

}

?>