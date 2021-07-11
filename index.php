<?php

use App\Core\Router;
use App\Core\Request;
use App\Core\Exceptions\NOTFoundException;

require 'vendor/autoload.php';
require 'Core/bootstrap.php';



try {
  //Try to load the routes, direct the URI and check the request method
  Router::load('routes.php')->direct(Request::uri(), Request::method());

} catch (NOTFoundException $e) {

  $message = $e->getMessage();
  $code = $e->getCode();
  $file = $e->getFile();
  $line = $e->getLine();
  $trace = $e->getTraceAsString();

  return viewErrors('ClientExceptions', [
    
    'message' => $message,
    'code'   => $code,
    'file'   => $file,
    'line'   => $line,
    'trace'   => $trace
  ]);
}
