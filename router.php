<?php
/**
 * Router
 */

class Router {

    function __construct() {
        $path = $_SERVER['REQUEST_URI'];

        var_dump($path);

        $file = DOCROOT.$path.'.php';
        $dir = DOCROOT.$path;

        if (file_exists($file)){
            $page = $file;
        }
        else if (file_exists($dir) && is_dir($dir)){
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