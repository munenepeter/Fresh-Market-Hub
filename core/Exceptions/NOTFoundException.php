<?php

namespace App\Core\Exceptions;

use Exception;

class NOTFoundException extends Exception {

    public $msg;
    public $code;

    public function __construct(String $msg, Int $code) {
        $this->msg = $msg;
        $this->code = $code;
    }
}
