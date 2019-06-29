<?php
$roll = $_GET['roll'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
$db = mysqli_select_db($con,'asian') or die(mysqli_error($con));
$q = "select * from student where roll = $roll";
$result = mysqli_query($con,$q) or die(mysqli_error($con));
$arr = mysqli_fetch_ARRAY($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update form</title>
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
	<form method="post" action="update.php" enctype="multipart/form-data">
		<input type="text" name="roll" value="<?php echo $arr['Roll'] ?>"><h3>Update Form</h3><hr>
		Name : <input type="text" name="name" value="<?php echo $arr['Name'] ?>"><br>
		Address : <input type="text" name="address" value="<?php echo $arr['Address'] ?>"><br>
		<input type="file" name="img" value="<?php echo $arr['image']; ?>">
		<br>
		<input type="submit" name="" value="save">
	</form>
<!-- <?php
//include "updatestudent.php";
?>-->
</body>
</html>