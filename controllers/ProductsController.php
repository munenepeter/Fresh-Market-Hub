<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;

class ProductsController {

    public function addProducts() {
        if (!$_SESSION['login']) {

            header('location: home');

            exit();
        }
        $header = 'Add Product';
        return view('add-products', [
            'header' => $header
        ]);
    }

    public function addProductsStore() {
        if (!$_SESSION['login']) {

            header('location: home');

            exit();
        }
        //insert into db

        //dd(Request::getProduct());
        App::get('database')->insert('products', Request::getProduct());

        $message = 'Successfully uploaded a new product';
        return view('add-products', [
            'message' => $message
        ]);
    }
}
