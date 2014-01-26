<?php

/**
 * 系统news表
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
class NewsTable extends Data {

    private $categoryArray = array();

    function __construct() {
        $options = array(
            'key' => 'id',
            'table' => TABLE_PREFIX . '_' . 'news',
            'columns' => array(
                'id' => 'id',
                'lmID' => 'lmID',
                'categoryID' => 'categoryID',
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
                'name5' => 'name5',
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
                'multiPic' => 'multiPic',
                'is_tj' => 'is_tj',
                'is_gd' => 'is_gd',
                'is_ab' => 'is_ab',
                'is_cd' => 'is_cd',
                'is_ef' => 'is_ef',
                'is_gh' => 'is_gh',
                'is_jk' => 'is_jk',
                'is_mn' => 'is_mn',
                'hits' => 'hits',
                'likeNews' => 'likeNews',
                'creatTime' => 'creatTime',
            ),
            'saveNeeds' => array('lmID'),
        );
        parent::init($options);
    }

    public function categoryPath() {
        $cateID = $this->categoryID;
        return $res = $this->getCategoryTitle($cateID);
    }

    private function getCategoryTitle($cateID) {
        if ($cateID != 0) {
            $obj = new CategoryTable;
            $obj->load($cateID);
            $this->categoryArray[] = $obj->categoryTitle;
            $this->getCategoryTitle($obj->parentID);
        }
        arsort($this->categoryArray);
        return implode('<font color="red"> -> </font>', $this->categoryArray);
    }

    /**
     * 覆盖save方法，写入creattime
     * @return \NewsTable
     */
    public function save() {
        if (!$this->creatTime)
            $this->creatTime = time();
        parent::save();
        return $this;
    }

    public function status() {
        $status = array('is_tj', 'is_gd', 'is_ab', 'is_cd', 'is_ef', 'is_gh', 'is_jk' => 'is_jk', 'is_mn');
        $statusArray = array();
        $Menu = new MenuTable();
        $res = $Menu->find(
                array(
                    'whereAnd' => array(array('id', '=' . $_SESSION['col'])),
                )
        );
        if (!$res)
            return NULL;
        $tcitFieldsArray = array_filter(explode('|', $res[0]->tcitFields));
        foreach ($status as $field) {
            if (in_array($field, $tcitFieldsArray)) {
                if ($this->$field == 1)
                    $statusArray[] = '<font color="red">[<a class="red" href="/admin.php/News/Status/?'."id={$this->id}&op={$field}&value=0&PageNo={$_GET['PageNo']}".'">' . $res[0]->$field . '</a>]</font>';
                else
                    $statusArray[] = '<font color="#CCC">[<a class="ccc" href="/admin.php/News/Status/?'."id={$this->id}&op={$field}&value=1&PageNo={$_GET['PageNo']}".'">' . $res[0]->$field . '</a>]</font>';
            }
        }
        return implode('', $statusArray);
    }

}

?>