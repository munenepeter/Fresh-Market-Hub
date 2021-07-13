<?php

namespace App\Core\Database;

class QueryBuilder {

  protected $pdo;

  public function __construct($pdo) {

    $this->pdo = $pdo;
  }
  //Select everything and insert into a class

  public function selectAll(String $table, $intoClass) {
     if(isset($_SESSION['error'])){
       exit();
     }
    $statement = $this->pdo->prepare("select * from {$table}");
 
    if (!$statement->execute()) {

      throw new \Exception("Something is up with your Select {$statement}!");
    }

    return $statement->fetchAll(\PDO::FETCH_CLASS,  "App\\Core\\{$intoClass}");
  }

   //Select everything 

  public function selectAllWithoutClass(String $table) {

    $statement = $this->pdo->prepare("select * from {$table}");

    if (!$statement->execute()) {

      throw new \Exception("Something is up with your Select {$statement}!");
    }

    return $statement->fetchAll(\PDO::FETCH_ASSOC);
  }
  //////////SELECT WITH A WHERE CLAUSE
  //SELECT * FROM `products` WHERE `product_id` = 19 OR `product_id` = 2 OR `product_id` = 3 OR `product_id` = 4

  public function where(String $table, $columnValue) {

    $statement = $this->pdo->prepare("select * from {$table} where product_id = 0 {$columnValue} ;");

    if (!$statement->execute()) {

      throw new \Exception("Something is up with your Select {$statement}!");
    }

    return $statement->fetch(\PDO::FETCH_ASSOC);
  }

  public function insert($table, $parameters) {

    $sql = sprintf(
      'insert into %s (%s) values (%s)',

      $table,

      implode(', ', array_keys($parameters)),

      ':' . implode(', :', array_keys($parameters))
    );

    try {

      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);
    } catch (\Exception $e) {

      throw new \Exception('Something is up with your Insert!' . $e->getMessage());
      die();
    }
  }

  public function register($email) {
    $sql = "SELECT * FROM `users` WHERE email =:email";
    $statement = $this->pdo->prepare($sql);
    $statement->bindParam(':email', $email);

    $statement->execute();
    $row = $statement->fetchAll(\PDO::FETCH_CLASS);

    return $count = $statement->rowCount();
  }

  public function checkoutUser($id) {

    $sql = "SELECT * FROM `users` INNER JOIN `userdetails`
    ON users.id = userdetails.users_id WHERE users.id =:id";

    $statement = $this->pdo->prepare($sql);
    $statement->bindParam(':id', $id);

    $statement->execute();

    $row = $statement->fetch(\PDO::FETCH_ASSOC);

    return $row;
  }

  public function login($username, $password) {

    $sql = "SELECT * FROM `users` WHERE username =:username AND password =:password";

    $statement = $this->pdo->prepare($sql);

    $statement->bindParam(':username', $username);
    $statement->bindParam(':password', $password);

     if (!$statement->execute()) {

      throw new \Exception("Something is up with your Select {$statement}!");
    }

    $results = [];

    $row = $statement->fetch(\PDO::FETCH_ASSOC);

    $count = $statement->rowCount();

    array_push($results, $count, $row);

    return $results;
  }



  public function allUserDetails($intoClass) {

    $sql = "SELECT * FROM `users`
    INNER JOIN `userdetails`
    ON users.id = userdetails.users_id 
    INNER JOIN `sales` ON users.id = sales.seller_id";

    $statement = $this->pdo->prepare($sql);

    if (!$statement->execute()) {

      throw new \Exception("Something is up with your Select {$statement}!");
    }

    return $statement->fetchAll(\PDO::FETCH_CLASS,  "App\\Core\\{$intoClass}");
  }

  public function MonthySales($startDate, $endDate) {
    //select partid,sum(sales)

    $sql = "SELECT SUM(`no_of_sales`) as `NumberOfSales`
    FROM `sales`
    WHERE (date BETWEEN '{$startDate}' AND '{$endDate}')";

    $statement = $this->pdo->prepare($sql);

     if (!$statement->execute()) {

      throw new \Exception("Something is up with your Select {$statement}!");
    }

    return $statement->fetch(\PDO::FETCH_ASSOC);
  }
  public function BestSellers() {
    //select partid,sum(sales)

    $sql = "SELECT 
      seller_id, 
      username,
      SUM(`no_of_sales`) AS Sales,
      SUM(`amount_made`) AS Amount, 
      SUM(`no_of_sales`) AS `NumberOfSales`
    FROM `sales` 
    INNER JOIN `users`
    ON seller_id = users.id
    GROUP BY seller_id 
    ORDER BY Sales DESC;
    ";

    $statement = $this->pdo->prepare($sql);

    if (!$statement->execute()) {

      throw new \Exception("Something is up with your Select {$statement}!");
    }

    return $statement->fetchAll(\PDO::FETCH_ASSOC);
  }


  public function selectAllInvoices($table) {

     $sql = "SELECT * FROM `{$table}`
    INNER JOIN `users`
    ON user_id = users.id";

    $statement = $this->pdo->prepare($sql);

    if (!$statement->execute()) {

      throw new \Exception("Something is up with your Select {$statement}!");
    }

    return $statement->fetchAll(\PDO::FETCH_ASSOC);
  }
  public function session() {

    if (isset($_SESSION['login'])) {
      return $_SESSION['login'];
    }
  }
}
