<?php

/**
 * 系统管理员表
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-08
 */
class UserTable extends Data {

    public static $status = array(0 => '禁用', 1 => '启用');

    function __construct() {
        $options = array(
            'key' => 'id',
            'table' => TABLE_PREFIX . '_' . 'user',
            'columns' => array(
                'id' => 'id',
                'userID' => 'userID',
                'passWord' => 'passWord',
                'grantWord' => 'grantWord',
                'status' => 'status',
                'creatTime' => 'creatTime',
                'loginTime' => 'loginTime',
            ),
            'saveNeeds' => array('userID'),
        );
        parent::init($options);
    }

    public function save() {
        if (!$this->creatTime)
            $this->creatTime = time();
        parent::save();
        return $this;
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

    function statusHref() {
        $txt = '';
        foreach (self::$status as $k => $v) {
            if ($this->status != $k)
                $txt.= "<a href='/admin.php/Core/userStatus/?id={$this->id}&value={$k}'>{$v}</a>";
        }
        return $txt;
    }

    function grantCheckbox() {
        $userGrantArray = explode('|', $this->grantWord);
        $txt = '';
        $Grant = new GrantTable();
        $GrantList = $Grant->find();
        foreach ($GrantList as $v) {
            $sta = '';
            if (in_array($v->name, $userGrantArray))
                $sta = 'checked="checked"';
            $txt .='<input type="checkbox" name="grantWord[]" value="' . $v->name . '" ' . $sta . '> ' . $v->value . '　';
        }
        return $txt;
    }

    function grantWord(){
        $GrantLists=array();
        $array = explode('|', $this->grantWord);
        $Grant = new GrantTable();
        $GrantList = $Grant->find();
        foreach($GrantList as $v){
            $GrantLists[$v->value] = $v->name;
        }
        $rsArray=array_intersect($GrantLists,$array);
        return implode('|', array_flip($rsArray));
    }

}

?>