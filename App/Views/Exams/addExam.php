<?php
session_start();

namespace App\Views\Exams;

use App\Models\Student;
use App\Models\Fan;

$students = Student::getAll();
$fans = Fan::getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imtixon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="nav mt-2">
            <ul>
                <a href="index.php">Talaba</a>
            </ul>
            <ul>
                <a href="fanlar.php">Fanlar</a>
            </ul>
            <ul>
                <a href="addExam.php">Imtixon</a>
            </ul>
            <ul>
                <a href="result.php">Natija</a>
            </ul>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <h3>
                    <?php
                    if (isset($_SESSION['exam'])) {
                        echo $_SESSION['exam'];
                        session_unset();
                    }
                    ?>
                </h3>
                <h1>Imtixon</h1>
            </div>
        </div>
        <form action="addExamSQL.php" method="POST">

            <div class="row mt-3">
                <div class="col-4">
                    <select class="form-control" name="student">
                        <?php
                        foreach ($students as $student) { ?>
                            ?>
                            <option value="<?= $student->id ?>"><?= $student->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-4">
                    <select class="form-control" name="fan">
                        <?php
                        foreach ($fans as $fan) { ?>
                            ?>
                            <option value="<?= $fan->id ?>"><?= $fan->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-4">
                    <input type="number" class="form-control" name="ball" min=0 max=100>
                </div>
            </div>
            <div class="row">
                <div class="col-2 offset-5">
                    <button type="submit" name="submit" class="btn btn-outline-warning" style="margin-top: 30px; width:120px; font-size:15pt;">Save</button>
                </div>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>