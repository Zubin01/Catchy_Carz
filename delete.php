<?php

	include('db.php');
	$id=$_REQUEST["a"];
	
	$r=mysqli_query($con,"delete from user_advertisement where id='$id'");
	
	if($r)
	header("location:inbox.php");

?>