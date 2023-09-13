<?php

include __DIR__ . "/router/router.php";
include __DIR__ . "/data/DataBase.php";

$dataBase = new DataBase();
$posts = $dataBase->query("SELECT * from posts")->fetchAll();

echo "<pre>";
echo json_encode($posts, JSON_PRETTY_PRINT);
echo "</pre>";






