<?php

/**
 * system news core
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class NewsAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $News = new NewsTable();
        $PageSize = 20;
        $PageNo = (int) @$_GET['PageNo'] ? (int) $_GET['PageNo'] : 1;
        $PageNum = ($PageNo - 1) * $PageSize;
        $Pager = new Pager();
        $PagerData = $Pager->getPagerData($News->count(), $PageNo, '/admin.php/News?', 2, $PageSize); //参数记录数 当前页数 链接地址 显示样式 每页数量
        $res = $NewsList = $News->find(
                array(
                    'whereAnd' => array(array('lmID', '=' . $_SESSION['lam'])),
                    'order' => array('id' => 'desc'),
                    'limit' => "{$PageNum},{$PageSize}"
                )
        );
        $view = new View('news/newsList');
        $view->set('NewsList', $res);
        $view->set('PagerData', $PagerData);
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * new 表单构造
     */
    function add() {
        if (!$_SESSION['col'] && !$_SESSION['dat']) {
            echo 'There is some wrong , please stop! ';
            die;
        }
        $view = new View('news/newsAdd');
        $data = new MenuTable();
        $data->load($_SESSION['col']);
        $view->set('datainfo', $data);

        $cateobj = new CategoryTable();
        $tree = new Tree($cateobj->formatArray());

        if ($_GET[1] || is_int($_GET[1])) {
            $newsinfo = new NewsTable();
            $newsinfo->load($_GET[1]);
            $view->set('newsinfo', $newsinfo);
            $dataList = $tree->getArray(0, $newsinfo->categoryID);
        }else{
            $dataList = $tree->getArray();
        }
        $view->set('dataList', $dataList);
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * new 保存
     */
    function newsSave() {
        $News = new NewsTable();
        foreach ($_POST as $k => $v) {
            if (is_array($v))
                $v = implode('|', $v);
            $News->$k = $v;
        }
        if ($_POST['multiUrl']) {
            $multiArray = array();
            foreach ($_POST['multiUrl'] as $k => $v) {
                $multiArray[] = $_POST['multiOrder'][$k] . '|' . $_POST['multiUrl'][$k] . '|' . $_POST['multiTitle'][$k] . '|' . $_POST['multiDefault'][$k];
            }
            $multiStr = implode("\n", $multiArray);
            $News->multiPic = $multiStr;
        }
        if ($News->save())
            ShowMsg('保存成功', '/admin.php/News');
    }

    /**
     * 删除一条记录
     */
    function delete() {
        echo $_GET[1] . '=>delete';
    }

    /**
     * 删除记录集合
     */
    function deletes() {
        print_r($_POST['checkID']);
    }

}

?>