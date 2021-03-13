<?php

class QueryBuilder
{

  protected $pdo;

  public function __construct($pdo)
  {

    $this->pdo = $pdo;
  }

  public function selectAll($table, $intoClass)
  {

    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
  }

  public function insert($table, $parameters)
  {

    $sql = sprintf(

      'insert into %s (%s) values (%s)',
      $table,
      implode(', ', array_keys($parameters)),
      ':' . implode(', :', array_keys($parameters))
    );

    try {

      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);
    } catch (Exception $e) {

      die('Whoops something is wrong' . $e->getMessage);
    }
  }
  public function register($email)
  {
    $sql = "SELECT * FROM `users` WHERE email =:email";
    $statement = $this->pdo->prepare($sql);
    $statement->bindParam(':email', $email);

    $statement->execute();
    $row = $statement->fetchAll(PDO::FETCH_CLASS);

    return $count = $statement->rowCount();
   
  }
  public function login($username, $password)
  {
    $sql = "SELECT * FROM `users` WHERE username =:username AND password =:password";
    $statement = $this->pdo->prepare($sql);
    $statement->bindParam(':username', $username);
    $statement->bindParam(':password', $password);
    $statement->execute();

    $results = [];

    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $count = $statement->rowCount();
    array_push($results, $count,$row);
    return $results;
 
  }
  public function session()
  {

    if (isset($_SESSION['login'])) {
      return $_SESSION['login'];
    }
  }
  public function logout()
  {
    $_SESSION['login'] = false;
    session_destroy();
  }
}
