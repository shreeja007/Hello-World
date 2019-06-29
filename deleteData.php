<?php
$roll=$_GET['roll'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
$db = mysqli_select_db($con,'asian') or die(mysqli_error($con));
$q = "delete from student where roll=$roll";
$result = mysqli_query($con,$q);
if($result){
	echo "Data changed at $roll";
	header("location:showdata.php");
}
else
{
	die(mysqli_error($con));
}



?>