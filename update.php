<?php
$roll = $_POST["roll"];
$name = $_POST["name"];
$address = $_POST["address"];
$filename = $_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],"image/$filename");

//move_uploaded_file($_FILES['img']['tmp_name'],"image/$filename");
//echo "Roll = $roll \t Name = $name \t Address = $address";
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
$db = mysqli_select_db($con,'asian') or die(mysqli_error($con));
$q = "update student set Name = '$name', Address = '$address', image='$filename' where Roll=$roll";
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
<!DOCTYPE html>
<html>
<head>
	<title>update <?php echo "$arr[Name]" ?></title>
</head>
<body>
<!--<img src="<?php echo "image/$filename" ?> " style="height:300;width:300;">
--></body>
</html>