<?php

include __DIR__ . "/router/router.php";


class DataBase {

  public $connection;

  public function __construct() {
    $dsn = "mysql:host=localhost;port=3306;dbname=laracast;user=root;charset=utf8mb4";

    $this->connection = new PDO($dsn);
  }

  public function query ($query) {

    $statement = $this->connection->prepare($query);
    $statement->execute();

    return $statement;
  }

}

$dataBase = new DataBase();
$posts = $dataBase->query("SELECT * from posts")->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
echo json_encode($posts, JSON_PRETTY_PRINT);
echo "</pre>";






