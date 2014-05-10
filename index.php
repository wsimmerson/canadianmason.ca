<?php

  /**
   * Page entry
   **/
  require_once('config.php');
  require_once('router.php');

  var_dump(DOCROOT);
  var_dump($_SERVER['REQUEST_URI']);

  $page = new Router();

  require_once('template.php');
