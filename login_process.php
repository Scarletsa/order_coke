<?php
session_start();
include_once 'dbattributes.php';
$user = $_POST['username'];
$password = $_POST['password'];

$table = 'user';
$dbh = new PDO("mysql:host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME.";charset=utf8mb4", DBUSER, DBPASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = "SELECT * FROM $table WHERE username='$user' AND password='$password'";
$result = $dbh->query($stmt);
$arr = $result->fetch(PDO::FETCH_ASSOC);
if ($arr != NULL) {
  $_SESSION['user']=$arr['username'];
  $_SESSION['storeNumber']=$arr['storeNumber'];
  header('Location: home.php');
} else {
  $_SESSION['loginError']='Login or password was incorrect.';
  header('Location: login_form.php');
}
?>
