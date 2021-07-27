<?php 
    $sid=$_COOKIE['PHPSESSID'];
    session_id($sid);
    session_start();
    //for hiding errors
    // error_reporting(E_PARSE | E_ERROR);
   
    require_once __DIR__ . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    $role = $_SESSION['role'];

    if(isset($sid)) {
        session_destroy();
        setcookie('PHPSESSID', '', time() - 86400,'/');
        header("location:{$_ENV['HTTP']}");
    }
?>