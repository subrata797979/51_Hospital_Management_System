<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);
require "{$_ENV['HMS']}/auth/dashboard_auth.php";
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
    <?php
        include '../navbar.php';
    ?>
    
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php
                include '../sidebar.php';
            ?>
            <div class="col p-3 align-self-center bg-danger">
                Content area...
            </div>
        </div>
    </div>

    

    <!-- js files -->
    <script src="../js/custom.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/dark-mode-switch.min.js"></script>

</body>
</html>