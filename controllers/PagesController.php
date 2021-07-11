<?php

namespace App\Controllers;

use App\Core\App;

class PagesController {

    public $alert;

    public function home() {

        if (isset($_SESSION['login'])) {

            header('location: products');

            exit();
        }

        $products = App::get('database')->selectAll('products', 'DbProducts');

        return view('home', [
            'alert' => $this->alert,
            'products' => $products
        ]);
    }
    public function products() {

        if (!$_SESSION['login']) {

            header('location: home');

            exit();
        }
        $products = App::get('database')->selectAll('products', 'DbProducts');

        return view('products', [
            'alert' => $this->alert,
            'products' => $products

        ]);
    }

    /**
     * editProduct
     *
     * @return View
     */
    public function editProduct() {
        if (!$_SESSION['login']) {

            header('location: home');

            exit();
        }
        $products = App::get('database')->selectAll('products', 'DbProducts');

        return view('edit-product', [
            'products' => $products

        ]);
    }
    public function users() {
        if (!$_SESSION['login']) {

            header('location: home');

            exit();
        }

        $users = App::get('database')->selectAll('users', 'App\\Core\\Users');


        return view('users', [
            'users' => $users
        ]);
    }
    // public function register() {

    //     return viewAuth('register');
    // }

    // public function signup() {

    //     return viewAuth('login');
    // }

    /**
     * addtocart
     *
     * @return void
     */
    public function addtocart() {
        if (!$_SESSION['login']) {

            header('location: home');

            exit();
        }
        //Check if add to cart has been pressed
        if (isset($_POST['addtocart'])) {
            //check if there is a session of cart
            if (isset($_SESSION['cart'])) {

                $item_array_id = array_column($_SESSION['cart'], 'product_id');
                //check if the product already exists in the cart if not add it
                if (!in_array($_POST['product_id'], $item_array_id)) {

                    $count = count($_SESSION['cart']);

                    $item_array = [
                        'product_id' => $_POST['product_id'],
                        'quantity' => $_POST['quantity']
                    ];

                    $_SESSION['cart'][$count] = $item_array;

                    $this->alert = "Item was added to the Cart";
                } else {

                    $this->alert = "Item is already in the cart";
                }
            } else {
                //if there is no session of cart create the item array and create the ssession
                $item_array = [
                    'product_id' => $_POST['product_id'],
                    'quantity' => $_POST['quantity']
                ];
                //create session variable
                $_SESSION['cart'][0] = $item_array;
            }
            //redirect to the home page
            return $this->products();
        }
    }
    public function cart() {
        if (!$_SESSION['login']) {

            header('location: home');

            exit();
        }
        $products = App::get('database')->selectAll('products', 'DbProducts');
        $ProductQuantities = array_column($_SESSION['cart'], 'quantity');
        $product_id = array_column($_SESSION['cart'], 'product_id');


        $total = 0;
        $qty = 0;
        $sellers = [];

        return view('cart', [
            'ProductQuantities' => $ProductQuantities,
            'product_id' => $product_id,
            'products' => $products,
            'total' => $total,
            'qty' => $qty,
            'sellers' => $sellers

        ]);
    }
    public function checkout() {
        if (!$_SESSION['login']) {

            header('location: home');

            exit();
        }
        $id = $_SESSION['id'];
        $user = App::get('database')->checkoutUser($id);

        return view('checkout', [
            'user' => $user
        ]);
    }
    public function email() {
        if (!$_SESSION['login']) {

            header('location: home');

            exit();
        }
        $id = $_SESSION['id'];
        $user = App::get('database')->checkoutUser($id);
        $products = App::get('database')->selectAll('products', 'DbProducts');
        $product_id = array_column($_SESSION['cart'], 'product_id');
        $total = 0;

        return view('email', [
            'products' => $products,
            'product_id ' => $product_id,
            'total' => $total,
            'id' => $id,
            'user' => $user
        ]);
    }
}
