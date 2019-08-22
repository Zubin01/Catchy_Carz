<?php
session_start();
	include('db.php');
	
	$bname=$_POST["bd"];
	
	$r=mysqli_query($con,"insert into add_brand(brand) values('$bname')");
	
	if($r)
	{
	$_SESSION["errb"]="Record Inserted Successfully";
	header("location:add_brand.php");
	}
?>