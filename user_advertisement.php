<?php
session_start();
?>
<html>
	<head>
			<title>
					User Advertisement
			</title>

				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="admin/css/bootstrap.css">

				<!-- jQuery library -->
				<script src="admin/js/a.js"></script>

				<!-- Latest compiled JavaScript -->
				<script src="admin/js/b.js"></script>
<script>
				
					$(document).ready(function()
					{
						$("#btn2").click(function()
						{
						$("#mores").append("<br/><input type='file' name='p1[]'>");
						});
					});
				</script>
	</head>
<body>
<form action='user_ad.php' method='post' enctype="multipart/form-data">

<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>User Advertisement</h3>
									
								</div>							
						</div>
	<table class='table table-bordered table-hover' align='center' style='width:50%'>
	
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
			Category
			</td>
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
			Vehicle name
			</td>
			<td>
			<input type='text' name='vn' value="" class='form-control' placeholder='Enter vehicle name here' required>
			</td>
	</tr>
	<tr>
			<td>
			Email Address
			</td>
			<td>
			<input type='text' name='ea' value='' placeholder='Enter email address here' class='form-control' required>
			</td>
	</tr>
	<tr>
			<td>
			Photo
			</td>
			<td>
			
			
			<input type='file' name='p1[]'>
			<input type="button"  id='btn2' value="+" class="form-control btn btn-default"
			style='width:50px'>
			
			<span id='mores'>
			
			
			</span>
			</td>
	</tr>
	<tr>
			<td>
			Price
			</td>
			<td>
			<input type='text' name='pr' value='' placeholder='Eg. Rs.50000'class='form-control' required>
			</td>
	</tr>
	<tr>
			<td>
			Address
			</td>
			<td>
			<textarea name='ad' class='form-control' placeholder='Enter address here' required>
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
			Description
			</td>
			<td>
			<textarea name='de' class='form-control' placeholder='Enter Description Here' required>
			</textarea>
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
$_SESSION["user_err1"]="";
?>