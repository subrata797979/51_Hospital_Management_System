<?php
//for hiding errors
//error_reporting(E_PARSE | E_ERROR);
$upOne = dirname(__DIR__, 2);
require_once $upOne . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($upOne);
$dotenv->load();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <!-- custom css -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/dark-mode.css">
    <link rel="stylesheet" href="../../css/fa.css">
</head>

<body>
    <style>
        @media only screen and (min-width: 995px){
            .my-container .row .col-auto table {
                border-collapse: separate;
                border-spacing: 10px; /* cellspacing */
                padding: 20px;
            } 

            .my-container .row .col-auto table tr, table td {
                padding: 20px; /* cellpadding */
            }
        }
    </style>
    <main>
        <?php
            include '../dash_navbar.php';
        ?>
        <section class="p-3 my-container">
            <h1 class="text-center fs-1 m-3 py-3">PATIENT <span class="text-warning">DASHBOARD</span></h1>

            <div class="row justify-content-center">
                <div class="col-auto col-md-6 col col-lg-8 ">
                <table class="table table-striped table-responsive">
                <tbody>
                        <tr>
                            <td class="col-6">Name</td>
                            <td class="col-6">Ethen Hunt</td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>01/24/1988</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>Male</td>
                        </tr>
                        <tr>
                            <td>Blood Type</td>
                            <td>O+</td>
                        </tr>
                        <tr>
                            <td>Occupation</td>
                            <td>Shopkeeper</td>
                        </tr>
                        <tr>
                            <td>Home Address</td>
                            <td>Sealdah, Kolkata</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><a href="mailto:ethenhunt1990@gmail.com">ethenhunt1990@gmail.com</a></td>
                        </tr>
                            <td>Phone Number</td>
                            <td>123-4567-890(Mobile1)<br>555-4567-890(Mobile2)</td> 
                        </tr>
                        <tr>
                            <td>Admit Date</td>
                            <td>23/07/2021</td>
                        </tr>
                        <tr>
                            <td>Discharge Date</td>
                            <td>15/08/2021</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="col-md-12 my-3 text-center">
                <button type="button" class="btn btn-primary">Download Report</button>
                <button type="button" class="btn btn-warning">Download Bill</button>
            </div>
            
        </section>
            
    </main>


    <!-- bootstrap js -->
    <!-- js files -->
    <script src="../../js/bootstrap.bundle.js"></script>
    <script src="../../js/dark-mode-switch.min.js"></script>
</body>

</html>