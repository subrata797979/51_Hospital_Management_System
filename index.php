<?php
    //for hiding errors
    error_reporting(E_PARSE | E_ERROR);
    
    require_once __DIR__ . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    if(isset($_COOKIE['PHPSESSID'])) {
        $sid=$_COOKIE['sid'];
        $srole=$_COOKIE['srole'];
        header("location:{$_ENV['HTTP']}/udash/{$srole}_dash.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./images/head.png" type="image">

    <!-- css files -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/dark-mode.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- tittle -->
    <title>HMS</title>
</head>
<body>
    
    <?php
        include './navbar.php';
    ?>

    <!-- Showcase -->
    <section class="text-sm-start mt-3">
        <div class="container">
            <!-- Row 2 -->
            <div class="row ">

                <div class="col-md col-lg-6 col-xxl-7 align-self-center">
                    <img class="img-fluid mx-auto d-block joinus pt-2" src="./images/doctor.png" alt="Responsive image">
                </div>

                <div class="col-sm col-md-6 col-lg-6 col-xxl-4 p-5 align-self-center ">

                    <form method=POST action="./auth/login_auth.php">
                        <!-- Card -->
                        <div class="card bg-light shadow-lg">
                            <!-- Card Head -->
                            <div class="card-header">
                                
                                <div class="row">
                                    <div class="col align-self-center font-weight-bold fs-3">
                                        Login as <span class="text-warning"><i class="fas fa-arrow-circle-right"></i></span>
                                    </div>
                                    <div class="col">
                                        <select class="form-control select-field shadow-sm border border-warning" name='user' aria-label="Default select example">
                                            <option selected value="Patient">Patient</option>
                                            <option value="Doctor">Doctor</option>
                                            <option value="Employee">Employee</option>
                                            <option value="Receptionist">Receptionist</option>
                                            <option value="Admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="mb-3 input-group">
                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    <input type="email" class="form-control shadow-sm" name="email" placeholder="Email" required>
                                </div> 
                                <div class="mb-3 input-group">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    <input type="password" name="password" class="form-control shadow-sm" placeholder="Password" required>                              
                                </div> 
                                <div class="mb-3 form-check form-switch">
                                    <input class="form-check-input shadow-sm" type="checkbox" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                                </div>
                                <p>
                                    <?php 
                                        $msg=$_SESSION['msg'];
                                        if (isset($msg))
                                        {
                                            echo $msg;
                                            unset($_SESSION['msg']);
                                        }
                                    ?>
                                </p>
                                <button class="btn btn-outline-warning" type="submit">Sign In</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
                
            </div>


            <div class="row">
                <div class="col-md p-xl-5">
                    <h1>Most reliable doctors and <span class="text-warning">24x7</span> services. </h1>
                    <p class="lead my-4 pt-lg-5 fs-4">
                        In this pandemic, when the whole world is shattered into pieces, 
                        we are trying to our very extent to repaire the damage collecting all the pieces. 
                    </p>
                    <p class="lead fs-6 pt-lg-5 text-secondary">We are working day and night to give someone a good night sleep. </p>
                </div>             
            </div>
            <br>
            
        </div>
    </section>

    <?php
    include './footer.php';
    ?>
    
    <!-- What is HMS ? -->
    <script src="./js/custom.js"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/dark-mode-switch.js"></script>


</body>
</html>

