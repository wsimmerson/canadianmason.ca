<?php
/**
 * build menu based on dir/file
 **/
function build_menu($basedir, $path) {

  $menu = '';
  if (is_dir($basedir)) {
    $list = scandir($basedir);
    $title = str_replace('_', ' ', end(explode('/', $basedir)));
    $menu = "<div class='category'><a href='http://".SITEROOT.'/'.$path."'>{$title}</a>";
    foreach($list as $link){
      if ($link != '.' && $link != '..') {
        if (is_dir($basedir.'/'.$link)) {
          $menu .= build_menu($basedir.'/'.$link, $path.'/'.$link);
        }
        else {
          $link = str_replace('.php', '', $link);
          $new_link = str_replace('_', ' ', $link);
          $menu .= "<div class='item'>
                      <a href='http://".SITEROOT."/".$path."/".$link."'>
                        {$new_link}</a>
                    </div>";
        }
      }
    }
    $menu .= "</div>";
    
  }


  return $menu;
}
