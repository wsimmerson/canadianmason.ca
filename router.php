<?php
/**
 * Router
 */

class Router {

    function __construct() {
        $path = $_SERVER['REQUEST_URI'];

        var_dump($path);

        $file = DOCROOT.$path.'.php';
        if (file_exists($file)){
            $page = $file;
        }
        else if (){
            // check if dir
            $page = NULL;
        }
        else {
            // 404 message
            $page = NULL;
        }

        return $page;
    }
}