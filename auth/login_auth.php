<?php
//for hiding errors
error_reporting(E_PARSE | E_ERROR);
$upOne = dirname(__DIR__, 1);
require_once $upOne . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($upOne);
$dotenv->load();

$email=$_POST['email'];
$password=$_POST['password'];
$user=$_POST['user'];

$con=mysqli_connect($_ENV['LOCALHOST'],$_ENV['DBU']);
$select=mysqli_select_db($con,$_ENV['DB']);
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
	$role=$row['role'];

	if($num==1)
	{
		if($user!=$role) {
			$_COOKIE['msg']="Invalid User Type";
			header('location:'.$_ENV['HTTP'].'/index.php');
		}else {
			session_id($row['id']);
			setcookie('sid',$row['id'],0,'/');
			setcookie('srole',$row['role'],0,'/');
			session_start();
			$_SESSION['role']=$role;
			//echo $_COOKIE['PHPSESSID'];
			if(isset($_POST['remember'])) {
				setcookie('PHPSESSID', '', time() - 86400,'/');
				setcookie('PHPSESSID',$row['id'], time()+60*60*24*30,'/');
			}
			header("location:".$_ENV['HTTP']."/udash/{$role}/{$role}_dash.php");
		}
	}else {
		$_COOKIE['msg']="Wrong Email or Password";
		header('location:'.$_ENV['HTTP'].'/index.php');
	}

		
}
mysqli_free_result($result);
mysqli_close($con);
?>


