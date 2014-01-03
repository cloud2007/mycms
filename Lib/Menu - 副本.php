<?php

/**
 * 系统菜单
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
class Menu extends Data {

    function __construct() {
        $options = array(
            'key' => 'menuId',
            'table' => 'menu',
            'columns' => array(
                'menuId' => 'menuId',
                'lmId' => 'lmId',
                'lmName' => 'lmName',
                'menuName' => 'menuName',
                'orderNo' => 'orderNo',
                'doLink' => 'doLink',
                'adminLink' => 'adminLink',
                'powerWord' => 'powerWord',
                'dataBase' => 'dataBase',
                'Tuse' => 'Tuse',
                'set_nr' => 'set_nr',
                'cateId' => 'cateId',
                'title' => 'title',
                'title1' => 'title1',
                'title2' => 'title2',
                'title3' => 'title3',
                'title4' => 'title4',
                'title5' => 'title5',
                'title6' => 'title6',
                'title7' => 'title7',
                'title8' => 'title8',
                'title9' => 'title9',
                'title10' => 'title10',
                'name1' => 'name1',
                'name2' => 'name2',
                'name3' => 'name3',
                'name4' => 'name4',
                'content' => 'content',
                'content1' => 'content1',
                'content2' => 'content2',
                'content3' => 'content3',
                'content4' => 'content4',
                'content5' => 'content5',
                'smallpic' => 'smallpic',
                'bigpic' => 'bigpic',
                'upload1' => 'upload1',
                'upload2' => 'upload2',
                'upload3' => 'upload3',
                'upload4' => 'upload4',
                'upload5' => 'upload5',
                'multiPic1' => 'multiPic1',
                'multiPic2' => 'multiPic2',
                'is_tj' => 'is_tj',
                'is_gd' => 'is_gd',
                'is_ab' => 'is_ab',
                'is_cd' => 'is_cd',
                'is_ef' => 'is_ef',
                'is_gf' => 'is_gf',
                'is_jk' => 'is_jk',
                'is_mn' => 'is_mn',
                'hits' => 'hits',
                ''

            ),
            'saveNeeds' => array(menuId, lmId),
        );
        parent::init($options);
    }

    public function creattime($style) {
        return $this->dateConvert($style, $this->creattime);
    }

}

?>