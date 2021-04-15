<?php

class ProductsController{

    public function addProducts(){
        $header = 'Add Product';
        return view('add-products',[
         'header' => $header  
        ]);
  }
  
  public function addProductsStore(){
 
    //insert into db

   App::get('database')->insert('products', Request::getProduct());
   
    $header = 'Add Product';
    $message = 'Successfully uploaded a new product';
    return view('add-products',[
        'header' => $header,
        'message' => $message  
       ]);
}
}