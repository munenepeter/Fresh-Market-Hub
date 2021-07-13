<?php

use App\Core\App;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder; 

/**Require the App Class -> binder of the most important parts like the DB
 * Bind the config file(The database credentials)
*/
App::bind('config', require 'config.php');


//session_start
session_start();

/**
 *Bind the Database credentials and connect to the app
 *Bind the requred database file above to 
 *an instance of the connections
*/

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));
 
/**
 * -- Custom Helper functions
*/

/**
 * View Helper.
 *
 * @param string $name name of file to be redirected to
 * @param array data[] data to be sent with the redirection
 * 
 * @return file requested file to be redirected to
 */
function view(String $name, Array $data = []) {

  extract($data);

  return require "views/{$name}.view.php";
}
/**
 * Auth View Helper.
 *
 * @param string $name name of file to be redirected to
 * @param array data[] data to be sent with the redirection
 * 
 * @return file requested file to be redirected to
 */
function viewAuth($name, $data = []) {
  extract($data);

  return require "views/auth/{$name}.view.php";
}
function viewErrors($name, $data = []) {
  extract($data);

  return require "views/Errors/{$name}.view.php";
}
function dump($variable) {
  return var_dump($variable);
}
function dd($variable) {

  return die(var_dump($variable));
}

function AuthCheck() {
  if (isset($_SESSION['id'])) {
    if ($_SESSION['type'] ==  0 || $_SESSION['type'] == 1 || $_SESSION['type'] == 2) { 
      return true;
    }
  }
}

function AuthAdminCheck() {
  if (isset($_SESSION['id'])) {
    if ($_SESSION['type'] ==  0) { 
      return true;
    }
  }
}


