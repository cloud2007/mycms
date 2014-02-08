<?php

/**
 * 系统菜单
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
class MessageTable extends Data {

    function __construct() {
        $options = array(
            'key' => 'id',
            'table' => TABLE_PREFIX . '_' . 'message',
            'columns' => array(
                'id' => 'id',
                'lmID' => 'lmID',
                'newsID' => 'newsID',
                'msgID' => 'msgID',
                'uname' => 'uname',
                'phone' => 'phone',
                'tel' => 'tel',
                'fax' => 'fax',
                'pic' => 'pic',
                'email' => 'email',
                'youbian' => 'youbian',
                'addr' => 'addr',
                'title' => 'title',
                'content' => 'content',
                'creatTime' => 'creatTime',
                'reContent' => 'reContent',
                'reTime' => 'reTime',
            ),
            'saveNeeds' => array(),
        );
        parent::init($options);
    }

    public function save() {
        if (!$this->creatTime)
            $this->creatTime = time();
        else
            $this->creatTime = strtotime($this->creatTime);
        if (!$this->reTime)
            $this->reTime = time();
        else
            $this->reTime = strtotime($this->reTime);
        parent::save();
        return $this;
    }

    /**
     * 判断是否图文
     */
    function isPic() {
        return stripos($this->content, 'img src') !== FALSE ? '<font color="blue">[图]</font>' : '';
    }

    /**
     * 回复状态
     */
    function huifu() {
        return $this->reContent ? '<font color="green">√</font>' : '<font color="red">×</font>';
    }

}

?>