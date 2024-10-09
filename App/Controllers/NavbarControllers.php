<?php

namespace App\Controllers;

class NavbarControllers
{

    public function GoStudentsPage()
    {
        include realpath(__DIR__ . "/../Views/students/index.php");
    }

    public function GoFansPage()
    {
        include realpath(__DIR__ . "/../Views/Fans/fanlar.php");
    }

    public function GoExamsPage()
    {
        include realpath(__DIR__ . "/../Views/Exams/addExam.php");
    }

    public function GoResultPage()
    {
        include realpath(__DIR__ . "/../Views/Results/result.php");
    }
}

