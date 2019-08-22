<?php

	include('db.php');
	
	$fname=$_POST["name"];
	$email=$_POST["email"];
	$contact=$_POST["phone"];
	$city=$_POST["cy"];
	$up_car_id=$_POST["id"];
	$r=mysqli_query($con,"insert into upcoming_car_info(name,email,contact_no,city,up_car_id) values('$fname','$email','$contact','$city','$up_car_id')");
	if($r)

	header("location:index.php");
		else
		echo mysqli_error($con);
	?>