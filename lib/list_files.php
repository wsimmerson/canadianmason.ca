<?php

  $path = $_SERVER['REQUEST_URI'];
  $parts = explode('/', $path);
 
  $dir = DOCROOT.'/pages/'.$path;

  $list = scandir($dir);

?>

<div class='crumbs'>
  <?php
    foreach ($parts as $part) {
      if ($part !== '') {
        $name = str_replace('_', ' ', $part);
        print "<a href='http://".SITEROOT."/".$part."'>&gt&gt {$name}</a>";
      }
    }
  ?>
</div>

<div>
  <ul>
  <?php
    foreach($list as $link) {
      if ($link != '.' && $link != '..') {
        $nlink = str_replace('.php', '', $link);
        $name = str_replace('_', ' ', $nlink);
        print "<li><a href='http://".SITEROOT.$path.'/'.$nlink."'>$name</a></li>";
      }

    }
  ?>
  </ul>
</div>
