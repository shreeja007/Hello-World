<?php
$con = mysqli_connect('localhost','root','') or 
	die("can not establish connection".mysqli_error($con));
$db = mysqli_select_db($con,'asian') or die(mysqli_error($db));
echo "Database asian Selected.";

?>