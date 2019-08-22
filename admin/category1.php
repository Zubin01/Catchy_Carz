<?php
session_start();
	include('db.php');
	
	$cname=$_POST["cate_name"];
	
	$r=mysqli_query($con,"insert into add_category(category_name) values('$cname')");
	
	if($r)
	{
	$_SESSION["err"]="Record Insert Successfully";
	header("location:cn.php");
	}
?>