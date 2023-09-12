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


