<?php
session_start();
include("db.php");

$uname=$_POST["user_name"];
$password=$_POST["pass"];			


$r=mysqli_query($con,"select * from admin_login where username='$uname' and password='$password'");

if($row=mysqli_fetch_array($r))
header("location:home.php");
else
{
	$_SESSION["admin_err"]="Invalid User Name And Password";
	header("location:admin_login.php");

}


?>