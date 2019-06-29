<?php
$con = mysqli_connect('localhost','root','');
if(!$con)
{
	die("can not establish connection");
}
else{
	echo "Connection Established sucessfully";
}

?>