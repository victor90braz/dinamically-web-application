<?php

$currentURL = $_SERVER['REQUEST_URI'];

if ($currentURL === '/') {
    require "./controllers/HomeController.php";
    die();
}

if ($currentURL === '/about') {
    require "./controllers/AboutController.php";
    die();
}


