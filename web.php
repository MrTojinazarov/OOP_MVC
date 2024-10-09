<?php

use App\Routes\Route;
use App\Controllers\CategoryControllers;
use App\Controllers\NavbarControllers;
use App\Controllers\StudentController;

Route::get("/" , [StudentController::class, "allGet"]);
Route::get("/addStudent", [StudentController::class, "create"]);
Route::get("/allStudents", [StudentController::class, "allStudents"]);
Route::get("/updateStudent", [StudentController::class, "updateStudent"]);
Route::post("/addStudentSQL", [StudentController::class, "addStudentSQL"]);
Route::get("/indexNav", [NavbarControllers::class, "GoStudentsPage"]);
Route::get("/fanlarNav", [NavbarControllers::class, "GoFansPage"]);
Route::get("/addExamNav", [NavbarControllers::class, "GoExamsPage"]);
Route::get("/resultNav", [NavbarControllers::class, "GoResultPage"]);
?>