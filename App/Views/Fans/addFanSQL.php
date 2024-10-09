<?php
session_start();
use App\Models\Fan;

if(isset($_POST['submit'])){
    if(!empty($_POST['name'])){
        $name = $_POST['name'];

        $fans = Fan::getAll();

        foreach($fans as $fan){
            if(strtolower($fan->name) == strtolower($name)){
                $_SESSION["fan"] = "Bu fan avval qoshilgan";
                header("Location: addFan.php?error=1");
                exit();
            }
        }

        $data = [
            'name' => $name
        ];

        Fan::create($data);
        header("Location: fanlar.php");
    }else{
        header("Location: addFan.php");
        exit();
    }
}

?>