<?php
$roll = $_GET['roll'];//roll get from showdata.php
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));//connect to database
//echo "Connected";
$db	= mysqli_select_db($con,'asian') or die(mysqli_error($con));//connect to particular database named
//echo "Selected";
$q = "select * from student where roll = $roll";//query to select a table
//echo "Connected";
$result = mysqli_query($con,$q) or die(mysqli_error($con));
//echo "Selected";
$arr = mysqli_fetch_array($result,MYSQLI_ASSOC);
//print_r($arr); // check if data is retrived or not
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo "$arr[Name]"; ?></title>
</head>
<body>
<p align="center" border=1px>
	<img src="<?php echo "image/$arr[image]" ?>" style="height:250px;width:200px;"><br>
	<b>
	Roll no. : <?php echo "$arr[Roll]" ?><br>
	Name : <?php echo "$arr[Name]" ?><br>
	Address : <?php echo "$arr[Address]" ?><br>
	</b>
</p>
<p align="center"><b><a href="showdata.php">Go to Name_List</a></b></p>
</body>
</html>