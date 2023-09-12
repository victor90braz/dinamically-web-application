<?php

$url = parse_url($_SERVER['REQUEST_URI'])["path"];

$routes = [
    "/" => "./controllers/HomeController.php",
    "/about" => "./controllers/AboutController.php",
];

function abort() {
    http_response_code(404);

    require 'views/404.php';

    exit();
}

if (array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    abort();
}


