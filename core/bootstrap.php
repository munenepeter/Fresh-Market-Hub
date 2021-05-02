<?php

use App\Core\App;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;


//Require the App Class -> binder of the most important parts like the DB
//require 'core/App.php';

//Bind the config file(The database credentials)
App::bind('config', require 'config.php');

//session_start
session_start();

//Here You Require all the Classes needed to run the app
// require 'Core/Router.php';
// require 'Core/Request.php';
//require 'DbProducts.php';
//Here You Require all the Controllers needed to redirect the app
// require 'Controllers/ProductsController.php';
// require 'Controllers/AuthController.php';
// require 'Controllers/PaymentsController.php';
// require 'Controllers/PagesController.php';
//require 'Core/Database/Connection.php';
//require 'Core/Database/QueryBuilder.php';

   //Bind the Database credentials and connect to the app
   // Bind the requred databsase file above to 
   //an instance of the connection 
 
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

//Custom Helper functions
/**
 * View Helper.
 *
 * @param string $product_name name of file to be redirected
 * @var data[] $data data to be sent with the redirection
 * 
 * @return file require the requested file
 */
function view($name, $data = []){

    extract($data);

    return require "views/{$name}.view.php";
}
/**
 * Auth View Helper.
 *
 * @param string $product_name name of file to be redirected
 * @var data[] $data data to be sent with the redirection
 * 
 * @return file require the requested file
 */
function viewAuth($name, $data = []){
    extract($data);

    return require "views/auth/{$name}.view.php";
}
function viewErrors($name, $data = []){
    extract($data);

    return require "views/Errors/{$name}.view.php";
}

//Most complicated function and witchcraft i have ever used
/* function addToCartForm(){
    //session_start();
    if (isset($_POST['addtocart'])) {
        if (isset($_SESSION['cart'])) {

            $item_array_id = array_column($_SESSION['cart'], 'product_id');
            //print_r($item_array_id);

            if (in_array($_POST['product_id'], $item_array_id)) {
                echo  "Item is already in that cart...!";
                // print_r($item_array_id);
            }else{

                $count = count($_SESSION['cart']);
                $item_array = ['product_id' => $_POST['product_id']];
                $_SESSION['cart'][$count] = $item_array;
                //print_r($_SESSION['cart']);
                var_dump($_SESSION['cart']);

            }
        } else {

            $item_array = [
                'product_id' => $_POST['product_id']
            ];
            //create session variable
          $_SESSION['cart'][0] = $item_array;
        }
        

        
    
       // $header = 'My Shopping cart';
       $products = App::get('database')->selectAll('products', 'DbProducts');
       $header = 'All Products';
       return view('home', [
           'products' => $products,
           'header' => $header
       ]);   
        
        
      /*   $cartProducts = $_POST['addtocart'];
            $chunks = array_chunk(preg_split('/(@|#)/', $cartProducts), 2);
            $result = array_combine(array_column($chunks, 0), array_column($chunks, 1)); 
    }
} */