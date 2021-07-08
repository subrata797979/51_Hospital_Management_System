<?php 
    //warning for wrong password or username
    session_start();
    //for hiding errors
    error_reporting(E_PARSE | E_ERROR);

    require_once __DIR__ . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $id = $_SESSION['id'];
    $role = $_SESSION['role'];
    
    if (isset($id)) {
        session_destroy();
        if($role=='Admin') {
            header('location:./admin/admin_login.php');
        }
        else {
            header("location:{$_ENV['HMS']}");
        }
        
    }
?>