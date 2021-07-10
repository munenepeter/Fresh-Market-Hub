<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;
use App\Controllers\PagesController;

class AdminController { 

  protected $parameter;


   
  /**
   * editUser
   * Todo 
   * it is supposed to return
   * the edit page of a user
   * @return void
   */

  public function editUser() {
    $this->parameter = Request::uriParameters();
    echo $this->parameter;
  }
  public function index(){

    if($_SESSION['type'] != 1){

      header('location: products');
      exit();
    }

    $invoices = App::get('database')->selectAllInvoices('invoices');
    $users = App::get('database')->allUserDetails('Users');  
    $MarchSales = App::get('database')->MonthySales('2021-03-01 00:00:00', '2021-03-31 00:00:00');
    $AprilSales = App::get('database')->MonthySales('2021-04-01 00:00:00', '2021-04-30 00:00:00');
    $MaySales = App::get('database')->MonthySales('2021-05-01 00:00:00', '2021-05-31 00:00:00');
    $JuneSales = App::get('database')->MonthySales('2021-06-01 00:00:00', '2021-06-30 00:00:00');
    
    return view('admin',[
      'invoices' => $invoices,
      'users' => $users,
      'MarchSales' => (int)$MarchSales["NumberOfSales"],
      'AprilSales' => (int)$AprilSales["NumberOfSales"],
      'MaySales' => (int)$MaySales["NumberOfSales"],
      'JuneSales' => (int)$JuneSales["NumberOfSales"]
    ]);  
  }
}
