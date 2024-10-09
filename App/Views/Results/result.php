<?php
$con = new PDO("mysql:host=localhost;dbname=imtixon", "root", "mr2344");
$sql = "SELECT students.name AS name, COUNT(exam.student) AS count, SUM(exam.ball)/COUNT(exam.student) AS ball FROM exam LEFT JOIN students ON exam.student = students.id LEFT JOIN fans ON exam.fan = fans.id GROUP BY students.id ORDER BY ball DESC";
$statement = $con->query($sql);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_OBJ);

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
        <div class="row mt-2">
            <div class="col-12">
                <h1>Natija</h1>
                <a href="addStudent.php" class="btn btn-primary" style="width:100px">Add new</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Imtihonlar soni</th>
                        <th>O'rtacha ball</th>
                    </tr>
                    <?php
                    $a = 1;
                    foreach ($results as $result) { ?>
                        <tr>
                            <td><?= $a?></td>
                            <td><?= $result->name ?></td>
                            <td><?= $result->count ?></td>
                            <td><?= $result->ball?></td>
                        </tr>
                    <?php 
                    $a +=1; } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>