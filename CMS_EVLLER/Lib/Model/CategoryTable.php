<?php

/**
 * 系统菜单
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
class CategoryTable extends Data {

    function __construct() {
        $options = array(
            'key' => 'id',
            'table' => TABLE_PREFIX . '_' . 'category',
            'columns' => array(
                'id' => 'id',
                'lmID' => 'lmID',
                'parentID' => 'parentID',
                'orderNo' => 'orderNo',
                'categoryTitle' => 'categoryTitle',
                'categoryTitle1' => 'categoryTitle1',
                'categoryTitle2' => 'categoryTitle2',
                'categoryBremark' => 'categoryBremark',
                'categorySmallPic' => 'categorySmallPic',
                'categoryBigPic' => 'categoryBigPic',
                'categoryName1' => 'categoryName1',
                'categoryName2' => 'categoryName2',
                'categoryContent1' => 'categoryContent1',
                'categoryContent2' => 'categoryContent2',
                'multiPic' => 'multiPic',
                'creatTime' => 'creatTime',
            ),
            'saveNeeds' => array('lmID'),
        );
        parent::init($options);
    }

    public function save() {
        if (!$this->creatTime)
            $this->creatTime = time();
        parent::save();
        return $this;
    }

    /**
     * 格式化TreeClass需求的数组格式
     * @param type $array
     */
    function formatArray($lmID = '') {
        $lmID = $lmID ? $lmID : $_SESSION['lam'];
        $array = $this->find(
                array(
                    'whereAnd' => array(array('lmID', '=' . $lmID)),
                    'order' => array('orderNo' => 'asc')
                )
        );
        $res = array();
        foreach ($array as $v) {
            $res[] = array('id' => $v->id, 'parentID' => $v->parentID, 'categoryTitle' => $v->categoryTitle);
        }
        return $res;
    }

    /*
     * 获取子级栏目
     */

    function getSon($lmID = '', $parendID = 0) {
        $lmID = $lmID ? $lmID : $_SESSION['lam'];
        $array = $this->find(
                array(
                    'whereAnd' => array(array('lmID', '=' . $lmID), array('parentID', '=' . $parendID)),
                    'order' => array('orderNo' => 'asc')
                )
        );
        $res = array();
        foreach ($array as $v) {
            $res[] = array('id' => $v->id, 'parentID' => $v->parentID, 'categoryTitle' => $v->categoryTitle);
        }
        return $res;
    }

}

?>