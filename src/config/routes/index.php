<?php 

  use app\controllers\TestController;

  use function src\config\{
    slimConf
  };

  $app = new \Slim\App(slimConf());

  $app->get("/", TestController::class . ":index");

  $app->run();

?>