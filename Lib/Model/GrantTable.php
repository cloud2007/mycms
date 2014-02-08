<?php

/**
 * 系统权限字
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
class GrantTable extends Data {

    public static $status = array(0 => '禁用', 1 => '正常');

    function __construct() {
        $options = array(
            'key' => 'id',
            'table' => TABLE_PREFIX . '_' . 'grant',
            'columns' => array(
                'id' => 'id',
                'name' => 'name',
                'value' => 'value',
                'status' => 'status',
            ),
            'saveNeeds' => array('name','value'),
        );
        parent::init($options);
    }

    function status() {
        return $text = self::$status[$this->status];
    }

    function statusRadio() {
        $txt = '';
        foreach (self::$status as $k => $v) {
            $sta = '';
            if ($this->status == $k)
                $sta = 'checked="checked"';
            $txt.= '<input type="radio" name="status" value="' . $k . '" ' . $sta . '> ' . $v . '　';
        }
        return $txt;
    }

    function statusHref(){
        $txt = '';
        foreach (self::$status as $k => $v) {
            if($this->status!=$k)
                $txt.= "<a href='/admin.php/Core/grantStatus/?id={$this->id}&value={$k}'>{$v}</a>";
        }
        return $txt;
    }

}

?>