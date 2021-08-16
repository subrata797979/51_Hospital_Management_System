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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css files -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/dark-mode.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/fa.css">
    <link rel="stylesheet" href="../../css/card.css">

    <title>Admin Dashboard</title>
</head>

<body>
    <?php
        include './admin_sidebar.php';
    ?>

    <main>

        <?php
        include '../dash_navbar.php';
        ?>

        <article>
            <h1 class="text-center fs-1 mt-3">ADMIN <spand class="text-warning">DASHBOARD</span></h1>
            <div class="container mt-5 mb-3 align-self-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card p-3 m-3">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                                    <div class="ms-2 c-details">
                                        <h6 class="mb-0">Doctor</h6> <span>1 days ago</span>
                                    </div>
                                </div>
                                <div class="badge"> <span>Recently Added</span> </div>
                            </div>
                            <div class="mt-5">
                                <h3 class="heading">Dr. Ekadanta  Malhotra<br>Ahmedabad</h3>
                                <div class="mt-5">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-3"> <span class="text1">12 Active <span class="text2">of 30 capacity</span></span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 m-3">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="icon"> <i class="bx bxl-dribbble"></i> </div>
                                    <div class="ms-2 c-details">
                                        <h6 class="mb-0">Patient</h6> <span>4 days ago</span>
                                    </div>
                                </div>
                                <div class="badge"> <span>Recently Added</span> </div>
                            </div>
                            <div class="mt-5">
                                <h3 class="heading">Sur  Patel<br>Mumbai</h3>
                                <div class="mt-5">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-3"> <span class="text1">42 Active <span class="text2">of 70 capacity</span></span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                            <div class="card p-3 m-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="icon"> <i class="bx bxl-reddit"></i> </div>
                                        <div class="ms-2 c-details">
                                            <h6 class="mb-0">Receptionist</h6> <span>2 days ago</span>
                                        </div>
                                    </div>
                                    <div class="badge"> <span>Recently Added</span> </div>
                                </div>
                                <div class="mt-5">
                                    <h3 class="heading">Vijaya  Mohabir <br>Kolkata</h3>
                                    <div class="mt-5">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-3"> <span class="text1">2 Active <span class="text2">of 5 capacity</span></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-3 m-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="icon"> <i class="bx bxl-reddit"></i> </div>
                                        <div class="ms-2 c-details">
                                            <h6 class="mb-0">Employee</h6> <span>2 days ago</span>
                                        </div>
                                    </div>
                                    <div class="badge"> <span>Recently Added</span> </div>
                                </div>
                                <div class="mt-5">
                                    <h3 class="heading">Nikitha  Das <br>Mumbai</h3>
                                    <div class="mt-5">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-3"> <span class="text1">52 Active <span class="text2">of 100 capacity</span></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var today= new Date();
                var hourNow = today.getHours();
                var greeting;
                if (hourNow > 18) {
                greeting= 'Good evening!'; }
                else if (hourNow > 12) {
                greeting = ' Good afternoon!'; }
                else if (hourNow > 0) {
                greeting = 'Good morni ng!'; }
                else {
                greeting = 'Welcome! ' ; }
                document.write("<h4 class='text-center m-5'><span class='text-warning'>"+ greeting +"</span> ADMIN<h4>");
            </script>
        </article>

    </main>
    <!-- js files -->
    <script src="../../js/bootstrap.bundle.js"></script>
    <script src="../../js/dark-mode-switch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>