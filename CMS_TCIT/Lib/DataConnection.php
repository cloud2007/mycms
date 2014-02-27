<?php

/**
 * 数据库连接
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class DataConnection {

    private static $connection = null;

    public static function getConnection() {
        try {
            $config = Config::item("Mysql.master");
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        if (self::$connection == null) {
            self::$connection = mysql_connect($config['host'], $config['user'], $config['pwd']) or die(mysql_error());
            mysql_select_db($config['dbname']) or die(mysql_error());
            mysql_query('set names utf8') or die(mysql_error());
        }
        return self::$connection;
    }

}

?>
