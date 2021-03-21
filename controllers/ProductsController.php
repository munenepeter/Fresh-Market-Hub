<?php

class ProductsController{

    public function addProducts(){
        $header = 'Add Product';
        return view('add-products',[
         'header' => $header  
        ]);
  }
  
  public function addProductsStore(){
    
  /*   $new = new Product(
        $data->getProductId(),
        $data->getSellerId(),
        $data->getProductName(),
        $data->getProductDescription(),
        $data->getProductPrice(),
        $data->getAvailableQuantity(),
        $data->getProductImage(),
        $data->getUpdatedDate()
    ); */
 /*    $products = App::get('database')->selectAll('products', 'Product');
    
    foreach($products as $product){
        $data = new Cart();
        $cartItem = $data->addProduct($product, 1);
        $quantity = $data->getTotalQuantity();
        $totalSum = $data->getTotalSum();
        $cartItem->increaseQuantity();

        //
        var_dump($cartItem);
        echo '<br>';
        var_dump($quantity);
        echo '<br>';
        var_dump($totalSum);
       // var_dump($cartItem);
     
    }
    die();
    
    
   
    
     */
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