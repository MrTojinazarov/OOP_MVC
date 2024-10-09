<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddFan</title>
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
                    if (isset($_SESSION['fan'])) {
                        echo $_SESSION['fan'];
                        session_unset();
                    }
                    ?>
                </h3>
                <h1>Fan qo'shish</h1>
                <a href="fanlar.php" class="btn btn-primary" style="width:100px">Back</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <form action="addFanSQL.php" method="POST">
                    <div>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <button type="submit" name="submit" class="btn btn-outline-warning" style="margin-top: 30px; width:120px; font-size:15pt;">Save</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>