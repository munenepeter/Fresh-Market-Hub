<?php

class PaymentsController{

    public function storeDetails(){
      //Insert details
      App::get('database')->insert('userdetails', Request::getCheckoutFormDetails());

      //Redirect back with the user details
      $id = $_SESSION['id'];
      $user = App::get('database')->checkoutUser($id);
      
      return view('checkout',[
       'user' => $user
      ]);

    }
}