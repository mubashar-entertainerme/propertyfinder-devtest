<?php

namespace App\Controllers;

class HomeController {

    public function __construct()
    {
    }

    function index($params){
        var_dump($params);
        exit;
        echo "Welcome home";
    }
}