<?php
session_start();
	include('admin/db.php');
	$Username=$_POST["name"];
	$Email=$_POST["email"];
	$Password=$_POST["password"];
	
	$Address=$_POST["ad"];
	$Contact_Number=$_POST["cn"];
	$State=$_POST["st"];
	$City=$_POST["ci"];
	$Pincode=$_POST["pn"];
	$Gender=$_POST["r1"];
	
	
	$r=mysqli_query($con,"insert into user_registration(username,email,password,address,contact_number,state,city,pincode,gender) 
	values('$Username','$Email','$Password','$Address','$Contact_Number','$State','$City','$Pincode','$Gender')");
	
	if($r)
	{
	$_SESSION["user_err"]="Record Insert Successfully";
	header("location:home.php");
	}
?>