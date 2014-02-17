<?php

/**
 * 前台核心Controller
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class AdminAction extends Action {

    public $header, $footer, $uid, $ucode, $MemberInfo;

    function __construct() {
        parent::__construct();
        if (@$_SESSION['uid'] && @$_COOKIE['uid'] && @$_SESSION['uid'] != @$_COOKIE['uid']) {
            $this->LoginOut();
        }
        if (@$_SESSION['uid']) {
            $this->uid = $_SESSION['uid'];
            $this->ucode = $_SESSION['ucode'];
        }
        if (@$_COOKIE['uid']) {
            $this->userID = $_COOKIE['uid'];
            $this->ucode = $_COOKIE['ucode'];
        }
        $this->header = new View('header');
        $this->footer = new View('footer');
    }

    /**
     * 登录动作
     * @return string|int
     */
    function loginAction() {
        if (!$_POST['userID'] || !$_POST['passWord']) {
            return '用户名密码不能为空！';
        } else {
            $Obj = new MemberTable();
            $res = $Obj->find(
                    array(
                        'whereAnd' => array(array('userID', '=\'' . $_POST['userID'] . '\''), array('status', '=1'))
                    )
            );
            if ($res) {
                if ($res[0]->passWord == md5($_POST['passWord'])) {
                    $_SESSION['uid'] = $res[0]->id;
                    $_SESSION['ucode'] = Util::authcode(md5($res[0]->id . $res[0]->userID . $res[0]->passWord), 'ENCODE');
                    setcookie('uid', $res[0]->id, time() + 3600 * 24, '/');
                    setcookie('ucode', Util::authcode(md5($res[0]->id . $res[0]->userID . $res[0]->passWord), 'ENCODE'), time() + 3600 * 24, '/');
                    return 1;
                } else {
                    return '密码错误！';
                }
            } else {
                return '无此用户!';
            }
        }
    }

    /**
     * 检查是否登录并验证
     * @return boolean
     */
    function CheckLogin() {
        $Obj = new MemberTable();
        try {
            $Obj->load($this->uid);
        } catch (Exception $exc) {
            $this->LoginOut();
            die;
        }
        if (md5($Obj->id . $Obj->userID . $Obj->passWord) != Util::authcode($this->ucode)) {
            $this->LoginOut();
            return FALSE;
        }
        if ($Obj->status != 1) {
            $this->LoginOut();
            return FALSE;
        }
        $this->MemberInfo = $Obj;
    }

    /**
     * 检查权限
     * @param type $grant
     * @return boolean
     */
    function checkGrant($grant) {
        $userGrantArray = explode('|', $this->MemberIn->grantWord);
        if (in_array('ALL', $userGrantArray))
            return TRUE;
        if (in_array($grant, $userGrantArray))
            return TRUE;
        exit('非法用户或者权限不足！');
        return FALSE;
    }

    /**
     * 退出登陆
     */
    function LoginOut() {
        setcookie('uid', '', time() - 1, '/');
        setcookie('ucode', '', time() - 1, '/');
        @session_unregister('uid');
        @session_unregister('ucode');
        $_SESSION = array();
        echo "<script language='javascript'>";
        echo "top.location.href=\"/Member/Login\"";
        echo "</script>";
    }

}

?>