<?php
	$ch = curl_init();

	include('db.php');
	
	$time=$_POST["time"];
	$pc=$_POST["pincode"];
	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	

$user="blazing.guns.3@gmail.com:blaze33";
$receipientno=$phone; 
$senderID="TEST SMS"; 
$msgtxt="Thank You for reaching out to us, You will receive information about offers and discounts on cars as soon as the information is available to us.";
 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; } 
curl_close($ch);

	$r=mysqli_query($con,"insert into advance_booking(time,pincode,name,email,phone) values('$time','$pc','$name','$email','$phone')");
	if($r)

	header("location:index.php");
		else
		echo mysqli_error($con);
	?>