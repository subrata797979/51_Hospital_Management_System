<?php 
    //warning for wrong password or username
    session_start();
    //for hiding errors
    //error_reporting(E_PARSE | E_ERROR);

    require_once __DIR__ . '/../vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();

    $id = $_SESSION['id'];
    $role = $_SESSION['role'];
    $hms = $_ENV['HMS'];

    echo "This is working";
    
    if (!isset($id)) {
        $_SESSION['dash_msg']='<script>alert("Please Login first!")</script>';
        if($role=='Admin') {
            header('location:./admin/admin_login.php');
        }
        else {
            header("location:{$_ENV['HMS']}");
        }        
    }
    else {
        if($role=='Admin') {
            header("location:{$hms}/admin/admin_dash.php");
        }
        else {
            header("location:{$hms}/udash/{$role}_dash.php");
        }
    }
?>
