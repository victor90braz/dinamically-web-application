<?php

include __DIR__ . "/router/router.php";
include __DIR__ . "/data/DataBase.php";

$config = require __DIR__ . "/config/config.php";
$dataBase = new DataBase($config["dataBase"]);
$posts = $dataBase->query("SELECT * from posts")->fetchAll();

echo "<pre>";
echo json_encode($posts, JSON_PRETTY_PRINT);
echo "</pre>";






