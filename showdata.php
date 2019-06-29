<!DOCTYPE html>
<html>
<head>
	<title>studentlist</title>
		<script type="text/javascript">
		/*function dele(){
			return confirm("Are you sure to delete?");
		}*/
	</script>
	<style type="text/css">
		table{
			border-radius: 5px;
			border:2px solid purple;
				}
			td,th{
			border:2px solid purple; 
			border-radius: 2px;
				}
	</style>
	<link rel="stylesheet" type="text/css" href="formcss.css">
</head>
<body>

	<h2><u>The Student List Contains</u></h2>
<?php
$con = mysqli_connect('localhost','root','') or die('can not connect database');
mysqli_select_db($con,'asian');
$q = "select * from student";
$result = mysqli_query($con, $q) or die(mysqli_error($con));
echo "<table border=1 cellpadding='5px' cellspacing='0px'>";
echo "<tr>";
echo "<th>Roll</td>";
echo "<th>Name</td>";
echo "<th>Address</td>";
echo "<th colspan='3'>Action</th>";
echo "</tr>";
/*$arr = mysqli_fetch_array($result,MYSQLI_ASSOC);
print_r($arr);	to show data of above array			*/
while($arr = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	echo "<tr>";
	echo "<td>".$arr['Roll']."</td>";
	echo "<td>".$arr['Name']."</td>";
	echo "<td>".$arr['Address']."</td>";
	echo "<td><a href='updateform.php?roll=".$arr['Roll']."'>edit</a></td>";
	echo "<td><a href='deleteData.php?roll=".$arr['Roll']."' onclick='return confirm(\"Are you sure to delete?\");'>Delete</a></td>";
	echo "<td><a href='viewpage.php?roll=".$arr['Roll']."'>view</a></td>";
	echo "</tr>";
}
?>
<table cellspacing=""></table>
<div id="form"><h2>Add More Data Here.</h2><hr style="Width:100%;float:left;margin-top:-10px;">
<?php	
include "form.php";
?>
</div>
<!--<form method="post" action="studentlist.php">
		Roll no:<input type="number" name="roll"><br>
		Name : <input type="text" name="name"><br>
		Address : <input type="text" name="address"><br>
		<input type="submit" name="" value="save">
	</form>-->
<div id="form">
<h2>If any data is Mistake You can Update Here.</h2><hr style="Width:100%;float:left;margin-top:-10px;">
<!--<?php
//include "updateform.php";
?>-->


	<form method="post" action="updatestudent.php">
		Roll no:<input type="number" name="roll"><br>
		Name : <input type="text" name="name"><br>
		Address : <input type="text" name="address"><br>
		<input type="submit" name="btn" value="Update">
	</form>

</div>
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
}
else
{
	die(mysqli_error($con));
}

?>
</body>
</html>