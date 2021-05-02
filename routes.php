<?php

//define the specific for get requests routes

$router->get('', 'PagesController@home');
$router->get('/', 'PagesController@home');
$router->get('home', 'PagesController@home');
$router->get('index.php', 'PagesController@home');
$router->get('admin', 'PagesController@admin');
$router->get('edit', 'PagesController@editProduct');
$router->get('products', 'PagesController@products');
$router->get('users', 'PagesController@users');
$router->get('checkout', 'PagesController@checkout');
$router->get('sign-in', 'AuthController@register');
$router->get('log-in', 'AuthController@login');
$router->get('cart', 'PagesController@cart');
$router->get('sign-out', 'AuthController@signout');
$router->get('add-product', 'ProductsController@addProducts');
$router->get('email', 'PagesController@email');
$router->get("admin/edit", 'AdminController@editUser');

//for post requests

$router->post('register', 'AuthController@registerstore');
$router->post('login', 'AuthController@loginstore');
$router->post('upload', 'AuthController@upload');
$router->post('addproduct', 'ProductsController@addProductsStore');
$router->post('', 'PagesController@addtocart');
$router->post('cart', 'PagesController@cart');
$router->post('checkout', 'PaymentsController@storeDetails');
$router->post('edit', 'PagesController@editProduct');

//for testing purposes
$router->post('/', 'PagesController@addtocart');
$router->post('home', 'PagesController@addtocart');
$router->post('index.php', 'PagesController@addtocart');
