<?php
require "../vendor/autoload.php";
require "../routes/router.php";

try {
    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];
    $request = $_SERVER["REQUEST_METHOD"];

    if (!isset($router[$request])) {
        throw new Exception("The request route {$request} does not exist.\n\n");
    }

    if (!array_key_exists($uri, $router[$request])) {
        throw new Exception("The route {$request} does not exist.\n\n");
    }

    $controller = $router[$request][$uri];
    $controller();
} catch (Exception $e) {
    echo $e->getMessage();
}
