<?php

include __DIR__ . "/router/router.php";


class DataBase {

  public function getQuery ($query) {
    $dsn = "mysql:host=localhost;port=3306;dbname=laracast;user=root;charset=utf8mb4";
    $pdo = new PDO($dsn);

    $statement = $pdo->prepare($query);
    $statement->execute();

    $associativeArray = PDO::FETCH_ASSOC;
    $data = $statement->fetchAll($associativeArray);

    return $data;
  }
}

$dataBase = new DataBase();
$query = "SELECT * from posts";
$posts = $dataBase->getQuery($query);

foreach($posts as $post) {
  echo "<li>{$post['title']}</li>";
}

echo "<pre>";
echo json_encode($posts, JSON_PRETTY_PRINT);
echo "</pre>";







