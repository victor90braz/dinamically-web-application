<?php

include __DIR__ . "/router/router.php";


$dsn = "mysql:host=localhost;port=3306;dbname=laracast;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * from posts");
$statement->execute();

$posts = $statement->fetchAll();

echo "<pre>";
echo json_encode($posts, JSON_PRETTY_PRINT);
echo "</pre>";




