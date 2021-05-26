<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;

class SalesController {
     
    public function checkout() {
        // $data = preg_replace('!s:(\d+):"(.*?)";!', "'s:'.strlen('$2').':\"$2\";'", $_POST['sales']);
       // die(var_dump(unserialize(base64_decode($_POST['sales']))));
        //die(var_dump(json_decode(base64_decode($_POST['sales']))));
        //die(var_dump(Request::getSales()));

        $id = $_SESSION['id'];
        $user = App::get('database')->checkoutUser($id);

        return view('checkout', [
            'user' => $user
        ]);
    }
}
