<?php

/**
 * system member
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class MemberAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $Obj = new MemberTable();
        $PageSize = 20;
        $PageNo = (int) @$_GET['PageNo'] ? (int) $_GET['PageNo'] : 1;
        $PageNum = ($PageNo - 1) * $PageSize;
        $Pager = new Pager();
        $PagerData = $Pager->getPagerData($Obj->count(array('whereAnd' => array(array('lmID', '=' . $_SESSION['lam'])))), $PageNo, '/admin.php/Member?', 2, $PageSize); //参数记录数 当前页数 链接地址 显示样式 每页数量
        $res = $Obj->find(
                array(
                    'whereAnd' => array(array('lmID', '=' . $_SESSION['lam'])),
                    'order' => array('id' => 'desc'),
                    'limit' => "{$PageNum},{$PageSize}"
                )
        );
        $Menu = new MenuTable();
        $Menu->load($_SESSION['col']);
        $view = new View('member/memberList');
        $view->set('DataList', $res);
        $view->set('PagerData', $PagerData);
        $view->set('Menu', $Menu);
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * 添加测试数据
     */
    function test() {
        for ($i = 1; $i < 101; $i++) {
            $Obj = new MemberTable();
            $Obj->id = $i;
            $Obj->lmID = 4;
            $Obj->userID = 'cloud' . $i;
            $Obj->avatar = rand(0, 1);
            $Obj->realName = '茴香豆儿' . $i;
            $Obj->passWord = md5('840312');
            $Obj->email = '190296465@qq.com';
            $Obj->sex = rand(0, 1);
            $Obj->phone = '1598225990' . rand(0, 9);
            $Obj->tel = '028-8742665' . rand(0, 9);
            $Obj->status = rand(0, 2);
            $Obj->loginTime = time();
            $Obj->save();
        }
    }

    /**
     * new 表单构造
     */
    function add() {
        if (!$_SESSION['col'] && !$_SESSION['dat']) {
            echo 'There is some wrong , please stop! ';
            die;
        }
        $view = new View('Member/memberAdd');
        $Menu = new MenuTable();
        $Menu->load($_SESSION['col']);
        $view->set('Menu', $Menu);

        $datainfo = new MemberTable();
        $datainfo->load($_GET[1]);
        $view->set('datainfo', $datainfo);
        $view->set('PageNo', $_GET['PageNo']);
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * new 保存
     */
    function MemberSave() {
        $Obj = new MemberTable();
        $Obj->load($_POST['id']);
        $status = $Obj->status;
        foreach ($_POST as $k => $v) {
            $Obj->$k = $v;
        }
        if ($Obj->save()) {
            if ($Obj->status != $status)
                SendMail($Obj->email, $Obj->realName, $Obj->userID . ',你的账号状态已变更!', '你的账号状态已变更<a href="http://www.tcit123.com">点击查看</a>');
            ShowMsg('保存成功', '/admin.php/Member?PageNo=' . $_POST['PageNo']);
        }
    }

    /**
     * 状态改变
     */
    function status() {
        $id = $_GET['id'];
        $op = $_GET['op'];
        $value = $_GET['value'];
        $PageNo = $_GET['PageNo'];
        $News = new MemberTable();
        $News->load($id);
        $News->$op = $value;
        echo $News->creatTime; //die;
        $News->save();
        ShowMsg('保存成功', '/admin.php/Member/?PageNo=' . $PageNo, 0, 1);
    }

    /**
     * 删除一条记录
     */
    function delete() {
        $id = $_GET[1];
        $PageNo = $_GET['PageNo'];
        if ($id && is_numeric($id)) {
            $News = new MemberTable();
            $News->delete($id);
            ShowMsg('删除成功', '/admin.php/Member/?PageNo=' . $PageNo, 0, 1);
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
            $News = new MemberTable();
            $News->deletes('id in(' . implode(',', $id) . ')');
            ShowMsg('删除成功', '/admin.php/Member', 0, 1);
        } else {
            die;
        }
    }

}

?>