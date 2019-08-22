<?php
session_start();
?>
<html>
	<head>

			<title>
					Admin Login
			</title>

				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="css/bootstrap.css">

				<!-- jQuery library -->
				<script src="js/a.js"></script>

				<!-- Latest compiled JavaScript -->
				<script src="js/b.js"></script>

	</head>
<body>

	<div class='container'>
		<form action='admin1.php' method='post'>
			<table align='center' class='table table-bordered' style="width:50%">
			<tr>
				<td colspan='2' align='center'>
					<?php
						if(isset($_SESSION["admin_err"]))
						echo $_SESSION["admin_err"];
					?>
				</td>
			</tr>
			<tr>
				<td colspan='2' align='center'>
				<h3>Admin Login
				</h3>
				</td>
			</tr>
			<tr>
				<td>
				User Name
				</td>
				<td>
				<input class='form-control' placeholder='User Name' id='un' name='user_name' type='text'>
				</td>
			</tr>
			
			<tr>
				<td>
				Password
				</td>
				<td>
				<input class='form-control' placeholder='*******' id='pw' name='pass' type='password'>
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
$_SESSION["admin_err"]="";
?>