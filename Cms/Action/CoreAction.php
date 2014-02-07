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
        $data = new MenuTable();
        $data->load($_GET[1]);
        $view = new View('core/menuAdd');
        $view->set('datainfo', $data);
        $view->renderHeaderFooterHtml($view);
    }

    //系统信息
    function system() {
        $view = new View('core/system');
        $view->set('Authorize', $this->Authorize);
        $counter = Data::$counter;
        $view->renderHeaderFooterHtml($view, $this->RuntimeObj, $counter);
    }

    //数据库备份
    function databasebackup() {
        $Data = new DatabaseModel();
        $File = $Data->backup();
        $this->RuntimeObj->stop();
        ShowNote("数据备份成功,耗时" . $this->RuntimeObj->spent() . "毫秒<br /><a href='/{$File}' style='color:red' target='_blank'>下载(点击右键另存)</a>");
    }

    //修改用户密码
    function changePwd() {
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
    function userList(){
        
    }

    /**
     * 检测栏目ID是否存在
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