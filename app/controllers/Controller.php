<?php
namespace app\controllers;

use Exception;
use League\Plates\Engine;

class Controller
{
    /**
     * @throws Exception
     */
    public static function view(string $view, array $data = []): void
    {
        $viewsPath = dirname(__FILE__, 2) . "/views";
        
        if (!file_exists($viewsPath . DIRECTORY_SEPARATOR . $view . ".php")) {
            throw new Exception("The view {$view} does not exist\n\n");
        }
        
        $templates = new Engine($viewsPath);
        echo $templates->render($view, $data);
    }
}
