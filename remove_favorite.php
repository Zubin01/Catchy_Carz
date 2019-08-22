<?php
session_start();
	include('db.php');
	$car_id=$_REQUEST["a"];
	$id=$_SESSION["idd"];
	$r=mysqli_query($con,"delete from favorites where car_id='$car_id' and user_id='$id'");
	
	if($r)
	header("location:view_favorites.php");

?>