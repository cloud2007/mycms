<?php

/**
 * system menu core
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class CoreAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    /**
     * 栏目列表
     */
    function index() {
        $Menu = new Menu();

        $PageSize = 20;
        $PageNo = (int) $_GET['PageNo'] ? (int) $_GET['PageNo'] : 1;
        $PageNum = ($PageNo - 1) * $PageSize;
        $Pager = new Pager();
        $PagerData = $Pager->getPagerData($Menu->count(), $PageNo, '/admin.php/Core?', 2, $PageSize); //参数记录数 当前页数 链接地址 显示样式 每页数量

        $MenuList = $Menu->find(
                array(
                    'order' => array('lmId' => 'asc'),
                    'limit' => "{$PageNum},{$PageSize}"
                )
        );

        $view = new View('core/menuList');
        $view->set('MenuList', $MenuList);
        $view->set('PagerData', $PagerData);
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * 栏目保存
     */
    function menuSave() {
        $menu = new Menu();
        if ($_POST) {
            if ($_POST['id'])
                $menu->load($_POST['id']);
            $_POST['tcitFields'] = implode('|', $_POST['set_nr']);
            foreach ($_POST as $k => $v) {
                $menu->$k = $v;
            }
            $menu->save();
            ShowMsg('保存成功', '/admin.php/Core');
        } else {

        }
    }

    /**
     * 增加新栏目
     */
    function addMenu() {
        $data = new Menu();
        /*
         * 设置系统默认菜单
         */
        $data->tcitFields = 'title|content|creattime';
        $data->usable = TRUE;
        $data->title = '标题名称';
        $data->content = '详细内容';
        $data->creattime = '创建时间';

        $view = new View('core/menuAdd');
        $view->set('datainfo', $data);
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * 修改栏目
     */
    function modify() {
        $data = new Menu();
        $data->load($_GET[1]);
        $view = new View('core/menuAdd');
        $view->set('datainfo', $data);
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * 检测栏目ID是否存在
     */
    function AjaxColumn() {
        $rs = new Menu();
        $res = array();
        try {
            $rs->load($_POST['param']);
            if ($_GET['lmID'] !== $rs->lmID) {
                $res['info'] = '栏目' . $_GET['lmId'] . '存在';
                $res['status'] = 'n';
            } else {
                $res['info'] = '通过';
                $res['status'] = 'y';
            }
        } catch (Exception $e) {
            $res['info'] = '通过';
            $res['status'] = 'y';
        }
        echo json_encode($res);
    }

}

?>