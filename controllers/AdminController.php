<?php

namespace App\Controllers;

use App\Core\Request;

class AdminController {

    protected $parameter;

    /**
     * editUser
     * Todo 
     * it is supposed to return
     * the edit page of a user
     * @return void
     */
    public function editUser() {
     $this->parameter = Request::uriParameters();
      echo $this->parameter;
    }
}
