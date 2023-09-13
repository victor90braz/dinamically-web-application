<?php

include __DIR__ . "/router/router.php";


$dsn = "mysql:host=localhost;port=3306;dbname=laracast;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * from posts");
$statement->execute();

$associativeArray = PDO::FETCH_ASSOC;
$posts = $statement->fetchAll($associativeArray);

foreach($posts as $post) {
  echo "<li>{$post['title']}</li>";
}


echo "<pre>";
echo json_encode($posts, JSON_PRETTY_PRINT);
echo "</pre>";







