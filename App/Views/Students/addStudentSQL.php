<?php
use App\Models\Student;

if(isset($_POST['submit'])){
    if(!empty($_POST['name'])){
        $data = [
            'name' => $_POST['name']
        ];

        Student::create($data);
        header("Location: ?index");
    }else{
        header("Location: ?addStudent");
        exit();
    }
}

?>