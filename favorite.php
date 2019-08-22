<?php
session_start();
	include('db.php');
	
	$car_id=$_REQUEST["a"];
	$user_id=$_SESSION["idd"];

	
	$r=mysqli_query($con,"insert into favorites(user_id,car_id)values('$user_id','$car_id')");
if($r)
	header("location:new_cars.php");
	
	
	?>