<?php

/**
 * system category core
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class CategoryAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    //列表
    function index() {
        $cateobj = new CategoryTable();
        $tree = new Tree($cateobj->formatArray($_SESSION['lam']));
        $dataList = $tree->getArray();
        $view = new View('category/categoryList');
        $view->set('dataList', $dataList);
        $view->renderHeaderFooterHtml($view);
    }

    //添加类别
    function add() {
        $view = new View('category/categoryAdd');
        $data = new MenuTable();
        $data->load($_SESSION['col']);
        if ($_GET[1] || is_int($_GET[1])) {
            $cateinfo = new CategoryTable();
            $cateinfo->load($_GET[1]);
        } else {
            //最大orderNo计算
            $cateinfo = new CategoryTable();
            $cateinfo->Aggregate('max', 'orderNo');
            $cateinfo->orderNo = $cateinfo->max + 1;
        }
        $view->set('cateinfo', $cateinfo);
        //类别数组
        if (strpos($data->tcitFields, 'noSonType')===FALSE) {
            $cateobj = new CategoryTable();
            $tree = new Tree($cateobj->formatArray());
            $dataList = $tree->getArray(0, $cateinfo->parentID);
            $view->set('dataList', $dataList);
        }
        $view->set('datainfo', $data);
        $view->renderHeaderFooterHtml($view);
    }

    //添加子类别
    function addson() {
        $view = new View('category/categoryAdd');
        $data = new MenuTable();
        $data->load($_SESSION['col']);
        if ($_GET[1] || is_int($_GET[1])) {
            $cateobj = new CategoryTable();
            $tree = new Tree($cateobj->formatArray());
            $dataList = $tree->getArray(0, $_GET[1]);
        }
        $view->set('dataList', $dataList);
        $view->set('datainfo', $data);
        $view->renderHeaderFooterHtml($view);
    }

    //保存
    function categorySave() {
        $Cateobj = new CategoryTable();
        foreach ($_POST as $k => $v) {
            $Cateobj->$k = $v;
        }
        if ($_POST['multiUrl']) {
            $multiArray = array();
            foreach ($_POST['multiUrl'] as $k => $v) {
                $multiArray[] = $_POST['multiOrder'][$k] . '|' . $_POST['multiUrl'][$k] . '|' . $_POST['multiTitle'][$k] . '|' . $_POST['multiDefault'][$k];
            }
            $multiStr = implode("\n", $multiArray);
            $Cateobj->multiPic = $multiStr;
        }
        if ($Cateobj->save())
            ShowMsg('保存成功', '/admin.php/Category');
    }

    //向上移动
    function up() {
        $oldObj = new CategoryTable();
        $oldObj->load($_GET[1]);

        $Obj = new CategoryTable();

        $res = $Obj->find(
                array(
                    'whereAnd' => array(array('lmID', '=' . $oldObj->lmID), array('parentID', '=' . $oldObj->parentID), array('orderNo', '<' . $oldObj->orderNo)),
                    'order' => array('orderNo' => 'desc'),
                    'limit' => '1'
                )
        );
        if ($res) {
            $newObj = new CategoryTable();
            $newObj->load($res[0]->id);
            $temp = $newObj->orderNo;
            $newObj->orderNo = $oldObj->orderNo;
            $oldObj->orderNo = $temp;
            $newObj->save();
            $oldObj->save();
            ShowMsg('保存成功！', '/admin.php/Category', 0, 1);
            die;
        } else {
            ShowMsg('无更改！', '/admin.php/Category');
        }
    }

    //向下移动
    function down() {
        $oldObj = new CategoryTable();
        $oldObj->load($_GET[1]);

        $Obj = new CategoryTable();

        $res = $Obj->find(
                array(
                    'whereAnd' => array(array('lmID', '=' . $oldObj->lmID), array('parentID', '=' . $oldObj->parentID), array('orderNo', '>' . $oldObj->orderNo)),
                    'order' => array('orderNo' => 'asc'),
                    'limit' => '1'
                )
        );
        if ($res) {
            $newObj = new CategoryTable();
            $newObj->load($res[0]->id);
            $temp = $newObj->orderNo;
            $newObj->orderNo = $oldObj->orderNo;
            $oldObj->orderNo = $temp;
            $newObj->save();
            $oldObj->save();
            ShowMsg('保存成功！', '/admin.php/Category', 0, 1);
            die;
        } else {
            ShowMsg('无更改！', '/admin.php/Category');
        }
    }

    /**
     * 删除
     */
    function delete() {
        $id = $_GET[1];
        if ($id && is_numeric($id)) {
            $Cate = new CategoryTable();
            $Cate->delete($id);
            ShowMsg('删除成功', '/admin.php/Category', 0, 1);
        } else {
            die;
        }
    }

}

?>