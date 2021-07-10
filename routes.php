<?php

// use App\Core\Router;
 
// //define the specific routes for get requests routes
// Router::middleware('auth', function () {
//     $router = new Router;

//     //for get requests
//     $router->get('cart', 'PagesController@cart');
//     $router->get('edit', 'PagesController@editProduct');
//     $router->get('products', 'PagesController@products'); 
//     $router->get('checkout', 'SalesController@checkout');
//     $router->get('add-product', 'ProductsController@addProducts');
//     $router->get('email', 'PagesController@email');
//     //for post requests

//     $router->post('addproduct', 'ProductsController@addProductsStore');
//     $router->post('cart', 'PagesController@cart');
//     $router->post('checkout', 'PaymentsController@storeDetails');
//     $router->post('edit', 'PagesController@editProduct');
//     $router->post('email', 'SendEmailController@index');
   
    

// });
// Router::middleware('admin', function () {
//     $router = new Router;
//     $router->get('admin', 'AdminController@index');
//     $router->get('users', 'PagesController@users');
//     $router->get("admin/edit", 'AdminController@editUser');

// });

$router->get('index.php', 'PagesController@home');
$router->get('', 'PagesController@home');
$router->get('/', 'PagesController@home');

$router->get('admin', 'AdminController@index');
$router->get('users', 'PagesController@users');
$router->get("admin/edit", 'AdminController@editUser');
$router->get('home', 'PagesController@home');
$router->get('sign-in', 'AuthController@register');
$router->get('log-in', 'AuthController@login');
$router->get('sign-out', 'AuthController@signout');

//for post requests

$router->post('register', 'AuthController@registerstore');
$router->post('login', 'AuthController@loginstore');
$router->post('upload', 'AuthController@upload');


//for get requests
$router->get('cart', 'PagesController@cart');
$router->get('edit', 'PagesController@editProduct');
$router->get('products', 'PagesController@products'); 
$router->get('checkout', 'SalesController@checkout');
$router->get('add-product', 'ProductsController@addProducts');
$router->get('email', 'PagesController@email');
//for post requests
$router->post('addproduct', 'ProductsController@addProductsStore');
$router->post('cart', 'PagesController@cart');
//$router->post('sales', 'SalesController@checkout');
$router->post('checkout', 'PaymentsController@storeDetails');
$router->post('edit', 'PagesController@editProduct');
$router->post('email', 'SendEmailController@index');



//for testing purposes
$router->get('admin-test', 'AdminController@admin_new');

$router->post('', 'PagesController@addtocart');
$router->post('/', 'PagesController@addtocart');
$router->post('home', 'PagesController@addtocart');
$router->post('index.php', 'PagesController@addtocart');
