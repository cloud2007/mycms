<?php

/**
 * Member
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class MemberAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    /**
     * 会员中心
     */
    function index() {
        $this->CheckLogin();
        $view = new View('Member/index');
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * 登录页面
     */
    function login() {
        if (isset($_SESSION['uid']) || isset($_COOKIE['ucode']))
            header('Location:/Member');
        if ($_POST) {
            $res = $this->LoginAction();
            if ($res === 1)
                ShowMsg('登录成功', '/Member');
            else
                ShowMsg($res, '/Member/login');
        }
        $view = new View('/Member/login');
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * 注册新用户
     */
    function reg() {
        if ($_POST) {
            $Model = new MemberModel();
            if ($Model->checkUserID() != 1)
                ShowMsg('账户已经存在', '/Member/');
            if ($Model->checkEmail() != 1)
                ShowMsg('邮箱已经存在', '/Member/');
            ShowMsg($Model->save(), '/Member/');
        }
        $view = new View('Member/reg');
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * 个人资料修改
     */
    function myinfo() {
        echo 'myinfo';
    }

    /**
     * 重设密码
     */
    function reset() {
        $this->CheckLogin();
        $view = new View('/Member/reset');
        $view->MemberInfo = $this->MemberInfo;
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * 发送邮箱验证码
     */
    function sendMailCode() {
        $this->CheckLogin();
        $Code = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
        $Obj = new MemberTable();
        $Obj->load($this->MemberInfo->id);
        $Obj->mailCode = $Code;
        $Obj->save();
        $EmailName = $this->MemberInfo->realName ? $this->MemberInfo->realName : $this->MemberInfo->userID;
        $EmailBody = '';
        $EmailBody .='<p>亲爱的' . $this->MemberInfo->realName ? $this->MemberInfo->realName : $this->MemberInfo->userID . '：您好!</p>';
        $EmailBody.='<p>　　下面是你的重设密码验证码：</p>';
        $EmailBody.='<p>　　' . $Code . '</p>';
        $EmailBody.='<p>　　(如非本人操作，请无视该邮件)</p>';
        $EmailBody.='<br /><br /><p style="text-align: center;">温馨提示：此邮件由系统发送，请勿直接回复。</p>';
        if (SendMail($this->MemberInfo->email, $EmailName, '密码重设验证码', $EmailBody) === TRUE)
            echo 1;
        else {
            echo 'error';
        }
    }

    /**
     * 激活用户
     */
    function active() {
        $Model = new MemberModel();
        $Model->active();
    }

    /**
     * 退出登录
     */
    function LoginOut() {
        parent::LoginOut();
    }

}

?>