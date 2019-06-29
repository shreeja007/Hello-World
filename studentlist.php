<?php $roll = $_POST["roll"]; 
$name = $_POST["name"]; 
$address = $_POST["address"]; 
$filename = $_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],"image/$filename");
$con = mysqli_connect('localhost','root','') or
die(mysqli_error($con)); $db = mysqli_select_db($con,'asian') or
die(mysqli_error($con)); 
$q = "insert into student values('$roll','$name','$address','$filename')"; 

$result = mysqli_query($con,$q);
/*$q = "insert into student (Name,Address) values('$name','$address')"; $result = mysqli_query($con,$q);*/
if($result){
	echo "Data Inserted";
	header("location:showdata.php");
}

else {
die(mysqli_error($con)); }

?>