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
        $_SESSION['col'] = $_SESSION['col'] ? $_SESSION['col'] : $_GET['col'];
        $_SESSION['dat'] = $_SESSION['dat'] ? $_SESSION['dat'] : $_GET['dat'];
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
                    'order' => array('lmID' => 'asc'),
                    'limit' => "{$PageNum},{$PageSize}"
                )
        );
        $view = new View('category/categoryList');
        $view->set('NewsList', $res);
        $view->set('PagerData', $PagerData);
        $view->renderHeaderFooterHtml($view);
    }

    function add() {
        $tree = new Tree();
        $data = array(
            1 => array('id' => '1', 'parentid' => 0, 'name' => '一级栏目一'),
            2 => array('id' => '2', 'parentid' => 0, 'name' => '一级栏目二'),
            3 => array('id' => '3', 'parentid' => 1, 'name' => '二级栏目一'),
            4 => array('id' => '4', 'parentid' => 1, 'name' => '二级栏目二'),
            5 => array('id' => '5', 'parentid' => 2, 'name' => '二级栏目三'),
            6 => array('id' => '6', 'parentid' => 3, 'name' => '三级栏目一'),
            7 => array('id' => '7', 'parentid' => 3, 'name' => '三级栏目二')
        );
        $tree->tree($data);
        //$tree->getArray($data); // 如果使用数组, 请使用 getArray方法
        echo '<select>';
        echo $tree->get_tree(0, "<option value=\$id \$select>\$spacer\$name</option>", $i); // 下拉菜单选项使用 get_tree方法
        echo '</secect>';

        die;

        if (!$_SESSION['col'] && !$_SESSION['dat']) {
            echo 'There is some wrong , please stop! ';
            die;
        }
        $view = new View('category/categoryAdd');
        $data = new MenuTable();
        $data->load($_SESSION['col']);
        $view->set('datainfo', $data);
        if ($_GET[1] || is_int($_GET[1])) {
            $newsinfo = new NewsTable();
            $newsinfo->load($_GET[1]);
            $view->set('newsinfo', $newsinfo);
        }
        $view->renderHeaderFooterHtml($view);
    }

}

?>