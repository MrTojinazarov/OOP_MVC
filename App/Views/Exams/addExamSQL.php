<?php
session_start();
use App\Models\Exam;

if(isset($_POST['submit'])){
    if(!empty($_POST['student']) && !empty($_POST['fan']) && !empty($_POST['ball'])){
        $student = $_POST['student'];
        $fan = $_POST['fan'];
        $ball = $_POST['ball'];

        $exams = Exam::getAll();

        foreach($exams as $exam){
            if(strtolower($exam->fan) == strtolower($fan) && strtolower($exam->student) == strtolower($student)){
                $_SESSION["exam"] = "Bu talaba fu fandan imtixon topshirgan";
                header("Location: addExam.php");
                exit();
            }
        }

        $data = [
            'student' => $student,
            'fan' => $fan,
            'ball' => $ball
        ];

        Exam::create($data);
        header("Location: addExam.php");
    }else{
        header("Location: addExam.php");
        exit();
    }
}

?>