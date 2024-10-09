<?php
use App\Models\Student;


if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['id'])){
        $id = $_POST['id'];
        $data = [
            'name' => $_POST['name']
        ];

        Student::update($data, $id);
        header("Location: ?index");
    }
}

?>