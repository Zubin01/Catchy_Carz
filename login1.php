<?php
session_start();

	include('db.php');
	
	$username=$_POST["user_name"];
	$pass=$_POST["password"];
	$page=$_POST["page_name"];
	$rem=$_POST["rem"];
	
	if($rem=="")
	{
	}
	else
	{
	$cookie_name = "user";
	$cookie_value = "$username";
	
	$cookie_pass = "pass";
	$cookie_value1 = "$pass";
	
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

	setcookie($cookie_pass, $cookie_value1, time() + (86400 * 30), "/");


	}
	
	$r=mysqli_query($con,"select * from  user_registration where email='$username' and password='$pass'");

	if($rows=mysqli_Fetch_array($r))
	{
		$_SESSION["idd"]=$rows[0];
		$_SESSION["username"]=$rows[1];
		?>
		
		<script>
		
		
		window.location.href="<?php  echo $page ?>";
		</script>
		<?php
	}
	else
	{

	if(!isset($_SESSION["counts"]))
	 $_SESSION["counts"]=0;
	
	$i=$_SESSION["counts"];
	$i=$i+1;
	$_SESSION["counts"]=$i;
	echo $_SESSION["counts"];
	echo "Invalid UserName And password";
	
	if($_SESSION["counts"]==3)
		{
		
		
		?>
		
				<script>
				document.getElementById("btn1").value="Disabled";
					
					document.getElementById("btn1").disabled=true;
					var i=10;
				
				
				function ab()
				{
				if(i==1)
				window.location.href='as.php'
				else
				document.getElementById("login_success").innerHTML="Wait For "+i +"Seconds"
				i--;
				setTimeout("ab()",1000);
				}
					ab();
				
				</script>
		<?php
	}}
	
	
?>

