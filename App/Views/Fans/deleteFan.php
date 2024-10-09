<?php
use App\Models\Fan;

if(!empty($_GET['id']) && gettype((int)$_GET['id']) == 'integer')
{
    $id = $_GET['id'];
    Fan::delete($id);
    header("Location: fanlar.php");
}
?>
