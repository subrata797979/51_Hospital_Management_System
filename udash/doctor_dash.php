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

    <!-- css files -->
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dark-mode.css">

    <title>Doctor Dashboard</title>
</head>
<body>
    <div include-html="../sidebar.php" id="sidebar"></div>
    <p>
        I m body
    </p>

    <script src="../js/custom.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/dark-mode-switch.min.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/include-html.min.js"></script>
</body>
</html>