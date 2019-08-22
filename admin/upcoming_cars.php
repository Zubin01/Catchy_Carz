<?php
include("head.php");
?>
<?php
session_start();
?>
<html>
	<head>
			<title>
					Add New Vehicle [Upcoming Cars]
			</title>

				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="css/bootstrap.css">

				<!-- jQuery library -->
				<script src="js/a.js"></script>

				<!-- Latest compiled JavaScript -->
				<script src="js/b.js"></script>

				
				<script>
				
					$(document).ready(function()
					{
						$("#btn1").click(function()
						{
						$("#mores").append("<br/><input type='file' name='p1[]'>");
						});
					});
				</script>
	</head>
<body>
<form action='upcoming.php' method='post' ENCTYPE="multipart/form-data">
	<table class='table table-bordered table-hover' align='center' style='width:50%'>
	<tr><td colspan='2' align='center'><h3>Add New Vehicle</h3></td></tr>
	
	<tr>
			<td>
			Vehicle Name
			</td>
			<td>
			<input type='text' name='vn' value='' placeholder='Enter vehicle Name here' class='form-control' required>
			</td>
	</tr>
	<tr>
			<td>
			Category
			</td>
			<td>
			<select class='form-control' name='cy'>
				<option value='Hatchback'>Hatchback</option>
				<option value='Sedan'>Sedan</option>
				<option value='SUV'>SUV</option>
				<option value='Sports'>Sports</option>
				<option value='Exotic'>Exotic</option>
				<option value='MPV'>MPV</option>
				<option value='Coupe'>Coupe</option>
			</td>
	</tr>
	
		<tr>
			<td>
			Brand
			</td>
			<td>
				
					<?php
						include('db.php');
						$r=mysqli_query($con,"select * from add_brand");
						echo "<select class='form-control' name='b_name'>";
						while($row=mysqli_fetch_array($r))
						{
						echo "<option  value='$row[1]'>$row[1]</option>";
						}
					?>
		</tr>
		<tr>
			<td>
			Expected Price
			</td>
			<td>
			<input type='text' name='ep' value="" class='form-control' placeholder='Enter vehicle price here [Expected]' required>
			</td>
	</tr>
	<tr>
			<td>
			Photo
			</td>
			<td>
			
			
			<input type='file' name='p1[]'>
			<input type="button"  id='btn1' value="+" class="form-control btn btn-default"
			style='width:50px;'>
			
			<span id='mores'>
			
			
			</span>
			</td>
	</tr>
	
	<tr>
	<td>
	Description
	</td>
	<td>
	<textarea name='dn' placeholder='Enter description here' class='form-control'> 
	</textarea>
	</td>
	</tr>
	<tr>
		<td align='center' colspan='2'>
			<input type="submit" value="Submit" class="form-control btn btn-primary"
			style='width:160px;'>		
		</td>
		
	</tr>
	</table>
</body>
</form>
</html>
<?php
include("footer.php");
?>
<?php
$_SESSION["errv1"]="";
?>