<?php
use App\Models\Student;


if(!empty($_GET['id']) && gettype((int)$_GET['id']) == 'integer')
{
    $id = $_GET['id'];
    Student::delete($id);
    header("Location: index.php");
}
?>
