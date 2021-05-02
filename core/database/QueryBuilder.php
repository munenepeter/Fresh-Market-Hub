<?php

namespace App\Core\Database;

class QueryBuilder {

  protected $pdo;

  public function __construct($pdo) {

    $this->pdo = $pdo;
  }
//Select everything and insert into a class

  public function selectAll($table, $intoClass) {

    $statement = $this->pdo->prepare("select * from {$table}");

    if (!$statement->execute()) {

      throw new \Exception("Something is up with your Select {$statement}!");
    }

    return $statement->fetchAll(\PDO::FETCH_CLASS,  "App\\Core\\{$intoClass}");
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

    $statement->execute();

    $results = [];

    $row = $statement->fetch(\PDO::FETCH_ASSOC);

    $count = $statement->rowCount();

    array_push($results, $count, $row);

    return $results;
  }



  public function allUserDetails($intoClass) {

    $sql = "SELECT * FROM `users` INNER JOIN `userdetails`
    ON users.id = userdetails.users_id";

    $statement = $this->pdo->prepare($sql);

    $statement->execute();

    return $statement->fetchAll(\PDO::FETCH_CLASS,  "App\\Core\\{$intoClass}");
  }

  public function session() {

    if (isset($_SESSION['login'])) {
      return $_SESSION['login'];
    }
  }
}
