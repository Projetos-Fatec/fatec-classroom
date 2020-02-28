<?php 

  namespace app\controllers;
  
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Psr\Http\Message\ResponseInterface as Response;
  
  final class TestController
  {
    public function index(Request $request, Response $response, array $args): Response
    {
      return $response->write("Hello World!!");
    }
  }

?>