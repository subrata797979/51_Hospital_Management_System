<?php
    //warning for wrong password or username
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

    <link rel="icon" href="./images/head.png" type="image">

    <!-- css files -->
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/dark-mode.css">


    <!-- tittle -->
    <title>HMS</title>
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

    


    <!-- Showcase -->
    <section class="text-sm-start s1 pt-5">
        <div class="container">

            <!-- Row 2 -->
            <div class="row ">

                <div class="col-md col-lg-7 col-xxl-7 align-self-center">
                    <img class="img-fluid mx-auto d-block joinus " src="./images/doctor.png" alt="Responsive image">

                </div>

                <div class="col-sm col-md-6 col-lg-5 col-xxl-5 p-5 align-self-center ">

                    <form method=POST action="./auth/auth.php">
                        <!-- Card -->
                        <div class="card bg-light shadow">
                            <!-- Card Head -->
                            <div class="card-header">
                                
                                <div class="row">
                                    <div class="col align-self-center font-weight-bold fs-3">
                                        Login as
                                    </div>
                                    <div class="col">
                                        <select class="form-control select-field" name='user' aria-label="Default select example">
                                            <option selected value="Patient">Patient</option>
                                            <option value="Doctor">Doctor</option>
                                            <option value="Employee">Employee</option>
                                            <option value="Receptionist">Receptionist</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="mb-3">
                                    <input type="email" class="form-control input-field" name="email" placeholder="Email" required>
                                </div>
                                
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control input-field" placeholder="Password" required>  
                                    <span id="passwordHelpInline" class="form-text mb-3">
                                        Must be 8-20 characters long.
                                    </span>                              
                                </div>
                                
                                <div class="mb-3 form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
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
        

    <!-- What is HMS ? -->
    <script src="./js/custom.js"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/dark-mode-switch.min.js"></script>
    

</body>
</html>

