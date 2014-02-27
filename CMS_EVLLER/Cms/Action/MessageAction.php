<?php

/**
 * system news core
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class MessageAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $Msg = new MessageTable();
        $PageSize = 20;
        $PageNo = (int) @$_GET['PageNo'] ? (int) $_GET['PageNo'] : 1;
        $PageNum = ($PageNo - 1) * $PageSize;
        $Pager = new Pager();
        $PagerData = $Pager->getPagerData($Msg->count(array('whereAnd' => array(array('lmID', '=' . $_SESSION['lam'])))), $PageNo, '/admin.php/Message?', 2, $PageSize); //参数记录数 当前页数 链接地址 显示样式 每页数量
        $res = $MsgsList = $Msg->find(
                array(
                    'whereAnd' => array(array('lmID', '=' . $_SESSION['lam'])),
                    'order' => array('id' => 'desc'),
                    'limit' => "{$PageNum},{$PageSize}"
                )
        );
        $Menu = new MenuTable();
        $Menu->load($_SESSION['col']);
        $view = new View('message/msgList');
        $view->set('MsgList', $res);
        $view->set('PagerData', $PagerData);
        $view->set('Menu', $Menu);
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
        $view = new View('message/msgAdd');
        $Menu = new MenuTable();
        $Menu->load($_SESSION['col']);
        $view->set('Menu', $Menu);

        $datainfo = new MessageTable();
        $datainfo->load($_GET[1]);
        $view->set('datainfo', $datainfo);
        $view->set('PageNo', $_GET['PageNo']);
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * new 保存
     */
    function MessageSave() {
        $Msg = new MessageTable();
        foreach ($_POST as $k => $v) {
            $Msg->$k = $v;
        }
        if (!$Msg->reTime)
            $Msg->reTime = NULL;
        if ($Msg->save())
            ShowMsg('保存成功', '/admin.php/Message?PageNo=' . $_POST['PageNo']);
    }

    /**
     * 删除一条记录
     */
    function delete() {
        $id = $_GET[1];
        $PageNo = $_GET['PageNo'];
        if ($id && is_numeric($id)) {
            $Msg = new MessageTable();
            $Msg->delete($id);
            ShowMsg('删除成功', '/admin.php/Message/?PageNo=' . $PageNo, 0, 1);
        } else {
            die;
        }
    }

    /**
     * 删除记录集合
     */
    function deletes() {
        $id = $_POST['checkID'];
        if (is_array($id)) {
            $Msg = new MessageTable();
            $Msg->deletes('id in(' . implode(',', $id) . ')');
            ShowMsg('删除成功', '/admin.php/Message', 0, 1);
        } else {
            die;
        }
    }

}

?>