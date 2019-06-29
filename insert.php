<?php
$con = mysqli_connect('localhost','root','') or 
	die("can not establish connection".mysqli_errore($con));
$db = mysqli_select_db($con,'asian') or die(mysqli_error($db));
//echo "Database asian Selected.";
$in = "insert into student values(8,'Babita','ktm','F')";
$result = mysqli_query($con,$in) or die(mysqli_error($con));
if(!$result)
{
	echo "Data inserted Sucessfully";
}
else
{
	mysqli_errore($con);
}
?>