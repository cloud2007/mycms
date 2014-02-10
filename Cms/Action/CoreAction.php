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
        $this->checkGrant('Core');
        $Menu = new MenuTable();
        $PageSize = 20;
        $PageNo = (int) @$_GET['PageNo'] ? (int) $_GET['PageNo'] : 1;
        $PageNum = ($PageNo - 1) * $PageSize;

        $options = array();
        $options['whereAnd'] = array(array('id', '>10'));
        $options['order'] = array('lmID' => 'asc');
        $options['limit'] = "{$PageNum},{$PageSize}";

        $Pager = new Pager();
        $PagerData = $Pager->getPagerData($Menu->count($options), $PageNo, '/admin.php/Core?', 2, $PageSize); //参数记录数 当前页数 链接地址 显示样式 每页数量

        $MenuList = $Menu->find($options);

        $view = new View('core/menuList');
        $view->set('MenuList', $MenuList);
        $view->set('PagerData', $PagerData);

        $view->renderHeaderFooterHtml($view);
    }

    /**
     * 栏目保存
     */
    function menuSave() {
        $this->checkGrant('Core');
        $menu = new MenuTable();
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
        $this->checkGrant('Core');
        $data = new MenuTable();
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
        $this->checkGrant('Core');
        $data = new MenuTable();
        $data->load($_GET[1]);
        $view = new View('core/menuAdd');
        $view->set('datainfo', $data);
        $view->renderHeaderFooterHtml($view);
    }

    //系统信息
    function system() {
        $this->checkGrant('ALL');
        $view = new View('core/system');
        $view->set('Authorize', $this->Authorize);
        $counter = Data::$counter;
        $view->renderHeaderFooterHtml($view, $this->RuntimeObj, $counter);
    }

    //数据库备份
    function databasebackup() {
        $this->checkGrant('ALL');
        $Data = new DatabaseModel();
        $File = $Data->backup();
        $this->RuntimeObj->stop();
        ShowNote("数据备份成功,耗时" . $this->RuntimeObj->spent() . "毫秒<br /><a href='/{$File}' style='color:red' target='_blank'>下载(点击右键另存)</a>");
    }

    //修改用户密码
    function changePwd() {
        $this->checkGrant('Password');
        if ($_POST) {
            $pwd = trim($_POST['pwd']);
            $pwd1 = trim($_POST['pwd1']);
            $pwd2 = trim($_POST['pwd2']);
            if (!$pwd || !pwd1 || !$pwd2) {
                ShowMsg('输入不完整!', '-1');
                die;
            }
            if (md5($pwd) !== $this->UserInfo->passWord) {
                ShowMsg('原密码输入错误!', '-1');
                die;
            }
            if ($pwd1 !== $pwd2) {
                ShowMsg('两次密码输入不一致!', '-1');
                die;
            }
            $this->UserInfo->passWord = md5($pwd1);
            $this->UserInfo->save();
            ShowMsg('密码修改成功，请重新登录', '/admin.php/User/LoginOut');
            die;
        }
        $view = new View('core/changePwd');
        $view->set('datainfo', $this->UserInfo);
        $view->renderHeaderFooterHtml($view);
    }

    //用户列表
    function userList() {
        $this->checkGrant('User');
        $User = new UserTable();
        $options = array();
        $options['whereAnd'] = array(array('userID', '<>\'cloud\''));
        $options['order'] = array('id' => 'asc');
        $UserList = $User->find($options);
        $view = new View('core/userList');
        $view->set('userList', $UserList);

        $view->renderHeaderFooterHtml($view);
    }

    //用户编辑(未完成)
    function userEdit() {
        $this->checkGrant('User');
        $User = new UserTable();
        if ($_POST) {
            if ($_POST['id']) {
                $User->load($_POST['id']);
                if ($_POST['pwd1'] && $_POST['pwd1'] != $_POST['pwd2']) {
                    ShowMsg('两次密码输入不一致', '/admin.php/Core/userList');
                    die;
                }
                if ($_POST['pwd1'])
                    $User->passWord = md5($_POST['pwd1']);
                $User->grantWord = implode('|', $_POST['grantWord']);
                $User->status = $_POST['status'];
                $User->save();
                ShowMsg('修改成功', '/admin.php/Core/userList');
                die;
            }else {
                if ($_POST['pwd1'] && $_POST['pwd1'] != $_POST['pwd2']) {
                    ShowMsg('两次密码输入不一致', '/admin.php/Core/userList');
                    die;
                }
                if ($_POST['pwd1'])
                    $User->passWord = md5($_POST['pwd1']);
                else
                    $User->passWord = md5('888888');
                $User->userID = $_POST['userID'];
                $User->grantWord = implode('|', $_POST['grantWord']);
                $User->status = $_POST['status'];
                $User->save();
                ShowMsg('添加成功', '/admin.php/Core/userList');
                die;
            }
        }

        $id = $_GET['id'];
        if ($id)
            $User->load($id);
        $view = new View('core/userEdit');
        $view->set('user', $User);

        $view->renderHeaderFooterHtml($view);
    }

    //权限字管理
    function grantList() {
        $this->checkGrant('Grant');
        $Grant = new GrantTable();
        $GrantList = $Grant->find();
        $view = new View('core/grantList');
        $view->set('GrantList', $GrantList);
        $view->renderHeaderFooterHtml($view);
    }

    function addGrant() {
        $this->checkGrant('Grant');
        $Grant = new GrantTable();
        if ($_POST) {
            if ($_POST['id'])
                $Grant->load($_POST['id']);
            $Grant->name = $_POST['name'];
            $Grant->value = $_POST['value'];
            $Grant->status = $_POST['status'];
            $Grant->save();
            ShowMsg('权限字已保存', '/admin.php/Core/grantList');
            die;
        }
        $view = new View('core/grantEdit');
        if ($_GET['id'])
            $Grant->load($_GET['id']);
        $view->set('Grant', $Grant);
        $view->renderHeaderFooterHtml($view);
    }

    function grantStatus() {
        $this->checkGrant('Grant');
        $Grant = new GrantTable();
        $Grant->load($_GET['id']);
        $Grant->status = $_GET['value'];
        $Grant->save();
        ShowMsg('已保存', '/admin.php/Core/grantList');
    }

    function userStatus() {
        $this->checkGrant('User');
        $Grant = new UserTable();
        $Grant->load($_GET['id']);
        $Grant->status = $_GET['value'];
        $Grant->save();
        ShowMsg('已保存', '/admin.php/Core/userList');
    }

    //几个删除页面
    function userDelete(){
        $this->checkGrant('User');
        $obj = new UserTable();
        $obj->delete($_GET[1]);
        ShowMsg('已删除', '/admin.php/Core/userList');
    }
    function grantDelete(){
        $this->checkGrant('Grant');
        $obj = new UserTable();
        $obj->delete($_GET[1]);
        ShowMsg('已删除', '/admin.php/Core/grantList');
    }

    /**
     * 检测栏目ID是否存在(无效页面)
     */
    function ajaxColumn() {
        $rs = new MenuTable();
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