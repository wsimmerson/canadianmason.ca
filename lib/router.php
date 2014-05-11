<?php
/**
 * Router
 */

class Router {

   protected $page;

    function __construct() {
        $path = $_SERVER['REQUEST_URI'];

        $file = DOCROOT.'/pages/'.$path.'.php';
        $dir = DOCROOT.'/pages/'.$path;

        if (file_exists($file)){
            $page = $file;
        }
        else if ($path == '/') {
          $page = "lib/front.php";
        }
        else if (file_exists($dir) && is_dir($dir)){
            // check if dir
            $page = "lib/list_files.php";
        }
        else {
            // 404 message
            $page = "lib/404.php";
            header(' ', true, 404);
        }

        $this->page = $page;
    }

    function getPage() {
      return $this->page;
    }
}
