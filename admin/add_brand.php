<?php
session_start();
include('head.php');
?>
<html>
	<head>
			<title>
					Add Brand
			</title>

				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="css/bootstrap.css">

				<!-- jQuery library -->
				<script src="js/a.js"></script>

				<!-- Latest compiled JavaScript -->
				<script src="js/b.js"></script>
</head>
<body>
<form action='brand1.php' method='post'>
	<table class='table table-bordered table-hover' align='center' style='width:50%'>
	<tr><td colspan='2' align='center'><h3>Add Brand</h3></td></tr>
	<tr>
				<td colspan='2' align='center'>
					<?php
						if(isset($_SESSION["errb"]))
						echo $_SESSION["errb"];
					?>
				</td>
	</tr>	
	<tr>
			<td>
			Brand
			</td>
			<td>
			<input type='text' name='bd' value='' placeholder='Enter Brand Name here Eg. Audi, BMW, TATA, etc.'class='form-control' required>
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
	</html>
<?php
include('footer.php');
$_SESSION["errb"]="";
?>