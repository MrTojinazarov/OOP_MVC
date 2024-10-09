<?php

namespace App\Controllers;

class CategoryControllers
{

    public function index()
    {
        include realpath(__DIR__ . "/../Views/categorys/index.php");
    }

    public function test()
    {
        include realpath(__DIR__ . "/../Views/categorys/test.php");
    }
}

?>