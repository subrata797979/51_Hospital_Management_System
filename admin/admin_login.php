
<?php
    //warning for wrong password or username
    session_start();
    //for hiding errors
    error_reporting(E_PARSE | E_ERROR);

    $id=$_SESSION['id'];
    if (isset($id))
    {
        header('location:./admin_dash.php');
    }
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
    
    <title>Admin Login</title>
</head>
<body>
    <?php
        include '../navbar.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 offset-md-3 offset-xl-4 pt-5">
                <div class="login-form bg-light navbar-light mt-4 p-4">
                    <form action="./admin_auth.php" method="POST" class="row g-3">
                        <h3>Welcome Admin</h3>
                        <div class="col-12">
                            <label><h6>Email</h6></label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <label><h6>Password</h6></label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe"> Remember Me</label>
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
                        </div>
                        <div class="col-12">
                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-warning" for="btncheck1">Developer</label>
                            <button type="submit" class="btn btn-outline-primary float-end">Login</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Have not account yet? <a href="#">SignUp</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js files -->
    <script src="../js/custom.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/dark-mode-switch.min.js"></script>
</body>
</html>