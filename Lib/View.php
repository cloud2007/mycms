<?php

/**
 * 模板引擎类
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2014-01-03
 * @modify:2014-01-03
 */
class View {

    protected $view_filename = FALSE;
    public $name = null;
    protected $data = array();
    private $render = null;

    public function __construct($name, $data = NULL) {
        $this->view_filename = VIEW_PATH . "{$name}.php";
        $this->name = $name;

        if (is_array($data) AND !empty($data)) {
            $this->data = array_merge($this->data, $data);
        }
    }

    /**
     * Sets a view variable.
     *
     * @param   string|array  name of variable or an array of variables
     * @param   mixed         value when using a named variable
     * @return  object
     */
    public function set($name, $value = NULL) {
        if (func_num_args() === 1 AND is_array($name)) {
            foreach ($name as $key => $value) {
                $this->__set($key, $value);
            }
        } else {
            $this->__set($name, $value);
        }
        return $this;
    }

    /**
     * Sets a bound variable by reference.
     *
     * @param   string   name of variable
     * @param   mixed    variable to assign by reference
     * @return  object
     */
    public function bind($name, & $var) {
        $this->data[$name] = & $var;
        return $this;
    }

    /**
     * Magically sets a view variable.
     *
     * @param   string   variable key
     * @param   string   variable value
     * @return  void
     */
    public function __set($key, $value) {
        if (!isset($this->$key)) {
            $this->data[$key] = $value;
        }
    }

    /**
     * Magically gets a view variable.
     *
     * @param  string  variable key
     * @return mixed   variable value if the key is found
     * @return void    if the key is not found
     */
    public function __get($key) {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
    }

    /**
     * Magically converts view object to string.
     *
     * @return  string
     */
    public function __toString() {
        if ($this->render !== null)
            return $this->render;
        try {
            return $this->render();
        } catch (Exception $e) {
            trigger_error($e->getMessage(), E_USER_WARNING);
        }
    }

    /**
     * Renders a view.
     *
     * @param   boolean   set to TRUE to echo the output instead of returning it
     * @return  string    if print is FALSE
     * @return  void      if print is TRUE
     */
    public function render($print = FALSE) {
        // Buffering on
        ob_start();

        // Import the view variables to local namespace
        //extract(array_merge(Page::$context, $this->data), EXTR_SKIP);
        extract($this->data, EXTR_SKIP);

        // Views are straight HTML pages with embedded PHP, so importing them
        // this way insures that $this can be accessed as if the user was in
        // the controller, which gives the easiest access to libraries in views
        include $this->view_filename;

        // Fetch the output and close the buffer
        $this->render = ob_get_clean();

        if ($print == FALSE)
            return $this->render;
        return $this->render;
    }

    function renderHtml($content) {
        echo "{$content}";
    }

    //后台
    function renderHeaderFooterHtml($content) {
        $header = new View('header');
        $footer = new View('footer');
        global $RuntimeObj;
        $RuntimeObj->stop();
        $Runtime = '页面执行时间' . $RuntimeObj->spent() . " 毫秒";
        $footer->set('runtime', $Runtime);
        //数据库查询次数
        $counter = Data::$counter;
        $footer->set('counter', '/数据库查询次数：' . $counter);
        echo "{$header}{$content}{$footer}";
    }

    //前台
    function renderIndexHtml($content) {
        $Obj = new NewsTable();

        $Obj->load(1);
        $header = new View('header');
        $header->set('WebConfig', $Obj);

        $cateObj = new CategoryTable();
        $cateList = $cateObj->getSon(1, 0);
        $header->set('cateList', $cateList);

        $footer = new View('footer');
        $FriendObj = new NewsTable();
        $FriendList = $FriendObj->find(
                array(
                    'whereAnd' => array(array('lmID', '=9'))
                )
        );
        $footer->set('FriendList', $FriendList);
        echo "{$header}{$content}{$footer}";
    }

}

?>