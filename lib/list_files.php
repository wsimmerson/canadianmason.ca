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
        $name = str_replace('_', ' ', $link);
        $name = str_replace('.php', '', $name);
        print "<li><a href='http://".SITEROOT.$path.$name."'>$name</a></li>";
      }

    }
  ?>
  </ul>
</div>
