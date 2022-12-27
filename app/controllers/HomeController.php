<?php
namespace app\controllers;

class HomeController
{
    public function index($params): void
    {
        try {
            Controller::view("home");
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}