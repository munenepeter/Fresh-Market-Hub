<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;

class SalesController {
     
    public function checkout() {
     
        $id = $_SESSION['id'];
        $user = App::get('database')->checkoutUser($id);

        return view('checkout', [
            'user' => $user
        ]);
    }
}
