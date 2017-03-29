<?php
$name = $_POST['startDate'];
$name = str_replace('/', '_', $name);
$info = pathinfo($_FILES['userFile']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = $name.".".$ext;

$target = 'userdata/'.$newname;
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
include 'upload_files.php';
?>
