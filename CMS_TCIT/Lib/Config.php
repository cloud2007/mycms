<?php

/**
 * 获取的配置信息
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class Config {

    private static $conf = array();

    /**
     * 获取config目录下配置文件的信息 配置文件用return array();的方式来实现
     * @param string $key 配置文件的文件名以及数组的key, 如mysql.master.host表示查找config目录中mysql.php里面的['master']['host']的value
     * @return mixed 返回可能是string或者array(),根据配置文件而定
     */
    public static function item($key) {
        $keys = explode('.', $key);
        $file = current($keys);
        if (isset(self::$conf[$file]))
            $rs = self::$conf[$file];
        elseif (is_file(ROOT_PATH . "/Config/{$file}.php")) {
            $rs = self::$conf[$file] = include_once(ROOT_PATH . "/Config/{$file}.php");
        }
        elseif (is_file(ADMIN_PATH . "/Config/{$file}.php")) {
            $rs = self::$conf[$file] = include_once(ADMIN_PATH . "/Config/{$file}.php");
        }
        elseif (is_file(APP_PATH . "/Config/{$file}.php")) {
            $rs = self::$conf[$file] = include_once(APP_PATH . "/Config/{$file}.php");
        }else {
            return NULL;
            //throw new Exception("file [{$file}] not found in config dir");
        }
        array_shift($keys); //shift the file
        foreach ($keys as $k) {
            if (array_key_exists($k, (array) $rs))
                $rs = $rs[$k];
            else
                return NULL; //throw new Exception("[{$k}] is undefined in file [{$key}]");
        }
        return $rs;
    }

}

?>