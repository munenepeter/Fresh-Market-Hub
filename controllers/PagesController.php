<?php

class PagesController
{

    public function home()
    {
        require 'core/Products.php';

        $products = App::get('database')->selectAll('products', 'Products');
        $header = 'All Products';
        return view('home', [
            'products' => $products,
            'header' => $header
        ]);
    }
    public function products()
    {
        require 'core/Products.php';

        $products = App::get('database')->selectAll('products', 'Products');
        $header = 'Products';
        return view('products', [
            'products' => $products,
            'header' => $header
        ]);
      
    }
    public function users()
    {
        require 'core/Users.php';

        $users = App::get('database')->selectAll('users', 'Users');
       
        $header = 'Users';
        return view('users', [
         'users' => $users,
         'header' => $header 
        ]);
    }
    public function register()
    {

        return viewAuth('register');
    }

    public function signup()
    {

        return viewAuth('login');
    }

    public function cart()
    {

        return view('cart');
    }
 
}
