<?php

/**
 * 用户登陆 验证 权限 相关
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class UserModel extends Model {

    private $userID = '';
    private $userCode = '';

    /**
     *
     */
    public function __construct() {
        parent::__construct();
        if (@$_SESSION['userID'] && @$_COOKIE['userID'] && @$_SESSION['userID'] != @$_COOKIE['userID']) {
            $this->LoginOut();
        }
        if (@$_SESSION['userID']) {
            $this->userID = $_SESSION['userID'];
            $this->userCode = $_SESSION['userCode'];
        }
        if (@$_COOKIE['userID']) {
            $this->userID = $_COOKIE['userID'];
            $this->userCode = $_COOKIE['userCode'];
        }
    }

    /**
     * 判断登陆信息是否合法
     * @return $u 用户信息
     */
    function CheckLogin() {
        $u = new UserTable();
        try {
            $u->load($this->userID);
        } catch (Exception $exc) {
            $this->LoginOut();
            die;
        }
        if (md5($u->id . $u->userID . $u->passWord) != Util::authcode($this->userCode)) {
            $this->LoginOut();
            return FALSE;
        }
        if ($u->status != 1) {
            $this->LoginOut();
            return FALSE;
        }
        return $u;
    }

    /**
     * 登陆
     */
    function LoginAction() {
        if (!$_POST['userID'] || !$_POST['passWord']) {
            echo '用户名密码不能为空！';
        } else {
            $user = new UserTable();
            $res = $user->find(
                    array(
                        'whereAnd' => array(array('userID', '=\'' . $_POST['userID'] . '\''), array('status', '=1'))
                    )
            );
            if ($res) {
                if ($res[0]->passWord == md5($_POST['passWord'])) {
                    $_SESSION['userID'] = $res[0]->id;
                    $_SESSION['userCode'] = Util::authcode(md5($res[0]->id . $res[0]->userID . $res[0]->passWord), 'ENCODE');
                    if ($_POST['remember'] == 1) {
                        setcookie('userID', $res[0]->id, time() + 3600 * 24, '/');
                        setcookie('userCode', Util::authcode(md5($res[0]->id . $res[0]->userID . $res[0]->passWord), 'ENCODE'), time() + 3600 * 24, '/');
                    } else {
                        setcookie('userID', '', time() - 1);
                        setcookie('userCode', '', time() - 1);
                    }
                    echo 1;
                } else {
                    echo '密码错误！';
                }
            } else {
                echo '无此用户!';
            }
        }
    }

    /**
     * 退出登陆
     */
    function LoginOut() {
        setcookie('userID', '', time() - 1, '/');
        setcookie('userCode', '', time() - 1, '/');
        @session_unregister('userID');
        @session_unregister('userCode');
        $_SESSION = array();
        echo "<script language='javascript'>";
        echo "top.location.href=\"/admin.php/User/Login\"";
        echo "</script>";
    }

}

?>