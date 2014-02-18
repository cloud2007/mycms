<?php

/**
 * 数据库操作
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class DatabaseModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function backup() {
        $dataArray = array('category', 'grant', 'member', 'menu', 'message', 'news', 'user');
        $mysql = '';
        foreach ($dataArray as $v) {
            $table = TABLE_PREFIX . '_' . $v;
            $q2 = mysql_query("show create table `$table`");
            $sql = mysql_fetch_array($q2);
            $mysql .= $sql['Create Table'] . ";\r\n";
            $q3 = mysql_query("select * from `$table`");
            while ($data = mysql_fetch_assoc($q3)) {
                $keys = array_keys($data);
                $keys = array_map('addslashes', $keys);
                $keys = join('`,`', $keys);
                $keys = "`" . $keys . "`";
                $vals = array_values($data);
                $vals = array_map('addslashes', $vals);
                $vals = join("','", $vals);
                $vals = "'" . $vals . "'";
                $mysql .= "insert into `$table`($keys) values($vals);\r\n";
            }
        }
        $filename = 'Backup/' . 'Backup' . date('Y-m-d-H') . ".sql";
        file_put_contents(ROOT_PATH . $filename, $mysql);
        return $filename;
    }

}

?>