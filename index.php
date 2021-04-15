<?php

require 'core/bootstrap.php';
 

 try{
    Router::load('routes.php')->direct(Request::uri(), Request::method());
 }catch(\Exception $e){
     $message = $e->getMessage();
     $code = $e->getCode();
     $file = $e->getFile();
     $line = $e->getLine();
     $trace = $e->getTraceAsString();
   return viewErrors('exceptions',[
     'message' => $message,
     'code'   => $code,
     'file'   => $file,
     'line'   => $line,
     'trace'   => $trace
   ]);
 }