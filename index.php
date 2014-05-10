<?php

  /**
   * Page entry
   **/
  var_dump(DOCROOT);
  var_dump($_SERVER['REQUEST_URI']);

  require_once('config.php');
  require_once('router.php');

  $page = new Router();

  require_once('template.php');
