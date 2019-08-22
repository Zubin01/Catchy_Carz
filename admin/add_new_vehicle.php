<?php
session_start();
include('head.php');
?>
<html>
	<head>
			<title>
					Add New Vehicle
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
<form action='vehicle.php' method='post' ENCTYPE="multipart/form-data">
	<table class='table table-bordered table-hover' align='center' style='width:50%'>
	<tr><td colspan='2' align='center'><h3>Add New Vehicle</h3></td></tr>
	
	<tr>
			<td>
			Vehicle Name
			</td>
			<td>
			<input type='text' name='vn' value='' placeholder='Enter Vehicle Name here' class='form-control' required>
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
			Color
			</td>
			<td>
			<input type='text' name='cl' value='' placeholder='Enter Vehicle color here' class='form-control' required>
			</td>
	</tr>
		<tr>
			<td>
			Vehicle Price
			</td>
			<td>
			<input type='text' name='vp' value="" class='form-control' placeholder='Enter vehicle price here' required>
			</td>
	</tr>
		<tr>
			<td>
			Fuel Type
			</td>
			<td>
			<input type='text' name='ft' value="" class='form-control' placeholder='Diesel/Petrol' required>
			</td>
	</tr>
	<tr>
			<td>
			Transmission
			</td>
			<td>
			<select class='form-control' name='tr'>
				<option value='Manual'>Manual</option>
				<option value='Automatic'>Automatic</option>
				<option value='Both A & M'>Both A & M</option>
			</select>
			</td>
	</tr>
		<tr>
			<td>
			Engine Displacement
			</td>
			<td>
			<input type='text' name='ed' value="" class='form-control' placeholder='Eg.1500 cc' required>
			</td>
	</tr>
	<tr>
			<td>
			Mileage
			</td>
			<td>
			<input type='text' name='me' value="" class='form-control' placeholder='Eg.20 kmpl' required>
			</td>
	</tr>
	<tr>
			<td>
			Air Conditioning
			</td>
			<td>
			<select class='form-control' name='ac'>
			<option value='Yes'>Yes</option>
			<option value='No'>No</option>
			</td>
	</tr>
	<tr>
			<td>
			Airbags
			</td>
			<td>
			<select class='form-control' name='ab'>
			<option value='Yes'>Yes</option>
			<option value='No'>No</option>
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
$_SESSION["errv"]="";
?>
