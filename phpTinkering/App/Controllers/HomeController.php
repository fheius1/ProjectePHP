<?php

namespace App\Controllers;

class HomeController
{
    public function index() {
        // Carga la vista de la landing page
        require_once '../../resources/views/landing.php';
    }

}