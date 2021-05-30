<?php

namespace App\Controllers;

use App\Core\Request;
use App\Core\App;

class AdminController { 

  protected $parameter;


  public function index() {

    $users = App::get('database')->allUserDetails('Users');
    $MarchSales = App::get('database')->MonthySales('2021-03-01 00:00:00', '2021-03-31 00:00:00');
    $AprilSales = App::get('database')->MonthySales('2021-04-01 00:00:00', '2021-04-30 00:00:00');
    $MaySales = App::get('database')->MonthySales('2021-05-01 00:00:00', '2021-05-31 00:00:00');
    $JuneSales = App::get('database')->MonthySales('2021-06-01 00:00:00', '2021-06-30 00:00:00');
    $BestSellers = App::get('database')->BestSellers();
 
    
 
    return view('admin', [
      'users' => $users,
      'MarchSales' => (int)$MarchSales["NumberOfSales"],
      'AprilSales' => (int)$AprilSales["NumberOfSales"],
      'MaySales' => (int)$MaySales["NumberOfSales"],
      'JuneSales' => (int)$JuneSales["NumberOfSales"],
      'BestSeller' => $BestSellers
    ]);
  }
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
}
