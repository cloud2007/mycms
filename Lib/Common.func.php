<?php

/**
 * 公共函数库
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
//自动加载类库
function __autoload($classname) {
    $classname = preg_replace("/[^0-9a-z_]/i", '', $classname);
    $classfile = $classname . '.php';
    if (file_exists(LIB_PATH . '/' . $classfile)) {
        require LIB_PATH . '/' . $classfile;
    } else if (file_exists(CONTROLLER_PATH . '/' . $classfile)) {
        require CONTROLLER_PATH . '/' . $classfile;
    } else if (file_exists(MODEL_PATH . '/' . $classfile)) {
        require MODEL_PATH . '/' . $classfile;
    } else if (file_exists(LIBRARY_PATH . '/' . $classfile)) {
        require LIBRARY_PATH . '/' . $classfile;
    } else {
        echo '<pre>';
        echo $classname . '发生错误！';
        echo '</pre>';
        exit();
    }
}

/**
 *  短消息函数,可以在某个动作处理后友好的提示信息
 *
 * @param     string  $msg      消息提示信息
 * @param     string  $gourl    跳转地址
 * @param     int     $onlymsg  仅显示信息
 * @param     int     $limittime  限制时间
 * @return    void
 */
function ShowMsg($msg, $gourl, $onlymsg = 0, $limittime = 0) {
    if (empty($GLOBALS['cfg_plus_dir']))
        $GLOBALS['cfg_plus_dir'] = '..';

    $htmlhead = "<html>\r\n<head>\r\n<title>提示信息</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n";
    $htmlhead .= "<base target='_self'/>\r\n<style>div{line-height:160%;}</style></head>\r\n<body leftmargin='0' topmargin='0' bgcolor='#FFFFFF'>" . (isset($GLOBALS['ucsynlogin']) ? $GLOBALS['ucsynlogin'] : '') . "\r\n<center>\r\n<script>\r\n";
    $htmlfoot = "</script>\r\n</center>\r\n</body>\r\n</html>\r\n";

    $litime = ($limittime == 0 ? 1000 : $limittime);
    $func = '';

    if ($gourl == '-1') {
        if ($limittime == 0)
            $litime = 1000;
        $gourl = "javascript:history.go(-1);";
    }

    if ($gourl == '' || $onlymsg == 1) {
        $msg = "<script>alert(\"" . str_replace("\"", "“", $msg) . "\");</script>";
    } else {
        //当网址为:close::objname 时, 关闭父框架的id=objname元素
        if (preg_match('/close::/', $gourl)) {
            $tgobj = trim(preg_replace('/close::/', '', $gourl));
            $gourl = 'javascript:;';
            $func .= "window.parent.document.getElementById('{$tgobj}').style.display='none';\r\n";
        }

        $func .= "      var pgo=0;
      function JumpUrl(){
        if(pgo==0){ location='$gourl'; pgo=1; }
      }\r\n";
        $rmsg = $func;
        $rmsg .= "document.write(\"<br /><div style='width:450px;padding:0px;border:1px solid #DADADA; margin:10% auto 0 auto;font:12px/24px Courier New,Microsoft Yahei,宋体;'>";
        $rmsg .= "<div style='padding:6px;font-size:14px;border-bottom:1px solid #DADADA;background:#EEE';'><b>提示信息！</b></div>\");\r\n";
        $rmsg .= "document.write(\"<div style='height:130px;font-size:10pt;background:#ffffff'><br />\");\r\n";
        $rmsg .= "document.write(\"" . str_replace("\"", "“", $msg) . "\");\r\n";
        $rmsg .= "document.write(\"";

        if ($onlymsg == 0) {
            if ($gourl != 'javascript:;' && $gourl != '') {
                $rmsg .= "<br /><br /><a style='color:Green; text-decoration:none;' href='{$gourl}'>如果你的浏览器没反应，请点击这里...</a>";
                $rmsg .= "<br/></div>\");\r\n";
                $rmsg .= "setTimeout('JumpUrl()',$litime);";
            } else {
                $rmsg .= "<br/></div>\");\r\n";
            }
        } else {
            $rmsg .= "<br/><br/></div>\");\r\n";
        }
        $msg = $htmlhead . $rmsg . $htmlfoot;
    }
    echo $msg;
    die;
}

/**
 *  短消息函数，只显示提示信息
 */
