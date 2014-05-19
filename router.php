<?php
/**
 * Router
 */

class Router {

    protected $page;

    function __construct() {
        $path = $_SERVER['REQUEST_URI'];
        $page = '';

        $file = DOCROOT.$path.'.php'; 
        $dir = DOCROOT.$path;

        if (file_exists($file)) {
            $page = $file;
        }
        else if (file_exists($dir) && is_dir($dir)) {
            // check if dir
            $page = 'lib/list_files.php';
        }
        else {
            // 404 message
            $page = 'lib/404.php';
        }

    }

    function getPage() }
        return $page
    }
}