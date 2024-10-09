<?php

use App\Models\Student;

$students = Student::getAll();
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
                <a href="indexNav">Talaba</a>
            </ul>
            <ul>
                <a href="fanlarNav">Fanlar</a>
            </ul>
            <ul>
                <a href="addExamNav">Imtixon</a>
            </ul>
            <ul>
                <a href="resultNav">Natija</a>
            </ul>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <h1>Talaba</h1>
                <a href="addStudent" class="btn btn-primary" style="width:100px">Add new</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Option</th>
                    </tr>
                    <?php
                    foreach ($students as $student) { ?>
                        <tr>
                            <td><?= $student->id ?></td>
                            <td><?= $student->name ?></td>
                            <td>
                                <a href="?updateStudent&id=<?= $student->id ?>" class="btn btn-warning">Update</a>
                                <a href="?deleteStudent&id=<?= $student->id ?>" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>