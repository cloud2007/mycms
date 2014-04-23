<?php

/**
 * menu
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class PortAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $view = new View('passport/list');
        $view->set('user', $this->UserInfo);

        $passportlist = new PassportTable();
        $PageSize = 20;
        $PageNo = (int) @$_GET['PageNo'] ? (int) $_GET['PageNo'] : 1;
        $PageNum = ($PageNo - 1) * $PageSize;
        $Pager = new Pager();
        $PagerData = $Pager->getPagerData($passportlist->count(), $PageNo, '/admin.php/Port?', 2, $PageSize);

        $Options = array();
        $Options['order'] = array('id' => 'desc');
        $Options['limit'] = "{$PageNum},{$PageSize}";

        $passportlist = $passportlist->find($Options);

        $view->set('List', $passportlist);
        $view->set('PagerData', $PagerData);
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * new 表单构造
     */
    function add() {
        $view = new View('passport/add');
        $view->set('user', $this->UserInfo);

        $data = new PassportTable();
        if (@$_GET[1] || is_int(@$_GET[1]))
            $data->load($_GET[1]);
        $view->set('datainfo', $data);
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * 保存
     */
    function Save() {
        $passport = new PassportTable();
        if ($_POST['id'])
            $passport->id = $_POST['id'];
        $passport->name = $_POST['name'];
        $passport->tel = $_POST['tel'] ? $_POST['tel'] : $this->UserInfo->tel;
        $passport->addr = $_POST['addr'];
        $passport->medium = $_POST['medium'];
        $passport->mediumbeizhu = $_POST['mediumbeizhu'];
        $passport->type = $_POST['type'];
        $passport->sendtime = $_POST['sendtime'];
        $passport->send = $_POST['send'];
        $passport->taobaoid = $_POST['taobaoid'];
        $passport->teamid = $_POST['teamid'];
        $passport->price = $_POST['price'];
        $passport->reality = $_POST['reality'];
        $passport->yesno = $_POST['yesno'];
        $passport->beizhu = $_POST['beizhu'];
        $passport->status = $_POST['status'];

        if ($passport->save()) {
            $passportinfo = new PassportinfoTable();
            $res = $passportinfo->find(
                    array(
                        'whereAnd' => array(array('passport_id', '=' . $passport->id)),
                        'order' => 'status desc',
                        'limit' => '1',
                    )
            );
            $status = $res ? $res[0]->status : 0;
            $passportinfo->passport_id = $passport->id;
            $passportinfo->user_id = $this->UserInfo->userID;
            $passportinfo->status = $passport->status;
            $passportinfo->beizhu = $passport->beizhu;
            if ($passport->status > $status)
                $passportinfo->save();
        }
        ShowMsg('保存成功', '/admin.php/Port?PageNo=' . $_POST['PageNo']);
    }

    /**
     * 删除一条记录
     */
    function delete() {
        $PageNo = $_GET['PageNo'];
        $id = $_GET[1];
        if ($id && is_numeric($id)) {
            $News = new PassportTable();
            $News->delete($id);
            ShowMsg('删除成功', '/admin.php/Port/?PageNo=' . $PageNo, 0, 1);
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
            $News = new PassportTable();
            $News->deletes('id in(' . implode(',', $id) . ')');
            ShowMsg('删除成功', '/admin.php/Port', 0, 1);
        } else {
            die;
        }
    }

}