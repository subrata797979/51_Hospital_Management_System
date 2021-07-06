<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);
require "../auth/direct_access_auth.php";
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
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="#" class="navbar-brand"><h2>INSS Hospital Pvt. Lt.</h2></a>
            <div class="form-check form-switch">
                <label class="label" for="darkSwitch">Dark Mode</label>
                <input type="checkbox" class="form-check-input" id="darkSwitch" />
            </div>

            <button class="btn btn-primary navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto text-center ">
                    <li class="nav-item">
                        <a href="#register" class="nav-link text-warning">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a href="#login" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
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