<?php
include("head.php");
?>
<?php
include('db.php');
?>
<style>
td{

color:black;

font-size:12pt;
}

</style>
<?php
echo "<br><Br/><table border='1' align='center' width='98%'><tr><td>Id</td><td>Photo</td><td>Vehicle Name</td>
<td>Category</td><td>Brand</td><td>Vehicle Price</td><td>Fuel Type</td><td>Engine Displacement</td><td>Mileage</td>
<td>Air Conditioning</td><td>Air Bags</td><td>Description</td>
</tr>";
$r=mysqli_query($con,"select * from add_vehicle");

	while($row=mysqli_fetch_array($r))
	{
		$pname=explode(",",$row[10]);
		echo "<tr><td>$row[0]</td>	<td><image src='upload_cars/$pname[0]' height=100 width=100></td>";
		
		
		
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "<td>$row[6]</td>";
		echo "<td>$row[7]</td>";
		echo "<td>$row[8]</td>";
		echo "<td>$row[9]</td>";
		
		
		echo "<td>$row[11]</td>";
		echo "<td><a href='delete.php?a=$row[0]'>Delete</a></td>
			
		</tr>";
		
	}

echo"</table>";
<?php
include("footer .php");
?>