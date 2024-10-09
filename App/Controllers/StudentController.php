<?php

namespace App\Controllers;

class StudentController
{
    public function allGet()
    {
        include realpath(__DIR__ . "/../Views/students/index.php");
    }

    public function create()
    {
        include realpath(__DIR__. "/../Views/students/addStudent.php");
    }

    public function allStudents()
    {
        include realpath(__DIR__. "/../Views/students/index.php");
    }

    public function addStudentSQL()
    {
        include realpath(__DIR__. "/../Views/students/addStudentSQL.php");
    }

    public function updateStudent()
    {
        include realpath(__DIR__. "/../Views/students/updateStudent.php");
    }
}
?>