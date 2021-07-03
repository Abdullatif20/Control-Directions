<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
	die('could not connect:'.mysqli_error());
}
mysqli_select_db($con,"motors");

  if($_POST['submit']=="Forward"){
     $query1 = "update directions SET direction = 'Forward'";}

  else if($_POST['submit']=="Backward"){
     $query1 = "update directions SET direction = 'Backward'";}
	 
  else if($_POST['submit']=="Stop"){
     $query1 = "update directions SET direction = 'Stop'";}
	 
  else if($_POST['submit']=="Right"){
     $query1 = "update directions SET direction = 'Right'";}
	 
    else ($_POST['submit']=="Lift"){
     $query1 = "update directions SET direction = 'Lift'"};

if (!mysqli_query($con,$query1))
{
	die('Error in inserting records');
}
else{
header("location:result.php");
}


?>