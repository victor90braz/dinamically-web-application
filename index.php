<?php

include __DIR__ . "/router/router.php";
include __DIR__ . "/data/DataBase.php";

$config = [
  "host" => "localhost",
  "port" => 3306,
  "dbname" => "laracast",
  "charset" => "utf8mb4",
];

$dataBase = new DataBase($config);
$posts = $dataBase->query("SELECT * from posts")->fetchAll();

echo "<pre>";
echo json_encode($posts, JSON_PRETTY_PRINT);
echo "</pre>";






