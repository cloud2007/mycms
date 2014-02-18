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
                'categoryMultiPic' => 'categoryMultiPic',
                //留言字段
                'uname' => 'uname',
                'company' => 'company',
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
    public function showInput($field, $newsinfo) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        $selectCheckArray = array_filter(explode('|', $this->{$field . '_'}));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= $this->$field;
            $returnStr .= '</td><td class="textleft">';
            if (in_array($field . '_select', $tcitFieldsArray)) {
                $returnStr .= '<select name="' . $field . '">';
                foreach ($selectCheckArray as $v) {
                    $selected = '';
                    if ($v == $newsinfo->$field)
                        $selected = 'selected';
                    $returnStr .= '<option value="' . $v . '" ' . $selected . '>' . $v . '</option>';
                }
                $returnStr .= '</select>';
            } elseif (in_array($field . '_check', $tcitFieldsArray)) {
                foreach ($selectCheckArray as $v) {
                    $checked = '';
                    $fieldArray = explode('|', $newsinfo->$field);
                    if (in_array($v, $fieldArray))
                        $checked = 'checked';
                    $returnStr .= '<input type="checkbox" name="' . $field . '[]" value="' . $v . '"' . $checked . ' />&nbsp;' . $v . '&nbsp;';
                }
            } else {
                $returnStr .= '<input type="text" name="' . $field . '" value="' . $newsinfo->$field . '" size="50" />';
            }
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * input 时间字段
     * @param type $field
     * @return string|null
     */
    public function showCreatTime($field, $newsinfo) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= $this->$field;
            $returnStr .= '</td><td class="textleft">';
            $returnStr .= '<input type="text" name="' . $field . '" value="' . date('Y-m-d H:i:s', $newsinfo->$field ? $newsinfo->$field : time()) . '" onClick="WdatePicker()" style="width:182px;" />';
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * input 回复时间字段
     * @param type $field
     * @return string|null
     */
    public function showReTime($field, $newsinfo) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array('huifu', $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= '回复时间';
            $returnStr .= '</td><td class="textleft">';
            $returnStr .= '<input type="text" name="' . $field . '" value="' . date('Y-m-d H:i:s', $newsinfo->$field ? $newsinfo->$field : time()) . '" onClick="WdatePicker()" style="width:182px;" />';
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * categoryID 字段
     * @param type $field
     * @return string|null
     */
    public function showCategoryID($field, $newsinfo) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= $this->$field;
            $returnStr .= '</td><td class="textleft">';
            $returnStr .= '<select name="categoryID">';
            $returnStr .='<option value="0">一级类别</option>';
            foreach ($newsinfo as $v) {
                $returnStr .= '<option value="' . $v['id'] . '" ' . $v['selected'] . '>' . $v['categoryTitle'] . '</option>';
            }
            $returnStr .='</select>';
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * categoryID 字段
     * @param type $field
     * @return string|null
     */
    public function showCategoryIDSelectList($field, $newsinfo, $select) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr .= '<select name="categoryID" id="categoryID">';
            $returnStr .='<option value="0">选择类别</option>';
            foreach ($newsinfo as $v) {
                if ($v['id'] == $select)
                    $selectStr = 'selected = "selected"';
                else
                    $selectStr = '';
                $returnStr .= '<option value="' . $v['id'] . '" ' . $selectStr . '>' . $v['categoryTitle'] . '</option>';
            }
            $returnStr .='</select>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * 文本区域
     * @param type $field
     * @return string|null
     */
    public function showTextarea($field, $newsinfo) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= $this->$field;
            $returnStr .= '</td><td class="textleft">';
            $returnStr .= '<textarea cols="80" rows="8" name="' . $field . '">' . $newsinfo->$field . '</textarea>';
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * 编辑器区域
     * @return string|null
     */
    public function showEditorContent($field, $newsinfo) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= $this->$field;
            $returnStr .= '</td><td class="textleft">';
            $returnStr .= '<textarea class="content" cols="100" rows="15" name="' . $field . '">' . stripslashes($newsinfo->$field) . '</textarea>';
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * 单选按钮
     * @return string|null
     */
    public function showRadio($field, $newsinfo) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= $this->$field;
            $returnStr .= '</td><td class="textleft">';
            $checkedY = '';
            $checkedN = '';
            if ($newsinfo->$field)
                $checkedY = 'checked';
            if (!$newsinfo->$field)
                $checkedN = 'checked';
            $returnStr .= '<input type="radio" name="' . $field . '" value="1" ' . $checkedY . ' /> 是　<input type="radio" name="' . $field . '" value="0"' . $checkedN . ' /> 否';
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * 单图片上传字段
     *
     */
    public function showUploadSingle($field, $newsinfo) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= $this->$field;
            $returnStr .= '</td><td class="textleft">';
            $returnStr .= '<div id="' . $field . 'Div"><ul>';
            if (is_file(ROOT_PATH . UPLOAD_PATH . $newsinfo->$field))
                $returnStr .= '<li class="wait"><a href="' . UPLOAD_PATH . $newsinfo->$field . '" target="_blank"><img src="' . UPLOAD_PATH . $newsinfo->$field . '"></a><input type="hidden" name="upload1" value="' . $newsinfo->$field . '"><span class="closed"></span></li>';
            $returnStr .= '<li class="uploadButtonDiv" id="' . $field . 'ButtonDiv"><input id="' . $field . 'Button" type="file" name="file" size="1"/></li>
</ul></div>';
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * 多图片上传
     */
    public function showUploadMulti($field, $newsinfo) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array($field, $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= $this->$field;
            $returnStr .= '</td><td class="textleft">';
            $returnStr .= '<div class="multiPicDiv" id="multiPicDiv"><ul>';
            if ($newsinfo->multiPic) {
                $picArray = explode("\n", $newsinfo->multiPic); //0order 1url 2title 3default
                asort($picArray);
                foreach ($picArray as $value) {
                    $picInfoArray = explode('|', $value);
                    $defaultText = $picInfoArray[3] == 1 ? "默认图片" : "设为默认图";
                    if (is_file(ROOT_PATH . UPLOAD_PATH . $picInfoArray[1]))
                        $returnStr .= '<li class="waits"><div class="list_img"><a href="' . UPLOAD_PATH . $picInfoArray[1] . '" target="_blank"><img src="' . UPLOAD_PATH . $picInfoArray[1] . '"></a></div><input type="text" class="multiInputTitle" name="multiTitle[]" value="' . $picInfoArray[2] . '" /><input type="text" class="multiInputOrder" name="multiOrder[]" value="' . $picInfoArray[0] . '" /><input type="hidden" name="multiUrl[]" value="' . $picInfoArray[1] . '" /><input type="hidden" name="multiDefault[]" value="' . $picInfoArray[3] . '"><div class="default_box" style="display: none;"><span class="default_picbg"></span><span class="default_pictext"><a>' . $defaultText . '</a></span></div><span class="closed"></span></li>';
                }
            }
            $returnStr .= '<li class="uploadButtonDiv" id="multiPicButtonDiv"><input id="multiPicButton" type="file" name="file" size="1"/></li>
</ul></div>';
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * 回复字段
     */
    public function showHuifuContent($field, $newsinfo) {
        $tcitFieldsArray = array_filter(explode('|', $this->tcitFields));
        if (in_array('huifu', $tcitFieldsArray)) {
            $returnStr = '<tr><td>';
            $returnStr .= '回复';
            $returnStr .= '</td><td class="textleft">';
            $returnStr .= '<textarea cols="100" rows="3" name="' . $field . '">' . stripslashes($newsinfo->$field) . '</textarea>';
            $returnStr .='</td></tr>';
            return $returnStr;
        }
        return NULL;
    }

    /**
     * 会员中心 input 字段
     * @param type $field
     * @return string|null
     */
    public function showMemberInput($field, $fieldText, $newsinfo, $type) {
        $returnStr = '<tr><td>';
        $returnStr .= $fieldText;
        $returnStr .= '</td><td class="textleft">';
        if ($type == 'radio') {
            $S = $field . 'Text';
            foreach (MemberTable::$$S as $k => $v) {
                if ($newsinfo->$field == $k)
                    $checked = 'checked';
                else
                    $checked = '';
                $returnStr .= '<input type="radio" name="' . $field . '" value="' . $k . '" ' . $checked . ' /> ' . $v . '　';
            }
        }elseif ($type == 'avatar') {
            $returnStr .= $newsinfo->$field ? '<a href="' . $newsinfo->$field . '" target="_blank">' . $newsinfo->$field . '</a>' : '无';
        } elseif ($type == 'time') {
            $returnStr .= date('Y-m-d H:i:s', $newsinfo->$field);
        }else
            $returnStr .= '<input type="text" name="' . $field . '" value="' . $newsinfo->$field . '" />';
        $returnStr .='</td></tr>';
        return $returnStr;

        return NULL;
    }

}

?>