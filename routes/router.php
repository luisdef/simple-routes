<?php

function load(string $controller, string $action): void
{
    try {
        $controllerNamespace = "app\\controllers\\{$controller}";
     
        if (!class_exists($controllerNamespace)) {
            throw new Exception("The controller {$controller} does not exist.\n\n");
        }

        $controllerInstance = new $controllerNamespace();

        if (!method_exists($controllerInstance, $action)) {
            throw new Exception("The method {$action} does not exist in the controller {$controller}.\n\n");
        }

        $controllerInstance->$action((object) $_REQUEST);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$router = [
    'GET' => [
        '/' => fn() => load('HomeController', "index"),
        '/contact' => fn() => load('ContactController', "index")
    ],
    'POST' => [
        '/contact' => fn() => load('ContactController', "store")
    ]
];
