<?php

class Request{

    public static function uri(){
   
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');  

    }

    public static function method(){

        return $_SERVER['REQUEST_METHOD'];
    }
   public static function getProduct(){

    //from the form
        $seller_id =  htmlspecialchars((int)$_POST['seller_id']);
        $product_name = htmlspecialchars($_POST['product-name']);
        $product_description =  htmlspecialchars($_POST['product-description']);
        $product_price =  htmlspecialchars((float)$_POST['product-price']);
        $quantity =  htmlspecialchars((int)$_POST['quantity']);
        $image =   static::getImage();
        $updatedAt =  date("Y-m-d",strtotime($_POST['updatedAt'])); 
      
        //get everything in an array
        $arg = [
            'seller_id' =>   $seller_id,
            'product_name' => $product_name,
            'product_description' =>    $product_description,
            'product_price' =>  $product_price,
            'available_quantity' => $quantity,
            'product_image' =>   $image,
            'updated_date' =>   $updatedAt
        ];

       return $arg; 
   
   }
   public static function getImage(){
     // get details of the uploaded file
        $fileTmpPath = $_FILES['product-image']['tmp_name'];
        $fileName = $_FILES['product-image']['name'];
        $fileSize = $_FILES['product-image']['size'];
        $fileType = $_FILES['product-image']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        //uploaded file may contain spaces and other special characters,sanitize the filename
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

        // restrict the type of file which can be uploaded to certain extensions
        $allowedfileExtensions = array('jpg', 'gif', 'png');
        if (in_array($fileExtension, $allowedfileExtensions)) {
           // directory in which the uploaded file will be moved
            $uploadFileDir = 'public/images/';
            $dest_path = $uploadFileDir . $newFileName;
            
            if(move_uploaded_file($fileTmpPath, $dest_path))
            {
              // echo 'File is successfully uploaded.'.PHP_EOL;
              // $message ='File is successfully uploaded.';
               return $newFileName;
           
            }
            else
            {
                echo 'Error:' . $_FILES['product-image']['error'];
           // $message = 'Error:' . $_FILES['product-image']['error'];
            }
            
        }
   }
 
  
   public static function getCheckoutFormDetails(){
      //get all the post values
      $lastname = htmlspecialchars($_POST['lastname']);
      $address = htmlspecialchars($_POST['address']);
      $apartment = htmlspecialchars($_POST['apartment']);
      $zipcode = htmlspecialchars((int)$_POST['zipcode']);
      $city = htmlspecialchars($_POST['city']);
      $phoneNumber = htmlspecialchars((int)$_POST['phonenumber']);
      $userId = htmlspecialchars((int)$_POST['userid']);
      
      //get everything in an array
      $checkoutFormDetails = [
        'last_name' =>    $lastname,
        'address' =>     $address,
        'apartment' =>   $apartment,
        'zipcode' =>     $zipcode,
        'city' =>        $city,
        'users_id' =>    $userId,
        'phoneno' => $phoneNumber
    ];
   
    return $checkoutFormDetails;

   }

   public static function getItemsInCart(){

    $products = App::get('database')->selectAll('products', 'DbProducts');
    $product_id = array_column($_SESSION['cart'], 'product_id');

    foreach($products as $product){
        foreach($product_id as $id){
            if ($product->product_id == $id){

                echo '
                <div class="flex justify-between mb-4 hover:bg-gray-100 bg-gray-200 px-3 py-2">
                    <div>'.$product->product_name.'</div>
                    <div>1</div>
                    <div class="text-right font-medium">Ksh '.(int)$product->product_price.'</div>
               </div>
                
                ';

                //var_dump();
            }
        }
    }

       
   }
}