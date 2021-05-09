<?php

namespace App\Core;


class Request {
  //get the current URI
  public static function uri() {

    return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
  }
  //get the method as requested by the router
  public static function method() {

    return $_SERVER['REQUEST_METHOD'];
  }
  //get the parameter for editing the users on the edit page
  public static function uriParameters() {
    return $_GET['user'];
  }
  //get the email html
  public static function getEmailHtml() {

    $id = $_SESSION['id'];
    $user = App::get('database')->checkoutUser($id);

    return  [
      'id' => $id,
      'user' => $user
    ];
  }
  //get the products details form the form
  public static function getProduct() {

    //from the form
    $seller_id =  htmlspecialchars((int)$_POST['seller_id']);
    $product_name = htmlspecialchars($_POST['product-name']);
    $product_description =  htmlspecialchars($_POST['product-description']);
    $product_price =  htmlspecialchars((float)$_POST['product-price']);
    $quantity =  htmlspecialchars((int)$_POST['quantity']);
    $image =   static::getImage();
    $updatedAt =  date("Y-m-d", strtotime($_POST['updatedAt']));

    //get everything in an array
    $productDetails = [
      'seller_id' =>   $seller_id,
      'product_name' => $product_name,
      'product_description' =>    $product_description,
      'product_price' =>  $product_price,
      'available_quantity' => $quantity,
      'product_image' =>   $image,
      'updated_date' =>   $updatedAt
    ];

    return $productDetails;
  }
  public static function getImage() {
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

      if (move_uploaded_file($fileTmpPath, $dest_path)) {
        // echo 'File is successfully uploaded.'.PHP_EOL;
        // $message ='File is successfully uploaded.';
        return $newFileName;
      } else {
        echo 'Error:' . $_FILES['product-image']['error'];
        // $message = 'Error:' . $_FILES['product-image']['error'];
      }
    }
  }


  public static function getCheckoutFormDetails() {
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

  public static function getItemsInCart() {

    $products = App::get('database')->selectAll('products', 'DbProducts');
    $product_id = array_column($_SESSION['cart'], 'product_id');
    $productTotal = 0;


    // Loop throught the products in DB 
    foreach ($products as $product) {
      // Loop through the session variables ie product_id and quantity 
      foreach ($_SESSION['cart'] as $cartItem) {
        // Loop thru the session's product_id as an id and Cast the values so that you can loop 
        foreach ((array)$cartItem['product_id'] as $id) {
          // Loop thru the session's quantity as an quanity and Cast the values so that you can loop 
          foreach ((array)$cartItem['quantity'] as $quantity) {
            // Check if the product that is in the $_SESSION['cart'] matches with the one in db 
            if ($product->product_id == $id) {

              echo '
                                <div class="flex justify-between mb-4 hover:bg-gray-100 bg-gray-200 px-3 py-2">
                                <div>' . $product->product_name . '</div>
                                <div class="text-center">' . ($quantity) == 0 ? 1 : (int)$quantity . '</div>
                                <div class="text-right font-medium">Ksh ' . number_format((int)$product->product_price, 2, '.', ',') . '</div>
                                </div> ';
              $productTotal = (int)$product->product_price * (($quantity) == 0 ? 1 : (int)$quantity);
            }
          }
        }
      }
    }


    echo '   <div class="flex justify-between items-center mb-2 px-3">
                    <div class="text-2xl leading-none">
                        <span class="">Total</span>:
                    </div>
                    <div class="text-2xl text-right font-medium">
                        Ksh:' . ' ' . number_format($productTotal, 2, '.', ',') . '
                    </div>
                 </div> ';
  }


  public static function ItemsInCartForEmail() {

    $products = App::get('database')->selectAll('products', 'DbProducts');
    $product_id = array_column($_SESSION['cart'], 'product_id');
    $total = 0;

    // Loop throught the products in DB 
    foreach ($products as $product) {
      // Loop through the session variables ie product_id and quantity 
      foreach ($_SESSION['cart'] as $cartItem) {
        // Loop thru the session's product_id as an id and Cast the values so that you can loop 
        foreach ((array)$cartItem['product_id'] as $id) {
          // Loop thru the session's quantity as an quanity and Cast the values so that you can loop 
          foreach ((array)$cartItem['quantity'] as $quantity) {
            // Check if the product that is in the $_SESSION['cart'] matches with the one in db 
            if ($product->product_id == $id) {

              if (empty($quantity)) {
                $quantity = 1;
              } else {
                $quantity = $quantity;
              }


              echo '
                                <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                                <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;"> 
                                    <div class="u-col u-col-34p33" style="max-width: 320px;min-width: 172px;display: table-cell;vertical-align: top;">
                                    <div style="width: 100% !important;">
                                        <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"> 
                                        <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                            <tbody>
                                            <tr>
                                                <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left"> 
                                                <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;  vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                    <tbody>
                                                    <tr style="vertical-align: top">
                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px; -ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                        <span>&#160;</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table> 
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table> 
                                        <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                            <tbody>
                                            <tr>
                                                <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left"> 
                                                <div style="color: #000000; line-height: 140%; text-align: left; word-wrap: break-word;">
                                                    <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">' . $product->product_name . '</span></p>
                                                </div> 
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table> 
                                        
                                        </div> 
                                    </div>
                                    </div> 
                                    <div class="u-col u-col-32p34" style="max-width: 320px;min-width: 162px;display: table-cell;vertical-align: top;">
                                    <div style="width: 100% !important;"> 
                                        <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"> 
                                        <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                            <tbody>
                                            <tr>
                                                <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left"> 
                                                <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;  vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                    <tbody>
                                                    <tr style="vertical-align: top">
                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px; -ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                        <span>&#160;</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table> 
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table> 
                                        <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                            <tbody>
                                            <tr>
                                                <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left"> 
                                                <div style="color: #000000; line-height: 140%; text-align: center; word-wrap: break-word;">
                                                    <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">'

                . (int)$quantity .

                '</span></p>
                                                </div> 
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table> 
                                     
                                        </div> 
                                    </div>
                                    </div> 
                                    <div class="u-col u-col-33p33" style="max-width: 320px;min-width: 167px;display: table-cell;vertical-align: top;">
                                    <div style="width: 100% !important;"> 
                                        <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">  
                                        <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                            <tbody>
                                            <tr>
                                                <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left"> 
                                                <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;  vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                    <tbody>
                                                    <tr style="vertical-align: top">
                                                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px; -ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                        <span>&#160;</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table> 
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
 
                                        <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                            <tbody>
                                            <tr>
                                                <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">

                                                <div style="color: #000000; line-height: 140%; text-align: right; word-wrap: break-word;">
                                                    <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">Ksh :' . number_format(((int)$productTotal = $product->product_price *  (int)$quantity), 2, '.', ',') . '</span></p>
                                                </div> 
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table> 
                                       
                                        </div> 
                                    </div>
                                    </div>   
                                </div>
                                </div>
                            </div>
         ';
              $total = $total + (int)$productTotal;
            }
          }
        }
      }
    }
    echo '
        <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
              <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px;"><tr style="background-color: transparent;"><![endif]-->

                <!--[if (mso)|(IE)]><td align="center" width="250" style="width: 250px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                <div class="u-col u-col-50" style="max-width: 320px;min-width: 250px;display: table-cell;vertical-align: top;">
                  <div style="width: 100% !important;">
                    <!--[if (!mso)&(!IE)]><!-->
                    <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                      <!--<![endif]-->

                      <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">

                              <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;  vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                <tbody>
                                  <tr style="vertical-align: top">
                                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px; -ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                      <span>&#160;</span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">

                              <div style="color: #000000; line-height: 140%; text-align: left; word-wrap: break-word;">
                                <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 18px; line-height: 25.2px;"><strong><span style="font-family: Cabin, sans-serif; line-height: 25.2px; font-size: 18px;">Total</span></strong></span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">

                              <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;  vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                <tbody>
                                  <tr style="vertical-align: top">
                                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px; -ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                      <span>&#160;</span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <!--[if (!mso)&(!IE)]><!-->
                    </div>
                    <!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td><![endif]-->
                <!--[if (mso)|(IE)]><td align="center" width="250" style="width: 250px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                <div class="u-col u-col-50" style="max-width: 320px;min-width: 250px;display: table-cell;vertical-align: top;">
                  <div style="width: 100% !important;">
                    <!--[if (!mso)&(!IE)]><!-->
                    <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                      <!--<![endif]-->

                      <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">

                              <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;  vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                <tbody>
                                  <tr style="vertical-align: top">
                                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px; -ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                      <span>&#160;</span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">

                              <div style="color: #000000; line-height: 140%; text-align: left; word-wrap: break-word;">
                                <p style="font-size: 14px; line-height: 140%; text-align: right;"><span style="font-size: 18px; line-height: 25.2px;"><strong><span style="font-family: Cabin, sans-serif; line-height: 25.2px; font-size: 18px;">Ksh:' . ' ' . number_format($total, 2, '.', ',') . '</span></strong></span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">

                              <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;  vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                <tbody>
                                  <tr style="vertical-align: top">
                                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px; -ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                      <span>&#160;</span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <!--[if (!mso)&(!IE)]><!-->
                    </div>
                    <!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td><![endif]-->
                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
              </div>
            </div>
          </div>
        
        ';
  }
}
