<!DOCTYPE html>
<html>
<head>
	<title>update studentform</title>
	<style type="text/css">
		input{
			padding:3px;
			margin:3px;
			font-size: 15px;
		}
		input[type='submit']{
			padding: 5px;
			width: 15%;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<form method="post" action="updatestudent.php">
		Roll no:<input type="number" name="roll"><br>
		Name : <input type="text" name="name"><br>
		Address : <input type="text" name="address"><br>
		<input type="submit" name="btn" value="Update">
	</form>

</body>
</html>
<?php
//$update = $_POST["update"];
if(!(isset($_POST['btn'])))
die();
$roll = $_POST["roll"];
$name = $_POST["name"];
$address = $_POST["address"];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
$db = mysqli_select_db($con,'asian') or die(mysqli_error($con));
$q = "update student set Name = '$name', Address = '$address' where Roll=$roll";
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