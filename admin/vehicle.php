<?php
session_start();
	include('db.php');
	
	$vname=$_POST["vn"];
	$category=$_POST["cy"];
	$brand=$_POST["b_name"];
	$vehicle_price=$_POST["vp"];
	$fuel_type=$_POST["ft"];
	$eng_disp=$_POST["ed"];
	$mileage=$_POST["me"];
	$ac=$_POST["ac"];
	$ab=$_POST["ab"];
	$trans=$_POST["tr"];
	$color=$_POST["cl"];
	
	$tmp_name=$_FILES["p1"]["tmp_name"];
	$pname=$_FILES["p1"]["name"];
	
	
	
	$desc=$_POST["dn"];
	$r=mysqli_query($con,"insert into add_vehicle(vehicle_name,category,brand,price,fuel_type,engine_displacement,
	mileage,air_conditioning,air_bags,description,transmission,color) 
	values('$vname','$category','$brand','$vehicle_price','$fuel_type','$eng_disp','$mileage','$ac','$ab','$desc','$trans','$color')");
	
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
			
			move_uploaded_file($tmp_name[$i],"new_cars/".$photo_name);
		
			
		}
		$str=implode(",",$pnames_arr);
		$r=mysqli_query($con,"update add_vehicle set photo='$str'  where id='$id'");
	
	$_SESSION["errv"]="Record Inserted Successfully";
	header("location:add_new_vehicle.php");
	}
	else
	echo mysqli_error($con);
?>