<?php

//for hiding errors
error_reporting(E_PARSE | E_ERROR);

function Createdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hms";

    // create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check Connection
    if (!$con){
        die("Connection Failed : " . mysqli_connect_error());
    }

    // create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "
                        CREATE TABLE IF NOT EXISTS doctor (
                            did INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            dname VARCHAR (25) NOT NULL,
                            addr VARCHAR (50),
                            dob date,
                            email VARCHAR (30) NOT NULL,
                            spl VARCHAR (30),
                            ph VARCHAR (20),
                            expr VARCHAR (30),
                            sal FLOAT
                        );
        ";

        if(mysqli_query($con, $sql)){
            return $con;
        }else{
            echo "Cannot Create table...!";
        }

    }else{
        echo "Error while creating database ". mysqli_error($con);
    }

}
