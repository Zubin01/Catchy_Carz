<?php
session_start();
include("db.php");

$uname=$_POST["user_name"];
$password=$_POST["pass"];			


$r=mysqli_query($con,"select * from user_registration where username='$uname' and password='$password'");

if($row=mysqli_fetch_array($r))
{
$_SESSION["idd"]=$row[0];
header("location:user_advertisement.php");

}
else
{
	$_SESSION["user_err"]="Invalid User Name And Password";
	header("location:user_login.php");

}


?>