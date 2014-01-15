<?php

/**
 * 系统菜单
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
class MenuTable extends Data {

    function __construct() {
        $options = array(
            'key' => 'id',
            'table' => TABLE_PREFIX . '_' . 'menu',
            'columns' => array(
                'id' => 'id',
                'lmID' => 'lmID',
                'lmName' => 'lmName',
                'menuName' => 'menuName',
                'orderNo' => 'orderNo',
                'doLink' => 'doLink',
                'adminLink' => 'adminLink',
                'grantWord' => 'grantWord',
                'dataBase' => 'dataBase',
                'usable' => 'usable',
                'tcitFields' => 'tcitFields',
                'category' => 'category',
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
                'multiPic1' => 'multiPic1',
                'multiPic2' => 'multiPic2',
                'is_tj' => 'is_tj',
                'is_gd' => 'is_gd',
                'is_ab' => 'is_ab',
                'is_cd' => 'is_cd',
                'is_ef' => 'is_ef',
                'is_gh' => 'is_gh',
                'is_jk' => 'is_jk',
                'is_mn' => 'is_mn',
                'hits' => 'hits',
                //类别字段
                'categoryTitle' => 'categoryTitle',
                'categoryTitle1' => 'categoryTitle1',
                'categoryTitle2' => 'categoryTitle2',
                'categorySmallPic' => 'categorySmallPic',
                'categoryBigPic' => 'categoryBigPic',
                'categoryBremark' => 'categoryBremark',
                'categoryName1' => 'categoryName1',
                'categoryName2' => 'categoryName2',
                'categoryContent1' => 'categoryContent1',
                'categoryContent2' => 'categoryContent2',
                //留言字段
                'uname' => 'uname',
                'phone' => 'phone',
                'tel' => 'tel',
                'fax' => 'fax',
                'pic' => 'pic',
                'email' => 'email',
                'youbian' => 'youbian',
                'addr' => 'addr',
                //附加字段
                'title1_' => 'title1_',
                'title2_' => 'title2_',
                'title3_' => 'title3_',
                'title4_' => 'title4_',
                'title5_' => 'title5_',
                'title6_' => 'title6_',
                'title7_' => 'title7_',
                'title8_' => 'title8_',
                'title9_' => 'title9_',
                'title10_' => 'title10_',
                'creatTime' => 'creatTime',
            ),
            'saveNeeds' => array('id', 'lmID'),
        );
        parent::init($options);
    }

    /**
     * 是否显示字段勾选状态
     * @param type $field
     * @param type $return
     * @return string
     */
    public function fieldShow($field, $return) {
        $returnArray = array(
            '1' => 'checked',
            '2' => 'selected',
        );
        if (in_array($field, explode('|', $this->tcitFields)))
            return $returnArray[$return];;
        return;
    }

    /**
     * input 字段
     * @param type $field
     * @return string|null
     */
    public function showInput($field) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        $selectCheckArray = array_filter(explode('|', $this->{$field . '_'}));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= $this->$field;
            $returnStr .= '</td><td class="textleft">';
            if (in_array($field . '_select', $tcitFieldsArray)) {
                $returnStr .= '<select name="' . $field . '">';
                foreach ($selectCheckArray as $v) {
                    $returnStr .= '<option value="' . $v . '">' . $v . '</option>';
                }
                $returnStr .= '</select>';
            } elseif (in_array($field . '_check', $tcitFieldsArray)) {
                foreach ($selectCheckArray as $v) {
                    $returnStr .= '<input type="checkbox" name="' . $field . '" value="' . $v . '">&nbsp;' . $v . '&nbsp;';
                }
            } else {
                $returnStr .= '<input type="text" name="' . $field . '" value="" size="50" />';
            }
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * 文本区域
     * @param type $field
     * @return string|null
     */
    public function showTextarea($field) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= $this->$field;
            $returnStr .= '</td><td class="textleft">';
            $returnStr .= '<textarea cols="80" rows="8" name="' . $field . '"></textarea>';
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * 编辑器区域
     * @return string|null
     */
    public function showEditorContent($field) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= $this->$field;
            $returnStr .= '</td><td class="textleft">';
            $returnStr .= '<textarea class="content" cols="80" rows="8" name="' . $field . '">1212</textarea>';
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * 单选按钮
     * @return string|null
     */
    public function showRadio($field) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= $this->$field;
            $returnStr .= '</td><td class="textleft">';
            $returnStr .= '<input type="radio" name="' . $field . '" value="1" /> 是　<input type="radio" name="' . $field . '" value="0" /> 否';
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

}

?>