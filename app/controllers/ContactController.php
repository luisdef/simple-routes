<?php
namespace app\controllers;

class ContactController
{
    public function index(): void
    {
        try {
            Controller::view("contact");
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    public function store($params): void
    {
        var_dump($params);
    }
}