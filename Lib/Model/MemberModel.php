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
            $EmailHref = $_SERVER['SERVER_NAME'] . '/Member/active?active=' . urlencode(Util::authcode($Obj->id, 'ENCODE'));
            $EmailBody = '';
            $EmailBody .='<p>亲爱的' . $_POST['realName'] ? $_POST['realName'] : $_POST['userID'] . '：您好!</p>';
            $EmailBody.='<p>　　感谢您注册 ' . APP_NAME . '，您的登录帐号是' . $_POST['userID'] . '</p>';
            $EmailBody.='<p>　　点击下面的链接完成注册：</p>';
            $EmailBody.='<p>　　<a href="http://' . $EmailHref . '" target="_blank">' . $EmailHref . '</a></p>';
            $EmailBody.='<p>　　(如果点击链接无反应，请复制链接到浏览器里直接打开)</p>';
            $EmailBody.='<br /><br /><p style="text-align: center;">温馨提示：此邮件由系统发送，请勿直接回复。</p>';
            if (SendMail($Obj->email, $Obj->realName, '激活邮件', $EmailBody) === TRUE)
                return '注册成功,激活邮件已经发送到您的邮箱!';
            else
                return '注册成功,请登录后台激活您的账户!';
        } else {
            return '注册发生错误,请重新注册!';
        }
        return FALSE;
    }

    /**
     * 激活用户
     */
    function active() {
        $id = Util::authcode($_GET['active'], 'DECODE');
        $Obj = new MemberTable();
        try {
            $Obj->load($id);
        } catch (Exception $exc) {
            echo '账户不存在，请检查链接！';
            die;
        }
        if ($Obj->status == 0) {
            $Obj->status = 1;
            $Obj->save();
            ShowNote('账户已激活!<br /><a href=/Member>点击登录</a>');
        } else {
            ShowNote('请勿重复激活!<br /><a href=/Member>点击登录</a>');
        }
    }

}