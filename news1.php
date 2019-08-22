<?php
session_start();
	include('admin/db.php');
	$news_title=$_POST["nt"];
	$full_news=$_POST["en"];

	
	
	$r=mysqli_query($con,"insert into latest_news(news_title,news)
	values('$news_title','$full_news')");
	
	if($r)
	{
	$_SESSION["news_err"]="Record Insert Successfully";
	header("location:home.php");
	}
	else
	echo mysqli_error($con);
?>