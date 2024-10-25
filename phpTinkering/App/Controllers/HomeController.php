<?php

namespace App\Controllers;

class HomeController
{
    public function index() {
        require_once '../../resources/views/landing.php';
    }

}