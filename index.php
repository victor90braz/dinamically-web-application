<?php

$url = parse_url($_SERVER['REQUEST_URI'])["path"];

echo $url;

if ($url === '/') {
    require "./controllers/HomeController.php";
    die();
}

if ($url === '/about') {
    require "./controllers/AboutController.php";
    die();
}


