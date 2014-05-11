<?php

  $path = $_SERVER['REQUEST_URI'];
  $parts = explode('/', $path);
 
  $dir = DOCROOT.'/pages/'.$path;

  $list = scandir($dir);
  var_dump($path);

?>

<div class='crumbs'>
  <?php
    foreach ($parts as $part) {
      if ($part !== '') {
        $name = str_replace('_', ' ', $part);
        #$name = $part;
        print "<a href='http://".SITEROOT."/".$part."'>$name</a>";
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
        $name = str_replace('.php', '', $link);
        print "<li><a href='http://".SITEROOT.$path.$name."'>$name</a></li>";
      }

    }
  ?>
  </ul>
</div>