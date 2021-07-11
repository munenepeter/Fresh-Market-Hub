<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;


class PaymentsController {

  public function storeDetails() {
    if (!$_SESSION['login']) {

      header('location: home');

      exit();
    }
    //Insert details
    App::get('database')->insert('userdetails', Request::getCheckoutFormDetails());

    //Redirect back with the user details
    $id = $_SESSION['id'];
    $user = App::get('database')->checkoutUser($id);

    return view('checkout', [
      'user' => $user
    ]);
  }
}
