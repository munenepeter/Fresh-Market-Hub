<?php

class Request{

    public static function uri(){
   
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');  

    }

    public static function method(){

        return $_SERVER['REQUEST_METHOD'];
    }
   public static function getProduct(){

       /*  $seller_id =  $_POST['seller_id'];
        $product_description =   $_POST['product-description'];
        $product_price =   $_POST['product-price'];
        $product_image =   $_POST['quantity'];
        $image =   static::getImage();
        $updatedAt =   $_POST['updatedAt'];  */
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
               echo 'File is successfully uploaded.'.PHP_EOL;
               return $newFileName;
            //$message ='File is successfully uploaded.';
            }
            else
            {
                echo 'Error:' . $_FILES['product-image']['error'];
            //$message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
            }
            
        }
   }
}