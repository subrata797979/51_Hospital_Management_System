<?php 
    session_start();
    if(!isset($_SERVER['HTTP_REFERER'])) {
        // redirect them to your desired location
        $_SESSION['direct']='<script>alert("Direct access not allowed!")</script>';
        header("location:../index.php");
        exit('Direct Access Not allowed');
    }
?>