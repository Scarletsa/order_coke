<?php
session_start();
$info = pathinfo($_FILES['userFile']['name']);
$ext = $info['extension']; // get the extension of the file
$newName = "date.".$ext;
$target = 'userdata/'.$_SESSION['storeNumber'].'/'.$newName;
move_uploaded_file($_FILES['userFile']['tmp_name'], $target);
$contents = file_get_contents($target);
$beginDate = "/Begin Date:\s[0-9]+\/[0-9]+\/[0-9]+/";
$endDate = "/End Date:\s[0-9]+\/[0-9]+\/[0-9]+/";
preg_match($beginDate, $contents, $matches);
$string = explode('/', $matches[0]);
$numbers = "/[0-9]+/";
preg_match($numbers, $string[0], $matches);
if (strlen($matches[0])==1) {
  $matches[0] = '0'.$matches[0];
}
if (strlen($string[1])==1) {
  $string[1] = '0'.$string[1];
}
$nameStart = $string[2].'_'.$matches[0].'_'.$string[1];
preg_match($endDate, $contents, $matches);
$string = explode('/', $matches[0]);
$numbers = "/[0-9]+/";
preg_match($numbers, $string[0], $matches);
if (strlen($matches[0])==1) {
  $matches[0] = '0'.$matches[0];
}
if (strlen($string[1])==1) {
  $string[1] = '0'.$string[1];
}
$nameEnd = $string[2].'_'.$matches[0].'_'.$string[1].".".$ext;
$finalName = $nameStart . " - " . $nameEnd;
$final = 'userdata/'.$_SESSION['storeNumber'].'/'.$finalName;
rename($target , $final);
include 'upload_files.php';
?>
