<?php
session_start();
?>
<html>
	<head>

			<title>
					Add Vehicle Name
			</title>

				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

				<!-- jQuery library -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

				<!-- Latest compiled JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
	<body>
	
	<div class='container'>
		<form action='vehicle1.php' method='post'>
			<table align='center' class='table table-bordered' style="width:50%">
			<tr>
				<td colspan='2' align='center'>
					<?php
						if(isset($_SESSION["err1"]))
						echo $_SESSION["err1"];
					?>
				</td>
			</tr>
			<tr>
				<td colspan='2' align='center'>
					<h3>
					Add Vehicle Name
					</h3>
				</td>
			</tr>
			<tr>
				<td>Category Name</td>
				
				<td>
				
					<?php
						include('db.php');
						$r=mysqli_query($con,"select * from add_category");
						echo "<select class='form-control' name='c_name'>";
						while($row=mysqli_fetch_array($r))
						{
						echo "<option  value='$row[1]'>$row[1]</option>";
						}
					?>
					</select>
				</td>
				
				
			</tr>
			<tr>
				<td>
					Vehicle Name
				</td>
				<td>
					<input class='form-control' placeholder='Enter Vehicle name' id='v1' name='vehicle_name' type='text'>
				</td>
			</tr>
			<tr>
				<td colspan='2' align='center'>
					<input type="submit" value="Send" class="form-control btn btn-primary"
					style='width:160px;'>
				</td>
			</tr>
		</table>
	</form>
</div>	
</body>
</html>
<?php
$_SESSION["err1"]="";
?>