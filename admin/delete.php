<?php
	include('db.php');
	
	$id=$_REQUEST["a"];
	
	$r=mysqli_query($con,"delete from add_vehicle where id='$id'");
	
	if($r)
	header("location:view_vehicle.php");

?>