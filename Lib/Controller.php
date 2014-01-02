<?php

class Controller {

    public $user = array();

    function __construct() {

    }

    function error($error_id) {
        echo $error_id;
    }

}

?>