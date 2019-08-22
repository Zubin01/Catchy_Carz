<?php
session_start();
?>
<html>
	<head>

			<title>
					Add Category
			</title>

			<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

				<!-- jQuery library -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

				<!-- Latest compiled JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
	<body>

<div class="container">
  
  <form action='category1.php' method='post'>
			<table align='center' style='width:50%' class='table table-bordered  table-stripped'>
			
			<tr>
				<td colspan='2' align='center'>
					<?php
						if(isset($_SESSION["err"]))
						echo $_SESSION["err"];
					?>
				</td>
			</tR>
			<tr>
			
			<td colspan='2'	align='center'>
			<h2>
			Add Category
			</hr>
			</td>
			</tr>
			<tr><td>Category Name</td>
			
			<td>
				<input class="form-control" placeholder="Enter Category name" id="ex1"  name='cate_name' type="text">
      </td>
	  </tr>
	  <tr>
	  <td colspan='2' align='center'>
	  
		<input type="submit" value="Send" class="form-control btn btn-primary"
		  style='width:160px;'>
	
	</td></tr>
	</table>
	</form>
	</div>
	</div>
	
  </form>
</div>
	
			<?php
			
			$_SESSION["err"]="";
			?>