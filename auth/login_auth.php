<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);

$email=$_POST['email'];
$password=$_POST['password'];
$user=$_POST['user'];
echo $user;
$host='localhost';
$dbuser='root';
$dbpass='';

echo $email;
echo $password;

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

	if($num==1)
	{
		if($user!=$role) {
			$_SESSION['msg']="Invalid User Type";
			header('location:../index.php');
		}else {
			$_SESSION['email']=$email;
			$_SESSION['id']=$id;
			$_SESSION['role']=$role;
			header("location:../udash/{$role}_dash.php");
		}
	}else {
		$_SESSION['msg']="Wrong Email or Password";
		header('location:../index.php');
	}

		
}
mysqli_free_result();
mysqli_close();
?>