function ShowNote($msg) {
    $htmlhead = "<html>\r\n<head>\r\n<title>提示信息</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n";
    $htmlhead .= "<style>div{line-height:200%;}a{ text-decoration:none}a:hover{ text-decoration:underline}</style></head>\r\n<body leftmargin='0' topmargin='0' bgcolor='#FFFFFF'>\r\n<center>\r\n";
    $htmlfoot = "</center>\r\n</body>\r\n</html>\r\n";
    $rmsg .= "<div style='width:450px;padding:0px;border:1px solid #DADADA; margin:10% auto 0 auto;font:12px/24px Courier New,Microsoft Yahei,宋体;'>";
    $rmsg .= "<div style='padding:6px;font-size:14px;border-bottom:1px solid #DADADA;background:#EEE';'><b>提示信息！</b></div>";
    $rmsg .= "<div style='height:130px;font-size:10pt;background:#ffffff'><br />";
    $rmsg .= str_replace("\"", "“", $msg);
    $msg = $htmlhead . $rmsg . $htmlfoot;
    echo $msg;
}

/**
 *  获取验证码的session值
 *
 * @return    string
 */
function GetCkVdValue() {
    @session_id($_COOKIE['PHPSESSID']);
    @session_start();
    return isset($_SESSION['securimage_code_value']) ? $_SESSION['securimage_code_value'] : '';
}

/**
 *  PHP某些版本有Bug，不能在同一作用域中同时读session并改注销它，因此调用后需执行本函数
 *
 * @return    void
 */
function ResetVdValue() {
    @session_start();
    $_SESSION['securimage_code_value'] = '';
}

function _RunMagicQuotes(&$svar) {
    if (!get_magic_quotes_gpc()) {
        if (is_array($svar)) {
            foreach ($svar as $_k => $_v)
                $svar[$_k] = _RunMagicQuotes($_v);
        } else {
            if (strlen($svar) > 0 && preg_match('#^(cfg_|GLOBALS|_GET|_POST|_COOKIE)#', $svar)) {
                exit('Request var not allow!');
            }
            $svar = addslashes($svar);
        }
    }
    return $svar;
}

//检查和注册外部提交的变量   (2011.8.10 修改登录时相关过滤)
function CheckRequest(&$val) {
    if (is_array($val)) {
        foreach ($val as $_k => $_v) {
            if ($_k == 'nvarname')
                continue;
            CheckRequest($_k);
            CheckRequest($val[$_k]);
        }
    } else {
        if (strlen($val) > 0 && preg_match('#^(cfg_|GLOBALS|_GET|_POST|_COOKIE)#', $val)) {
            exit('Request var not allow!');
        }
    }
}

//var_dump($_REQUEST);exit;
//CheckRequest($_REQUEST);

foreach (Array('_GET', '_POST', '_COOKIE') as $_request) {
    foreach ($$_request as $_k => $_v) {
        if ($_k == 'nvarname')
            ${$_k} = $_v;
        else
            ${$_k} = _RunMagicQuotes($_v);
    }
}

/**
 * 系统邮件发送函数
 * @param string $to    接收邮件者邮箱
 * @param string $name  接收邮件者名称
 * @param string $subject 邮件主题
 * @param string $body    邮件内容
 * @param string $attachment 附件列表 单文件/数组
 * @return boolean
 */
function SendMail($to, $name, $subject = '', $body = '', $attachment = null) {
    $config = Config::item('Config.EMAIL_CONFIG');
    $mail = new PHPMailer(); //PHPMailer对象
    $mail->CharSet = 'UTF-8'; //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP();  // 设定使用SMTP服务
    $mail->SMTPDebug = 0;                     // 关闭SMTP调试功能
    // 1 = errors and messages
    // 2 = messages only
    $mail->SMTPAuth = true;                  // 启用 SMTP 验证功能
    $mail->SMTPSecure = 'ssl';                 // 使用安全协议
    $mail->Host = $config['SMTP_HOST'];  // SMTP 服务器
    $mail->Port = $config['SMTP_PORT'];  // SMTP服务器的端口号
    $mail->Username = $config['SMTP_USER'];  // SMTP服务器用户名
    $mail->Password = $config['SMTP_PASS'];  // SMTP服务器密码
    $mail->SetFrom($config['FROM_EMAIL'], $config['FROM_NAME']);
    $replyEmail = $config['REPLY_EMAIL'] ? $config['REPLY_EMAIL'] : $config['FROM_EMAIL'];
    $replyName = $config['REPLY_NAME'] ? $config['REPLY_NAME'] : $config['FROM_NAME'];
    $mail->AddReplyTo($replyEmail, $replyName);
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
    $mail->AddAddress($to, $name);
    if (is_array($attachment)) { // 添加附件
        foreach ($attachment as $file) {
            is_file($file) && $mail->AddAttachment($file);
        }
    } else {
        is_file($attachment) && $mail->AddAttachment($attachment);
    }
    return $mail->Send() ? true : $mail->ErrorInfo;
}

?>