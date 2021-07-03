<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
	die('could not connect:'.mysqli_error());
}
mysqli_select_db($con,"motors");
$q="select * from directions";
$result=mysqli_query($con,$q); 
while($rows=mysqli_fetch_assoc($result)){
	$D=$rows['direction'];
echo $D;}
?>
