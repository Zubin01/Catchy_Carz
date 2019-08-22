<?php
session_start();
	include('db.php');
	
	$vname=$_POST["vn"];
	$category=$_POST["cy"];
	$brand=$_POST["b_name"];
	$expected_price=mysqli_REAL_escape_String($con,$_POST["ep"]);
	$description=mysqli_REAL_escape_String($con,$_POST["dn"]);
	$tmp_name=$_FILES["p1"]["tmp_name"];
	$pname=$_FILES["p1"]["name"];
	

	$r=mysqli_query($con,"insert into upcoming_cars(vehicle_name,category,brand,expected_price,description) 
	values('$vname','$category','$brand','$expected_price','$description')");
	
	if($r)
	{
	
		$id=mysqli_insert_id($con);
		$pnames_arr=array();
		echo $id;
		echo $pname;
		for($i=0;$i<count($pname);$i++)
		{
			$photo_name=$id."$i.jpg";
			array_push($pnames_arr,$photo_name);
			
			move_uploaded_file($tmp_name[$i],"upcoming_Cars/".$photo_name);
		
			
		}
		$str=implode(",",$pnames_arr);
		$r=mysqli_query($con,"update upcoming_cars set photo='$str'  where id='$id'");
	
	$_SESSION["errv1"]="Record Inserted Successfully";
	header("location:upcoming_cars.php");
	}
	else
	echo mysqli_error($con);
?>