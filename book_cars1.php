<?php

	include('db.php');
	
	$fname=$_POST["fn"];
	$cname=$_POST["em"];
	$contact=$_POST["cn"];
	$city=$_POST["ci"];
	
	$r=mysqli_query($con,"insert into book_cars(full_name,email,contact_no,city) values('$fname','$cname','$contact','$city')");
	if($r)

	header("location:index.php");
		else
		echo mysqli_error($con);
	?>