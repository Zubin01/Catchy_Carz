<?php
session_start();
?>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>
</title>
</head>
<body>
	<div>
	<form action="news1.php" method="POST" > 
	<table class="table table-bordered table-hover" style='width:50%' align='center'>
		<tr>
		<td colspan='2' align='center'>
		<h3>Add News Here</h3>
		</td>
		</tr>
		<tr>		
			<td>
			Enter News Title :
			</td>
			<td>
			<input type="text" name='nt' class='Form-control' value="" placeholder="Enter news title here">
			</td>
		</tr>
		<tr>
			<td>
			Enter news [Elaborated] here :
			</td>
			<td>
			<textarea name='en' class='Form-control' value="" placeholder="Enter news here">
			</textarea>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
			<input type='submit' class='btn btn-primary' name='btn5' value='Add news'>
			</td>
			</tr>
	</table>
	</div>
</body>
</html>
<?php
$_SESSION["news_err"]="";
?>