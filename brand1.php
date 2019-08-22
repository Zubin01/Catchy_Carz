<?php
session_start();
	include('db.php');
	
	$bname=$_POST["b_name"];
	
	$r=mysqli_query($con,"insert into add_brand(brand) values('$bname')");
	
	if($r)
	{
	$_SESSION["errb"]="Record Inserted Successfully";
	header("location:add_new_vehicle.php");
	}
?>