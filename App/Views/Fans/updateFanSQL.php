<?php
session_start();
use App\Models\Fan;

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['id'])){
        $name = $_POST['name'];
        $id = $_POST['id'];
        $fans = Fan::getAll();

        foreach($fans as $fan){
            if(strtolower($fan->name) == strtolower($name)){
                $_SESSION["update"] = "Bu fan avval qoshilgan";
                header("Location: fanlar.php?");
                exit();
            }
        }

        $data = [
            'name' => $name
        ];

        Fan::update($data, $id);
        header("Location: fanlar.php");
    }else{
        header("Location: fanlar.php");
        exit();
    }
}

?>