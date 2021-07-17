<?php 
    session_start();
    //for hiding errors
    error_reporting(E_PARSE | E_ERROR);
   
    require_once __DIR__ . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    $id = $_SESSION['id'];
    $role = $_SESSION['role'];

    echo "hello";
    echo $id;
    echo $role;
    
    if(isset($id)) {
        session_destroy();
        if($role=='Admin') {
            header("location:{$_ENV['HTTP']}/admin/admin_login.php");
        }   
        else {
            header("location:{$_ENV['HTTP']}");
        }
        
    }
?>