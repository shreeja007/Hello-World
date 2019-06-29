<!DOCTYPE html>
<html>
<head>
	<title>studentform</title>
	<link rel="stylesheet" type="text/css" href="formcss.css" >
	</head>
<body>
	<form method="post" action="studentlist.php" enctype="multipart/form-data">
		Roll no:<input type="number" name="roll"><br>
		Name : <input type="text" name="name"><br>
		Address : <input type="text" name="address"><br>
		<input type="file" name="img"><br>
		<input type="submit" name="" value="save">
	</form>
<!--<?php
//include "updatestudent.php";
?>-->
</body>
</html>