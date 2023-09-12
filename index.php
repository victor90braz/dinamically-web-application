<?php

$url = $_SERVER['REQUEST_URI'];

if ($url === '/') {
    require "./controllers/HomeController.php";
    die();
}

if ($url === '/about') {
    require "./controllers/AboutController.php";
    die();
}

header('HTTP/1.0 404 Not Found');
include '404.php';

