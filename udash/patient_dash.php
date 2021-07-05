<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
</head>
<body>
    <h1>This is patient dashboard</h1>
    <p>
        Id : 
        <?php
                $id=$_SESSION['id'];
                echo $id;
        ?>
    </p>
</body>
</html>