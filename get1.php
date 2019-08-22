<?php
session_start();
include('admin/db.php');
?>

<style>
p{

color:black;

font-size:12pt;
}

</style>
<?php
$id=$_POST["id"];
$review=$_POST["review"];
echo "
<br/><br/>
<br/>";
$username=$_SESSION["username"];

$r=mysqli_query($con,"insert into add_review(review,car_id,user_name)
values('$review','$id','$username')");
if($r)
;
else
echo mysql_error();
$rr=mysqli_query($con,"select * from add_review where car_id='$id'");
$count=0;
echo "<table style='table-layout: fixed;
    word-wrap: break-word;' class='table ' >";
while($rows=mysqli_fetch_array($rr))
{
	$count++;
  echo "<tr><td width='20%' rowspan='3'>
  <image src='images/download.png'  style='width:60px;height:60px'>
  </td>
  <td>$rows[4]</td><tr>
  <td>
  $rows[3]</td></tr><tr>
  <td style='word-wrap:break-word'>
  
	$rows[2]</td></tr><tr><td colspan='2'>&nbsp;<hr/></td></tr>";
	
}
echo "</table>";

?>
