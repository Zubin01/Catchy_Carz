<?php
session_start();
	include('db.php');
	
	$vname=$_POST["vehicle_name"];
	$cname=$_POST["c_name"];
	
	$r=mysqli_query($con,"insert into vehicles(category_name,vehicle_name) values('$cname','$vname')");
	
	if($r)
	{
	$_SESSION["err"]="Record Insert Successfully";
	header("location:add_vehicle_name.php");
	}
?>