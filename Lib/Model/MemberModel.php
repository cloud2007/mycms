<?php

/**
 * 会员注册 相关
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class MemberModel extends Model {

    /**
     * 验证是否存在相同的用户名
     */
    function checkUserID() {
        $Obj = new MemberTable();
        $res = $Obj->find(
                array(
                    'whereAnd' => array(array('userID', '=\'' . $_POST['userID'] . '\''))
                )
        );
        if ($res) {
            if ($res[0]->id != $_POST['id'])
                return '账户已经存在';
        }
        return TRUE;
    }

    /**
     * 验证是否存在相同的邮箱
     */
    function checkEmail() {
        $Obj = new MemberTable();
        $res = $Obj->find(
                array(
                    'whereAnd' => array(array('email', '=\'' . $_POST['email'] . '\''))
                )
        );
        if ($res) {
            if ($res[0]->id != $_POST['id'])
                return '邮箱已经存在';
        }
        return TRUE;
    }

    /**
     * 保存用户
     */
    function save() {
        $Obj = new MemberTable();
        $Obj->lmID = 4;
        foreach ($_POST as $k => $v) {
            $Obj->$k = $_POST[$k];
        }
        $Obj->status = 0;
        $Obj->passWord = md5($_POST['passWord']);
        if ($Obj->save()) {
            echo '<a href="http://' . $_SERVER['SERVER_NAME'] . '/Member/active?active=' . Util::authcode($Obj->id, 'ENCODE') . '" target="_blank">' . $_SERVER['SERVER_NAME'] . '/Member/active?active=' . Util::authcode($Obj->id, 'ENCODE') . '</a>';
            die;
            if (SendMail($Obj->email, $Obj->realName, '激活邮件', '<a href="thhp://' . $_SERVER['SERVER_NAME'] . '/Member/active?c=' . Util::authcode($Obj->id) . '" target="_blank">' . $_SERVER['SERVER_NAME'] . '/Member/active?c=' . Util::authcode($Obj->id) . '</a>'))
                return '注册成功,激活邮件已经发送到您的邮箱!'; else
                return '注册成功,请登录后台激活您的账户!';
        } else {
            return '注册发生错误,请重新注册!';
        }
        return FALSE;
    }

}

?>