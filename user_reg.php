<?php
session_start();
?>
<html>
	<head>
			<title>
					User Registration
			</title>

				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

				<!-- jQuery library -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

				<!-- Latest compiled JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
<body>
<form action='user1.php' method='post'>
	<table class='table table-bordered table-hover' align='center' style='width:50%'>
	<tr><td colspan='2' align='center'><h3>User Registration</h3></td></tr>
	
	<tr>
			<td>
			User Name
			</td>
			<td>
			<input type='text' name='un' value='' placeholder='Enter Username here'class='form-control' required>
			</td>
	</tr>
	<tr>
			<td>
			Email Address
			</td>
			<td>
			<input type='text' name='ea' value='' placeholder='Enter email address here'class='form-control' required>
			</td>
	</tr>
	<tr>
			<td>
			Password
			</td>
			<td>
			<input type='password' name='ps' value='' placeholder='********'class='form-control' required>
			</td>
	</tr>
	<tr>
			<td>
			Address
			</td>
			<td>
			<textarea name='ad' class='form-control' required>
			</textarea>
			</td>
	</tr>
		<tr>
			<td>
			Contact Number
			</td>
			<td>
			<input type='text' name='cn' value='' placeholder='Eg. +91-9876543210'class='form-control' required>
			</td>
		</tr>
	<tr>
		<td>
			State
		</td>
		<td>
			<select name='st' required>
			<option value='Rajasthan'>Rajasthan</option>
			<option value='Punjab'>Punjab</option>
			<option value='Gujarat'>Gujarat</option>
			<option value='Haryana'>Haryana</option>
			<option value='Other'>Other</option>
			</select>
		</td>
	</tr>
	<tr>
			<td>
			City
			</td>
			<td>
			<input type='text' name='ci' value='' placeholder='Enter city name'class='form-control' required>
			</td>
	</tr>
	<tr>
			<td>
			PinCode
			</td>
			<td>
			<input type='text' name='pn' value='' placeholder='Eg.313001'class='form-control' required>
			</td>
	</tr>
	<tr>
		<td>
			Gender
		</td>
		<td>
				<input type='radio' name='r1' value='Male' >Male
				<input type='radio' name='r1' value='Male' >Female
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>
			<input type="submit" value="Send" class="form-control btn btn-primary"
			style='width:160px;'>
		</td>
	</tr>
	
			
	</table>
</body>
</form>
</html>
<?php
$_SESSION["user_err"]="";
?>