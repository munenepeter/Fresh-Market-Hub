<?php

class PagesController
{

    public function home()
    {
        //require 'core/ProductsInDB.php';

        $products = App::get('database')->selectAll('products', 'DbProducts');
        $header = 'All Products';
        return view('home', [
            'products' => $products,
            'header' => $header
        ]);
    }
    public function products()
    {
        //require 'core/ProductsInDB.php';

        $products = App::get('database')->selectAll('products', 'DbProducts');
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

    public function addtocart(){
        
        if (isset($_POST['addtocart'])) {
            if (isset($_SESSION['cart'])) {
    
                $item_array_id = array_column($_SESSION['cart'], 'product_id');
                //print_r($item_array_id);
    
                if (in_array($_POST['product_id'], $item_array_id)) {
              
                    echo '      <div class="px-4 py-3 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                    <p>Item is already in the cart...!</p>
                  </div>';
                                 
                }else{
    
                    $count = count($_SESSION['cart']);
                    $item_array = ['product_id' => $_POST['product_id']];
                    $_SESSION['cart'][$count] = $item_array;
                    echo '
                          <div class="text-xl font-normal  max-w-full flex-initial">
                        The Product has been Added to the cart cart</div>
                        </div>';
                       echo "<script>window.location.reload()</script>";
    
                }
            } else {
    
                $item_array = [
                    'product_id' => $_POST['product_id']
                ];
                //create session variable
              $_SESSION['cart'][0] = $item_array;
            }
            
    
            
        
           // $header = 'My Shopping cart';
            return $this->home();  
            
    }
    
}
public function cart(){

        $products = App::get('database')->selectAll('products', 'DbProducts');

        $product_id = array_column($_SESSION['cart'], 'product_id');

        $total = 0;

        $header = 'My Shopping Cart';
        return view('cart', [
            'product_id' => $product_id,
            'products' => $products,
            'total' => $total,
            'header' => $header
        ]); 
}

}
