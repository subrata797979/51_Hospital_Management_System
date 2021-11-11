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

    <title>Doctor Dashboard</title>
</head>

<body>
    <aside class="sidebar">
        <ul class="sidebar-side">
            <li class="logo">
                <a href="#" class="side-link">
                    <span class="link-text logo-text">DOCTOR</span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="angle-double-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x">
                        <g class="fa-group">
                            <path fill="currentColor" d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z" class="fa-secondary"></path>
                            <path fill="currentColor" d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z" class="fa-primary"></path>
                        </g>
                    </svg>
                </a>
            </li>

            <li class="side-item">
                <a href="<?php echo $_ENV['HTTP'] . '/udash/admin/admin_dash.php' ?>" class="side-link">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                    <span class="link-text">Dashboard</span>
                </a>
            </li>

            <li class="side-item">
                <a href="<?php echo $_ENV['HTTP'] . '/udash/admin/admin-patient/admin_patient.php'?>" class="side-link">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
                    <span class="link-text">Patient List</span>
                </a>
            </li>

            <li class="side-item">
                <a href="<?php echo $_ENV['HTTP'] . '/udash/admin/admin-employee/admin_employee.php' ?>" class="side-link">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ambulance" class="svg-inline--fa fa-ambulance fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h16c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm144-248c0 4.4-3.6 8-8 8h-56v56c0 4.4-3.6 8-8 8h-48c-4.4 0-8-3.6-8-8v-56h-56c-4.4 0-8-3.6-8-8v-48c0-4.4 3.6-8 8-8h56v-56c0-4.4 3.6-8 8-8h48c4.4 0 8 3.6 8 8v56h56c4.4 0 8 3.6 8 8v48zm176 248c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path></svg>
                <span class="link-text">Employee List</span>
                </a>
            </li>

            <li class="side-item" id="themeButton">
                <a href="<?php echo $_ENV['HTTP'] . '/udash/admin/admin-receptionist/admin_receptionist.php' ?>" class="side-link">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="concierge-bell" class="svg-inline--fa fa-concierge-bell fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M288 130.54V112h16c8.84 0 16-7.16 16-16V80c0-8.84-7.16-16-16-16h-96c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16h16v18.54C115.49 146.11 32 239.18 32 352h448c0-112.82-83.49-205.89-192-221.46zM496 384H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h480c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z"></path></svg>
                <span class="link-text">Provide Feedback</span>
                </a>
            </li>
        </ul>
    </aside>

    <main>

        <?php
        include '../dash_navbar.php';
        ?>

        <article>
            <h1 class="text-center fs-1 mt-3">DOCTOR <spand class="text-warning">DASHBOARD</span></h1>
            <div class="container mt-5 mb-3 align-self-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card p-3 m-3">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                                    <div class="ms-2 c-details">
                                        <h6 class="mb-0">Employee</h6> <span>1 days ago</span>
                                    </div>
                                </div>
                                <div class="badge"> <span>Recently Added</span> </div>
                            </div>
                            <div class="mt-5">
                                <h3 class="heading">Employee List</h3>
                                <div class="mt-5">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-3"> <span class="text1">12 Active <span class="text2">of 30 capacity</span></span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
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
                                <h3 class="heading">Patient List</h3>
                                <div class="mt-5">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-3"> <span class="text1">42 Active <span class="text2">of 70 capacity</span></span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <div class="card p-3 m-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="icon"> <i class="bx bxl-reddit"></i> </div>
                                        <div class="ms-2 c-details">
                                            <h6 class="mb-0">Feedback</h6> <span>2 days ago</span>
                                        </div>
                                    </div>
                                    <div class="badge"> <span>Recently Added</span> </div>
                                </div>
                                <div class="mt-5">
                                    <h3 class="heading">Provide Feedback</h3>
                                    <div class="mt-5">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-3"> <span class="text1">2 Active <span class="text2">of 5 capacity</span></span> </div>
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
                document.write("<h4 class='text-center m-5'><span class='text-warning'>"+ greeting +"</span> DOCTOR<h4>");
            </script>
        </article>

    </main>
    <!-- js files -->
    <script src="../../js/bootstrap.bundle.js"></script>
    <script src="../../js/dark-mode-switch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>