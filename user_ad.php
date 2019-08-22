<?php
session_start();
	include('admin/db.php');
	$Username=$_POST["un"];
	$Category=$_POST["c_name"];
	$Vehicle_Name=$_POST["vn"];
	$Email_Address=$_POST["ea"];
	$Photo=$_FILES["p1"]["name"];
	$Price=$_POST["pr"];
	$Address=$_POST["ad"];
	$Contact_No=$_POST["cn"];
	$Description=$_POST["de"];
	$id=$_SESSION["idd"];
	
	
		$tmp_name=$_FILES["p1"]["tmp_name"];
	$pname=$_FILES["p1"]["name"];

	$r=mysqli_query($con,"insert into user_advertisement(username,category,vehicle_name,email_address
	,price,address,
	contact_no,description,user_id) 
	values('$Username','$Category','$Vehicle_Name','$Email_Address','$Price','$Address','$Contact_No','$Description'
	,'$id')");
	
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
			
			move_uploaded_file($tmp_name[$i],"advertisement_photo/".$photo_name);
		
			
		}
		$str=implode(",",$pnames_arr);
		$r=mysqli_query($con,"update user_advertisement set photo='$str'  where id='$id'");

	$_SESSION["user_err1"]="Record Insert Successfully";
	header("location:index.php");
	}
	else
	echo mysqli_error($con);
?>