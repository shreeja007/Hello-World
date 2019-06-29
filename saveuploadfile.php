<?php
print_r($_FILES);
$filename = $_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],"image/$filename");
echo "File Saved to images.";
?>