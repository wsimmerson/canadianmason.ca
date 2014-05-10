<?php

  /**
   * Page entry
   **/
  require_once('config.php');
  require_once('lib/router.php');


  $route = new Router();
  $page = $route->getPage();

  require_once('template.php');

  var_dump(DOCROOT);
  var_dump(SITEROOT);
  var_dump($_SERVER['REQUEST_URI']);
