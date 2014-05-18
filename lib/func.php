<?php
/**
 * build menu based on dir/file
 **/
function build_menu($basedir, $path) {

  $menu = '';
  if (is_dir($basedir)) {
    $list = scandir($basedir);
    $title = str_replace('_', ' ', end(explode('/', $basedir)));
    $menu = "<ul><li><a href='http://".SITEROOT.'/'.$path."'>{$title}</a><ul>";
    foreach($list as $link){
      if ($link != '.' && $link != '..') {
        if (is_dir($basedir.'/'.$link)) {
          $menu .= build_menu($basedir.'/'.$link, $path.'/'.$link);
        }
        else {
          $new_link = str_replace('.php', '', $link);
          $new_link = str_replace('_', ' ', $new_link);
          $menu .= "<li>
                      <a href='http://".SITEROOT."/".$path."/".$new_link."'>
                        - {$new_link}</a>
                    </li>";
        }
      }
    }
    $menu .= "</ul></li></ul>";
    
  }


  return $menu;
}
