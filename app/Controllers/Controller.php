<?php


namespace App\Controllers;


use flowerphp\App;

class Controller
{
    protected $App;

    public function request(App $app)
    {
        $this->App = $app;
    }
}