function getHTML() {
  return '<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Order Email</title>
  
    <style type="text/css">
      @media only screen and (min-width: 520px) {
        .u-row {
          width: 500px !important;
        }
  
        .u-row .u-col {
          vertical-align: top;
        }
  
        .u-row .u-col-32p34 {
          width: 161.70000000000002px !important;
        }
  
        .u-row .u-col-33p33 {
          width: 166.65px !important;
        }
  
        .u-row .u-col-34p33 {
          width: 171.65px !important;
        }
  
        .u-row .u-col-50 {
          width: 250px !important;
        }
  
        .u-row .u-col-100 {
          width: 500px !important;
        }
  
      }
  
      @media (max-width: 520px) {
        .u-row-container {
          max-width: 100% !important;
          padding-left: 0px !important;
          padding-right: 0px !important;
        }
  
        .u-row .u-col {
          min-width: 320px !important;
          max-width: 100% !important;
          display: block !important;
        }
  
        .u-row {
          width: calc(100% - 40px) !important;
        }
  
        .u-col {
          width: 100% !important;
        }
  
        .u-col>div {
          margin: 0 auto;
        }
      }
  
      body {
        margin: 0;
        padding: 0;
      }
  
      table,
      tr,
      td {
        vertical-align: top;
        border-collapse: collapse;
      }
  
      p {
        margin: 0;
      }
  
      .ie-container table,
      .container table {
        table-layout: fixed;
      }
  
      * {
        line-height: inherit;
      }
  
      a[x-apple-data-detectors="true"] {
        color: inherit !important;
        text-decoration: none !important;
      }
  
      .end-links:hover {
        color: #2dc26b;
        text-decoration: underline;
        font-size: 14px;
        line-height: 140%;
      }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet" type="text/css">
  </head>
  
  <body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #dce9e9" data-new-gr-c-s-check-loaded="14.1010.0" data-gr-ext-installed="">
    <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;  vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #dce9e9;width:100%" cellpadding="0" cellspacing="0">
      <tbody>
        <tr style="vertical-align: top">
          <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
            <div class="u-row-container" style="padding: 0px;background-color: transparent">
              <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                  <div class="u-col u-col-100" style="max-width: 320px;min-width: 500px;display: table-cell;vertical-align: top;">
                    <div style="width: 100% !important;">
                      <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                        <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                          <tbody>
                            <tr>
                              <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
  
                                <h1 style="margin: 0px; color: #000000; line-height: 130%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: arial,helvetica,sans-serif; font-size: 22px;">
                                  <p>Thank you for Shopping with us!<br><br></p>
                                  <p>Here is your Order details</p>
                                </h1>
  
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
                                        <span>&nbsp;</span>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
  
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
  
            
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                    <div class="u-col u-col-100" style="max-width: 320px;min-width: 500px;display: table-cell;vertical-align: top;">
                      <div style="width: 100% !important;">
                        <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                          <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                            <tbody>
                              <tr>
                                <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                  <div style="color: #000000; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="font-size: 14px; line-height: 140%; text-align: center;"><span style="font-family: Cabin, sans-serif; font-size: 20px; line-height: 28px;"><strong> fuck Invoice #: 001-2021</strong></span><br><span style="font-family: Cabin, sans-serif; font-size: 20px; line-height: 28px;">Sunday, 09 May 2021 </span></p>
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
                                          <span>&nbsp;</span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
  
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
  
  
  
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                    <div class="u-col u-col-50" style="max-width: 320px;min-width: 250px;display: table-cell;vertical-align: top;">
                      <div style="width: 100% !important;">
                        <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                          <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                            <tbody>
                              <tr>
                                <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
  
                                  <div style="color: #000000; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 16px; line-height: 22.4px; font-family: Cabin, sans-serif;"><strong>fuck Wunsch</strong></span><br><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">303 Emile Heights
  Lake Natalie, CT 17175</span><br><span style="color: #3598db; font-size: 14px; line-height: 19.6px; font-family: Cabin, sans-serif;">eblanda@example.org</span><br><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">+254 278283</span></p>
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
                                          <span>&nbsp;</span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="u-col u-col-50" style="max-width: 320px;min-width: 250px;display: table-cell;vertical-align: top;">
                      <div style="width: 100% !important;">
                        <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
  
                          <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                            <tbody>
                              <tr>
                                <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
  
                                  <div style="color: #000000; line-height: 140%; text-align: right; word-wrap: break-word;">
                                    <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 24px; line-height: 33.6px; font-family: Cabin, sans-serif;"><span style="color: #2dc26b; line-height: 33.6px; font-size: 24px;">Fresh</span> Market Hub</span><br><span style="font-family: Cabin, sans-serif; font-size: 16px; line-height: 22.4px;">Street 12</span><br><span style="font-family: Cabin, sans-serif; font-size: 16px; line-height: 22.4px;">1233 Nairobi</span><br><span style="color: #3598db; font-size: 16px; line-height: 22.4px; font-family: Cabin, sans-serif;">www.freshmarkethub.com</span></p>
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
                                          <span>&nbsp;</span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
  
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
  
  
              <div class="u-row-container" style="padding: 0px;background-color: transparent">
                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                    <div class="u-col u-col-33p33" style="max-width: 320px;min-width: 167px;display: table-cell;vertical-align: top;">
                      <div style="width: 100% !important;">
                        <!--[if (!mso)&(!IE)]><!-->
                        <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                          <!--<![endif]-->
  
                          <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                            <tbody>
                              <tr>
                                <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
  
                                  <div style="color: #000000; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 16px; line-height: 22.4px;"><strong><span style="font-family: Cabin, sans-serif; line-height: 22.4px; font-size: 16px;">Products</span></strong></span></p>
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
  
                                  <div style="color: #000000; line-height: 140%; text-align: center; word-wrap: break-word;">
                                    <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 16px; line-height: 22.4px;"><strong><span style="font-family: Cabin, sans-serif; line-height: 22.4px; font-size: 16px;">Quantity</span></strong></span></p>
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
                                  <div style="color: #000000; line-height: 140%; text-align: right; word-wrap: break-word;">
                                    <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 16px; line-height: 22.4px;"><strong><span style="font-family: Cabin, sans-serif; line-height: 22.4px; font-size: 16px;">Price</span></strong></span></p>
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
          
            <!-- Start Products -->
  
            
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
                                                          <span>&nbsp;</span>
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
                                                      <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">aut</span></p>
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
                                                          <span>&nbsp;</span>
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
                                                      <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">1</span></p>
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
                                                          <span>&nbsp;</span>
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
                                                      <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">Ksh :881.00</span></p>
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
                                                          <span>&nbsp;</span>
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
                                                      <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">at</span></p>
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
                                                          <span>&nbsp;</span>
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
                                                      <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">1</span></p>
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
                                                          <span>&nbsp;</span>
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
                                                      <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">Ksh :759.00</span></p>
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
                                                          <span>&nbsp;</span>
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
                                                      <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">nemo</span></p>
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
                                                          <span>&nbsp;</span>
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
                                                      <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">1</span></p>
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
                                                          <span>&nbsp;</span>
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
                                                      <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">Ksh :242.00</span></p>
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
                                                          <span>&nbsp;</span>
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
                                                      <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">soluta</span></p>
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
                                                          <span>&nbsp;</span>
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
                                                      <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">18</span></p>
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
                                                          <span>&nbsp;</span>
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
                                                      <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">Ksh :16,092.00</span></p>
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
           
          <div class="u-row-container" style="padding: 0px;background-color: transparent">
              <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                   
                  <div class="u-col u-col-50" style="max-width: 320px;min-width: 250px;display: table-cell;vertical-align: top;">
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
                                        <span>&nbsp;</span>
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
                                        <span>&nbsp;</span>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
  
                              </td>
                            </tr>
                          </tbody>
                        </table> 
                      </div> 
                    </div>
                  </div>
                  
                  <div class="u-col u-col-50" style="max-width: 320px;min-width: 250px;display: table-cell;vertical-align: top;">
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
                                        <span>&nbsp;</span>
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
                                  <p style="font-size: 14px; line-height: 140%; text-align: right;"><span style="font-size: 18px; line-height: 25.2px;"><strong><span style="font-family: Cabin, sans-serif; line-height: 25.2px; font-size: 18px;">Ksh: 17,974.00</span></strong></span></p>
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
                                        <span>&nbsp;</span>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
  
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
          
          
            <!-- End Products-->
  
            <div class="u-row-container" style="padding: 0px;background-color: transparent">
              <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                 
                  <div class="u-col u-col-100" style="max-width: 320px;min-width: 500px;display: table-cell;vertical-align: top;">
                    <div style="width: 100% !important;">
                   
                      <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
           
  
                        <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                          <tbody>
                            <tr>
                              <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
  
                                <div style="color: #000000; line-height: 140%; text-align: center; word-wrap: break-word;">
                                  <p style="font-size: 14px; line-height: 140%;"><span>To be paid before</span><b> Wednesday, 19 May 2021 </b>through <b style="text-decoration: underline;">M-pesa</b> specifying the invoice number</p>
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
                                        <span>&nbsp;</span>
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
                                  <p style="font-size: 14px; line-height: 140%;">See you again!</p>
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
                                        <span>&nbsp;</span>
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
                                  <p class="end-links" style="color: #2dc26b;font-size: 14px; line-height: 140%;">customercare@freshmarkethub.com | www.freshmarkethub.com</p>
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
          </td>
        </tr>
      </tbody>
    </table>  
  </body></html>';
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
