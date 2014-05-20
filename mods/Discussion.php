<?php

    $parts = explode('/', $_SERVER['REQUEST_URI']);


    if (count($parts) == 3) {
        $page = DOCROOT.'/mods/Discussions/'.$parts[2].'.php';
        $page = str_replace('#disqus_thread', '', $page);

        if (file_exists($page)) {
            require_once($page);
        }
        else {
            require_once(DOCROOT.'/lib/404.php');
        }
    }
    elseif (count($parts) == 2) {
        $list = scandir(DOCROOT.'/mods/Discussions/');
        print "<h2>Discussions</h2>";
        $cnt = 0;
        foreach ($list as $item) {
            $cnt++;
            $class = ($cnt % 2 == 0) ? 'odd' : 'even';

            if ($item != '.' && $item != '..') {
                $name = str_replace('.php', '', $item);
                $dname = str_replace('_', ' ', $name);
                print "<div class='row {$class}'>
                        <a href='http://".SITEROOT."/Discussion/{$name}'>{$dname}</a>
                       <div class='comment-count'>( <a href='http://".SITEROOT."/Discussion/{$name}#disqus_thread'></a> )</div>
                      </div>";
            }
        }
    }
    else {
        require_once(DOCROOT.'/lib/404.php');
    }
