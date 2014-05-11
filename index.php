<?php

  /**
   * Page entry
   **/
  require_once('config.php');
  require_once('lib/router.php');
  require_once('lib/func.php');


  $route = new Router();
  $page = $route->getPage();

  require_once('template.php');
