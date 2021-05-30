<?php

use App\Core\Router;
use App\Core\Request;

require 'vendor/autoload.php';
require 'Core/bootstrap.php';

Router::load('routes.php')->direct(Request::uri(), Request::method());

// try {
//   //Try to load the routes, direct the URI and check the request method


// } catch (\Exception $e) {

//   $message = $e->getMessage();
//   $code = $e->getCode();
//   $file = $e->getFile();
//   $line = $e->getLine();
//   $trace = $e->getTraceAsString();

//   return viewErrors('exceptions', [
//     'message' => $message,
//     'code'   => $code,
//     'file'   => $file,
//     'line'   => $line,
//     'trace'   => $trace
//   ]);
// }
