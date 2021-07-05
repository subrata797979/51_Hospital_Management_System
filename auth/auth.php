<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);

$email=$_POST['email'];
$password=$_POST['password'];
$host='localhost';
$dbuser='root';
$dbpass='';

$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'hms');
if($select!=1)
{
	echo"Error occures to login...".mysqli_connect_error();
    header("HTTP/1.0 404 Not Found");

}
else {
	$q="select * from user where email='$email' && password='$password'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	
	//Retriving username 
	$row=mysqli_fetch_assoc($result);
	$id=$row['id'];
	$role=$row['role'];
	echo $num;
	echo $id;
	echo $role; 


	
	// if($num==1)
	// {
	// 	$_SESSION['email']=$email;
	// 	$_SESSION['id']=$id;
	// 	header("location:../udash/{$role}_dash.php");
	// }else {
	// 	$_SESSION['message']="Wrong Email or Password";
	// 	header('location:../index.php');
	// }

		
}
mysqli_free_result();
mysqli_close();
?>


