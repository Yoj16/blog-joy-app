<?php

require_once 'src/env.php';
require_once 'src/controllers/FrontController.php';

(new Env(__DIR__ . '/.env'))->load();
$frontController = new FrontController();


try {
  if (isset($_GET['page'])) {
    if ($_GET['page'] === 'create') {
      $frontController->createArticle();
    } else {
      $errorMessage = '404';
      require 'src/views/Error.php';
    }
  } elseif (isset($_GET['action'])) {
    if ($_GET['action'] === 'addArticle') {
      $frontController->addArticle();
    } else {
      $errorMessage = '404';
      require 'src/views/Error.php';
    }
  } else {
    $frontController->homepage();
  }
} catch (Exception $e) {
  $errorMessage = $e->getMessage();
  require 'src/views/Error.php';
}
