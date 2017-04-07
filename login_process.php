<?php
include_once 'dbattributes.php';
$user = $_POST['username'];
$password = $_POST['password'];

$table = 'user';
$dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = "SELECT * FROM $table WHERE username='$user'";
$result = $dbh->query($stmt);
$arr = $result->fetch(PDO::FETCH_ASSOC);
if ($arr != NULL) {
  session_start();
  $_SESSION['user']=$arr['username'];
  $_SESSION['storeNumber']=$arr['storeNumber'];
  include 'landing.php';
} else {
  echo "Something went wrong...";
}
?>
